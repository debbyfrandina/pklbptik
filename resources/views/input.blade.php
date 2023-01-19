@extends('layouts.main')

@section('container')
<nav class="navbar navbar-expand navbar-light navbar-bg mb-4">
  <div class="navbar-collapse collapse text-center">
    <h1 class="font-weight-bold text-uppercase">form</h1>
  </div>
</nav>

<div class="container-fluid p-0">

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

        <div class="card-body">
          <h5 class="card-title mb-0">Upload Berkas</h5><br>        
          <div class="form-control col-sm d-flex justify-content-center">
            <div class="box-container ">
              <div class="text-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" class="bi bi-upload" viewBox="0 0 16 16">
                  <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                  <path d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708l3-3z" />
                </svg>
              </div>
              <input type="file" name="berkas" /><br><br>
            </div>
          </div><br>
        </div>

        <div class="card-body"> 
          <div class="d-flex justify-content-center mb-3">
            <button class="btn btn-success btn-primary">SUBMIT</button>
          </div>   
        </div>
  
      </div>
    </div>
  </div>  
</div>
@endsection