@extends('layouts.manage.manage')
@section('content')
	<div class="row justify-content-center">

			<div class="card">
				<a href="{{ route('manage.users.create') }}" class="btn btn-primary">Back</a>
					<div class="card-body">
						<h4 style="text-align: center;">
							{{ $user->name }}
						</h4>
						<p>
							{{ $user->email }}<br>
							{{ $user->password }}
						</p>
					</div>
					
				
			</div>
		
	</div>
@endsection