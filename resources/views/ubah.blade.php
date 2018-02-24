@extends('indukhalaman')



@section('title')
  Ubah Profile
@endsection



@section('content')
  <h1>Tambah Profile</h1>

  <form class="" action="{{url('crud/'.$data->id)}}" method="post">
    <input type="hidden" name="_method" value="put">

    {!! csrf_field() !!}

    <input type="text" name="nama" value="{{$data->nama}}" placeholder="Nama Panjang">
    <br>
    <input type="text" name="alamat" value="{{$data->alamat}}" placeholder="Alamat">
    <br>
    <input type="text" name="pekerjaan" value="{{$data->pekerjaan}}" placeholder="Pekerjaan">
    <br>
    <input type="submit" name="" value="Simpan">
  </form>

@endsection
