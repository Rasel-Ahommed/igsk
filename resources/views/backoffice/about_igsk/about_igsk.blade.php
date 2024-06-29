@extends('backoffice.layout.app')

@section('title', 'About IGSK')

@section('content')


    @include('backoffice.layout.topBar')
    @include('backoffice.layout.sideBar')


    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">
                <div class="page-title-box text-center">
                    <h4>About IGSK & Rules</h4>
                </div>
                <div class="row">
                    <div class="col-12">
                        <form action="{{route('update.aboutIgsk',['id'=>encrypt($data->id)])}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card ">
                                <div class="card-body">
                                    <h5 class="text-center mb-4 text-decoration-underline">Goal, Mission & Vision</h5>
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <img src="{{$data->goal_img}}" alt="img" style="width: 12rem; height: auto;"><br>
                                            <input class="mt-3 ms-3" type="file" name="goalImg" accept="image/*">
                                            @error('goalImg')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div>
                                            <label for="exampleInputPassword1">Goal</label><span class="text-danger">
                                                *</span>
                                            <textarea name="goal" id="goal" cols="40" rows="10">{{old('goal',$data->goal)}}</textarea>
                                            @error('goal')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- mission vission  --}}
                                    <div class="d-flex justify-content-between mt-4">
                                        <div class="me-2">
                                            <label for="exampleInputPassword1">Mission</label><span class="text-danger">
                                                *</span>
                                            <textarea name="mission" id="mission" cols="40" rows="10">{{old('mission',$data->mission)}}</textarea>
                                            @error('mission')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div>
                                            <label for="exampleInputPassword1">Vision</label><span class="text-danger">
                                                *</span>
                                            <textarea name="vision" id="vision" cols="40" rows="10">{{old('vision',$data->vision)}}</textarea>
                                            @error('vision')
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
                        <form action="{{route('update.rulesForStudents',['id'=>encrypt($data->id)])}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card ">
                                <div class="card-body">
                                    <h5 class="text-center mb-4 text-decoration-underline">Rules & Rules for students</h5>
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <img src="{{$data->student_rules_img}}" alt="img" style="width: 12rem; height: auto;"><br>
                                            <input class="mt-3 ms-3" type="file" name="stdRulesImg" accept="image/*">
                                            @error('stdRulesImg')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    
                                    <div class="d-flex justify-content-between mt-4">
                                        <div class="me-2">
                                            <label for="exampleInputPassword1">IGSK Rules</label><span class="text-danger">
                                                *</span>
                                            <textarea name="rules" id="rules" cols="10" rows="10">{{old('rules',$data->igsk_rules)}}</textarea>
                                            @error('rules')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div>
                                            <label for="exampleInputPassword1">Rules for students</label><span class="text-danger">
                                                *</span>
                                            <textarea name="rulesForStudents" id="rulesForStudents" cols="40" rows="10">{{old('rulesForStudents',$data->students_rules)}}</textarea>
                                            @error('rulesForStudents')
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


                {{-- rules for parents  --}}
                
                <div class="row">
                    <div class="col-12">
                        <form action="{{route('update.rulesForParents',['id'=>encrypt($data->id)])}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card ">
                                <div class="card-body">
                                    <h5 class="text-center mb-4 text-decoration-underline">Rules for parents</h5>
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <img src="{{$data->parents_rules_img}}" alt="img" style="width: 12rem; height: auto;"><br>
                                            <input class="mt-3 ms-3" type="file" name="parentRulesImg" accept="image/*">
                                            @error('parentRulesImg')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="me-2">
                                            <label for="exampleInputPassword1">Rules for students</label><span class="text-danger">
                                                *</span>
                                            <textarea name="rulesForParents" id="rulesForParents" cols="10" rows="10">{{old('rulesForParents',$data->parents_rules)}}</textarea>
                                            @error('rulesForParents')
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
            CKEDITOR.replace('goal');
            CKEDITOR.replace('mission');
            CKEDITOR.replace('vision');
            CKEDITOR.replace('rulesForStudents');
            CKEDITOR.replace('rules');
            CKEDITOR.replace('rulesForParents');
        </script>
    @endpush

@endsection
