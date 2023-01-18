@extends('layouts.main')

@section('container')
<nav class="navbar navbar-expand navbar-light navbar-bg mb-4">
  <div class="navbar-collapse collapse text-center">
    <h1 class="font-weight-bold text-uppercase">form</h1>
  </div>
</nav>

<div class="container-fluid p-0">
  {{-- table start --}}
  <h1 class="h3 mb-3"><strong>Data</strong>Analytics</h1>
  <div class="row">
    <div class="table-full-width d-flex">
      <div class="card flex-fill">
        <table class="table table-hover my-0">
          <thead class="align-center text-center">
            <tr>
              <th class="d-xl-table-cell ">No</th>
              <th class="d-xl-table-cell">Nama Program</th>
              <th class="d-xl-table-cell">Tujuan</th>
              <th class="d-xl-table-cell">Outcome</th>
              <th class="d-xl-table-cell">Jumlah Output</th>
              <th class="d-xl-table-cell">Tanggal Edit</th>
              <th class="d-xl-table-cell">Aksi</th>
              
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="d-xl-table-cell text-center">1</td>
              <td class="d-xl-table-cell">Workshop SMAN 1</td>
              <td class="d-xl-table-cell">memberikan sosialisasi pemanfaatan TIK pada murid di SMAN 1</td>
              <td class="d-xl-table-cell">Murid dapat mengimplementasi pemanfaatan TIK pd pembelajaran</td>
              <td class="d-xl-table-cell text-center">1000</td>
              <td class="d-xl-table-cell text-center">01-01-01 23:59:59</td>
              <td class="d-xl-table-cell text-center">
                <a class="btn btn-info btn-sm" href="#">Detail</a>
                <a class="btn btn-warning btn-sm"  href="#">Edit</a>
                <a class="btn btn-danger btn-sm"  href="#">Delete</a>
              </td>
            </tr>
            
          </tbody>
        </table>
      </div>
    </div>
  </div>

  {{-- form start --}}
    <div class="mb-0">
      <h1 class="h3 d-inline align-middle">Forms</h1>
      <p class="badge bg-dark text-white ms-2">Semua kolom wajib diisi</p>
    </div>

    <div class="row">
      <div class="col-2 col-lg-12">
        <div class="card">

          <div class="card-body">
            <h5 class="card-title mb-0">Nama Kegiatan</h5><br>
            <input type="text" class="form-control" placeholder="Input nama kegiatan" required>
          </div>

          <div class="card-body">
            <h5 class="card-title mb-0">Tujuan Kegiatan</h5><br>
            <textarea class="form-control" rows="3" placeholder="Input tujuan kegiatan" required></textarea>
          </div>
        
          <div class="card-body">
            <h5 class="card-title mb-0">Outcome</h5><br>
            <textarea class="form-control" rows="3" placeholder="Input outcome" required></textarea>
          </div>

          <div class="card-body">
            <h5 class="card-title mb-0">Jumlah</h5><br>
            <input class="form-control" rows="1" placeholder="Input jumlah" required></textarea>       
          </div>
        </div>
      </div>
    </div>
    
</div>

     
@endsection