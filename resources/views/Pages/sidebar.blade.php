
<nav class="pcoded-navbar">
    <div class="pcoded-inner-navbar main-menu">
        <div class="pcoded-navigatio-lavel">Customer MS</div>
        <ul class="pcoded-item pcoded-left-item">
            <li class="pcoded-hasmenu active pcoded-trigger">
                <a href="{{ route('dashboard') }}">
                    <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                    <span class="pcoded-mtext">Dashboard</span>
                </a>
            </li>
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="feather icon-sidebar"></i></span>
                    <span class="pcoded-mtext">CMS</span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" pcoded-hasmenu">
                        <a href="javascript:void(0)">
                            <span class="pcoded-mtext">Customers</span>
                        </a>
                        <ul class="pcoded-submenu">

                            @can('Register_Customer')
                            <li class=" ">
                            <a href="{{ route('Register_customer') }}">
                            <span class="pcoded-mtext">Registration</span>
                            </a>
                            </li>
                            @endcan

                              
                            <li class=" ">
                                <a href="{{ route('Registered_customer') }}">
                                    <span class="pcoded-mtext">Registered customers</span>
                                </a>
                            </li>

                            <li class=" ">
                                <a href="{{ route('customer') }}">
                                    <span class="pcoded-mtext">Edit</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="{{ route('delete_customer') }}">
                                    <span class="pcoded-mtext">Delete</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="menu-sidebar.html">
                                    <span class="pcoded-mtext">Update</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </li>

            <li class="pcoded-hasmenu">


                @can('view_Menu')

                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="feather icon-settings"></i></span>
                    <span class="pcoded-mtext">Configuration</span>
                </a>
                <ul class="pcoded-submenu">

                    <li class="pcoded-hasmenu ">
                        <a href="javascript:void(0)">
                        <span class="pcoded-micon"><i class="feather icon-sidebar"></i></span>
                            <span class="pcoded-mtext">Users</span>
                        </a>
                        <ul class="pcoded-submenu">


                            <li >
                                <a href="{{ route('Register_user') }}">
                                    <span class="pcoded-mtext">Register User</span>
                                </a>
                            </li>

                            c
                            <li >
                                <a href="{{ route('manage_users') }}">
                                    <span class="pcoded-mtext">Manage Users</span>
                                </a>
                            </li>



                        </ul>


                    </li>

                    <li class="pcoded-hasmenu">
                        <a href="javascript:void(0)">
                            <span class="pcoded-micon"><i class="feather icon-sidebar"></i></span>
                            <span class="pcoded-mtext">Categories</span>
                        </a>
                        <ul class="pcoded-submenu">
                            <li >
                                <a href="{{ route('Register_category') }}">
                                    <span class="pcoded-mtext">Register Category</span>
                                </a>
                            </li>

                                    <li class=" ">
                                        <a href="{{ route('category') }}">
                                            <span class="pcoded-mtext">Update or delete</span>
                                        </a>
                                    </li>


                            </li>

                        </ul>
                    </li>

                   </li>

                </ul>


            </li>
            @endcan

            <!-- DB setup -->
            @can('DB-setup')
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="feather icon-disc"></i></span>
                    <span class="pcoded-mtext">Roles And Permissions</span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" pcoded-hasmenu">
                        <a href="javascript:void(0)">
                            <span class="pcoded-mtext">Roles</span>
                        </a>
                        <ul class="pcoded-submenu">
                            <li class=" ">
                                <a href="{{ route('Register_role') }}">
                                    <span class="pcoded-mtext">Register Roles</span>
                                </a>

                            </li>
                            <li class=" ">
                                <a href="{{ route('manage_role') }}">
                                    <span class="pcoded-mtext">Manage Roles</span>
                                </a>
                            </li>

                        </ul>
                    </li>

                </ul>

                <ul class="pcoded-submenu">
                    <li class=" pcoded-hasmenu">
                        <a href="javascript:void(0)">
                            <span class="pcoded-mtext">Permission</span>
                        </a>
                        <ul class="pcoded-submenu">
                            <li class=" ">


                                <a href="{{ route('Register_permission') }}">
                                    <span class="pcoded-mtext">Register Permissions</span>
                                </a>

                            </li>
                            <li class=" ">
                                <a href="{{ route('manage_permission') }}">
                                    <span class="pcoded-mtext">Manage Permissions</span>
                                </a>
                            </li>

                        </ul>
                    </li>

                </ul>

                <ul class="pcoded-submenu">
                    <li class=" pcoded-hasmenu">
                        <a href="javascript:void(0)">
                            <span class="pcoded-mtext">Actions</span>
                        </a>
                        <ul class="pcoded-submenu">
                            <li class=" ">


                                <a href="{{ route('assignPerToRole') }}">
                                    <span class="pcoded-mtext">Assign Roles Permission</span>
                                </a>

                            </li>
                            <li class=" ">
                                <a href="">
                                    <span class="pcoded-mtext">Remove Roles Permission</span>
                                </a>
                            </li>

                        </ul>
                    </li>

                </ul>

            </li>
            @endcan
            <!-- End  DB setup -->

        </ul>



    </div>
</nav>
