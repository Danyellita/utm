@extends('layouts.manage.manage')
@section('content')
	<div class="container-fluid pb-2" id="fluid">
		<div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 rounded box-shadow bg-white pb-2 pt-2" id="cards">
			<a href="{{ route('manage.regions.create') }}" class="btn btn-success" style="margin: 10px 0px 10px 0px;">New Region</a>
			<div class="card">
				<div class="card-header" style="text-align: center;">
					<h3><strong>{{ __('Manage Regions') }}</strong></h3>
				</div>
				<div class="card-body">
					@foreach($regions as $region)
						<div class="card" style="margin-bottom: 10px;">
							<div class="card-header"  style="cursor: pointer;"  data-toggle="collapse" data-target="#demo">
								<div class="row">
                                    <div class="col-8">
                                        <h5 class="mb-0">
                                           Name: {{$region->name}}
                                        </h5>
                                    </div>
                                </div>
							</div>
							<div id="demo" class="collapse in" style=" visibility: visible;">
								<div class="card-body">
									@foreach($region->products() as $product)
										{{ $product->name }}
									@endforeach
                                    Products for this region: {{ $region->products()->count() }}
								</div>
							</div>
						</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
@endsection