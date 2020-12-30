@extends('layouts.manage.manage')
@section('content')
	<div class="container-fluid pb-2" id="fluid">
		<div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 rounded box-shadow bg-white pb-2 pt-2" id="cards">
			<a href="{{ route('manage.pharmacies.index') }}" class="btn btn-success" style="margin: 10px 0px 10px 0px;">Back</a>
			<div class="card">
				<form method="POST" action="{{ route('manage.pharmacies.store') }}">
					@csrf 
					<div class="card-header" style="text-align: center;">
						<h3><strong>{{ __('Add Pharmacy') }}</strong></h3>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-6">
								<input type="text" class="form-control" name="name" placeholder="Pharmacy Name" style="margin:5px;">
							</div>
							<div class="col-6">
								<input type="text" class="form-control" name="phone" placeholder="Phone" style="margin:5px;">
							</div>

						</div>
						<div class="row">
							<div class="col-6">
								<input type="text" class="form-control" name="emial" placeholder="Email" style="margin:5px;">
							</div>
							<div class="col-6">
								<input type="text" class="form-control" name="site" placeholder="Site" style="margin:5px;">
							</div>
						</div>
						<div class="row">
							<div class="col-6">
								<input type="text" class="form-control" name="working_time" placeholder="Working Time" style="margin:5px;">
							</div>
							<div class="col-6">
								<label style="margin-left: 4px;">Select the Street</label>
								<select name="street_id" style="margin:5px;">
									@foreach($streets as $street)
										<option value="{{ $street->id }}">{{ $street->name }}</option>
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