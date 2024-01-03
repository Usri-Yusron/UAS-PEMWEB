<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use App\Models\transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    // route buat transaksi
    public function index()
    {
        $transaksi = transaksi::all();
    
        return view('transaksi.index', compact('transaksi'));
    }

    // route buat nambah data
    public function tambah()
	{
        $pelanggan = Pelanggan::all();

		$transaksi = transaksi::get();

		return view('transaksi.form', ['transaksi' => $transaksi, 'pelanggan' => $pelanggan]);
	}

    // route buat menyimpan tambah data
	public function simpan(Request $request) {
		transaksi::create($request->all());

		return redirect()->route('transaksi');
    }

	// function buat tampilin data
	public function tampilkandata($id)
	{
        $pelanggan = Pelanggan::all();

		$transaksi = transaksi::find($id);
		// dd($buku);

		return view('transaksi.edit', ['transaksi' => $transaksi, 'pelanggan' => $pelanggan] );
	}

	// buat proses update data
	public function updatedata($id, Request $request)
	{
		$transaksi = transaksi::find($id);
		$transaksi->update($request->all());

		return redirect()->route('transaksi');
	}

	// buat hapus data
	public function deletedata($id)
	{
		$transaksi = transaksi::find($id);
		$transaksi->delete();

		return redirect()->route('transaksi');
	}
}
