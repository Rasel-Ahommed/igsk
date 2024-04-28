@extends('backoffice.layout.app')

@section('title', 'Gallery')

@section('content')


    @include('backoffice.layout.topBar')
    @include('backoffice.layout.sideBar')


    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <div class="page-title-box text-center">
                    <h4>Gallery</h4>

                </div>

                <div class="page-title-box pb-2">
                    <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal"
                        data-bs-target="#myModal">Add Image</button>
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
                                                    <th data-priority="1">Gallery Title</th>
                                                    <th data-priority="3">Gallery Images</th>
                                                    <th data-priority="1">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                               
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td>
                                                            <div class="d-flex justify-content-center ">
                                                                <a href="" data-log = ''  id="bannerUpdate"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#editModal" class="edit_log"
                                                                    style="margin-right: 5px;">

                                                                    <i class="mdi mdi-account-edit-outline" 
                                                                        style="background: green;padding: 3px;color: white;font-size: 15px;cursor: pointer;border-radius: 3px; "></i>
                                                                </a>

                                                                <a id="delete-log" href=""
                                                                    onclick="return confirm('Delete?')">
                                                                    <i class="mdi mdi-delete"
                                                                        style="background: red; padding: 3px; color: white; font-size: 15px; cursor: pointer; border-radius: 3px;"></i>
                                                                </a>
                                                            </div>
                                                        </td> 
                                                    </tr>
                                                

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
                                <h5 class="modal-title mt-0" id="myModalLabel">News
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">News image</label><span class="text-danger"> *</span>
                                        <input type="file" class="form-control" id="banner_img"
                                            aria-describedby="emailHelp" name="image" placeholder="Banner image" accept="image/*">
                                    </div>
                                    @error('image')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror


                                    <div class="form-group">
                                        <label for="exampleInputPassword1">News title</label><span class="text-danger"> *</span>
                                        <input type="text" class="form-control" id="" name="title"
                                            placeholder="News title">
                                    </div>
                                    @error('title')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">News sub-title</label><span class="text-danger"> *</span>
                                        <input type="text" class="form-control" id="" name="sub_title"
                                            placeholder="News sub-title">
                                    </div>
                                    @error('sub_title')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">News Date</label><span class="text-danger"> *</span>
                                        <input type="date" class="form-control" id="" name="date"
                                            placeholder="News sub-title">
                                    </div>
                                    @error('date')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light waves-effect"
                                    data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary waves-effect waves-light">Add banner</button>
                            </div>
                            </form>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->





                {{-- edit banner moddla  --}}
                
                <!-- sample modal content -->
                <div id="editModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title mt-0" id="myModalLabel">Home Banner
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="id" id="id">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Info image</label><span class="text-danger"> *</span>
                                        <input type="file" class="form-control" id="image"
                                            aria-describedby="emailHelp" name="image" placeholder=" image" accept="image/*">
                                    </div>
                                    @error('image')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror


                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Info title</label><span class="text-danger"> *</span>
                                        <input type="text" class="form-control" id="title" name="title"
                                            placeholder="News title">
                                    </div>
                                    @error('title')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Info sub title</label><span class="text-danger"> *</span>
                                        <input type="text" class="form-control" id="sub_title" name="sub_title"
                                            placeholder="News sub title">
                                    </div>
                                    @error('sub_title')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">News Date</label><span class="text-danger"> *</span>
                                        <input type="date" class="form-control" id="date" name="date"
                                            placeholder="News sub-title">
                                    </div>
                                    @error('date')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light waves-effect"
                                    data-bs-dismiss="modal">Close</button>
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
            $('.edit_log').on('click', function(e){
                var data = $(this).data('log');

                $('#title').val('');
                $('#sub_title').val('');
                // CKEDITOR.instances['details'].setData('');

                $('#id').val(data.id);
                $('#title').val(data.title);
                $('#sub_title').val(data.sub_title);
                $('#date').val(data.event_date);

            });
        });
    </script>

{{-- 
<script>
    CKEDITOR.replace('info_details');
    CKEDITOR.replace('edit_info_details');
</script> --}}
@endpush

@endsection
