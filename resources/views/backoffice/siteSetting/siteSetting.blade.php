@extends('backoffice.layout.app')

@section('title', 'Site Setting')

@section('content')


    @include('backoffice.layout.topBar')
    @include('backoffice.layout.sideBar')


    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <div class="page-title-box text-center">
                    <h4>Site Setting</h4>

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
                                                    <th data-priority="1">logo</th>
                                                    <th data-priority="1">Facebook</th>
                                                    <th data-priority="3">Twitter</th>
                                                    <th data-priority="3">Whats App</th>
                                                    <th data-priority="3">Youtube</th>
                                                    <th data-priority="1">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($datas as $data)
                                                    <tr>
                                                        <th>{{$loop->index+1}}</th>
                                                        <th><img src="{{$data->image}}" alt="img" style="width: 40px;height:auto"></th>
                                                        <th>{{$data->facebook}}</th>
                                                        <th>{{$data->twitter}}</th>
                                                        <td>{{$data->whatsapp}}</td>
                                                        <td>{{$data->youtube}}</td>
                                                        <td>
                                                            <div class="d-flex justify-content-center ">
                                                                <a href="" data-log = '{{$data}}' id=""
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#editModal" class="edit_log"
                                                                    style="margin-right: 5px;">

                                                                    <i class="mdi mdi-account-edit-outline" 
                                                                        style="background: green;padding: 3px;color: white;font-size: 15px;cursor: pointer;border-radius: 3px; "></i>
                                                                </a>

                                                                {{-- <a id="delete-log" href=""
                                                                    onclick="return confirm('Delete?')">
                                                                    <i class="mdi mdi-delete"
                                                                        style="background: red; padding: 3px; color: white; font-size: 15px; cursor: pointer; border-radius: 3px;"></i>
                                                                </a> --}}

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
                <div id="editModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title mt-0" id="myModalLabel">Curriculum
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{route('update.siteSetting')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" id="id" name="id">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Logo</label><span class="text-danger"> *</span>
                                        <input type="file" class="form-control" id="title"
                                            aria-describedby="emailHelp" name="image" placeholder="Enter Title" accept="image/*">
                                    </div>
                                    @error('image')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                    
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Facebook</label><span class="text-danger"> *</span>
                                        <input type="text" class="form-control" id="facebook"
                                            aria-describedby="emailHelp" name="facebook" placeholder="Enter Title" >
                                    </div>
                                    @error('facebook')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Twitter</label><span class="text-danger"> *</span>
                                        <input type="text" class="form-control" id="twitter"
                                            aria-describedby="emailHelp" name="twitter" placeholder="Enter Title" >
                                    </div>
                                    @error('twitter')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Whats app</label><span class="text-danger"> *</span>
                                        <input type="text" class="form-control" id="whatsapp"
                                            aria-describedby="emailHelp" name="whatsapp" placeholder="Enter Title" >
                                    </div>
                                    @error('whatsapp')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Youtube</label><span class="text-danger"> *</span>
                                        <input type="text" class="form-control" id="youtube"
                                            aria-describedby="emailHelp" name="youtube" placeholder="Enter Title" >
                                    </div>
                                    @error('youtube')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror


                                    
                                    

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light waves-effect"
                                    data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary waves-effect waves-light">Update Site Setting</button>
                            </div>
                            </form>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->





                {{-- edit banner moddla  --}}
                {{-- <div id="editModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
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
                                <form action="" method="POST" enctype="multipart/form-data">
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
                </div><!-- /.modal --> --}}
            </div>
        </div>

    </div>



@push('scripts')
    <script>
        $(document).ready(function() {
            $('.edit_log').on('click', function(e){
                var data = $(this).data('log');

                $('#facebook').val('');
                $('#twitter').val('');
                $('#whatsapp').val('');
                $('#youtube').val('');
                // CKEDITOR.instances['details'].setData('');

                $('#id').val(data.id);
                $('#facebook').val(data.facebook);
                $('#twitter').val(data.twitter);
                $('#whatsapp').val(data.whatsapp);
                $('#youtube').val(data.youtube);

            });
        });
    </script>


<script>
    // CKEDITOR.replace('curriculum_title');
    // CKEDITOR.replace('edit_info_details');
</script>
@endpush

@endsection
