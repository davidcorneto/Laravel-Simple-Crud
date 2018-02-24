<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CrudModel;

class CrudController extends Controller
{
    public function index()
    {
      echo "Ini dari controller";
    }

    public function halamanMu()
    {
      $datas = CrudModel::all();
      return view('halamanmu')->with('datas',$datas);
    }

    public function add()
    {
      // $pil = 'tambah';
      return view('tambah');
    }

    public function edit()
    {
      # code...
    }

    public function store(Request $request)
    {
      # code...
      $tambah = new CrudModel();
      $tambah->nama = $request['nama'];
      $tambah->pekerjaan = $request['pekerjaan'];
      $tambah->alamat = $request['alamat'];

      $tambah->save();

      return redirect()->to('/crud');

    }


    public function ubah($id)
    {
      # code...
      $data = CrudModel::find($id);
      return view('ubah')->with('data',$data);
    }

    public function update(Request $request, $id)
    {
      $ubah = CrudModel::find($id);
      $ubah->nama = $request['nama'];
      $ubah->pekerjaan = $request['pekerjaan'];
      $ubah->alamat = $request['alamat'];

      $ubah->save();

      return redirect()->to('/crud');
    }

    public function delete($id)
    {
      $hapus = CrudModel::find($id);
      $hapus->delete();

      return redirect()->to('/crud');
    }
}
