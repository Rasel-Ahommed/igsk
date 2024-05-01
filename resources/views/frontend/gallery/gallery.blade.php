@extends('frontend.layouts.app')

@section('title', 'FAQs')

@section('content')


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
       
        @foreach($gallery_titles as $title)
        @php
            $image = Gallery::where('gallery_title',$title->id)->first()
        @endphp
        @if($image)
          <div class="col-lg-4 col-md-6 p-0">
            <div class="gallery-img-content">
              <div class="gallery-img">
                <img class="gallery-item" src="{{$image->image}}" alt="Written Compotision" loading="lazy">
                <a href="{{route('gallery.details',['id'=>$title->id])}}" class="btn gallery-overlay">
                  <i class="ri-play-circle-line"></i>
                </a>
              </div>
            </div>
          </div>
          @endif
        @endforeach

      </div>
    </div>
  </section>

@endsection