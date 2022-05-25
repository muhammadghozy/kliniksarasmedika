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
		<title>Login | Saras Medika</title>
	</head>

<body class="bg-theme bg-theme7">
	<!--wrapper-->
	<div class="wrapper">
		<div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
			<div class="container-fluid">
				<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
					<div class="col mx-auto">
						<div class="mb-4 text-center">
							{{-- <img src="{{ asset('assets/images/logo-img.png') }}" width="180" alt="" /> --}}
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

							@if(session()->has('loginError'))
							<div class="alert border-0 border-start border-5 border-danger alert-dismissible fade show py-2">
								<div class="d-flex align-items-center">
									<div class="font-35 text-danger"><i class='bx bxs-message-square-x'></i>
									</div>
									<div class="ms-3">
										{{ session('loginError') }}
									</div>
								</div>
								<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
							</div>
							@endif

						</div>
						<div class="card">
							<div class="card-body">
								<div class="border p-4 rounded">
									<div class="text-center">
										<h3 class="">Login</h3>
										<p>Belum mempunyai akun? <a href="{{ url('register') }}">Registrasi disini</a>
										</p>
									</div>
									{{-- <div class="d-grid">
										<a class="btn my-4 shadow-sm btn-light" href="javascript:;"> <span class="d-flex justify-content-center align-items-center">
                    					<img class="me-2" src="{{ asset('assets/images/icons/search.svg') }}" width="16" alt="Image Description">
                        				<span>Sign in with Google</span>
											</span>
										</a> <a href="javascript:;" class="btn btn-light"><i class="bx bxl-facebook"></i>Sign in with Facebook</a>
									</div> --}}
									{{-- <div class="login-separater text-center mb-4"> <span>OR SIGN IN WITH EMAIL</span>
										<hr/>
									</div> --}}
									<div class="form-body">
										<form action="/login" method="POST" class="row g-3">
											@csrf

											<div class="col-12">
												<label for="email" class="form-label">Email</label>
												<input type="email" name="email" class="form-control @error ('email') is-invalid @enderror" id="email" placeholder="Email" autofocus required value="{{ old ('email') }}">
												@error('email')
												<div class="invalid-feedback">
													{{ $message }}
												</div>
												@enderror
											</div>
											<div class="col-12">
												<label for="password" class="form-label">Password</label>
													<input type="password" name="password" class="form-control border-end-0" id="password" placeholder="Enter Password" required>
											</div>
											{{-- <div class="col-md-6">
												<div class="form-check form-switch">
													<input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
													<label class="form-check-label" for="flexSwitchCheckChecked">Remember Me</label>
												</div>
											</div> --}}
											{{-- <div class="col-md-6 text-end">	<a href="{{ url('authentication-forgot-password') }}">Forgot Password ?</a>
											</div> --}}
											<div class="col-12">
												<div class="d-grid">
													<button type="submit" class="btn btn-light"><i class="bx bxs-lock-open"></i>Login</button>
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
	<!-- Bootstrap JS -->
	<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
	<!--plugins-->
	<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
	<!--app JS-->
	<script src="{{ asset('assets/js/app.js') }}"></script>
</body>

</html>