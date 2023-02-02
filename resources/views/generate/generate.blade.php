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
            <h5 class="card-title mb-0">Nama Lengkap</h5><br>
            <input type="text" class="form-control" placeholder="Input nama lengkap" required name="nama">
          </div>

          <div class="card-body">
            <h5 class="card-title mb-0">Email</h5><br>
            <input type="text" class="form-control" placeholder="Input email" required name="email">
          </div>

          <div class="card-body">
            <h5 class="card-title mb-0">Password</h5><br>
            <input type="text" class="form-control" rows="3" placeholder="Input Password" required name="password"></textarea>
          </div>
        
          <div class="card-body">
            <h5 class="card-title mb-0">Konfirmasi Password</h5><br>
            <input type="text" class="form-control" rows="3" placeholder="Ulangi Password" required name="password"></textarea>
          </div>

          <div class="card-body">
            <h5 class="card-title mb-0">Jabatan</h5><br>
            <select class="form-select mb-3" name="jabatan">
                <option value='' selected disabled>--Pilih Jabatan--</option>
                <option value='admin'>Admin</option>
                <option value='pengembangan'>Sie Pengembangan</option>
                <option value='pemberdayaan'>Sie Pemberdayaan</option>
                <option value='pimpinan'>Pimpinan</option>
            </select>
        </div>
        <div class="d-flex justify-content-center mb-4">
            <button class="btn btn-success btn-primary">SUBMIT</button>
        </div>
      </div>
    </div>
    </div>
</div>

     
@endsection