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

                            <li class="breadcrumb-item active" aria-current="page">About</li>
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
                @if(Session::has('flash_message_success'))
                    <div class="alert alert-success" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span class="text-success">x</span></button>
                        <strong class="text-success">{!! session('flash_message_success') !!}</strong>
                    </div>
                @endif


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">About Me</h4>


                                <form class="m-t-30" action="{{route('team.store')}}" method="post" enctype="multipart/form-data" >
                                    @csrf

                                    <div class="form-group">
                                        <label for="phone">Name</label>
                                        <input type="type" class="form-control" id="name" name="name" >
                                    </div>

                                    <div class="form-group">
                                        <label for="phone">Position</label>
                                        <input type="type" class="form-control" id="position" name="position" >
                                    </div>

                                    <div class="form-group">
                                        <label for="facebook">Facebook</label>
                                        <input type="type" class="form-control" id="facebook" name="facebook" >
                                    </div>

                                    <div class="form-group">
                                        <label for="twitter">Twitter</label>
                                        <input type="type" class="form-control" id="twitter" name="twitter" >
                                    </div>

                                    <div class="form-group">
                                        <label for="linkedin">Linked In</label>
                                        <input type="type" class="form-control" id="linkedin" name="linkedin">
                                    </div>

                                    <div class="form-group">
                                        <label for="image">Image</label>
                                        <input type="file" class="form-control" id="image" name="image" >
                                    </div>

                                    <button type="submit" class="btn btn-primary">Insert Team</button>
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

