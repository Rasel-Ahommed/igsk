@extends('frontend.layouts.app')

@section('title', 'Introduction')

@section('content')


<!-- gallery folder start -->

<section class="quick-gallery">
    <div class="container py-lg-5 py-2">
        <div class="d-flex justify-content-center pb-md-5 pb-2">
            <h2 class="section-head">
                Event
            </h2>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 p-0">
                <div class="gallery-img-content">
                    <div class="gallery-img">
                        <img class="gallery-item" src="./asset/image/work-img/carousel-1.jpg" alt="Written Compotision"
                            loading="lazy">
                        <button onclick="openLightbox(this)" class="btn gallery-overlay">
                            <i class="ri-play-circle-line"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 p-0">
                <div class="gallery-img-content">
                    <div class="gallery-img">
                        <img class="gallery-item" src="./asset/image/work-img/carousel-3.jpg" alt="Playground"
                            loading="lazy">
                        <button onclick="openLightbox(this)" class="btn gallery-overlay">
                            <i class="ri-play-circle-line"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 p-0">
                <div class="gallery-img-content">
                    <div class="gallery-img">
                        <img class="gallery-item" src="./asset/image/work-img/carousel-2.jpg" alt="Story Classroom"
                            loading="lazy">
                        <button onclick="openLightbox(this)" class="btn gallery-overlay">
                            <i class="ri-play-circle-line"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 p-0">
                <div class="gallery-img-content">
                    <div class="gallery-img">
                        <img class="gallery-item" src="./asset/image/work-img/carousel-1.jpg" alt="Written Compotision"
                            loading="lazy">
                        <button onclick="openLightbox(this)" class="btn gallery-overlay">
                            <i class="ri-play-circle-line"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 p-0">
                <div class="gallery-img-content">
                    <div class="gallery-img">
                        <img class="gallery-item" src="./asset/image/work-img/carousel-3.jpg" alt="Playground"
                            loading="lazy">
                        <button onclick="openLightbox(this)" class="btn gallery-overlay">
                            <i class="ri-play-circle-line"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 p-0">
                <div class="gallery-img-content">
                    <div class="gallery-img">
                        <img class="gallery-item" src="./asset/image/work-img/carousel-2.jpg" alt="Story Classroom"
                            loading="lazy">
                        <button onclick="openLightbox(this)" class="btn gallery-overlay">
                            <i class="ri-play-circle-line"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- modal for image lightbox start -->

<div class="modal fade" id="galleryLightboxModal" tabindex="-1" role="dialog" aria-labelledby="lightboxModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header fw-bolder">
        <div class="modal-title"></div>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img id="galleryLightboxImage" class="img-fluid" src="" alt="Lightbox Image" loading="lazy">
      </div>
    </div>
  </div>
</div>

<!-- modal for image lightbox end -->

<!-- gallery folder end -->

@endsection