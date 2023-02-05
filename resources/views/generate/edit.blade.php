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
  <link rel="shortcut icon" href="img/photos/logo.png" />

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
          <li class="sidebar-item {{ ($title === "Generate Akun" ) ? 'active' : '' }}">
            <a class="sidebar-link " href="/generate-akun">
              <i class="align-middle" data-feather="activity"></i> <span class="align-middle">Generate Akun</span>
            </a>
          </li>

          <li class="sidebar-item {{ ($title === "List Akun" ) ? 'active' : '' }}">
            <a class="sidebar-link " href="/list-akun">
              <i class="align-middle " data-feather="arrow-left"></i> <span class="align-middle">Kembali</span>
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
          <nav class="navbar navbar-expand navbar-light navbar-bg mb-4">
            <div class="navbar-collapse collapse text-center">
              <h1 class="font-weight-bold text-uppercase">Generate Akun</h1>
            </div>
          </nav>   

          <div class="container-fluid p-0">          
          {{-- table start --}}
          <form method="POST" action="/generate-akun/submit" >
            @csrf
          <div class="row">
            <div class="col-2 col-lg-12">
              <div class="card">
      
                <div class="card-body">
                  <h5 class="card-title mb-0 ">Nama Lengkap</h5><br>
                  <input type="text" class="form-control text-capitalize" placeholder="Input nama lengkap" required name="nama" value="{{ $data->nama }}">
                </div>
      
                <div class="card-body">
                  <h5 class="card-title mb-0">Email</h5><br>
                  <input type="email" class="form-control" placeholder="Input email" required name="email" value="{{ $data->tujuan }}">
                </div>
      
                <div class="card-body">
                  <h5 class="card-title mb-0">Password</h5><br>
                  <input type="text" class="form-control" rows="3" placeholder="Input Password" required name="password" value="{{ $data->password }}">
                </div>
      
                <div class="card-body">
                  <h5 class="card-title mb-0">Jabatan</h5><br>
                  <select class="form-select mb-3" name="jabatan_id" value="{{ $data->jabatan_id }}">
                      <option value='' selected disabled>--Pilih Jabatan--</option>
                      <option value='1'>Admin</option>
                      <option value='2'>Sie Pengembangan</option>
                      <option value='3'>Sie Pemberdayaan</option>
                      <option value='4'>Pimpinan</option>
                  </select>
              </div>

              <div class="d-flex justify-content-center mb-4">
                  <button class="btn btn-success btn-primary">SUBMIT</button>
              </div>
            </div>
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
	

	<script src="js/app.js"></script>

</body>
</html>