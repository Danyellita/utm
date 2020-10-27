@extends('layouts.manage.manage')
@section('content')
	<div class="row justify-content-center">

			<div class="card">
				<form method="POST" action="{{ route('manage.users.update', [$user->id]) }}">
			   {{method_field('PUT')}}
			   @csrf
					<div class="card-body">
						<h4 style="text-align: center;">
							{{ __('Edir User') }}
						</h4>
						<div class="row">
							<div class="col-4">
								<input class="form-control" type="text" name="name" value="{{ $user->name }}">
							</div>
							<div class="col-4">
								<input class="form-control" type="text" name="email" value="{{ $user->email }}">
							</div>
							<div class="col-4">
								<input class="form-control" type="password" name="password" value="{{ $user->password }}">
							</div>
						</div>
					</div>
					<div class="card-footer" style="text-align: center;">
						<input type="submit" class="btn btn-success" value="Save" id="saved">
					</div>
				</form>
			</div>
		
	</div>
@endsection