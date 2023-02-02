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