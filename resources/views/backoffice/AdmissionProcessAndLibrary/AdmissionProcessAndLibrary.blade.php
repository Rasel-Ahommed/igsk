@extends('backoffice.layout.app')

@section('title', 'Admission process & library')

@section('content')


    @include('backoffice.layout.topBar')
    @include('backoffice.layout.sideBar')


    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">
                <div class="page-title-box text-center">
                    <h4>Admission Process</h4>
                </div>
                <div class="row">
                    <div class="col-12">
                        <form action="{{route('update.admissionProcess',['id'=>encrypt($data->id)])}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card ">
                                <div class="card-body">
                                    <h5 class="text-center mb-4 text-decoration-underline">Admission Process Section</h5>
                                    <div class="d-flex justify-content-center">
                                        <div>
                                            <label for="exampleInputPassword1">Admission Process</label><span class="text-danger">
                                                *</span>
                                            <textarea name="admissionProcess" id="admissionProcess" cols="40" rows="10">{{old('admissionProcess',$data->admissin_process)}}</textarea>
                                            @error('admissionProcess')
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
                        <form action="{{route('update.library',['id'=>encrypt($data->id)])}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card ">
                                <div class="card-body">
                                    <h5 class="text-center mb-4 text-decoration-underline">Our Libraryes section</h5>
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <img src="{{$data->library_img}}" alt="img" style="width: 17rem; height: auto;"><br>
                                            <input class="mt-3 ms-3" type="file" name="librariImg" accept="image/*">
                                            @error('librariImg')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div>
                                            <label for="exampleInputPassword1">Libraries text</label><span class="text-danger">
                                                *</span>
                                            <textarea name="librarytext" id="librarytext" cols="40" rows="10">{{old('librarytext',$data->libraries_text)}}</textarea>
                                            @error('librarytext')
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
            CKEDITOR.replace('admissionProcess');
            CKEDITOR.replace('librarytext');
        </script>
    @endpush

@endsection
