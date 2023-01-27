@extends('layouts.main')

@section('container')
<nav class="navbar navbar-expand navbar-light navbar-bg mb-4">
  <div class="navbar-collapse collapse">
    <h1>TABLE</h1>
  </div>
</nav>


  <div class="container-fluid p-0">
    {{-- table start --}}
    <h1 class="h3 mb-3"><strong>Data</strong>Analytics</h1>
    <div class="row">
      <div class="table-full-width d-flex table-responsive">
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
                <th class="d-xl-table-cell">Nama</th>
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
                <td class="d-xl-table-cell text-center">Maharani Swas</td>
                <td class="d-xl-table-cell text-center nav-">
                  <div class="btn-group btn-group-lg mb-3" role="group" aria-label="Default button group">
                    <a class="btn btn-info" href="#">Detail</a>
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