# Simple AI Tools Website

Ini adalah website simpel yang berisi AI Tools berupa **Question and Answering (**QnA**)** dan **Text Summarization**, tools yang cocok buat kamu yang males baca.
Projek ini dibuat dengan menggunakan HTML Vanilla dan Flask Library

## QnA Tool
Pada QnA Tools kamu perlu memberikan konteks terlebih dahulu, lalu kamu menginput pertanyaan yang kamu perlukan, maka AI akan memberikan jawaban bedasarkan konteks yang telah kamu berikan

## Text Summarization Tool

Pada tools Text Summarization, kamu hanya perlu menginput paragraf yang ingin kamu persingkat, nantinya AI akan mempersingkat paragraf itu sehingga kamu mendapat inti dari paragraf tersebut

## Download
Download website ini dengan mengklik [link](https://drive.google.com/file/d/1_DpWf69U7SAN11ikLVgLJnO_jgMlu6LK/view?usp=sharing) berikut atau dengan clone repository ini
```
https://github.com/Bagus324/KerjAIn.git
```


---

# Documentation
## Flask Library
install library Flask di environment Python

```
pip install flask
```
atau

```
pip install flask==2.3.3
```
Karena projek ini dibuat pada environment dengan Flask versi 2.3.3 jadi disarangkan untuk menginstall versi yang sesuai. Setelah itu jalankan file app.py.

```
python app.py
```
## Manual
Setelah file app.py berhasil berjalan, buka browser dan menuju
```
http://127.0.0.1:5000/index
```
<img src="https://github.com/Bagus324/KerjAIn/blob/main/readme%20assets/index.png"></img>
Pilih tools yang akan kamu gunakan, dan kamu bisa mengklik tombol Manual pada tiap Tools untuk petunjuk yang lebih jelas.
### Contoh QnA Tools
<img src="https://github.com/Bagus324/KerjAIn/blob/main/readme%20assets/qa.png"></img>
### Contoh Text Summarization Tools
<img src="https://github.com/Bagus324/KerjAIn/blob/main/readme%20assets/ts.png"></img>
# Reference
[1] [QnA Tools dibuat menggunakan Pre-Trained IndoBERT oleh Rifky/IndoBERT-QA melalui API yang disediakan, beserta sample konteks dan pertanyaan](https://huggingface.co/Rifky/Indobert-QA) <br/>
[Paper untuk Pre-Trained IndoBERT QA](https://aclanthology.org/2020.coling-main.66.pdf) <br> <br>
[2] [Sample Paragranf Text Summarization](https://www.kominfo.go.id/content/detail/34136/siaran-pers-no-143hmkominfo042021-tentang-sejak-2018-kominfo-tangani-3640-ujaran-kebencian-berbasis-sara-di-ruang-digital/0/siaran_pers)
# Used Library
- **Transformers**
- **Flask**
- **Torch**
- **NLTK**
