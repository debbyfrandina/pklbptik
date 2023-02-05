@extends('layouts.main')

@section('container')
<nav class="navbar navbar-expand navbar-light navbar-bg mb-3 justify-content-between">
  <div class="navbar-collapse collapse">
    <h2><strong>Form Tata Usaha</strong></h2>
  </div>
  <!--search start -->
  <div class="d-flex flex-row-reverse">
    <form >
      <input name="keyword" type="text" placeholder="Search..." size="40" class="p-1 px-2" value={{ request('keyword') }}>
      <button class="btn btn-success" type="submit">Search</button>
    </form>
  </div>
</nav>

<div class="container-fluid p-0">
  <div class="d-flex justify-content-center mb-3">
    <a class="btn btn-success btn-primary" href="/input-tata-usaha">+ Add Data</a>
  </div>  
  
  {{-- table start --}}
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
            <?php $i = 1 ?>
            @foreach ($data as $d)
            <tr>
              <td class="d-xl-table-cell text-center">{{ $i++ }}</td>
              <td class="d-xl-table-cell">{{ $d->nama }}</td>
              <td class="d-xl-table-cell">{{ $d->tujuan }}</td>
              <td class="d-xl-table-cell">{{ $d->outcome }}</td>
              <td class="d-xl-table-cell text-center">{{ $d->jumlah }}</td>
              <td class="d-xl-table-cell text-center">{{ $d->updated_at }}</td>
              <td class="d-xl-table-cell text-center nav-">
                <div class="btn-group-vertical btn-group-lg mb-3" role="group" aria-label="Vertical button group">
                  <a href="storage/admin/{{$d->file_admin}}" class="btn btn-info" target="_blank">Detail</a>
                  <a href="/edit-tata-usaha/{{ $d->id }}" class="btn btn-warning" >Edit</a>
                  <form action="/form-tata-usaha/{{ $d->id }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-lg btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                  </form>
                </div>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

@endsection