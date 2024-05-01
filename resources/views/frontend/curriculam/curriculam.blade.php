@extends('frontend.layouts.app')

@section('title', 'Our faculty')

@section('content')


<!-- academic header start -->

<section class="about-header">
    <div class="about-header-text">
        <h1> {{$data->title}}</h1>
    </div>
</section>

<!-- academic header end -->

<!-- curriculum start -->

<section class="curriculam-content py-lg-5 py-4">
    <div class="container">
        <h4 class="text-decoration-underline">
            {{$data->title}} :
        </h4>
        {!! $data->details !!}
       
    </div>
</section>

<!-- curriculum end -->

@endsection