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
                               <h4 class="card-title">About Me</h4>


                               <form class="m-t-30" action="{{route('about.update')}}" method="post" >
                                 @csrf
                                   <div class="form-group">
                                       <label for="birthdate">Birthdate</label>
                                       <input type="text" class="form-control" id="birthdate" name="birthdate">

                                   </div>

                                   <div class="form-group">
                                       <label for="phone">Phone</label>
                                       <input type="type" class="form-control" id="phone" name="phone" >
                                   </div>

                                   <div class="form-group">
                                       <label for="details">Personal Details</label>
                                       <textarea rows="5" class="form-control form-control-line" name="details" ></textarea>
                                   </div>

                                   <div class="form-group">
                                       <label for="email">Email</label>
                                       <input type="type" class="form-control" id="email" name="email" >
                                   </div>

                                   <div class="form-group">
                                       <label for="skype">Skype</label>
                                       <input type="type" class="form-control" id="skype" name="skype" >
                                   </div>

                                   <div class="form-group">
                                       <label for="website">Website</label>
                                       <input type="type" class="form-control" id="website" name="website" >
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
                                       <label for="gmail">Gmail</label>
                                       <input type="type" class="form-control" id="gmail" name="gmail" >
                                   </div>

                                   <div class="form-group">
                                       <label for="linkedin">Linked In</label>
                                       <input type="type" class="form-control" id="linkedin" name="linkedin" >
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
