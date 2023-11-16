@php
namespace App\Models;
use App\Models\drops;
use App\Models\social;
use App\Models\logo;
use App\Models\menu;
use App\Models\mmenu;
use App\Models\service;
use App\Models\project;

$drops = drops::all();
$social = social::all();
$id = 1;
$admin_icon =  logo::find($id);
$menu = menu::all();
$mmenu = mmenu::all();
$service = service::all();
$project = project::all();
@endphp
<!DOCTYPE html>
<html>
	
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<title>BHOOMS CONCEPT</title>
		<link rel="shortcut icon" type="image/x-icon" href="{{$admin_icon->fav}}">

		<!-- Google Font -->
		<link href='https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Karla:400,700italic,700,400italic' rel='stylesheet' type='text/css'>
		<!-- Font Awesome -->
		<link rel="stylesheet" href="{{asset('frontend/assets/css/font-awesome.min.css')}}" />

		<!-- Bootstrap -->
		<link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap.css')}}" />

		<!-- REVOLUTION BANNER CSS SETTINGS -->
		<link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/rs-plugin/css/settings.css')}}" media="screen" />
		<link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/dropdown.css')}}" />
		<link rel="stylesheet" href="{{asset('frontend/assets/css/owl.carousel.css')}}" />
		<link rel="stylesheet" href="{{asset('frontend/assets/css/global.css')}}" />
		<link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}" />
		<link rel="stylesheet" href="{{asset('frontend/assets/css/responsive.css')}}" />
		<link href="{{asset('frontend/assets/css/skin.less" rel="stylesheet/less')}}">
	</head>
	<body>
		<!-- Loader Starts here -->
		<div class="loader-block">
			<div class="loader">
				Loading...
			</div>
		</div>
		<!-- Loader Ends here -->
		<!--Wrapper Section Start Here -->
		<div id="wrapper" class="homepage homepage-3">
			<!--header Section Start Here -->
			<header id="header" class="header">
				<!-- primary header Start Here -->
				<div class="primary-header">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-6">
								<div class="mail">
									<img src="{{asset('frontend/assets/images/icon-mail.png')}}" alt="" />
									<span>Email us at : <a href="mailto:info@bhoomsco.com">info@bhoomsco.com</a> </span>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="social-wrap clearfix">
									<a href="/contact" class="request">Contact us</a>
									<ul class="social">
										@foreach ($social as $item)
										    @if ($item->status == 1)
											    <li>
												    <a href="{{$item->link}}"> <i class="{{$item->icon}}" ></i> </a>
											    </li>
											@endif
										@endforeach
										
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- primary header Ends Here -->
				<!-- main header Starts Here -->
				<div class="main-header" >
					<div class="container">
						<div class="row">
							<div class="col-xs-12 hidden-xs">

								<div class="call-us">
									<ul>
										<li>
											<img src="{{asset('frontend/assets/images/iphone.png')}}" alt="" />
											<span class="transport">CALL US NOW FOR <span></span> YOUR TRANSPORT</span>
										</li>
										<li>
											<a href="tel:5917890123">6200-329-955</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="col-xs-12 col-sm-3">
								<a href="/" class="logo"> <img src="{{$admin_icon->img_head}}" alt="" style="height: 10em;"/> </a>

							</div>
							<div class="col-xs-12 col-sm-9 custom-nav" >
								<nav>
									<div id='cssmenu'>
										<ul class="navigation" >
											@for ($i = 0; $i < count($mmenu) -1 ; $i++)
												@php $item = $mmenu[$i] @endphp
												@if ($item->m_id == 9)
													
												@else
												<li class='active' ><a href=
													
														@if ($item->m_id == 1)
															{{ '/' }}
														@elseif ($item->m_id == 2)
															{{ '/about' }}
														@elseif ($item->m_id == 3)
															{{ '/service' }}
														@elseif ($item->m_id == 4)
															{{ '/project' }}
														@elseif ($item->m_id == 5)
															{{ '/blog' }}
														@elseif ($item->m_id == 6)
															{{ '/contact' }}
														@elseif ($item->m_id == 7)
															@foreach ($menu as $men )
																@if ($men->name == $item->name )
																	{{ '/new/' . $men->id }}
																@endif
															@endforeach
														@elseif ($item->m_id == 8)
															@foreach ($menu as $men )
																@if ($men->name == $item->name )
																	{{ '/new/' . $men->id }}
																@endif
															@endforeach
														@endif 
													
													style="color: aliceblue;">{{$item->name}}</a>
													<ul class="sub-menu">
														@foreach ($drops as $data)
															@if ($data->hed_id == $item->m_id)
																<li>
																	<a href='/common/{{$data->id}}'>{{$data->name}}</a>
																</li>
															@endif
														@endforeach
													</ul>
												</li>
												@endif
											@endfor
											
											{{-- @foreach ($menu as $menu )
												<li>
													<a href='/new/{{$menu->id}}' style="color: aliceblue;">{{$menu->name}}</a>
													
												</li>
											@endforeach --}}


										</ul>
									</div>
								</nav>

								<div class="nav-icon" style='background-color:#64c6ec'>
									<span></span>
									<span></span>
									<span></span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- main header Ends Here -->
			</header>
			<!--header Section Ends Here -->



            @yield("body")



			<!--Footer area starts Here -->
			<footer id="footer">
				<!--Footer box starts Here -->
				<div class="footer clearfix">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-4">
								<div class="quick-links">
									<h5>services</h5>
								</div>
								<div class="quick-list">
									<ul>
										@foreach ($service as $service)
										<li>
											<a href="/service/{{$service->id}}">{{$service->heading}}</a>
										</li>
										@endforeach
										
									</ul>
								</div>
								
							</div>
							<div class="col-xs-12 col-sm-4">
								<div class="our-address">
									<h5>Other Websites</h5>
									<div class="quick-list">
                                        <ul>
											@foreach ($project as $project)
											<li>
                                                <a href="/project/{{$project->id}}">{{$project->heading}}</a>
                                            </li>
											@endforeach
                                            
                                        </ul>
                                    </div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-4">
								<a href="/" class="logo"> <img src="{{$admin_icon->img_footer}}" alt="" style="height: 10em; width:150px;"/> </a><br>

								<div class="sign-up">
									<h5>newsletter signup</h5>
									<p>
										If you want receive our all weekly updates about new
										offers and discount, signup below.
									</p>
									<form>
										<input id="mail" type="text" placeholder="Email Address" name="email" />
										<!-- <input id="submit" type="submit" value="" class="fa fa-paper-plane-o" /> -->
										<button class="fa fa-paper-plane"></button>
									</form>
								</div>
							</div>
						</div>
						
					</div>
				</div>
				<!--Footer box ends Here -->
			</footer>
			<!--Footer area ends Here -->
		</div>
		<!--Wrapper Section Ends Here -->

		<script data-cfasync="false" src="../../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}"></script><script type="text/javascript" src="{{asset('frontend/assets/js/jquery-1.11.3.min.js')}}"></script>
			<script src="{{asset('frontend/assets/js/theme-option/style-switcher/assets/js/less.js')}}"></script>
		<script type="text/javascript" src="{{asset('frontend/assets/js/owl.carousel.js')}}"></script>
		<script type="text/javascript" src="{{asset('frontend/assets/js/jquery.selectbox-0.2.min.js')}}"></script>
		
		<!--Parrallax -->
		<script type="text/javascript" src="{{asset('frontend/assets/js/parallax.js')}}"></script>

		<!-- jQuery REVOLUTION Slider  -->
		<script type="text/javascript" src="{{asset('frontend/assets/js/jquery.themepunch.tools.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('frontend/assets/js/jquery.themepunch.revolution.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('frontend/assets/js/revolution.js')}}"></script>
        <script src="{{asset('frontend/assets/js/jquery.fancybox.js')}}"></script> 
        <script src="{{asset('frontend/assets/js/masonry.pkgd.min.js')}}"></script> 
        <script src="{{asset('frontend/assets/js/audioplayer.js')}}"></script> 
        <script type="text/javascript" src="{{asset('frontend/assets/js/owl.carousel.js')}}"></script> 
        <script type="text/javascript" src="{{asset('frontend/assets/js/jquery-ui.js')}}"></script> 
        <script src="https://maps.google.com/maps/api/js?sensor=true"></script> 
        <script type="text/javascript" src="{{asset('frontend/assets/js/gmap.js')}}"></script> 



		<!-- Switcher Js -->
		<script src="{{asset('frontend/assets/js/theme-option/style-switcher/assets/js/style.switcher.js')}}"></script>
		<script src="{{asset('frontend/assets/js/theme-option/style-switcher/assets/js/jquery.cookie.js')}}"></script>
		<!-- Switcher Js -->

	
		<script src="{{asset('frontend/assets/js/script.js" type="text/javascript')}}"></script>
		<script type="text/javascript" src="{{asset('frontend/assets/js/site.js')}}"></script>
        <script src="{{asset('frontend/assets/js/theme-option/style-switcher/assets/js/jquery.cookie.js')}}"></script> 

	</body>

</html>