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

                            <li class="breadcrumb-item active" aria-current="page">Resume</li>
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
                @if(Session::has('flash_message_info'))
                    <div class="alert alert-info" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span class="text-danger">x</span></button>
                        <strong class="text-info">{!! session('flash_message_info') !!}</strong>
                    </div>
                @endif


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Resume</h4>


                                <form class="m-t-30" action="{{route('updateResume',$resumes->id)}}" method="post" id="add_resume">
                                    @csrf

                                    <div class="form-group">
                                        <label for="name">School Name</label>
                                        <input type="text" class="form-control" id="name" name="name" value="{{$resumes->name}}">

                                    </div>

                                    <div class="form-group">
                                        <label for="qualification">Qualification</label>
                                        <input type="text" class="form-control" id="qualification" name="qualification" value="{{$resumes->qualification}}">

                                    </div>


                                    <div class="form-group">
                                        <label for="date">Year</label>
                                        <input type="text" class="form-control" id="date" name="date" value="{{$resumes->date}}">

                                    </div>

                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <input type="text" class="form-control" id="address" name="address" value="{{$resumes->address}}">

                                    </div>

                                    <div class="form-group">
                                        <label for="body">Content</label>
                                        <textarea rows="5" class="form-control form-control-line" name="body" id="body">{{$resumes->body}}</textarea>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Update Resume</button>
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
    <script src="{{asset('public/js/jquery.validate.js')}}">
    </script>

    <script type="text/javascript">
        $(document).ready(function(){
            $("#add_resume").validate({
                rules: {
                    name: {
                        required:true
                    },
                    qualification: {
                        required:true
                    },
                    date: {
                        required:true
                    },
                    body: {
                        required:true
                    },
                    address: {
                        required:true
                    }
                },

                message: {
                    name: {
                        required: "<span class='text-danger'>You cannot Leave Name Field Blank</span>"
                    },
                    qualification: {
                        required:"<span class='text-danger'>You need to enter qualification</span>"
                    },
                    date: {
                        required: "<span class='text-danger'>You need to enter date</span>"
                    },
                    body: {
                        required:"<span class='text-danger'>You need to enter content</span>"
                    },
                    address: {
                        required:"<span class='text-danger'>You need to enter address</span>"
                    }

                }
            });
        });
    </script>

@endsection
