@extends('layout.form_tambah')
@section('title')
    Edit Member
@endsection
@section('conten')
<form action="{{ route('member.update', $members->id) }}" method="post">
  @method('PATCH')
  @csrf
    <div class="mb-3">
      <label class="form-label">Nama Member</label>
      <input type="text" class="form-control" name="nama" value="{{$members->nama}}" required>
    </div>
    <div class="mb-3">
      <label class="form-label">Level Member</label>
      <select name="level" class="form-control" required>
          <option value="{{$members->level}}">{{$members->level}}</option>
          <option value="Bronze">Bronze</option>
          <option value="Silver">Silver</option>
          <option value="Gold">Gold</option>
          <option value="Diamond">Diamond</option>
      </select>
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection