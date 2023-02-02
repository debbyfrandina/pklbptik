@extends('layouts.input')

@section('container')
<nav class="navbar navbar-expand navbar-light navbar-bg mb-3">
  <div class="navbar-collapse collapse text-center">
    <h1 class="font-weight-bold">Input Data Seksi Pengembangan</h1>
  </div>
</nav>

{{-- form start --}}
<div class="container-fluid p-0"> 
  <form method="POST" action="/input-pengembangan/submit" enctype="multipart/form-data">
  @csrf
   <div class="row">
    <div class="col-2 col-lg-12">
      <div class="card">

        <div class="card-body">
          <h5 class="card-title mb-0">Nama Program</h5><br>
          <input type="text" class="form-control" placeholder="Input nama program" required name="nama_program">
        </div>

        <div class="card-body">
          <h5 class="card-title mb-0">Nama Kegiatan</h5><br>
          <input class="form-control" rows="3" placeholder="Input nama kegiatan" required name="nama_kegiatan">
        </div>

        <div class="card-body">
          <h5 class="card-title mb-0">Nama Sub Kegiatan</h5><br>
          <textarea class="form-control" rows="3" placeholder="Input sub kegiatan" required name="nama_sub_kegiatan"></textarea>
        </div>

        <div class="card-body">
          <h5 class="card-title mb-0">Nama Sub-Sub Kegiatan</h5><br>
          <textarea class="form-control" rows="3" placeholder="Input sub-sub kegiatan" required name="nama_sub_sub_kegiatan"></textarea>
        </div>

        <div class="card-body">
          <h5 class="card-title mb-0">Tanggal Mulai Pelaksanaan</h5><br>
          <input type="date" class="form-control" rows="1" placeholder="Input mulai pelaksanaan" required name="tanggal_mulai"></textarea>
        </div>

        <div class="card-body">
          <h5 class="card-title mb-0">Tanggal Akhir Pelaksanaan</h5><br>
          <input type="date" class="form-control" rows="1" placeholder="Input tanggal akhir pelaksanaan" required name="tanggal_selesai"></textarea>
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
          <h5 class="card-title mb-0">Jumlah Produk</h5><br>
          <input class="form-control" rows="1" placeholder="Input jumlah produk" required name="jumlah_produk"></textarea>
        </div>
      
        <div class="card-body">
          <h5 class="card-title mb-0">Upload Berkas</h5><br>  
          <input type="file" class="form-control" name="file_pengembangan" >
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