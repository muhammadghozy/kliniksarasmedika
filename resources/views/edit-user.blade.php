@extends("layouts.app")

@section("wrapper")
<!--start page wrapper -->
<div class="page-wrapper">
	<div class="page-content">
		<!--breadcrumb-->
		<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
			<div class="breadcrumb-title pe-3"><a href={{ url('user-management') }}>User Management</a></div>
			<div class="ps-3">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb mb-0 p-0">
						<li class="breadcrumb-item"><a href="javaScript:;"><i class="bx bx-home-alt"></i></a>
						</li>
						<li class="breadcrumb-item active" aria-current="page">Edit User</li>
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
							<h5 class="mb-0 text-white">Edit User</h5>
						</div>
						<hr>
						{{-- <form class="row g-3" action="/edit-user/{{ auth()->user()->id }}" method="POST" enctype="multipart/form-data">
							@method("patch")
                            @csrf
							
							<div class="col-md-12">
								<label for="ttl" class="form-label">Tempat, Tanggal Lahir</label>
								<input type="text" name="ttl" class="form-control" id="ttl" placeholder="Tempat, Tanggal Lahir" value="{{ $datas->ttl }}" disabled>
							</div>
							<div class="col-md-12">
								<label for="nama" class="form-label">Nama Lengkap</label>
								<input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Lengkap" value="${{ $datas->nama }}" disabled>
							</div>
							<div class="col-md-12">
								<label for="nik" class="form-label">NIK</label>
								<input type="text" name="nik" class="form-control" id="nik" placeholder="NIK" value="{{ $datas->nik }}" disabled>
							</div>
							<div class="col-md-12">
								<label for="email" class="form-label">Email</label>
								<input type="text" name="email" class="form-control" id="email" placeholder="Email" value="{{ $datas->td }}">
							</div>
							<div class="col-12">
								<label for="alamat" class="form-label">Alamat</label>
								<textarea type="text" name="alamat" class="form-control" id="alamat" placeholder="Alamat" rows="3" value="{{ $datas->keluhan }}" disabled></textarea>
							</div>
							<div class="col-12">
								<label for="telp" class="form-label">Telp</label>
								<textarea type="text" name="telp" class="form-control" id="telp" placeholder="No telp" rows="3" value="{{ $datas->telp }}" disabled></textarea>
							</div>
							<div class="col-md-12">
                                <label for="inputState" class="form-label">Role</label>
                                <select id="inputState" class="form-select">
                                    <option selected>Pasien</option>
                                    <option>Perawat</option>
                                    <option>Dokter</option>
                                </select>
                            </div>			
							<div class="col-12">
								<button type="submit" class="btn btn-light px-5">Simpan</button>
							</div>					
						</form> --}}
                        <form class="row g-3" action="/edit-user" method="POST" enctype="multipart/form-data">
							@method("patch")
                            @csrf
							
							<div class="col-md-12">
								<label for="ttl" class="form-label">Tempat, Tanggal Lahir</label>
								<input type="text" name="ttl" class="form-control" id="ttl" placeholder="Tempat, Tanggal Lahir" disabled>
							</div>
							<div class="col-md-12">
								<label for="nama" class="form-label">Nama Lengkap</label>
								<input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Lengkap" disabled>
							</div>
							<div class="col-md-12">
								<label for="nik" class="form-label">NIK</label>
								<input type="text" name="nik" class="form-control" id="nik" placeholder="NIK" disabled>
							</div>
							<div class="col-md-12">
								<label for="email" class="form-label">Email</label>
								<input type="text" name="email" class="form-control" id="email" placeholder="Email">
							</div>
							<div class="col-12">
								<label for="alamat" class="form-label">Alamat</label>
								<textarea type="text" name="alamat" class="form-control" id="alamat" placeholder="Alamat" rows="3" disabled></textarea>
							</div>
							<div class="col-12">
								<label for="telp" class="form-label">Telp</label>
								<textarea type="text" name="telp" class="form-control" id="telp" placeholder="No telp" rows="3" disabled></textarea>
							</div>
							<div class="col-md-12">
                                <label for="inputState" class="form-label">Role</label>
                                <select id="inputState" class="form-select">
                                    <option selected>Pasien</option>
                                    <option>Perawat</option>
                                    <option>Dokter</option>
                                </select>
                            </div>			
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