@extends("master.app")
@section("content")
{{-- <div class="site-banner"> --}}
	<div class="banner-content">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="text-content text-center">
						<span><i class="icon icon-calendar mr-2"></i>April 21,18</span>
						<h2>How to Make a Cake with Great Delicious Chocolate</h2>

						<div class="breadcum-items mt-2">
							<span class="item color-primary"><a href={{route("Home")  }}>Home /</a></span>
							<span class="item color-primary"><a href={{route("Blog")  }}>Blogs /</a></span>
							<span class="item colored">How to Make a Cake with Great Delicious Chocolate</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
{{-- </div> --}}
<!--site-banner-->


<div class="content-area margin-large border-bottom">
	<div class="container">
		<div class="row">

		<main class="main-content col-md-9">
			<div class="post-detail mb-5">
					<a href="#">
						<img src="images/blog-post.jpg" alt="blog" class="mb-3">
					</a>
					<div class="post-content text-hover">
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eisusmod tempor incidunt ut elit et.Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eisusmod tempor incidunt ut elit et.</p>
						<blockquote>This is blockquote consectetur adipisicing elit sed do eisusmod tempor incidunt ut elit et.</blockquote>

						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eisusmod tempor incidunt ut elit et.Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eisusmod tempor incidunt ut elit et.</p>

					</div><!--post-content-->
				</div><!--post-detail-->

		<section class="comments-wrap mb-4">
			<h3>Comments</h3>
			<div class="comment-list mt-4">

				<article class="flex-container d-flex mb-3">
					<img src="images/default.png" alt="default" class="commentorImg">
					<div class="author-post">
						<div class="comment-meta d-flex">
							<h4>Michael Watson</h4>
							<span class="meta-date">Dec 2,2020</span>
							<small class="comments-reply"><a href="#"><i class="icon icon-mail-reply"></i>Reply</a></small>
						</div><!--meta-tags-->

						<p>Tristique tempis condimentum diam done ullancomroer sit element henddg sit he consequert.Tristique tempis condimentum diam done ullancomroer sit element henddg sit he consequert.</p>
					</div>

				</article><!--flex-container-->

			<div class="child-comments">
				<article class="flex-container d-flex">
					<img src="images/default.png" alt="sara" class="commentorImg">
					<div class="author-post">
						<div class="comment-meta d-flex">
							<h4>Chris Gyale</h4>
							<span class="meta-date">Dec 3,2020</span>
							<small class="comments-reply"><a href="#"><i class="icon icon-mail-reply"></i>Reply</a></small>
						</div><!--meta-tags-->

						<p>Lorem diam done ullancomroer sit element henddg sit he consequert.Tristique tempis condimentum diam done ullancomroer sit element henddg sit he consequert.</p>
					</div>

				</article><!--flex-container-->
			</div><!--child-comments-->

			</div><!--comment-list-->

		</section>

		<section class="comment-respond  mb-5">
			<h3>Leave a Comment</h3>
			<form method="post" class="form-group mt-3">
				<textarea id="comment" class="form-control mb-4" name="comment" placeholder="Write your comment here"></textarea>
				<div class="comment-form">
					<input type="text" name="author" id="author" class="form-control mb-4 mr-4"  placeholder="Your full name">
					<input type="email" name="email" id="email" class="form-control mb-4"  placeholder="E-mail Address">
				</div>
				<div class="checkbox-btn d-flex">
				 <input class="checkbox-custom" name="checkbox" type="checkbox"><p>Save my name, email, and website in this browser for the next time I comment.</p>
				 </div>
				 <div class="pix_btn mt-2">
					<a href="#" class="btn-hvr-effects">Submit</a>
				</div>
			</form>
		</section>

		</main>

			<aside class="right-sidebar col-md-3">
				<div class="container">
				<div class="row">

				<div class="meta-person bg-alabaster p-4 text-center">
					<img src="images/ceo.jpg" alt="person" class="personImg">
					<h3 class="colored mt-3">Head Chef</h3>
					<p>He is a Experience, Amazing and Best Chef in our Restaurant.</p>
				</div>

				<div class="sidebar-box">
					<h3>Search</h3>
					<div class="search-box d-flex">
						<input type="text" name="search" class="border" class="mt-3">
						<a href="#" class="btn-search btn-hvr-effects"><i class="icon icon-search"></i></a>
					</div><!--search-box-->
				</div>

				<div class="categories-box sidebar-box">
					<h3>Categories</h3>
					<ul class="list-unstyled mt-3">
						<li><a href="#">Recipes</a><span>(5)</span></li>
						<li><a href="#">Asian</a><span>(3)</span></li>
						<li><a href="#">Italian</a><span>(4)</span></li>
						<li><a href="#">Cooking</a><span>(2)</span></li>
						<li><a href="#">World Restaurants</a><span>(3)</span></li>
					</ul>
				</div><!--.categories-box-->

			<div class="recent-post-box sidebar-box">
				<h3>Recent Posts</h3>
				<div class="d-flex mb-3 mt-3">
					<div class="post-image">
						<img src="images/cake-item1.jpg" class="rpImg">
					</div>
					<div class="text-block">
					<a href="#">2 Storey Cake Tricks And Tips</a>
					<span class="date">
						july 2nd 2020
					</span>
					</div>

				</div>

				<div class="d-flex mb-3">
					<div class="post-image">
						<img src="images/cake-item1.jpg" class="rpImg">
					</div>
					<div class="text-block">
					<a href="#">Special Chocolate Rolls</a>
					<span class="date">
						july 20th 2020
					</span>
					</div>

				</div>

				<div class="d-flex mb-3">
					<div class="post-image">
						<img src="images/cake-item1.jpg" class="rpImg">
					</div>
					<div class="text-block">
					<a href="#">Fullfill the Cupcakes Standard</a>
					<span class="date">
						july 30th 2024
					</span>
					</div>

				</div>

		</div><!--.recent-post-box-->

		<div class="post-tags-box sidebar-box">
			<h3>Tags</h3>
			<div class="tags">
				<a href="#">Breads,</a>
				<a href="#">Cakes,</a>
				<a href="#">Chocolate,</a>
				<a href="#">Rolls,</a>
				<a href="#">Pastries,</a>
				<a href="#">Cupcakes,</a>
				<a href="#">Donuts</a>
			</div>
		</div><!--.tags-box-->

			</div><!--container-->
			</div>
		</aside>

		</div>
	</div>
</div><!--content-area-->

@endsection
