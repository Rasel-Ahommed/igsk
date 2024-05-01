@extends('backoffice.layout.app')

@section('title', 'Event')

@section('content')


@include('backoffice.layout.topBar')
@include('backoffice.layout.sideBar')


<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <div class="page-title-box text-center">
                <h4>Event</h4>

            </div>

            <div class="page-title-box pb-2">
                <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#myModal">Add Event</button>
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
                                                <th data-priority="1">Event title</th>
                                                <th data-priority="3">Color</th>

                                                <th data-priority="3">Start date</th>

                                                <th data-priority="3">End date</th>

                                                <th data-priority="3">Description</th>

                                                <th data-priority="1">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                            use Carbon\Carbon;
                                            @endphp
                                            @foreach ($events as $event)
                                            <tr>
                                                <th>{{$loop->index+1}}</th>
                                                <th>{{$event->title}}</th>
                                                <td>
                                                    <div style="width: 40px; height: 10px; background-color: {{ $event->color_code }}"></div>
                                                </td>

                                                <td>{{$event->start_date = Carbon::parse($event->start_date)->format('Y-m-d')}}</td>
                                                <td>{{$event->end_date = Carbon::parse($event->end_date)->format('Y-m-d')}}</td>

                                                <td>{{$event->description}}</td>
                                                <td>
                                                    <div class="d-flex justify-content-center ">

                                                        <a id="delete-log" href="{{route('delete.eventsCalender',['id'=>$event->id])}}" onclick="return confirm('Delete?')">
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
                            <h5 class="modal-title mt-0" id="myModalLabel">Notice
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{route('store.all_event')}}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Event title</label><span class="text-danger"> *</span>
                                    <input type="text" class="form-control" id="code-line" name="title" placeholder="Event title">
                                </div>
                                @error('title')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Color_code</label><span class="text-danger"> *</span>
                                    <input type="color" class="form-control" id="color" aria-describedby="emailHelp" name="color" placeholder="event color" value="#c6b4b0">

                                </div>
                                @error('color')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror


                                <!-- <div class="form-group">
                                        <label for="exampleInputPassword1">Notice title</label><span class="text-danger"> *</span>
                                        <input type="text" class="form-control" id="code-line" name="title"
                                            placeholder="Notice title">
                                    </div>
                                    @error('title')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror -->

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Start Date</label><span class="text-danger"> *</span>
                                    <input type="date" class="form-control" id="code-line" name="start_data" placeholder="Notice title">
                                </div>
                                @error('start_data')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="exampleInputPassword1">End Date</label><span class="text-danger"> *</span>
                                    <input type="date" class="form-control" id="code-line" name="end_data" placeholder="End Date">
                                </div>
                                @error('start_data')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Description</label><span class="text-danger"> *</span>
                                    <input type="text" class="form-control" id="code-line" name="description" placeholder="description">
                                </div>
                                @error('description')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light waves-effect" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary waves-effect waves-light">Add Event</button>
                        </div>
                        </form>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->





            {{-- edit banner moddla  --}}

            <!-- sample modal content -->
            <div id="editModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title mt-0" id="myModalLabel">Home Banner
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" id="id">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Info image</label><span class="text-danger"> *</span>
                                    <input type="file" class="form-control" id="image" aria-describedby="emailHelp" name="image" placeholder="Banner image">
                                </div>
                                @error('image')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror


                                <div class="form-group">
                                    <label for="exampleInputPassword1">Notice title</label><span class="text-danger"> *</span>
                                    <input type="text" class="form-control" id="noticeTitle" name="title" placeholder="Info title">
                                </div>
                                @error('title')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Info details</label><span class="text-danger"> *</span>
                                    <textarea name="edit_info_details" id="details" cols="30" rows="10"></textarea>
                                </div>
                                @error('edit_info_details')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror


                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light waves-effect" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary waves-effect waves-light">Add banner</button>
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

            $('#noticeTitle').val('');
            $('#details').val('');
            // CKEDITOR.instances['details'].setData('');

            $('#id').val(data.id);
            $('#noticeTitle').val(data.title);
            CKEDITOR.instances['details'].setData(data.details);

        });
    });
</script>


<script>
    CKEDITOR.replace('info_details');
    CKEDITOR.replace('edit_info_details');
</script>
@endpush

@endsection