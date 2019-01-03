@extends('admin.adminLayout.admin_design')

@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Site Controller</h4>
                <div class="d-flex align-items-center">

                </div>
            </div>

            <?php
            $current_user = Auth::user();
            ?>

            <div class="col-7 align-self-center">
                <div class="d-flex no-block justify-content-end align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{route('admin.dashboard')}}">Home</a>
                            </li>

                            <li class="breadcrumb-item active" aria-current="page">Site Controller</li>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
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


                        <form class="m-t-30" action="{{route('site.update',$site->id)}}" method="post" >
                            @csrf


                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="type" class="form-control" id="phone" name="phone" value="{{$site->phone}}">
                            </div>

                            <div class="form-group">
                                <label for="location">Location</label>
                                <input type="type" class="form-control" id="location" name="location" value="{{$site->location}}">
                            </div>



                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="type" class="form-control" id="email" name="email" value="{{$site->email}}" >
                            </div>



                            <div class="form-group">
                                <label for="facebook">Facebook</label>
                                <input type="type" class="form-control" id="facebook" name="facebook" value="{{$site->facebook}}">
                            </div>

                            <div class="form-group">
                                <label for="twitter">Twitter</label>
                                <input type="type" class="form-control" id="twitter" name="twitter" value="{{$site->twitter}}">
                            </div>

                            <div class="form-group">
                                <label for="gmail">Gmail</label>
                                <input type="type" class="form-control" id="gmail" name="gmail" value="{{$site->gmail}}">
                            </div>

                            <div class="form-group">
                                <label for="linkedin">Linked In</label>
                                <input type="type" class="form-control" id="linkedin" name="linkedin" value="{{$site->linkedin}}" >
                            </div>


                            <button type="submit" class="btn btn-primary">Update Info</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        </form>
    </div>
    @endsection