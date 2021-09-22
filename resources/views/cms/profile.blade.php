@extends('Pages.collection')
@section('content')
<div class="pcoded-inner-content">

    <div class="main-body">
        <div class="page-wrapper">

            <div class="page-header">
                <div class="row align-items-end">
                    <div class="col-lg-8">
                        <div class="page-header-title">
                            <div class="d-inline">
                                <h4>My Profile</h4>
                                <!--span>lorem ipsum dolor sit amet, consectetur adipisicing elit</!--span-->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="page-header-breadcrumb">
                            <ul class="breadcrumb-title">
                                <li class="breadcrumb-item">
                                    <a href="index.html"> <i class="feather icon-home"></i> </a>
                                </li>
                                <li class="breadcrumb-item"><a href="#!">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#!">My Profile</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>


            <div class="page-body">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="cover-profile">
                            <div class="profile-bg-img">
                                <img class="profile-bg-img img-fluid" src="../files/assets/images/user-profile/bg-img1.jpg" alt="bg-img">
                                <div class="card-block user-info">
                                    <div class="col-md-12">
                                        <div class="media-left">
                                            <a href="#" class="profile-image">
                                                <img class="user-img img-radius" src="../files/assets/images/user-profile/user-img.jpg" alt="user-img">
                                            </a>
                                        </div>
                                        <div class="media-body row">
                                            <div class="col-lg-12">
                                                <div class="user-title">
                                                    <h2>{{ auth()->user()->fname }} {{ " " }}{{ auth()->user()->mname }}{{ " " }} {{ auth()->user()->lname }} </h2>
                                                    <span class="text-white">Web designer</span>
                                                </div>
                                            </div>
                                            <div>
                                                <!--div class="pull-right cover-btn">
                                                    <button type="button" class="btn btn-primary m-r-10 m-b-5"><i class="icofont icofont-plus"></i> Follow</button>
                                                    <button type="button" class="btn btn-primary"><i class="icofont icofont-ui-messaging"></i> Message</button>
                                                </!--div-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">

                        <div class="tab-header card">
                            <ul class="nav nav-tabs md-tabs tab-timeline" role="tablist" id="mytab">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#personal" role="tab">Personal Information</a>
                                    <div class="slide"></div>
                                </li>



                            </ul>
                        </div>


                        <div class="tab-content">

                            <div class="tab-pane active" id="personal" role="tabpanel">

                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-header-text">About Me</h5>
                                        <button id="edit-btn" type="button" class="btn btn-sm btn-primary waves-effect waves-light f-right">
<i class="icofont icofont-edit"></i>
</button>
                                    </div>
                                    <div class="card-block">
                                        <div class="view-info">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="general-info">
                                                        <div class="row">
                                                            <div class="col-lg-12 col-xl-6">
                                                                <div class="table-responsive">
                                                                    <table class="table m-0">
                                                                        <tbody>
                                                                            <tr>
                                                                                <th scope="row">First Name</th>
                                                                                <td>{{ auth()->user()->fname }}</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row">Middle Name</th>
                                                                                <td>{{ auth()->user()->mname }}</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row">Last Name</th>
                                                                                <td>{{ auth()->user()->lname }}</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row">Role</th>
                                                                                <td>Manager</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row">Location</th>
                                                                                <td>{{ "Bukoba" }}</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-12 col-xl-6">
                                                                <div class="table-responsive">
                                                                    <table class="table">
                                                                        <tbody>
                                                                            <tr>
                                                                                <th scope="row">Email</th>
                                                                                <td> {{ auth()->user()->email }}</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row">Mobile Number</th>
                                                                                <td>{{ auth()->user()->phone }}</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row">Twitter</th>
                                                                                <td>@xyz</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row">Skype</th>
                                                                                <td>demo.skype</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row">Website</th>
                                                                                <td><a href="#!">www.demo.com</a></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="edit-info">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="general-info">
                                                        <div class="row">


                                                            <!--div class="col-lg-6">
                                                                <table class="table">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="input-group">
                                                                                    <span class="input-group-addon"><i class="icofont icofont-mobile-phone"></i></span>
                                                                                    <input type="text" class="form-control" placeholder="Mobile Number">
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="input-group">
                                                                                    <span class="input-group-addon"><i class="icofont icofont-social-twitter"></i></span>
                                                                                    <input type="text" class="form-control" placeholder="Twitter Id">
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td>
                                                                                <div class="input-group">
                                                                                    <span class="input-group-addon"><i class="icofont icofont-social-skype"></i></span>
                                                                                    <input type="email" class="form-control" placeholder="Skype Id">
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="input-group">
                                                                                    <span class="input-group-addon"><i class="icofont icofont-earth"></i></span>
                                                                                    <input type="text" class="form-control" placeholder="website">
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </!--div-->

                                                        </div>

                                                        <!--div class="text-center">
                                                            <a href="#!" class="btn btn-primary waves-effect waves-light m-r-20">Save</a>
                                                            <a href="#!" id="edit-cancel" class="btn btn-default waves-effect">Cancel</a>
                                                        </!--div-->
                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="card-header-text">Description About Me</h5>
                                                <button id="edit-info-btn" type="button" class="btn btn-sm btn-primary waves-effect waves-light f-right">
<i class="icofont icofont-edit"></i>
</button>
                                            </div>
                                            <div class="card-block user-desc">
                                                <div class="view-desc">
                                                    <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual

                                                    </p>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>





                            </div>




                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>

    <div id="styleSelector">
    </div>
</div>
@endsection
