@extends('layouts.app')

@section('judul')
<h6>Data Pelanggan</h6>
@endsection

@section('tombol_tambah')
  <a href="{{ route('pelanggan.tambah') }}" type="submit" class="btn bg-gradient-info w-50">Tambah Data</a>
@endsection

@section('content')
<table class="table align-items-center mb-0">
    <thead>
      <tr>
        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama Pelanggan</th>
        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No Tlp</th>
        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">aksi</th>
        <th class="text-secondary opacity-7"></th>
      </tr>
    </thead>
    <tbody>
          {{-- sintaks php untuk perulangan --}}
          @foreach ($pelanggan as $item)
            <tr>
              <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder" scope="row">{{ $item -> id }}</th>
              <td class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">{{ $item -> nama_pelanggan }}</td>
              <td class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">{{ $item -> no_tlp }}</td>
              <td class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">{{ $item -> email }}</td>
              <td>
                <a href="{{ route('pelanggan.tampilkandata', $item->id) }}" type="a" class="btn btn-primary">Edit</a>
                <a href="{{ route('pelanggan.deletedata', $item->id) }}" type="a" class="btn btn-danger">Hapus</a>
              </td>
            </tr>
          @endforeach
    </tbody>
  </table>
@endsection
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
      <a class="nav-link active" href="{{ route('pelanggan') }}">
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
      <a class="nav-link" href="{{ route('transaksi') }}">
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