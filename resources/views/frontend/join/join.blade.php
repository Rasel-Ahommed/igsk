@extends('frontend.layouts.app')

@section('title', 'Join us')

@section('content')


<section class="joining">
    <div class="container">
        <div class="joining-details">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-sm-4">
                    <div class="joining-img text-center">
                        <img class="img-fluid" src="{{asset('frontendData/asset/image/work-img/join us.webp')}}" alt="joining-img"
                            loading="lazy">
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="d-flex justify-content-center">
                        <h2 class="section-head">
                            Join Us
                        </h2>
                    </div>
                    <form action="#" class="row">
                        <div class="col-sm-12">
                            <div class="mb-3">
                                <input type="file" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="First Name">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <input type="email" class="form-control" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="Education">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="mb-3">
                                <textarea name="" id="" class="form-control" placeholder="Carriar Objective"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="mb-3">
                                <textarea name="" id="" class="form-control" placeholder="Massage"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="mb-3">
                                <input class="form-control" type="file" name="" id="" placeholder="Upload your  cv">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="mb-3">
                                <input class="form-control bg-primary text-white fw-semibold" type="submit" name="" id="" value="Send Massage">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- joining form end -->

@endsection