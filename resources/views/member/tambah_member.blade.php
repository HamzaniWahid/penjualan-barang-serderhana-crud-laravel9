@extends('layout.form_tambah')
@section('title')
    Tambah Member
@endsection
@section('conten')
<form action="{{ route('member.store') }}" method="post">
    @csrf
    <div class="mb-3">
        <label class="form-label">Nama User</label>
        <select name="user_id" class="form-control">
            @foreach ($users as $user)
            <option value="{{$user->id}}">{{$user->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label class="form-label">Nama Member</label>
        <input type="text" class="form-control" name="nama" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Level Member</label>
        <select name="level" class="form-control" required>
            <option value="Bronze">Bronze</option>
            <option value="Silver">Silver</option>
            <option value="Gold">Gold</option>
            <option value="Diamond">Diamond</option>
        </select>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
</form>
@endsection