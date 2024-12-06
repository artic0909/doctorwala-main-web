<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>OPD Contact Person</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../partner-assets">
    <link rel="stylesheet" href="../partner-assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="../partner-assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../partner-assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="../partner-assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="../partner-assets/js/select.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../partner-assets/css/vertical-layout-light/style.css">
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
                <a class="navbar-brand brand-logo mr-5" href="/partnerpanel/partner-dashboard" style="font-weight: 900;"><img
                        src="{{asset('../img/logo3.png')}}" alt="logo"></a>
                <a class="navbar-brand brand-logo-mini" href="/partnerpanel/partner-dashboard"><img src="{{asset('fav5.png')}}"
                        alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <i class="fa-solid fa-bars"></i>
                </button>

                <ul class="navbar-nav navbar-nav-right">

                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                            <img src="{{asset('fav5.png')}}" alt="profile" />
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                            aria-labelledby="profileDropdown">
                            <a class="dropdown-item" href="partner-profile.html">
                                <i class="ti-settings text-primary"></i>
                                Settings
                            </a>


                            <form method="POST" action="{{ route('partner.logout') }}">
                                @csrf
                                <a class="dropdown-item" :href="route('partner.logout')"
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
                        <a class="nav-link" href="/partnerpanel/partner-dashboard">
                            <i class="fa-solid fa-chart-pie"></i>&nbsp; <span class="menu-title">Dashboard</span>
                        </a>
                    </li>



                    <!-- partner-profile -->
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false"
                            aria-controls="ui-basic">
                            <i class="fa fa-user" aria-hidden="true"></i>&nbsp; <span
                                class="menu-title">Profile</span><i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-basic">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="/partnerpanel/partner-profile">Partner
                                        Profile</a></li>
                                @if(in_array('OPD', $registrationTypes))
                                <li class="nav-item"> <a class="nav-link" href="/partnerpanel/partner-opd-contact">OPD
                                        Contact</a></li>
                                @endif

                                @if(in_array('Pathology', $registrationTypes))
                                <li class="nav-item"> <a class="nav-link"
                                        href="/partnerpanel/partner-pathology-contact">Pathology Contact</a></li>
                                @endif
                            </ul>
                        </div>
                    </li>




                    <!-- partner about clinic -->
                    <li class="nav-item">
                        <a class="nav-link" href="/partnerpanel/partner-about-clinic">
                            <i class="fa fa-info-circle" aria-hidden="true"></i>&nbsp; <span class="menu-title">About
                                Clinic</span>
                        </a>
                    </li>





                    <!-- partner service lists -->
                    <li class="nav-item">
                        <a class="nav-link" href="/partnerpanel/partner-service-lists">
                            <i class="fa fa-ambulance" aria-hidden="true"></i>&nbsp; <span class="menu-title">Service
                                Lists</span>
                        </a>
                    </li>




                    <!-- gallery -->
                    <li class="nav-item">
                        <a class="nav-link" href="/partnerpanel/partner-gallery">
                            <i class="fa-solid fa-image"></i>&nbsp; <span class="menu-title">Gallery</span>
                        </a>
                    </li>





                    @if(in_array('OPD', $registrationTypes))
                    <!-- OPD -->
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#ui-basic12" aria-expanded="false"
                            aria-controls="ui-basic12">
                            <i class="fa fa-user-doctor" aria-hidden="true"></i>&nbsp; <span
                                class="menu-title">OPD</span><i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-basic12">
                            <ul class="nav flex-column sub-menu">

                                <li class="nav-item"> <a class="nav-link" href="/partnerpanel/partner-opd">Upload OPD</a></li>

                                <li class="nav-item"> <a class="nav-link" href="/partnerpanel/partner-opd-show">Show OPD</a></li>

                            </ul>
                        </div>
                    </li>
                    @endif




                    @if(in_array('Pathology', $registrationTypes))
                    <!-- Pathology -->
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#ui-basic123" aria-expanded="false"
                            aria-controls="ui-basic123">
                            <i class="fa fa-syringe" aria-hidden="true"></i>&nbsp; <span
                                class="menu-title">Pathology</span><i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-basic123">
                            <ul class="nav flex-column sub-menu">

                                <li class="nav-item"> <a class="nav-link" href="/partnerpanel/partner-pathology">Upload Path</a>
                                </li>

                                <li class="nav-item"> <a class="nav-link" href="/partnerpanel/partner-pathology-show">Show
                                        Path</a></li>

                            </ul>
                        </div>
                    </li>
                    @endif



                    @if(in_array('Doctor', $registrationTypes))
                    <!-- Doctors -->
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#ui-basic1234" aria-expanded="false"
                            aria-controls="ui-basic1234">
                            <i class="fa fa-stethoscope" aria-hidden="true"></i>&nbsp; <span
                                class="menu-title">Doctor</span><i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-basic1234">
                            <ul class="nav flex-column sub-menu">

                                <li class="nav-item"> <a class="nav-link" href="/partnerpanel/partner-doctors">Upload Doctor</a>
                                </li>

                                <li class="nav-item"> <a class="nav-link" href="/partnerpanel/partner-doctors-show">Show
                                        Doctor</a></li>

                            </ul>
                        </div>
                    </li>
                    @endif




                    <!-- Inquiry from patients/user -->
                    <li class="nav-item">
                        <a class="nav-link" href="/partnerpanel/partner-inquiry-from-patients">
                            <i class="fa-solid fa-hand-holding-medical"></i>&nbsp; <span
                                class="menu-title">Inquiries</span>
                        </a>
                    </li>








                    <!-- Subsription management -->
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#ui-basic11" aria-expanded="false"
                            aria-controls="ui-basic11">
                            <i class="fa-solid fa-indian-rupee-sign"></i>&nbsp; <span
                                class="menu-title">Subsription</span><i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-basic11">
                            <ul class="nav flex-column sub-menu">

                                <li class="nav-item"> <a class="nav-link" href="/partnerpanel/partner-get-subscription">Get
                                        Subsription</a></li>

                                <li class="nav-item"> <a class="nav-link" href="/partnerpanel/partner-show-invoice">Invoice</a>
                                </li>

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

                                <li class="nav-item"> <a class="nav-link" href="/partnerpanel/partner-get-ticket">Get
                                        Ticket</a></li>

                                <li class="nav-item"> <a class="nav-link" href="/partnerpanel/partner-show-ticket">My Tickets</a>
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


                                    <!--This Form workings( If Not have Details it Work As Add details for only one time ,If any related details exist it work as update )  it add then update details in currently logged in user who is exist in dw_partner_models table-->
                                    <form class="prof-view" method="POST" action="{{ route('partner.opd.contact.store') }}">
                                        @csrf

                                        <div class="from-view row mt-2">
                                            <div class="col-4 form-group">
                                                <label for="clinic_registration_type" style="font-weight: 700;"><i
                                                        class="fa fa-sitemap text-primary" aria-hidden="true"></i> Type
                                                    <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="clinic_registration_type" name="clinic_registration_type"
                                                    value="{{ $contactDetails->clinic_registration_type ?? 'OPD' }}" style="height: 55px;" readonly>
                                            </div>

                                            <div class="col-4 form-group">
                                                <label for="clinic_contact_person_name" style="font-weight: 700;"><i
                                                        class="fa-solid fa-user text-primary"></i>
                                                    Authorized Name <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="clinic_contact_person_name" name="clinic_contact_person_name"
                                                    value="{{ $contactDetails->clinic_contact_person_name ?? '' }}" style="height: 55px;">
                                            </div>

                                            <div class="col-4 form-group">
                                                <label for="clinic_gstin" style="font-weight: 700;"><i
                                                        class="fa fa-hashtag text-primary" aria-hidden="true"></i> GSTIN
                                                </label>
                                                <input type="text" class="form-control" id="clinic_gstin" name="clinic_gstin"
                                                    value="{{ $contactDetails->clinic_gstin ?? '' }}" style="height: 55px;">
                                            </div>

                                            <div class="col-4 form-group">
                                                <label for="clinic_mobile_number" style="font-weight: 700;"><i
                                                        class="fa fa-phone text-primary" aria-hidden="true"></i> Mobile Number <span class="text-danger">*</span>
                                                </label>
                                                <input type="number" class="form-control" id="clinic_mobile_number" name="clinic_mobile_number"
                                                    value="{{ $contactDetails->clinic_mobile_number ?? '' }}" style="height: 55px;">
                                            </div>

                                            <div class="col-4 form-group">
                                                <label for="clinic_email" style="font-weight: 700;"><i
                                                        class="fa fa-envelope text-primary" aria-hidden="true"></i>
                                                    Email Id <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="clinic_email" name="clinic_email"
                                                    value="{{ $contactDetails->clinic_email ?? '' }}" style="height: 55px;">
                                            </div>

                                            <div class="col-4 form-group">
                                                <label for="clinic_landmark" style="font-weight: 700;"><i
                                                        class="fa fa-map-pin text-primary" aria-hidden="true"></i>
                                                    Landmark <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="clinic_landmark" name="clinic_landmark"
                                                    value="{{ $contactDetails->clinic_landmark ?? '' }}" style="height: 55px;">
                                            </div>

                                            <div class="col-4 form-group">
                                                <label for="clinic_pincode" style="font-weight: 700;"><i
                                                        class="fa fa-location-pin-lock text-primary" aria-hidden="true"></i>
                                                    Pin Code <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="clinic_pincode" name="clinic_pincode"
                                                    value="{{ $contactDetails->clinic_pincode ?? '' }}" style="height: 55px;">
                                            </div>

                                            <div class="col-4 form-group">
                                                <label for="clinic_state" style="font-weight: 700;"><i
                                                        class="fa-solid fa-globe text-primary"></i>
                                                    State <span class="text-danger">*</span></label>
                                                <select name="clinic_state" id="clinic_state" class="form-control" style="height: 55px;">
                                                    <option>--Select State--</option>
                                                    <option value="Andaman and Nicobar Islands" {{ (isset($contactDetails) && $contactDetails->clinic_state == 'Andaman and Nicobar Islands') ? 'selected' : '' }}>Andaman and Nicobar Islands</option>
                                                    <option value="Andhra Pradesh" {{ (isset($contactDetails) && $contactDetails->clinic_state == 'Andhra Pradesh') ? 'selected' : '' }}>Andhra Pradesh</option>
                                                    <option value="Arunachal Pradesh" {{ (isset($contactDetails) && $contactDetails->clinic_state == 'Arunachal Pradesh') ? 'selected' : '' }}>Arunachal Pradesh</option>
                                                    <option value="Assam" {{ (isset($contactDetails) && $contactDetails->clinic_state == 'Assam') ? 'selected' : '' }}>Assam</option>
                                                    <option value="Bihar" {{ (isset($contactDetails) && $contactDetails->clinic_state == 'Bihar') ? 'selected' : '' }}>Bihar</option>
                                                    <option value="Chandigarh" {{ (isset($contactDetails) && $contactDetails->clinic_state == 'Chandigarh') ? 'selected' : '' }}>Chandigarh</option>
                                                    <option value="Chhattisgarh" {{ (isset($contactDetails) && $contactDetails->clinic_state == 'Chhattisgarh') ? 'selected' : '' }}>Chhattisgarh</option>
                                                    <option value="Dadra and Nagar Haveli and Daman and Diu" {{ (isset($contactDetails) && $contactDetails->clinic_state == 'Dadra and Nagar Haveli and Daman and Diu') ? 'selected' : '' }}>Dadra and Nagar Haveli and Daman and Diu</option>
                                                    <option value="Delhi" {{ (isset($contactDetails) && $contactDetails->clinic_state == 'Delhi') ? 'selected' : '' }}>Delhi</option>
                                                    <option value="Goa" {{ (isset($contactDetails) && $contactDetails->clinic_state == 'Goa') ? 'selected' : '' }}>Goa</option>
                                                    <option value="Gujarat" {{ (isset($contactDetails) && $contactDetails->clinic_state == 'Gujarat') ? 'selected' : '' }}>Gujarat</option>
                                                    <option value="Haryana" {{ (isset($contactDetails) && $contactDetails->clinic_state == 'Haryana') ? 'selected' : '' }}>Haryana</option>
                                                    <option value="Himachal Pradesh" {{ (isset($contactDetails) && $contactDetails->clinic_state == 'Himachal Pradesh') ? 'selected' : '' }}>Himachal Pradesh</option>
                                                    <option value="Jammu and Kashmir" {{ (isset($contactDetails) && $contactDetails->clinic_state == 'Jammu and Kashmir') ? 'selected' : '' }}>Jammu and Kashmir</option>
                                                    <option value="Jharkhand" {{ (isset($contactDetails) && $contactDetails->clinic_state == 'Jharkhand') ? 'selected' : '' }}>Jharkhand</option>
                                                    <option value="Karnataka" {{ (isset($contactDetails) && $contactDetails->clinic_state == 'Karnataka') ? 'selected' : '' }}>Karnataka</option>
                                                    <option value="Kerala" {{ (isset($contactDetails) && $contactDetails->clinic_state == 'Kerala') ? 'selected' : '' }}>Kerala</option>
                                                    <option value="Ladakh" {{ (isset($contactDetails) && $contactDetails->clinic_state == 'Ladakh') ? 'selected' : '' }}>Ladakh</option>
                                                    <option value="Lakshadweep" {{ (isset($contactDetails) && $contactDetails->clinic_state == 'Lakshadweep') ? 'selected' : '' }}>Lakshadweep</option>
                                                    <option value="Madhya Pradesh" {{ (isset($contactDetails) && $contactDetails->clinic_state == 'Madhya Pradesh') ? 'selected' : '' }}>Madhya Pradesh</option>
                                                    <option value="Maharashtra" {{ (isset($contactDetails) && $contactDetails->clinic_state == 'Maharashtra') ? 'selected' : '' }}>Maharashtra</option>
                                                    <option value="Manipur" {{ (isset($contactDetails) && $contactDetails->clinic_state == 'Manipur') ? 'selected' : '' }}>Manipur</option>
                                                    <option value="Meghalaya" {{ (isset($contactDetails) && $contactDetails->clinic_state == 'Meghalaya') ? 'selected' : '' }}>Meghalaya</option>
                                                    <option value="Mizoram" {{ (isset($contactDetails) && $contactDetails->clinic_state == 'Mizoram') ? 'selected' : '' }}>Mizoram</option>
                                                    <option value="Nagaland" {{ (isset($contactDetails) && $contactDetails->clinic_state == 'Nagaland') ? 'selected' : '' }}>Nagaland</option>
                                                    <option value="Odisha" {{ (isset($contactDetails) && $contactDetails->clinic_state == 'Odisha') ? 'selected' : '' }}>Odisha</option>
                                                    <option value="Puducherry" {{ (isset($contactDetails) && $contactDetails->clinic_state == 'Puducherry') ? 'selected' : '' }}>Puducherry</option>
                                                    <option value="Punjab" {{ (isset($contactDetails) && $contactDetails->clinic_state == 'Punjab') ? 'selected' : '' }}>Punjab</option>
                                                    <option value="Rajasthan" {{ (isset($contactDetails) && $contactDetails->clinic_state == 'Rajasthan') ? 'selected' : '' }}>Rajasthan</option>
                                                    <option value="Sikkim" {{ (isset($contactDetails) && $contactDetails->clinic_state == 'Sikkim') ? 'selected' : '' }}>Sikkim</option>
                                                    <option value="Tamil Nadu" {{ (isset($contactDetails) && $contactDetails->clinic_state == 'Tamil Nadu') ? 'selected' : '' }}>Tamil Nadu</option>
                                                    <option value="Telangana" {{ (isset($contactDetails) && $contactDetails->clinic_state == 'Telangana') ? 'selected' : '' }}>Telangana</option>
                                                    <option value="Tripura" {{ (isset($contactDetails) && $contactDetails->clinic_state == 'Tripura') ? 'selected' : '' }}>Tripura</option>
                                                    <option value="Uttar Pradesh" {{ (isset($contactDetails) && $contactDetails->clinic_state == 'Uttar Pradesh') ? 'selected' : '' }}>Uttar Pradesh</option>
                                                    <option value="Uttarakhand" {{ (isset($contactDetails) && $contactDetails->clinic_state == 'Uttarakhand') ? 'selected' : '' }}>Uttarakhand</option>
                                                    <option value="West Bengal" {{ (isset($contactDetails) && $contactDetails->clinic_state == 'West Bengal') ? 'selected' : '' }}>West Bengal</option>

                                                </select>
                                            </div>

                                            <div class="col-4 form-group">
                                                <label for="clinic_city" style="font-weight: 700;"><i
                                                        class="fa-solid fa-city text-primary"></i> City
                                                    <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="clinic_city" name="clinic_city"
                                                    value="{{ $contactDetails->clinic_city ?? '' }}" style="height: 55px;">
                                            </div>

                                            <div class="col-12 form-group">
                                                <label for="clinic_google_map_link" style="font-weight: 700;"><i
                                                        class="fa-solid fa-map-location-dot text-primary"></i> Google Map
                                                </label>
                                                <input type="text" class="form-control" id="clinic_google_map_link" name="clinic_google_map_link"
                                                    value="{{ $contactDetails->clinic_google_map_link ?? '' }}" style="height: 55px;">
                                            </div>

                                            <div class="col-12 form-group">
                                                <label for="clinic_address" style="font-weight: 700;"><i
                                                        class="fa-solid fa-location-dot text-primary"></i> Address
                                                    <span class="text-danger">*</span></label>
                                                <textarea name="clinic_address" id="clinic_address" class="form-control" rows="7">{{ $contactDetails->clinic_address ?? '' }}</textarea>
                                            </div>

                                            <div class="d-flex justify-content-center w-100">
                                                <button type="submit" class="btn btn-danger rounded" style="padding-right: 60px; padding-left: 60px; font-weight: 700;">{{ isset($contactDetails) ? 'UPDATE' : 'SAVE' }}</button>
                                            </div>
                                        </div>
                                    </form>


                                </div>

                            </div>
                        </div>
                    </div>








                </div>

















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
    <script src="../partner-assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="../partner-assets/vendors/chart.js/Chart.min.js"></script>
    <script src="../partner-assets/vendors/datatables.net/jquery.dataTables.js"></script>
    <script src="../partner-assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
    <script src="../partner-assets/js/dataTables.select.min.js"></script>

    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../partner-assets/js/off-canvas.js"></script>
    <script src="../partner-assets/js/hoverable-collapse.js"></script>
    <script src="../partner-assets/js/template.js"></script>
    <script src="../partner-assets/js/settings.js"></script>
    <script src="../partner-assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="../partner-assets/js/dashboard.js"></script>
    <script src="../partner-assets/js/Chart.roundedBarCharts.js"></script>
    <!-- End custom js for this page-->
</body>

</html>