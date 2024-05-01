@extends('backoffice.layout.app')

@section('title', 'Home Banner')

@section('content')


    @include('backoffice.layout.topBar')
    @include('backoffice.layout.sideBar')


    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <div class="page-title-box text-center">
                    <h4>Enquery form data</h4>

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
                                                    <th data-priority="1">Student name</th>
                                                    <th data-priority="3">Parents name</th>
                                                    <th data-priority="3">Guardian name</th>
                                                    <th data-priority="3">Gender</th>
                                                    <th data-priority="3">Date</th>
                                                    <th data-priority="3">Phone</th>
                                                    <th data-priority="3">Start date</th>
                                                    <th data-priority="1">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($datas as $data)
                                                    <tr>
                                                        <th>{{ $loop->index + 1 }}</th>
                                                        <td>{{$data->student_name}}</td>
                                                        <td>{{$data->parents_name}}</td>
                                                        <td>{{$data->guardian__name}}</td>
                                                        <td>{{$data->gender}}</td>
                                                        <td>{{$data->date}}</td>
                                                        <td>{{$data->phone}}</td>
                                                        <td>{{$data->start_date}}</td>
                                                        <td>
                                                            <a id="delete-log"
                                                                href="{{ route('delete.enquiry', ['id' => $data->id]) }}"
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



    @push('scripts')
        <script>
            $(document).ready(function() {
                $('.edit_log').on('click', function(e) {
                    var data = $(this).data('log');
                    console.log(data);

                    $('#code-line').val('');

                    $('#id').val(data.id);
                    $('#upd_code_line').val(data.code_line);
                });
            });
        </script>
    @endpush

@endsection
