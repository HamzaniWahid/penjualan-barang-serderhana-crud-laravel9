@extends('layout.form_tambah')
@section('title')
    Edit Barang
@endsection
@section('conten')
<form action="{{ route('barang.update', $barangs->id) }}" method="post">
  @method('PATCH')
  @csrf
    <div class="mb-3">
      <label class="form-label">Nama Barang</label>
      <input type="text" class="form-control" name="nama" value="{{$barangs->nama}}" >
    </div>
    <div class="mb-3">
      <label class="form-label">Jumlah Barang</label>
      <input type="text" class="form-control" name="jumlah" value="{{$barangs->jumlah}}" >
    </div>
    <div class="mb-3">
      <label class="form-label">Harga Barang</label>
      <input type="text" class="form-control" name="harga" value="{{$barangs->harga}}" >
    </div>
    <div class="mb-3">
      <label class="form-label">Ket Barang</label>
      <input type="text" class="form-control" name="ket" value="{{$barangs->ket}}" >
    </div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection