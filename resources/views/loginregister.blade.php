<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
	<!-- Favicons -->
	<link href="{{ asset('images/titipanfix.png')}}" rel="icon">
	<link href="{{ asset('images/apple-touch-icon.png')}}" rel="apple-touch-icon">

	<!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
		rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
	<link href="{{ asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
	<link href="{{ asset('vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
	<link href="{{ asset('vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
	<link href="{{ asset('vendor/aos/aos.css')}}" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('css/loginregister.css') }}" />

	{{-- bootstrap css --}}
	<!-- CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/css/bootstrap.min.css">

	<!-- Template Main CSS File -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
	<title>{{ $title }} | Tiba-tiba Pindahan</title>
</head>

<body>
	<header id="header" class="header d-flex align-items-center fixed-top">
		<div class="container-fluid container-xl d-flex align-items-center justify-content-between">

			<a href="index.html" class="logo d-flex align-items-center">

				<img src="{{ asset('images/titipanfix.png')}}" class="image" alt="">
				<h1>Titipan</h1>
			</a>

			<i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
			<i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
			<nav id="navbar" class="navbar rounded" style="background-color: rgb(63, 63, 63);">
				<ul>
					<li><a href="/" class="nav-link {{ $title === 'Home' ? 'active' : '' }}">Home</a></li>
					<li>
						<a href="jasapindahan" class="nav-link {{ $title === 'Jasa Pindahan' ? 'active' : '' }}">Jasa
							Pindahan</a>
					</li>
					<li></li>
					<a href="jasapenyimpanan" class="nav-link {{ $title === 'Jasa Penyimpanan' ? 'active' : '' }}">Jasa
						Penyimpan</a>
					</li>
					<li>
						<a href="jasapengiriman"
							class="nav-link {{ $title === 'Jasa Pengiriman' ? 'active' : '' }}">Jasa
							Pengiriman</a>
					</li>
				</ul>
				<ul class="navbar-nav ms-auto px-5">
					<div class="dropdown">
						<a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
							aria-expanded="false">
							<i class="bi bi-person-fill"></i>
						</a>
						<ul class="dropdown-menu">
							<li><a class="dropdown-item @if ($title === 'Login & Register')  @endif"
									href="/sesi">Login</a>
							</li>
							<li><a class="dropdown-item @if ($title === 'Login & Register')  @endif"
									href="/sesi">Register</a></li>
						</ul>
					</div>
				</ul>
			</nav>
			<!-- .navbar -->

		</div>
	</header>
	<!-- End Header -->
	<!-- End Header -->

	<div class="container">
		<div class="forms-container">
			<div class="signin-signup">
				@if($errors->any())
				<div class="alert alert-danger alert-dismissible fade show">
					<ul>
						@foreach ($errors->all() as $item)
						<li><strong>{{ $item }}</strong></li>
						@endforeach
					</ul>
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>
				@endif
				<form action="/sesi/login" class="sign-in-form" method="POST">
					@csrf
					<h2 class="title">Sign in</h2>
					<div class="input-field">
						<i class="fas fa-user"></i>
						<input type="email" placeholder="Email" name="email" value="{{ Session::get('email') }}"
							autocomplete="off" />
					</div>
					<div class="input-field">
						<i class="fas fa-lock"></i>
						<input type="password" placeholder="Password" name="password" />
					</div>
					<button type="submit" value="Login" class="btn solid" name="submit-login">Login</button>
					<p class="social-text">Or Sign in with social platforms</p>
					<div class="social-media">
						<a href="#" class="social-icon">
							<i class="fab fa-facebook-f"></i>
						</a>
						<a href="#" class="social-icon">
							<i class="fab fa-twitter"></i>
						</a>
						<a href="#" class="social-icon">
							<i class="fab fa-google"></i>
						</a>
						<a href="#" class="social-icon">
							<i class="fab fa-linkedin-in"></i>
						</a>
					</div>
				</form>

				<form action="/sesi" class="sign-up-form">
					<h2 class="title">Sign up</h2>
					<div class="input-field">
						<i class="fas fa-user"></i>
						<input type="text" placeholder="Username" />
					</div>
					<div class="input-field">
						<i class="fas fa-envelope"></i>
						<input type="email" placeholder="Email" />
					</div>
					<div class="input-field">
						<i class="fas fa-lock"></i>
						<input type="password" placeholder="Password" />
					</div>
					<button type="submit" class="btn" value="Sign up" name="submit-signup">Sign Up</button>
					<p class="social-text">Or Sign up with social platforms</p>
					<div class="social-media">
						<a href="#" class="social-icon">
							<i class="fab fa-facebook-f"></i>
						</a>
						<a href="#" class="social-icon">
							<i class="fab fa-twitter"></i>
						</a>
						<a href="#" class="social-icon">
							<i class="fab fa-google"></i>
						</a>
						<a href="#" class="social-icon">
							<i class="fab fa-linkedin-in"></i>
						</a>
					</div>
				</form>
			</div>
		</div>

		<div class="panels-container">
			<div class="panel left-panel">
				<div class="content">
					<h3>New here ?</h3>
					<p>
						For full access to our website's features, please log in using your account credentials. Logging
						in
						ensures a
						personalized experience tailored to your preferences and needs. If you do not have an account,
						kindly
						click the
						"Sign up" button to create one.
					</p>
					<button class="btn transparent" id="sign-up-btn">
						Sign up
					</button>
				</div>
				<img src="{{ asset('images/log.svg') }}" class="image" alt="" />
			</div>
			<div class="panel right-panel">
				<div class="content">
					<h3>One of us ?</h3>
					<p>
						Registering an account allows you to save your favorite items, track orders, and enjoy faster
						checkout.
						As a registered
						user, you will also have access to exclusive promotions and discounts. Thank you for choosing
						our
						website, and we look
						forward to providing you with an exceptional online experience.
					</p>
					<button class="btn transparent" id="sign-in-btn">
						Sign in
					</button>
				</div>
				<img src="{{ asset('images/register.svg') }}" class="image" alt="" />
			</div>
		</div>
	</div>


	<!-- JavaScript Bootstrap-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/js/bootstrap.min.js"></script>
	<script src="{{ asset('js/loginregister.js') }}"></script>
</body>

</html>