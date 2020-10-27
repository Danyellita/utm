@extends('layouts.manage.manage')
@section('content')
	<div class="row justify-content-center">

			<div class="card">
				<form method="POST" action="{{ route('manage.categories.update', [$category->id]) }}">
			   {{method_field('PUT')}}
			   @csrf
					<div class="card-body">
						<h4 style="text-align: center;">
							{{ __('Edir User') }}
						</h4>
						<div class="row">
							<div class="col-8">
								<input class="form-control" type="text" name="name" value="{{ $category->name }}">
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