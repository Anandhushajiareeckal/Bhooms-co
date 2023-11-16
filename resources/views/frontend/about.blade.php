
@extends('layouts.frontend')

@section('body')

<!--banner Section starts Here -->
{{-- <div style="overflow:hidden;">
<div class="banner" >
    <ul>
        <li data-transition="random" data-slotamount="1">
            <img src="{{asset('frontend/assets/images/banner-img2.jpg')}}" alt="" class="banner-image" />
            <div class="banner-text">
                <div class="caption sft big_white" data-x="0" data-y="100" data-speed="700" data-start="1700" data-easing="easeOutBack"></div>
                <div class="banner-text">
                    <div class="container">
                        <div class="row">
                            <div class="text-center">
                                <h2 class="my-4" style="background: none">about us</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="caption lfr medium_grey" data-x="left" data-y="center" data-speed="300" data-start="2000">
                </div>
            </div>
        </li>
    </ul>
</div>
</div>
<br><br><br> --}}
<ul>
    <li data-transition="random" data-slotamount="1">
        @foreach ($about as $item)
            <div class="image-container">
                <img src="{{$item->img}}" alt="" class="banner-image" />
                <div class="image-text"><h1>About</h1></div>
            </div>
        @endforeach
    </li>
</ul>


  <br><br><br>

<!--banner Section ends Here -->
<!--Section area starts Here -->
<section id="section">
    <!--Section box starts Here -->
    <div class="section">
        {{-- <div class="amazing-features "> --}}
            <div class="container">
                @if ($about)
                    
                @foreach ($about as $about)
                    
                
                <div class="row">
                    <div class="col-xs-12 col-sm-4">
                        <img src="{{$about->image}}" alt="" style="width: 700px" height="500px">
                    </div>
                    <div class="col-xs-12 col-sm-8">
                        <div class="amazing-text">
                            <div class="heading">
                                <span>amazing features</span>
                                <h3>{{$about->heading}}</h3>
                            </div>
                            <p>
                             {{$about->discription}}
                            </p>
                            <a href="/contact" class="button contact-us">contact us</a>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
            </div>
        {{-- </div> --}}
        <br><br><br><br><br><br>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="features-text">
                            <div class="heading">
                                <span>AMAZING FEATURES</span>
                                <h3>Great Journy for IT Solutions</h3>
                            </div>

                            <p>
                                Business need Technology and it's a massive market all around the globe. it's a never expanding business , and Technology will hardly see recession ever.
                            </p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="features-tab bottom-border">

                            
                            <div class="tab-text">
                                <h5>Requirements Gathering.</h5>
                                <p>
                                    Beyond launch, we offer reliable support, updates, and assistance to keep your website secure and up-to-date                                </p>
                            </div>
                        </div>
                        <div class="features-tab bottom-border">
                        
                            <div class="tab-text">
                                <h5>Design & Development.</h5>
                                <p>
                                    Our designers create captivating designs, while developers bring them to life with robust, industry-standard coding.
                                </p>
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
                    <div class="col-xs-12 col-sm-6">
                        <div class="features-tab bottom-border">
                            
                            <div class="tab-text">
                                <h5>Maintenance And Support.</h5>
                                <p>
                                    Beyond launch, we offer reliable support, updates, and assistance to keep your website secure and up-to-date.
                                </p>
                            </div>
                        </div>
                        <div class="features-tab bottom-border">
                    
                            <div class="tab-text">
                                <h5>Effective Project Planning</h5>
                                <p>
                                    We meticulously plan every project, setting clear milestones and deadlines to keep things on track.
                                </p>
                            </div>
                        </div>

                        <div class="features-tab">
                            
                            <div class="tab-text">
                                <h5>Quality Assurance</h5>
                                <p>
                                    Timely delivery doesn't mean cutting corners. We ensure that every solution we provide is thoroughly tested and meets the highest standards of quality.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            
                <div class="container">
                    @if ($about)
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-lg-12 col-xl-12">
                                 {!!$about->contents!!}
                        </div>
                    </div>
                    @endif  
                </div>
            </div>
        {{-- <div class="testimonial ">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="heading">
                            <span>what people say</span>
                            <h2>testimonials</h2>
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
                                        {{$testimonial->content}}
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
        </div> --}}
        <div class="query ">
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
    <!--Section box ends Here -->
</section>

<!--Section area ends Here -->
@endsection