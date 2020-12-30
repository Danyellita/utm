@extends('layouts.web.admin')

@section('content')
	<div class="container" style="padding-top:20px;">
		<div class="row">
			<div class="col">
				<img id="myImg" src="{{ asset('storage/img') }}/{{ $product->picture }}"  alt="" style="width:100%; padding: 10px 10px 10px 10px" class="mx-auto">
			</div>
			<div class="col">
				<div class="row">
					@foreach($pictures as $picture)
						<div class="col-2">
							<img src="{{ asset('storage/img')}}/{{ $picture->image }}" style="width: 100px; height: 100px; padding: 10px 10px 10px 10px">
						</div>
					@endforeach
				</div>
				<h3>Product name: {{ $product->name }}</h3>
				<h4  style="color: red;"><i class="fas fa-check-circle"></i> Product Details</h4>
				<p>Price</p>
				<p>Product Category: {{ $product->category->name }}</p>
				<p>Product Country: {{ $product->region->name }}</p>
				
				<p>Porduct Composition: {{ $product->composition }}</p>
				<p>Packing Quantity: {{ $product->packing_quantity }}</p>
				<p>Weight: {{ $product->weight }}</p>
				<p>Product Measurement: {{ $product->product_measurement }}</p>
				@foreach($sales as $sale)
					<p>Stock: {{ $sale->stock}}</p>
				@endforeach
			</div>
		</div>
		<div class="row" style="margin-bottom: 20px;">
			<div class="col">
				<h4  style="color: red;"><i class="fas fa-check-circle"></i> Details Pharmacy</h4>
				<p>Pharmacy Name: {{ $product->pharmacy->name }}</p>
				<p>Pharmacy Phone: <a class="btn btn-success" href="tel:09494994949"> {{ $product->pharmacy->phone }}</a></p>
				<p>Pharmacy Email: {{ $product->pharmacy->emial }}</p>
				<p>Pharmacy Site: {{ $product->pharmacy->site }}</p>
				<p>Pharmacy Working Time: {{ $product->pharmacy->working_time }}</p>
				<p>Street: {{ $product->pharmacy->street->name }}</p>
				<p>District: {{ $product->pharmacy->street->sector->name}}</p>
				<h4  style="color: red;"><i class="fas fa-check-circle"></i> Reviews</h4>
				@foreach($reviews as $review)
					@if($review->rating === 5 )
						<i class="fas fa-star fa-2x"  style="color:#FFD700; border-radius: 5px;"></i><i class="fas fa-star  fa-2x" style="color:#FFD700;"></i>
					@else
						<i class="fas fa-star  fa-2x" style="color:#FFD700;"></i>
					@endif
					<p>Comments: {{ $review->reviews_comments }}</p>
				@endforeach
			</div>
			<div class="col">
				<h4  style="color: red;"><i class="fas fa-check-circle"></i>Location</h4>
				<div id="map" style="height: 80%;"></div>
			</div>
		</div>
		<h4 style="color: red;"><i class="fas fa-check-circle"></i> Similar Products</h4>
		<div class="row" style="margin-bottom: 30px;">
			@foreach($similarproducts as $similarproduct)
				<div class="col">
					<p>{{ $similarproduct->name}}</p>
					<img id="myImg" src="{{ asset('storage/similarproducts') }}/{{ $similarproduct->image }}"  alt="" style="width:100%;max-width:300px;" class="mx-auto">
				</div>
			@endforeach
		</div>
	</div>
	<script>
	    let map;
		function initMap() {
	        map = new google.maps.Map(document.getElementById("map"), {
	        	center: {lat: 47.003670, lng:28.907089},
	        zoom: 10,
	        });
	    }
    </script>
@endsection