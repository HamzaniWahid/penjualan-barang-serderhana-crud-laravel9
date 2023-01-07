@extends('layout.form_tambah')
@section('title')
    Tambah Barang
@endsection
@section('conten')
<form action="{{route('barang.store')}}" method="post">
    @csrf
    <div class="mb-3">
        <label class="form-label">Nama Barang</label>
        <input type="text" class="form-control" required name="nama" >
    </div>
    <div class="mb-3">
        <label class="form-label">Jumlah Barang</label>
        <input type="number" class="form-control" required name="jumlah">
    </div>
    <div class="mb-3">
        <label class="form-label">Harga Barang</label>
        <input type="number" class="form-control" required name="harga">
    </div>
    <div class="mb-3">
        <label class="form-label">Ket Barang</label>
        <input type="text" class="form-control" required name="ket">
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection