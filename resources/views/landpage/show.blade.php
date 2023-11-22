{{-- @extends('layouts.main') --}}
{{-- @section('konten') --}}
{{-- <div class="container-fluid">
    <div class="row">
        <div class="col-md-12 mb-2">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between shadow">
                    <h1 class="h3 mb-0 text-gray-800">Detail Barang, {{ $data->nama }}</h1>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                    </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 mb-2 mt-3 text-center">
                            <img src="{{ asset('storage/bunga/'.$data->gambar) }}" class="img-thumbnail card-img-top"
                            alt="foto makanan" style="width: 500px; height: 500px">
                        </div>
                        <div class="col-md-8 mb-2 mt-3 ">
                                <h4>Nama Barang : {{ $data->nama}} </h4>
                            <p>
                                <h4>Keterangan  : {{ $data->keterangan}}</h4>
                            <p>
                                <h4>Harga       : Rp. {{ $data->harga }}</h4>
                            <p>
                                <h4>Stok        : Rp. {{ $data->stok }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}

{{-- --------------------------------------------------------------- --}}

{{-- <div class="products-preview">

    <div class="preview" data-target="{{ route('show', $b->id) }}">
       <i class="fas fa-times"></i>
       <img src="{{ asset('storage/bunga/'.$data->gambar) }}" alt="">
       <h3>{{ $data->nama}}</h3>
       <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
          <span>( 250 )</span>
       </div>
       <p>{{  $data->keterangan }}</p>
       <div class="price">Rp. {{ $data->harga }}</div>
       <div class="price">{{ $data->stok }}</div>
       <div class="buttons">
          <a href="#" class="buy">buy now</a>
          <a href="#" class="cart">add to cart</a>
       </div>
    </div>
</div> --}}
{{-- @endsection --}}
