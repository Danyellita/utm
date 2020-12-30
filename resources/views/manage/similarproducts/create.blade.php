@extends('layouts.manage.manage')
@section('content')
	<div class="container-fluid pb-2" id="fluid">
		<div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 rounded box-shadow bg-white pb-2 pt-2" id="cards">
			<div class="card">
				<form method="POST" action="{{ route('manage.similarproducts.store') }}" enctype="multipart/form-data">
					@csrf 
					<div class="card-header" style="text-align: center;">
						<h3><strong>{{ __('Add Similar Product') }}</strong></h3>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-6">
								<input type="text" class="form-control" name="name" placeholder="Product Name" style="margin: 5px;">
							</div>
							<div class="col-6">
								<input type="file" class="myfrm form-control"  name="image" style="margin: 5px;">
							</div>
							<div class="col-6">
								<label style="margin-left: 4px;">Select Product</label>
								<select name="product_id">
									@foreach($products as $product)
										<option value="{{ $product->id }}">{{ $product->name }}</option>
									@endforeach
									
								</select>
							</div>
							<div class="col-6">
								<label style="margin-left: 4px;">Select Region</label>
								<select name="region_id">
									@foreach($regions as $region)
										<option value="{{ $region->id }}">{{ $region->name }}</option>
									@endforeach
									
								</select>
							</div>
						</div>
						
					</div>
					<div class="card-footer">
						<center>
							<input type="submit" class="btn btn-success" value="Save" style="margin: 10px; width: 100px;">
						</center>
					</div>
				</form>		
			</div>
		</div>
	</div>
@endsection