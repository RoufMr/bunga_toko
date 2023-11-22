@extends('dashboard.layouts.main')
@section('konten')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>edit bunga</h1>
                <form action="{{ route('update.bunga', $data->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="nama" value="{{ old('nama', $data->nama) }}">
                    </div>
                    {{-- <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Keterangan</label>
                        <textarea type="text" class="form-control" id="exampleFormControlTextarea1" rows="3" name="keterangan" value="{{ old('keterangan', $data->keterangan) }}"></textarea>
                      </div> --}}
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Keterangan</label>
                        <input type="text" class="form-control" id="exampleFormControlTextarea1" name="keterangan" value="{{ old('keterangan', $data->keterangan) }}">
                      </div>
                      <div class="mb-3">
                          <label for="exampleFormControlInput1" class="form-label">Harga</label>
                          <input type="number" class="form-control" id="exampleFormControlInput1" name="harga" value="{{ old('harga', $data->harga) }}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Stok</label>
                            <input type="number" class="form-control" id="exampleFormControlInput1" name="stok" value="{{ old('harga', $data->harga) }}">
                        </div>
                        <div class="mb-3">
                          <label for="formFile" class="form-label">Masukan Gambar</label>
                          {{-- <input class="form-control" type="text" value="{{ old('gambar', $data->gambar) }}"> --}}
                          {{-- <p >{{ old('gambar', $data->gambar) }}</p> --}}
                          <input class="form-control" type="file" id="formFile" name="gambar" value="{{ old('gambar', $data->gambar) }}">
                        </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

@endsection
