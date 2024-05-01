@extends('frontend.layouts.app')

@section('title', 'Teacher and staff')

@section('content')


<!-- teacher and staff header start -->

<section class="about-header">
    <div class="about-header-text">
        <h1>Teachers and Staff</h1>
    </div>
</section>

<!-- teacher and staff header end -->

<!-- faculty member start -->

<section class="all-teacher-staff-member">
    <div class="container py-md-5 py-2">
        <div class="d-flex justify-content-center pb-4">
            <h2 class="section-head">
                Our Teachers And Staff
            </h2>
        </div>
        <div class="d-flex row p-3" role="group" aria-label="Large button group">
            <button type="button"
                class="early-btn col-md-3 col-sm-6 btn btn-outline-secondary fw-semibold rounded-end-0 member-active-list">Early
                Year</button>
            <button type="button"
                class="elementory-btn col-md-3 col-sm-6 btn btn-outline-secondary fw-semibold rounded-0">Elementary
                School</button>
            <button type="button" class="mid-btn col-md-3 col-sm-6 btn btn-outline-secondary fw-semibold rounded-0">Mid
                School</button>
            <button type="button"
                class="high-btn col-md-3 col-sm-6 btn btn-outline-secondary fw-semibold rounded-start-0">High
                School</button>
        </div>
        <div class="member-list p-sm-5 p-3" id="early_year">
            <div class="row">
                @foreach ($early_years as $early_year)
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="faculty-member">
                            <div class="member-img">
                                <img src="{{$early_year->image}}" alt="Faculty Member" loading="lazy">
                            </div>
                            <div class="member-text">
                                <h5 class="fw-bold">{{$early_year->first_name}} {{ $early_year->last_name}}</h5>
                                <h6>{{$early_year->position}}</h6>
                                <h6>{{$early_year->education}}</h6>
                            </div>
                            <a href="javascript: void(0)" data-log ='{{$early_year}}' class="member-box showthis" >
                                <i class="ri-arrow-right-line"></i>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>


        <div class="member-list p-sm-5 p-3" id="elementory_year">
            <div class="row">
                @foreach ($elementary_schools as $elementary_school)
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="faculty-member">
                            <div class="member-img">
                                <img src="{{$elementary_school->image}}" alt="Faculty Member" loading="lazy">
                            </div>
                            <div class="member-text">
                                <h5 class="fw-bold">{{$elementary_school->first_name}} {{ $elementary_school->last_name}}</h5>
                                <h6>{{$elementary_school->position}}</h6>
                                <h6>{{$elementary_school->education}}</h6>
                            </div>
                            <a href="javascript: void(0)" data-log ='{{$elementary_school}}' class="member-box showthis" >
                                <i class="ri-arrow-right-line"></i>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>


        <div class="member-list p-sm-5 p-3" id="mid_year">
            <div class="row">
                @foreach ($mid_schools as $mid_school)
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="faculty-member">
                            <div class="member-img">
                                <img src="{{$mid_school->image}}" alt="Faculty Member" loading="lazy">
                            </div>
                            <div class="member-text">
                                <h5 class="fw-bold">{{$mid_school->first_name}} {{ $mid_school->last_name}}</h5>
                                <h6>{{$mid_school->position}}</h6>
                                <h6>{{$mid_school->education}}</h6>
                            </div>
                            <a href="javascript: void(0)" data-log ='{{$mid_school}}' class="member-box showthis" >
                                <i class="ri-arrow-right-line"></i>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>


        <div class="member-list p-sm-5 p-3" id="high_year">
            <div class="row">
                @foreach ($high_schools as $high_school)
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="faculty-member">
                            <div class="member-img">
                                <img src="{{$high_school->image}}" alt="Faculty Member" loading="lazy">
                            </div>
                            <div class="member-text">
                                <h5 class="fw-bold">{{$high_school->first_name}} {{ $high_school->last_name}}</h5>
                                <h6>{{$high_school->position}}</h6>
                                <h6>{{$high_school->education}}</h6>
                            </div>
                            <a href="javascript: void(0)" data-log ='{{$high_school}}' class="member-box showthis" >
                                <i class="ri-arrow-right-line"></i>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<!-- faculty member end -->
<!-- modal for image lightbox start -->

<div class="modal fade" id="teacherLightboxModal" tabindex="1" role="dialog" aria-labelledby="lightboxModalLabel"
    aria-hidden="true" style="z-index: 9999;">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header fw-bolder">
                <div class="modal-title">
                    <div class="teacher-name">
                        Personal Information <span id="info">About Mr. Jhon Doe</span>
                    </div>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="teacher-info-single">
                    <div class="teacher-img">
                        <img class="img-fluid" id="image" src="" alt="Faculty Member" loading="lazy">
                    </div>
                    <div class="teacher-text">
                        <h5 class="fw-bold">Name: <span id="name"></span></h5>
                        <h6><strong>Post:</strong> <span id="post">Director, IGSK</span></h6>
                        <h6><strong>Education:</strong> <span id="education">Bachelor's degree in English</span></h6>
                        <h6><strong>Experience:</strong> <span id="exper"></span></h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- modal for image lightbox end -->


<script>
    $(document).ready(function() {
        $('.showthis').on('click', function(e) {
            var data = $(this).data('log');
           console.log(data);
            $('#info').html('');
            $('#image').attr('src', '');
            $('#name').html('');
            $('#post').html('');
            $('#education').html('');
            $('#exper').html('');
            
            $('#info').html(data.first_name + ' ' + data.last_name);
            $('#image').attr('src', data.image);
            $('#name').html(data.first_name + ' ' + data.last_name);
            $('#post').html(data.position);
            $('#education').html(data.education);
            $('#exper').html(data.experience);

        });
    });
</script>
@endsection