@extends('dashboard.layouts.main')
@section('konten')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>list bunga</h1>
                <table class="table table-striped border">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Stok</th>
                            <th scope="col">aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($bunga as $item)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->nama}}</td>
                            <td>Rp {{$item->harga}}</td>
                            <td>{{$item->stok}}</td>
                            <td>
                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('bunga.destroy', $item->id ) }}" method="POST">
                                    {{-- <a class="btn btn-sm btn-warning" href="{{ route('bunga.edit', $item->id ) }}">edit</a> --}}
                                    <a  class="btn btn-sm btn-success" href="{{ route('bunga.show', $item->id) }}">show</a>

                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">hapus</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                            <div class="alert alert-danger">
                                Data Belum tersedia
                            </div>
                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
