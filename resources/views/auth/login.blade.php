{{-- exttend ke layouts main --}}
@extends('layouts.main')
@section('konten')
    <div class="w-25 center border rounded px-3 mx-auto col-md-4 mb-2 mt-3 text-col bg-dark-subtle ">
        <h1 class="text-center">Login</h1>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
    <div class="container">
        <div class="row justify-content-center mt-1 ">
            <div class="col-md-15">
                <form action="{{ route('dologin') }}" method="post">
                    @csrf
                        <div class='mb-3'>
                            <label for="email" class="form-label">Email</label>
                            <input type="text" name="email" class="form-control">
                        </div>
                        <div class='mb-3'>
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <div class='mb-3 d-grid'>
                            <button name='submit' type="submit" class="btn btn-primary">Login</button>
                        </div>
                    {{-- @csrf
                    <div class="align-items-center">
                        <div class="col-auto">
                          <label for="inputPassword6" class="col-form-label">Email</label>
                        </div>
                        <div class="col-auto">
                          <input type="text" id="inputPassword6" class="form-control" name="email">
                        </div>
                    </div>
                    <div class="align-items-center">
                        <div class="col-auto">
                          <label for="inputPassword6" class="col-form-label">Password</label>
                        </div>
                        <div class="col-auto">
                          <input type="password" id="inputPassword6" class="form-control" name="password">
                        </div>
                    </div>
                    <button type="submit">login</button> --}}
                </form>
            </div>
        </div>
    </div>
@endsection
