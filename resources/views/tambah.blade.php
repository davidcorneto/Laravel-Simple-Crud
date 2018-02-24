@extends('indukhalaman')



@section('title')
  Tambah Profile
@endsection



@section('content')
  <h1>Tambah Profile</h1>

  <form class="" action="{{url('crud')}}" method="post">
    {!! csrf_field() !!}

    <input type="text" name="nama" value="" placeholder="Nama Panjang">
    <br>
    <input type="text" name="alamat" value="" placeholder="Alamat">
    <br>
    <input type="text" name="pekerjaan" value="" placeholder="Pekerjaan">
    <br>
    <input type="submit" name="" value="Simpan">
  </form>

@endsection
