@extends('layout.form_view')
@section('title')
    Data Member
@endsection
@section('link')
<a class="btn btn-primary" role="button" href="{{route('member.create')}}">Tambah Member</a>
@endsection
@section('thead')
    <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">Level</th>
        <th scope="col">Aksi</th>
    </tr>
@endsection
@section('tbody')
    @php $no = 1; @endphp
    @foreach ($members as $member)
    <tr>
    <th scope="row">{{$no++}}</th>
    <td>{{$member->nama}}</td>
    <td>{{$member->level}}</td>
    <td><a class="btn btn-warning" role="button" href="{{ route('member.edit', $member->id) }}">Edit</a>
        <a onclick="document.getElementById('hapus-{{ $member->id }}').submit()" style="color: #ff0000; cursor: pointer;">
            <button type="button" class="btn btn-danger">
                <i class="bi bi-trash2"></i>
            </button>
        </a>
        <form action="{{ route('member.destroy', $member->id) }}" id="hapus-{{ $member->id }}" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="_method" value="delete">
        </form>
    </tr>
    @endforeach    
@endsection
