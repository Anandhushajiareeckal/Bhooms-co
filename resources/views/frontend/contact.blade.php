
@extends('layouts.frontend')

@section('body')

<!--banner Section starts Here -->
<ul>
  <li data-transition="random" data-slotamount="1">
          <div class="image-container">
              <img src="{{$map->banner}}" alt="" class="banner-image" />
              <div class="image-text"><h1>Contact</h1></div>
          </div>
  </li>
</ul>
<br>
  <!--banner Section ends Here --> 
  <!--Section area starts Here -->
  <section id="section"> 
    <!--Section box starts Here -->
    <div class="section">
      <div class="contact-form">
        <div class="container">
          <div class="row col-xs-12">
            <div class="col-xs-12 col-sm-6">
              <div class="heading "> <span>our</span>
                <h3>contact form</h3>
              </div>
              <div class="contact-form-box " ng-controller="FormController">
                <form method="post" action="{{ route('contact.store') }}" name="contactForm"   id="contact">
                  @csrf
                    <div ng-class="{'successMessage' : successsubmission}" ng-bind="successsubmissionMessage" id="success"></div>
                  <div class="row">
                    <input id="name" name="name" class="contact-name" type="text" placeholder="Name*" ng-model="formData.name" ng-class="{'error' : errorName}" required/>
                    <input id="nubmer" name="number" class="contact-number" type="text" placeholder="Number*" ng-model="formData.name" ng-class="{'error' : errorName}" required/>
                    <input id="email" name="email" class="contact-mail" type="text" placeholder="Email*" ng-model="formData.email" ng-class="{'error' : errorEmail}" required/>
                    <input id="sub" name="subject" class="contact-subject" type="text" placeholder="Subject*" ng-class="{'error' : errorSubject}" ng-model="formData.subject" required/>
                    <textarea name="comment" placeholder="Comment" id="message" ng-model="formData.message" ng-class="{'error' : errorTextarea}"></textarea>
                    <!--<input id="submit" class="comment-submit qoute-sub" type="button"  value="submit">-->
                    <button type="submit" class="comment-submit qoute-sub" ng-disabled="submitButtonDisabled">Submit</button>
                  </div>
                  <div ng-class="{'submissionMessage' : submission}" ng-bind="submissionMessage" style="float:right; color: red;"></div>
                </form>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6">
              <div>
                 {!!$map->map!!}

            </div>
          </div>
        </div>
      </div>
      
      <!--<div class="query ">-->
      <!--  <div class="container">-->
      <!--    <div class="row">-->
      <!--      <div class="col-xs-12 col-sm-10">-->
      <!--        <h5>DO YOU STILL HAVE A QUESTION REGARING OUR SERVICES?</h5>-->
      <!--      </div>-->
      <!--      <div class="col-xs-12 col-sm-2"> <a href="#" class="contact-us button">contact us</a> </div>-->
      <!--    </div>-->
      <!--  </div>-->
      <!--</div>-->
    </div>
    <!--Section box ends Here --> 
  </section>
  <!--Section area ends Here --> 


@endsection