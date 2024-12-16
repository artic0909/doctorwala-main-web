<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Super | Edit OPD Details</title>

    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('../partner-assets')}}">
    <link rel="stylesheet" href="{{asset('../partner-assets/vendors/ti-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('../partner-assets/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('../partner-assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
    <link rel="stylesheet" href="{{asset('../partner-assets/vendors/ti-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('../partner-assets/js/select.dataTables.min.css')}}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('../partner-assets/css/vertical-layout-light/style.css')}}">
    <!-- endinject -->

    <link href="{{asset('fav5.png')}}" rel="icon">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
        integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />



</head>

<body>


    <div class="container-scroller">



        <!-- partial:partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo mr-5" href="/superadmin/super-dashboard" style="font-weight: 900;"><img
                        src="{{asset('../img/logo3.png')}}" alt="logo"></a>
                <a class="navbar-brand brand-logo-mini" href="/superadmin/super-dashboard"><img src="{{asset('fav5.png')}}"
                        alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <i class="fa-solid fa-bars"></i>
                </button>

                <input type="search" id="search" placeholder="Search Here ........" name="search"
                    class="form-control mx-4 w-100">

                <ul class="navbar-nav navbar-nav-right">

                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                            <img src="{{asset('fav5.png')}}" alt="profile" />
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                            aria-labelledby="profileDropdown">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a class="dropdown-item" :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    <i class="ti-power-off text-primary"></i>
                                    Logout
                                </a>
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>














        <!-- partial -->
        <div class="container-fluid page-body-wrapper">




            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">



                    <!-- dasboard -->
                    <li class="nav-item">
                        <a class="nav-link" href="/superadmin/super-dashboard">
                            <i class="fa-solid fa-chart-pie"></i>&nbsp; <span class="menu-title">Dashboard</span>
                        </a>
                    </li>



                    <!-- banners -->
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false"
                            aria-controls="ui-basic">
                            <i class="fa fa-image" aria-hidden="true"></i>&nbsp; <span
                                class="menu-title">Banners</span><i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-basic">
                            <ul class="nav flex-column sub-menu">

                                <li class="nav-item"> <a class="nav-link"
                                        href="/superadmin/super-home-banner">Home Banner</a></li>

                                <li class="nav-item"> <a class="nav-link"
                                        href="/superadmin/super-others-banner">Others Banner</a></li>


                            </ul>
                        </div>
                    </li>





                    <!-- all user lists -->
                    <li class="nav-item">
                        <a class="nav-link" href="/superadmin/super-all-user">
                            <i class="fa fa-user" aria-hidden="true"></i>&nbsp; <span class="menu-title">All User</span>
                        </a>
                    </li>



                    <!-- all partners lists -->
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#ui-basic12t" aria-expanded="false"
                            aria-controls="ui-basic12t">
                            <i class="fa fa-users" aria-hidden="true"></i>&nbsp; <span
                                class="menu-title">Partners</span><i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-basic12t">
                            <ul class="nav flex-column sub-menu">

                                <li class="nav-item"> <a class="nav-link"
                                        href="/superadmin/super-add-partners">Add Partners</a></li>

                                <li class="nav-item"> <a class="nav-link"
                                        href="/superadmin/super-all-partner">All Partners</a></li>

                            </ul>
                        </div>
                    </li>






                    <!-- all OPD lists -->
                    <li class="nav-item">
                        <a class="nav-link" href="/superadmin/super-all-opd">
                            <i class="fa fa-user-doctor" aria-hidden="true"></i>&nbsp; <span class="menu-title">All
                                OPD</span>
                        </a>
                    </li>


                    <!-- all pathology lists -->
                    <li class="nav-item">
                        <a class="nav-link" href="/superadmin/super-all-pathology">
                            <i class="fa fa-syringe" aria-hidden="true"></i>&nbsp; <span class="menu-title">All
                                Pathology</span>
                        </a>
                    </li>


                    <!-- all doctor lists -->
                    <li class="nav-item">
                        <a class="nav-link" href="/superadmin/super-all-doctors">
                            <i class="fa fa-stethoscope" aria-hidden="true"></i>&nbsp; <span class="menu-title">All
                                Doctors</span>
                        </a>
                    </li>



                    <!-- about us -->
                    <li class="nav-item">
                        <a class="nav-link" href="/superadmin/super-aboutus">
                            <i class="fa fa-info-circle" aria-hidden="true"></i>&nbsp; <span class="menu-title">About
                                Us</span>
                        </a>
                    </li>



                    <!-- blogs -->
                    <li class="nav-item">
                        <a class="nav-link" href="/superadmin/super-blogs">
                            <i class="fa fa-blog" aria-hidden="true"></i>&nbsp; <span class="menu-title">Add
                                Blogs</span>
                        </a>
                    </li>




                    <!-- user inquiry -->
                    <li class="nav-item">
                        <a class="nav-link" href="/superadmin/super-user-inquiry">
                            <i class="fa-solid fa-comment"></i>&nbsp; <span class="menu-title">User Inquiry</span>
                        </a>
                    </li>






                    <!-- coupon -->
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#ui-basic12" aria-expanded="false"
                            aria-controls="ui-basic12">
                            <i class="fa fa-gifts" aria-hidden="true"></i>&nbsp; <span
                                class="menu-title">Coupons</span><i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-basic12">
                            <ul class="nav flex-column sub-menu">

                                <li class="nav-item"> <a class="nav-link"
                                        href="/superadmin/super-add-coupons">Add Coupons</a></li>

                                <li class="nav-item"> <a class="nav-link"
                                        href="/superadmin/super-show-coupons">Show Coupons</a></li>

                            </ul>
                        </div>
                    </li>






                    <!-- subscription -->
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#ui-basic123" aria-expanded="false"
                            aria-controls="ui-basic123">
                            <i class="fa fa-coins" aria-hidden="true"></i>&nbsp; <span
                                class="menu-title">Subscription</span><i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-basic123">
                            <ul class="nav flex-column sub-menu">

                                <li class="nav-item"> <a class="nav-link"
                                        href="/superadmin/super-add-subscriptions">Add Subscriptions</a>
                                </li>

                                <li class="nav-item"> <a class="nav-link"
                                        href="/superadmin/super-show-subscription">Show
                                        Subscriptions</a></li>

                            </ul>
                        </div>
                    </li>





                    <!-- Inquiry from patients/user -->
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#ui-basic132" aria-expanded="false"
                            aria-controls="ui-basic132">
                            <i class="fa fa-hand-holding-medical" aria-hidden="true"></i>&nbsp; <span
                                class="menu-title">Inquiries</span><i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-basic132">
                            <ul class="nav flex-column sub-menu">

                                <li class="nav-item"> <a class="nav-link"
                                        href="/superadmin/super-opd-inquiry">All OPD Inq</a></li>

                                <li class="nav-item"> <a class="nav-link"
                                        href="/superadmin/super-path-inquiry">All Path Inq</a></li>


                                <li class="nav-item"> <a class="nav-link"
                                        href="/superadmin/super-doc-inquiry">All Doc Inq</a></li>


                            </ul>
                        </div>
                    </li>





                    <!-- Ticket management -->
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#ui-basic111" aria-expanded="false"
                            aria-controls="ui-basic111">
                            <i class="fa-solid fa-ticket"></i>&nbsp; <span class="menu-title">Tickets</span><i
                                class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-basic111">
                            <ul class="nav flex-column sub-menu">

                                <li class="nav-item"> <a class="nav-link"
                                        href="/superadmin/super-all-tickets">All
                                        Tickets</a></li>

                                <li class="nav-item"> <a class="nav-link"
                                        href="/superadmin/super-ticket-replies">Replies</a>
                                </li>

                            </ul>
                        </div>
                    </li>




                </ul>


            </nav>




            <!-- partial -->
            <div class="main-panel">






                <div class="content-wrapper">



                    <div class="row">
                        <div class="col-md-12 grid-margin">


                            <div class="row">
                                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                                    <h3 class="font-weight-bold">OPD Contact Person Details Is Here !</h3>
                                    <h6 class="font-weight-normal mb-0"><span><i class="fa fa-stethoscope text-danger"
                                                aria-hidden="true"></i></span>&nbsp;You Can Easily Update Your Profile
                                    </h6>
                                </div>
                            </div>


                            <div class="row m-auto">
                                <div class="col-12 mt-4">



                                    <form class="prof-view" method="POST" action="{{ route('superadmin.super-update-opd-details', $opd->id) }}">
                                        @csrf
                                        @method('PUT')

                                        <div class="from-view row mt-2">
                                            <div class="col-4 form-group">
                                                <label for="clinic_registration_type" style="font-weight: 700;"><i
                                                        class="fa fa-sitemap text-primary" aria-hidden="true"></i> Type
                                                    <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="clinic_registration_type" name="clinic_registration_type"
                                                    value="{{ $opd->clinic_registration_type ?? 'OPD' }}" style="height: 55px;" readonly>
                                            </div>

                                            <div class="col-4 form-group">
                                                <label for="clinic_contact_person_name" style="font-weight: 700;"><i
                                                        class="fa-solid fa-user text-primary"></i>
                                                    Authorized Name <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="clinic_contact_person_name" name="clinic_contact_person_name"
                                                    value="{{ $opd->clinic_contact_person_name ?? '' }}" style="height: 55px;">
                                            </div>

                                            <div class="col-4 form-group">
                                                <label for="clinic_gstin" style="font-weight: 700;"><i
                                                        class="fa fa-hashtag text-primary" aria-hidden="true"></i> GSTIN
                                                </label>
                                                <input type="text" class="form-control" id="clinic_gstin" name="clinic_gstin"
                                                    value="{{ $opd->clinic_gstin ?? '' }}" style="height: 55px;">
                                            </div>

                                            <div class="col-4 form-group">
                                                <label for="clinic_mobile_number" style="font-weight: 700;"><i
                                                        class="fa fa-phone text-primary" aria-hidden="true"></i> Mobile Number <span class="text-danger">*</span>
                                                </label>
                                                <input type="number" class="form-control" id="clinic_mobile_number" name="clinic_mobile_number"
                                                    value="{{ $opd->clinic_mobile_number ?? '' }}" style="height: 55px;">
                                            </div>

                                            <div class="col-4 form-group">
                                                <label for="clinic_email" style="font-weight: 700;"><i
                                                        class="fa fa-envelope text-primary" aria-hidden="true"></i>
                                                    Email Id <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="clinic_email" name="clinic_email"
                                                    value="{{ $opd->clinic_email ?? '' }}" style="height: 55px;">
                                            </div>

                                            <div class="col-4 form-group">
                                                <label for="clinic_landmark" style="font-weight: 700;"><i
                                                        class="fa fa-map-pin text-primary" aria-hidden="true"></i>
                                                    Landmark <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="clinic_landmark" name="clinic_landmark"
                                                    value="{{ $opd->clinic_landmark ?? '' }}" style="height: 55px;">
                                            </div>

                                            <div class="col-4 form-group">
                                                <label for="clinic_pincode" style="font-weight: 700;"><i
                                                        class="fa fa-location-pin-lock text-primary" aria-hidden="true"></i>
                                                    Pin Code <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="clinic_pincode" name="clinic_pincode"
                                                    value="{{ $opd->clinic_pincode ?? '' }}" style="height: 55px;">
                                            </div>

                                            <div class="col-4 form-group">
                                                <label for="clinic_state" style="font-weight: 700;"><i
                                                        class="fa-solid fa-globe text-primary"></i>
                                                    State <span class="text-danger">*</span></label>
                                                <select name="clinic_state" id="clinic_state" class="form-control" style="height: 55px;">
                                                    <option>--Select State--</option>
                                                    <option value="Andaman and Nicobar Islands" {{ (isset($opd) && $opd->clinic_state == 'Andaman and Nicobar Islands') ? 'selected' : '' }}>Andaman and Nicobar Islands</option>
                                                    <option value="Andhra Pradesh" {{ (isset($opd) && $opd->clinic_state == 'Andhra Pradesh') ? 'selected' : '' }}>Andhra Pradesh</option>
                                                    <option value="Arunachal Pradesh" {{ (isset($opd) && $opd->clinic_state == 'Arunachal Pradesh') ? 'selected' : '' }}>Arunachal Pradesh</option>
                                                    <option value="Assam" {{ (isset($opd) && $opd->clinic_state == 'Assam') ? 'selected' : '' }}>Assam</option>
                                                    <option value="Bihar" {{ (isset($opd) && $opd->clinic_state == 'Bihar') ? 'selected' : '' }}>Bihar</option>
                                                    <option value="Chandigarh" {{ (isset($opd) && $opd->clinic_state == 'Chandigarh') ? 'selected' : '' }}>Chandigarh</option>
                                                    <option value="Chhattisgarh" {{ (isset($opd) && $opd->clinic_state == 'Chhattisgarh') ? 'selected' : '' }}>Chhattisgarh</option>
                                                    <option value="Dadra and Nagar Haveli and Daman and Diu" {{ (isset($opd) && $opd->clinic_state == 'Dadra and Nagar Haveli and Daman and Diu') ? 'selected' : '' }}>Dadra and Nagar Haveli and Daman and Diu</option>
                                                    <option value="Delhi" {{ (isset($opd) && $opd->clinic_state == 'Delhi') ? 'selected' : '' }}>Delhi</option>
                                                    <option value="Goa" {{ (isset($opd) && $opd->clinic_state == 'Goa') ? 'selected' : '' }}>Goa</option>
                                                    <option value="Gujarat" {{ (isset($opd) && $opd->clinic_state == 'Gujarat') ? 'selected' : '' }}>Gujarat</option>
                                                    <option value="Haryana" {{ (isset($opd) && $opd->clinic_state == 'Haryana') ? 'selected' : '' }}>Haryana</option>
                                                    <option value="Himachal Pradesh" {{ (isset($opd) && $opd->clinic_state == 'Himachal Pradesh') ? 'selected' : '' }}>Himachal Pradesh</option>
                                                    <option value="Jammu and Kashmir" {{ (isset($opd) && $opd->clinic_state == 'Jammu and Kashmir') ? 'selected' : '' }}>Jammu and Kashmir</option>
                                                    <option value="Jharkhand" {{ (isset($opd) && $opd->clinic_state == 'Jharkhand') ? 'selected' : '' }}>Jharkhand</option>
                                                    <option value="Karnataka" {{ (isset($opd) && $opd->clinic_state == 'Karnataka') ? 'selected' : '' }}>Karnataka</option>
                                                    <option value="Kerala" {{ (isset($opd) && $opd->clinic_state == 'Kerala') ? 'selected' : '' }}>Kerala</option>
                                                    <option value="Ladakh" {{ (isset($opd) && $opd->clinic_state == 'Ladakh') ? 'selected' : '' }}>Ladakh</option>
                                                    <option value="Lakshadweep" {{ (isset($opd) && $opd->clinic_state == 'Lakshadweep') ? 'selected' : '' }}>Lakshadweep</option>
                                                    <option value="Madhya Pradesh" {{ (isset($opd) && $opd->clinic_state == 'Madhya Pradesh') ? 'selected' : '' }}>Madhya Pradesh</option>
                                                    <option value="Maharashtra" {{ (isset($opd) && $opd->clinic_state == 'Maharashtra') ? 'selected' : '' }}>Maharashtra</option>
                                                    <option value="Manipur" {{ (isset($opd) && $opd->clinic_state == 'Manipur') ? 'selected' : '' }}>Manipur</option>
                                                    <option value="Meghalaya" {{ (isset($opd) && $opd->clinic_state == 'Meghalaya') ? 'selected' : '' }}>Meghalaya</option>
                                                    <option value="Mizoram" {{ (isset($opd) && $opd->clinic_state == 'Mizoram') ? 'selected' : '' }}>Mizoram</option>
                                                    <option value="Nagaland" {{ (isset($opd) && $opd->clinic_state == 'Nagaland') ? 'selected' : '' }}>Nagaland</option>
                                                    <option value="Odisha" {{ (isset($opd) && $opd->clinic_state == 'Odisha') ? 'selected' : '' }}>Odisha</option>
                                                    <option value="Puducherry" {{ (isset($opd) && $opd->clinic_state == 'Puducherry') ? 'selected' : '' }}>Puducherry</option>
                                                    <option value="Punjab" {{ (isset($opd) && $opd->clinic_state == 'Punjab') ? 'selected' : '' }}>Punjab</option>
                                                    <option value="Rajasthan" {{ (isset($opd) && $opd->clinic_state == 'Rajasthan') ? 'selected' : '' }}>Rajasthan</option>
                                                    <option value="Sikkim" {{ (isset($opd) && $opd->clinic_state == 'Sikkim') ? 'selected' : '' }}>Sikkim</option>
                                                    <option value="Tamil Nadu" {{ (isset($opd) && $opd->clinic_state == 'Tamil Nadu') ? 'selected' : '' }}>Tamil Nadu</option>
                                                    <option value="Telangana" {{ (isset($opd) && $opd->clinic_state == 'Telangana') ? 'selected' : '' }}>Telangana</option>
                                                    <option value="Tripura" {{ (isset($opd) && $opd->clinic_state == 'Tripura') ? 'selected' : '' }}>Tripura</option>
                                                    <option value="Uttar Pradesh" {{ (isset($opd) && $opd->clinic_state == 'Uttar Pradesh') ? 'selected' : '' }}>Uttar Pradesh</option>
                                                    <option value="Uttarakhand" {{ (isset($opd) && $opd->clinic_state == 'Uttarakhand') ? 'selected' : '' }}>Uttarakhand</option>
                                                    <option value="West Bengal" {{ (isset($opd) && $opd->clinic_state == 'West Bengal') ? 'selected' : '' }}>West Bengal</option>

                                                </select>
                                            </div>

                                            <div class="col-4 form-group">
                                                <label for="clinic_city" style="font-weight: 700;"><i
                                                        class="fa-solid fa-city text-primary"></i> City
                                                    <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="clinic_city" name="clinic_city"
                                                    value="{{ $opd->clinic_city ?? '' }}" style="height: 55px;">
                                            </div>

                                            <div class="col-12 form-group">
                                                <label for="clinic_google_map_link" style="font-weight: 700;"><i
                                                        class="fa-solid fa-map-location-dot text-primary"></i> Google Map
                                                </label>
                                                <input type="text" class="form-control" id="clinic_google_map_link" name="clinic_google_map_link"
                                                    value="{{ $opd->clinic_google_map_link ?? '' }}" style="height: 55px;">
                                            </div>

                                            <div class="col-12 form-group">
                                                <label for="clinic_address" style="font-weight: 700;"><i
                                                        class="fa-solid fa-location-dot text-primary"></i> Address
                                                    <span class="text-danger">*</span></label>
                                                <textarea name="clinic_address" id="clinic_address" class="form-control" rows="7">{{ $opd->clinic_address ?? '' }}</textarea>
                                            </div>

                                            <div class="d-flex justify-content-center w-100">
                                                <button type="submit" class="btn btn-danger rounded" style="padding-right: 60px; padding-left: 60px; font-weight: 700;">UPDATE</button>
                                            </div>
                                        </div>
                                    </form>


                                </div>

                            </div>
                        </div>
                    </div>








                </div>








                <!-- floating right button -->
                <a type="button" class="btn btn-primary rounded btn-icon-text p-0 px-2 py-2 floating-btnn"
                    href="/superadmin/super-all-opd" style="width: fit-content;">
                    <i class="fa fa-2x fa-reply" aria-hidden="true" style="font-size: 1.7rem;"></i>
                </a>







                <!-- partial:partials/_footer.html -->
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2024. <a
                                href="https://doctorwala.info/" target="_blank">Doctorwala.info</a> -
                            All rights reserved.</span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Easy-To-Use & made with
                            <i class="ti-heart text-danger ml-1"></i></span>
                    </div>
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Developed by <a
                                href="https://github.com/artic0909" target="_blank">SaklinMustak</a></span>
                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->













    </div>
    <!-- container-scroller -->

    <!-- plugins:js -->
    <script src="{{asset('../partner-assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{asset('../partner-assets/vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('../partner-assets/vendors/datatables.net/jquery.dataTables.js')}}"></script>
    <script src="{{asset('../partner-assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
    <script src="{{asset('../partner-assets/js/dataTables.select.min.js')}}"></script>

    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{asset('../partner-assets/js/off-canvas.js')}}"></script>
    <script src="{{asset('../partner-assets/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('../partner-assets/js/template.js')}}"></script>
    <script src="{{asset('../partner-assets/js/settings.js')}}"></script>
    <script src="{{asset('../partner-assets/js/todolist.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{asset('../partner-assets/js/dashboard.js')}}"></script>
    <script src="{{asset('../partner-assets/js/Chart.roundedBarCharts.js')}}"></script>
    <!-- End custom js for this page-->









    <script>
        document.getElementById("add-button").addEventListener("click", function(event) {
            event.preventDefault(); // Prevent default link behavior

            const inputField = document.querySelector("#thisSectionAddAgainAfterClickAddBtn input");
            const inputValue = inputField.value.trim();

            if (inputValue) {
                // Create a new service item
                const serviceItem = document.createElement("div");
                serviceItem.className = "d-flex align-items-center mt-2";

                serviceItem.innerHTML = `
                    <input type="text" class="form-control" style="height: 55px;" value="${inputValue}" readonly>
                    <button class="btn btn-danger rounded ml-3 remove-button">REMOVE</button>
                `;

                // Append to the dynamic section
                document.getElementById("dynamic-services").appendChild(serviceItem);

                // Clear the input field
                inputField.value = "";

                // Add functionality to the remove button
                serviceItem.querySelector(".remove-button").addEventListener("click", function() {
                    serviceItem.remove();
                });
            } else {
                alert("Please enter a service name!");
            }
        });
    </script>
</body>

</html>