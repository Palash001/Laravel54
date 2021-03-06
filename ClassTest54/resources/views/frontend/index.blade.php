@extends('frontend.master.layout')

@section('middle_section')
   

	<div class="slider">
		<div class="img-responsive">
			<ul class="bxslider">				
				<li><img src="{{asset('frontend/images/slider/1.jpg')}}" alt=""/></li>								
				<li><img src="{{asset('frontend/images/slider/2.jpg')}}" alt=""/></li>	

				<li><img src="{{asset('frontend/images/slider/3.jpg')}}" alt=""/></li>			
			</ul>
		</div>	
    </div>
	
	<div class="container">
		<div class="text-center">
			<div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.3s">
				<h3>Providing Our Clients</h3>
			</div>
			<div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.6s">
				<h2>Best & Creative Solutions</h2>
			</div>
		</div>
	</div>
	
		<div class="box">
			<div class="wow fadeInLeft" data-wow-offset="0" data-wow-delay="0.4s">
				<div class="col-sm-3">
					<i class="fa fa-cogs fa-3x"></i>
					<h4>Creative Solutions</h4>
				</div>
			</div>
			<div class="wow fadeInLeft" data-wow-offset="0" data-wow-delay="0.8s">
				<div class="col-sm-3">
					<i class="fa fa-leaf fa-3x"></i>
					<h4>Creative Solutions</h4>
				</div>
			</div>
			<div class="wow fadeInRight" data-wow-offset="0" data-wow-delay="1.2s">
				<div class="col-sm-3">
					<i class="fa fa-heart-o fa-3x"></i>
					<h4>Creative Solutions</h4>
				</div>
			</div>
			<div class="wow fadeInRight" data-wow-offset="0" data-wow-delay="1.6s">
				<div class="col-sm-3">
					<i class="fa fa-laptop fa-3x"></i>
					<h4>Creative Solutions</h4>
				</div>
			</div>
		</div>
	
	<div class="features">
		<div class="container">
			<div class="text-center">
				<div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.3s">
					<h2>Main Features</h2>
				</div>
				<div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.6s">
					<p>Bras urna felis accumsan at ultrde cesid posuere masa socis nautoque<br>
					penat bus maecenas ultrices sed ipsum lorem
					dolor sit amet sed ipsum consectetur<br></p>
				</div>
			</div>
		</div>
	</div>
	
	<div class="container">
		<div class="col-lg-6 wow fadeInRight" data-wow-offset="0" data-wow-delay="0.5s">
			<img src="{{asset('frontend/images/6.jpg')}}" class="img-responsive" >
		</div>
		
		<div class="col-lg-6 wow fadeInLeft" data-wow-offset="0" data-wow-delay="0.5s">
			<img src="{{asset('frontend/images/5.jpg')}}" class="img-responsive" >
		</div>
	</div>
	
	<div class="main-feature">
		<div class="container">
			<div class="col-md-4 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
				<div class="media">
					<div class="media-left">					
						<i class="fa fa-rocket fa-3x"></i>
					</div>
					
					<div class="media-body">
						<h4 class="media-heading">SEO Optimized</h4>
						<p>Cras urna felis accumsan at ultricesid posuere masa um socisd natoque penatibus magnisd Lorem ipsum dolor sit ame onsectea dipe.</p>
					</div>
				</div>
			</div>
			
			<div class="col-md-4 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
				<div class="media">
					<div class="media-left">					
						<i class="fa fa-camera fa-3x"></i>
					</div>
					
					<div class="media-body">
						<h4 class="media-heading">Easy to Install</h4>
						<p>Cras urna felis accumsan at ultricesid posuere masa um socisd natoque penatibus magnisd Lorem ipsum dolor sit ame onsectea dipe.</p>
					</div>
				</div>
			</div>
			
			<div class="col-md-4 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.9s">
				<div class="media">
					<div class="media-left">					
						<i class="fa fa-heart-o fa-3x"></i>
					</div>
					
					<div class="media-body">
						<h4 class="media-heading">Unlimited Possibilities</h4>
						<p>Cras urna felis accumsan at ultricesid posuere masa um socisd natoque penatibus magnisd Lorem ipsum dolor sit ame onsectea dipe.</p>
					</div>
				</div>
			</div>
		</div>
		
		<div class="text-center">
			<div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.3s">
				<h2>Easily Customizable & Unlimited Support </h2>
			</div>
			<div class="wow bounceInUp" data-wow-offset="0" data-wow-delay="0.6s">
				<p>Integer orci enim varius vel accumsan vel porttitor tellus. Vivamus odio. Donec metus libero semper</p>
			</div>
			
			<button type="button" class="btn btn-default">Purchase Now</button>
			<button type="button" class="btn btn-default">learn More</button>
		</div>	
		
	</div>
	
	<div class="about-us">
		<div class="container">
			<div class="text-center">
				<div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.3s">
					<h3>What People Are</h3>
				</div>
				<div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.6s">
					<h2>Saying About Us</h2>
				</div>
				<div class="wow fadeInRight" data-wow-offset="0" data-wow-delay="0.3s">
					<div class="col-md-3">
						<img src="{{asset('frontend/images/about/man4.jpg')}}" alt="" >
						<h3>John Doe</h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing eil sed deiusmod tempor</p>
					</div>
				</div>
				
				<div class="wow fadeInRight" data-wow-offset="0" data-wow-delay="0.6s">
					<div class="col-md-3">
						<img src="{{asset('frontend/images/about/man2.jpg')}}" alt="" >
						<h3>John Doe</h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing eil sed deiusmod tempor</p>
					</div>
				</div>
				
				<div class="wow fadeInLeft" data-wow-offset="0" data-wow-delay="0.3s">
					<div class="col-md-3">
						<img src="{{asset('frontend/images/about/man3.jpg')}}" alt="" >
						<h3>John Doe</h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing eil sed deiusmod tempor</p>
					</div>
				</div>
				
				<div class="wow fadeInLeft" data-wow-offset="0" data-wow-delay="0.6s">
					<div class="col-md-3">
						<img src="{{asset('frontend/images/about/man4.jpg')}}" alt="" >
						<h3>John Doe</h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing eil sed deiusmod tempor</p>
					</div>
				</div>
			</div>	
		</div>
	</div>
	
	
	@endsection