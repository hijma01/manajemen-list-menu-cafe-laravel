<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pilihan Daftar Menu Cafe</title>
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
</head>
<body>
<div class="container">
    <h1>Manajemen List Menu Cafe</h1>
    <h3>List menu cafe</h3>
    <a href="{{route('listmenucafe.create')}}" class="tombol">Tambah</a>
    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama_menu</th>
                <th>Kategori</th>
                <th>Harga</th>
                <th style="width: 40%;">Deskripsi</th>
                <th style="width: 20%;">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($alllistmenucafe as $key => $r)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $r->nama_menu }}</td>
                <td>{{ $r->kategori }}</td>
                <td>{{ $r->harga }}</td>
                <td>{{ $r->deskripsi }}</td>
                <td>
                    <div class="aksi">
                        <a href="{{ route('listmenucafe.edit', $r->id)}}" class="tombol">Edit</a>
                        <form action="{{ route('listmenucafe.destroy', $r->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="tombol hapus">Hapus</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>