from flask import Flask, render_template, url_for, request
# hc
from transformers import AutoTokenizer, AutoModelForQuestionAnswering
from keras.preprocessing.text import Tokenizer
from keras.utils import pad_sequences
from keras.models import load_model
import pandas as pd
# qa
import torch

# ts
import nltk
from nltk.corpus import stopwords
from nltk.tokenize import word_tokenize, sent_tokenize




app = Flask(__name__)

@app.route("/index")
def index():
    return render_template('index.php')

@app.route("/qa", methods=['POST', 'GET'])
def qa():
    if request.method == 'POST':
        konteks = request.form['k']
        question = request.form['q']
        jawaban = qa_model(question, konteks)
        return render_template('qa.html', jawaban=jawaban, konteks=konteks, q=question)
    if request.method == 'GET':
        return render_template('qa.html')

@app.route("/ts", methods=['POST', 'GET'])
def ts():
    if request.method == 'POST':
        konteks = request.form['k']
        old, new, jawaban = ts_model(konteks)
        return render_template('ts.html', jawaban=jawaban, konteks=konteks, old=old, new=new)
    if request.method == 'GET':
        return render_template('ts.html')

def ts_model(teks):
    indo_stopword = set(stopwords.words("indonesian"))
    words = word_tokenize(teks)
    freqTable = dict()
    for word in words:
        word = word.lower()
        if word in indo_stopword:
            continue
        if word in freqTable:
            freqTable[word] += 1
        else:
            freqTable[word] = 1


    sentences = sent_tokenize(teks)

    sentenceValue = {}
    for sentence in sentences:
        for word, freq in freqTable.items():
            if word in sentence.lower():
                if sentence in sentenceValue:
                    sentenceValue[sentence] += freq
                else:
                    sentenceValue[sentence] = freq
    sumValues = 0
    for sentence in sentenceValue:
        sumValues += sentenceValue[sentence]
    sumValues

    average = int(sumValues / len(sentenceValue))

    summary = ''
    for sentence in sentences:
        if (sentence in sentenceValue) and (sentenceValue[sentence] > average):
            summary += " " + sentence
    
    return len(teks), len(summary), summary

@app.route("/hc", methods=['POST', 'GET'])
# def hc():
#     if request.method == 'POST':
#         judul = request.form['judul']
#         jawaban = hc_model(judul)
#         return render_template('hc.html', jawaban=jawaban, judul=judul)
#     if request.method == 'GET':
#         return render_template('hc.html')

# def hc_model(judul):
#     case = {'x_data' : judul}
#     df = pd.DataFrame(data=case, index=[0])
#     x = df['x_data']
#     tokenizer = Tokenizer()
#     fit_text = x
#     tokenizer.fit_on_texts(fit_text)
#     sequences = tokenizer.texts_to_sequences(x)
#     list_set_sequence2 = [list(dict.fromkeys(seq)) for seq in sequences]
#     padded = pad_sequences([list(list_set_sequence2[i]) for i in range(len(list_set_sequence2))], maxlen=200, padding='post', truncating='post', value=0)
#     yhat = model.predict(padded)
#     hasil = yhat[0][0]*10
#     if hasil<5:
#         keluaran = 'Faktual'
#     else:
#         keluaran = 'hoax'
#     return keluaran

def qa_model(q, k): 
    tokenizer = AutoTokenizer.from_pretrained("Rifky/Indobert-QA")
    model = AutoModelForQuestionAnswering.from_pretrained("Rifky/Indobert-QA")
    # Preproces()

    question, konteks = q, k
    token = tokenizer(question, konteks, return_tensors = "pt")

    # print(token)

    with torch.no_grad():    
        output = model(**token)

    # print(output)
    # print(output.start_logits)
    # print(output.start_logits.argmax())
    answer_start_index = output.start_logits.argmax()
    answer_end_index = output.end_logits.argmax()

    # print(output.end_logits)
    # print(output.end_logits.argmax())

    predict_answer_tokens = token.input_ids[0, answer_start_index : answer_end_index + 1]

    # predict_answer_tokens = token.input_ids[0, 3: 5 ]
    hasil = tokenizer.decode(predict_answer_tokens)

    return hasil

if __name__ == '__main__':
    app.run(debug=True)