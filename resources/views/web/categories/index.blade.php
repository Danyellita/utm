
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
					      		<ul class="cards">
									@foreach($category->products as $product)
										<li class="cards_item">
											<div class="card">
												<center><h4 class="card_title" style="color: black; padding-top: 30px;"><a href="{{ route('web.products.show', [$product]) }}" style="color: black;">{{ $product->name}}</h4></center>
										      	<div class="card_image">
										      		</a>
										      		@if($product->picture)
							  						<img src="{{ asset('storage/img')}}/{{ $product->picture }}" style="width: 100px; height: 100px; padding: 10px 10px 10px 10px">
							  					@else
							  						<img src="{{ asset('img/4.jpg')}}" style="width: 100px; height: 100px; padding: 10px 10px 10px 10px">
							  					@endif 
								  				</div>
										        <div class="card_content">
										          	<p class="card_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit <br>sed do eiusmod...<span style="color:green">Details</span></p>
										          	
										        </div>
										    </div>
										</li>
									@endforeach
								</ul> 
							</div>
				        </div>
					</div>
				@endforeach
			</div>
		</div>
@endsection