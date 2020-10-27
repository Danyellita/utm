@extends('layouts.manage.manage')
@section('content')
	{{-- <div class="row justify-content-center"> --}}
		<div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 rounded box-shadow bg-white pb-2 pt-2">

			<div class="card">
				<div class="card-header" style="text-align: center;">
					<h4>{{ __('Sectoare') }}</h4>
				</div>
				<div class="card-body">
					<table class="table table-striped">
						<thread>
							<tr>
								<th>ID</th>
								<th>District</th>
								<th>Population</th>
							</tr>
						</thread>
						<tbody>
							@foreach($sectors as $sector)
								<tr>
									<td>
										{{ $sector->id }}
									</td>
									<td>
									{{ $sector->name }}	
									</td>
									<td>
										{{ $sector->population }} mii
									</td>
								</tr>	
							@endforeach
							<tr>
								<td>Total</td>
								<td></td>
								<td colspan="2">{{ $sumpopulation }} mii persoane </td>
							</tr>
						</tbody>
					</table>	
							
							
				</div>
						
			</div>
			<div id="map" style="height: 50%"></div>
		</div>

	<script>
      let map;

      function initMap() {
        map = new google.maps.Map(document.getElementById("map"), {
          center: { lat: {{ $sector->lat }}, lng: {{ $sector->lang }} },
          zoom: 10,
        });
      }
    </script>
	
	
@endsection