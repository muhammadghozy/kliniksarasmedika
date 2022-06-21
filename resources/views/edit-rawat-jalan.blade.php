@extends("layouts.app")

@section("wrapper")
<!--start page wrapper -->
<div class="page-wrapper">
	<div class="page-content">
		<!--breadcrumb-->
		<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
			<div class="breadcrumb-title pe-3"><a href={{ url('rawat-jalan') }}>Rawat Jalan</a></div>
			<div class="ps-3">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb mb-0 p-0">
						<li class="breadcrumb-item"><a href="javaScript:;"><i class="bx bx-home-alt"></i></a>
						</li>
						<li class="breadcrumb-item active" aria-current="page">Formulir Pendaftaran Pasien</li>
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
				<div class="card border-top border-0 border-4 border-white">
					<div class="card-body p-5">
						<div class="card-title d-flex align-items-center">
							<div><i class="bx bx-first-aid me-2 font-22 text-white"></i>
							</div>
							<h5 class="mb-0 text-white">Formulir Pendaftaran Rawat Jalan Pasien</h5>
						</div>
						<hr>
						<form class="row g-3" action="/edit-rawat-jalan/{{ auth()->user()->id }}" method="POST" enctype="multipart/form-data">
							@method("patch")
                            @csrf
							@foreach ($datas as $data)
							<div class="col-md-12">
								<label for="ttl" class="form-label">Tempat, Tanggal Lahir</label>
								<input type="text" name="ttl" class="form-control" id="ttl" placeholder="Tempat, Tanggal Lahir" value="{{ $data->ttl }}" disabled>
							</div>
							<div class="col-md-12">
								<label for="bb" class="form-label">Berat Badan</label>
								<input type="text" name="bb" class="form-control" id="bb" placeholder="Berat Badan" value="{{ $data->bb }}">
							</div>
							<div class="col-md-12">
								<label for="tb" class="form-label">Tinggi Badan</label>
								<input type="text" name="tb" class="form-control" id="tb" placeholder="Tinggi Badan" value="{{ $data->tb }}">
							</div>
							<div class="col-md-12">
								<label for="td" class="form-label">Tekanan Darah</label>
								<input type="text" name="td" class="form-control" id="td" placeholder="Tekanan Darah" value="{{ $data->td }}">
							</div>
							<div class="col-12">
								<label for="keluhan" class="form-label">Keluhan</label>
								<textarea type="text" name="keluhan" class="form-control" id="keluhan" placeholder="Keluhan" rows="3" value="{{ $data->keluhan }}"></textarea>
							</div>
							@if((Auth::user()->role ?? '') == 'Dokter')
							<div class="col-12">
								<label for="diagnosis" class="form-label">Diagnosis</label>
								<textarea type="text" name="diagnosis" class="form-control @error ('diagnosis') is-invalid @enderror" id="diagnosis" placeholder="Diagnosis" rows="3" required value="{{ old('diagnosis') }}"></textarea>
							</div>
							<div class="col-12">
								<label for="tindakan" class="form-label">Tindakan</label>
								<textarea type="text" name="tindakan" class="form-control @error ('tindakan') is-invalid @enderror" id="tindakan" placeholder="Tindakan" rows="3" required value="{{ old('tindakan') }}"></textarea>
							</div>
							@endif
							@endforeach			
							<div class="col-12">
								<button type="submit" class="btn btn-light px-5">Simpan</button>
							</div>							
						</form>
					</div>
				</div>
		<!--end row-->
	</div>
</div>
<!--end page wrapper -->
@endsection