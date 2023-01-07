@extends('layout.form_view')
@section('title')
    Data User
@endsection
@section('link')
<a class="btn btn-primary" role="button" href=" {{ url('tambah_user')}}">Tambah User</a>
<br>
@endsection
@section('thead')
    <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">E-Mail</th>
        {{-- <th scope="col">Password</th> --}}
        {{-- <th scope="col">Status Member</th> --}}
        <th scope="col">Aksi</th>
    </tr>
@endsection
@section('tbody')
    @php $no = 1; @endphp
    @foreach ($users as $user)
    <tr>
    <th scope="row">{{$no++}}</th>
    <td>{{$user->name}}</td>
    <td>{{$user->email}}</td>
    {{-- <td>{{$user->password}}</td> --}}
    {{-- <td>{{$user->member->name}}</td> --}}
    <td><a class="btn btn-warning" role="button" href="{{ route('user.edit', $user->id) }}">Edit</a>
        <a onclick="document.getElementById('hapus-{{ $user->id }}').submit()" style="color: #ff0000; cursor: pointer;">
            <button type="button" class="btn btn-danger">
                <i class="bi bi-trash2"></i>
            </button>
        </a>
        <form action="{{ route('user.destroy', $user->id) }}" id="hapus-{{ $user->id }}" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="_method" value="delete">
        </form>
    </tr>
    @endforeach   
@endsection

