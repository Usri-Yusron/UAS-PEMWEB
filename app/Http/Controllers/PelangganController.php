<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    // route buat pelanggan
    public function index()
    {
        $pelanggan = Pelanggan::all();
    
        return view('pelanggan.index', compact('pelanggan'));
    }

    // route buat nambah data
    public function tambah()
	{
		$pelanggan = Pelanggan::get();

		return view('pelanggan.form', ['pelanggan' => $pelanggan]);
	}

    // route buat menyimpan tambah data
	public function simpan(Request $request) {
		Pelanggan::create($request->all());

		return redirect()->route('pelanggan');
    }

	// function buat tampilin data
	public function tampilkandata($id)
	{
		$pelanggan = Pelanggan::find($id);
		// dd($buku);

		return view('pelanggan.edit', ['pelanggan' => $pelanggan] );
	}

	// buat proses update data
	public function updatedata($id, Request $request)
	{
		$pelanggan = Pelanggan::find($id);
		$pelanggan->update($request->all());

		return redirect()->route('pelanggan');
	}

	// buat hapus data
	public function deletedata($id)
	{
		$pelanggan = Pelanggan::find($id);
		$pelanggan->delete();

		return redirect()->route('pelanggan');
	}

}
