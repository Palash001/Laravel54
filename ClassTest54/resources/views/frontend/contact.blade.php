
@extends('frontend.master.layout')

@section('middle_section')

	<div class="contact">
		<div class="container">
			<div class="text-center">
				<div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.3s">
					<h2>Contact Us</h2>					
				</div>
				<div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.6s">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut</p>
				</div>
			</div>
		</div>
	</div>
	
	<div class="container">
		<div class="col-md-7">
			<div class="map">				
				<iframe src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Kuningan,+Jakarta+Capital+Region,+Indonesia&amp;aq=3&amp;oq=kuningan+&amp;sll=37.0625,-95.677068&amp;sspn=37.410045,86.572266&amp;ie=UTF8&amp;hq=&amp;hnear=Kuningan&amp;t=m&amp;z=14&amp;ll=-6.238824,106.830177&amp;output=embed">
				</iframe>	
			</div>
		</div>
		
		<div class="contact-info">
			<div class="col-md-5">
				<h2>We Are Multi</h2>
				<h3>That Inspires Our Customers & Clients</h3>
				<p>Fusce fermen tum neque a rutrum varius odio pede 
				ullamcorp-er tellus ut dignissim nisi risus non tortor</p>
				<ul>
					<li><i class="fa fa-home fa-2x"></i> Office # 38, Suite 54 Elizebth Street</li>
					<li><i class="fa fa-phone fa-2x"></i> +38 000 129900</li>
					<li><i class="fa fa-envelope fa-2x"></i> info@domain.net</li>
				</ul>
			</div>
		</div>
	</div>
	
	<div class="contact-form">
		<div class="container">
			<div class="col-md-4">
				<div class="form-group">
					<input type="email" class="form-control" id="exampleInputName" placeholder="name">
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<input type="email" class="form-control" id="exampleInputEmail1" placeholder="email">
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<input type="email" class="form-control" id="exampleInputPhone" placeholder="phone">
				</div>
			</div>
		</div>
		
		<div class="container">
			<div class="col-lg-12">				
				<textarea class="form-control" rows="5"></textarea>			
				<div class="form-group">
					<button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Submit Message</button>
				</div>
			</div>
		</div>
		
	</div>
	

@endsection