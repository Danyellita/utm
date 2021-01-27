@extends('layouts.manage.manage')
@section('content')
	<div class="container-fluid pb-2" id="fluid">
		<div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 rounded box-shadow bg-white pb-2 pt-2" id="cards">
			<a href="{{ route('manage.pharmacies.index') }}" class="btn btn-primary" style="margin: 10px 0px 10px 0px;">Back</a>
			<div class="card">
				<div class="card-header">
					<h4 style="text-align: center;">
						{{ __('Pharmacy:') }} {{ $pharmacy->name }}
					</h4>
				</div>
				<div class="card-body">
					<table class="table table-hover">
				        <tbody>
				          <tr scope="row">
				            <th scope="row">{{ __('Name') }}</th>
				            <td>{{ $pharmacy->phone }}</td>
				          </tr>
				          <tr scope="row">
				            <th scope="row">{{ __('Phone') }}</th>
				            <td>{{ $pharmacy->phone }}</td>
				          </tr>
				          <tr scope="row">
				            <th scope="row">{{ __('Email') }}</th>
				            <td>{{ $pharmacy->emial }}</td>
				          </tr>
				          <tr scope="row">
				            <th scope="row">{{ __('Site') }}</th>
				            <td>{{ $pharmacy->site }}</td>
				          </tr>
				          <tr scope="row">
				            <th scope="row">{{ __('Working Time') }}</th>
				            <td>{{ $pharmacy->working_time }}</td>
				          </tr>
				          <tr scope="row">
				            <th scope="row">{{ __('Street') }}</th>
				            <td>{{ $pharmacy->street->name }}</td>
				          </tr>
				        </tbody>
			      	</table>
				</div>
			</div>
		</div>
	</div>
@endsection