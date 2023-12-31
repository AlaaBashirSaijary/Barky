@extends("master.app")
@section("content")
{{-- <div class="site-banner"> --}}
	<div class="banner-content">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="text-content colored">
						<h1>Blogs</h1>
						<div class="breadcum-items mt-2">
							<span class="item color-primary"><a href={{route("Home")  }}>Home /</a></span>
							<span class="item colored">Blogs</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
{{-- </div> --}}
<!--site-banner-->

<section class="post-grid margin-large border-bottom">
	<div class="container">
		<div class="row">
			<div class="col-md-4 mb-5">
				<a href="{{ route("singlepost") }}">
					<img src="images/blog-cake.jpg" alt="blog" class="postImg mb-3">
				</a>
				<div class="content">
					<div class="meta-tags flex-container color-secondary mb-3">
						<span class="border-right"><i class="icon icon-calendar mr-2"></i>April 21,18</span>
						<span class="border-right"><i class="icon icon-bubble mr-2"></i>0 Comments</span>
						<span><i class="icon icon-envelope-o mr-2"></i>News</span>
					</div><!--meta-tags-->

					<h2 class="post-title"><a href="{{ route("singlepost") }}">How to Make a Cake with Great Delicious Chocolate</a></h2>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eisusmod tempor incidunt ut elit et.</p>

					<div class="pix_btn">
						<a href="{{ route("singlepost") }}"  class="btn-hvr-effects mt-3">read more</a>
					</div>

				</div><!--content-->
			</div><!--col-md-4-->

			<div class="col-md-4 mb-5">
				<a href="{{ route("singlepost") }}">
					<img src="images/postImg2.jpg" alt="blog" class="postImg mb-3">
				</a>
				<div class="content">
					<div class="meta-tags flex-container color-secondary mb-3">
						<span class="border-right"><i class="icon icon-calendar mr-2"></i>April 24,18</span>
						<span class="border-right"><i class="icon icon-bubble mr-2"></i>0 Comments</span>
						<span><i class="icon icon-envelope-o mr-2"></i>News</span>
					</div><!--meta-tags-->

					<h2 class="post-title"><a href="{{ route("singlepost") }}">How to Make a Cake with Great Delicious Chocolate</a></h2>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eisusmod tempor incidunt ut elit et.</p>

					<div class="pix_btn">
						<a href="{{ route("singlepost") }}" class="btn-hvr-effects mt-3">read more</a>
					</div>

				</div><!--content-->
			</div><!--col-md-4-->

			<div class="col-md-4 mb-5">
				<a href="{{ route("singlepost") }}">
					<img src="images/postitem1.jpg" alt="blog" class="postImg mb-3">
				</a>
				<div class="content">
					<div class="meta-tags flex-container color-secondary mb-3">
						<span class="border-right"><i class="icon icon-calendar mr-2"></i>April 21,18</span>
						<span class="border-right"><i class="icon icon-bubble mr-2"></i>0 Comments</span>
						<span><i class="icon icon-envelope-o mr-2"></i>News</span>
					</div><!--meta-tags-->

					<h2 class="post-title"><a href="{{ route("singlepost") }}">How to Make a Cake with Great Delicious Chocolate</a></h2>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eisusmod tempor incidunt ut elit et.</p>

					<div class="pix_btn">
						<a href="{{ route("singlepost") }}" class="btn-hvr-effects mt-3">read more</a>
					</div>

				</div><!--content-->
			</div><!--col-md-4-->

			<div class="col-md-4 mb-5">
				<a href="{{ route("singlepost") }}">
					<img src="images/tabimg.jpg" alt="blog" class="postImg mb-3">
				</a>
				<div class="content">
					<div class="meta-tags flex-container color-secondary mb-3">
						<span class="border-right"><i class="icon icon-calendar mr-2"></i>April 21,18</span>
						<span class="border-right"><i class="icon icon-bubble mr-2"></i>0 Comments</span>
						<span><i class="icon icon-envelope-o mr-2"></i>News</span>
					</div><!--meta-tags-->

					<h2 class="post-title"><a href="{{ route("singlepost") }}">How to Make a Cake with Great Delicious Chocolate</a></h2>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eisusmod tempor incidunt ut elit et.</p>

					<div class="pix_btn">
						<a href="{{ route("singlepost") }}" class="btn-hvr-effects mt-3">read more</a>
					</div>

				</div><!--content-->
			</div><!--col-md-4-->

			<div class="col-md-4 mb-5">
				<a href="{{ route("singlepost") }}">
					<img src="images/postitem.jpg" alt="blog" class="postImg mb-3">
				</a>
				<div class="content">
					<div class="meta-tags flex-container color-secondary mb-3">
						<span class="border-right"><i class="icon icon-calendar mr-2"></i>April 21,18</span>
						<span class="border-right"><i class="icon icon-bubble mr-2"></i>0 Comments</span>
						<span><i class="icon icon-envelope-o mr-2"></i>News</span>
					</div><!--meta-tags-->

					<h2 class="post-title"><a href="{{ route("singlepost") }}">How to Make a Cake with Great Delicious Chocolate</a></h2>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eisusmod tempor incidunt ut elit et.</p>

					<div class="pix_btn">
						<a href="{{ route("singlepost") }}" class="btn-hvr-effects mt-3">read more</a>
					</div>

				</div><!--content-->
			</div><!--col-md-4-->

			<div class="col-md-4 mb-5">
				<a href="{{ route("singlepost") }}">
					<img src="images/postimg2.jpg" alt="blog" class="postImg mb-3">
				</a>
				<div class="content">
					<div class="meta-tags flex-container color-secondary mb-3">
						<span class="border-right"><i class="icon icon-calendar mr-2"></i>April 21,18</span>
						<span class="border-right"><i class="icon icon-bubble mr-2"></i>0 Comments</span>
						<span><i class="icon icon-envelope-o mr-2"></i>News</span>
					</div><!--meta-tags-->

					<h2 class="post-title"><a href="{{ route("singlepost") }}">How to Make a Cake with Delicious Chocolate</a></h2>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eisusmod tempor incidunt ut elit et.</p>

					<div class="pix_btn">
						<a href="{{ route("singlepost") }}" class="btn-hvr-effects mt-3">read more</a>
					</div>

				</div><!--content-->
			</div><!--col-md-4-->

		</div>
	</div>
</section>

@endsection
