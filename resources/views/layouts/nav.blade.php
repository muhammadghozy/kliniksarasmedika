<!--sidebar wrapper -->
		<div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header">
				<div>
					<img src="{{ asset('assets/images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
				</div>
				<div>
					<h4 class="logo-text">Saras Medika</h4>
				</div>
				<div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
				</div>
			</div>
			<!--navigation-->
			<ul class="metismenu" id="menu">
				<li>
					<a href="{{ url('dashboard') }}" class="">
						<div class="parent-icon"><i class='bx bx-home-circle'></i>
						</div>
						<div class="menu-title">Home</div>
					</a>
				</li>
				<li>
					<a href="{{ url('user-profile') }}">
						<div class="parent-icon"><i class="bx bx-user-circle"></i>
						</div>
						<div class="menu-title">User Profile</div>
					</a>
				</li>
				@if((Auth::user()->role ?? '') == 'Admin')
				<li>
					<a href="{{ url('user-management') }}">
						<div class="parent-icon"><i class="bx bx-group"></i>
						</div>
						<div class="menu-title">User Management</div>
					</a>
				</li>
				@endif
				<li class="">
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="bx bx-donate-blood"></i>
						</div>
						<div class="menu-title">Layanan</div>
					</a>
					<ul>
						<li> <a href="{{ url('rawat-inap') }}"><i class="bx bx-right-arrow-alt"></i>Rawat Inap</a>
						</li>
						<li> <a href="{{ url('rawat-jalan') }}"><i class="bx bx-right-arrow-alt"></i>Rawat Jalan</a>
						</li>
					</ul>
				</li>				
				<li>
					<a href="{{ url('jadwal-praktik') }}" class="">
						<div class="parent-icon"><i class='bx bx-calendar'></i>
						</div>
						<div class="menu-title">Jadwal Praktik</div>
					</a>
					
				</li>
				{{-- <li>
					<a class="" href="{{ url('rekam-medis') }}">
						<div class="parent-icon"><i class='bx bx-notepad'></i>
						</div>
						<div class="menu-title">Rekam Medis</div>
					</a>
				</li> --}}
				<li class="header-message-list">
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="bx bx-notepad"></i>
						</div>
						<div class="menu-title">Rekam Medis</div>
					</a>
					<ul>
						<li> <a href="{{ url('rekam-medis-rawat-inap') }}"><i class="bx bx-right-arrow-alt"></i>Rawat Inap</a>
						</li>
						<li> <a href="{{ url('rekam-medis-rawat-jalan') }}"><i class="bx bx-right-arrow-alt"></i>Rawat Jalan</a>
						</li>
					</ul>
				</li>
			</ul>
			<!--end navigation-->
		</div>
		<!--end sidebar wrapper -->