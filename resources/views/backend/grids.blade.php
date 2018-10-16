
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
                    <a class="active" href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>UI Elements</span>
                    </a>
                    <ul class="sub">
						<li><a href="typography.html">Typography</a></li>
						<li><a href="glyphicon.html">glyphicon</a></li>
                        <li><a class="active" href="grids.html">Grids</a></li>
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
                    <a href="javascript:;">
                        <i class="fa fa-glass"></i>
                        <span>Extra</span>
                    </a>
                    <ul class="sub">
                        <li><a href="gallery.html">Gallery</a></li>
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
	<section class=" wrapper">
		<div class="agile-grid">
		<h2 class="w3ls_head">Grids</h2>
            <div class="row">
                <div class="col-lg-12"> <p class="hd-title">Base on Bootstrap grid system.</p></div>
                <div class="col-lg-12">
                    <section class="panel">
                        <div class="panel-body">col-lg-12</div>
                    </section>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <section class="panel">
                        <div class="panel-body">col-lg-6</div>
                    </section>
                </div>
                <div class="col-lg-6">
                    <section class="panel">
                        <div class="panel-body">col-lg-6</div>
                    </section>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <section class="panel">
                        <div class="panel-body">col-lg-4</div>
                    </section>
                </div>
                <div class="col-lg-4">
                    <section class="panel">
                        <div class="panel-body">col-lg-4</div>
                    </section>
                </div>
                <div class="col-lg-4">
                    <section class="panel">
                        <div class="panel-body">col-lg-4</div>
                    </section>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <section class="panel">
                        <div class="panel-body">col-lg-3</div>
                    </section>
                </div>
                <div class="col-lg-3">
                    <section class="panel">
                        <div class="panel-body">col-lg-3</div>
                    </section>
                </div>
                <div class="col-lg-3">
                    <section class="panel">
                        <div class="panel-body">col-lg-3</div>
                    </section>
                </div>
                <div class="col-lg-3">
                    <section class="panel">
                        <div class="panel-body">col-lg-3</div>
                    </section>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-2">
                    <section class="panel">
                        <div class="panel-body">col-lg-2</div>
                    </section>
                </div>
                <div class="col-lg-2">
                    <section class="panel">
                        <div class="panel-body">col-lg-2</div>
                    </section>
                </div>
                <div class="col-lg-2">
                    <section class="panel">
                        <div class="panel-body">col-lg-2</div>
                    </section>
                </div>
                <div class="col-lg-2">
                    <section class="panel">
                        <div class="panel-body">col-lg-2</div>
                    </section>
                </div>
                <div class="col-lg-2">
                    <section class="panel">
                        <div class="panel-body">col-lg-2</div>
                    </section>
                </div>
                <div class="col-lg-2">
                    <section class="panel">
                        <div class="panel-body">col-lg-2</div>
                    </section>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12"> <p class="hd-title">Mobile, tablet, and desktop</p> </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-xs-6">
                            <section class="panel">
                                <div class="panel-body">col-xs-6</div>
                            </section>
                        </div>
                        <div class="col-xs-6">
                            <section class="panel">
                                <div class="panel-body">col-xs-6</div>
                            </section>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <section class="panel">
                        <div class="panel-body">col-lg-8</div>
                    </section>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-sm-6">
                            <section class="panel">
                                <div class="panel-body">col-sm-6</div>
                            </section>
                        </div>
                        <div class="col-sm-6">
                            <section class="panel">
                                <div class="panel-body">col-sm-6</div>
                            </section>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <section class="panel">
                        <div class="panel-body">col-lg-6</div>
                    </section>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-md-6">
                            <section class="panel">
                                <div class="panel-body">col-md-6</div>
                            </section>
                        </div>
                        <div class="col-md-6">
                            <section class="panel">
                                <div class="panel-body">col-md-6</div>
                            </section>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <section class="panel">
                        <div class="panel-body">col-lg-4</div>
                    </section>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <section class="panel">
                        <div class="panel-body">col-sm-6</div>
                    </section>
                </div>
                <div class="col-sm-6">
                    <section class="panel">
                        <div class="panel-body">col-sm-6</div>
                    </section>
                </div>
            </div>
		</div>
        </section>
 <!-- footer -->
		  

@endsection