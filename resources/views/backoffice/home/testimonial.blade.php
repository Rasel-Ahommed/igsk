@extends('backoffice.layout.app')

@section('title', 'Notice')

@section('content')


    @include('backoffice.layout.topBar')
    @include('backoffice.layout.sideBar')


    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <div class="page-title-box text-center">
                    <h4>Testimonial</h4>

                </div>

                <div class="page-title-box pb-2">
                    <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal"
                        data-bs-target="#myModal">Add testimonial</button>
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
                                                    <th data-priority="1">Name</th>
                                                    <th data-priority="3">Testimonial details</th>
                                                    <th data-priority="1">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($testimonials as $testimonial)
                                                    <tr>
                                                        <th>{{$loop->index + 1}}</th>
                                                        <td>{{$testimonial->name}}</td>
                                                        <td>{{$testimonial->massage}}</td>
                                                        <td>
                                                            <div class="d-flex justify-content-center ">
                                                                <a href="" data-log = '{{$testimonial}}' id=""
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#editModal" class="edit_log"
                                                                    style="margin-right: 5px;">

                                                                    <i class="mdi mdi-account-edit-outline" 
                                                                        style="background: green;padding: 3px;color: white;font-size: 15px;cursor: pointer;border-radius: 3px; "></i>
                                                                </a>

                                                                <a id="delete-log" href="{{route('delete.testimonial',['id'=>$testimonial->id])}}"
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



                <!-- sample modal content -->
                <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title mt-0" id="myModalLabel">Testimonial
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{route('store.testimonial')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Name</label><span class="text-danger"> *</span>
                                        <input type="text" class="form-control" id="banner_img"
                                            aria-describedby="emailHelp" name="name" placeholder="Enter Name" >
                                    </div>
                                    @error('name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror


                                    
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Notice details</label><span class="text-danger"> *</span>
                                       <textarea name="testimonial_dtls" id="info_details" cols="30" rows="10"></textarea>
                                    </div>
                                    @error('testimonial_dtls')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light waves-effect"
                                    data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary waves-effect waves-light">Add Testimonial</button>
                            </div>
                            </form>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->





                {{-- edit banner moddla  --}}
                <div id="editModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title mt-0" id="myModalLabel">Testimonial
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{route('update.testimonial')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="id" id="id">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Name</label><span class="text-danger"> *</span>
                                        <input type="text" class="form-control" id="name"
                                            aria-describedby="emailHelp" name="name" placeholder="Enter Name" >
                                    </div>
                                    @error('name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror


                                    
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Notice details</label><span class="text-danger"> *</span>
                                       <textarea name="edit_info_details" id="details" cols="30" rows="10"></textarea>
                                    </div>
                                    @error('edit_info_details')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light waves-effect"
                                    data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary waves-effect waves-light">Update Testimonial</button>
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
            $('.edit_log').on('click', function(e){
                var data = $(this).data('log');

                $('#name').val('');
                $('#details').val('');
                // CKEDITOR.instances['details'].setData('');

                $('#id').val(data.id);
                $('#name').val(data.name);
                CKEDITOR.instances['details'].setData(data.massage);

            });
        });
    </script>


<script>
    CKEDITOR.replace('testimonial_dtls');
    CKEDITOR.replace('edit_info_details');
</script>
@endpush

@endsection
