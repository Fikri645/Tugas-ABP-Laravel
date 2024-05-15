@extends('templates')
@section('title', 'Form Produk')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2>Form Produk</h2>
                <form method="POST" action="/produk">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{old('name')}}">
                        @error('name')
                            <div class="invalid-feedback" role="alert">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Harga</label>
                        <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{old('price')}}">
                        @error('price')
                            <div class="invalid-feedback" role="alert">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button class="btn btn-success">Simpan</button>
                    <br>
                </form>
            </div>
        </div>
    </div>
@endsection