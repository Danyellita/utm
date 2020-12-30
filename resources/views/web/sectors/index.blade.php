
@extends('layouts.web.admin')
@section('content')

<h3 style="margin-left: 20px; text-align: center;">Sectors</h3>
  	{{-- <h2 style="text-align: center;">Catalog</h2>*/ --}}
{{-- <hr> --}}
<div class="container">
	{{-- <h3 style="text-align: center;">Categorii</h3> --}}
	
	<div class="row">
		<div class="col-md12">
			@foreach($sectors as $sector)
				<div class="js-content text-center clearfix">
		      		<div class="card-header" id="myTable">
	      				<h5 style="color: black;"> <a href="#" style="color:black; text-decoration: none;"> Denumire sector<br>{{ $sector->name }} </a></h5>
		      		</div>
		      		<div class="card-body"> 

						Produse din categoria
			       		@foreach($sector->streets as $street)
			       		{{-- {{ dd($street) }} --}}
				  			<p> 
								{{ $street->name}}
				  			</p>
						@endforeach
					</div>
		        {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
		      	</div>
				


			@endforeach
		</div>
	</div>
</div>

@endsection