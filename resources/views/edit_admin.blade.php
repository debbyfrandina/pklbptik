@extends('layouts.edit')

@section('container')
<nav class="navbar navbar-expand navbar-light navbar-bg mb-4">
  <div class="navbar-collapse collapse text-center">
    <h2><strong>Edit Data Tata Usaha</strong></h2>
  </div>
</nav>

<form method="POST" action="/edit-tata-usaha/{{ $data->id }}" enctype="multipart/form-data">
  @method('put')
  @csrf

<div class="container-fluid p-0">
  {{-- form start --}}
  <form method="POST" action="/input-tata-usaha/submit" enctype="multipart/form-data">
    @csrf
  <div class="row">
    <div class="col-2 col-lg-12">
      <div class="card">

        <div class="card-body">
          <h5 class="card-title mb-0">Nama Kegiatan</h5><br>
          <input type="text" class="form-control" placeholder="Input nama kegiatan" required name="nama" value="{{ $data->nama }}">
        </div>

        <div class="card-body">
          <h5 class="card-title mb-0">Tujuan Kegiatan</h5><br>
          <textarea class="form-control" rows="3" placeholder="Input tujuan kegiatan" required name="tujuan">{{ $data->tujuan }}</textarea>
        </div>
      
        <div class="card-body">
          <h5 class="card-title mb-0">Outcome</h5><br>
          <textarea class="form-control" rows="3" placeholder="Input outcome" required name="outcome">{{ $data->outcome }}</textarea>
        </div>

        <div class="card-body">
          <h5 class="card-title mb-0">Jumlah</h5><br>
          <input class="form-control" rows="1" placeholder="Input jumlah" required name="jumlah" value="{{ $data->jumlah }}"></textarea>       
        </div>

        <div class="card-body">
          <h5 class="card-title mb-0">Upload Berkas</h5><br>  
          <input type="file" class="form-control" name="file_admin" >
          <p>File tersimpan: {{ $data->file_admin }}</p>
        </div>

        <div class="d-flex justify-content-center mb-3">
          <button class="btn btn-success btn-primary" required type="submit">Submit</button>
        </div>  
  
      </div>
    </div>
  </div>  
</div>
@endsection