@extends('frontend.layouts.app')

@section('title', 'Home')

@section('content')


<!-- about header start -->

<section class="about-header">
    <div class="about-header-text">
        <h1>About School</h1>
    </div>
</section>

<!-- about header end -->

<!-- top card start -->

{{-- include top card from frontend/layouts  --}}
@include('frontend.layouts.top_card')

<!-- top card end -->

<!-- facility box start -->

<section class="facility-box py-md-5 py-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 d-flex align-items-center flex-column">
                <div class="overview-box">
                    <img class="w-25" src="{{asset('frontendData/asset/image/work-img/calendar-time-svgrepo-com.svg')}}" alt="facility icon"
                        loading="lazy">
                </div>
                <h5 class="pt-3 fw-bold">LONG</h5>
                <p>OPENING HOURS</p>
            </div>
            <div class="col-lg-3 col-md-6 d-flex align-items-center flex-column">
                <div class="overview-box">
            <img class="w-25" src="{{asset('frontendData/asset/image/work-img/ranking-1-svgrepo-com.svg')}}" alt="facility icon"
                        loading="lazy">
                </div>
                <h5 class="pt-3 fw-bold">OUTSTANDING</h5>
                <p>FACILITIES</p>
            </div>
            <div class="col-lg-3 col-md-6 d-flex align-items-center flex-column">
                <div class="overview-box">
                    <img class="w-25" src="{{asset('frontendData/asset/image/work-img/sports-medal-svgrepo-com.svg')}}" alt="facility icon"
                        loading="lazy">
                </div>
                <h5 class="pt-3 fw-bold">EXTRA-CURRICULAR</h5>
                <p>ACTIVITIES</p>
            </div>
            <div class="col-lg-3 col-md-6 d-flex align-items-center flex-column">
                <div class="overview-box">
                    <img class="w-25" src="{{asset('frontendData/asset/image/work-img/teacher (3) 1.svg')}}" alt="facility icon" loading="lazy">
                </div>
                <h5 class="pt-3 fw-bold">30+</h5>
                <p>Teachers</p>
            </div>
        </div>
    </div>
</section>

<!-- facility box end -->

<!-- history start -->

<div id="about_history" class="about-igsk-history py-md-5 py-2">
    <div class="container">
        <div class="d-flex justify-content-center">
            <h2 class="section-head">
                History
            </h2>
        </div>
        <p class="text-justify pt-2">
            International Grammar School, Khulna (IGSK) was established in August 2018. The school was established with
            a dream where students can achieve wisdom to develop a strong mentality, make the best use of their
            intelligence and grow not only as an outstanding learner but also as an amazing person. IGSK is committed to
            provide a safe place for children – where we do our best to provide a stimulating and secure learning
            environment in which we value each child as an individual. Beyond the academic challenge, students who join
            the school will find a friendly and welcoming school environment, allowing them to thrive and succeed. By
            2021 IGSK has enough teachers, admins and supporting members who can make all these dreams come true. The
            team of IGSK—Students, Teachers, Staff and Parents are working together to make one community.
        </p>
    </div>
</div>

<!-- history end -->

<!-- Goal, Mission & Vision start -->

<div id="about_goal" class="about-igsk-goal pt-2 pb-sm-5 pb-2">
    <div class="container">
        <div class="d-flex justify-content-center">
            <h2 class="section-head">
                Goal, Mission & Vision
            </h2>
        </div>
        <div class="goal-mission-vission">
            <div class="about-our-goal">
                <div class="d-flex">
                    <h5 class="text-decoration-underline p-0">
                        Our Goal
                    </h5>
                </div>
                <h6>An inspiring school that-</h6>
                <ul>
                    <li>Provides a strong foundation of moral and academic excellence.</li>
                    <li>Value-laden committed to practicing creativity.</li>
                    <li>Ensure learning environment for native culture and native language appropriately</li>
                    <li>Ensures a safe learning environment.</li>
                    <li>Curriculum relevant and responsive to the changing of times</li>
                    <li>Value-laden committed to practicing creativity.</li>
                </ul>
            </div>
            <div class="about-our-goal">
                <div class="d-flex">
                    <h5 class="text-decoration-underline p-0">
                        Our Mission
                    </h5>
                </div>
                <p>
                    Our mission is to develop our students in a child-centered environment for the challenges and changes of the 21st century where they will be able to maintain a balance between acquiring knowledge and promoting the joy of discovery.
                </p>
            </div>
            <div class="about-our-goal">
                <div class="d-flex">
                    <h5 class="text-decoration-underline p-0">
                        Our Vision
                    </h5>
                </div>
                <p>
                    International Grammar School, Khulna (IGSK) envisions to prepare children being integrated with values, creativity, and life skills for the future world and enthusiasm for learning.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Goal, Mission & Vision end -->

@endsection