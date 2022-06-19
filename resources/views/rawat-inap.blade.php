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
			<div class="breadcrumb-title pe-3"><a href="{{ url('rawat-inap') }}">Rawat Inap</a></div>
			<div class="ps-3">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb mb-0 p-0">
						<li class="breadcrumb-item"><a href="javaScript:;"><i class="bx bx-home-alt"></i></a>
						</li>
						@if((Auth::user()->role ?? '') == 'Pasien')
						<li class="breadcrumb-item active" aria-current="page">Formulir Pendaftaran</li>
						@endif
						@if((Auth::user()->role ?? '') == 'Dokter')
						<li class="breadcrumb-item active" aria-current="page">Data Pendaftaran Pasien</li>
						@endif
					</ol>
				</nav>
			</div>
			{{-- <div class="ms-auto">
				<div class="btn-group">
					<button type="button" class="btn btn-light">Settings</button>
					<button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
					</button>
					<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
						<a class="dropdown-item" href="javascript:;">Another action</a>
						<a class="dropdown-item" href="javascript:;">Something else here</a>
						<div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
					</div>
				</div>
			</div> --}}
		</div>
		<!--end breadcrumb-->
		<div class="row">
			<div class="col-xl-11 mx-auto">
				{{-- <h6 class="mb-0 text-uppercase">Basic Form</h6> --}}
				@if(session()->has('success'))
					<div class="alert border-0 border-start border-5 border-white alert-dismissible fade show py-2">
						<div class="d-flex align-items-center">
							<div class="font-35 text-white"><i class='bx bxs-check-circle'></i>
							</div>
							<div class="ms-3">
								{{ session('success') }}
							</div>
						</div>
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
				@endif
				<hr/>
				@if((Auth::user()->role ?? '') == 'Pasien')
				<div class="card border-top border-0 border-4 border-white">
					<div class="card-body p-5">
						<div class="card-title d-flex align-items-center">
							<div><i class="lni lni-sthethoscope me-2 font-22 text-white"></i>
							</div>
							<h5 class="mb-0 text-white">Formulir Pendaftaran Rawat Inap</h5>
						</div>
						<hr>
						<form class="row g-3" action="/rawat-inap" method="post">
							@csrf

							<div class="col-md-12">
								<label for="ttl" class="form-label">Tempat, Tanggal Lahir</label>
								<input type="text" name="ttl" class="form-control" id="ttl" placeholder="Tempat, Tanggal Lahir" value="{{ auth()->user()->ttl }}" disabled>
							</div>
							<div class="col-md-12">
								<label for="bb" class="form-label">Berat Badan</label>
								<input type="text" name="bb" class="form-control" id="bb" placeholder="Berat Badan" value="{{ old('bb') }}">
							</div>
							<div class="col-md-12">
								<label for="tb" class="form-label">Tinggi Badan</label>
								<input type="text" name="tb" class="form-control" id="tb" placeholder="Tinggi Badan" value="{{ old('tb') }}">
							</div>
							<div class="col-md-12">
								<label for="td" class="form-label">Tekanan Darah</label>
								<input type="text" name="td" class="form-control" id="td" placeholder="Tekanan Darah" value="{{ old('td') }}">
							</div>
							<div class="col-12">
								<label for="keluhan" class="form-label">Keluhan</label>
								<textarea type="text" name="keluhan" class="form-control" id="keluhan" placeholder="Keluhan" rows="3" required value="{{ old('keluhan') }}"></textarea>
							</div>
							@if((Auth::user()->role ?? '') == 'Dokter')
							<div class="col-12">
								<label for="diagnosis" class="form-label">Diagnosis</label>
								<textarea type="text" name="diagnosis" class="form-control" id="diagnosis" placeholder="Diagnosis" rows="3" value="{{ old('diagnosis') }}"></textarea>
							</div>
							<div class="col-12">
								<label for="obat" class="form-label">Obat</label>
								<textarea type="text" name="obat" class="form-control" id="obat" placeholder="Obat" rows="3" value="{{ old('obat') }}"></textarea>
							</div>
							@endif
							<div class="col-12">
								<button type="submit" class="btn btn-light px-5">Kirim</button>
							</div>
						</form>
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
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($datas as $data)
									<tr>
										<td>{{ $loop->iteration }}</td>
										<td>{{ $data->nama }}</td>
										<td>{{ $data->keluhan }}</td>
										<td>
											{{-- <button type="submit" class="btn btn-light"><a href=""><i class="fadeIn animated bx bx-detail"></i></a></button> --}}
											<a href="{{ url('edit-rawat-inap') }}"><button type="submit" class="btn btn-light"><i class="fadeIn animated bx bx-pencil"></i></button></a>
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>
				@endif
		<!--end row-->
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