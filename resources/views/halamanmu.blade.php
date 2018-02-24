@extends('indukhalaman')

@section('title')
  Halaman Mu
@endsection

@section('content')
  <h1>Ini adalah halaman mu</h1>
  <img src="{{asset('img/sea.jpg')}}" alt="" style="width:100%;">
  <p>Halo nama saya Chelsea Kezia</p>

  <a href="{{url('crud/add')}}">Tambah Profile</a>

  <table>
    <thead>
      <td>Nama</td>
      <td>Pekerjaan</td>
      <td>Alamat</td>
    </thead>
    <tbody>
      @foreach($datas as $data)
      <tr>
        <td>{{$data->nama}}</td>
        <td>{{$data->pekerjaan}}</td>
        <td>{{$data->alamat}}</td>
        <td><a href="{{url('crud/'.$data->id.'/edit')}}">Ubah</a></td>
        <td>
          <form class="" action="{{url('crud/'.$data->id)}}" method="post">
            <input type="hidden" name="_method" value="delete">
            {!! csrf_field() !!}
            <input type="submit" name="" value="Hapus">
          </form>

        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

@endsection
