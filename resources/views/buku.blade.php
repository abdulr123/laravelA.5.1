@extends('layouts.main')

@section('container')
<h1>Halaman Detail Buku</h1>
<a href="buku/create"class="btn btn-primary">Tambah Data</a>
<table class="table caption-top">
    <thead>
    <tr>
        <th>No</th>
        <th>Judul Buku</th>
        <th>Penulis Buku</th>
        <th>Penerbit Buku</th>
        <th>Tahun Terbit</th>
        <th>Aksi</th>
    </tr>
    </thead>
    
    @foreach ($buku as $b)   
    <tr>
        <td>{{ $b->id }}</td>
        <td>{{ $b->judul }}</td>
        <td>{{ $b->penulis }}</td>
        <td>{{ $b->penerbit }}</td>
        <td>{{ $b->tahun_terbit }}</td>
        <td>
            <a href="#"class="btn btn-warning">Edit</a>
            <a href="#"class="btn btn-danger">Hapus</a>
        </td>
    </tr>
    
    @endforeach
</table>
@endsection