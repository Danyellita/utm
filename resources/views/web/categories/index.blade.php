
@extends('layouts.web.admin')
@section('content')
	<h3 style="margin-left: 20px; text-align: center;">Products</h3>
		<div class="container">
			<div class="row">
				@foreach($categories as $category)
					<div class="col col-6">
						<div class="js-content text-center clearfix">
				      		<div class="card-header" id="myTable">
				      			<h5 style="color: black;"> <a href="#" style="color:black; text-decoration: none;">Category<br>{{ $category->name }} </a></h5>
				      		</div>
				      		<div class="card-body"> 
								<h5>Products</h5>
					       		<div class="row">
					       			@foreach($category->products as $product)
					       				<div class="col">
					       					<a href="{{ route('web.products.show', [$product]) }}">{{ $product->name}}</a>
					       					@if($product->picture)
						  						<img src="{{ asset('storage/img')}}/{{ $product->picture }}" style="width: 100px; height: 100px; padding: 10px 10px 10px 10px">
						  					@else
						  						<img src="{{ asset('img/4.jpg')}}" style="width: 100px; height: 100px; padding: 10px 10px 10px 10px">
						  					@endif 
					       				</div>
						  			@endforeach
					       		</div>
							</div>
				        </div>
					</div>
				@endforeach
			</div>
		</div>
@endsection