
@extends('backend.master.layout')

@section('middle_section')
<!--header end-->
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a href="index.html">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>UI Elements</span>
                    </a>
                    <ul class="sub">
						<li><a href="typography.html">Typography</a></li>
						<li><a href="glyphicon.html">glyphicon</a></li>
                        <li><a href="grids.html">Grids</a></li>
                    </ul>
                </li>
                <li>
                    <a href="fontawesome.html">
                        <i class="fa fa-bullhorn"></i>
                        <span>Font awesome </span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-th"></i>
                        <span>Data Tables</span>
                    </a>
                    <ul class="sub">
                        <li><a href="basic_table.html">Basic Table</a></li>
                        <li><a href="responsive_table.html">Responsive Table</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-tasks"></i>
                        <span>Form Components</span>
                    </a>
                    <ul class="sub">
                        <li><a href="form_component.html">Form Elements</a></li>
                        <li><a href="form_validation.html">Form Validation</a></li>
						<li><a href="dropzone.html">Dropzone</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-envelope"></i>
                        <span>Mail </span>
                    </a>
                    <ul class="sub">
                        <li><a href="mail.html">Inbox</a></li>
                        <li><a href="mail_compose.html">Compose Mail</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class=" fa fa-bar-chart-o"></i>
                        <span>Charts</span>
                    </a>
                    <ul class="sub">
                        <li><a href="chartjs.html">Chart js</a></li>
                        <li><a href="flot_chart.html">Flot Charts</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class=" fa fa-bar-chart-o"></i>
                        <span>Maps</span>
                    </a>
                    <ul class="sub">
                        <li><a href="google_map.html">Google Map</a></li>
                        <li><a href="vector_map.html">Vector Map</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a class="active" href="javascript:;">
                        <i class="fa fa-glass"></i>
                        <span>Extra</span>
                    </a>
                    <ul class="sub">
                        <li><a class="active" href="gallery.html">Gallery</a></li>
						<li><a href="404.html">404 Error</a></li>
                        <li><a href="registration.html">Registration</a></li>
                    </ul>
                </li>
                <li>
                    <a href="login.html">
                        <i class="fa fa-user"></i>
                        <span>Login Page</span>
                    </a>
                </li>
            </ul>            </div>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<!-- gallery -->
		<!-- gallery -->
	<div class="gallery">
		<h2 class="w3ls_head">Gallery</h2>
		<div class="gallery-grids">
				<div class="gallery-top-grids">
					<div class="col-sm-4 gallery-grids-left">
						<div class="gallery-grid">
							<a class="example-image-link" href="images/g1.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
								<img src="images/g1.jpg" alt="" />
								<div class="captn">
									<h4>Visitors</h4>
									<p>Aliquam non</p>
								</div>
							</a>
						</div>
					</div>
					<div class="col-sm-4 gallery-grids-left">
						<div class="gallery-grid">
							<a class="example-image-link" href="images/g2.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
								<img src="images/g2.jpg" alt="" />
								<div class="captn">
									<h4>Visitors</h4>
									<p>Aliquam non</p>
								</div>
							</a>
						</div>
					</div>
					<div class="col-sm-4 gallery-grids-left">
						<div class="gallery-grid">
							<a class="example-image-link" href="images/g3.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
								<img src="images/g3.jpg" alt="" />
								<div class="captn">
									<h4>Visitors</h4>
									<p>Aliquam non</p>
								</div>
							</a>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="gallery-top-grids">
					<div class="col-sm-4 gallery-grids-left">
						<div class="gallery-grid">
							<a class="example-image-link" href="images/g5.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
								<img src="images/g5.jpg" alt="" />
								<div class="captn">
									<h4>Visitors</h4>
									<p>Aliquam non</p>
								</div>
							</a>
						</div>
					</div>
					<div class="col-sm-4 gallery-grids-left">
						<div class="gallery-grid">
							<a class="example-image-link" href="images/g6.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
								<img src="images/g6.jpg" alt="" />
								<div class="captn">
									<h4>Visitors</h4>
									<p>Aliquam non</p>
								</div>
							</a>
						</div>
					</div>
					<div class="col-sm-4 gallery-grids-left">
						<div class="gallery-grid">
							<a class="example-image-link" href="images/g7.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
								<img src="images/g7.jpg" alt="" />
								<div class="captn">
									<h4>Visitors</h4>
									<p>Aliquam non</p>
								</div>
							</a>
						</div>
					</div>
					
					<div class="clearfix"> </div>
				</div>
				<div class="gallery-top-grids">
					<div class="col-sm-4 gallery-grids-left">
						<div class="gallery-grid">
							<a class="example-image-link" href="images/g8.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
								<img src="images/g8.jpg" alt="" />
								<div class="captn">
									<h4>Visitors</h4>
									<p>Aliquam non</p>
								</div>
							</a>
						</div>
					</div>
					<div class="col-sm-4 gallery-grids-left">
						<div class="gallery-grid">
							<a class="example-image-link" href="images/g9.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
								<img src="images/g9.jpg" alt="" />
								<div class="captn">
									<h4>Visitors</h4>
									<p>Aliquam non</p>
								</div>
							</a>
						</div>
					</div>
					<div class="col-sm-4 gallery-grids-left">
						<div class="gallery-grid">
							<a class="example-image-link" href="images/g4.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
								<img src="images/g4.jpg" alt="" />
								<div class="captn">
									<h4>Visitors</h4>
									<p>Aliquam non</p>
								</div>
							</a>
						</div>
					</div>
					
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
				<script src="js/lightbox-plus-jquery.min.js"> </script>
		
	</div>
	</div>
	<!-- //gallery -->

</section>
 <!-- footer -->
		  
@endsection