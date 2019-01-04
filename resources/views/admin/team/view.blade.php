@extends('admin.adminLayout.admin_design')

@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Teams</h4>
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
                            <li class="breadcrumb-item active" aria-current="page">Teams</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Teams Edit</h4>
                        @if(Session::has('flash_message_success'))
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">x</button>
                                <strong>{!! session('flash_message_success') !!}</strong>
                            </div>
                        @endif

                        @if(Session::has('flash_message_info'))
                            <div class="alert alert-primary alert-block">
                                <button type="button" class="close" data-dismiss="alert">x</button>
                                <strong>{!! session('flash_message_info') !!}</strong>
                            </div>
                        @endif

                        @if(Session::has('flash_message_danger'))
                            <div class="alert alert-danger alert-block">
                                <button type="button" class="close" data-dismiss="alert">x</button>
                                <strong>{!! session('flash_message_danger') !!}</strong>
                            </div>
                        @endif
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>S.N</th>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Facebook</th>
                                    <th>Twitter</th>
                                    <th>Linkedin</th>
                                    <th>Image</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($teams as $team)
                                    <tr>
                                        <td>{{$loop->index +1}}</td>
                                        <td>{{$team->name}}</td>
                                        <td>
                                           {{$team->position}}
                                        </td>
                                        <td>{{$team->facebook}}</td>
                                        <td>{{$team->twitter}}</td>
                                        <td>{{$team->linkedin}}</td>
                                        <td>{{$team->image}}</td>
                                        <th>
                                            <a href="{{route('team.edit',$team->id)}}" class="btn btn-primary">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a id="delete_team" href="{{route('team.delete',$team->id)}}" class="btn btn-danger">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </th>
                                    </tr>
                                @endforeach
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection


@section('style')
    <link href="{{asset('public/adminpanel/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css')}}" rel="stylesheet">
@endsection

@section('script')
    <script src="{{asset('public/adminpanel/assets/extra-libs/DataTables/datatables.min.js')}}"></script>
    <script src="{{asset('public/adminpanel/dist/js/pages/datatable/datatable-basic.init.js')}}"></script>
    <script>
        $(document).ready(function () {
            $("#delete_team").click(function(){
                if(confirm('Are You Sure to delete')){
                    return true;
                }
                return false;
            });
        });
    </script>
@endsection