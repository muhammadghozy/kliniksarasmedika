<!doctype html>
<html lang="en">

	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--favicon-->
		<link rel="icon" href="{{ asset('assets/images/icon.png') }}" type="image/png" />
		<!-- loader-->
		<link href="{{ asset('assets/css/pace.min.css') }}" rel="stylesheet" />
		<script src="{{ asset('assets/js/pace.min.js') }}"></script>
		<!-- Bootstrap CSS -->
		<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
		<link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet">
		<title>Sign Up | Saras Medika</title>
	</head>

<body class="bg-theme bg-theme7">
	<!--wrapper-->
	<div class="wrapper">
		<div class="d-flex align-items-center justify-content-center my-5 my-lg-0">
			<div class="container">
				<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-2">
					<div class="col mx-auto">
						<div class="my-4 text-center">
							{{-- <img src="{{ asset('assets/images/logo-img.png') }}" width="180" alt="" /> --}}
						</div>
						<div class="card">
							<div class="card-body">
								<div class="border p-4 rounded">
									<div class="text-center">
										<h3 class="">Sign Up</h3>
										<p>Sudah memiliki akun? <a href="{{ url('login') }}">Login</a>
										</p>
									</div>
									{{-- <div class="d-grid">
										<a class="btn my-4 shadow-sm btn-light" href="javascript:;"> <span class="d-flex justify-content-center align-items-center">
                        				<img class="me-2" src="{{ asset('assets/images/icons/search.svg') }}" width="16" alt="Image Description">
                        				<span>Sign Up with Google</span>
											</span>
										</a> <a href="javascript:;" class="btn btn-light"><i class="bx bxl-facebook"></i>Sign Up with Facebook</a>
									</div> --}}
									{{-- <div class="login-separater text-center mb-4"> <span>OR SIGN UP WITH EMAIL</span>
										<hr/>
									</div> --}}
									<div class="form-body">
										<form class="row g-3" action="/register" method="POST">
											@csrf

											<div class="col-sm-12">
												<label for="nama" class="form-label">Nama Lengkap</label>
												<input type="text" name="nama" class="form-control @error ('nama') is-invalid @enderror" id="nama" placeholder="Nama Lengkap" required value="{{ old('nama') }}">
												@error('nama')
												<div class="invalid-feedback">
													{{ $message }}
												</div>
												@enderror
											</div>
											<div class="col-sm-12">
												<label for="nik" class="form-label">NIK</label>
												<input type="text" name="nik" class="form-control @error ('nik') is-invalid @enderror"" id="nik" placeholder="NIK" required value="{{ old('nik') }}">
												@error('nik')
												<div class="invalid-feedback">
													{{ $message }}
												</div>
												@enderror
											</div>
											<div class="col-12">
												<label for="email" class="form-label">Email</label>
												<input type="email" name="email" class="form-control @error ('email') is-invalid @enderror" id="email" placeholder="example@user.com" required value="{{ old('email') }}">
												@error('email')
												<div class="invalid-feedback">
													{{ $message }}
												</div>
												@enderror
											</div>
											<div class="col-12">
												<label for="password" class="form-label">Password</label>
												<input type="password" name="password" class="form-control border-end-0 @error ('password') is-invalid @enderror"" id="password" placeholder="Enter Password" required>
												@error('password')
												<div class="invalid-feedback">
													{{ $message }}
												</div>
												@enderror
											</div>
											<div class="col-sm-12">
												<label for="alamat" class="form-label">Alamat</label>
												<input type="text" name="alamat" class="form-control" id="alamat" placeholder="Alamat" value="{{ old('alamat') }}">
											</div>
											<div class="col-sm-12">
												<label for="telp" class="form-label">No Telp</label>
												<input type="text" name="telp" class="form-control" id="telp" placeholder="No Telpon" value="{{ old('telp') }}">
											</div>
											<div class="col-12">
												<div class="d-grid">
													<button type="submit" class="btn btn-light"><i class='bx bx-user'></i>Sign up</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
			</div>
		</div>
	</div>
	<!--end wrapper-->
	<!--start switcher-->
	{{-- <div class="switcher-wrapper">
		<div class="switcher-btn"> <i class='bx bx-cog bx-spin'></i>
		</div>
		<div class="switcher-body">
			<div class="d-flex align-items-center">
				<h5 class="mb-0 text-uppercase">Theme Customizer</h5>
				<button type="button" class="btn-close ms-auto close-switcher" aria-label="Close"></button>
			</div>
			<hr/>
			<p class="mb-0">Gaussian Texture</p>
			<hr>
			<ul class="switcher">
				<li id="theme1"></li>
				<li id="theme2"></li>
				<li id="theme3"></li>
				<li id="theme4"></li>
				<li id="theme5"></li>
				<li id="theme6"></li>
			</ul>
			<hr>
			<p class="mb-0">Gradient Background</p>
			<hr>
			<ul class="switcher">
				<li id="theme7"></li>
				<li id="theme8"></li>
				<li id="theme9"></li>
				<li id="theme10"></li>
				<li id="theme11"></li>
				<li id="theme12"></li>
				<li id="theme13"></li>
				<li id="theme14"></li>
				<li id="theme15"></li>
			  </ul>
		</div>
	</div> --}}
	<!--end switcher-->


	<!--plugins-->
	<script src="{{ asset('assets/js/jquery.min.js') }}"></script>

	
</body>

</html>