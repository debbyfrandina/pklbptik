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
				
				@if (auth()->user())
					@if (auth()->user()->jabatan_id == 1)
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

					@elseif (auth()->user()->jabatan_id == 2)
					<ul class="sidebar-nav">
						<li class="sidebar-item {{ ($title === "dashboard" ) ? 'active' : '' }}">
							<a class="sidebar-link " href="/">
								<i class="align-middle" data-feather="activity"></i> <span class="align-middle">Dashboard</span>
							</a>
						</li>

						<li class="sidebar-item {{ ($title === "Form Pengembangan" ) ? 'active' : '' }}">
							<a class="sidebar-link " href="/form-pengembangan">
								<i class="align-middle " data-feather="file-plus"></i> <span class="align-middle">Form Sie Pengembangan</span>
							</a>
						</li>

						<li class="sidebar-item {{ ($title === "Data Pengembangan" ) ? 'active' : '' }}">
							<a class="sidebar-link" href="/data-pengembangan">
								<i class="align-middle" data-feather="file"></i> <span class="align-middle">Data Sie Pengembangan</span>
							</a>
						</li>

						<li class="sidebar-item">
							<a class="sidebar-link" href="/logout">
								<i class="align-middle" data-feather="log-out"></i> <span class="align-middle">Logout</span>
							</a>
						</li>
					</ul>

					@elseif (auth()->user()->jabatan_id == 3)
					<ul class="sidebar-nav">
						<li class="sidebar-item {{ ($title === "dashboard" ) ? 'active' : '' }}">
							<a class="sidebar-link " href="/">
								<i class="align-middle" data-feather="activity"></i> <span class="align-middle">Dashboard</span>
							</a>
						</li>

						<li class="sidebar-item {{ ($title === "Form Pemberdayaan" ) ? 'active' : '' }}">
							<a class="sidebar-link " href="/form-pemberdayaan">
								<i class="align-middle " data-feather="file-plus"></i> <span class="align-middle">Form Data Pemberdayaan</span>
							</a>
						</li>

						<li class="sidebar-item {{ ($title === "Data Pemberdayaan" ) ? 'active' : '' }}">
							<a class="sidebar-link" href="/data-pemberdayaan">
								<i class="align-middle" data-feather="file"></i> <span class="align-middle">Data Sie Pemberdayaan</span>
							</a>
						</li>

						<li class="sidebar-item">
							<a class="sidebar-link" href="/logout">
								<i class="align-middle" data-feather="log-out"></i> <span class="align-middle">Logout</span>
							</a>
						</li>
					</ul>

					@elseif (auth()->user()->jabatan_id == 4)
					<ul class="sidebar-nav">
						<li class="sidebar-item {{ ($title === "dashboard" ) ? 'active' : '' }}">
							<a class="sidebar-link " href="/">
								<i class="align-middle" data-feather="activity"></i> <span class="align-middle">Dashboard</span>
							</a>
						</li>

						<li class="sidebar-item {{ ($title === "Data Tata Usaha" ) ? 'active' : '' }}">
							<a class="sidebar-link" href="/data-tata-usaha">
								<i class="align-middle" data-feather="file"></i> <span class="align-middle">Data Tata Usaha</span>
							</a>
						</li>

						<li class="sidebar-item {{ ($title === "data pengembangan" ) ? 'active' : '' }}">
							<a class="sidebar-link" href="/data-pengembangan">
								<i class="align-middle" data-feather="file"></i> <span class="align-middle">Data Sie Pengembangan</span>
							</a>
						</li>
						<li class="sidebar-item {{ ($title === "data pemberdayaan" ) ? 'active' : '' }}">
							<a class="sidebar-link" href="/data-pemberdayaan">
								<i class="align-middle" data-feather="file"></i> <span class="align-middle">Data Sie Pemberdayaan</span>
							</a>
						</li>

						<li class="sidebar-item">
							<a class="sidebar-link" href="/logout">
								<i class="align-middle" data-feather="log-out"></i> <span class="align-middle">Logout</span>
							</a>
						</li>
					</ul>
					@endif

				@else
				<ul class="sidebar-nav">
					<li class="sidebar-item {{ ($title === "dashboard" ) ? 'active' : '' }}">
						<a class="sidebar-link " href="/">
              <i class="align-middle" data-feather="activity"></i> <span class="align-middle">Dashboard</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="/login">
              <i class="align-middle" data-feather="log-out"></i> <span class="align-middle">Login</span>
            </a>
					</li>
				</ul>

				@endif

				<div>
					@if (auth()->user())
					<div>
						<div class="d-flex align-items-center ms-4 mb-4 col-auto">
							<div class="stat text-primary " >
								<i class="align-middle text-light"  data-feather="user"></i>
							</div>
							<div class="ms-3">
								<h4 class="align-middle mb-0 text-light" >{{ auth()->user()->nama }}</h4>
								<span>{{ auth()->user()->jabatan->nama }}</span>
							</div>
						</div>
					</div>

					@else
					<div class="d-flex align-items-center ms-4 mb-4">
						<div class="ms-3">
							<i class="fas fa-camera fa-3x align-middle"></i>
							<span class="align-midle text-light">Viewer</span>
						</div>
					</div>
					@endif
				</div>

			</div>
		</nav>

		{{-- navbar start --}}
		<div class="main d-flex flex-column min-vh-100">
			<nav class="navbar navbar-expand navbar-light navbar-bg mb-4">
				<div class="navbar-collapse collapse justify-content-center">
					<h1 class="font-weight-bold text-uppercase text-center">SISTEM INFORMASI PELAPORAN DATA KEGIATAN BPTIK</h1>
				</div>
			</nav>
			<!-- content start -->
			<div class="container">

				@yield('container')
			</div>
			
			
			<footer class="footer mt-auto">
				<div class="container-fluid row text-muted text-start">
					<p class="mb-0">
						<a class="text-muted" href="http://157.119.221.252" target="_blank"><strong>BPTIK DIKBUD JATENG</strong></a> &copy;
					</p>
				</div>
			</footer>
		</div>		
	</div>	
	<!-- footer start -->
	

	<script src="js/app.js"></script>

</body>
</html>