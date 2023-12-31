@extends("master.app")

@section("content")

	<div class="banner-content">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="colored">
						<h1>About Us</h1>
						<div class="breadcum-items">
							<span class="item"><a href={{route("Home")  }}'>Home /</a></span>
							<span class="item colored">About Us</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


<section class="chief-detail padding-large">
	<div class="container">
		<div class="row">
				<div class="single-image col-md-6">
					<img src="images/ceo.jpg" alt="ceo" class="singleImg">
				</div>
				<div class="col-md-6 p-5 text-center align-self-center">
					<h2 class="section-title text-center mb-3">Mr X- CEO</h2>
					<p>Mr X is a Friendly, Hardworker and Good Person. Consectetur adipisit slit, sed do eisusmod tempor incididiunt ut labore et dolare manag aliqua. Ut enim ad ut labore et.</p>
				</div>
		</div>
	</div>
</section>

<section class="our-team bg-sand padding-large">
	<h2 class="section-title text-center mb-4">Our Team</h2>
	<div class="container">
		<div class="row">

				<div class="col-md-3">

					<div class="team-member text-center">

						<figure>
							<a href="#"><img src="images/team.jpg" alt="post" class="member-image"></a>
						</figure>

						<div class="member-details text-center">
							<h4>Mrs. Nocole Sara</h4>
							<div class="designation colored">CEO-Founder</div>
							<p>Jelly topping halvah caramels sweet cake gumni nears gumni coffee.</p>
							<div class="social-links color-primary ">
								<a href="#" class="icon icon-facebook pr-10"></a>
								<a href="#" class="icon icon-twitter pr-10"></a>
								<a href="#" class="icon icon-pinterest-p"></a>
							</div>
						</div>

					</div>

				</div><!--col-md-3-->

				<div class="col-md-3 text-center">

					<div class="team-member text-center">
						<figure>
							<img src="images/team1.jpg" alt="post" class="member-image">
						</figure>
						<div class="member-details text-center">
							<h4>Ms Sienna Jolie</h4>
							<div class="designation colored">General Manager</div>
							<p>Jelly topping halvah caramels sweet cake gumni nears gumni coffee.</p>
							<div class="social-links color-primary">
								<a href="#" class="icon icon-facebook pr-10"></a>
								<a href="#" class="icon icon-twitter pr-10"></a>
								<a href="#" class="icon icon-pinterest-p"></a>
							</div>
						</div><!--text-content-->
					</div>

				</div><!--col-md-3-->

				<div class="col-md-3 text-center">

					<div class="team-member text-center">
						<figure>
							<img src="images/team2.jpg" alt="post" class="member-image">
						</figure>
						<div class="member-details text-center">
							<h4>Ms Jenny Blacksmith</h4>
							<div class="designation colored">Assistant Manager</div>
							<p>Jelly topping halvah caramels sweet cake gumni nears gumni coffee.</p>
							<div class="social-links color-primary">
								<a href="#" class="icon icon-facebook pr-10"></a>
								<a href="#" class="icon icon-twitter pr-10"></a>
								<a href="#" class="icon icon-pinterest-p"></a>
							</div>
						</div><!--text-content-->
					</div>

				</div><!--col-md-3-->

				<div class="col-md-3 text-center">

					<div class="team-member text-center">
						<figure>
							<img src="images/team3.jpg" alt="post" class="member-image">
						</figure>
						<div class="member-details text-center">
							<h4>Mrs Lora Inn</h4>
							<div class="designation colored">Staff</div>
							<p>Jelly topping halvah caramels sweet cake gumni nears gumni coffee.</p>
							<div class="social-links color-primary">
								<a href="#" class="icon icon-facebook pr-10"></a>
								<a href="#" class="icon icon-twitter pr-10"></a>
								<a href="#" class="icon icon-pinterest-p"></a>
							</div>
						</div><!--text-content-->
					</div>

				</div><!--col-md-3-->

		</div>
	</div>
</section>

<section class="our-targets padding-large">
	<div class="container">
		<h2 class="section-title text-center mb-5">Our Targets</h2>
		<div class="row">
			<img src="images/flower-bg.jpg" alt="flower">

			<div class="accordion accordion-flush mt-3" id="target-accordion">
			<div class="accordion-item">
				<div class="accordion-header">
					<h4 class="accordion-title">
						<a role="button" data-bs-toggle="collapse" data-bs-target="#target0" class="" aria-expanded="true">Providing Quality Products For All to be happy and peace</a>
					</h4>
				</div>
				<div id="target0" class="accordion-collapse collapse show" aria-expanded="true" >
					<div class="accordion-body">
						<div class="target-detail">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste.</p>
						</div>
				</div>
				</div>
			</div><!--panel-->

			<div class="accordion-item">
				<div class="accordion-header">
					<h4 class="accordion-title">
						<a role="button" data-bs-toggle="collapse" data-bs-target="#target1" class="" aria-expanded="true">Best Quality Products For All to be happy and peace</a>
					</h4>
				</div>
				<div id="target1" class="accordion-collapse collapse" aria-expanded="true" >
					<div class="accordion-body">
						<div class="target-detail">
						<p>Providing Quality Products For All to be happy and peace.Providing Quality Products For All to be happy and peace</p>
						</div>
				</div>
				</div>
			</div><!--panel-->

			<div class="accordion-item">
				<div class="accordion-header">
					<h4 class="accordion-title">
						<a role="button" data-bs-toggle="collapse" data-bs-target="#target2" class="" aria-expanded="true">Providing Quality Products For All to be happy and peace</a>
					</h4>
				</div>
				<div id="target2" class="accordion-collapse collapse" aria-expanded="true" >
					<div class="accordion-body">
						<div class="target-detail">
						<p>Providing Quality Products For All to be happy and peace.Providing Quality Products For All to be happy and peace</p>
						</div>
				</div>
				</div>
			</div><!--panel-->

		</div><!--panel-group-->

		</div>
	</div>
</section>

<section class="our-achivement bg-sand padding-large">
	<div class="container">
			<h2 class="section-title text-center mb-5">Our Best Moments</h2>

		<div class="row">

			<div class="achivement-block text-center col-md-4">
				<img src="images/badge.png" alt="badge">
				<div class="mt-3">
					<h3>Bakery of the Month</h3>
					<span class="date">2018 - 2020</span>
					<p>Bakery is a free HTML CSS Template by Templates Jungle specially crafted for Bakeries.</p>
				</div>
			</div><!--achivement-block-->
			<div class="achivement-block text-center col-md-4">
				<img src="images/badge1.png" alt="badge">
				<div class="mt-3">
					<h3>Bakery of the Month</h3>
					<span class="date">2018 - 2020</span>
					<p>Bakery is a free HTML CSS Template by Templates Jungle specially crafted for Bakeries.</p>
				</div>
			</div><!--achivement-block-->
			<div class="achivement-block text-center col-md-4">
				<img src="images/badge2.png" alt="badge">
				<div class="mt-3">
					<h3>Bakery of the Month</h3>
					<span class="date">2018 - 2020</span>
					<p>Bakery is a free HTML CSS Template by Templates Jungle specially crafted for Bakeries.</p>
				</div>
			</div><!--achivement-block-->

		</div>
	</div>
</section>

@endsection
