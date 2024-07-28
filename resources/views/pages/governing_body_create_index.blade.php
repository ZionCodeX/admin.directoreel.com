
@extends('layouts.base')


@section('title', 'Governing Body')


@section('header_links')
    @parent
@endsection


@section('alert_messages')
    @parent
@endsection


@section('sidebar')
    @parent
@endsection

 
<!-- MAIN PAGE CONTENT STARTS -->
@section('content')
    <!---------------------------------------------------------->
    <div class="card card-custom gutter-b">
      <div class="card-header">
       <div class="card-title">
        <h3 class="card-label">
            Create Governing Body
         <small></small>
        </h3>
       </div>
      </div>
      <div class="card-body">
<!--::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::-->


<!--##### XIS STANDARD FORM #####-->
<form method="post" action="{{ route('governing_body_create_prox') }}"  enctype="multipart/form-data">
    @csrf

  
<!--##### TEXT #####-->
@component('form.text')
    @slot('name') governing_body_name @endslot
    @slot('id') governing_body_name @endslot
    @slot('label') Governing Body Name @endslot
    @slot('value')@endslot
    @slot('placeholder') Enter name here @endslot
    @slot('icon') fas fa-building @endslot
    @slot('hint') @endslot
    @slot('maxlength') 50 @endslot
    @slot('required') required @endslot
@endcomponent


<!--##### SELECT #####-->
@component('form.select')
    @slot('name') governing_body_chapter @endslot
    @slot('id') governing_body_chapter @endslot
    @slot('label') Select Chapter @endslot
    @slot('value')@endslot
    @slot('icon') fas fa-map @endslot
    @slot('hint') Select Options @endslot
    @slot('required') required @endslot
        @slot('options')
            <option value="NATIONAL">National</option>
            <option value="STATE">State</option>
        @endslot
@endcomponent


<!--##### SELECT STATE #####-->
@component('form.select')
    @slot('name') 	governing_body_state @endslot
    @slot('id') 	governing_body_state @endslot
    @slot('label') Governing Body State @endslot
    @slot('value')@endslot
    @slot('icon') fas fa-map-marked-alt @endslot
    @slot('hint') Select State @endslot
    @slot('required') required @endslot
        @slot('options')
            @include('components/inc_states_list_nigeria')
        @endslot
@endcomponent


<h4>Address Location</h4>

<!--##### SELECT COUNTRY #####-->
@component('form.select')
    @slot('name') country @endslot
    @slot('id') country @endslot
    @slot('label') Country Located @endslot
    @slot('value')@endslot
    @slot('icon') fas fa-globe @endslot
    @slot('hint') Select Country @endslot
    @slot('required') required @endslot
        @slot('options')
            @include('components/inc_country_list')
        @endslot
@endcomponent


<!--##### SELECT STATE #####-->
@component('form.select')
    @slot('name') state @endslot
    @slot('id') state @endslot
    @slot('label') State @endslot
    @slot('value')@endslot
    @slot('icon') fas fa-map-marked-alt @endslot
    @slot('hint') Select State @endslot
    @slot('required') required @endslot
        @slot('options')
            @include('components/inc_states_list_nigeria')
        @endslot
@endcomponent


<!--##### TEXT #####-->
@component('form.text')
    @slot('name') city @endslot
    @slot('id') city @endslot
    @slot('label') City @endslot
    @slot('value') @endslot
    @slot('placeholder') Enter City Name @endslot
    @slot('icon') fas fa-building @endslot
    @slot('hint') @endslot
    @slot('maxlength') 20 @endslot
    @slot('required') required @endslot
@endcomponent


<!--##### TEXT #####-->
@component('form.text')
    @slot('name') street @endslot
    @slot('id') street @endslot
    @slot('label') Street @endslot
    @slot('value')@endslot
    @slot('placeholder') Enter Street here @endslot
    @slot('icon') fas fa-building @endslot
    @slot('hint') @endslot
    @slot('maxlength') 100 @endslot
    @slot('required') required @endslot
@endcomponent


<!--##### TEXT #####-->
@component('form.text')
    @slot('name') email @endslot
    @slot('id') email @endslot
    @slot('label') Official Email @endslot
    @slot('value')@endslot
    @slot('placeholder') Enter email here @endslot
    @slot('icon') fas fa-envelope @endslot
    @slot('hint') @endslot
    @slot('maxlength') 100 @endslot
    @slot('required') required @endslot
@endcomponent


<!--##### TEXT #####-->
@component('form.number')
    @slot('name') phone @endslot
    @slot('id') phone @endslot
    @slot('label') Official Phone @endslot
    @slot('value')@endslot
    @slot('placeholder') Enter Official Phone here @endslot
    @slot('icon') fas fa-phone @endslot
    @slot('hint') @endslot
    @slot('maxlength') 15 @endslot
    @slot('required') @endslot
@endcomponent


<!--##### TEXT AREA #####-->
@component('form.textarea')
    @slot('name') governing_body_brief @endslot
    @slot('id') governing_body_brief @endslot
    @slot('label') Governing Body Brief @endslot
    @slot('value')@endslot
    @slot('placeholder')Enter a brief about body here @endslot
    @slot('hint') @endslot
    @slot('maxlength') 1000 @endslot
    @slot('rows') 4 @endslot
    @slot('required') @endslot
@endcomponent


<!--##### TEXT #####-->
@component('form.text')
    @slot('name') governing_body_website @endslot
    @slot('id') governing_body_website @endslot
    @slot('label') Official Website @endslot
    @slot('value')@endslot
    @slot('placeholder') Enter Official web link here @endslot
    @slot('icon') fas fa-globe @endslot
    @slot('hint') @endslot
    @slot('maxlength') 100 @endslot
    @slot('required') @endslot
@endcomponent


<!--##### TEXT #####-->
@component('form.text')
    @slot('name') governing_body_officer_name @endslot
    @slot('id') governing_body_officer_name @endslot
    @slot('label') Name of Liasion Officer @endslot
    @slot('value')@endslot
    @slot('placeholder') Enter name here @endslot
    @slot('icon') fas fa-user @endslot
    @slot('hint') @endslot
    @slot('maxlength') 50 @endslot
    @slot('required') required @endslot
@endcomponent


<!--##### TEXT #####-->
@component('form.number')
    @slot('name') governing_body_officer_phone @endslot
    @slot('id') governing_body_officer_phone @endslot
    @slot('label') Liasion Officer Phone @endslot
    @slot('value')@endslot
    @slot('placeholder') Enter phone here @endslot
    @slot('icon') fas fa-phone-square-alt @endslot
    @slot('hint') @endslot
    @slot('maxlength') 50 @endslot
    @slot('required') required @endslot
@endcomponent


<!--##### PASSWORD #####-->
@component('form.password')
    @slot('name') password @endslot
    @slot('id') password @endslot
    @slot('label') Enter Password @endslot
    @slot('value')@endslot
    @slot('placeholder') Enter Password @endslot
    @slot('icon') fas fa-lock @endslot
    @slot('hint') @endslot
    @slot('maxlength') 200 @endslot
    @slot('required') required @endslot
@endcomponent


<!--##### PASSWORD #####-->
@component('form.password')
    @slot('name') passwordc @endslot
    @slot('id') passwordc @endslot
    @slot('label') Confirm Password @endslot
    @slot('value')@endslot
    @slot('placeholder') Confirm Password @endslot
    @slot('icon') fas fa-lock @endslot
    @slot('hint') @endslot
    @slot('maxlength') 200 @endslot
    @slot('required') required @endslot
@endcomponent


<hr>


<!--##### SUBMIT BUTTON #####-->
@component('form.button')
    @slot('name') submit @endslot
    @slot('id') submit @endslot
    @slot('label') Create Governing Body Account @endslot
    @slot('value') buttonx @endslot
    @slot('color') primary @endslot
    @slot('icon') fas fa-check @endslot
@endcomponent

</form>






<!--::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::-->
      </div>
     </div>
    <!---------------------------------------------------------->
@endsection 
<!-- MAIN PAGE CONTENT STOPS -->


@section('footer')
    @parent
@endsection 



@section('footer_scripts')
    @parent
@endsection  