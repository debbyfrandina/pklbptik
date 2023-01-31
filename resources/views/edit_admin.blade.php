@extends('layouts.edit')

@section('container')
<nav class="navbar navbar-expand navbar-light navbar-bg mb-4">
  <div class="navbar-collapse collapse text-center">
    <h1 class="font-weight-bold text-uppercase">form</h1>
  </div>
</nav>

<div class="container-fluid p-0">

  
  <div class="mb-0">
    <h1 class="h3 d-inline align-middle">Forms</h1>
    <p class="badge bg-dark text-white ms-2">Semua kolom wajib diisi</p>
  </div>

  {{-- form start --}}
  <form method="POST" action="/edit-tata-usaha/submit" enctype="multipart/form-data">
    @csrf
  <div class="row">
    <div class="col-2 col-lg-12">
      <div class="card">

        <div class="card-body">
          <h5 class="card-title mb-0">Nama Kegiatan</h5><br>
          <input type="text" class="form-control" placeholder="Input nama kegiatan" required name="nama">
        </div>

        <div class="card-body">
          <h5 class="card-title mb-0">Tujuan Kegiatan</h5><br>
          <textarea class="form-control" rows="3" placeholder="Input tujuan kegiatan" required name="tujuan"></textarea>
        </div>
      
        <div class="card-body">
          <h5 class="card-title mb-0">Outcome</h5><br>
          <textarea class="form-control" rows="3" placeholder="Input outcome" required name="outcome"></textarea>
        </div>

        <div class="card-body">
          <h5 class="card-title mb-0">Jumlah</h5><br>
          <input class="form-control" rows="1" placeholder="Input jumlah" required name="jumlah"></textarea>       
        </div>

        <div class="card-body">
          <h5 class="card-title mb-0">Upload Berkas</h5><br>  
          <input type="file" class="form-control" name="file_admin" >
        </div>

        <div class="d-flex justify-content-center mb-3">
          <button class="btn btn-success btn-primary" required type="submit">Submit</button>
        </div>  
  
      </div>
    </div>
  </div>  
</div>
@endsection