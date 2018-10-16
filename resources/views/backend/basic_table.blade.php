@extends('backend.master.layout')
<!--header end-->

@section('middle_section')
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
						<li><a href="{{route('typography')}}">Typography</a></li>
						<li><a href="{{route('glyphicon')}}">glyphicon</a></li>
                        <li><a href="{{route('grids')}}">Grids</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{route('fontawesome')}}">
                        <i class="fa fa-bullhorn"></i>
                        <span>Font awesome </span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a class="active" href="javascript:;">
                        <i class="fa fa-th"></i>
                        <span>Data Tables</span>
                    </a>
                    <ul class="sub">
                        <li><a class="active" href="route('basic')}}">Basic Table</a></li>
                        <li><a href="{{route('responsive')}}">Responsive Table</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-tasks"></i>
                        <span>Form Components</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{route('form_com')}}">Form Elements</a></li>
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
	<section class="wrapper">
		<div class="table-agile-info">
 <div class="panel panel-default">
    <div class="panel-heading">
     Basic table
    </div>
    <div>
      <table class="table" ui-jq="footable" ui-options='{
        "paging": {
          "enabled": true
        },
        "filtering": {
          "enabled": true
        },
        "sorting": {
          "enabled": true
        }}'>
        <thead>
          <tr>
            <th data-breakpoints="xs">ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th data-breakpoints="xs">Job Title</th>
           
            <th data-breakpoints="xs sm md" data-title="DOB">Date of Birth</th>
          </tr>
        </thead>
        <tbody>
          <tr data-expanded="true">
            <td>1</td>
            <td>Dennise</td>
            <td>Fuhrman</td>
            <td>High School History Teacher</td>
            
            <td>July 25th 1960</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Elodia</td>
            <td>Weisz</td>
            <td>Wallpaperer Helper</td>
          
            <td>March 30th 1982</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Raeann</td>
            <td>Haner</td>
            <td>Internal Medicine Nurse Practitioner</td>
           
            <td>February 26th 1966</td>
          </tr>
          <tr>
            <td>4</td>
            <td>Junie</td>
            <td>Landa</td>
            <td>Offbearer</td>
           
            <td>March 29th 1966</td>
          </tr>
          <tr>
            <td>5</td>
            <td>Solomon</td>
            <td>Bittinger</td>
            <td>Roller Skater</td>
           
            <td>September 22nd 1964</td>
          </tr>
          <tr>
            <td>6</td>
            <td>Bar</td>
            <td>Lewis</td>
            <td>Clown</td>
           
            <td>August 4th 1991</td>
          </tr>
          <tr>
            <td>7</td>
            <td>Usha</td>
            <td>Leak</td>
            <td>Ships Electronic Warfare Officer</td>
          
            <td>November 20th 1979</td>
          </tr>
          <tr>
            <td>8</td>
            <td>Lorriane</td>
            <td>Cooke</td>
            <td>Technical Services Librarian</td>
           
            <td>April 7th 1969</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
</section>
 <!-- footer -->
	
    @endsection