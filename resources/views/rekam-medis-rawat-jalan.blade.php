@extends("layouts.app")

@section("style")
<link href="{{ asset('assets/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />
@endsection

	@section("wrapper")
	<!--start page wrapper -->
	<div class="page-wrapper">
		<div class="page-content">
			<!--breadcrumb-->
			<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
				<div class="breadcrumb-title pe-3">Rekam Medis</div>
				<div class="ps-3">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb mb-0 p-0">
							<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
							</li>
							<li class="breadcrumb-item active" aria-current="page">Rawat Jalan</li>
						</ol>
					</nav>
				</div>
			</div>
			<!--end breadcrumb-->
			<h6 class="mb-0 text-uppercase">Rekam Medis Rawat Jalan</h6>
			<hr/>
			@if((Auth::user()->role ?? '') == 'Pasien')
			<div class="card">
				<div class="card-body">
					<div class="table-responsive">
						<table id="example2" class="table table-striped table-bordered">
							<thead>
								<tr>
									<th>No</th>
									{{-- <th>Nama</th> --}}
									<th>Berat Badan (kg)</th>
									<th>Tinggi Badan (cm)</th>
									<th>Tekanan Darah</th>
									<th>Keluhan</th>
									<th>Diagnosis</th>
									<th>Tindakan</th>
									<th>Tanggal Periksa</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($rawat_jalans as $rawat_jalan)
								{{-- @foreach ($tanggal) --}}
								<tr>
									<td>{{ $loop->iteration }}</td>
									{{-- <td>{{ $rawat_jalan->nama }}</td> --}}
									<td>{{ $rawat_jalan->bb }}</td>
									<td>{{ $rawat_jalan->tb }}</td>
									<td>{{ $rawat_jalan->td }}</td>
									<td>{{ $rawat_jalan->keluhan }}</td>
									<td>{{ $rawat_jalan->diagnosis }}</td>
									<td>{{ $rawat_jalan->tindakan }}</td>
									<td></td>
								</tr>								
								{{-- @endforeach --}}
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
			@endif
			@if((Auth::user()->role ?? '') == 'Perawat')
			<div class="card">
				<div class="card-body">
					<div class="table-responsive">
						<table id="example2" class="table table-striped table-bordered">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama</th>
									<th>Keluhan</th>
									<th>Diagnosis</th>
									<th>Tindakan</th>
									<th>Tanggal Periksa</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($datas as $data)
								{{-- @foreach ($tanggal) --}}
								<tr>
									<td>{{ $loop->iteration }}</td>
									<td>{{ $data->nama }}</td>
									<td>{{ $data->keluhan }}</td>
									<td>{{ $data->diagnosis }}</td>
									<td>{{ $data->tindakan }}</td>
									<td></td>
								</tr>								
								{{-- @endforeach --}}
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
			@endif
			@if((Auth::user()->role ?? '') == 'Dokter')
			<div class="card">
				<div class="card-body">
					<div class="table-responsive">
						<table id="example2" class="table table-striped table-bordered">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama</th>
									<th>Keluhan</th>
									<th>Diagnosis</th>
									<th>Tindakan</th>
									<th>Tanggal Periksa</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($datas as $data)
								{{-- @foreach ($tanggal) --}}
								<tr>
									<td>{{ $loop->iteration }}</td>
									<td>{{ $data->nama }}</td>
									<td>{{ $data->keluhan }}</td>
									<td>{{ $data->diagnosis }}</td>
									<td>{{ $data->tindakan }}</td>
									<td></td>
								</tr>								
								{{-- @endforeach --}}
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
			@endif
			@if((Auth::user()->role ?? '') == 'Admin')
			<div class="card">
				<div class="card-body">
					<div class="table-responsive">
						<table id="example2" class="table table-striped table-bordered">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama</th>
									<th>Keluhan</th>
									<th>Diagnosis</th>
									<th>Tindakan</th>
									<th>Tanggal Periksa</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($datas as $data)
								{{-- @foreach ($tanggal) --}}
								<tr>
									<td>{{ $loop->iteration }}</td>
									<td>{{ $data->nama }}</td>
									<td>{{ $data->keluhan }}</td>
									<td>{{ $data->diagnosis }}</td>
									<td>{{ $data->tindakan }}</td>
									<td></td>
								</tr>								
								{{-- @endforeach --}}
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
			@endif
		</div>
	</div>
	<!--end page wrapper -->
	@endsection

@section("script")
<script src="{{ asset('assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script>
<script>
	$(document).ready(function() {
		$('#example').DataTable();
	} );
</script>
<script>
	$(document).ready(function() {
		var table = $('#example2').DataTable( {
			lengthChange: false,
			// buttons: [ 'copy', 'excel', 'pdf', 'print']
		} );
	
		table.buttons().container()
			.appendTo( '#example2_wrapper .col-md-6:eq(0)' );
	} );
</script>
@endsection