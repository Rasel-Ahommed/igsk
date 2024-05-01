@extends('backoffice.layout.app')

@section('title', 'Home Banner')

@section('content')


    @include('backoffice.layout.topBar')
    @include('backoffice.layout.sideBar')


    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <div class="page-title-box text-center">
                    <h4>Join us form data</h4>

                </div>

                {{-- <div class="page-title-box pb-2">
                    <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal"
                        data-bs-target="#myModal">Add banner</button>
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
                                                    <th data-priority="1">Fast name</th>
                                                    <th data-priority="3">Last name</th>
                                                    <th data-priority="3">Email</th>
                                                    <th data-priority="3">Education</th>
                                                    <th data-priority="3">Carriar objective</th>
                                                    <th data-priority="3">Massage</th>
                                                    <th data-priority="3">Image</th>
                                                    <th data-priority="3">Pdf</th>
                                                    <th data-priority="1">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($datas as $data)
                                                    <tr>
                                                        <th>{{ $loop->index + 1 }}</th>
                                                        <td>{{$data->fast_name}}</td>
                                                        <td>{{$data->last_name}}</td>
                                                        <td>{{$data->email}}</td>
                                                        <td>{{$data->education}}</td>
                                                        <td>{{$data->carriar_objective}}</td>
                                                        <td>{{$data->massage}}</td>
                                                        <td><img style="width: 40px;height:auto;" src="{{$data->image}}" alt="img"></td>
                                                        <td><a href="{{$data->pdf}}" target="_blank"><button class="btn btn-primary">View</button></a></td>
                                                        <td>
                                                            <a id="delete-log"
                                                                href="{{ route('delete.joinUsForm', ['id' => $data->id]) }}"
                                                                onclick="return confirm('Delete?')">
                                                                <i class="mdi mdi-delete"
                                                                    style="background: red; padding: 3px; color: white; font-size: 15px; cursor: pointer; border-radius: 3px;"></i>
                                                            </a>
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

            </div>
        </div>

    </div>




@endsection
