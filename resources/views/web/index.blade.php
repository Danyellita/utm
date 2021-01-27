@extends('layouts.web.admin')
@section('content')
  <div class="slider-area">
      <div class="slider-active owl-dot-style owl-carousel" style="background-color: #F0F8FF; height: 600px; background-image: url({{ asset('img/6.jpg') }});">
          <div class="single-slider ptb-240 bg-img" >
              <div class="container">
                  <div class="slider-content slider-animated-1"  style="margin-top: 200px; background-color: white; opacity: 90%; padding: 30px;">
                      <h2 class="w3-container w3-center w3-animate-top">Welcome to our new website</h2>
                      <h1 class="w3-container w3-center w3-animate-top">Wherever the art of <span class=" ">Medicine</span> is loved,</h1>
                      <h1 class="w3-container w3-center w3-animate-top">there is also a love of Humanity.</h1>
                  </div>
              </div>
          </div>
          
      </div>
  </div>
  <div class="about-us-area pt-100 pb-100" style="background-color: #D0D8DA;">
      <div class="container">
          <div class="row">
              <div class="col-lg-6 col-md-12 d-flex align-items-center">
                  <div class="overview-content-2">
                     <h4 style="color: #519f10">Welcome To</h4>
                      <h2>Our Pharmacy Store!</h2>
                      <p class="peragraph-blog">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                      
                  </div>
              </div>
              <div class="col-lg-6 col-md-12">
                  <div class="w3-container w3-center w3-animate-top">
                     <img src="{{ asset('img/4.jpg') }}" alt="" style="width: 100%; padding-top: 30px; padding-bottom: 30px;">
                  </div>
              </div>
          </div>
      </div>
  </div>

  <section style="background-color: #F0F4F5;">
  	<div class="container" >
  		<div class="slideshow-container" style="margin-top: 30px;">
        <h3 style="text-align: center;">Farmacie.md își propune să devină un reper fundamental pentru Dvs în lumea medicală. <br>Astfel suntem dedicați calității şi profesionalismului serviciilor oferite.</h3>
  			<div class="mySlides fade">
  			  <img src="{{ asset('img/1.jpg') }}" style="width:100%">
  			  <div class="text" style="color: black;">Farmacie.md</div>
  			</div>

  			<div class="mySlides fade">
  			  <img src="{{ asset('img/2.jpg') }}" style="width:100%">
  			  <div class="text" style="color: black;">Farmacie.md</div>
  			</div>

  			<div class="mySlides fade">
  			  <img src="{{ asset('img/3.jpg') }}" style="width:100%">
  			  <div class="text" style="color: black;">Farmacie.md</div>
  			</div>

  		</div>
  		<br>

  		<div style="text-align:center">
  		  <span class="dot"></span> 
  		  <span class="dot"></span> 
  		  <span class="dot"></span> 
  		</div>
  	</div>
  </section>

	<div class="container">
		<div class="row">
			<div class="col-md-12" style="text-align: center;">
				<h2>Products</h2>
       </div>
		</div>
		<div class="row" style="margin: 35px;">
			@foreach($products as $product)
				<div class="card-wrapper" style="margin: 0px 0px 0px 20px; margin-bottom: 8px; ">
          <div class="card" style="height: 100%; width: 240px;">
              <div class="js-content text-center clearfix">
                    @if($product->picture)
                     <img id="myImg" src="{{ asset('storage/img') }}/{{ $product->picture }}"  alt="" style="width:100%;max-width:300px;" class="mx-auto">
                    @else 
                      <img id="myImg" src="{{ asset('img/1.jpg') }}"  alt="" style="width:100%;max-width:300px;" class="mx-auto">
                    @endif
                    <h3 style="color: red;">{{ $product->name }}</h4>
                    <p> Category {{ $product->category->name }}</p>
                    <P>Price {{ $product->price }}</P>
                    <a href="{{ route('web.products.show', [$product]) }}" class="btn btn-success" style="margin:5px;"><i class="fas fa-shopping-cart"></i> Buy</a>
                  </div>
              </div>
          </div>
      @endforeach
	   </div>
  </div>
  <div class="container">
    <center><h2>Our Qualities</h2></center>
    <div class="row" style="text-align: center; margin: 35px;">
      <div class="col-md-3">
        <p><i class="fas fa-file-medical fa-7x" style="color:#09425A;"></i></p>
        <h3>Quality</h3>
      </div>
      <div class="col-md-3">
        <p><i class="fas fa-tachometer-alt fa-7x" style="color:#09425A;"></i></p>
        <h3>Fast</h3>
      </div>
      <div class="col-md-3">
        <p><i class="fas fa-store-alt fa-7x" style="color: #09425A;"></i></p>
        <h3>Convenience</h3>
      </div>
      <div class="col-md-3">
        <p><i class="fas fa-percent fa-7x" style="color: #09425A;"></i></p>
        <h3>Promotions</h3>
      </div>
    </div>
  </div>
{{-- </div>
</div> --}}
<script>
  var slideIndex = 0;
  showSlides();

  function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 1000); // Change image every 1 seconds
  }
</script>
@endsection