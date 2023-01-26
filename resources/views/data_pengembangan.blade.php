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
                <th class="d-xl-table-cell">Nama Kegiatan</th>
                <th class="d-xl-table-cell">Nama Sub Kegiatan</th>
                <th class="d-xl-table-cell">Nama Sub Sub Kegiatan</th>
                <th class="d-xl-table-cell">Tanggal Pelaksanaan</th>
                <th class="d-xl-table-cell">Tempat Pelaksanaan</th>
                <th class="d-xl-table-cell">Jumlah Peserta</th>
                <th class="d-xl-table-cell">Jumlah Produk</th>
                <th class="d-xl-table-cell">Tanggal Edit</th>
                <th class="d-xl-table-cell">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $i = 1 ?>
              @foreach ($data as $d)
              <tr>
                <td class="d-xl-table-cell text-center">{{ $i++ }}</td>
                <td class="d-xl-table-cell">{{ $d->nama_program }}</td>
                <td class="d-xl-table-cell">{{ $d->nama_kegiatan }}</td>
                <td class="d-xl-table-cell">{{ $d->nama_sub_kegiatan }}</td>
                <td class="d-xl-table-cell text-center">{{ $d->nama_sub_sub_kegiatan }}</td>
                <td class="d-xl-table-cell">{{ $d->tanggal_pelaksanaan }}</td>
                <td class="d-xl-table-cell">{{ $d->tempat_pelaksanaan }}</td>
                <td class="d-xl-table-cell text-center">{{ $d->jumlah_peserta }}</td>
                <td class="d-xl-table-cell text-center">{{ $d->jumlah_produk }}</td>
                <td class="d-xl-table-cell text-center">{{ $d->update_at }}</td>
                <td class="d-xl-table-cell text-center nav-">
                  <div class="btn-group-vertical btn-group-lg mb-3" role="group" aria-label="Vertical button group">
                    <a class="btn btn-info" href="#">Detail</a>
                  </div>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection