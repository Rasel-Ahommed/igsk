@extends('backoffice.layout.app')

@section('title', 'Team Card Content')

@section('content')


    @include('backoffice.layout.topBar')
    @include('backoffice.layout.sideBar')


    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <div class="page-title-box text-center">
                    <h4>Our team card content</h4>
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
                                                    <th data-priority="1">Card image</th>
                                                    <th data-priority="3">Title </th>
                                                    <th data-priority="3">Details</th>
                                                    <th data-priority="1">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($datas as $data)
                                                    <tr>
                                                        <th>{{ $loop->index + 1 }}</th>
                                                        <td><img src="{{$data->img}}" style="width:50px" alt="img"></td>
                                                        <td>{{$data->title}}</td>
                                                        <td>{!!$data->text!!}</td>
                                                        <td>
                                                            <div class="d-flex justify-content-center ">
                                                                <a href="" data-log = '{{$data}}'  id="bannerUpdate"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#editModal" class="edit_log"
                                                                    style="margin-right: 5px;">

                                                                    <i class="mdi mdi-account-edit-outline" 
                                                                        style="background: green;padding: 3px;color: white;font-size: 15px;cursor: pointer;border-radius: 3px; "></i>
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


                {{-- edit banner moddla  --}}
                
                <!-- sample modal content -->
                <div id="editModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title mt-0" id="myModalLabel">Update Card Content
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{route('update.CardContent')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="id" id="id">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Card image</label><span class="text-danger"> *</span>
                                        <input type="file" class="form-control" id="upd_img" accept="image/*"
                                            aria-describedby="emailHelp" name="image" placeholder="Banner image">
                                    </div>
                                    @error('image')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror


                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Title</label><span class="text-danger"> *</span>
                                        <input type="text" class="form-control" id="upd_title" name="title"
                                            placeholder="Enter Title">
                                    </div>
                                    @error('title')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Details</label><span class="text-danger">
                                            *</span>
                                        <textarea name="details" id="details" cols="40" rows="10"></textarea>
                                        @error('details')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>


                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light waves-effect"
                                    data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary waves-effect waves-light">Update</button>
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
         CKEDITOR.replace('details');


        $(document).ready(function() {
            $('.edit_log').on('click', function(e){
                var data = $(this).data('log');;

                $('#id').val(data.id);
                $('#upd_title').val(data.title);
                CKEDITOR.instances['details'].setData(data.text);;
            });
        });


    </script>
@endpush

@endsection
