@extends('layouts.manage.manage')
@section('content')
	<div class="container-fluid pb-2" id="fluid">
		<div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 rounded box-shadow bg-white pb-2 pt-2" id="cards">
			<div class="card">
				<form method="POST" action="{{ route('manage.sales.store') }}">
					@csrf 
					<div class="card-header" style="text-align: center;">
						<h3><strong>{{ __('Add Sale') }}</strong></h3>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-6">
								<input type="text" class="form-control" name="initial_sales" placeholder="Initial Sale" style="margin: 5px;">
							</div>
							
							<div class="col-6">
								<input type="text" class="form-control" name="sold_quantity" placeholder="Sold_quantity" style="margin: 5px;">
							</div>
						</div>
						<div class="row">
							<div class="col-12">
								<label style="margin-left: 4px;">Select Pharmacy</label>
								<select name="pharmacy_id" style="margin: 5px;">
									@foreach($pharmacies as $pharmacy)
										<option value="{{ $pharmacy->id }}">{{ $pharmacy->name }}</option>
									@endforeach
									
								</select>
							</div>
						</div>
						<div class="row">
							<div class="col-12">
								<label style="margin-left: 4px;">Select Product</label>
								<select name="product_id" style="margin: 5px;">
									@foreach($products as $product)
										<option value="{{ $product->id }}">{{ $product->name }}</option>
									@endforeach
									
								</select>
							</div>
						</div>
						<div class="row">
							<div class="col-12">
								<label style="margin-left: 4px;">For stock choose between 0 and 1 </label>
								<input type="text" class="form-control" name="stock" placeholder="Stock" style="margin: 5px;">
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