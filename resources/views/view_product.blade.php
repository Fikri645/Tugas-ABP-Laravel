@extends('templates')
@section('title', '{{ $title }}')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-4">
            <h1 class="text-center">{{ $title}}</h1>
            <div style="text-align:right;">
                <a class="btn btn-success" href="/produk/create">Tambah Produk</a>
            </div>
            @if(session('message'))
            <div class="alert alert-success mt-2" role="alert">
                {{ session('message') }}
              </div>
            @endif
            <table class="table table-hover">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Varian</th>
                    <th>Aksi</th>
                </tr>
                @php $i = 1 @endphp
                @foreach($data as $d)
                <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $d->name }}</td>
                        <td>{{ $d->price }}</td>
                        <td>
                            <ul>
                                @foreach($d->variants as $v)
                                <li>{{ $v->name }}</li>
                                <li>Stock:{{ $v->stock}}</li>
                                @endforeach
                            </ul>
                        </td>
                        <td>
                            <a class="btn btn-warning" href="">Edit</a>
                            <a class="btn btn-danger" href="">Hapus</a>
                        </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection