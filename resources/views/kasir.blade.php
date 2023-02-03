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
              <a class="navbar-brand" href="/">FOOD.US</a>
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
                  
                
                </ul>
              </div>
            </div>
          </nav>
        </div>
    </nav>
    </div>
    <br><br><br><br> 
<center><h3>Simulasi Pembelian Online</h3></center>
<br>
<div class="container">
<div class="alert alert-info" role="alert">
  <marquee><b> Dapatkan Diskon 30% setiap pembelian Minimal Rp. 40.000,00 (Maksimal diskon sebesar Rp. 30.000,00) &emsp; Dapatkan Diskon 30% setiap pembelian Minimal Rp. 40.000,00 (Maksimal diskon sebesar Rp. 30.000,00) </b></marquee>
</div>
</div>


<br>
    <form action="/promo" method="POST">
      @csrf
    <div class="container">
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Menu</th>
            <th scope="col">Harga</th>
            <th scope="col">Total</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">Mie Ayam</th>
            <td>Rp. 15.000,00</td>
            <td> <input type="number" min="0" style="width:50px" name="total-mie-ayam"></td>
          </tr>
          <tr>
            <th scope="row">Ayam Geprek</th>
            <td>Rp. 17.000,00</td>
            <td><input type="number" min="0" style="width:50px" name="total-ayam-geprek"></td>
          </tr>
          <tr>
            <th scope="row">Es Jeruk</th>
            <td>Rp. 5.000,00</td>
            <td><input type="number" min="0" style="width:50px" name="total-es-jeruk"></td>
          </tr>
          <tr>
            <th scope="row">Es Teh</th>
            <td>Rp. 4.000,00</td>
            <td><input type="number" min="0" style="width:50px" name="total-es-teh"></td>
          </tr>
        
        </tbody>
      </table>
    </div>






    <!-- <div class="container">
    <div class="input-group flex-nowrap">
        <span class="input-group-text" id="addon-wrapping">Quantity</span>
        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
      </div>
    </div> -->
    
  
   <!-- <div class="form-group">
      <label>Masukkan Total Belanja </label>
      <input type="text" class="form-control" name="total">
    </div>
  
    <br> -->
   <div class="container">
       <button type="submit" class="btn btn-primary">Checkout</button></a>
   </div>
  </form>
<br>

<div class="container">
<div class="row">
  <div class="col-md-12">

    @if (session('tampil'))
      <div class="alert alert-success">
        {{ session('tampil') }}
      </div>
    @endif


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