<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <style>
        /* .my-wallpaper{
            width: 100%;
            height: 100px;
        }
        .gambarnya{
            width: 2000px;
            height: 700px;
        } */
        .bg-belakang {
          background-image: url('/static/img/bg.png');
          height: 960px;
        }
    </style>
    <main class="container-fluid bg-belakang">
      <div class="p-4 p-md-8 mb-4 text-white rounded bg-dark">
        <div class="col-md-8 px-0">
          <h1 class="display-4 fst-italic">Selamat Datang di KerjAIn</h1><i class='fab fa-500px'></i>
          <p class="lead my-3">By Bagus Tri Yulianto Darmawan</p>
        </div>
      </div>
      <div class="album py-5">
    <div class="container-fluid">
      <!-- Lebar Thumbnail-->
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <!--Thumbnail 1 -->
        <div class="col">
          <div class="card shadow-sm" style="border-radius: 12px;">
            <img src="/static/img/p.png" height="250" style="border-top-left-radius: 12px; border-top-right-radius: 12px;">
            <div class="card-body">
              <p class="card-text"><strong>Question Aswering</strong></p>
              <p>Merupakan sebuah tools dimana kamu memberikan sebuah konteks dan sebuah pertanyaan, yang nantinya akan dijawab berdasarkan konteks yang diberikan</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a class="btn btn-sm btn-outline-secondary" href="{{ url_for('qa') }}"><b>Open</b></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--Thumbnail 3 -->
        <div class="col">
          <div class="card shadow-sm" style="border-radius: 12px;">
            <img src="/static/img/Jadi gini....png"  height="250" style="border-top-left-radius: 12px; border-top-right-radius: 12px;">
            <div class="card-body">
              <p class="card-text"><strong>Text Summarization</strong></p>
              <p>Merupakan sebuah tools dimana kamu memberikan sebuah paragraf, yang nantinya akan dipersingkat tanpa menghilangkan esensi atau inti informasi dari paragraf yang diberikan</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a class="btn btn-sm btn-outline-secondary" href="{{ url_for('ts') }}"><b>Open</b></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    </main>
    <!-- <div class="container">
    
        <div class="row my-wallpaper">
        <div class="overlay-gradient has-bg-img rounded h-10rem my-2">
        <div class="overlay-content align-items-end text-black">a</div>
        <img src="/static/img/244.jpg" class="img-fluid gambarnya"></img>
            <div class="col-sm-2">col 1</div>
            <div class="col-sm-2">col 2</div>
        </div>
        </div>
        <div class="row">

        </div>
    </div> -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>