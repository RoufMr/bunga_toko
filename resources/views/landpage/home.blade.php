@extends('layouts.main')
@section('konten')
{{-- <div class="container">
    <div class="row">
        @foreach ($bunga as $b)
        <div class="col-md-4 mt-4 text-center">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('storage/bunga/'.$b->gambar) }}" class="card-img-top"
                    alt="foto makanan" style= "text-center width: 17rem ; height: 17rem ">
                    <div class="card-body">
                    <h5 class="card-title">{{ $b->nama }}</h5>
                    <a href="{{ route('show', $b->id) }}" class="btn btn-primary bg-danger">Show</a>
                    </div>
                </div>
            </div>
            @endforeach
    </div>
</div> --}}

{{-- ----------------------------------------------------- --}}

{{-- <div class="container">

    <h3 class="title"> organic products </h3>

    <div class="products-container">
        @foreach ($bunga as $b)
       <div class="product" data-name="{{ route('show', $b->id) }}">
          <img src="{{ asset('storage/bunga/'.$b->gambar) }}" alt="">
          <h3 lass="card-title">{{ $b->nama }}</h3>
       </div>
       @endforeach
    </div>

 </div> --}}
 <body>

    <div class="container">

       <h3 class="title"> organic products </h3>

       <div class="products-container">

        @foreach ($bunga as $b)
       <div class="product" data-name="">
          <img src="{{ asset('storage/bunga/'.$b->gambar) }}" alt="">
          <h3>{{ $b->nama }}</h3>
          <div class="price">Rp. {{ $b->harga }}</div>
       </div>
       @endforeach

          {{-- <div class="product" data-name="p-1">
             <img src="images/1.png" alt="">
             <h3>strawberries</h3>
             <div class="price">$2.00</div>
          </div> --}}
       </div>

    </div>

    @foreach ($bunga as $b)
    <div class="products-preview">

       {{-- <div class="preview" data-target="p-1">
          <i class="fas fa-times"></i>
          <img src="images/1.png" alt="">
          <h3>organic strawberries</h3>
          <div class="stars">
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
             <i class="fas fa-star-half-alt"></i>
             <span>( 250 )</span>
          </div>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
          <div class="price">$2.00</div>
          <div class="buttons">
             <a href="#" class="buy">buy now</a>
             <a href="#" class="cart">add to cart</a>
          </div>
       </div> --}}
       <div class="preview" data-target="">
        <i class="fas fa-times"></i>
        <img src="{{ asset('storage/bunga/'.$b->gambar) }}" alt="">
        <h3>{{ $b->nama}}</h3>
        {{-- <div class="stars">
           <i class="fas fa-star"></i>
           <i class="fas fa-star"></i>
           <i class="fas fa-star"></i>
           <i class="fas fa-star"></i>
           <i class="fas fa-star-half-alt"></i>
           <span>( 250 )</span>
        </div> --}}
        <p>{{  $b->keterangan }}</p>
        <h4 >Stok>{{ $b->stok }}</h4>
        <div class="price">Rp. {{ $b->harga }}</div>
        <div class="buttons">
           <a href="#" class="buy">buy now</a>
           <a href="#" class="cart">add to cart</a>
        </div>
     </div>

    </div>
    @endforeach

    </body>

@endsection
