@extends('layout.form_tambah')
@section('title')
    Tambah User
@endsection
@section('conten')
<form action="{{route('user.store'))}}" method="post">
    @csrf
    <div class="mb-3">
    <label class="form-label">Nama User</label>
    <input type="text" class="form-control" name="name">
    </div>
    <div class="mb-3">
    <label class="form-label">E-Mail</label>
    <input type="text" class="form-control" name="email">
    </div>
    <div class="mb-3">
    <label class="form-label">Password</label>
    <input type="text" class="form-control" name="password">
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection