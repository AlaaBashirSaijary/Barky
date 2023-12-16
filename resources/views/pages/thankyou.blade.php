@extends("master.app")
@section("content")
<section class="contact-information padding-large mt-3">
	<div class="container">
		<div class="row">
				<div class="col-md-6 p-0 mb-3">
					<div class="container">
					<h2>Get in Touch</h2>

				<div class="contact-detail d-flex flex-wrap mt-4">
					<div class="detail mr-6 mb-4">
						<h3>Phones</h3>
						<ul class="list-unstyled">
							<li><i class="icon icon-phone"></i>+1650-243-0000</li>
							<li><i class="icon icon-phone"></i>+1650-243-0000</li>
						</ul>
					</div><!--detail-->
					<div class="detail mb-4">
						<h3>Emails</h3>
						<ul class="list-unstyled">
							<li><i class="icon icon-envelope-o"></i>
								<a href="mailto:info@bakery.com">info@bakery.com</a></li>
							<li><i class="icon icon-envelope-o"></i>
								<a href="mailto:info@bakery.com">info@bakery.com</a></li>
						</ul>
					</div><!--detail-->
					<div class="address detail mb-4">
						<h3>Address</h3>
						<ul class="list-unstyled">
							<li><i class="icon icon-map-marker"></i>
								North Melbourne VIC 3051, Australia</li>
							<li><i class="icon icon-map-marker"></i>
								North Melbourne VIC 3051, Australia</li>
						</ul>
					</div><!--detail-->
					<div class="detail mb-4">
						<h3>Social Links</h3>
						<div class="social-links flex-container">
							<a href="#" class="icon icon-facebook"></a>
							<a href="#" class="icon icon-twitter"></a>
							<a href="#" class="icon icon-pinterest-p"></a>
							<a href="#" class="icon icon-youtube"></a>
							<a href="#" class="icon icon-linkedin"></a>
						</div><!--social-links-->
					</div><!--detail-->

				</div><!--contact-detail-->
				</div>
			</div><!--col-md-6-->

			<div class="col-md-6 p-0">
				<div class="container">
					<div class="row">
						<div class="contact-information col-md-12">
						<h2>Thank you</h2>
						<p>We will get back to you as soon as possible.</p>
						</div><!--contact-information-->
					</div>
				</div>
			</div><!--col-md-6-->

		</div>
	</div>
</section>

<section class="google-map">
	<figure>
		<img src="images/googlemap.jpg" alt="google-map">
    </figure>
</section>

@endsection
