@extends('layouts.frontend')

@section('body')


<!--banner Section starts Here -->

  {{-- <div class="banner"> --}}
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
  {{-- </div> --}}


<br><br><br>

  <!--banner Section ends Here --> 
  <!--Section area starts Here -->
  <section id="section"> 
    <!--Section box starts Here -->
    
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
              <div class="heading"> 
                <h2 class="h3"> {{$service->heading}}</h2>
              </div>
              <div class="air-fright-img-part"> <img src="{{$service->image}}" alt="" />
                <p class="bold"> {{$service->content}}</p>
              </div>
            </div>
          </div>
        </div>
   
    
    <!--Section box ends Here --> 
  </section>
  <div class="container">
    @if ($service)
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-lg-12 col-xl-12">
                 {!!$service->detail_content!!}
        </div>
    </div>
    @endif  
</div>
  <!--Section area ends Here --> 
</div>


@endsection