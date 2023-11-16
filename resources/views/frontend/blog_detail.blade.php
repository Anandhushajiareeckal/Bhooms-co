@extends('layouts.frontend')

@section('body')


<!--banner Section starts Here -->
<ul>
  <li data-transition="random" data-slotamount="1">
      <img src="{{ asset('frontend/assets/images/about-banner.jpg') }}" alt="" class="banner-image" />
      <div class="banner-text">
          <div class="caption sft big_white" data-x="0" data-y="100" data-speed="700" data-start="1700" data-easing="easeOutBack"></div>
          <div class="banner-text">
              <div class="container">
                  <div class="row">
                      <div class="col-xs-12">
                      </div>
                  </div>
              </div>
          </div>
          <div class="caption lfr medium_grey" data-x="left" data-y="center" data-speed="300" data-start="2000">
          </div>
      </div>
  </li>
</ul>
<br><br><br>
  <!--banner Section ends Here --> 
  <!--Section area starts Here -->
  <section id="section"> 
    <!--Section box starts Here -->
    
        <div class="container">
          <div class="row">
            <div class="col-md-9 col-sm-8 col-xs-12">
              <div class="heading"> 
                <h2 class="h3"> {{$service->heading}}</h2>
              </div>
              <div class="air-fright-img-part"> <img src="{{$service->image}}" alt="" />
                <p class="bold"> {{$service->content}}</p>
              </div>
              
             
            </div>
            <div class="col-md-3 col-sm-4 col-xs-12">
              <div class="service-quote-wrap">
                <div class="our-service-wrap">
                  <h3 class="h5"> Our Services </h3>
                  <ul class="our-service">
                    @if($service_all)
                    @foreach($service_all as $service_all)
                    <li>
                      <a href="/service/{{$service_all->id}}">
                          <img src="{{ asset('frontend/assets/svg/bullet-svg.svg') }}" alt="" class="svg img-cont" />
                          {{ $service->heading }}
                      </a>
                  </li>                    @endforeach
                    @endif
                  </ul>
                </div>
                <div class="quote">
                  <h3 class="h5"> want get a quote ? </h3>
                  <!--<p> Our team is here to assist you. Please reach out to us with your project details, and we'll provide you with a customized quote tailored to your specific needs.. </p>-->
                  <a class="button contact-us" href="/contact">request a quote</a> </div>
              </div>
            </div>
          </div> 
        </div>
   
        <div class="container">
          @if ($service)
          <div class="row">
              <div class="col-xs-12 col-sm-12 col-lg-12 col-xl-12">
                       {!!$service->detail_content!!}
              </div>
          </div>
          @endif  
      </div>
    <!--Section box ends Here --> 
  </section>
  <!--Section area ends Here --> 

@endsection