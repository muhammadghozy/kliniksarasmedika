@extends("layouts.app")
		
@section("wrapper")
<!--start page wrapper -->
<div class="page-wrapper">
	<div class="page-content">

		{{-- <div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<div class="row align-items-center">
							<div class="col-lg-3 col-xl-2">
								<a href="ecommerce-add-new-products') }}" class="btn btn-light mb-3 mb-lg-0"><i class='bx bxs-plus-square'></i>New Product</a>
							</div>
							<div class="col-lg-9 col-xl-10">
								<form class="float-lg-end">
									<div class="row row-cols-lg-auto g-2">
										<div class="col-12">
											<div class="position-relative">
												<input type="text" class="form-control ps-5" placeholder="Search Product..."> <span class="position-absolute top-50 product-show translate-middle-y"><i class="bx bx-search"></i></span>
											</div>
										</div>
										<div class="col-12">
											<div class="btn-group" role="group" aria-label="Button group with nested dropdown">
												<button type="button" class="btn btn-light">Sort By</button>
												<div class="btn-group" role="group">
													<button id="btnGroupDrop1" type="button" class="btn btn-light dropdown-toggle dropdown-toggle-nocaret px-1" data-bs-toggle="dropdown" aria-expanded="false">
													<i class='bx bx-chevron-down'></i>
													</button>
													<ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
													<li><a class="dropdown-item" href="#">Dropdown link</a></li>
													<li><a class="dropdown-item" href="#">Dropdown link</a></li>
													</ul>
												</div>
												</div>
										</div>
										<div class="col-12">
											<div class="btn-group" role="group" aria-label="Button group with nested dropdown">
												<button type="button" class="btn btn-light">Collection Type</button>
												<div class="btn-group" role="group">
													<button id="btnGroupDrop1" type="button" class="btn btn-light dropdown-toggle dropdown-toggle-nocaret px-1" data-bs-toggle="dropdown" aria-expanded="false">
													<i class='bx bxs-category'></i>
													</button>
													<ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
													<li><a class="dropdown-item" href="#">Dropdown link</a></li>
													<li><a class="dropdown-item" href="#">Dropdown link</a></li>
													</ul>
												</div>
												</div>
										</div>
										<div class="col-12">
											<div class="btn-group" role="group">
												<button type="button" class="btn btn-light">Price Range</button>
												<div class="btn-group" role="group">
													<button id="btnGroupDrop1" type="button" class="btn btn-light dropdown-toggle dropdown-toggle-nocaret px-1" data-bs-toggle="dropdown" aria-expanded="false">
													<i class='bx bx-slider'></i>
													</button>
													<ul class="dropdown-menu dropdown-menu-start" aria-labelledby="btnGroupDrop1">
													<li><a class="dropdown-item" href="#">Dropdown link</a></li>
													<li><a class="dropdown-item" href="#">Dropdown link</a></li>
													</ul>
												</div>
												</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> --}}
		
		<div class="row product-grid">
			@if((Auth::user()->role ?? '') == 'Pasien')
			<div class="col">
				<div class="card">
					{{-- <img src="{{ asset('assets/images/products/01.png') }}" class="card-img-top" alt="..."> --}}
					{{-- <div class="">
						<div class="position-absolute top-0 end-0 m-3 product-discount"><span class="">-10%</span></div>
					</div> --}}
					<div class="card-body">
						<div class="clearfix">
							<p class="mb-0 float-start">Informasi</p>
							{{-- <p class="mb-0 float-end fw-bold"><span class="me-2 text-decoration-line-through">$350</span><span class="text-white">$240</span></p> --}}
						</div>
						<a href="{{ url('jadwal-praktik') }}" class="card-title cursor-pointer"><h3>Jadwal Praktik Dokter</h3></a>
						{{-- <div class="d-flex align-items-center mt-3 fs-6">
							<div class="cursor-pointer">
								<i class='bx bxs-star text-white'></i>
								<i class='bx bxs-star text-white'></i>
								<i class='bx bxs-star text-white'></i>
								<i class='bx bxs-star text-light-4'></i>
								<i class='bx bxs-star text-light-4'></i>
								</div>	
							<p class="mb-0 ms-auto">4.2(182)</p>
						</div> --}}
					</div>
				</div>
			</div>
			<div class="col">
				<div class="card">
					{{-- <img src="{{ asset('assets/images/products/01.png') }}" class="card-img-top" alt="..."> --}}
					{{-- <div class="">
						<div class="position-absolute top-0 end-0 m-3 product-discount"><span class="">-10%</span></div>
					</div> --}}
					<div class="card-body">
						<div class="clearfix">
							<p class="mb-0 float-start">Layanan</p>
							{{-- <p class="mb-0 float-end fw-bold"><span class="me-2 text-decoration-line-through">$350</span><span class="text-white">$240</span></p> --}}
						</div>
						<a href="{{ url('rawat-inap') }}" class="card-title cursor-pointer"><h3>Rawat Inap</h3></a>
						{{-- <div class="d-flex align-items-center mt-3 fs-6">
							<div class="cursor-pointer">
								<i class='bx bxs-star text-white'></i>
								<i class='bx bxs-star text-white'></i>
								<i class='bx bxs-star text-white'></i>
								<i class='bx bxs-star text-light-4'></i>
								<i class='bx bxs-star text-light-4'></i>
								</div>	
							<p class="mb-0 ms-auto">4.2(182)</p>
						</div> --}}
					</div>
				</div>
			</div>
			<div class="col">
				<div class="card">
					{{-- <img src="{{ asset('assets/images/products/01.png') }}" class="card-img-top" alt="..."> --}}
					{{-- <div class="">
						<div class="position-absolute top-0 end-0 m-3 product-discount"><span class="">-10%</span></div>
					</div> --}}
					<div class="card-body">
						<div class="clearfix">
							<p class="mb-0 float-start">Layanan</p>
							{{-- <p class="mb-0 float-end fw-bold"><span class="me-2 text-decoration-line-through">$350</span><span class="text-white">$240</span></p> --}}
						</div>
						<a href="{{ url('rawat-jalan') }}" class="card-title cursor-pointer"><h3>Rawat Jalan</h3></a>
						{{-- <div class="d-flex align-items-center mt-3 fs-6">
							<div class="cursor-pointer">
								<i class='bx bxs-star text-white'></i>
								<i class='bx bxs-star text-white'></i>
								<i class='bx bxs-star text-white'></i>
								<i class='bx bxs-star text-light-4'></i>
								<i class='bx bxs-star text-light-4'></i>
								</div>	
							<p class="mb-0 ms-auto">4.2(182)</p>
						</div> --}}
					</div>
				</div>
			</div>
			@endif
		</div><!--end row-->
	</div>
</div>
<!--end page wrapper -->
@endsection
	