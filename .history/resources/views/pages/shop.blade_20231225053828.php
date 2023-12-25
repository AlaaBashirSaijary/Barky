@extends("master.app")
@section("content")
{{-- <div class="site-banner"> --}}
	<div class="banner-content">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="colored">
						<h1>Shop</h1>
						<div class="breadcum-items">
							<span class="item"><a href={{route("Home")  }}>Home /</a></span>
							<span class="item colored">Shop</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
{{-- </div> --}}
<!--site-banner-->

<section class="our-team bg-sand padding-large">
	<div class="container">
		<div class="row">
                  @foreach ( as )


				<div class="product-item col-md-3 pb-4">
					<a href="single-product.html" class="product-image"><img src="images/cake-item1.jpg"></a>
					<div class="text-comtent text-center">
						<h5 class="pt-4"><a href="single-product.html">Black Forest Pastry</a></h5>
						<p>Cake - Pastries</p>
						<span class="price colored">$12</span>
					</div>
				</div>
 

		</div>
	</div>
</section>
@endsection
