@extends('admin.adminLayout.admin_design')

@section('content')
<div class="page-breadcrumb">
               <div class="row">
                   <div class="col-5 align-self-center">
                       <h4 class="page-title">Profile Page</h4>
                       <div class="d-flex align-items-center">

                       </div>
                   </div>
                   <div class="col-7 align-self-center">
                       <div class="d-flex no-block justify-content-end align-items-center">
                           <nav aria-label="breadcrumb">
                               <ol class="breadcrumb">
                                   <li class="breadcrumb-item">
                                       <a href="{{route('admin.dashboard')}}">Home</a>
                                   </li>
                                   <li class="breadcrumb-item active" aria-current="page">Profile</li>
                               </ol>
                           </nav>
                       </div>
                   </div>
               </div>
           </div>
           <!-- ============================================================== -->
           <!-- End Bread crumb and right sidebar toggle -->
           <!-- ============================================================== -->
           <!-- ============================================================== -->
           <!-- Container fluid  -->
           <!-- ============================================================== -->
           <div class="container-fluid">
               <!-- ============================================================== -->
               <!-- Start Page Content -->
               <!-- ============================================================== -->
               <!-- Row -->
               <div class="row">
                   <!-- Column -->
                   <div class="col-lg-4 col-xlg-3 col-md-5">
                       <div class="card">
                           <div class="card-body">
                               <center class="m-t-30"> <img src="{{asset('public/adminpanel/uploads/profile/'.$user->image)}}" class="rounded-circle" width="150" />
                                   <h4 class="card-title m-t-10">{{$user->name}}</h4>

                               </center>
                           </div>
                           <div>
                               <hr> </div>
                           <div class="card-body">
                            <small class="text-muted">Email address
                               <h6>{{$user->email}}</h6>
                            </small>
                            <small class="text-muted p-t-30 db">Phone
                               <h6>{{$user->phone}}</h6>
                            </small>
                            <small class="text-muted p-t-30 db">Address
                               <h6>{{$user->address}}</h6>
                             </small>

                               <br/>
                               <a href="{{$user->facebook}}" target="_blank" class="btn btn-circle btn-secondary"><i class="fab fa-facebook-f"></i></a>
                               <a href="{{$user->twitter}}" target="_blank"class="btn btn-circle btn-secondary"><i class="fab fa-twitter"></i></a>
                               <a href="{{$user->linkedin}}" target="_blank"class="btn btn-circle btn-secondary"><i class="fab fa-linkedin"></i></a>
                           </div>
                       </div>
                   </div>
                   <!-- Column -->
                   <!-- Column -->
                   <div class="col-lg-8 col-xlg-9 col-md-7">
                       <div class="card">
                           <!-- Tabs -->
                           <ul class="nav nav-pills custom-pills" id="pills-tab" role="tablist">

                               <li class="nav-item">
                                   <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#last-month" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</a>
                               </li>
                               <li class="nav-item">
                                   <a class="nav-link" id="pills-setting-tab" data-toggle="pill" href="#previous-month" role="tab" aria-controls="pills-setting" aria-selected="false">Setting</a>
                               </li>
                           </ul>
                           <!-- Tabs -->
                           <div class="tab-content" id="pills-tabContent">

                               <div class="tab-pane fade show active" id="last-month" role="tabpanel" aria-labelledby="pills-profile-tab">
                                   <div class="card-body">
                                       <div class="row">
                                           <div class="col-md-3 col-xs-6 b-r"> <strong>Full Name</strong>
                                               <br>
                                               <p class="text-muted">{{$user->name}}</p>
                                           </div>
                                           <div class="col-md-3 col-xs-6 b-r"> <strong>Mobile</strong>
                                               <br>
                                               <p class="text-muted">{{$user->phone}}</p>
                                           </div>
                                           <div class="col-md-3 col-xs-6 b-r"> <strong>Email</strong>
                                               <br>
                                               <p class="text-muted">{{$user->email}}</p>
                                           </div>
                                           <div class="col-md-3 col-xs-6"> <strong>Location</strong>
                                               <br>
                                               <p class="text-muted">{{$user->address}}</p>
                                           </div>
                                       </div>
                                       <hr>
                                       {{$user->about}}
                                     </hr>

                                   </div>
                               </div>
                               <div class="tab-pane fade" id="previous-month" role="tabpanel" aria-labelledby="pills-setting-tab">
                                   <div class="card-body">
                                       <form class="form-horizontal form-material" method="post" action="{{route('admin.update' , $user->id)}}" enctype="multipart/form-data">
                                         @csrf
                                           <div class="form-group">
                                               <label class="col-md-12">Name</label>
                                               <div class="col-md-12">
                                                   <input type="text" name="name" class="form-control form-control-line" value="{{$user->name}}">
                                               </div>
                                           </div>

                                           <div class="form-group">
                                               <label for="example-email" class="col-md-12">Email</label>
                                               <div class="col-md-12">
                                                 <input type="email" class="form-control form-control-line" name="email" value="{{$user->email}}" id="example-email">
                                               </div>
                                           </div>

                                           <div class="form-group">
                                               <label for="example-phone" class="col-md-12">Phone NO</label>
                                               <div class="col-md-12">
                                                   <input type="text"  class="form-control form-control-line" name="phone" value="{{$user->phone}}" id="example-phone">
                                               </div>
                                           </div>

                                           </div>

                                           <div class="form-group">
                                               <label class="col-md-12">About</label>
                                               <div class="col-md-12">
                                                   <textarea rows="5" class="form-control form-control-line" name="about" >
                                                     {{$user->about}}
                                                   </textarea>
                                               </div>
                                           </div>

                                           <div class="form-group">
                                        <label class="col-md-12">Address</label>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control form-control-line" name="address" value="{{$user->address}}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-12">Facebook</label>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control form-control-line" name="facebook" value="{{$user->facebook}}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-12">Twitter</label>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control form-control-line" name="twitter" value="{{$user->twitter}}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-12">Linkedin</label>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control form-control-line" name="linkedin" value="{{$user->linkedin}}">
                                        </div>
                                    </div>


                                           <div class="form-group">
                                        <label class="col-md-12">Image</label>
                                        <div class="col-md-12">
                                            <input type="file" class="form-control form-control-line" name="image">
                                        </div>
                                    </div>


                                           <div class="form-group">
                                               <div class="col-sm-12">
                                                   <input class="btn btn-success" type="submit" value="Update Profile"></input>
                                               </div>
                                           </div>
                                       </form>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
                   <!-- Column -->
               </div>
               <!-- Row -->
               <!-- ============================================================== -->
               <!-- End PAge Content -->
               <!-- ============================================================== -->
               <!-- ============================================================== -->
               <!-- Right sidebar -->
               <!-- ============================================================== -->
               <!-- .right-sidebar -->
               <!-- ============================================================== -->
               <!-- End Right sidebar -->
               <!-- ============================================================== -->
           </div>


  @endsection
