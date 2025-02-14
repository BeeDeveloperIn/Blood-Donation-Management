<?php
use Illuminate\Support\Facades\Route;

$route = Route::getCurrentRoute();
$routeAray = [
	'register',
	'login'
];
?>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Blood Donation</title>
<meta name="csrf-token" content="{{ csrf_token() }}">
<link href="{{ asset('public/css/app.css') }}" rel="stylesheet">
<link href="{{ asset('public/css/bootstrap.min.css') }}"
	rel="stylesheet" type="text/css">
<link href="{{ asset('public/css/bootstrap-icons.css') }}"
	rel="stylesheet" type="text/css">

<link rel="icon" href="{{ asset('public/images/logo.png') }}">

</head>
<body class="antialiased">
	
	<header>
		<nav
			class="navbar navbar-expand-lg border-bottom align-items-center sticky-top"
			aria-label="Offcanvas navbar large">
			<div class="container">
				<a class="navbar-brand" href="<?= url('/'); ?>" ><img src="{{ asset('public/images/logo.png') }}"
	alt="BLOODONATION" width="150"></a>
<button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar2"
	aria-controls="offcanvasNavbar2">
	<span class="navbar-toggler-icon"></span>
</button>
<div class="offcanvas offcanvas-end text-bg-red" tabindex="-1" id="offcanvasNavbar2"
	aria-labelledby="offcanvasNavbar2Label">
	<div class="offcanvas-header">
		<h5 class="offcanvas-title" id="offcanvasNavbar2Label">
			<img width="200px" src="{{ asset('public/images/logo.png') }}" alt="BLOODONATION">
		</h5>
		<button type="button" class="btn-close btn-close-dark" data-bs-dismiss="offcanvas" aria-label="Close"></button>
	</div>
	<div class="offcanvas-body">
		<ul class="navbar-nav align-items-lg-center justify-content-end flex-grow-1 pe-3">
			<li class="nav-item"><a class="nav-link active" aria-current="page" href="<?= url('/'); ?>">Home</a></li>
			<li class="nav-item"><a class="nav-link" href="<?= url('about-us'); ?>">About Us</a></li>
			<li class="nav-item"><a class="nav-link" href="<?= url('blog'); ?>">Blogs</a></li>
			<li class="nav-item"><a class="nav-link" href="<?= url('donation'); ?>">Donation </a></li>
		
<?php if (auth()->user()) {?>
	<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <i class="bi bi-person-circle"></i> {{ auth()->user()->name }} </a>
<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
<li>
<a id="user-profile" class="dropdown-item nav-link mt-md-0 mt-sm-3" type="button" href="<?= (auth()->user()->isAdmin())? url('admin'):url('profile'); ?>">Profile</a>
</li>
<li><hr class="dropdown-divider"></li>
<li><a class="dropdown-item nav-link mt-md-0 mt-sm-3 text-decoration-none" href="<?= url('/logout'); ?>"><i class="bi bi-box-arrow-right"></i> Logout</a></li>
</ul>
</li>
</ul>
	<?php  } else { ?>	
			<a href="<?= url('/login'); ?>" id="menu-btn" class="btn btn-lg mt-md-0 mt-sm-3 text-white"
				type="button">Login</a>
	<?php } ?>
			</div>
</div>
</div>
</nav>
</header>
<?php if ($route->uri == 'search') {?>
<main id="search-page">
<?php } else if (in_array($route->uri, $routeAray)) {?>
<main id="user-login">
<?php }?>