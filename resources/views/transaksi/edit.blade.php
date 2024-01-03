@extends('layouts.app')

{{-- section untuk buat tabel --}}
@section('content')
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  <form action="{{ route('transaksi.tambah.update', ['id' => $transaksi->id]) }}" method="post">
        @csrf
        <table  class="table">
            <tr class="text-center">
                <td>ID Pelanggan</td>
                <td>
                    <select class="form-select" name="id_pelanggan" aria-label="Default select example">
                        <option selected>{{ $transaksi->id_pelanggan }}</option>
                        @foreach ($pelanggan as $id)
                            <option value="{{ $id->id_pelanggan }}">{{ $id->id_pelanggan }}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr class="text-center">
                <td>Nama Pelanggan</td>
                <td>
                    <select class="form-select" name="nama_pelanggan" aria-label="Default select example">
                        <option selected>{{ $transaksi->nama_pelanggan }}</option>
                        @foreach ($pelanggan as $id)
                            <option value="{{ $id->nama_pelanggan }}">{{ $id->nama_pelanggan }}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr class="text-center">
                <td>Jenis Pembayaran</td>
                <td>
                    <select class="form-select" name="jenis_pembayaran" aria-label="Default select example">
                        <option selected>{{ $transaksi->jenis_pembayaran }}</option>
                        <option value="cash">Cash</option>
                        <option value="transfer bank">Transfer Bank</option>
                        <option value="QRIS">QRIS</option>
                        <option value="gopay">Gopay</option>
                        <option value="shopeepay">ShopeePay</option>
                    </select>
                </td>
            </tr>
            <tr class="text-center">
                <td>Tanggal Pembayaran</td>
                <td><input class="form-control form-control-lg" type="date" value="{{ $transaksi->created_at }}" name="created_at" quired></td>
            </tr>
            <tr class="text-center">
                <td colspan=3>
                    <button type="submit" class="btn bg-gradient-info w-50 mb-0">Simpan</button> 
                    <a role ="button" class="btn bg-gradient-danger w-50 mb-0" href="{{ route('transaksi') }}">Kembali</a>  
                </td>                                    
            </tr>
        </table>
    </form>
</table>
@endsection
{{-- section untuk buat tabel selesai--}}

{{-- section untuk aside --}}
@section('nama_tabel')
<ul class="navbar-nav">
  <li class="nav-item">
    <a class="nav-link" href="{{ route('buku') }}">
      <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
        <svg width="12px" height="12px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
          <title>office</title>
          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g transform="translate(-1869.000000, -293.000000)" fill="#FFFFFF" fill-rule="nonzero">
              <g transform="translate(1716.000000, 291.000000)">
                <g id="office" transform="translate(153.000000, 2.000000)">
                  <path class="color-background opacity-6" d="M12.25,17.5 L8.75,17.5 L8.75,1.75 C8.75,0.78225 9.53225,0 10.5,0 L31.5,0 C32.46775,0 33.25,0.78225 33.25,1.75 L33.25,12.25 L29.75,12.25 L29.75,3.5 L12.25,3.5 L12.25,17.5 Z"></path>
                  <path class="color-background" d="M40.25,14 L24.5,14 C23.53225,14 22.75,14.78225 22.75,15.75 L22.75,38.5 L19.25,38.5 L19.25,22.75 C19.25,21.78225 18.46775,21 17.5,21 L1.75,21 C0.78225,21 0,21.78225 0,22.75 L0,40.25 C0,41.21775 0.78225,42 1.75,42 L40.25,42 C41.21775,42 42,41.21775 42,40.25 L42,15.75 C42,14.78225 41.21775,14 40.25,14 Z M12.25,36.75 L7,36.75 L7,33.25 L12.25,33.25 L12.25,36.75 Z M12.25,29.75 L7,29.75 L7,26.25 L12.25,26.25 L12.25,29.75 Z M35,36.75 L29.75,36.75 L29.75,33.25 L35,33.25 L35,36.75 Z M35,29.75 L29.75,29.75 L29.75,26.25 L35,26.25 L35,29.75 Z M35,22.75 L29.75,22.75 L29.75,19.25 L35,19.25 L35,22.75 Z"></path>
                </g>
              </g>
            </g>
          </g>
        </svg>
      </div>
      <span class="nav-link-text ms-1">Data Buku</span>
    </a>
  </li>
</ul>
<ul class="navbar-nav">
  <li class="nav-item">
    <a class="nav-link" href="{{ route('pelanggan') }}">
      <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
        <svg width="12px" height="12px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
          <title>office</title>
          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g transform="translate(-1869.000000, -293.000000)" fill="#FFFFFF" fill-rule="nonzero">
              <g transform="translate(1716.000000, 291.000000)">
                <g id="office" transform="translate(153.000000, 2.000000)">
                  <path class="color-background opacity-6" d="M12.25,17.5 L8.75,17.5 L8.75,1.75 C8.75,0.78225 9.53225,0 10.5,0 L31.5,0 C32.46775,0 33.25,0.78225 33.25,1.75 L33.25,12.25 L29.75,12.25 L29.75,3.5 L12.25,3.5 L12.25,17.5 Z"></path>
                  <path class="color-background" d="M40.25,14 L24.5,14 C23.53225,14 22.75,14.78225 22.75,15.75 L22.75,38.5 L19.25,38.5 L19.25,22.75 C19.25,21.78225 18.46775,21 17.5,21 L1.75,21 C0.78225,21 0,21.78225 0,22.75 L0,40.25 C0,41.21775 0.78225,42 1.75,42 L40.25,42 C41.21775,42 42,41.21775 42,40.25 L42,15.75 C42,14.78225 41.21775,14 40.25,14 Z M12.25,36.75 L7,36.75 L7,33.25 L12.25,33.25 L12.25,36.75 Z M12.25,29.75 L7,29.75 L7,26.25 L12.25,26.25 L12.25,29.75 Z M35,36.75 L29.75,36.75 L29.75,33.25 L35,33.25 L35,36.75 Z M35,29.75 L29.75,29.75 L29.75,26.25 L35,26.25 L35,29.75 Z M35,22.75 L29.75,22.75 L29.75,19.25 L35,19.25 L35,22.75 Z"></path>
                </g>
              </g>
            </g>
          </g>
        </svg>
      </div>
      <span class="nav-link-text ms-1">Data Pelanggan</span>
    </a>
  </li>
</ul>
<ul class="navbar-nav">
  <li class="nav-item">
    <a class="nav-link active" href="{{ route('transaksi') }}">
      <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
        <svg width="12px" height="12px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
          <title>office</title>
          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g transform="translate(-1869.000000, -293.000000)" fill="#FFFFFF" fill-rule="nonzero">
              <g transform="translate(1716.000000, 291.000000)">
                <g id="office" transform="translate(153.000000, 2.000000)">
                  <path class="color-background opacity-6" d="M12.25,17.5 L8.75,17.5 L8.75,1.75 C8.75,0.78225 9.53225,0 10.5,0 L31.5,0 C32.46775,0 33.25,0.78225 33.25,1.75 L33.25,12.25 L29.75,12.25 L29.75,3.5 L12.25,3.5 L12.25,17.5 Z"></path>
                  <path class="color-background" d="M40.25,14 L24.5,14 C23.53225,14 22.75,14.78225 22.75,15.75 L22.75,38.5 L19.25,38.5 L19.25,22.75 C19.25,21.78225 18.46775,21 17.5,21 L1.75,21 C0.78225,21 0,21.78225 0,22.75 L0,40.25 C0,41.21775 0.78225,42 1.75,42 L40.25,42 C41.21775,42 42,41.21775 42,40.25 L42,15.75 C42,14.78225 41.21775,14 40.25,14 Z M12.25,36.75 L7,36.75 L7,33.25 L12.25,33.25 L12.25,36.75 Z M12.25,29.75 L7,29.75 L7,26.25 L12.25,26.25 L12.25,29.75 Z M35,36.75 L29.75,36.75 L29.75,33.25 L35,33.25 L35,36.75 Z M35,29.75 L29.75,29.75 L29.75,26.25 L35,26.25 L35,29.75 Z M35,22.75 L29.75,22.75 L29.75,19.25 L35,19.25 L35,22.75 Z"></path>
                </g>
              </g>
            </g>
          </g>
        </svg>
      </div>
      <span class="nav-link-text ms-1">Data Transaksi</span>
    </a>
  </li>
</ul>
@endsection
{{-- section untuk aside selesai --}}