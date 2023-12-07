
@extends('layouts.frontend')

@section('body')
<div class="bannercontainer spacetop">
				<div class="banner">
					<ul>
                        @if ($home_banner)
                        @foreach ($home_banner as $home_banner )
						<li data-transition="random" data-slotamount="1">
							<img src="{{$home_banner->image}}" alt="" />
							<div class="banner-text hidden-sm">
								<div class="caption sft big_white"  data-x="0" data-y="100" data-speed="700" data-start="1700" data-easing="easeOutBack"></div>
								<div class="caption sfb big_orange clearfix"  data-x="100" data-y="350" data-speed="500" data-start="1900" data-easing="easeOutBack">
									<h2>{{$home_banner->heading}}</h2>
								</div>
								<div class="caption lfr medium_grey" data-x="left" data-y="center" data-speed="300" data-start="2000">
								</div>
							</div>
						</li>
						@endforeach
                        @endif
						

					</ul>
				</div>
                
				<div class="container">
                    @if ($home)
                       
                        <div class="row">
                            <div class="col-12">
                                <div class="headingbanner hidden-lg">
                                    <h1 class="mobhead" style="font-size: 2em;">{{$home[0]->heading}}</h1>
                                </div>
                            </div>
                        </div>
                        
                    @endif
					<div class="row" >
						<div class="col-12">
							<div class="appointment-form">
								<!-- Your appointment form code here -->
								<h4 class="form-header">Get in touch</h4>
                                <form method="post" action="{{ route('contact.store') }}" name="contactForm"    id="contact">
                                    @csrf									
                                    <div class="input-container ic1">
										<input id="firstname" name="name" class="input" type="text"  placeholder="Name " required/>
									</div>
									<div class="input-container ic2">
										<input id="lastname" name="email"  class="input" type="text" placeholder="Email" required/>
									</div>
									<div class="input-container ic2">
										<input id="email" name="number"  class="input" type="text" placeholder="Number " required/>
									</div>
									<div class="input-container ic2">
										<input id="subject" class="input"   name="subject" type="text" placeholder="Subject " required/>
									</div>
									<div class="input-container ic2">
										<textarea id="message" name="comment"  class="input" type="text" placeholder="Message " required></textarea>
									</div>
									<div class="input-container ic2 text-center">
									    <button type="submit" class="submit" style="width:100px;" >Submit</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				
				</div>
				
				
			</div>

        </div>
    <div>
<!--banner Section ends Here -->
<!--Section area starts Here -->
<section id="section">
    <!--Section box starts Here -->
    <div class="section">
        <div class="services">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="">
                            <h2 >Our IT Solutions & Services for Your Business</h2><br><br><br>
                        </div>
                    </div>
                </div>
                <div id="services-slides" class="services-slider">

                    @if($service)
                    @foreach($service as $service)
                        <div class="slides-tab zoom col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <figure style="width: 100%; height: 220px; overflow: hidden;">

                                    <img src="{{$service->image}}" alt="" style="width: 100%; height: 100%; object-fit: cover;">

                            </figure>
                            <div class="slides-text">
                                <h4>{{$service->heading}}</h4>
                                <p>
                                    {{ Illuminate\Support\Str::limit(implode(' ', array_slice(str_word_count($service->content, 1), 0, 10)), 200) }}
                                </p>
                                <a href="/service/{{ $service->id}}" class="read-more">read more <span>></span></a>
                            </div>
                        </div>
                    @endforeach
                @endif
                </div>
            </div>
        </div>
    
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-4">
                        <div class="features-text">
                            <div class="text-dark">
                                <span>Great Journy for IT Solutions</span>
                                <h3>Our Awesome Features</h3>
                            </div>

                            <p>
                                Business need Technology and it's a massive market all around the globe. it's a never expanding business , and Technology will hardly see recession ever.
                            </p>
                            <a href="/service" class="button button-hover">our services</a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="features-tab">

                            
                            <div class="tab-text">
                                <h5>Requirements Gathering.</h5>
                                <p>
                                    Our designers create captivating designs, while developers bring them to life with robust, industry-standard coding.											</p>
                            </div>
                        </div>
                        <div class="features-tab">
                            
                            <div class="tab-text">
                                <h5>Testing Device & Release.</h5>
                                <p>
                                    We conduct rigorous testing, debugging, and ensure optimal performance across devices before a smooth release.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="features-tab">
                            
                            <div class="tab-text">
                                <h5>Maintenance And Support.</h5>
                                <p>
                                    Beyond launch, we offer reliable support, updates, and assistance to keep your website secure and up-to-date.
                                </p>
                            </div>
                        </div>
                        <div class="features-tab">
                            
                            <div class="tab-text">
                                <h5>Discover Our Cutting-Edge Features</h5>
                                <p>
                                    we take pride in offering a wide range of innovative features that set us apart in the IT industry.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
        <div class="about">
             <div class="figure parallax">
                <img src="{{asset('frontend/assets/img/image1.webp')}}" alt="" style="height: 40em;">
            </div>
            <div class="transport-king">
                <div class="about-us">
                    <div class="heading">
                        <span> ABOUT OUR COMPANY</span>
                        <h3>
                           
                            Complete Digital Solutions</h3>
                    </div>

                    <p style="color: aliceblue;">
                        We develop innovative and contemporary web and mobile apps which makes the world a smaller place through faster services. <br> </p>  
                        <p style="color: aliceblue;"> 5 Years Of Experience <br>
                        20 More Than UI/UX <br>
                        16 Delivering Consistent Promises <br>
                    </p> 
                    
                </div>


            </div>
        </div>
        <div class="news">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 center">
                        <div class="heading">
                            <span>FROM OUR BLOG</span>
                            <h2>LATEST NEWS</h2>
                        </div>

                        <div class="design-line">
                            <span class="design"></span>
                        </div>
                    </div>
                    <div class="news-section">


                         @if($blog)
                        @foreach($blog as $blog)
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                <div class="slides-tab zoom"><br><br>
                                    <figure style="width: 100%; height: 220px; overflow: hidden;">
                                        
                                            <img src="{{$blog->image}}" alt="" style="width: 100%; height: 100%; object-fit: cover;" />

                                    </figure>
                                    <div class="slides-text">
                                        <h5>{{$blog->heading}}></h5>
                                        <p>
                                            {{ Illuminate\Support\Str::limit(implode(' ', array_slice(str_word_count($blog->content, 1), 0, 30)), 200) }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif

                    </div>
                </div>
            </div>
        </div>
        <div class="testimonial">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 center">
                        <div class="heading">
                            <span>what people say</span>
                            <h2>testimonials</h2>
                        </div>

                        <div class="design-line">
                            <span class="design"></span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-text" id="testimonial-text">
                    @if($testimonial)
                    @foreach($testimonial as $testimonial)
                        <div class="feedback">
                            <blockquote class="custom-quote">
                                <span class="fa fa-quote-left custom-fa"></span>
                                <p>
                                    {{-- {{$testimonial->content}} --}}
                                    {{ substr($testimonial->content, 0, 200) }}
                                    <a href="#" class="read-more-link" data-content="{{ $testimonial->content }}" data-role="{{ $testimonial->name }}" style="color: blue">Read more <span>></span></a>
                                </p>
                                <footer>
                                    <h6>{{$testimonial->name}} <span>{{$testimonial->role}}</span></h6>
                                </footer>
                            </blockquote>
                        </div>
                    @endforeach
                    @endif




                    
                </div>

            </div>
        </div>
        <div class="query">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-10">
                        <h5>DO YOU STILL HAVE A QUESTION REGARING OUR SERVICES?</h5>
                       
                    </div>
                    <div class="col-xs-12 col-sm-2">
                        <a href="/contact" class="button contact-us">contact us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <p id="modal-content"></p>
            <p id="roles" class="bold"></p>
        </div>
    </div>
    <!--Section box ends Here -->
</section>
<!--Section area ends Here -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // Handle the "Read More" link click
        $(".read-more-link").click(function(e) {
            e.preventDefault();
            var content = $(this).data("content");
            var role = $(this).data("role"); // Get the role data

            $("#modal-content").html(content);
            $("#roles").html(role); // Add role content to the modal

            $("#myModal").css("display", "block");
        });

        // Handle the modal close button
        $(".close").click(function() {
            $("#myModal").css("display", "none");
        });

        // Close the modal when clicking outside of it
        $(window).on('click', function(event) {
            var modal = $("#myModal");
            if (event.target == modal[0]) {
                modal.css("display", "none");
            }
        });
    });
</script>
@endsection