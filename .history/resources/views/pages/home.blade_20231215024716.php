@extends("master.app")
@section("content")
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
							<img src="images/main-logo.png" alt="logo">
						</a>
					</div>

					<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#slide-navbar-collapse" aria-controls="slide-navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"><i class="icon icon-navicon"></i></span>
					</button>

					<div class="navbar-collapse collapse" id="slide-navbar-collapse">
						<ul class="navbar-nav list-inline text-uppercase">
							<li class="nav-item text-hover active"><a href="index.html" class="nav-link" data-effect="Home">Home</a></li>
							<li class="nav-item text-hover"><a href="about.html" class="nav-link" data-effect="About Us">About us</a></li>
							<li class="nav-item text-hover"><a href="blog.html" class="nav-link" data-effect="Blogs">Blog</a></li>
							<li class="nav-item text-hover"><a href="contact.html" class="nav-link" data-effect="Contact">Contact us</a></li>

							<li class="nav-item dropdown">
								<a href="#" data-bs-toggle="dropdown" aria-expanded="false" class="nav-link dropdown-toggle">Pages</a>
								<ul class="dropdown-menu">
									<li><a href="about.html" class="dropdown-item">About us</a></li>
									<li><a href="blog.html" class="dropdown-item">Blog</a></li>
									<li><a href="single-post.html" class="dropdown-item">Single Post</a></li>
									<li><a href="contact.html" class="dropdown-item">Contact us</a></li>
									<li><a href="shop.html" class="dropdown-item">Shop</a></li>
									<li><a href="single-product.html" class="dropdown-item">Single Product</a></li>
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

<section id="billboard">
	<div class="main-slider">

		<div class="slider-item">

			<figure>
				<img src="images/banner1.jpg">
			</figure>

			<div class="text-content col-md-8">
				<span>- FRESHLY BAKED EVERY MORNING</span>
				<h2 class="text-uppercase colored padding-xsmall"><a href="#">delicious cupcakes for you</a></h2>
				<p>A gorgeous selection of our favorites for a client to send as a new year’s gift.A gorgeous selection of our favorites for a client to send as a new year’s gift</p>
				<div class="pix_btn">
					<a href="#" class="btn-hvr-effects mt-3">Shop Now</a>
				</div>
			</div><!--content-box-->


		</div><!--slider-item-->

		<div class="slider-item">

			<figure>
				<img src="images/banner2.jpg">
			</figure>

			<div class="text-content col-md-8">
				<span>- FRESHLY BAKED EVERY MORNING</span>
				<h2 class="text-uppercase colored padding-xsmall"><a href="">Enjoy with these cakes</a></h2>
				<p>A gorgeous selection of our favorites for a client to send as a new year’s gift.A gorgeous selection of our favorites for a client to send as a new year’s gift</p>
				<div class="pix_btn">
					<a href="#" class="btn-hvr-effects mt-3">Shop Now</a>
				</div>
			</div><!--content-box-->


		</div><!--slider-item-->

		<div class="slider-item">

			<figure>
				<img src="images/banner1.jpg">
			</figure>

			<div class="text-content col-md-8">
				<span>- FRESHLY BAKED EVERY MORNING</span>
				<h2 class="text-uppercase colored padding-xsmall"><a href="">delicious cupcakes for you</a></h2>
				<p>A gorgeous selection of our favorites for a client to send as a new year’s gift.A gorgeous selection of our favorites for a client to send as a new year’s gift</p>
				<div class="pix_btn">
					<a href="#" class="btn-hvr-effects mt-3">Shop Now</a>
				</div>
			</div><!--content-box-->


		</div><!--slider-item-->

	</div><!--slider-->

</section>

<section class="about-us margin-medium">
	<div class="container">
		<div class="row">
			<div class="nav-tabs-wrap products-tab">

				<h2 class="section-title text-center">About Us</h2>

				<nav>
					<div class="nav nav-tabs padding-small text-hover" id="nav-tab" role="tablist">
						<a class="nav-link active" id="nav-missions-tab" data-bs-toggle="tab" data-bs-target="#nav-missions" role="tab" aria-controls="nav-missions" aria-selected="true">Our Missions</a>
						<a class="nav-link" id="nav-values-tab" data-bs-toggle="tab" data-bs-target="#nav-values" role="tab" aria-controls="nav-values" aria-selected="false">Our Values
						</a>
						<a class="nav-link" id="nav-goals-tab" data-bs-toggle="tab" data-bs-target="#nav-goals" role="tab" aria-controls="nav-goals" aria-selected="false">Our Goals</a>
					</div>
				</nav>

				<div class="tab-content" id="nav-tabContent">
					<div class="tab-pane fade show active" role="tabpanel" id="nav-missions" aria-labelledby="nav-missions-tab">
						<div class="col-md-12">
							<div class="row">

								<div class="col-md-6">
									<div class="product-image" style="background-image: url(images/tabimg.jpg);background-size: cover;"></div>
								</div>

								<div class="text-content col-md-6 bg-Peach p-5">
									<h3 class="mb-4">
									Providing quality products for all be happy and peace
									</h3>
									<p>A gorgeous selection of our favorites for a client to send as a new year’s gift. A gorgeous selection of our favorites for a client to send as a new year’s gift.
									A gorgeous selection of our favorites for a client to send as a new year’s gift.</p>
									<p>A gorgeous selection of our favorites for a client to send as a new year’s gift. A gorgeous selection of our favorites for a client to send as a new year’s gift.</p>
									<div class="pix_btn mt-4">
										<a href="#" class="btn-hvr-effects">read more</a>
									</div>
								</div>
							</div>
						</div><!--content-->
					</div><!--tab-pane-->

					<div class="tab-pane fade" role="tabpanel" id="nav-values" aria-labelledby="nav-values-tab">
						<div class="col-md-12">
							<div class="row">

								<div class="col-md-6">
									<div class="product-image" style="background-image: url(images/tabimg1.jpg);background-size: cover;"></div>
								</div>

								<div class="text-content col-md-6 bg-Peach p-5">
									<h3 class="mb-4">
										This products for all be happy and peace
									</h3>
									<p>A gorgeous selection of our favorites for a client to send as a new year’s gift. A gorgeous selection of our favorites for a client to send as a new year’s gift. A gorgeous selection of our favorites for a client to send as a new year’s gift.</p>
									<div class="pix_btn mt-4">
										<a href="#" class="btn-hvr-effects">read more</a>
									</div>
								</div>
							</div>
						</div><!--col-md-12-->
					</div><!--tab-panel-->

					<div class="tab-pane fade" role="tabpanel" id="nav-goals" aria-labelledby="nav-goals-tab">
						<div class="col-md-12">
							<div class="row">

								<div class="col-md-6">
									<div class="product-image" style="background-image: url(images/tabimg.jpg);background-size: cover;"></div>
								</div>

								<div class="text-content col-md-6 bg-Peach p-5">
									<h3 class="mb-4">
										A gorgeous selection of our favorites for a client to send as a new year’s gift.
									</h3>
									<p>A gorgeous selection of our favorites for a client to send as a new year’s gift. A gorgeous selection of our favorites for a client to send as a new year’s gift. A gorgeous selection of our favorites for a client to send as a new year’s gift.</p>
									<div class="pix_btn mt-4">
										<a href="#" class="btn-hvr-effects">read more</a>
									</div>
								</div>
							</div>
						</div><!--content-->
					</div><!--tab-panel-->

				</div><!--tab-content-->

			</div><!---with-nav-tabs--->
		</div>
	</div>

</section>

<section class="best-products margin-large">
	<div class="container">
			<h2 class="section-title text-center mb-4">Best Product</h2>
		<div class="row">
		<div class="d-flex products-slider">

				<div class="product-item col-md-3 pl-0">
					<a href="single-product.html" class="product-image"><img src="images/cake-item1.jpg"></a>
					<div class="text-comtent text-center text-hover">
						<h5 class="pt-4"><a href="single-product.html">Black Forest Pastry</a></h5>
						<p>Cake - Pastries</p>
						<span class="price colored">$12</span>
					</div>
				</div>
				<div class="product-item col-md-3 pl-0">
					<a href="single-product.html" class="product-image"><img src="images/cake-item2.jpg"></a>
					<div class="text-comtent text-center text-hover">
						<h5 class="pt-4"><a href="single-product.html">Sprinkled Donuts</a></h5>
						<p>Cake - Pastries</p>
						<span class="price colored">$12</span>
					</div>
				</div>
				<div class="product-item col-md-3 pl-0">
					<a href="single-product.html" class="product-image"><img src="images/cake-item3.jpg"></a>
					<div class="text-comtent text-center text-hover">
						<h5 class="pt-4"><a href="single-product.html">Black Forest Cupcake</a></h5>
						<p>Cake - Pastries</p>
						<span class="price colored">$12</span>
					</div>
				</div>
				<div class="product-item col-md-3 pl-0">
					<a href="single-product.html" class="product-image"><img src="images/cake-item4.jpg"></a>
				    <div class="text-comtent text-center text-hover">
						<h5 class="pt-4"><a href="single-product.html">Macarons with Berries</a></h5>
						<p>Cake - Pastries</p>
						<span class="price colored">$12</span>
					</div>
				</div>
				<div class="product-item col-md-3 pl-0">
					<a href="single-product.html" class="product-image"><img src="images/cake-item1.jpg"></a>
				    <div class="text-comtent text-center text-hover">
						<h5 class="pt-4"><a href="single-product.html">Macarons with Berries</a></h5>
						<p>Cake - Pastries</p>
						<span class="price colored">$12</span>
					</div>
				</div>

			</div><!--slider-->
		</div>
	</div>
</section>


<section class="special-items mb-5">
	<div class="item-content">
	<div class="container">
		<div class="row">
			<div class="col-md-6 color-white">
				<h2 class="section-title color-white mb-4">
					Our Special Chocolate Mousse
				</h2>
				<p>All of our products are made from scratch using family recipes with the highest quality ingredients. We bake and sell fresh daily to ensure only the best products are sold to our customers.</p>

			<div class="pix_btn mt-4">
				<a class="btn btn-outline-light">
				    <span>Shop Now</span>
		  		</a>
			</div>
			</div><!--item-content-->
		</div>
	</div>
	</div>
</section>


<section class="gallery-wrap margin-medium">
	<div class="container">
		<h2 class="section-title mb-5 text-center">View Our Gallery</h2>
		<div class="row">
			<div class="d-flex flex-wrap col-md-12">
				<figure class="col-md-4 mb-3 pl-0">
					<a class="magnific-popup" href="images/blackforest.jpg">
						<img src="images/blackforest.jpg" alt="cake" class="galleryImg">
						<div class="overlay">
							<i class="icon icon-search-plus"></i>
						</div><!--imgOverlay-->
					</a>
				</figure>
				<figure class="col-md-4 mb-3 pl-0">
					<a class="magnific-popup" href="images/macarons.jpg">
						<img src="images/macarons.jpg" alt="cake" class="galleryImg">
						<div class="overlay">
							<i class="icon icon-search-plus"></i>
						</div><!--imgOverlay-->
					</a>
				</figure>
				<figure class="col-md-4 mb-3 pl-0">
					<a class="magnific-popup" href="images/blackforest.jpg">
						<img src="images/blackforest.jpg" alt="cake" class="galleryImg">
						<div class="overlay">
							<i class="icon icon-search-plus"></i>
						</div><!--imgOverlay-->
					</a>
				</figure>
				<figure class="col-md-4 mb-3 pl-0">
					<a class="magnific-popup" href="images/cakeitem.jpg">
						<img src="images/blackforest.jpg" alt="cake" class="galleryImg">
						<div class="overlay">
							<i class="icon icon-search-plus"></i>
						</div><!--imgOverlay-->
					</a>
				</figure>
				<figure class="col-md-4 mb-3 pl-0">
					<a class="magnific-popup" href="images/macarons.jpg">
						<img src="images/macarons.jpg" alt="cake" class="galleryImg">
						<div class="overlay">
							<i class="icon icon-search-plus"></i>
						</div><!--imgOverlay-->
					</a>
				</figure>
				<figure class="col-md-4 mb-3 pl-0">
					<a class="magnific-popup" href="images/sprinkleddonuts.jpg">
						<img src="images/sprinkleddonuts.jpg" alt="cake" class="galleryImg">
						<div class="overlay">
							<i class="icon icon-search-plus"></i>
						</div><!--imgOverlay-->
					</a>
				</figure>
			</div><!--content-->
			<div class="pix_btn text-center m-auto">
				<a href="#" class="btn-hvr-effects mt-3">View All</a>
			</div>
		</div>
	</div>
</section>


<section class="testimonials-wrap padding-medium">
	<div class="container">
		<div class="row">
			<div class="reviews-content col-md-12 light text-center">
				<h2 class="section-title">Testimonials</h2>

			<div class="testimonial-slider">
				<div class="testimonials-inner">
					<div class="rating padding-small">
						<i class="icon icon-star"></i>
						<i class="icon icon-star"></i>
						<i class="icon icon-star"></i>
						<i class="icon icon-star"></i>
						<i class="icon icon-star"></i>
					</div>
					<p class="animated zoomIn">“Bakery is ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea.”</p>
					<div class="testimonial-author">
						<img src="images/default.png" alt="jane">
						<span class="name d-flex justify-content-center mt-3">Jane Marie</span>
					</div>
				</div><!--reviews-info-->

				<div class="testimonials-inner">
					<div class="rating padding-small">
						<i class="icon icon-star"></i>
						<i class="icon icon-star"></i>
						<i class="icon icon-star"></i>
						<i class="icon icon-star"></i>
						<i class="icon icon-star"></i>
					</div>
					<p class="animated zoomIn">This is absolute best product adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea.”</p>
					<div class="testimonial-author">
						<img src="images/default.png" alt="simran">
						<span class="name d-flex justify-content-center mt-3">Simran</span>
					</div>
				</div><!--reviews-info-->

				<div class="testimonials-inner">
					<div class="rating padding-small">
						<i class="icon icon-star"></i>
						<i class="icon icon-star"></i>
						<i class="icon icon-star"></i>
						<i class="icon icon-star"></i>
						<i class="icon icon-star"></i>
					</div>
					<p class="animated zoomIn">“I really love this product sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea.”</p>
					<div class="testimonial-author">
						<img src="images/default.png" alt="jane">
						<span class="name d-flex justify-content-center mt-3">John Marie</span>
					</div>
				</div><!--reviews-info-->

				</div><!--testimonial-slider-->


				</div><!--col-md-12-->
		</div>
	</div>
</section>

<section class="latest-blogs margin-medium">
	<h2 class="section-title text-center mb-5">Latest Blogs</h2>
	<div class="container">
		<div class="row">
			<div class="col-md-6 left-post pl-0 mb-3">
				<div class="post-content">
				<a href="single-post.html"><img src="images/postImg1.jpg" alt="cake" class="largeImg"></a>
				<div class="content light">
					<span class="highlight">March 10, 2020</span>
					<h3 class="mt-3"><a href="single-post.html">How to Make a Cake with Great Delicious Chocolate</a></h3>
				</div>
				</div>
			</div>

			<div class="col-md-6 right-post pl-0">
				<div class="post-content mb-3">
					<a href="single-post.html"><img src="images/postLong.jpg" alt="cake" class="horizontalImg"></a>
					<div class="content light">
						<span class="highlight">March 10, 2020</span>
						<h3 class="mt-3"><a href="single-post.html">How to Make a Cake with Great Delicious Chocolate</a></h3>
					</div>
				</div><!--post-->

				<div class="post-content">
					<a href="single-post.html"><img src="images/postLong.jpg" alt="cake" class="horizontalImg"></a>
					<div class="content light">
						<span class="highlight">March 10, 2020</span>
						<h3 class="mt-3"><a href="single-post.html">How to Make a Cake with Great Delicious Chocolate</a></h3>
					</div>
				</div><!--post-->
			</div>
		</div>
	</div>

	<div class="pix_btn text-center">
		<a href="#" class="btn-hvr-effects mt-5">read more</a>
	</div>
</section>

<section class="association-with bg-prim padding-small">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ul class="d-flex list-unstyled justify-content-between flex-wrap">
					<li><a href="#"><img src="images/baker.svg" class="brandImg"></a></li>
					<li><a href="#"><img src="images/bakery.svg" class="brandImg"></a></li>
					<li><a href="#"><img src="images/thebakery.svg" class="brandImg"></a></li>
					<li><a href="#"><img src="images/breadcookies.svg" class="brandImg"></a></li>
					<li><a href="#"><img src="images/bakery.svg" class="brandImg"></a></li>
				</ul>
			</div>
		</div>
	</div>
</section>

<footer id="footer">
	<div class="container">
		<div class="row">
			<div class="wrap flex-container">

			<div class="col-md-3 footer-logo text-center mb-3">
				<img src="images/main-logo.png" class="mb-3">
				<p>Bakery is a free HTML CSS Template by Templates Jungle specially crafted for Bakeries.</p>
			</div>

			<div class="col-md-5 mr-5 mb-3">
				<div class="widget-newsletter mb-5">
					<h4 class="widget-title">Subscribe To Our Newletter</h4>
					<div class="newsletter-button d-flex">
						<input type="text" name="Subscribe" placeholder="Your Email Address">
						<button class="btn-hvr-effects">Subscribe</button>
					</div>

				</div><!--widget-newsletter-->

				<div class="working-schedule">
					<h4 class="widget-title">Our Work Time</h4>
					<div class="time-list d-flex">
						<ul class="list-unstyled mr-5">
							<li>Monday - Friday</li>
							<li>8:00am - 8:30 pm</li>
						</ul>
						<ul class="list-unstyled">
							<li>Saturday - Sunday</li>
							<li>10:00am - 16:00 pm</li>
						</ul>
					</div>
				</div>
			</div><!--col-md-4-->

			<div class="col-md-2">
				<div class="quick-links">
					<h4 class="widget-title">Quick Links</h4>
					<div class="footer-menu">
						<ul class="list-unstyled">
							<li><a href="#">Home</a></li>
							<li><a href="about.html">About us</a></li>
							<li><a href="#">Gallery</a></li>
							<li><a href="#">Shop</a></li>
							<li><a href="blog.html">Blogs</a></li>
							<li><a href="contact.html">Contact us</a></li>
						</ul>
					</div>
				</div>
			</div>

			</div><!--flex-container-->

		</div>
	</div>
</footer>

<div class="footer-bottom">
	<div class="container">
		<div class="wrap flex-container padding-small">
			<div class="copyright">
				<p class="mb-0">© 2021 Bakery HTML Template by <a href="https://templatesjungle.com/" target="_blank">Templates Jungle</a></p>
			</div>
			<div class="payment-card">
				<span>We Accept:</span>
				<img src="images/visa.png" class="cardImg">
				<img src="images/american-express.png" class="cardImg">
				<img src="images/master-card.png" class="cardImg">
			</div>
		</div>
	</div>
</div>

</div>
@endsection