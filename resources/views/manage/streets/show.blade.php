@extends('layouts.manage.manage')
@section('content')
	<div class="container-fluid pb-2" id="fluid">
		<div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 rounded box-shadow bg-white pb-2 pt-2" id="cards">
			<a href="{{ route('manage.streets.index') }}" class="btn btn-success" style="margin: 10px 0px 10px 0px;">Back</a>
			<div class="card">
				<div class="card-body">
					<h4 style="text-align: center;">
						Street Name: {{ $street->name }}
					</h4>
					<p>
						District: {{ $street->sector->name }}
					</p>
				</div>
			</div>
		</div>
	</div>
@endsection