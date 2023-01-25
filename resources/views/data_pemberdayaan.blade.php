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
                <th class="d-xl-table-cell">No</th>
                <th class="d-xl-table-cell">Nama Program</th>
                <th class="d-xl-table-cell">Tujuan</th>
                <th class="d-xl-table-cell">Outcome</th>
                <th class="d-xl-table-cell">Tanggal Pelaksanaan</th>
                <th class="d-xl-table-cell">Tempat Pelaksanaan</th>
                <th class="d-xl-table-cell">Jumlah Peserta</th>
                <th class="d-xl-table-cell">Jumlah Sekolah</th>
                <th class="d-xl-table-cell">Tanggal Edit</th>
                <th class="d-xl-table-cell">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="d-xl-table-cell text-center">1</td>
                <td class="d-xl-table-cell">Pelatihan Sistem abc untuk SMA</td>
                <td class="d-xl-table-cell">Memberikan sosialisasi pemanfaatan TIK sistem abc pada murid di SMA</td>
                <td class="d-xl-table-cell">Murid SMA yang mendapat pelatihan dapat mengimplementasi pemanfaatan TIK pd pembelajaran</td>
                <td class="d-xl-table-cell text-center">01-01-23</td>
                <td class="d-xl-table-cell">SMAN 1 ABC</td>
                <td class="d-xl-table-cell text-center">1000</td>
                <td class="d-xl-table-cell text-center">15</td>
                <td class="d-xl-table-cell text-center">01-01-01 23:59:59</td>
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