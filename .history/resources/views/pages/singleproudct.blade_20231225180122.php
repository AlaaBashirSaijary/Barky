@extends("master.app")
@section("content")
<section class="bg-sand padding-large">
	<div class="container">
		<div class="row">

			<div class="col-md-6">
				<a href="#" class="product-image"><img src="images/tabimg.jpg"></a>
			</div>

			<div class="col-md-6 pl-5">
				<div class="product-detail">
					<h5 class="pt-4"><a href="#">Black Forest Pastry</a></h5>
					<p>{{ proudct->type }}</p>
					<span class="price colored">$12</span>

					<p>
						{{ proudct }}
					</p>
					<p>
						Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>

					<label for="delivery-date">Delivery Date</label>
					<input type="text" id="delivery-date" class="input-text" name="delivery-date" placeholder="Delivery Date">

					<label class="screen-reader-text" for="qty">Black Forest Pastry Quantity</label>
					<input type="number" id="qty" class="input-text qty text" step="1" min="1" max="" name="quantity" value="1" title="Qty" size="4" placeholder="" inputmode="numeric">
					<button type="submit" name="add-to-cart" value="27545" class="button">Add to cart</button>

				</div>
			</div>

		</div>
	</div>
</section>
@endsection
