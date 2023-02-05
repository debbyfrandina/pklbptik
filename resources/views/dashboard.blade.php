@extends('layouts.main')

<!doctype html>
<html lang="en" data-bs-theme="dark">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BPTIK DIKBUD JATENG</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>

@section('container')

<main class="content p-0">
	<div class="container-fluid p-0 mt-0">

		<div class="row mt-0">
			<div class="col-xl-6 col-xxl-5 d-flex">
				<div class="w-100">
					<div class="row">

						<h5> <strong>Total Capaian Seksi Pemberdayaan</strong> </h5>
						<div class="col-sm-6">
							{{-- Total siswa start --}}
							<div class="card">
								<div class="card-body">
									<div class="row">
										<div class="col mt-0">
											<h5 class="card-title">Siswa</h5>
										</div>
										<div class="col-auto">
											<div class="stat text-primary">
												<i class="align-middle" data-feather="truck"></i>
											</div>
										</div>
									</div>
									<h1 class="mt-1 mb-3">{{ $totalSiswa }}</h1>
									<div class="mb-0">
										<span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -3.65% </span>
										<span class="text-muted">Since last week</span>
									</div>
								</div>
							</div>

							{{-- Total sekolah start --}}
							<div>
								<h5>Capaian Seksi Pemberdayaan</h5>
								<div class="card">
									<div class="card-body">
										<div class="row">
											<div class="col mt-0">
												<h5 class="card-title">Sekolah</h5>
											</div>
	
											<div class="col-auto">
												<div class="stat text-primary">
													<i class="align-middle" data-feather="users"></i>
												</div>
											</div>
										</div>
										<h1 class="mt-1 mb-3">14.212</h1>
										<div class="mb-0">
											<span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> 5.25% </span>
											<span class="text-muted">Since last week</span>
										</div>
									</div>
								</div>
							</div>

							
							</div>
							
						
						<div class="col-sm-6">
							<div class="card ">
								<div class="card-body">
									<div class="row">
										<div class="col mt-0">
											<h5 class="card-title">Earnings</h5>
										</div>

										<div class="col-auto">
											<div class="stat text-primary">
												<i class="align-middle" data-feather="dollar-sign"></i>
											</div>
										</div>
									</div>
									<h1 class="mt-1 mb-3">$21.300</h1>
									<div class="mb-0">
										<span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> 6.65% </span>
										<span class="text-muted">Since last week</span>
									</div>
								</div>
							</div>

							<div class="card mt-5">
								<div class="card-body">
									<div class="row">
										<div class="col mt-0">
											<h5 class="card-title">Orders</h5>
										</div>

										<div class="col-auto">
											<div class="stat text-primary">
												<i class="align-middle" data-feather="shopping-cart"></i>
											</div>
										</div>
									</div>
									<h1 class="mt-1 mb-3">64</h1>
									<div class="mb-0">
										<span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -2.25% </span>
										<span class="text-muted">Since last week</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			{{-- chart pemberdayaan start --}}
			<div class="col-xl-6 col-xxl-7">
				<div class="card flex-fill w-100">
					<div class="card-header">

						<h3 class="card-title mb-4">chart pemberdayaan</h3>
						<div class="d-flex justify-content-center mt-2">
							<div class="me-5 d-flex align-items-center">
								<div class="warna-siswa"></div>
								<p class="ms-1 mb-0">Jumlah Siswa</p>
							</div>
							<div class="d-flex align-items-center">
								<div class="warna-sekolah"></div>
								<p class="ms-1 mb-0">Jumlah Sekolah</p>
							</div>
						</div>
					</div>
					<div class="card-body py-3">
						<div class="chart chart-sm">
							<canvas id="chartjs-pemberdayaan"></canvas>
						</div>
					</div>
				</div>
			</div>

		</div>

		<div class="row">
			{{-- chart pengembangan start --}}
			<div class="col-12  col-xxl-7 d-flex order-3 order-xxl-1">
				<div class="card flex-fill w-100">
					<div class="card-header">
						<h5 class="card-title mb-4">chart pengembangan</h5>
						<div class="d-flex justify-content-center mt-2">
							<div class="me-5 d-flex align-items-center">
								<div class="warna-siswa"></div>
								<p class="ms-1 mb-0">Jumlah Peserta</p>
							</div>
							<div class="d-flex align-items-center">
								<div class="warna-sekolah"></div>
								<p class="ms-1 mb-0">Jumlah Poduk</p>
							</div>
						</div>
					</div>
					<div class="card-body py-3">
						<div class="chart chart-sm">
							<canvas id="chartjs-pengembangan"></canvas>
						</div>
					</div>
				</div>
			</div>

			{{-- chart total list start--}}
			<div class="col-12 col-md-6 col-xxl-5 d-flex order-2 order-xxl-3">
				<div class="card flex-fill w-100">
					<div class="card-header">

						<h5 class="card-title mb-0">Browser Usage</h5>
					</div>
					<div class="card-body d-flex">
						<div class="align-self-center w-100">
							<div class="py-3">
								<div class="chart chart-xs">
									<canvas id="chartjs-dashboard-pie"></canvas>
								</div>
							</div>

							<table class="table mb-0">
								<tbody>
									<tr>
										<td>Data Pemberdayaan</td>
										<td class="text-end">{{ $dataList[0] }}</td>
									</tr>
									<tr>
										<td>Data Pengembangan</td>
										<td class="text-end">{{ $dataList[1] }}</td>
									</tr>
									<tr>
										<td>Laporan</td>
										<td class="text-end">{{ $dataList[2] }}</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			
			{{-- <div class="col-12 col-md-6 col-xxl-3 d-flex order-1 order-xxl-2">
				<div class="card flex-fill">
					<div class="card-header">

						<h5 class="card-title mb-0">Calendar</h5>
					</div>
					<div class="card-body d-flex">
						<div class="align-self-center w-100">
							<div class="chart">
								<div id="calender"></div>
							</div>
						</div>
					</div>
				</div>
			</div> --}}

		</div>

	</div>
</main>
<script>
	document.addEventListener("DOMContentLoaded", function() {
		// Bar chart
		new Chart(document.getElementById("chartjs-pemberdayaan"), {
			type: "bar",
			data: {
				labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
				datasets: [{
					label: "Jumlah siswa",
					backgroundColor: window.theme.primary,
					borderColor: window.theme.primary,
					hoverBackgroundColor: window.theme.primary,
					hoverBorderColor: window.theme.primary,
					data: @json($dataSiswa),
					barPercentage: .75,
					categoryPercentage: .5
				}, {
					label: "Jumlah sekolah",
					backgroundColor: "#009846",
					borderColor: "#009846",
					hoverBackgroundColor: "#009846",
					hoverBorderColor: "#009846",
					data: @json($dataSekolah),
					barPercentage: .75,
					categoryPercentage: .5
				}]
			},
			options: {
				maintainAspectRatio: false,
				legend: {
					display: false
				},
				scales: {
					yAxes: [{
						gridLines: {
							display: false
						},
						stacked: false,
						ticks: {
							stepSize: 20
						}
					}],
					xAxes: [{
						stacked: false,
						gridLines: {
							color: "transparent"
						}
					}]
				}
			}
		});
	});
</script>

<script>
	document.addEventListener("DOMContentLoaded", function() {
		// Bar chart
		new Chart(document.getElementById("chartjs-pengembangan"), {
			type: "bar",
			data: {
				labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
				datasets: [{
					label: "Jumlah siswa",
					backgroundColor: window.theme.primary,
					borderColor: window.theme.primary,
					hoverBackgroundColor: window.theme.primary,
					hoverBorderColor: window.theme.primary,
					data: @json($dataPeserta),
					barPercentage: .75,
					categoryPercentage: .5
				}, {
					label: "Jumlah sekolah",
					backgroundColor: "#009846",
					borderColor: "#009846",
					hoverBackgroundColor: "#009846",
					hoverBorderColor: "#009846",
					data: @json($dataProduk),
					barPercentage: .75,
					categoryPercentage: .5
				}]
			},
			options: {
				maintainAspectRatio: false,
				legend: {
					display: false
				},
				scales: {
					yAxes: [{
						gridLines: {
							display: false
						},
						stacked: false,
						ticks: {
							stepSize: 20
						}
					}],
					xAxes: [{
						stacked: false,
						gridLines: {
							color: "transparent"
						}
					}]
				}
			}
		});
	});
</script>

<script>
	document.addEventListener("DOMContentLoaded", function() {
		// Pie chart
		new Chart(document.getElementById("chartjs-dashboard-pie"), {
			type: "pie",
			data: {
				labels: ["Chrome", "Firefox", "IE"],
				datasets: [{
					data: @json($dataList),
					backgroundColor: [
						window.theme.primary,
						window.theme.warning,
						window.theme.danger
					],
					borderWidth: 5
				}]
			},
			options: {
				responsive: !window.MSInputMethodContext,
				maintainAspectRatio: false,
				legend: {
					display: false
				},
				cutoutPercentage: 75
			}
		});
	});
</script>

{{-- <script>
	document.addEventListener("DOMContentLoaded", function() {
		var date = new Date(Date.now() - 5 * 24 * 60 * 60 * 1000);
		var defaultDate = date.getUTCFullYear() + "-" + (date.getUTCMonth() + 1) + "-" + date.getUTCDate();
		document.getElementById("datetimepicker-dashboard").flatpickr({
			inline: true,
			prevArrow: "<span title=\"Previous month\">&laquo;</span>",
			nextArrow: "<span title=\"Next month\">&raquo;</span>",
			defaultDate: defaultDate
		});
	});
</script> --}}



@endsection
