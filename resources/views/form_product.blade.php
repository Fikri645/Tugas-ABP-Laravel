@extends('template')
@section('title', 'Form Produk')

@section('content')
    <div class="form-group margin">
        <form class="" action="/product" method="post">
            @csrf
            <label>
                <h2 class="text-center">Form Produk</h2>
                </h2>
            </label>
            <label>Nama</label>
            <input type="text" class="form-control" name="name" @error('name') is-invalid @enderror
                value="{{ old('name') }}"><br>
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            <label>Harga</label>
            <input type="number" class="form-control" name="price" @error('price') is-invalid @enderror
                value="{{ old('price') }}"><br>
            @error('price')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            <button type="submit" class="btn btn-primary">Simpan</button>
            <br />
            <b id="message"></b>
        </form>
    </div>
@endsection
