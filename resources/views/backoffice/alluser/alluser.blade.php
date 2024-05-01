@extends('backoffice.layout.app')

@section('title', 'All Users')

@section('content')


    @include('backoffice.layout.topBar')
    @include('backoffice.layout.sideBar')


    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <div class="page-title-box text-center">
                    <h4>All Users</h4>

                </div>

                {{-- <div class="page-title-box pb-2">
                    <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal"
                        data-bs-target="#myModal">Add testimonial</button>
                </div> --}}

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
                                                    <th data-priority="1">Name</th>
                                                    <th data-priority="3">Email</th>
                                                    <th data-priority="1">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($users as $user)
                                                    <tr>
                                                        <th>{{$loop->index + 1}}</th>
                                                        <td>{{$user->name}}</td>
                                                        <td>{{$user->email}}</td>
                                                        <td>
                                                            <div class="d-flex justify-content-center ">
                                                                {{-- <a href="" data-log = '{{$testimonial}}' id=""
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#editModal" class="edit_log"
                                                                    style="margin-right: 5px;">

                                                                    <i class="mdi mdi-account-edit-outline" 
                                                                        style="background: green;padding: 3px;color: white;font-size: 15px;cursor: pointer;border-radius: 3px; "></i>
                                                                </a> --}}

                                                                <a id="delete-log" href="{{route('delete.user',['id'=>$user->id])}}"
                                                                    onclick="return confirm('Delete?')">
                                                                    <i class="mdi mdi-delete"
                                                                        style="background: red; padding: 3px; color: white; font-size: 15px; cursor: pointer; border-radius: 3px;"></i>
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



            </div>
        </div>

    </div>



@endsection
