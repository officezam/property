<!-- Left side column. contains the logo and sidebar -->
<aside class="left-side sidebar-offcanvas">
    <section class="sidebar ">
        <div class="page-sidebar  sidebar-nav">
            <div class="nav_icons">
                <ul class="sidebar_threeicons">
                    <li>
                        <a href="#">
                            <i class="livicon" data-name="hammer" title="Form Builder 1" data-loop="true" data-color="#42aaca" data-hc="#42aaca" data-s="25"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="livicon" data-name="list-ul" title="Form Builder 2" data-loop="true" data-color="#e9573f" data-hc="#e9573f" data-s="25"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="livicon" data-name="vector-square" title="Button Builder" data-loop="true" data-color="#f6bb42" data-hc="#f6bb42" data-s="25"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="livicon" data-name="new-window" title="Page Builder" data-loop="true" data-color="#37bc9b" data-hc="#37bc9b" data-s="25"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="clearfix"></div>
            <!-- BEGIN SIDEBAR MENU -->
            <ul id="menu" class="page-sidebar-menu">
                <li class="active">
                    <a href="{{ url('admin/dashboard') }}">
                        <i class="livicon" data-name="home" data-size="18" data-c="#418BCA" data-hc="#418BCA" data-loop="true"></i>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="livicon" data-name="leaf" data-size="18" data-c="#fff" data-hc="#fff" data-loop="true" ></i>
                        <span class="title">Property Listing</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li>

                            <a href="{{ url('/add_property') }}">
                                <i class="fa fa-angle-double-right"></i>
                                Add Property
                            </a>
                            <a href="{{ url('admin/property') }}">
                                <i class="fa fa-angle-double-right"></i>
                                <span class="title"> All Listing</span>
                            </a>

                            <a href="{{ url('admin/pending_property') }}">
                                <i class="fa fa-angle-double-right"></i>
                                Pending Listing
                            </a>
                            <a href="{{ url('admin/active_property') }}">
                                <i class="fa fa-angle-double-right"></i>
                                Active Listing
                            </a>
                            <a href="{{ url('admin/rejected_property') }}">
                                <i class="fa fa-angle-double-right"></i>
                                Rejected Listing
                            </a>

                            <a href="{{ url('admin/expire_property') }}">
                                <i class="fa fa-angle-double-right"></i>
                                Expire Listing
                            </a>


                        </li>

                    </ul>
                </li>



                <li class="active">
                    <a href="{{ url('admin/view_user') }}">
                        <i class="livicon" data-name="user" data-size="18" data-c="#fff" data-hc="#fff" data-loop="true" ></i>
                        <span class="title">My Profile</span>
                    </a>
                </li>

                @if( Auth::user()->BusinessType == 2 && Auth::user()->type != 'admin')
                <li class="">
                    <a href="#">
                        <i class="livicon" data-name="user-add" data-size="18" data-c="#fff" data-hc="#fff" data-loop="true" id="livicon-434" ></i>
                        <span class="title">Agents</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="sub-menu collapse" aria-expanded="false" style="height: 1px;">
                        <li id="active" class="active">
                            <a href="/admin/agents">
                                <i class="fa fa-angle-double-right"></i>
                                All  Agents
                            </a>
                        </li>
                        <li>
                            <a href="/admin/addagent">
                                <i class="fa fa-angle-double-right"></i>
                                Add New Agent
                            </a>
                        </li>
                    </ul>
                </li>
                @endif



                @if( Auth::user()->type == 'admin')

                    <li>
                        <a href="#">
                            <i class="livicon" data-name="bookmark" data-size="18" data-c="#fff" data-hc="#fff" data-loop="true" id="livicon-58" ></i>
                            <span class="title">Advertisements</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="sub-menu collapse" aria-expanded="false" style="height: 1px;">
                            <li id="active" class="active">
                                <a href="{{ url('admin/adds_form') }}">
                                    <i class="fa fa-angle-double-right"></i>
                                   Add Advertisement
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('admin/view_adds') }}">
                                    <i class="fa fa-angle-double-right"></i>
                                    Advertisements
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="livicon" data-name="gears" data-size="18" data-c="#fff" data-hc="#fff" data-loop="true" id="livicon-107" >  </i>
                            <span class="title">Property Setting</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="sub-menu">

                            <li class="active">
                                <a href="{{ url('admin/city') }}">
                                    <i class="livicon" data-name="vector-curve" data-size="18" data-c="#fff" data-hc="#fff" data-loop="true" ></i></i>
                                    <span class="title"> City</span>
                                </a>
                            </li>
                            <li class="active">
                                <a href="{{ url('admin/feature') }}">
                                    <i class="livicon" data-name="vector-curve" data-size="18" data-c="#fff" data-hc="#fff" data-loop="true" ></i>
                                    <span class="title"> Features</span>
                                </a>
                            </li>
                            <li class="active">
                                <a href="{{ url('admin/services') }}">
                                    <i class="livicon" data-name="vector-curve" data-size="18" data-c="#fff" data-hc="#fff" data-loop="true" ></i>
                                    <span class="title">Services</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="livicon" data-name="medal" data-size="18" data-c="#00bc8c" data-hc="#00bc8c" data-loop="true"></i>
                            <span class="title">Packages</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li>

                                <a href="{{ url('admin/add_package') }}">
                                    <i class="fa fa-angle-double-right"></i>
                                    Packages
                                </a>
                                <a href="{{ url('admin/permission') }}">
                                    <i class="fa fa-angle-double-right"></i>
                                    Package Listing
                                </a>

                                <a href="{{ url('admin/packagepermission') }}">
                                    <i class="fa fa-angle-double-right"></i>
                                    Package Permissions
                                </a>


                            </li>

                        </ul>
                    </li>

                    <li class="">
                        <a href="#">
                            <i class="livicon" data-name="users" data-size="18" data-c="#00bc8c" data-hc="#00bc8c" data-loop="true" id="livicon-40" style="width: 18px; height: 18px;"></i>
                            <span class="title">Users</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="sub-menu collapse" aria-expanded="false" style="height: 1px;">
                            <li id="active" class="active">
                                <a href="/admin/users">
                                    <i class="fa fa-angle-double-right"></i>
                                    All  Users
                                </a>
                            </li>
                            <li>
                                <a href="/admin/adduser">
                                    <i class="fa fa-angle-double-right"></i>
                                    Add New User
                                </a>
                            </li>
                            {{--<li>--}}
                            {{--<a href="/admin/view_user">--}}
                            {{--<i class="fa fa-angle-double-right"></i>--}}
                            {{--View User--}}
                            {{--</a>--}}
                            {{--</li>--}}
                            <li>
                                <a href="{{ url('admin/block_users')}}">
                                    <i class="fa fa-angle-double-right" ></i>
                                    Deleted Users
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#">
                            <i class="fa fa-gears" data-name="bookmark" data-size="18" data-c="#fff" data-hc="#fff" data-loop="true" id="livicon-58" ></i>
                            <span class="title">Website Setting </span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="sub-menu collapse" aria-expanded="false" style="height: 1px;">
                            <li id="active" class="active">
                                <a href="{{ url('admin/edit_aboutus') }}">
                                    <i class="fa fa-angle-double-right"></i>
                                    About Us
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('admin/edit_contact') }}">
                                    <i class="fa fa-angle-double-right"></i>
                                    Contact Us
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('admin/edit_socialAccount') }}">
                                    <i class="fa fa-angle-double-right"></i>
                                    Social Accounts
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('admin/edit_privacy_policy') }}">
                                    <i class="fa fa-angle-double-right"></i>
                                    Privacy & Policy
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('admin/edit_terms_condition') }}">
                                    <i class="fa fa-angle-double-right"></i>
                                    Terms & Conditions
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="active">
                        <a href="{{ url('admin/view_contactus') }}">
                            <i class="livicon" data-name="contact-us" data-size="18" data-c="#fff" data-hc="#fff" data-loop="true" ></i>
                            <span class="title">ContactUs View</span>
                        </a>
                    </li>

                    {{-- side bar admin site li --}}
                    {{--<li>--}}
                        {{--<a href="#">--}}
                            {{--<i class="livicon" data-name="medal" data-size="18" data-c="#00bc8c" data-hc="#00bc8c" data-loop="true"></i>--}}
                            {{--<span class="title"> Blog </span>--}}
                            {{--<span class="fa arrow"></span>--}}
                        {{--</a>--}}
                        {{--<ul class="sub-menu">--}}
                            {{--<li>--}}

                                {{--<a href="{{ url('admin/add_blogPost') }}">--}}
                                    {{--<i class="fa fa-angle-double-right"></i>--}}
                                    {{--Add Blog Post--}}
                                {{--</a>--}}
                                {{--<a href="{{ url('admin/view_blogPost') }}">--}}
                                    {{--<i class="fa fa-angle-double-right"></i>--}}
                                    {{--All Post View--}}
                                {{--</a>--}}
                            {{--</li>--}}

                        {{--</ul>--}}
                    {{--</li>--}}


                @endif;
            </ul>
            <!-- END SIDEBAR MENU -->
        </div>
    </section>
    <!-- /.sidebar -->
</aside>