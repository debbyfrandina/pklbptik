@extends('layouts.edit')

@section('container')
<nav class="navbar navbar-expand navbar-light navbar-bg mb-4">
  <div class="navbar-collapse collapse text-center">
    <h1 class="font-weight-bold text-uppercase">form</h1>
  </div>
</nav>

<form method="POST" action="/edit-pengembangan/{{ $data->id }}" enctype="multipart/form-data">
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
          <h5 class="card-title mb-0">Nama Program</h5><br>
          <input type="text" class="form-control" placeholder="Input nama program" required name="nama_program" value="{{ $data->nama_program }}">
        </div>

        <div class="card-body">
          <h5 class="card-title mb-0">Nama Kegiatan</h5><br>
          <input class="form-control" rows="3" placeholder="Input nama kegiatan" required name="nama_kegiatan" value="{{ $data->nama_kegiatan }}">
        </div>

        <div class="card-body">
          <h5 class="card-title mb-0">Nama Sub Kegiatan</h5><br>
          <textarea class="form-control" rows="3" placeholder="Input sub kegiatan" required name="nama_sub_kegiatan">{{ $data->nama_sub_kegiatan }}</textarea>
        </div>

        <div class="card-body">
          <h5 class="card-title mb-0">Nama Sub-Sub Kegiatan</h5><br>
          <textarea class="form-control" rows="3" placeholder="Input sub-sub kegiatan" required name="nama_sub_sub_kegiatan">{{ $data->nama_sub_sub_kegiatan }}</textarea>
        </div>

        <div class="card-body">
          <h5 class="card-title mb-0">Tanggal Mulai Pelaksanaan</h5><br>
          <input type="date" class="form-control" rows="1" placeholder="Input mulai pelaksanaan" required name="tanggal_mulai" value="{{ $data->tanggal_mulai }}">
        </div>

        <div class="card-body">
          <h5 class="card-title mb-0">Tanggal Akhir Pelaksanaan</h5><br>
          <input type="date" class="form-control" rows="1" placeholder="Input tanggal akhir pelaksanaan" required name="tanggal_selesai" value="{{ $data->tanggal_selesai }}">
        </div>

        <div class="card-body">
          <h5 class="card-title mb-0">Tempat Pelaksanaan</h5><br>
          <input class="form-control" rows="1" placeholder="Input tempat pelaksanaan" required name="tempat_pelaksanaan" value="{{ $data->tempat_pelaksanaan }}">
        </div>

        <div class="card-body">
          <h5 class="card-title mb-0">Jumlah Peserta</h5><br>
          <input class="form-control" rows="1" placeholder="Input jumlah peserta" required name="jumlah_peserta" value="{{ $data->jumlah_peserta }}">
        </div>

        <div class="card-body">
          <h5 class="card-title mb-0">Jumlah Produk</h5><br>
          <input class="form-control" rows="1" placeholder="Input jumlah produk" required name="jumlah_produk" value="{{ $data->jumlah_produk }}">
        </div>
      
        <div class="card-body">
          <h5 class="card-title mb-0">Upload Berkas</h5><br>  
          <input type="file" class="form-control" name="file_pengembangan" >
          <p>File tersimpan: {{ $data->file_pengembangan }}</p>
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