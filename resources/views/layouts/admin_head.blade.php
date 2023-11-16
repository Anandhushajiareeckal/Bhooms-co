@php
    namespace App\Models;
	use Illuminate\Support\Facades\Auth;
    use App\Models\logo;
    $id =1;
    $logo = logo::find($id);
@endphp
<!doctype html>
<html lang="en">


<head>
	<title>Admin </title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap 5 admin dashboard template & web App ui kit.">
	<meta name="keyword" content="bootstrap admin template">

	<!--[ Favicon]-->
	<link rel="icon" type="image/x-icon" href="{{asset('backend/assets/images/favicon.ico')}}">
	<link rel="icon" type="image/png" sizes="16x16" href="{{asset('backend/assets/images/favicon-16x16.png')}}">
	<link rel="icon" type="image/png" sizes="32x32" href="{{asset('backend/assets/images/favicon-32x32.png')}}">
	<link rel="apple-touch-icon" sizes="180x180" href="{{asset('backend/assets/images/apple-touch-icon.png')}}">

	<!--[ Template main css file ]-->
	<link rel="stylesheet" href="{{asset('backend/assets/css/style.min.css')}}">

</head>

<body data-bvite="theme-CeruleanBlue" class="layout-border svgstroke-a layout-default">

	<!-- start: main grid layout -->
	<main class="container-fluid px-0">

		<!-- start: project logo -->
		<div class="px-md-4 px-2 pt-2 pb-2 brand" data-bs-theme="none">
			<div>
				<div class="d-flex align-items-center pt-1">
					<button class="btn d-inline-flex d-xl-none border-0 p-0 pe-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_Navbar">
						
					</button>
					<!--[ Start:: Brand Logo icon ]-->
					<a href="/admin/dashboard"><img src="{{$logo->img_head}}" alt="" style="height: 100px"></a>
				</div>
				
			</div>
			
		</div>

		<!-- start: page header -->
		<header class="px-md-4 px-2" data-bs-theme="none">
			<div class="d-flex justify-content-between align-items-center py-2 w-100">
				{{-- <button type="button" class="btn text-accent btn-link p-0 me-3 d-none d-md-inline-flex" data-bs-toggle="modal" data-bs-target="#FullscreenMenu">
					<svg class="svg-stroke" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
						<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
						<path d="M5 5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
						<path d="M12 5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
						<path d="M19 5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
						<path d="M5 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
						<path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
						<path d="M19 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
						<path d="M5 19m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
						<path d="M12 19m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
						<path d="M19 19m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
					</svg>
				</button> --}}
			

				{{-- <form class="dropdown main-search me-md-4 w-50 d-none d-md-inline-flex">
					<div class="w-100" data-bs-toggle="dropdown" data-bs-auto-close="outside">
						<svg class="svg-stroke search-icon" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
							<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
							<path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0"></path>
							<path d="M21 21l-6 -6"></path>
						</svg>
						<input type="text" class="form-control" placeholder="Search..." aria-label="Search...">
					</div>
				
				</form> --}}
			
				<ul class="header-menu flex-grow-1">
					<!--[ Start:: notification ]-->
					{{-- <li class="nav-item dropdown px-md-1 d-none d-md-inline-flex">
						<a class="dropdown-toggle gray-6" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" title="notification">
							<span class="bullet-dot bg-primary animation-blink"></span>
							<svg class="svg-stroke" xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
								<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
								<path d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6"></path>
								<path d="M9 17v1a3 3 0 0 0 6 0v-1"></path>
								<path d="M21 6.727a11.05 11.05 0 0 0 -2.794 -3.727"></path>
								<path d="M3 6.727a11.05 11.05 0 0 1 2.792 -3.727"></path>
							 </svg>
						</a>
						
					</li> --}}
					{{-- <li class="nav-item py-2 py-md-1 col-auto">
						<div class="vr d-none d-sm-flex h-100 mx-sm-2"></div>
					</li> --}}
					<!--[ Start:: language ]-->
					{{-- <li class="nav-item dropdown px-md-1 d-none d-md-inline-flex">
						<a class="dropdown-toggle gray-6" href="#" data-bs-toggle="dropdown" role="button" title="language">
							<svg class="svg-stroke" xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
								<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
								<path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0"></path>
								<path d="M3.6 9h16.8"></path>
								<path d="M3.6 15h16.8"></path>
								<path d="M11.5 3a17 17 0 0 0 0 18"></path>
								<path d="M12.5 3a17 17 0 0 1 0 18"></path>
							</svg>
						</a>
						
					</li> --}}
					<!--[ Start:: theme light/dark ]-->
					{{-- <li class="nav-item dropdown px-md-1">
						<a class="dropdown-toggle gray-6" href="#" id="bd-theme" data-bs-toggle="dropdown" aria-expanded="false">
							<svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24" class="theme-icon-active"><use href="#sun-fill"></use></svg>
						</a>
						<ul class="dropdown-menu dropdown-menu-end p-2 p-xl-3 shadow rounded-4" aria-labelledby="bd-theme">
							<li class="mb-1"><a class="dropdown-item rounded-pill" href="#" data-bs-theme-value="light"><svg class="avatar xs me-2 opacity-50 theme-icon" fill="currentColor"><use href="#sun-fill"></use></svg> Light</a></li>
							<li class="mb-1"><a class="dropdown-item rounded-pill active" href="#" data-bs-theme-value="dark"><svg class="avatar xs me-2 opacity-50 theme-icon" fill="currentColor"><use href="#moon-stars-fill"></use></svg> Dark</a></li>
							<li class="mb-1"><a class="dropdown-item rounded-pill" href="#" data-bs-theme-value="auto"><svg class="avatar xs me-2 opacity-50 theme-icon" fill="currentColor"><use href="#circle-half"></use></svg> Auto</a></li>
						</ul>
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" style="display: none;">
							<symbol id="sun-fill" viewBox="0 0 16 16">
								<path d="M12 8a4 4 0 1 1-8 0 4 4 0 0 1 8 0zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
							</symbol>
							<symbol id="moon-stars-fill" viewBox="0 0 16 16">
								<path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
								<path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
							</symbol>
							<symbol id="circle-half" viewBox="0 0 16 16">
								<path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
							</symbol>
						</svg>
					</li> --}}
					<!--[ Start:: theme setting ]-->
					{{-- <li class="nav-item dropdown px-md-1">
						<a class="dropdown-toggle gray-6" href="#offcanvas_setting" data-bs-toggle="offcanvas" aria-expanded="false" title="template setting">
							<svg class="svg-stroke" xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
								<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
								<path d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z"></path>
								<path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path>
							</svg>
						</a>
					</li> --}}
					{{-- <li class="nav-item py-2 py-md-1 col-auto">
						<div class="vr d-none d-sm-flex h-100 mx-sm-2"></div>
					</li> --}}
					<!--[ Start:: user detail ]-->
					<li class="nav-item user ms-3">
						<a class="dropdown-toggle gray-6 d-flex text-decoration-none align-items-center lh-sm p-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" title="User" data-bs-auto-close="outside">
							<img class="avatar rounded-circle border border-3" src="https://static-00.iconduck.com/assets.00/profile-circle-icon-512x512-zxne30hp.png" alt="avatar">
							
							<li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
						</a>
						
					</li>
				</ul>
			</div>
		</header>

        @yield("body")
        
    </main>


	<!-- Template page js -->
	<script src="{{asset('backend/assets/js/main.js')}}"></script>
	<script>
		jQuery(function () {

			// Revenue and Cost
			initApexChart(document.querySelector("#apex-MyAnalytics"), {
				series: [{
					name: 'Revenue',
					data: [13, 23, 20, 8, 13, 27, 33, 12, 67, 22, 43, 21,]
				}, {
					name: 'Cost',
					data: [44, 55, 41, 67, 22, 43, 21, 49, 13, 23, 20, 8,]
				}],
				chart: {
					type: 'bar',
					height: 240,
					stacked: true,
					//stackType: '100%',
					toolbar: {
						show: false,
					},
				},
				colors: ['var(--theme-color1)', 'var(--accent-color)'],
				responsive: [{
					breakpoint: 480,
					options: {
						legend: {
							position: 'bottom',
							offsetX: -10,
							offsetY: 0
						}
					}
				}],
				xaxis: {
					categories: ['Jan', 'Feb', 'Marc', 'Apr', 'May', 'Jun', 'July', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'],
				},
				yaxis: {
					labels: {
						style: {
							colors: ['#ffffff'],
						}
					}
				},
				fill: {
					opacity: 1
				},
				dataLabels: {
					enabled: false,
				},
				legend: {
					position: 'bottom',
				},
				tooltip: {
					y: [{
						title: {
							formatter: function (val) {
								return val + " (K)"
							}
						}
					}, {
						title: {
							formatter: function (val) {
								return val + " (K)"
							}
						}
					}]
				},
			});

			// Sales Analytics
			initApexChart(document.querySelector("#apex-SalesAnalytics"), {
				series: [{
					name: 'Mobile',
					data: [31, 40, 28, 51, 42, 109, 100, 40, 28, 51, 42, 22]
				}, {
					name: 'Web',
					data: [11, 32, 42, 109, 100, 40, 28, 45, 32, 34, 52, 41]
				}],
				chart: {
					height: 270,
					type: 'area',
					toolbar: {
						show: false,
					}
				},
				colors: ['var(--theme-color2)', 'var(--theme-color5)'],
				fill: {
					type: "gradient",
					gradient: {
						//shade: "dark",
						//type: "horizontal",
						shadeIntensity: 0.5,
						gradientToColors: ['var(--theme-color2)', 'var(--theme-color5)'],
						inverseColors: true,
						opacityFrom: 1,
						opacityTo: 0.3,
						stops: [0, 100]
					}
				},
				dataLabels: {
					enabled: false
				},
				stroke: {
					curve: 'smooth',
					width: 1,
				},
				xaxis: {
					categories: ["Jan", "Feb", "March", "April", "May", "Jun", "July", "Aug", "Sept", "Oct", "Nov", "Dec",]
				},
			});

			// Team Performance
			initApexChart(document.querySelector("#apex-TeamPerformance"), {
				chart: {
					height: 240,
					type: "radialBar",
				},
				series: [67],
				colors: ["var(--theme-color1)"],
				plotOptions: {
					radialBar: {
						startAngle: -90,
						endAngle: 90,
						track: {
							background: 'var(--bs-border-color)',
							startAngle: -90,
							endAngle: 90,
						},
						dataLabels: {
							name: {
								show: false,
							},
							value: {
								fontSize: "30px",
								show: true
							}
						}
					}
				},
				fill: {
					type: "gradient",
					gradient: {
						shade: "dark",
						type: "horizontal",
						gradientToColors: ["var(--theme-color3)"],
						stops: [0, 100]
					}
				},
				stroke: {
					lineCap: "butt"
				},
				labels: ["Progress"]
			});

			initApexChart(document.querySelector("#apex-EmployeeSalary"), {
				series: [{
					data: [400, 430, 448, 690, 1100, 1200, 1380]
				}],
				colors: ["var(--theme-color1)"],
				chart: {
					type: 'bar',
					height: 256,
					toolbar: {
						show: false,
					},
				},
				plotOptions: {
					bar: {
						borderRadius: 4,
						horizontal: true,
					}
				},
				dataLabels: {
					enabled: false
				},
				xaxis: {
					categories: ['Design', 'Developer', 'Marketing', 'SOE', 'BD', 'HR', 'Sales'],
				}
			});
		});
	</script>


  

</body>


</html>