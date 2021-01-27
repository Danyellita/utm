@extends('layouts.web.admin')
@section('content')
	<div class="container" style="padding: 30px;">
		<div class="row">
			<div class="col col-6">
				<img src="{{ asset('img/7.jpg') }}" style="width: 100%; margin-top: 15px;">
			</div>
			<div class="col col-6">
				<h2>About Us</h2>
				<p>
					We are proud to complement the services of our local healthcare providers through accurate and expedient prescription dispensing, as well as consultative and medication therapy management services. Our efficient team of pharmacists and technicians strive to provide prompt and friendly service. Quality and accuracy are values we refuse to compromise.
				</p>
				<p>
					We provide the following services:
					<ul>
						<li>Free delivery</li>
						<li>Competitive prescription pricing</li>
					</ul>
				</p>
				<p>
					We actively seek out programs designed to lower your drug and healthcare expenses. Whether your concern is price, dealing with your insurance company or just understanding your options, Pharmacy of America is here to help!
				</p>
			</div>
		</div>
		<center><h2>The TEAM</h2></center>
		<div class="row">
			<div class="col">
				<div class="flip-card">
				  <div class="flip-card-inner">
				    <div class="flip-card-front">
				      <center><img src="{{ asset('img/emoji.png') }}" alt="Avatar" style="width:90%"></center>
				    </div>
				    <div class="flip-card-back">
				     <h3>Programmer</h3>
				      <blockquote>“Talent wins games, but teamwork and intelligence win championships.”</blockquote>
				    </div>
				  </div>
				</div>
			</div>
			<div class="col">
				<div class="flip-card">
				  <div class="flip-card-inner">
				    <div class="flip-card-front">
				      <center><img src="{{ asset('img/emoji.png') }}" alt="Avatar" style="width:90%"></center>
				    </div>
				    <div class="flip-card-back">
				     <h3>Project Manager</h3>
				      <blockquote>“Talent wins games, but teamwork and intelligence win championships.”</blockquote>
				    </div>
				  </div>
				</div>
			</div>
			<div class="col">
				<div class="flip-card">
				  <div class="flip-card-inner">
				    <div class="flip-card-front">
				      <center><img src="{{ asset('img/emoji.png') }}" alt="Avatar" style="width:90%"></center>
				    </div>
				    <div class="flip-card-back">
				     <h3>Database Assistant</h3>
				     <blockquote>“Talent wins games, but teamwork and intelligence win championships.”</blockquote>	
				    </div>
				  </div>
				</div>
			</div>
		</div>
	</div>
	
@endsection