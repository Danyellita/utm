@extends('layouts.manage.manage')
@section('content')
	<div class="container-fluid pb-2" id="fluid">
		<div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 rounded box-shadow bg-white pb-2 pt-2" id="cards">
			<a href="{{ route('manage.streets.create') }}" class="btn btn-success" style="margin: 10px 0px 10px 0px;">New Street</a>
			<div class="card">
				<div class="card-header" style="text-align: center;">
					<h3><strong>{{ __('Manage Streets') }}</strong></h3>
				</div>
				<div class="card-body">
					<table class="table table-striped">
						<thread>
							<tr>
								<th>ID</th>
								<th>Name</th>
								<th>Sector</th>
							</tr>
						</thread>
						<tbody>
							@foreach($streets as $street)
								<tr>
									<td>
										{{ $street->id }}
									</td>
									<td>
										{{ $street->name }}	
									</td>
									<td>
										{{ $street->sector->name }}
									</td>
								</tr>	
							@endforeach
						</tbody>
					</table>	
				</div>
			</div>
		</div>
	</div>
@endsection