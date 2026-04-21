<!DOCTYPE html>
<html>
<head>
    <title>Edit Menu</title>

    <!-- INI JUGA TEMPAT CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<h2 class="judul-form">Edit Menu</h2>

<form action="{{ route('listmenucafe.update', $menu->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Nama Menu</label>
    <input type="text" name="nama_menu" value="{{ $menu->nama_menu }}">

    <label>Kategori</label>
    <input type="text" name="kategori" value="{{ $menu->kategori }}">

    <label>Harga</label>
    <input type="number" name="harga" value="{{ $menu->harga }}">

    <label>Deskripsi</label>
    <textarea name="deskripsi">{{ $menu->deskripsi }}</textarea>

    <button type="submit">Update</button>
</form>