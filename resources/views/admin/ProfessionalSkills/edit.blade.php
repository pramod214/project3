@extends('admin.adminLayout.admin_design')

@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">

            </div>



            <div class="col-7 align-self-center">
                <div class="d-flex no-block justify-content-end align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{route('admin.dashboard')}}">Home</a>
                            </li>

                            <li class="breadcrumb-item active" aria-current="page">Professional Skills</li>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- row -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Professional Skills</h4>
                                @if(Session::has('flash_message_success'))
                                    <div class="alert alert-success" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span class="text-success">x</span></button>
                                        <strong class="text-info">{!! session('flash_message_success') !!}</strong>
                                    </div>
                                @endif

                                <form class="m-t-30" action="{{route('professionalskills.update',$professional->id)}}" method="post" id="add_professionalskills">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" name="name" value="{{$professional->name}}" >

                                    </div>

                                    <div class="form-group">
                                        <label for="percentage">Percentage</label>
                                        <input type="text" class="form-control" id="percentage" name="percentage" value="{{$professional->percentage}}" >

                                    </div>



                                    <button type="submit" class="btn btn-primary">Update Info</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                </form>
            </div>
        </div>
    </div>
    </div>

    </div>
    </div>
@endsection

@section('script')
    <script src="{{asset('public/adminpanel/vendor/jquery/jquery.validate.js')}}">
    </script>

    <script type="text/javascript">
        $(document).ready(function(){
            $("#add_professionalskills").validate({
                rules: {
                    name: {
                        required:true
                    },
                    percentage: {
                        required:true
                    }
                },

                message: {
                    name: {
                        required: "<span class='text-danger'>You cannot Leave Name Field Blank</span>"
                    },
                    percentage: {
                        required:"<span class='text-danger'>You need to enter percentage</span>"
                    }

                }
            });
        });
    </script>
@endsection

