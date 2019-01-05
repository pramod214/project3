<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <!-- User Profile-->
                <li>

                    <?php
                        $current_user = Auth::user();
                    ?>
                    <!-- User Profile-->
                    <div class="user-profile dropdown m-t-20">
                        <div class="user-pic">
                            <img src="{{asset('public/adminpanel/uploads/profile/'. $current_user->image)}}" alt="users" class="rounded-circle img-fluid" />
                        </div>
                        <div class="user-content hide-menu m-t-10">
                            <h5 class="m-b-10 user-name font-medium">{{$current_user->name}}</h5>
                            <a href="javascript:void(0)" class="btn btn-circle btn-sm m-r-5" id="Userdd" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="ti-settings"></i>
                            </a>
                            <a href="{{route('admin.logout')}}" title="Logout" class="btn btn-circle btn-sm">
                                <i class="ti-power-off"></i>
                            </a>
                            <div class="dropdown-menu animated flipInY" aria-labelledby="Userdd">
                                <a class="dropdown-item" href="{{route('admin.profile', $current_user->id)}}">
                                    <i class="ti-user m-r-5 m-l-5"></i> My Profile</a>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="ti-wallet m-r-5 m-l-5"></i> My Balance</a>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="ti-email m-r-5 m-l-5"></i> Inbox</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="ti-settings m-r-5 m-l-5"></i> Account Setting</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{route('admin.logout')}}">
                                    <i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                            </div>
                        </div>
                    </div>
                    <!-- End User Profile-->
                </li>
                <!-- User Profile-->
                <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('slider')}}" aria-expanded="false">
                                <i class="mdi mdi-content-paste"></i>
                                <span class="hide-menu">Slider</span>
                            </a>
                </li>

                <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('about')}}" aria-expanded="false">
                                <i class="mdi mdi-content-paste"></i>
                                <span class="hide-menu">About</span>
                            </a>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="icon-Car-Wheel"></i>
                        <span class="hide-menu">Services </span>
                    </a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item">
                            <a href="{{route('service.create')}}" class="sidebar-link">
                                <i class="icon-Record"></i>
                                <span class="hide-menu"> Create </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{route('service.view')}}" class="sidebar-link">
                                <i class="icon-Record"></i>
                                <span class="hide-menu"> View </span>
                            </a>
                        </li>


                    </ul>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="icon-Car-Wheel"></i>
                        <span class="hide-menu">Personal Skills </span>
                    </a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item">
                            <a href="{{route('personalskills.create')}}" class="sidebar-link">
                                <i class="icon-Record"></i>
                                <span class="hide-menu"> Create </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{route('personalskills.view')}}" class="sidebar-link">
                                <i class="icon-Record"></i>
                                <span class="hide-menu"> View </span>
                            </a>
                        </li>


                    </ul>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="icon-Car-Wheel"></i>
                        <span class="hide-menu">Professional Skills </span>
                    </a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item">
                            <a href="{{route('professionalskills.create')}}" class="sidebar-link">
                                <i class="icon-Record"></i>
                                <span class="hide-menu"> Create </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{route('professionalskills.view')}}" class="sidebar-link">
                                <i class="icon-Record"></i>
                                <span class="hide-menu"> View </span>
                            </a>
                        </li>


                    </ul>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('site')}}" aria-expanded="false">
                        <i class="mdi mdi-content-paste"></i>
                        <span class="hide-menu">Site</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="icon-Car-Wheel"></i>
                        <span class="hide-menu">Team </span>
                    </a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item">
                            <a href="{{route('team.create')}}" class="sidebar-link">
                                <i class="icon-Record"></i>
                                <span class="hide-menu"> Create </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{route('team.view')}}" class="sidebar-link">
                                <i class="icon-Record"></i>
                                <span class="hide-menu"> View </span>
                            </a>
                        </li>


                    </ul>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="icon-Car-Wheel"></i>
                        <span class="hide-menu">Portfolio</span>
                    </a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item">
                            <a href="{{route('createCategory')}}" class="sidebar-link">
                                <i class="icon-Record"></i>
                                <span class="hide-menu"> Create Category</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{route('viewCategory')}}" class="sidebar-link">
                                <i class="icon-Record"></i>
                                <span class="hide-menu"> View Category </span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a href="{{route('createPortfolio')}}" class="sidebar-link">
                                <i class="icon-Record"></i>
                                <span class="hide-menu"> Create Portfolio </span>
                            </a>
                        </li>


                        <li class="sidebar-item">
                            <a href="{{route('viewPortfolio')}}" class="sidebar-link">
                                <i class="icon-Record"></i>
                                <span class="hide-menu"> View Portfolio </span>
                            </a>
                        </li>



                    </ul>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="icon-Car-Wheel"></i>
                        <span class="hide-menu">Resume </span>
                    </a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item">
                            <a href="{{route('createResume')}}" class="sidebar-link">
                                <i class="icon-Record"></i>
                                <span class="hide-menu"> Create </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{route('viewResume')}}" class="sidebar-link">
                                <i class="icon-Record"></i>
                                <span class="hide-menu"> View </span>
                            </a>
                        </li>


                    </ul>
                </li>








            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
