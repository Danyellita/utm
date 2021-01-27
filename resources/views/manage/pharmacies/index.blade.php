@extends('layouts.manage.manage')
@section('content')
	<div class="container-fluid pb-2" id="fluid">
		<div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 rounded box-shadow bg-white pb-2 pt-2" id="cards">
			<a href="{{ route('manage.pharmacies.create') }}" class="btn btn-success" style="margin: 10px 0px 10px 0px;">New Pharmacy</a>
			<div class="card">
				<div class="card-header" style="text-align: center;">
					<h3><strong>{{ __('Manage Pharmacies') }}</strong></h3>
				</div>
				<div class="card-body">
					<table class="table table-striped">
						<thread>
							<tr>
								<th>ID</th>
								<th>Name</th>
								<th>Phone</th>
								<th>Email</th>
								<th>Site</th>
								<th>Working Time</th>
								<th>Address</th>
								<th>District</th>
								<th>Actions</th>
							</tr>
						</thread>
						<tbody>
							@foreach($pharmacies as $pharmacy)
								<tr>
									<td>
										{{ $pharmacy->id }}
									</td>
									<td>
										{{ $pharmacy->name }}	
									</td>
									<td>
										{{ $pharmacy->phone }}
									</td>
									<td>
										{{ $pharmacy->emial}}
									</td>
									<td>
										{{ $pharmacy->site }}
									</td>
									<td>
										{{ $pharmacy->working_time }}
									</td>
									<td>
										{{ $pharmacy->street->name }}
									</td>
									<td>
										{{ $pharmacy->street->sector->name }}
									</td>
									<td>
										<a href="{{ route('manage.pharmacies.show', $pharmacy->id) }}"><i class="fas fa-eye"></i></a>
									</td>
								</tr>	
							@endforeach
							
						</tbody>
					</table>	
					{{ $pharmacies->links() }}	
				</div>
			</div>
		</div>
	</div>
@endsection