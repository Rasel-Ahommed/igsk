@extends('backoffice.layout.app')

@section('title', 'Director Speech')

@section('content')


    @include('backoffice.layout.topBar')
    @include('backoffice.layout.sideBar')


    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">
                <div class="page-title-box text-center">
                    <h4>Director Speech and Why IGSK</h4>
                </div>
                <div class="row">
                    <div class="col-12">
                        <form action="{{route('update.directorSpeech',['id'=>encrypt($data->id)])}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card ">
                                <div class="card-body">
                                    <h5 class="text-center mb-4 text-decoration-underline">Diretor Speech Section</h5>
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <img src="{{$data->director_img}}" alt="img" style="width: 17rem; height: auto;"><br>
                                            <input class="mt-3 ms-3" type="file" name="director_img" accept="image/*">
                                            @error('director_img')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div>
                                            <label for="exampleInputPassword1">Diretor Speech</label><span class="text-danger">
                                                *</span>
                                            <textarea name="directorSpeech" id="directorSpeech" cols="40" rows="10">{{old('directorSpeech',$data->director_speech)}}</textarea>
                                            @error('directorSpeech')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <input class="btn btn-primary float-end mt-4" type="submit" value="Submit">
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->


                <div class="row">
                    <div class="col-12">
                        <form action="{{route('update.whyIGSK',['id'=>encrypt($data->id)])}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card ">
                                <div class="card-body">
                                    <h5 class="text-center mb-4 text-decoration-underline">Why IGSK Section</h5>
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <img src="{{$data->why_igsk_img}}" alt="img" style="width: 17rem; height: auto;"><br>
                                            <input class="mt-3 ms-3" type="file" name="why_igsk_img" accept="image/*">
                                            @error('why_igsk_img')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div>
                                            <label for="exampleInputPassword1">Why IGSK</label><span class="text-danger">
                                                *</span>
                                            <textarea name="aboutIgsk" id="aboutIgsk" cols="40" rows="10">{{old('directorSpeech',$data->why_igsk_text)}}</textarea>
                                            @error('aboutIgsk')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <input class="btn btn-primary float-end mt-4" type="submit" value="Submit">
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            
        </div>
    </div>

    @push('scripts')
        <script>
            CKEDITOR.replace('directorSpeech');
            CKEDITOR.replace('aboutIgsk');
        </script>
    @endpush

@endsection
