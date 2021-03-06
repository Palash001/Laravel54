
@extends('frontend.master.layout')

@section('middle_section')

	<div class="services">
		<div class="container">
			<div class="text-center">
				<div class="services-box">
					<div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.3s">
						<h2>Our Services</h2>					
					</div>
					<div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.6s">	
						<p>Lorem ipsum dolor sit amet consectetur adipisicing eil sed deiusmod tempor</p>
					</div>
					
					<div class="col-md-4">
						<div class="wow fadeInDown" data-wow-offset="0" data-wow-delay="0.3s">
							<i class="fa fa-rocket fa-3x"></i>	
						</div>
						<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
							<h4>Retina Ready</h4>
							<p>Cras urna felis accumsan at ultricesid posuere masa um socisd natoque penatibus magnisd</p>
						</div>
					</div>
					
					<div class="col-md-4">
						<div class="wow fadeInDown" data-wow-offset="0" data-wow-delay="0.9s">
							<i class="fa fa-cogs fa-3x"></i>
						</div>
						<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.9s">
							<h4>Responsive</h4>
							<p>Cras urna felis accumsan at ultricesid posuere masa um socisd natoque penatibus magnisd</p>
						</div>
					</div>
					
					<div class="col-md-4">
						<div class="wow fadeInDown" data-wow-offset="0" data-wow-delay="1.5s">
							<i class="fa fa-eye fa-3x"></i>
						</div>
						<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="1.5s">
							<h4>Free Support</h4>
							<p>Cras urna felis accumsan at ultricesid posuere masa um socisd natoque penatibus magnisd</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="container">
			<div class="text-center">
				<div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.3s">
					<h2>Team</h2>					
				</div>
				<div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.6s">	
					<p>Bras urna felis accumsan at ultrde cesid posuere masa socis nautoque penat bus maecenas ultrices sed ipsum lorem<br>
					dolor sit amet sed ipsum consectetur adipisicing elit sed do eiusmod tempor incididunt.</p>
				</div>
				<div class="wow fadeInRight" data-wow-offset="0" data-wow-delay="0.3s">
					<div class="col-md-3">
						<img src="{{asset('frontend/images/services/1.jpg')}}" alt="" >
						<h3>John Doe</h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing eil sed deiusmod tempor</p>
					</div>
				</div>
				
				<div class="wow fadeInRight" data-wow-offset="0" data-wow-delay="0.6s">
					<div class="col-md-3">
						<img src="{{asset('frontend/images/services/1.jpg')}}" alt="" >
						<h3>John Doe</h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing eil sed deiusmod tempor</p>
					</div>
				</div>
				
				<div class="wow fadeInLeft" data-wow-offset="0" data-wow-delay="0.3s">
					<div class="col-md-3">
						<img src="{{asset('frontend/images/services/1.jpg')}}" alt="" >
						<h3>John Doe</h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing eil sed deiusmod tempor</p>
					</div>
				</div>
				
				<div class="wow fadeInLeft" data-wow-offset="0" data-wow-delay="0.6s">
					<div class="col-md-3">
						<img src="{{asset('frontend/images/services/1.jpg')}}" alt="" >
						<h3>John Doe</h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing eil sed deiusmod tempor</p>
					</div>
				</div>
			</div>	
		</div>
	</div>
	
	<div class="skills">
		<div class="container">
			<div class="text-center">
				<div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.3s">
					<h2>Our Skills</h2>
				</div>
				<div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.6s">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod <br>tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</div>
		</div>
	</div>
	
	<div class="skill">
		<div class="container">
			<div class="text-center">
				<div class="col-md-6 wow fadeInRight" data-wow-offset="0" data-wow-delay="0.3s">									
					<div class="progress-wrap">
						<h4>Graphic Design</h4>
						<div class="progress">
						  <div class="progress-bar  color1" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 85%">
							<span class="bar-width">85%</span>
						  </div>

						</div>
					</div>

					<div class="progress-wrap">
						<h4>HTML</h4>
						<div class="progress">
						  <div class="progress-bar color2" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
						   <span class="bar-width">95%</span>
						  </div>
						</div>
					</div>

					<div class="progress-wrap">
						<h4>CSS</h4>
						<div class="progress">
						  <div class="progress-bar color3" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
							<span class="bar-width">80%</span>
						  </div>
						</div>
					</div>

					<div class="progress-wrap">
						<h4>Wordpress</h4>
						<div class="progress">
						  <div class="progress-bar color4" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
							<span class="bar-width">90%</span>
						  </div>
						</div>
					</div>
				</div>
			</div><!--/.col-sm-6-->
			
			<div class="services-skill">	
				<div class="text-center">
					<div class="col-md-6 wow fadeInLeft" data-wow-offset="0" data-wow-delay="0.6s">
						<div class="media">
							<div class="media-left">					
								<img src="{{asset('frontend/images/services/2.png')}}" alt="" >
							</div>
							
							<div class="media-body">
								<h4 class="media-heading">Bobbh DOE</h4>
								<p>Cras urna felis accumsan at ultricesid posuere masa um socisd natoque penatibus magnisd Lorem ipsum dolor sit ame onsectea dipe.</p>
							</div>
						</div>										
						
						<div class="media">
							<div class="media-left">					
								<img src="{{asset('frontend/images/services/3.png')}}" alt="" >
							</div>
							
							<div class="media-body">
								<h4 class="media-heading">John Doe</h4>
								<p>Cras urna felis accumsan at ultricesid posuere masa um socisd natoque penatibus magnisd Lorem ipsum dolor sit ame onsectea dipe.</p>
							</div>
						</div>					
						
						<div class="media">
							<div class="media-left">					
								<img src="{{asset('frontend/images/services/4.png')}}" alt="" >
							</div>
							
							<div class="media-body">
								<h4 class="media-heading">Hendrick</h4>
								<p>Cras urna felis accumsan at ultricesid posuere masa um socisd natoque penatibus magnisd Lorem ipsum dolor sit ame onsectea dipe.</p>
							</div>
						</div>	
					</div>
				</div>
			</div>
		</div>	
	</div>	


@endsection