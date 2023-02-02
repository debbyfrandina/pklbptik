@extends('layouts.edit')

@section('container')
<nav class="navbar navbar-expand navbar-light navbar-bg mb-4">
  <div class="navbar-collapse collapse text-center">
    <h1 class="font-weight-bold text-uppercase">form</h1>
  </div>
</nav>

<form method="POST" action="/edit-pemberdayaan/{{ $data->id }}" enctype="multipart/form-data">
  @method('put')
  @csrf

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
          <input type="text" class="form-control" placeholder="Input nama kegiatan" required name="nama_program" value="{{ $data->nama_program }}">
        </div>

        <div class="card-body">
          <h5 class="card-title mb-0">Tujuan Kegiatan</h5><br>
          <textarea class="form-control" rows="3" placeholder="Input tujuan kegiatan" required name="tujuan">{{ $data->tujuan }}</textarea>
        </div>
      
        <div class="card-body">
          <h5 class="card-title mb-0">Outcome</h5><br>
          <textarea class="form-control" rows="3" placeholder="Input outcome" required name="outcome" >{{ $data->outcome }}</textarea>
        </div>

        <div class="card-body">
          <h5 class="card-title mb-0">Tanggal Pelaksaan</h5><br>
          <input type="date" class="form-control" rows="1" placeholder="Input tanggal pelaksanaan" required name="tanggal_pelaksanaan" value="{{ $data->tanggal_pelaksanaan }}"></textarea>       
        </div>

        <div class="card-body">
          <h5 class="card-title mb-0">Tempat Pelaksanaan</h5><br>
          <input class="form-control" rows="1" placeholder="Input tempat pelaksanaan" required name="tempat_pelaksanaan" value="{{ $data->tempat_pelaksanaan }}"></textarea>       
        </div>

        <div class="card-body">
          <h5 class="card-title mb-0">Jumlah Peserta</h5><br>
          <input class="form-control" rows="1" placeholder="Input jumlah peserta" required name="jumlah_peserta" value="{{ $data->jumlah_peserta }}" ></textarea>       
        </div>

        <div class="card-body">
          <h5 class="card-title mb-0">Jumlah Sekolah</h5><br>
          <input class="form-control" rows="1" placeholder="Input jumlah sekolah" required name="jumlah_sekolah" value="{{ $data->jumlah_sekolah }}" ></textarea>       
        </div>

        <div class="card-body">
          <h5 class="card-title mb-0">Upload Berkas</h5><br>  
          <input type="file" class="form-control" name="file_pemberdayaan" value="{{ $data->file_pemberdayaan }}">
          <p>FIle tersimpan: {{ $data->file_pemberdayaan }}</p>
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