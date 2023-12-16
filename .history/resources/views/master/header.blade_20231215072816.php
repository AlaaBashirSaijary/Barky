
<div id="main-wrapper" class="overflow-hidden">
	<div id="header-wrap">
	<div class="header-top-menu bg-black color-secondary">
		<div class="container">
			<div class="row">
				<div class="wrap flex-container padding-small">
				<div class="contact-block">
					<span class="pr-50"><i class="icon icon-phone"></i>5555-00-444</span>
					<span class="color-secondary"><i class="icon icon-envelope-o"></i><a href="#"> bakery@gmail.com</a></span>
				</div>

				<div class="header-top-right">
					<ul class="list-unstyled d-flex color-secondary">
						<li class="pr-50"><a href="#">My Account</a></li>
						<li class="pr-50"><a href="#">FAQs</a></li>
						<li><a href="#">Help</a></li>
					</ul>
				</div>
				</div><!--flex-container-->
			</div>
		</div>
	</div><!----top-menu---->

	<header id="header">
		<div class="container">
			<div class="row">

				<nav class="navbar navbar-expand-lg col-md-12">

					<div class="navbar-brand">
						<a href="index.html">
							<img src={{ asset("images/main-logo.png") }} alt="logo">
						</a>
					</div>

					<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#slide-navbar-collapse" aria-controls="slide-navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"><i class="icon icon-navicon"></i></span>
					</button>

					<div class="navbar-collapse collapse" id="slide-navbar-collapse">
						<ul class="navbar-nav list-inline text-uppercase">
							<li class="nav-item text-hover active"><a href={{ route("Home") }} class="nav-link" data-effect="Home">Home</a></li>
							<li class="nav-item text-hover"><a href={{ route("About") }} class="nav-link" data-effect="About Us">About us</a></li>
							<li class="nav-item text-hover"><a href={{ route("Blog") }}class="nav-link" data-effect="Blogs">Blog</a></li>
							<li class="nav-item text-hover"><a href={{ route("Contact") }} class="nav-link" data-effect="Contact">Contact us</a></li>

							<li class="nav-item dropdown">
								<a href="#" data-bs-toggle="dropdown" aria-expanded="false" class="nav-link dropdown-toggle">Pages</a>
								<ul class="dropdown-menu">
									<li><a href={{ route("About") }} class="dropdown-item">About us</a></li>
									<li><a href={{ route("Blog") }} class="dropdown-item">Blog</a></li>
									<li><a href={{ route("singlepost") }}"single-post.html" class="dropdown-item">Single Post</a></li>
									<li><a href={{ route("Contact") }}class="dropdown-item">Contact us</a></li>
									<li><a href={{ route("Shop") }}class="dropdown-item">Shop</a></li>
									<li><a href={{ route("singleproduct") }} class="dropdown-item">Single Product</a></li>
								</ul>
							</li>

						</ul>
					</div>

					<div class="action-menu">
						<div class="searchbar">
							<a href="#" class="search-button search-toggle" data-selector=".navbar">
								<i class="icon icon-search"></i>
							</a>
							<form role="search" method="get" class="search-box" action="">
								<input class="search-field text search-input" placeholder="Search" type="search">
							</form>
						</div>
						<div class="shopping-cart">
							<a href="#">
								<i class="icon icon-shopping-cart"></i>
							</a>
						</div>
					</div><!--action-menu-->

				</nav>

			</div>
		</div>

	</header>

</div><!--header-wrap-->
