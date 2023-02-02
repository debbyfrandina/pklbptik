<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/" />

	<title>Pelaporan Data - BPTIK DIKBUD JATENG</title>

	<link href="css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<div class="wrapper">
		<!-- sidebar start  -->
		<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<div class="sidebar-brand">
					<img class="rounded-circle" src="img/photos/logo.png" alt="" style="width: 50px; height: 60px;">
					<span class="align-middle ms-2">BPTIK DIKBUD</span>
        </div>
				
				<div>
					<div>
						<div class="d-flex align-items-center ms-4 mb-4">
							<div class="position-relative">
								<img class="rounded-circle" src="img/avatars/avatar-2.jpg" alt="" style="width: 40px; height: 40px;">
							<div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
						</div>
						<div class="ms-3">
							<h6 class="align-middle mb-0 text-light">{{ auth()->user()->nama }}</h6>
							<span>{{ auth()->user()->jabatan->nama }}</span>
						</div>
					</div>
				</div>
				
        <ul class="sidebar-nav">
          <li class="sidebar-item {{ ($title === "dashboard" ) ? 'active' : '' }}">
            <a class="sidebar-link " href="/">
              <i class="align-middle" data-feather="activity"></i> <span class="align-middle">Dashboard</span>
            </a>
          </li>

          <li class="sidebar-item {{ ($title === "Form Tata Usaha" ) ? 'active' : '' }}">
            <a class="sidebar-link " href="/form-tata-usaha">
              <i class="align-middle " data-feather="file-plus"></i> <span class="align-middle">Form Data TU</span>
            </a>
          </li>

          <li class="sidebar-item {{ ($title === "Data Tata Usaha" ) ? 'active' : '' }}">
            <a class="sidebar-link" href="/data-tata-usaha">
              <i class="align-middle" data-feather="file"></i> <span class="align-middle">Data Tata Usaha</span>
            </a>
          </li>

          <li class="sidebar-item {{ ($title === "List Akun" ) ? 'active' : '' }}">
            <a class="sidebar-link" href="/list-akun">
              <i class="align-middle" data-feather="user-plus"></i> <span class="align-middle">Generate Akun</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a class="sidebar-link" href="/logout">
              <i class="align-middle" data-feather="log-out"></i> <span class="align-middle">Logout</span>
            </a>
          </li>
        </ul>
          
          
      </div>
    </nav>
     
    {{-- navbar start --}}
		<div class="main d-flex flex-column min-vh-100">
			<nav class="navbar navbar-expand navbar-light navbar-bg mb-4">
				<div class="navbar-collapse collapse justify-content-center">
					<h1 class="font-weight-bold text-uppercase text-center">SISTEM INFORMASI PELAPORAN DATA KEGIATAN BPTIK</h1>
				</div>
			</nav>

      <!-- main start -->
      <div class="main">
        <div class="container">  
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
          {{-- table start --}}
          <div class="row">
            <div class="table-full-width d-flex">
              <div class="card flex-fill">
                <table class="table table-hover my-0">
                  <thead class="align-center text-center">
                    <tr>
                      <th class="d-xl-table-cell ">No</th>
                      <th class="d-xl-table-cell">Nama</th>
                      <th class="d-xl-table-cell">Email</th>
                      <th class="d-xl-table-cell">Jabatan</th>
                      <th class="d-xl-table-cell">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i = 1 ?>
                    @foreach ($data as $d)
                    <tr>
                      <td class="d-xl-table-cell text-center">{{ $i++ }}</td>
                      <td class="d-xl-table-cell">{{ $d->nama }}</td>
                      <td class="d-xl-table-cell">{{ $d->email }}</td>
                      <td class="d-xl-table-cell">{{ $d->jabatan_id->nama }}</td>
                      <td class="d-xl-table-cell text-center nav-">
                        <div class="btn-group-vertical btn-group-lg mb-3" role="group" aria-label="Vertical button group">
                          <a href="storage/admin/{{$d->file_admin}}" class="btn btn-info" target="_blank">Detail</a>
                          <a href="/edit-tata-usaha/" class="btn btn-warning" >Edit</a>
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
			</div>
			
      <!-- footer start -->
			<footer class="footer mt-auto">
				<div class="container-fluid row text-muted text-start">
					<p class="mb-0">
						<a class="text-muted" href="http://157.119.221.252" target="_blank"><strong>BPTIK DIKBUD JATENG</strong></a> &copy;
					</p>
				</div>
			</footer>
		</div>		
	</div>	
	

	<script src="js/app.js"></script>

</body>
</html>