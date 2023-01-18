@extends('layouts.main')

@section('container')
<nav class="navbar navbar-expand navbar-light navbar-bg mb-4">
  <div class="navbar-collapse collapse text-center">
    <h1 class="font-weight-bold text-uppercase">generate akun</h1>
  </div>
</nav>

<div class="container-fluid p-0">
  {{-- form start --}}
    <div class="mb-0">
      <h1 class="h3 d-inline align-middle">Buat Akun Baru</h1>
      <p class="badge bg-dark text-white ms-2">Semua kolom wajib diisi</p>
    </div>

    <div class="row">
      <div class="col-2 col-lg-12">
        <div class="card">

          <div class="card-body">
            <h5 class="card-title mb-0">NIP</h5><br>
            <input type="text" class="form-control" placeholder="Input NIP" required>
          </div>

          <div class="card-body">
            <h5 class="card-title mb-0">Password</h5><br>
            <textarea class="form-control" rows="3" placeholder="Input Password" required></textarea>
          </div>
        
          <div class="card-body">
            <h5 class="card-title mb-0">Konfirmasi Password</h5><br>
            <textarea class="form-control" rows="3" placeholder="Ulangi Password" required></textarea>
          </div>

          <div class="card-body">
            <h5 class="card-title mb-0">Jabatan</h5><br>
            <select class="form-select mb-3">
                <option selected>Open this select menu</option>
                <option>Three</option>
            </select>
        </div>
    </div>

          <div class="d-flex justify-content-center mb-4">
            <button class="btn btn-success btn-primary">SUBMIT</button>
        </div>
      </div>
    </div>
    
</div>

     
@endsection