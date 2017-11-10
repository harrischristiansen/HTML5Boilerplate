<!doctype html>
<html><head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="Content-type" content="text/html;charset=UTF-8">

	<title><? if (strlen($title) > 1) { echo $title." - "; } ?>HTML5 Boilerplate</title>
	<link REL="icon" HREF="/images/fav.png">

	<meta name="author" content="Harris Christiansen">
	<meta name="description" content="HTML5 Boilerplate - Harris Christiansen">
	<meta name="keywords" content="harris, christiansen, html5, boilerplate">

	<!-- BValidator -->
	<link href="/css/plugins/bvalidator.css" rel="stylesheet" type="text/css">
	
	<!-- jQuery UI -->
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	
	<!-- Bootstrap IE8 Support -->
	<!--[if lt IE 9]>
	    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<!-- Fonts -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	
	<!-- Site CSS -->
	<link rel="stylesheet" type="text/css" href="/css/site.css">

</head><body>

	<!-- Navbar -->
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="/">Boilerplate</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item"><a class="nav-link" href="#" id="alert">Alert</a></li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item <? if ($title =="Table") { echo "active"; } ?>" href="/table">Table</a>
						<a class="dropdown-item <? if ($title =="Form") { echo "active"; } ?>" href="/form">Form</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item <? if ($title =="Actions") { echo "active"; } ?>" href="/actions">Actions</a>
					</div>
				</li>
			</ul>
			<form class="form-inline my-2 my-lg-0">
				<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
			</form>
		</div>
	</nav>