<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
    <link rel="stylesheet" href=" {{ url('/css/belajarcss.css') }}">
    <link rel="stylesheet" href=" {{ url('/css/bootstrap.min.css') }}">
  
    <title>Input Pesanan Global</title>
  </head>
  <body>

    <div class="fixed-top">
       <nav class="navbar bg-dark" data-bs-theme="dark">
       <div class="container-fluid">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand" href="">FOOD.US</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item"> 
                    <a class="nav-link active" aria-current="page" href="kasir">Pesanan Global</a>
                  </li> &nbsp;
                  <li class="nav-item">
                    <a class="nav-link" href="detail-pesanan">Detail Pesanan</a>
                  </li> &nbsp;
                  <li class="nav-item">
                    <a class="nav-link" href="#">Daftar Menu</a>
                  </li> &nbsp;
                  <li class="nav-item">
                    <a class="nav-link" href="#">Ketentuan</a>
                  </li>
                
                </ul>
              </div>
            </div>
          </nav>
        </div>
    </nav>
    </div>
    <br><br><br><br> 
<center><h3>Selamat Datang</h3></center>
<br>

<div class="container">
  <div class="row">
    <div class="col-sm-4 mb-4 mb-sm-0">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Simulasikan pesanan global anda! </h5>
          <img src="images/global.jpg" height="250" class="card-img-top" alt="...">
          <p class="card-text">Gunakan simulasi ini untuk menghitung pesanan secara global.</p>
          <a href="#" class="btn btn-primary">Simulasi</a>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Split Bill pesanan anda!</h5>
          <img src="images/vector.jpg" height="250" class="card-img-top" alt="...">
          <p class="card-text"> Tak perlu kesulitan dalam melakukan split bill, gunakan simulasi split bill ini.</p>
          <a href="#" class="btn btn-primary">Simulasi</a>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Ini menu andalan anda!</h5>
            <img src="images/menu.avif" height="250" class="card-img-top" alt="...">
            <p class="card-text"> Dapatkan penawaran spesial, setiap pembelian tertentu dari menu andalan.</p>
            <a href="#" class="btn btn-primary">Lihat Detail</a>
          </div>
        </div>
      </div>
  </div>
</div>


    </div>
  </div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> -->

    <script src= "{{ url('/js/jquery-3.4.1.slim.min.js')}}"> </script>
    <script src= "{{ url('/js/popper.min.js')}}"> </script>
    <script src= "{{ url('/js/bootstrap.min.js')}}"> </script>
  </body>
</html>