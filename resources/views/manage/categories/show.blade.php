@extends('layouts.manage.manage')
@section('content')
	<div class="row justify-content-center">

			<div class="card">
				<a href="{{ route('manage.categories.create') }}" class="btn btn-primary">Back</a>
					<div class="card-body">
						<h4 style="text-align: center;">
							{{ $category->name }}
						</h4>
						<p>
							{{ $category->slug }}
						</p>
					</div>
					
				
			</div>
		
	</div>
@endsection