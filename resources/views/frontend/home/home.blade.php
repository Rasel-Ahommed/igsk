@extends('frontend.layouts.app')

@section('title', 'Home')

@section('content')





    <header>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2500">
            <div class="carousel-indicators">

                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                @foreach ($datas as $index => $data)
                    @php
                        $image_p = str_replace('\\', '/', $data->image);
                    @endphp
                    <div class="carousel-item{{ $index === 0 ? ' active' : '' }}"
                        style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('{{ $image_p }}');">
                        <div class="carousel-caption">
                            <h1 class="pb-md-3">{{ $data->code_line }}</h1>
                            <div class="d-flex justify-content-center gap-2">
                                <a href="{{ route('about.school') }}">
                                    <button class="btn-learn btn btn-md">
                                        Learn more
                                    </button>
                                </a>

                                <a href="#quickInfo">
                                    <button class="btn-more btn btn-md">
                                        Read more
                                    </button>
                                </a>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </header>

    <!-- header section end -->

    <!-- quick Info Start -->

    <section class="quick-info-section" id="quickInfo">
        <div class="all-info-list container">
            <div class="row">
                <div class="col-lg-3">

                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel"
                        data-bs-interval="2000">
                        {{-- <div class="carousel-indicators">
             
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
              aria-current="true" aria-label="Slide "></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
            </div> --}}
                        <div class="carousel-inner">

                            @foreach ($shortInfos as $index => $shortInfo)
                                <div class="carousel-item {{ $index === 0 ? ' active' : '' }}">
                                    <div class="carousel-caption">
                                        <div class="quick-info-board">
                                            <div class="card p-3">
                                                <img src="{{ $shortInfo->image }}" class="card-img-top" alt="..."
                                                    loading="lazy">
                                                <div class="card-body">
                                                    <h5>{{ $shortInfo->title }}</h5>
                                                    <h6>{{ $shortInfo->sub_title }}</h6>
                                                    {!! $shortInfo->details !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            {{-- <div class="carousel-item">
                <div class="carousel-caption">
                  <div class="quick-info-board">
                    <div class="card p-3">
                      <img src="./asset/image/work-img/scachpen.png" class="card-img-top" alt="..." loading="lazy">
                      <div class="card-body">
                        <h5>Quick Info - 2</h5>
                        <h6>Sunday to Thursday:</h6>
                        <li>Early year (PG to Kinder II): 8.30 am to 11.30 am.</li>
                        <li>All grades: 8.30 am to 3.00 pm.</li>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="carousel-caption">
                  <div class="quick-info-board">
                    <div class="card p-3">
                      <img src="./asset/image/work-img/scachpen.png" class="card-img-top" alt="..." loading="lazy">
                      <div class="card-body">
                        <h5>Quick Info - 3</h5>
                        <h6>Sunday to Thursday:</h6>
                        <li>Early year (PG to Kinder II): 8.30 am to 11.30 am.</li>
                        <li>All grades: 8.30 am to 3.00 pm.</li>
                      </div>
                    </div>
                  </div>
                </div>
              </div> --}}
                        </div>
                        <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                  data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                  data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button> -->
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="welcome-massage p-4">
                        <p class="h6">Welcome to</p>
                        <p class="h4">International</p>
                        <p class="h5">Grammar School,Khulna</p>
                        <p class="welcome-text-massage">
                            We are thrilled to have you as part of our vibrant academic community. At our school, we foster
                            a nurturing
                            environment where learning is not just a task but an exciting journey.
                        </p>
                    </div>
                </div>
                @php
                    // Get current date
                    $currentDate = \Carbon\Carbon::now();
                    
                    // Set the week start day to Saturday
                    $currentDate->startOfWeek(\Carbon\Carbon::SATURDAY);
                    
                    // Get the week number
                    $currentWeekNumber = $currentDate->weekOfMonth;
                @endphp

                
                <div class="col-lg-4">
                    <div class="quick-notice-board">
                        <div id="carouselId" class="carousel" data-interval="false">

                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item {{$currentWeekNumber == 1 ? 'active' : ''}}">
                                    <div class="card p-3">

                                        <div class="card-body">

                                            <div class="d-flex justify-content-between">

                                                <p class="notice-month h6">
                                                  @if (!$notices->isEmpty())
                                                      {{carbon\carbon::parse($notices[0]->notice_date)->format('F')}}  
                                                  @endif
                                              </p>

                                                <p class="notice-week h6">Week: 1st</p>

                                            </div>

                                            @php
                                                // for print not found massage 
                                                $noticeFound1 = false;
                                            @endphp
                                            
                                          @foreach ($notices as $notice)
                                          {{-- {{dd($notice)}} --}}
                                          
                                          @if ($notice->week == 1)
                                                @php
                                                    $noticeFound1 = true;
                                                @endphp
                                            <li>
                                                <div
                                                    class="notice-item-top d-flex flex-column-reverse justify-content-between align-items-end pb-2 ">

                                                    <div class="notice-title h5 m-0">

                                                    </div>

                                                    <div class="notice-datetime">

                                                        <span class="notice-time">Time: {{carbon\carbon::parse($notice->created_at)->format('h:i')}} </span>

                                                        <span class="notice-date d-block">Date: {{carbon\carbon::parse($notice->notice_date)->format('d-m-y')}}</span>
                                                    </div>

                                                </div>
                                               
                                                <div class="notice-item-bottom">
                                                    <h5>
                                                       
                                                        {{$notice->title}}
                                                       
                                                    </h5>
                                                    <p class="notice-body">
                                                     
                                                        <a style="text-decoration: none" href="{{$notice->image}}" download > {!!$notice->details!!}</a>

                                                    </p>

                                                </div>

                                            </li>
                                            @endif
                                         @endforeach
                                        @if (!$noticeFound1)
                                            <div class="alert alert-danger mt-3 mb-3 b" role="alert">
                                                No notices are available for this week.
                                            </div>
                                        @endif

                                        </div>

                                    </div>
                                </div>

                                <div class="carousel-item {{$currentWeekNumber == 2 ? 'active' : ''}} ">
                                    <div class="card p-3">

                                        <div class="card-body">

                                            <div class="d-flex justify-content-between">

                                                <p class="notice-month h6">
                                                  @if (!$notices->isEmpty())
                                                      {{carbon\carbon::parse($notices[0]->notice_date)->format('F')}}
                                                      
                                                  @endif
                                              </p>

                                                <p class="notice-week h6">Week: 2nd</p>

                                            </div>
                                            @php
                                                // for print not found massage 
                                                $noticeFound2 = false;
                                            @endphp
                                            
                                          @foreach ($notices as $notice)
                                          @if ($notice->week == 2 && !empty($notice->week))
                                            @php
                                                $noticeFound2 = true;
                                            @endphp
                                          <li>
                                                <div
                                                    class="notice-item-top d-flex flex-column-reverse justify-content-between align-items-end pb-2 ">

                                                    <div class="notice-title h5 m-0">

                                                    </div>

                                                    <div class="notice-datetime">

                                                        <span class="notice-time">Time: {{carbon\carbon::parse($notice->created_at)->format('h:i')}} </span>

                                                        <span class="notice-date d-block">Date: {{carbon\carbon::parse($notice->notice_date)->format('d-m-y')}}</span>
                                                    </div>

                                                </div>
                                                
                                               
                                                <div class="notice-item-bottom">
                                                    <h5>
                                                       
                                                        {{$notice->title}}
                                                       
                                                    </h5>
                                                    <p class="notice-body">
                                                        <a style="text-decoration: none" href="{{$notice->image}}" download > {!!$notice->details!!}</a>
                                                    </p>

                                                </div>

                                            </li>
                                            
                                            
                                            @endif
                                         @endforeach
                                        @if (!$noticeFound2)
                                            <div class="alert alert-danger mt-3 mb-3 b" role="alert">
                                                No notices are available for this week.
                                            </div>
                                        @endif

                                        </div>

                                    </div>
                                </div>

                                <div class="carousel-item {{$currentWeekNumber == 3 ? 'active' : ''}}">
                                    <div class="card p-3">

                                        <div class="card-body">

                                            <div class="d-flex justify-content-between">

                                                <p class="notice-month h6">
                                                  @if (!$notices->isEmpty())
                                                      {{carbon\carbon::parse($notices[0]->notice_date)->format('F')}}
                                                      
                                                  @endif
                                              </p>

                                                <p class="notice-week h6">Week: 3rd</p>

                                            </div>
                                            @php
                                                // for print not found massage 
                                                $noticeFound3 = false;
                                            @endphp
                                          @foreach ($notices as $notice)
                                          @if ($notice->week == 3)
                                            @php
                                                $noticeFound3 = true;
                                            @endphp
                                            <li>
                                                <div
                                                    class="notice-item-top d-flex flex-column-reverse justify-content-between align-items-end pb-2 ">

                                                    <div class="notice-title h5 m-0">

                                                    </div>

                                                    <div class="notice-datetime">

                                                        <span class="notice-time">Time: {{carbon\carbon::parse($notice->created_at)->format('h:i')}} </span>

                                                        <span class="notice-date d-block">Date: {{carbon\carbon::parse($notice->notice_date)->format('d-m-y')}}</span>
                                                    </div>

                                                </div>
                                               
                                                <div class="notice-item-bottom">
                                                    <h5>
                                                       
                                                        {{$notice->title}}
                                                       
                                                    </h5>
                                                    <p class="notice-body">
                                                     
                                                        <a style="text-decoration: none" href="{{$notice->image}}" download > {!!$notice->details!!}</a>

                                                    </p>

                                                </div>

                                            </li>
                                            @endif
                                         @endforeach
                                         @if (!$noticeFound3)
                                         <div class="alert alert-danger mt-3 mb-3 b" role="alert">
                                             No notices are available for this week.
                                         </div>
                                        @endif

                                        </div>

                                    </div>
                                </div>

                                <div class="carousel-item {{$currentWeekNumber == 4 ? 'active' : ''}}">
                                    <div class="card p-3">

                                        <div class="card-body">

                                            <div class="d-flex justify-content-between">

                                                <p class="notice-month h6">
                                                  @if (!$notices->isEmpty())
                                                      {{carbon\carbon::parse($notices[0]->notice_date)->format('F')}}
                                                      
                                                  @endif
                                              </p>

                                                <p class="notice-week h6">Week: 4th</p>

                                            </div>
                                            @php
                                                // for print not found massage 
                                                $noticeFound4 = false;
                                            @endphp
                                          @foreach ($notices as $notice)
                                          @if ($notice->week == 4)
                                            @php
                                                $noticeFound4 = true;
                                            @endphp
                                            <li>
                                                <div
                                                    class="notice-item-top d-flex flex-column-reverse justify-content-between align-items-end pb-2 ">

                                                    <div class="notice-title h5 m-0">

                                                    </div>

                                                    <div class="notice-datetime">

                                                        <span class="notice-time">Time: {{carbon\carbon::parse($notice->created_at)->format('h:i')}} </span>

                                                        <span class="notice-date d-block">Date: {{carbon\carbon::parse($notice->notice_date)->format('d-m-y')}}</span>
                                                    </div>

                                                </div>
                                               
                                                <div class="notice-item-bottom">
                                                    <h5>
                                                       
                                                        {{$notice->title}}
                                                       
                                                    </h5>
                                                    <p class="notice-body">
                                                     
                                                        <a style="text-decoration: none" href="{{$notice->image}}" download > {!!$notice->details!!}</a>

                                                    </p>

                                                </div>

                                            </li>
                                            @endif
                                         @endforeach
                                         @if (!$noticeFound4)
                                            <div class="alert alert-danger mt-3 mb-3 b" role="alert">
                                                No notices are available for this week.
                                            </div>
                                        @endif

                                        </div>

                                    </div>
                                </div>

                                <div class="carousel-item {{$currentWeekNumber == 5 ? 'active' : ''}}">
                                    <div class="card p-3">

                                        <div class="card-body">

                                            <div class="d-flex justify-content-between">

                                                <p class="notice-month h6">
                                                  @if (!$notices->isEmpty())
                                                      {{carbon\carbon::parse($notices[0]->notice_date)->format('F')}}
                                                      
                                                  @endif
                                              </p>

                                                <p class="notice-week h6">Week: 5th</p>

                                            </div>
                                            @php
                                                // for print not found massage 
                                                $noticeFound5 = false;
                                            @endphp
                                          @foreach ($notices as $notice)
                                          @if ($notice->week == 5)
                                            @php
                                                $noticeFound5 = true;
                                            @endphp
                                            <li>
                                                <div
                                                    class="notice-item-top d-flex flex-column-reverse justify-content-between align-items-end pb-2 ">

                                                    <div class="notice-title h5 m-0">

                                                    </div>

                                                    <div class="notice-datetime">

                                                        <span class="notice-time">Time: {{carbon\carbon::parse($notice->created_at)->format('h:i')}} </span>

                                                        <span class="notice-date d-block">Date: {{carbon\carbon::parse($notice->notice_date)->format('d-m-y')}}</span>
                                                    </div>

                                                </div>
                                               
                                                <div class="notice-item-bottom">
                                                    <h5>
                                                       
                                                        {{$notice->title}}
                                                       
                                                    </h5>
                                                    <p class="notice-body">
                                                     
                                                        <a style="text-decoration: none" href="{{$notice->image}}" download > {!!$notice->details!!}</a>

                                                    </p>

                                                </div>

                                            </li>
                                            @endif
                                         @endforeach

                                        @if (!$noticeFound5)
                                            <div class="alert alert-danger mt-3 mb-3 b" role="alert">
                                                No notices are available for this week.
                                            </div>
                                        @endif
                                        </div>

                                    </div>
                                </div>

                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselId"
                                    data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselId"
                                    data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!-- quick Info End -->

    <!-- quick event start -->

    <section class="quick-event-section">
        <div class="container">
            <div class="d-flex justify-content-center py-md-5">
                <h2 class="section-head">
                    Upcoming Events
                </h2>
            </div>
            <div class="quick-event-item">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row">
                            @php
                                use carbon\carbon;
                                $class_name = [
                                    'quick-event-blue',
                                    'quick-event-purple',
                                    'quick-event-green',
                                    'quick-event-pink',
                                ];
                            @endphp
                            @foreach ($events as $index => $event)
                                <div class="col-md-6">
                                    <div class="card {{ $class_name[$index] }}">
                                        <div class="card-body">
                                            <p class="h2">{{ Carbon::parse($event->start_date)->format('d') }}</p>
                                            <p class="h6">{{ Carbon::parse($event->start_date)->format('F') }}</p>
                                            <p class="h4">
                                                {{ $event->title }}
                                            </p>
                                            </p>
                                            <p class="quick-event-time">
                                                {{ Carbon::parse($event->created_at)->format('h:i A') }}
                                            </p>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="calendar">
                            <div class="calendar-header">
                                <button class="btn prev-month">&lt;</button>
                                <h2 id="current-month-year"></h2>
                                <button class="btn next-month">&gt;</button>
                            </div>
                            <table class="table table-bordered calendar-table">
                                <thead>
                                    <tr>
                                        <th>Sun</th>
                                        <th>Mon</th>
                                        <th>Tue</th>
                                        <th>Wed</th>
                                        <th>Thu</th>
                                        <th>Fri</th>
                                        <th>Sat</th>
                                    </tr>
                                </thead>
                                <tbody id="calendar-body">

                                </tbody>
                            </table>
                            <div class="color-defination">
                                <ul id="color_def">

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- quick event End -->

    <!-- academic overview start -->

    <section class="academic-overview py-lg-5 py-4">
        <div class="container">
            <div class="academic-overview-content">
                <div class="overview-heading">
                    <h2>Academic Overview</h2>
                </div>
                <div class="overview-body">
                    <p>
                        IGSK is following the Cambridge curriculum which prepares students for life, helping them develop an
                        informed
                        curiosity and a lasting passion for learning. Cambridge students develop the skills they need to
                        achieve at
                        school, university, and work.
                    </p>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 d-flex align-items-center flex-column">
                        <div class="border border-3 border-primary text-primary overview-box">
                            <h3 class="p-2">Early Year</h3>
                        </div>
                        <h6 class="text-primary pt-3">Playgroup, Kinder I, Kinder II</h6>
                    </div>
                    <div class="col-lg-3 col-md-6 d-flex align-items-center flex-column">
                        <div class="border border-3 border-warning text-warning overview-box">
                            <h3 class="p-2">Elementary School</h3>
                        </div>
                        <h6 class="text-warning pt-3">Grade I to Grade II</h6>
                    </div>
                    <div class="col-lg-3 col-md-6 d-flex align-items-center flex-column">
                        <div class="border border-3 border-success text-success overview-box">
                            <h3 class="p-2">Mid School</h3>
                        </div>
                        <h6 class="text-success pt-3">Grade III to Grade VI</h6>
                    </div>
                    <div class="col-lg-3 col-md-6 d-flex align-items-center flex-column">
                        <div class="border border-3 border-danger text-danger overview-box">
                            <h3 class="p-2">High School</h3>
                        </div>
                        <h6 class="text-danger pt-3">Grade VI to Grade VIII</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- academic overview end -->

    <!-- newsletter start -->

    <section class="newsletter">
        <div class="container py-lg-5 py-2">
            <div class="d-flex justify-content-center pb-md-5 pb-2">
                <h2 class="section-head">
                    News
                </h2>
            </div>
            <div class="wrapper">
                <i class="ri-arrow-left-s-line" id="left"></i>
                <ul class="carousel">

                    @foreach ($newes as $news)
                        <li class="card">
                            <img class="card-img-top" src="{{ $news->image }}" alt="Title" loading="lazy" />
                            <div class="card-body">
                                <p>{{ carbon::parse($news->event_date)->format('d F, Y') }}</p>
                                <h4 class="card-title">{{ $news->title }}</h4>
                                <p class="card-text">{{ $news->sub_title }}</p>
                            </div>
                        </li>
                    @endforeach

                </ul>
                <i class="ri-arrow-right-s-line" id="right"></i>
            </div>
        </div>
    </section>

    <!-- newsletter end -->

    <!-- gallery start -->

    <section class="quick-gallery">
        <div class="container py-lg-5 py-2">
            <div class="d-flex justify-content-center pb-md-5 pb-2">
                <h2 class="section-head">
                    Gallery
                </h2>
            </div>
            <div class="row">
                @php
                    use App\Models\Gallery;

                @endphp

                @foreach ($gallery_titles as $title)
                    @php
                        $image = Gallery::where('gallery_title', $title->id)->first();
                    @endphp
                    @if ($image)
                        <div class="col-lg-4 col-md-6 p-0">
                            <div class="gallery-img-content">
                                <div class="gallery-img">
                                    <img class="gallery-item" src="{{ $image->image }}" alt="Written Compotision"
                                        loading="lazy">
                                    <a href="{{ route('gallery.details', ['id' => $title->id]) }}"
                                        class="btn gallery-overlay">
                                        <i class="ri-play-circle-line"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach

            </div>
            <div class="text-end">
                <a class="full-gallery-btn btn" href="{{ route('gallery') }}">
                    View Full Gallery <i class="ri-arrow-right-line"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- gallery end -->

    <!-- testmonials start -->

    <section class="parents-review">
        <div class="container py-md-5 py-2">
            <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
   
                <div class="carousel-inner" role="listbox">

                    @foreach ($testimonials as $index => $testimonial)
                        <div class="carousel-item {{ $index === 0 ? ' active' : '' }}">
                            <div class="row align-items-end">
                                <div class="col-md-5 position-relative">
                                    <div class="p-4 review-circle-box review-box-green"></div>
                                    <div class="p-5 review-circle-box review-box-blue"></div>
                                    <div class="parents-name-box my-3">
                                        <p class="m-0">Said about us</p>
                                        <h4>{{ $testimonial->name }}</h4>
                                    </div>
                                </div>
                                <div class="col-md-7 text-end">
                                    <p>
                                        <q>
                                            {!! $testimonial->massage !!}
                                        </q>
                                    </p>
                                    <h4>{{ $testimonial->name }}</h4>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

  <script>
      $(document).ready(function() {      
          $('.carousel').carousel('pause');
      });
  </script>

@endsection
