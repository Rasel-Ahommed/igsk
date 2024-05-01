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
                    @if (session('success'))
                        <div class="alert alert-success text-center">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form action="{{route('store.joinForm')}}" method="POST" enctype="multipart/form-data" class="row">
                       @csrf
                        <div class="col-sm-12">
                            <div class="mb-3">
                                <input name='image' type="file" class="form-control" accept="image/*">
                            </div>
                            @error('image')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <input name='fast_name' type="text" class="form-control" placeholder="First Name" value="{{old('fast_name')}}">
                            </div>
                            @error('fast_name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <input name='last_name' type="text" class="form-control" placeholder="Last Name" value="{{old('last_name')}}">
                            </div>
                            @error('last_name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <input name='email' type="email" class="form-control" placeholder="Email" value="{{old('email')}}">
                            </div>
                            @error('email')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <input name='education' type="text" class="form-control" placeholder="Education" value="{{old('education')}}">
                            </div>
                            @error('education')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-sm-12">
                            <div class="mb-3">
                                <textarea name="carriar_objective" id="" class="form-control" placeholder="Carriar Objective">{{old('carriar_objective')}}</textarea>
                            </div>
                            @error('carriar_objective')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-sm-12">
                            <div class="mb-3">
                                <textarea name="massage" id="" class="form-control" placeholder="Massage">{{old('massage')}}</textarea>
                            </div>
                            @error('massage')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-sm-12">
                            <div class="mb-3">
                                <input name='pdf' class="form-control" type="file" name="" id="" placeholder="Upload your  cv" accept="application/pdf" value="{{old('pdf')}}">
                            </div>
                            @error('pdf')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-sm-12">
                            <div class="mb-3">
                                <input type="submit"  class="form-control bg-primary text-white fw-semibold" type="submit" name="" id="" value="Send Massage">
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