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
  
    <title>Rincian Pembayaran Global</title>
  </head>
  <body>
    
    <br>
<center><h3>Hasil Simulasi Pembelian Online</h3></center>
<br>



    <form action="/diskon" method="POST">
      @csrf
    <div class="container">
    <table class="table table-striped" name="data-menu" >
        <thead>
          <tr>
            <th scope="col">Menu</th>
            <th scope="col">Harga</th>
            <th scope="col">Total</th>
            <th scope="col">Total Harga</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">Mie Ayam</th>
            <td>Rp. 15.000,00</td>
            <td> {{session()->get('total-mie-ayam')}}  </td>
            <td> {{session()->get('total-harga-mie-ayam')}}  </td>
          </tr>
          <tr>
            <th scope="row">Ayam Geprek</th>
            <td>Rp. 17.000,00</td>
            <td>{{session()->get('total-ayam-geprek')}} </td>
            <td> {{session()->get('total-harga-ayam-geprek')}}  </td>
          </tr>
          <tr>
            <th scope="row">Es Jeruk</th>
            <td>Rp. 5.000,00</td>
            <td>{{session()->get('total-es-jeruk')}} </td>
            <td> {{session()->get('total-harga-es-jeruk')}}  </td>
          </tr>
          <tr>
            <th scope="row">Es Teh</th>
            <td>Rp. 4.000,00</td>
            <td>{{session()->get('total-es-teh')}} </td>
            <td> {{session()->get('total-harga-es-teh')}}  </td>
          </tr>
          <tr>
            <th scope="row"></th>
            <td><b>Subtotal Harga</b></td>
            <td></td>
            <td><b>{{session()->get('subtotal-harga')}} </b></td>
          </tr>
          <tr>
            <th scope="row"></th>
            <td><b>Total Diskon</b></td>
            <td></td>
            <td><b>- {{session()->get('total-diskon')}} </b></td>
          </tr>
          <tr>
            <th scope="row"></th>
            <td><b>Ongkir</b></td>
            <td></td>
            <td><b>Rp. 5000,00</b></td>
          </tr>
          <tr>
            <th scope="row"></th>
            <td><b>Total Bayar</b></td>
            <td></td>
            <td><b>{{session()->get('total-bayar')}} </b></td>
          </tr>
        </tbody>
      </table>
    </div>

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
      <div class="container">
        <a href="kasir" class="btn btn-primary">Kembali</a>
    </div>
   </form>
 <br>


    <script src= "{{ url('/js/jquery-3.4.1.slim.min.js')}}"> </script>
    <script src= "{{ url('/js/popper.min.js')}}"> </script>
    <script src= "{{ url('/js/bootstrap.min.js')}}"> </script>
  </body>
</html>