<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from eduport.webestica.com/admin-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Aug 2022 00:46:49 GMT -->
<head>
	<title>Eduport- LMS, Education and Course Theme</title>

	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Webestica.com">
	<meta name="description" content="Eduport- LMS, Education and Course Theme">

	<!-- Favicon -->
	<link rel="shortcut icon" href="assets/images/favicon.ico">

	<!-- Google Font -->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;700&amp;family=Roboto:wght@400;500;700&amp;display=swap">

	<!-- Plugins CSS -->
	<link rel="stylesheet" type="text/css" href="assets/vendor/font-awesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap-icons/bootstrap-icons.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/apexcharts/css/apexcharts.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/overlay-scrollbar/css/OverlayScrollbars.min.css">

	<!-- Theme CSS -->
	<link id="style-switch" rel="stylesheet" type="text/css" href="assets/css/style.css">

</head>

<body>


<!-- **************** MAIN CONTENT START **************** -->
<main>
	
<!-- Sidebar START -->
<nav class="navbar sidebar navbar-expand-xl navbar-dark bg-dark">

	<!-- Navbar brand for xl START -->
	<div class="d-flex align-items-center">
		<a class="navbar-brand" href="index.html">
			{{-- <img class="navbar-brand-item" src="assets/images/logo-light.svg" alt=""> --}}
            {{-- replace with logo --}}
		</a>
	</div>
	<!-- Navbar brand for xl END -->
	
	<div class="offcanvas offcanvas-start flex-row custom-scrollbar h-100" data-bs-backdrop="true" tabindex="-1" id="offcanvasSidebar">
		<div class="offcanvas-body sidebar-content d-flex flex-column bg-dark">

			<!-- Sidebar menu START -->
			<ul class="navbar-nav flex-column" id="navbar-sidebar">
				
				<!-- Menu item 1 -->
				<li class="nav-item"><a href="/admin-dashboard" class="nav-link active"><i class="bi bi-house fa-fw me-2"></i>Dashboard</a></li>
				
				<!-- Title -->
				{{-- <li class="nav-item ms-2 my-2">Pages</li> --}}

				<!-- menu item 2 -->
				<li class="nav-item">
					<a class="nav-link" href="/admin-courses" >
						<i class="bi bi-basket fa-fw me-2"></i>Courses
					</a>
				</li>

				<!-- Menu item 3 -->
				<li class="nav-item"> <a class="nav-link" href="/admin-users"><i class="fas fa-user-graduate fa-fw me-2"></i>Students</a></li>

				<!-- Menu item 4 -->
				<li class="nav-item">
					<a class="nav-link active" href="/admin-instructors">
						<i class="fas fa-user-tie fa-fw me-2"></i>Instructors
					</a>
				</li>

                <!-- Menu item 5 -->
				<li class="nav-item">
					<a class="nav-link" href="/admin-books">
						<i class="fas fa-user-tie fa-fw me-2"></i>Books
					</a>
				</li>

				<!-- Menu item 7 -->
				<li class="nav-item"> <a class="nav-link" href="admin-setting.html"><i class="fas fa-user-cog fa-fw me-2"></i>Admin Settings</a></li>

				
			</ul>
			<!-- Sidebar menu end -->

			<!-- Sidebar footer START -->
			<div class="px-3 mt-auto pt-3">
				<div class="d-flex align-items-center justify-content-between text-primary-hover">
						<a class="h5 mb-0 text-body" href="admin-setting.html" data-bs-toggle="tooltip" data-bs-placement="top" title="Settings">
							<i class="bi bi-gear-fill"></i>
						</a>
						<a class="h5 mb-0 text-body" href="index.html" data-bs-toggle="tooltip" data-bs-placement="top" title="Home">
							<i class="bi bi-globe"></i>
						</a>
						<a class="h5 mb-0 text-body" href="sign-in.html" data-bs-toggle="tooltip" data-bs-placement="top" title="Sign out">
							<i class="bi bi-power"></i>
						</a>
				</div>
			</div>
			<!-- Sidebar footer END -->
			
		</div>
	</div>
</nav>
<!-- Sidebar END -->

<!-- Page content START -->
<div class="page-content">

	<!-- Top bar START -->
	<nav class="navbar top-bar navbar-light border-bottom py-0 py-xl-3">
		<div class="container-fluid p-0">
			<div class="d-flex align-items-center w-100">

				<!-- Logo START -->
				<div class="d-flex align-items-center d-xl-none">
					<a class="navbar-brand" href="index.html">
						<img class="light-mode-item navbar-brand-item h-30px" src="assets/images/logo-mobile.svg" alt="">
						<img class="dark-mode-item navbar-brand-item h-30px" src="assets/images/logo-mobile-light.svg" alt="">
					</a>
				</div>
				<!-- Logo END -->

				<!-- Toggler for sidebar START -->
				<div class="navbar-expand-xl sidebar-offcanvas-menu">
					<button class="navbar-toggler me-auto" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar" aria-expanded="false" aria-label="Toggle navigation" data-bs-auto-close="outside">
						<i class="bi bi-text-right fa-fw h2 lh-0 mb-0 rtl-flip" data-bs-target="#offcanvasMenu"> </i>
					</button>
				</div>
				<!-- Toggler for sidebar END -->
				
				<!-- Top bar left -->
				<div class="navbar-expand-lg ms-auto ms-xl-0">
					
					<!-- Toggler for menubar START -->
					<button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTopContent" aria-controls="navbarTopContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-animation">
							<span></span>
							<span></span>
							<span></span>
						</span>
					</button>
					<!-- Toggler for menubar END -->

				
				</div>
				<!-- Top bar left END -->
				
				<!-- Top bar right START -->
				<div class="ms-xl-auto">
					<ul class="navbar-nav flex-row align-items-center">


						<!-- Profile dropdown START -->
						<li class="nav-item ms-2 ms-md-3 dropdown">
							<!-- Avatar -->
							<a class="avatar avatar-sm p-0" href="#" id="profileDropdown" role="button" data-bs-auto-close="outside" data-bs-display="static" data-bs-toggle="dropdown" aria-expanded="false">
								<img class="avatar-img rounded-circle" src="assets/images/avatar/01.jpg" alt="avatar">
							</a>

							<!-- Profile dropdown START -->
							<ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow pt-3" aria-labelledby="profileDropdown">
								<!-- Profile info -->
								<li class="px-3">
									<div class="d-flex align-items-center">
										<!-- Avatar -->
										<div class="avatar me-3 mb-3">
											<img class="avatar-img rounded-circle shadow" src="assets/images/avatar/01.jpg" alt="avatar">
										</div>
										<div>
											<a class="h6 mt-2 mt-sm-0" href="#">Lori Ferguson</a>
											<p class="small m-0">example@gmail.com</p>
										</div>
									</div>
								</li>
                <li> <hr class="dropdown-divider"></li>
								<!-- Links -->
								<li><a class="dropdown-item" href="#"><i class="bi bi-person fa-fw me-2"></i>Edit Profile</a></li>
								<li><a class="dropdown-item" href="#"><i class="bi bi-gear fa-fw me-2"></i>Account Settings</a></li>
								<li><a class="dropdown-item" href="#"><i class="bi bi-info-circle fa-fw me-2"></i>Help</a></li>
								<li><a class="dropdown-item bg-danger-soft-hover" href="#"><i class="bi bi-power fa-fw me-2"></i>Sign Out</a></li>
								<li> <hr class="dropdown-divider"></li>

								<!-- Dark mode switch START -->
								<li>
									<div class="modeswitch-wrap" id="darkModeSwitch">
										<div class="modeswitch-item">
											<div class="modeswitch-icon"></div>
										</div>
										<span>Dark mode</span>
									</div>
								</li> 
								<!-- Dark mode switch END -->
							</ul>
							<!-- Profile dropdown END -->
						</li>
						<!-- Profile dropdown END -->
					</ul>
				</div>
				<!-- Top bar right END -->
			</div>
		</div>
	</nav>
	<!-- Top bar END -->

	<!-- Page main content START -->
	<div class="page-content-wrapper border">

		<!-- Title -->
		<div class="row">
			<div class="col-12 mb-3">
				<h1 class="h3 mb-2 mb-sm-0">Instructors</h1>
			</div>
		</div>

        <!-- Card START -->
		<div class="card bg-transparent">

			<!-- Card header START -->
			<div class="card-header bg-transparent border-bottom px-0">
				<!-- Search and select START -->
				<div class="row g-3 align-items-center justify-content-between">

					<!-- Search bar -->
					<div class="col-md-4">
						<form class="rounded position-relative">
							<input class="form-control bg-transparent" type="search" placeholder="Search" aria-label="Search">
							<button class="bg-transparent p-2 position-absolute top-50 end-0 translate-middle-y border-0 text-primary-hover text-reset" type="submit">
								<i class="fas fa-search fs-6 "></i>
							</button>
						</form>
					</div>

					<!-- Tab buttons -->
					
				</div>
				<!-- Search and select END -->
			</div>
			<!-- Card header END -->

			<!-- Card body START -->
			<div class="card-body px-0">
				
                <!-- Tabs content item START -->
					<div class="">
						<!-- Table START -->
						<div class="table-responsive border-0">
							<table class="table table-dark-gray align-middle p-4 mb-0 table-hover">
								<!-- Table head -->
								<thead>
									<tr>
										<th scope="col" class="border-0 rounded-start">Instructor name</th>
										<th scope="col" class="border-0">Detail</th>
										{{-- <th scope="col" class="border-0">Courses</th> --}}
										{{-- <th scope="col" class="border-0">Total studentss</th> --}}
										<th scope="col" class="border-0 rounded-end">Action</th>
									</tr>
								</thead>

								<!-- Table body START -->
								<tbody>


									@foreach ($instructors as $instructor)
										<!-- Table row -->
									<tr>
										<!-- Table data -->
										<td>
											<div class="d-flex align-items-center position-relative">
												<!-- Image -->
												<div class="avatar avatar-md">
													<img src="assets/images/avatar/09.jpg" class="rounded-circle" alt="">
												</div>
												<div class="mb-0 ms-2">
													<!-- Title -->
													<h6 class="mb-0"><a href="/admin-instructor-detail" class="stretched-link">{{$instructor->fname." ".$instructor->lname}}</a></h6>
												</div>
											</div>
										</td>

										<!-- Table data -->
										<td class="text-center text-sm-start">
											<h6 class="mb-0">{{ $instructor->study_field }}</h6>
										</td>
										<td>
											<a href="/user/chat" class="btn btn-info-soft btn-round me-1 mb-1 mb-md-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Message">
												<i class="bi bi-envelope"></i>
											</a>
											<a href="#" class="btn btn-success-soft btn-round me-1 mb-1 mb-md-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
												<i class="bi bi-pencil-square"></i>
											</a>
											<button class="btn btn-danger-soft btn-round mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
												<i class="bi bi-trash"></i>
											</button>
										</td>
									</tr>

									@endforeach
									<!-- Table row -->
									<tr>
										<!-- Table data -->
										<td>
											<div class="d-flex align-items-center position-relative">
												<!-- Image -->
												<div class="avatar avatar-md">
													<img src="assets/images/avatar/09.jpg" class="rounded-circle" alt="">
												</div>
												<div class="mb-0 ms-2">
													<!-- Title -->
													<h6 class="mb-0"><a href="/admin-instructor-detail" class="stretched-link">Lori Stevens</a></h6>
												</div>
											</div>
										</td>

										<!-- Table data -->
										<td class="text-center text-sm-start">
											<h6 class="mb-0">Web Designer</h6>
										</td>

										<!-- Table data -->
										{{-- <td>15</td>

										<!-- Table data -->
										<td>5,354</td> --}}

										<!-- Table data -->
										<td>
											<a href="/user/chat" class="btn btn-info-soft btn-round me-1 mb-1 mb-md-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Message">
												<i class="bi bi-envelope"></i>
											</a>
											<a href="#" class="btn btn-success-soft btn-round me-1 mb-1 mb-md-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
												<i class="bi bi-pencil-square"></i>
											</a>
											<button class="btn btn-danger-soft btn-round mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
												<i class="bi bi-trash"></i>
											</button>
										</td>
									</tr>

									<!-- Table row -->
									<tr>
										<!-- Table data -->
										<td>
											<div class="d-flex align-items-center position-relative">
												<!-- Image -->
												<div class="avatar avatar-md">
													<img src="assets/images/avatar/01.jpg" class="rounded-circle" alt="">
												</div>
												<div class="mb-0 ms-2">
													<!-- Title -->
													<h6 class="mb-0"><a href="#" class="stretched-link">Carolyn Ortiz</a></h6>
												</div>
											</div>
										</td>

										<!-- Table data -->
										<td class="text-center text-sm-start">
											<h6 class="mb-0">Web Developer</h6>
										</td>

										<!-- Table data -->
										{{-- <td>10</td>

										<!-- Table data -->
										<td>15,523</td> --}}

										<!-- Table data -->
										<td>
											<a href="#" class="btn btn-info-soft btn-round me-1 mb-1 mb-md-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Message">
												<i class="bi bi-envelope"></i>
											</a>
											<a href="#" class="btn btn-success-soft btn-round me-1 mb-1 mb-md-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
												<i class="bi bi-pencil-square"></i>
											</a>
											<button class="btn btn-danger-soft btn-round mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
												<i class="bi bi-trash"></i>
											</button>
										</td>
									</tr>

									<!-- Table row -->
									<tr>
										<!-- Table data -->
										<td>
											<div class="d-flex align-items-center position-relative">
												<!-- Image -->
												<div class="avatar avatar-md">
													<img src="assets/images/avatar/03.jpg" class="rounded-circle" alt="">
												</div>
												<div class="mb-0 ms-2">
													<!-- Title -->
													<h6 class="mb-0"><a href="#" class="stretched-link">Dennis Barrett</a></h6>
												</div>
											</div>
										</td>

										<!-- Table data -->
										<td class="text-center text-sm-start">
											<h6 class="mb-0">Developer and Instructor</h6>
										</td>

										<!-- Table data -->
										{{-- <td>09</td>

										<!-- Table data -->
										<td>2,546</td> --}}

										<!-- Table data -->
										<td>
											<a href="#" class="btn btn-info-soft btn-round me-1 mb-1 mb-md-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Message">
												<i class="bi bi-envelope"></i>
											</a>
											<a href="#" class="btn btn-success-soft btn-round me-1 mb-1 mb-md-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
												<i class="bi bi-pencil-square"></i>
											</a>
											<button class="btn btn-danger-soft btn-round mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
												<i class="bi bi-trash"></i>
											</button>
										</td>
									</tr>

									<!-- Table row -->
									<tr>
										<!-- Table data -->
										<td>
											<div class="d-flex align-items-center position-relative">
												<!-- Image -->
												<div class="avatar avatar-md">
													<img src="assets/images/avatar/04.jpg" class="rounded-circle" alt="">
												</div>
												<div class="mb-0 ms-2">
													<!-- Title -->
													<h6 class="mb-0"><a href="#" class="stretched-link">Billy Vasquez</a></h6>
												</div>
											</div>
										</td>

										<!-- Table data -->
										<td class="text-center text-sm-start">
											<h6 class="mb-0">Full Stack Web Developer</h6>
										</td>

										<!-- Table data -->
										{{-- <td>07</td>

										<!-- Table data -->
										<td>12,786</td> --}}

										<!-- Table data -->
										<td>
											<a href="#" class="btn btn-info-soft btn-round me-1 mb-1 mb-md-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Message">
												<i class="bi bi-envelope"></i>
											</a>
											<a href="#" class="btn btn-success-soft btn-round me-1 mb-1 mb-md-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
												<i class="bi bi-pencil-square"></i>
											</a>
											<button class="btn btn-danger-soft btn-round mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
												<i class="bi bi-trash"></i>
											</button>
										</td>
									</tr>

									<!-- Table row -->
									<tr>
										<!-- Table data -->
										<td>
											<div class="d-flex align-items-center position-relative">
												<!-- Image -->
												<div class="avatar avatar-md">
													<img src="assets/images/avatar/05.jpg" class="rounded-circle" alt="">
												</div>
												<div class="mb-0 ms-2">
													<!-- Title -->
													<h6 class="mb-0"><a href="#" class="stretched-link">Jacqueline Miller</a></h6>
												</div>
											</div>
										</td>

										<!-- Table data -->
										<td class="text-center text-sm-start">
											<h6 class="mb-0">Engineering Architect</h6>
										</td>

										<!-- Table data -->
										{{-- <td>05</td>

										<!-- Table data -->
										<td>21,245</td> --}}

										<!-- Table data -->
										<td>
											<a href="#" class="btn btn-info-soft btn-round me-1 mb-1 mb-md-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Message">
												<i class="bi bi-envelope"></i>
											</a>
											<a href="#" class="btn btn-success-soft btn-round me-1 mb-1 mb-md-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
												<i class="bi bi-pencil-square"></i>
											</a>
											<button class="btn btn-danger-soft btn-round mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
												<i class="bi bi-trash"></i>
											</button>
										</td>
									</tr>

									<!-- Table row -->
									<tr>
										<!-- Table data -->
										<td>
											<div class="d-flex align-items-center position-relative">
												<!-- Image -->
												<div class="avatar avatar-md">
													<img src="assets/images/avatar/06.jpg" class="rounded-circle" alt="">
												</div>
												<div class="mb-0 ms-2">
													<!-- Title -->
													<h6 class="mb-0"><a href="#" class="stretched-link">Amanda Reed</a></h6>
												</div>
											</div>
										</td>

										<!-- Table data -->
										<td class="text-center text-sm-start">
											<h6 class="mb-0">Medical Science</h6>
										</td>

										<!-- Table data -->
										{{-- <td>06</td>

										<!-- Table data -->
										<td>8,546</td> --}}

										<!-- Table data -->
										<td>
											<a href="#" class="btn btn-info-soft btn-round me-1 mb-1 mb-md-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Message">
												<i class="bi bi-envelope"></i>
											</a>
											<a href="#" class="btn btn-success-soft btn-round me-1 mb-1 mb-md-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
												<i class="bi bi-pencil-square"></i>
											</a>
											<button class="btn btn-danger-soft btn-round mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
												<i class="bi bi-trash"></i>
											</button>
										</td>
									</tr>

									<!-- Table row -->
									<tr>
										<!-- Table data -->
										<td>
											<div class="d-flex align-items-center position-relative">
												<!-- Image -->
												<div class="avatar avatar-md">
													<img src="assets/images/avatar/07.jpg" class="rounded-circle" alt="">
												</div>
												<div class="mb-0 ms-2">
													<!-- Title -->
													<h6 class="mb-0"><a href="#" class="stretched-link">Samuel Bishop</a></h6>
												</div>
											</div>
										</td>

										<!-- Table data -->
										<td class="text-center text-sm-start">
											<h6 class="mb-0">Finance manager</h6>
										</td>

										<!-- Table data -->
										{{-- <td>15</td>

										<!-- Table data -->
										<td>5,354</td> --}}

										<!-- Table data -->
										<td>
											<a href="#" class="btn btn-info-soft btn-round me-1 mb-1 mb-md-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Message">
												<i class="bi bi-envelope"></i>
											</a>
											<a href="#" class="btn btn-success-soft btn-round me-1 mb-1 mb-md-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
												<i class="bi bi-pencil-square"></i>
											</a>
											<button class="btn btn-danger-soft btn-round mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
												<i class="bi bi-trash"></i>
											</button>
										</td>
									</tr>

									<!-- Table row -->
									<tr>
										<!-- Table data -->
										<td>
											<div class="d-flex align-items-center position-relative">
												<!-- Image -->
												<div class="avatar avatar-md">
													<img src="assets/images/avatar/10.jpg" class="rounded-circle" alt="">
												</div>
												<div class="mb-0 ms-2">
													<!-- Title -->
													<h6 class="mb-0"><a href="#" class="stretched-link">Louis Ferguson</a></h6>
												</div>
											</div>
										</td>

										<!-- Table data -->
										<td class="text-center text-sm-start">
											<h6 class="mb-0">Civil Engineer</h6>
										</td>

										<!-- Table data -->
										{{-- <td>02</td>

										<!-- Table data -->
										<td>2,578</td> --}}

										<!-- Table data -->
										<td>
											<a href="#" class="btn btn-info-soft btn-round me-1 mb-1 mb-md-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Message">
												<i class="bi bi-envelope"></i>
											</a>
											<a href="#" class="btn btn-success-soft btn-round me-1 mb-1 mb-md-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
												<i class="bi bi-pencil-square"></i>
											</a>
											<button class="btn btn-danger-soft btn-round mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
												<i class="bi bi-trash"></i>
											</button>
										</td>
									</tr>

								</tbody>
								<!-- Table body END -->
							</table>
						</div>
						<!-- Table END -->
					</div>
					<!-- Tabs content item END -->

			</div>
			<!-- Card body END -->

			<!-- Card footer START -->
			<div class="card-footer bg-transparent p-0">
				<!-- Pagination START -->
				<div class="d-sm-flex justify-content-sm-between align-items-sm-center">
					<!-- Content -->
					<p class="mb-0 text-center text-sm-start">Showing 1 to 8 of 20 entries</p>
					<!-- Pagination -->
					<nav class="d-flex justify-content-center mb-0" aria-label="navigation">
						<ul class="pagination pagination-sm pagination-primary-soft d-inline-block d-md-flex rounded mb-0">
							<li class="page-item mb-0"><a class="page-link" href="#" tabindex="-1"><i class="fas fa-angle-left"></i></a></li>
							<li class="page-item mb-0"><a class="page-link" href="#">1</a></li>
							<li class="page-item mb-0 active"><a class="page-link" href="#">2</a></li>
							<li class="page-item mb-0"><a class="page-link" href="#">3</a></li>
							<li class="page-item mb-0"><a class="page-link" href="#"><i class="fas fa-angle-right"></i></a></li>
						</ul>
					</nav>
				</div>
				<!-- Pagination END -->
			</div>
			<!-- Card footer END -->
		</div>
		<!-- Card END -->

		

	</div>
	<!-- Page main content END -->
</div>
<!-- Page content END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

<!-- Back to top -->
<div class="back-top"><i class="bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle"></i></div>

<!-- Bootstrap JS -->
<script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<!-- Vendors -->
<script src="assets/vendor/purecounterjs/dist/purecounter_vanilla.js"></script>
<script src="assets/vendor/apexcharts/js/apexcharts.min.js"></script>
<script src="assets/vendor/overlay-scrollbar/js/overlayscrollbars.min.html"></script>

<!-- Template Functions -->
<script src="assets/js/functions.js"></script>


</body>

<!-- Mirrored from eduport.webestica.com/admin-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Aug 2022 00:46:53 GMT -->
</html>