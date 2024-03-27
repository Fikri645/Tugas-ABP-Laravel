<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{asset('css/test.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>