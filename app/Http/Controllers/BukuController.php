<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    //
    public function index()
	{
		$buku = Buku::all();

		return view('buku.index', compact('buku'));
	}
    
	public function tambah()
	{
		$buku = Buku::get();

		return view('buku.form', ['buku' => $buku]);
	}

	public function simpan(Request $request) {

		$data = Buku::create($request->all());
	
		if($request->hasFile('foto')){
	
			$request->file('foto')->move('fotopegawai/', $request->file('foto')->getClientOriginalName());
	
			$data->foto = $request->file('foto')->getClientOriginalName();
	
			$data->save();
	
		}
	
		return redirect()->route('buku');
	}
	

	// function buat tampilin data
	public function tampilkandata($id)
	{
		$buku = Buku::find($id);
		// dd($buku);

		return view('buku.edit', compact('buku'));
	}

	// buat proses update data
	public function updatedata($id, Request $request)
	{
		$buku = Buku::find($id);
		$buku->update($request->all());

		return redirect()->route('buku');
	}

	// buat hapus data
	public function deletedata($id)
	{
		$buku = Buku::find($id);
		$buku->delete();

		return redirect()->route('buku');
	}
}
