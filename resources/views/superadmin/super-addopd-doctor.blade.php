<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Add OPD Doctors</title>

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
                                <div class="col-12">

                                    <h3 class="font-weight-bold">Add Partners</h3>



                                    <div class="row m-auto">
                                        <div class="col-12 mt-4">

                                            <form class="prof-view" action="{{ route('superadmin.add.doctor', $opd->id) }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="from-view row  mt-5">



                                                    <div class="col-3 form-group">
                                                        <label for="doctor_name" style="font-weight: 700;"><i
                                                                class="fa-solid fa-user-doctor text-primary"></i>
                                                            Doctor Name <span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" id="doctor_name" name="doctor_name"
                                                            style="height: 55px;" placeholder="Enter Doctor Name *">
                                                    </div>

                                                    <div class="col-3 form-group">
                                                        <label for="doctor_designation" style="font-weight: 700;"><i
                                                                class="fa fa-graduation-cap text-primary"
                                                                aria-hidden="true"></i> Designation <span
                                                                class="text-danger">*</span></label>
                                                        <select name="doctor_designation" id="doctor_designation" class="form-control" style="height: 55px;">
                                                            <option selected>---Select Designation---</option>
                                                            <option value="MD">MD</option>
                                                            <option value="Dr">Dr</option>
                                                            <option value="Prof">Prof</option>
                                                            <option value="BDS">BDS</option>
                                                        </select>
                                                    </div>



                                                    <div class="col-4 form-group">
                                                        <label for="doctor_specialist" style="font-weight: 700;"><i
                                                                class="fa fa-stethoscope text-primary" aria-hidden="true"></i>
                                                            Specialist <span class="text-danger">*</span></label>
                                                        <select name="doctor_specialist" id="doctor_specialist" class="form-control" style="height: 55px;">
                                                            <option selected>---Select Specialist---</option>
                                                            <option value="allergy_immunology">Allergy and Immunology</option>
                                                            <option value="anesthesiology">Anesthesiology</option>
                                                            <option value="cardiology">Cardiology</option>
                                                            <option value="dermatology">Dermatology</option>
                                                            <option value="endocrinology">Endocrinology</option>
                                                            <option value="emergency_medicine">Emergency Medicine</option>
                                                            <option value="family_medicine">Family Medicine</option>
                                                            <option value="gastroenterology">Gastroenterology</option>
                                                            <option value="general_surgery">General Surgery</option>
                                                            <option value="geriatrics">Geriatrics</option>
                                                            <option value="hematology">Hematology</option>
                                                            <option value="infectious_disease">Infectious Disease</option>
                                                            <option value="internal_medicine">Internal Medicine</option>
                                                            <option value="neurology">Neurology</option>
                                                            <option value="neurosurgery">Neurosurgery</option>
                                                            <option value="obstetrics_gynecology">Obstetrics and Gynecology
                                                            </option>
                                                            <option value="oncology">Oncology</option>
                                                            <option value="ophthalmology">Ophthalmology</option>
                                                            <option value="orthopedics">Orthopedics</option>
                                                            <option value="otolaryngology">Otolaryngology (ENT)</option>
                                                            <option value="pediatrics">Pediatrics</option>
                                                            <option value="plastic_surgery">Plastic Surgery</option>
                                                            <option value="psychiatry">Psychiatry</option>
                                                            <option value="pulmonology">Pulmonology</option>
                                                            <option value="radiology">Radiology</option>
                                                            <option value="rheumatology">Rheumatology</option>
                                                            <option value="sports_medicine">Sports Medicine</option>
                                                            <option value="urology">Urology</option>
                                                            <option value="vascular_surgery">Vascular Surgery</option>
                                                            <option value="nephrology">Nephrology</option>
                                                            <option value="pathology">Pathology</option>
                                                            <option value="palliative_care">Palliative Care</option>
                                                            <option value="physical_medicine_rehabilitation">Physical Medicine
                                                                and Rehabilitation</option>
                                                            <option value="proctology">Proctology</option>
                                                            <option value="thoracic_surgery">Thoracic Surgery</option>
                                                            <option value="genetics">Genetics</option>
                                                            <option value="nuclear_medicine">Nuclear Medicine</option>
                                                            <option value="pain_management">Pain Management</option>
                                                            <option value="public_health">Public Health</option>
                                                            <option value="pharmacology">Pharmacology</option>

                                                        </select>
                                                    </div>




                                                    <div class="col-2 form-group">
                                                        <label for="doctor_fees" style="font-weight: 700;"><i
                                                                class="fa fa-indian-rupee-sign text-primary"
                                                                aria-hidden="true"></i>
                                                            Doctor Fees <span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" id="doctor_fees" name="doctor_fees"
                                                            style="height: 55px;" placeholder="Enter Doctor Fees *">
                                                    </div>





                                                    <!-- multiple -->
                                                    <div id="add-same-section" class="row col-12">


                                                        <div class="col-3 form-group">
                                                            <label for="doctor_visit_day" style="font-weight: 700;"><i
                                                                    class="fa-solid fa-calendar-days text-primary"></i>
                                                                Day <span class="text-danger">*</span></label>
                                                            <select name="doctor_visit_day[]" id="doctor_visit_day" class="form-control" style="height: 55px;">
                                                                <option selected>---Select Day---</option>
                                                                <option value="All Day">All Day</option>
                                                                <option value="Monday">Monday</option>
                                                                <option value="Tuesday">Tuesday</option>
                                                                <option value="Wednesday">Wednesday</option>
                                                                <option value="Thursday">Thursday</option>
                                                                <option value="Friday">Friday</option>
                                                                <option value="Saturday">Saturday</option>
                                                                <option value="Sunday">Sunday</option>
                                                            </select>
                                                        </div>





                                                        <div class="col-4 form-group">
                                                            <label for="doctor_visit_start_time" style="font-weight: 700;"><i
                                                                    class="fa-solid fa-clock text-primary"></i> Time From
                                                                <span class="text-danger">*</span></label>

                                                            <input type="time" class="form-control" style="height: 55px;" id="doctor_visit_start_time" name="doctor_visit_start_time[]">
                                                        </div>





                                                        <div class="col-4 form-group">
                                                            <label for="doctor_visit_end_time" style="font-weight: 700;"><i
                                                                    class="fa-solid fa-clock-rotate-left text-primary"></i> Time
                                                                To
                                                                <span class="text-danger">*</span></label>

                                                            <div class="d-flex align-items-center">
                                                                <input type="time" class="form-control" style="height: 55px;" id="doctor_visit_end_time" name="doctor_visit_end_time[]">

                                                                <button type="button" id="add-section-button"
                                                                    class="btn btn-primary rounded col-3 ml-3"
                                                                    style="height: 55px; font-weight: 700;">ADD</button>
                                                            </div>
                                                        </div>







                                                    </div>




                                                    <div class="d-flex justify-content-center w-100">
                                                        <button type="submit" class="btn btn-danger rounded" style="height: 55px; font-weight: 700;">Upload
                                                            Details</button>
                                                    </div>




                                                </div>
                                            </form>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>





            </div>
















            <!-- partial:partials/_footer.html -->
            <!-- <footer class="footer">
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
            </footer> -->
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->













   
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



    <!-- add section JS -->
    <script src="{{asset('../partner-assets/js/add-section.js')}}"></script>



</body>

</html>