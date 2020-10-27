@extends('layouts.manage.manage')
@section('content')
	<div class="row justify-content-center">

			<div class="card">
				<form method="POST" action="{{ route('manage.users.store') }}">
					@csrf
					<div class="card-body">
						<h4 style="text-align: center;">
							{{ __('Create Users') }}
						</h4>
						<div class="row">
							<div class="col-4">
								<input class="form-control" type="text" name="name" placeholder="Name">
							</div>
							<div class="col-4">
								<input class="form-control" type="text" name="email" placeholder="Email">
							</div>
							<div class="col-4">
								<input class="form-control" type="password" name="password" placeholder="Password">
							</div>
						</div>
					</div>
					<div class="card-footer" style="text-align: center;">
						<input type="submit" name="">
					</div>
					
				</form>
			</div>
		
	</div>
	
@endsection