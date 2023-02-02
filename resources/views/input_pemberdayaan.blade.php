@extends('layouts.input')

@section('container')
<nav class="navbar navbar-expand navbar-light navbar-bg mb-3">
  <div class="navbar-collapse collapse text-center">
    <h1 class="font-weight-bold">Input Data Seksi Pemberdayaan</h1>
  </div>
</nav>

{{-- form start --}}
<form method="POST" action="/input-pemberdayaan/submit" enctype="multipart/form-data">
  @csrf
<div class="container-fluid p-0">
  <div class="row">
    <div class="col-2 col-lg-12">
      <div class="card">

        <div class="card-body">
          <h5 class="card-title mb-0">Nama Kegiatan</h5><br>
          <input type="text" class="form-control" placeholder="Input nama kegiatan" required name="nama_program">
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
          <h5 class="card-title mb-0">Tanggal Pelaksaan</h5><br>
          <input type="date" class="form-control" rows="1" placeholder="Input tanggal pelaksanaan" required name="tanggal_pelaksanaan"></textarea>       
        </div>

        <div class="card-body">
          <h5 class="card-title mb-0">Tempat Pelaksanaan</h5><br>
          <input class="form-control" rows="1" placeholder="Input tempat pelaksanaan" required name="tempat_pelaksanaan"></textarea>       
        </div>

        <div class="card-body">
          <h5 class="card-title mb-0">Jumlah Peserta</h5><br>
          <input class="form-control" rows="1" placeholder="Input jumlah peserta" required name="jumlah_peserta"></textarea>       
        </div>

        <div class="card-body">
          <h5 class="card-title mb-0">Jumlah Sekolah</h5><br>
          <input class="form-control" rows="1" placeholder="Input jumlah sekolah" required name="jumlah_sekolah"></textarea>       
        </div>

        <div class="card-body">
          <h5 class="card-title mb-0">Upload Berkas</h5><br>  
          <input type="file" class="form-control" name="file_pemberdayaan" >
        </div>

        <div class="d-flex justify-content-center mb-3">
          <button class="btn btn-success btn-primary" type="submit">Submit</button>
        </div>  
  
      </div>

      
     

    </div>
  </div>  
</div>
</form>
@endsection