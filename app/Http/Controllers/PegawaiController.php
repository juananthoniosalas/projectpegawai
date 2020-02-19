<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Pegawai;

class PegawaiController extends Controller
{

      public function index()
      {
      	// $pegawai = Pegawai::all();
      	// return view('welcome', ['pegawai' => $pegawai]);

        // mengambil data dari table pegawai
$pegawai = DB::table('pegawai')->paginate(10);

        // mengirim data pegawai ke view index
return view('welcome',['pegawai' => $pegawai]);

      }

      public function tambah()
   {
     return view('tambah');
   }

   public function store(Request $request)
  {
    $this->validate($request,[
      'nama' => 'required',
      'alamat' => 'required'
    ]);

      Pegawai::create([
      'nama' => $request->nama,
      'alamat' => $request->alamat
    ]);

    return redirect('/welcome');
}
public function edit($id)
{
   $pegawai = Pegawai::find($id);
   return view('edit', ['pegawai' => $pegawai]);
}

public function update($id, Request $request)
{
    $this->validate($request,[
	   'nama' => 'required',
	   'alamat' => 'required'
    ]);

    $pegawai = Pegawai::find($id);
    $pegawai->nama = $request->nama;
    $pegawai->alamat = $request->alamat;
    $pegawai->save();
    return redirect('/welcome');
}

public function delete($id)
{
    $pegawai = Pegawai::find($id);
    $pegawai->delete();
    return redirect('/welcome');
}

public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$pegawai = DB::table('pegawai')
		->where('Nama','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('welcome',['pegawai' => $pegawai]);

	}

}
