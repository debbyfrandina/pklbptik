@extends('layouts.main')

@section('container')
<nav class="navbar navbar-expand navbar-light navbar-bg mb-4">
  <div class="navbar-collapse collapse">
    <h1>TABLE</h1>
  </div>
</nav>


  <div class="container-fluid p-0">
    {{-- table start --}}
    <h1 class="h3 mb-3"><strong>Data</strong>Analytics</h1>
    <div class="row">
      <div class="table-full-width d-flex table-responsive">
        <div class="card flex-fill">
          <table class="table table-hover my-0">
            <thead class="align-center text-center">
              <tr>
                <th class="d-xl-table-cell ">No</th>
                <th class="d-xl-table-cell">Nama Program</th>
                <th class="d-xl-table-cell">Nama Kegiatan</th>
                <th class="d-xl-table-cell">Nama Sub Kegiatan</th>
                <th class="d-xl-table-cell">Nama Sub Sub Kegiatan</th>
                <th class="d-xl-table-cell">Tanggal Pelaksanaan</th>
                <th class="d-xl-table-cell">Tempat Pelaksanaan</th>
                <th class="d-xl-table-cell">Jumlah Peserta</th>
                <th class="d-xl-table-cell">Jumlah Produk</th>
                <th class="d-xl-table-cell">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="d-xl-table-cell text-center">1</td>
                <td class="d-xl-table-cell">Program Pengelolaan Pendidikan</td>
                <td class="d-xl-table-cell">Pengelolaan pendidikan SMK</td>
                <td class="d-xl-table-cell">Pengadaan  Alat & Peraga Siswa</td>
                <td class="d-xl-table-cell">
                  - Aplikasi prototype media pembelajaran berbasis edugame <br>
                  - Vodcast berbagi
                </td>
                <td class="d-xl-table-cell text-center">01/01/23 - 01/07/23</td>
                <td class="d-xl-table-cell text-center nav-">SMK N Tunas Bangsa Magelang</td>
                <td class="d-xl-table-cell text-center">1000</td>
                <td class="d-xl-table-cell text-center">3</td>
                <td class="d-xl-table-cell text-center nav-">
                  <div class="btn-group-vertical btn-group-lg mb-3" role="group" aria-label="Vertical button group">
                    <a class="btn btn-info" href="#">Detail</a>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection