<!DOCTYPE html>
<html>
<head>
    <title>Tambah Menu</title>

    <!-- INI TEMPAT TAMBAH CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<h2 class="judul-form">Tambah Menu</h2>

<form action="{{ route('listmenucafe.store') }}" method="POST">
    @csrf

    <label>Nama Menu</label>
    <input type="text" name="nama_menu">

    <label>Kategori</label>
    <input type="text" name="kategori">

    <label>Harga</label>
    <input type="number" name="harga">

    <label>Deskripsi</label>
    <textarea name="deskripsi"></textarea>

    <button type="submit">Simpan</button>
</form>