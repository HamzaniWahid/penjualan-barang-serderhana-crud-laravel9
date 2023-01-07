@extends('layout.form_view')
@section('title')
    Data Barang
@endsection
@section('link')
<a class="btn btn-primary" role="button" href="{{route('barang.create')}}">Tambah Barang</a>
@endsection
@section('thead')
    <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">Jumlah</th>
        <th scope="col">Harga</th>
        <th scope="col">Ket</th>
        <th scope="col">Aksi</th>
    </tr>
@endsection
@section('tbody')
    @php $no = 1; @endphp
    @foreach ($barangs as $barang)
    <tr>
    <th scope="row">{{$no++}}</th>
    <td>{{$barang->nama}}</td>
    <td>{{$barang->jumlah}}</td>
    <td>{{$barang->harga}}</td>
    <td>{{$barang->ket}}</td>
    <td><a class="btn btn-warning" role="button" href="{{ route('barang.edit', $barang->id) }}">Edit</a>| 
        <a onclick="document.getElementById('hapus-{{ $barang->id }}').submit()" style="color: #ff0000; cursor: pointer;">
            <button type="button" class="btn btn-danger">
                <i class="bi bi-trash2"></i>
            </button>
        </a>
        <form action="{{ route('barang.destroy', $barang->id) }}" id="hapus-{{ $barang->id }}" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="_method" value="delete">
        </form>
    </tr>
    @endforeach    
@endsection
