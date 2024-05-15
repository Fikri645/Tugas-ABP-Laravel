@extends('template')

@section('title', 'Product')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-4">
            <h1 class="text-center">{{ $title }}</h1>
            <div class="text-align-right">
                <a href="/product/create" class="btn btn-success">Tambah Produk</a>
            </div>
            {{ session('message') }}
            <table>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Varian</th>
                    <th>Aksi</th>
                </tr>
                @php $i = 1 @endphp
                @foreach ($data as $d)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $d->name }}</td>
                        <td>{{ $d->price }}</td>
                        <td>
                            <ul>
                                @foreach ($d->variants as $v)
                                    <li>{{ $v->name }} - {{ $v->stock }}</li>
                                @endforeach
                            </ul>
                        </td>
                        <td>
                            <a class="btn btn-warning">Edit</a>
                            <a class="btn btn-danger">Delete</a> 
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
