@extends('frontend.layouts.app')

@section('title', 'Our faculty')

@section('content')


<!-- faculty header start -->

<section class="about-header">
    <div class="about-header-text">
        <h1>Our Faculty</h1>
    </div>
</section>

<!-- faculty header end -->

<!-- top card start -->

{{-- include top card from frontend/layouts  --}}
@include('frontend.layouts.top_card')

<!-- top card end -->

<!-- faculty member start -->

<div class="all-faculty-member">
    <div class="container py-md-5 py-2">
        <div class="d-flex justify-content-center pb-4">
            <h2 class="section-head">
                Faculty
            </h2>
        </div>
        <div class="member-list">
            <div class="row">

                @foreach ($datas as $data)
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="faculty-member">
                            <div class="member-img">
                                <img src="{{$data->image}}" alt="Faculty Member" loading="lazy">
                            </div>
                            <div class="member-text">
                                <h5 class="fw-bold">{{$data->first_name}} {{ $data->last_name}}</h5>
                                <h6>{{$data->position}}</h6>
                                <h6>{{$data->education}}</h6>
                            </div>
                            <a href="javascript: void(0)" data-log ='{{$data}}' class="member-box showthis" >
                                <i class="ri-arrow-right-line"></i>
                            </a>
                        </div>
                    </div>
                @endforeach


               
            </div>
        </div>
    </div>
</div>


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

<!-- faculty member end -->


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