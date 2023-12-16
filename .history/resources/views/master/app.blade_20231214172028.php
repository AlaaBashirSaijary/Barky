<!DOCTYPE html>
	<html>
	<head>
		<title>Bakery</title>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta name="format-detection" content="telephone=no">
	    <meta name="apple-mobile-web-app-capable" content="yes">
	    <meta name="author" content="">
	    <meta name="keywords" content="">
	    <meta name="description" content="">
	    <link rel="stylesheet" type="text/css" href={{ asset("fonts/icomoon/icomoon.css") }}>
	    <link rel="stylesheet" type="text/css" href={{ asset("css/slick.css"/) }}>
		<link rel="stylesheet" type="text/css" href={{ asset("css/slick-theme.css"/) }}>
		<link rel="stylesheet" type="text/css" href={{ asset() }}"css/magnific-popup.css"/>

		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

		<link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
	    <link rel="stylesheet" type="text/css" href="style.css">

	</head>

<body>


@include("master.header")
@yield("content")
@include("master.footer")


	<script src="js/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="js/slick.min.js"></script>
	<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>

</body>
</html>
