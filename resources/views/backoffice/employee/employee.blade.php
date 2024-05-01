@extends('backoffice.layout.app')

@section('title', 'Empolyee')

@section('content')


@include('backoffice.layout.topBar')
@include('backoffice.layout.sideBar')


<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <div class="page-title-box text-center">
                <h4>Add Employee</h4>

            </div>

            <div class="page-title-box pb-2">
                <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#myModal">Add Employee</button>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <div class="table-rep-plugin">
                                <div class="table-responsive mb-0" data-pattern="priority-columns">
                                    <table id="tech-companies-1" class="table  table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th data-priority="1">First name</th>
                                                <th data-priority="3">Last name No</th>
                                                <th data-priority="3">Email</th>
                                                <th data-priority="3">Phone</th>
                                                <th data-priority="3">Position</th>
                                                <th data-priority="3">Department</th>
                                                <th data-priority="3">Image</th>
                                                <th data-priority="3">Experience</th>
                                                <th data-priority="3">Education</th>
                                                <th data-priority="3">School type</th>
                                                <th data-priority="3">Team</th>
                                                <th data-priority="1">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        @foreach ($datas as $data)
                                            <tr>
                                                <th>{{$loop->index+1}}</th>
                                                <td>{{$data->first_name}}</td>
                                                <td>{{$data->last_name}}</td>
                                                <td>{{$data->email}}</td>
                                                <td>{{$data->phone}}</td>
                                                <td>{{$data->position}}</td>
                                                <td>{{$data->department}}</td>
                                                <td><img src="{{$data->image}}" alt="img" style="width: 40px;height:auto"></td>
                                                <td>{{$data->experience}}</td>
                                                <td>{{$data->education}}</td>
                                                <td>{{$data->schoolType}}</td>
                                                <td>{{$data->teamName}}</td>
                                                <td>
                                                    <div class="d-flex justify-content-center ">
                                                        <a href="" data-log='{{$data}}' id="bannerUpdate" data-bs-toggle="modal" data-bs-target="#editmyModal" class="edit_log" style="margin-right: 5px;">

                                                            <i class="mdi mdi-account-edit-outline" style="background: green;padding: 3px;color: white;font-size: 15px;cursor: pointer;border-radius: 3px; "></i>
                                                        </a>

                                                        <a id="delete-log" href="{{route('delete.employee',['id'=>$data->id])}}" onclick="return confirm('Delete?')">
                                                            <i class="mdi mdi-delete" style="background: red; padding: 3px; color: white; font-size: 15px; cursor: pointer; border-radius: 3px;"></i>
                                                        </a>

                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->



            <!-- sample modal content -->
            <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title mt-0" id="myModalLabel">Employee
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{route('store.employee')}}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Image</label><span class="text-danger"> *</span>
                                    <input type="file" class="form-control" id="banner_img" aria-describedby="emailHelp" name="image" placeholder="Banner image" accept="image/*">
                                </div>
                                @error('image')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror


                                <div class="form-group">
                                    <label for="exampleInputPassword1">First Name</label><span class="text-danger"> *</span>
                                    <input type="text" class="form-control" id="code-line" name="first_name" value='{{old('first_name')}}' placeholder="First name">
                                </div>
                                @error('first_name')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Last Name</label><span class="text-danger"> *</span>
                                    <input type="text" class="form-control" id="code-line" name="last_name" value='{{old('last_name')}}' placeholder="Last name">
                                </div>
                                @error('last_name')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Email</label><span class="text-danger"> *</span>
                                    <input type="email" class="form-control" id="code-line" name="email" value='{{old('email')}}' placeholder="Enter email">
                                </div>
                                @error('email')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Phone</label><span class="text-danger"> *</span>
                                    <input type="text" class="form-control" id="code-line" name="phone" value='{{old('phone')}}' placeholder="Enter email">
                                </div>
                                @error('phone')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Position</label><span class="text-danger"> *</span>
                                    <input type="text" class="form-control" id="code-line" name="position" value='{{old('position')}}' placeholder="Enter position">
                                </div>
                                @error('position')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Department</label><span class="text-danger"> *</span>
                                    <input type="text" class="form-control" id="code-line" name="department" value='{{old('department')}}' placeholder="Enter department">
                                </div>
                                @error('department')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Experience</label><span class="text-danger"> *</span>
                                    <input type="text" class="form-control" id="code-line" name="experience" value='{{old('experience')}}' placeholder="Enter department">
                                </div>
                                @error('experience')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Education</label><span class="text-danger"> *</span>
                                    <input type="text" class="form-control" id="code-line" name="education" value='{{old('education')}}' placeholder="Enter education">
                                </div>
                                @error('education')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="exampleInputPassword1">School Type</label><span class="text-danger"> *</span>
                                    <select class="form-select" aria-label="Default select example" value='{{old('school_type')}}' name="school_type">
                                        <option selected>-------select-------</option>
                                        @foreach($school_types as $school)
                                            <option value="{{$school->id}}">{{$school->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('school_type')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Team</label><span class="text-danger"> *</span>
                                    <select class="form-select" aria-label="Default select example" value='{{old('team')}}' name="team">
                                    <option selected>-------select-------</option>
                                        @foreach($teams as $team)
                                            <option value="{{$team->id}}">{{$team->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('team')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror



                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light waves-effect" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary waves-effect waves-light">Add Employee</button>
                        </div>
                        </form>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->





            {{-- edit banner moddla  --}}
            <!-- sample modal content -->
            <div id="editmyModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title mt-0" id="myModalLabel">Employee
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{route('update.employee')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" id="id" name="id">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Image</label><span class="text-danger"> *</span>
                                    <input type="file" class="form-control" id="" aria-describedby="emailHelp" name="image" placeholder="Banner image" accept="image/*">
                                </div>
                                @error('image')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror


                                <div class="form-group">
                                    <label for="exampleInputPassword1">First Name</label><span class="text-danger"> *</span>
                                    <input type="text" class="form-control" id="fname" name="first_name" placeholder="First name">
                                </div>
                                @error('first_name')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Last Name</label><span class="text-danger"> *</span>
                                    <input type="text" class="form-control" id="lname" name="last_name" placeholder="Last name">
                                </div>
                                @error('last_name')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Email</label><span class="text-danger"> *</span>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                                </div>
                                @error('email')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Phone</label><span class="text-danger"> *</span>
                                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter email">
                                </div>
                                @error('phone')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Position</label><span class="text-danger"> *</span>
                                    <input type="text" class="form-control" id="position" name="position" placeholder="Enter position">
                                </div>
                                @error('position')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Department</label><span class="text-danger"> *</span>
                                    <input type="text" class="form-control" id="departmane" name="department" placeholder="Enter department">
                                </div>
                                @error('department')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Experience</label><span class="text-danger"> *</span>
                                    <input type="text" class="form-control" id="experience" name="experience" placeholder="Enter department">
                                </div>
                                @error('experience')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Education</label><span class="text-danger"> *</span>
                                    <input type="text" class="form-control" id="education" name="education" placeholder="Enter education">
                                </div>
                                @error('education')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="exampleInputPassword1">School Type</label><span class="text-danger"> *</span>
                                    <select class="form-select" aria-label="Default select example" id="school" name="school_type">
                                        <option selected>-------select-------</option>
                                        @foreach($school_types as $school)
                                            <option value="{{$school->id}}">{{$school->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('school_type')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Team</label><span class="text-danger"> *</span>
                                    <select class="form-select" aria-label="Default select example" id="team" name="team">
                                    <option selected>-------select-------</option>
                                        @foreach($teams as $team)
                                            <option value="{{$team->id}}">{{$team->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('team')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror



                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light waves-effect" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary waves-effect waves-light">Update Employee</button>
                        </div>
                        </form>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
        </div>
    </div>

</div>



@push('scripts')
<script>
    $(document).ready(function() {
        $('.edit_log').on('click', function(e) {
            var data = $(this).data('log');

            $('#fname').val('');
            $('#lname').val('');
            $('#email').val('');
            $('#phone').val('');
            $('#position').val('');
            $('#departmane').val('');
            $('#experience').val('');
            $('#education').val('');
            $('#school').val('');
            $('#team').val('');

            $('#id').val(data.id);
            $('#fname').val(data.first_name);
            $('#lname').val(data.last_name);
            $('#email').val(data.email);
            $('#phone').val(data.phone);
            $('#position').val(data.position);
            $('#departmane').val(data.department);
            $('#experience').val(data.experience);
            $('#education').val(data.education);
            $('#school').val(data.school_type);
            $('#team').val(data.team);

        });
    });
</script>


<script>
    CKEDITOR.replace('info_details');
    CKEDITOR.replace('edit_info_details');
</script>
@endpush

@endsection