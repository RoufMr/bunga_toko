@extends('dashboard.layouts.main')
@section('konten')
{{-- <div class="container-fluid">
    <div class="row">
        <div class="col-md-12 mb-2">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between shadow">
                    <h1 class="h3 mb-0 text-gray-800">Detail Barang, {{ $barang->nama }}</h1>
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
                            <img src="{{ asset('storage/bunga/'.$barang->gambar) }}" class="img-thumbnail card-img-top"
                            alt="foto makanan" style="width: 500px; height: 500px">
                        </div>
                        <div class="col-md-8 mb-2 mt-3 ">
                                <h4>Nama Barang : {{ $barang->nama}} </h4>
                            <p>
                                <h4>Keterangan  : {{ $barang->keterangan}}</h4>
                            <p>
                                <h4>Harga       : Rp. {{ $barang->harga }}</h4>
                            <p>
                                <h4>Stok        : Rp. {{ $barang->stok }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
 <body>

    <div class="container">

       <h3 class="title"> organic products </h3>

       <div class="products-container">
       <div class="product" data-name="">
          <img src="{{ asset('storage/bunga/'.$barang->gambar) }}" alt="">
          {{-- <h3>{{ $barang->nama }}</h3> --}}
          {{-- <div class="price">Rp. {{ $barang->harga }}</div> --}}
       </div>

       </div>

    </div>

    {{-- @foreach ($barang as $b) --}}
    <div class="products-preview">


       <div class="preview" data-target="">
        <i class="fas fa-times"></i>
        <img src="{{ asset('storage/bunga/'.$barang->gambar) }}" alt="">
        <h3>{{ $barang->nama}}</h3>
        <p>{{  $barang->keterangan }}</p>
        <h4 >Stok>{{ $barang->stok }}</h4>
        <div class="price">Rp. {{ $barang->harga }}</div>
        <div class="buttons">
           {{-- <a href="" class="buy">buy now</a> --}}
           <a href="{{ route('bunga.show', $barang->id) }}" class="cart">Edit</a>
        </div>
     </div>

    </div>
    {{-- @endforeach --}}

    </body>

@endsection
