<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Super | Add Partners</title>

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



                                    <form class="prof-view" action="{{route('superadmin.register.partners')}}" method="post" enctype="multipart/form-data">
                                        @csrf


                                        <div class="from-view row  mt-3">

                                            <div class="col-12 form-group">
                                                <label for="name" style="font-weight: 700;"><i
                                                        class="fa-solid fa-sitemap text-primary"></i> Type
                                                    <span class="text-danger">*</span></label>

                                                <div class="group-main d-flex">
                                                    <div class="group ml-3">
                                                        <label for="opd" style="font-weight: 700;">OPD</label>
                                                        <input type="checkbox" name="registration_type[]" id="opd" value="OPD" style="cursor: pointer;">
                                                    </div>

                                                    <div class="group ml-3">
                                                        <label for="pathology" style="font-weight: 700;">Pathology</label>
                                                        <input type="checkbox" name="registration_type[]" id="pathology" value="Pathology" style="cursor: pointer;">
                                                    </div>

                                                    <div class="group ml-3">
                                                        <label for="doctor" style="font-weight: 700;">Doctor</label>
                                                        <input type="checkbox" name="registration_type[]" id="doctor" value="Doctor" style="cursor: pointer;">
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-4 form-group">
                                                <label for="partner_clinic_name" style="font-weight: 700;"><i
                                                        class="fa fa-hospital text-primary" aria-hidden="true"></i>
                                                    Clinic Name
                                                    <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="partner_clinic_name" name="partner_clinic_name"
                                                    style="height: 55px;">
                                            </div>



                                            <div class="col-4 form-group">
                                                <label for="partner_contact_person_name" style="font-weight: 700;"><i
                                                        class="fa-solid fa-user text-primary"></i>
                                                    Contact Person <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="partner_contact_person_name" name="partner_contact_person_name"
                                                    style="height: 55px;">
                                            </div>



                                            <div class="col-4 form-group">
                                                <label for="partner_mobile_number" style="font-weight: 700;"><i
                                                        class="fa fa-phone text-primary" aria-hidden="true"></i> Mobile
                                                    Number
                                                    <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="partner_mobile_number" name="partner_mobile_number"
                                                    style="height: 55px;">
                                            </div>




                                            <div class="col-4 form-group">
                                                <label for="partner_email" style="font-weight: 700;"><i
                                                        class="fa fa-envelope text-primary" aria-hidden="true"></i>
                                                    Email Id <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="partner_email" name="partner_email"
                                                    style="height: 55px;">
                                            </div>





                                            <div class="col-4 form-group">
                                                <label for="partner_landmark" style="font-weight: 700;"><i
                                                        class="fa fa-map-pin text-primary" aria-hidden="true"></i>
                                                    Landmark <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="partner_landmark" name="partner_landmark"
                                                    style="height: 55px;">
                                            </div>



                                            <div class="col-4 form-group">
                                                <label for="partner_pincode" style="font-weight: 700;"><i
                                                        class="fa fa-location-pin-lock text-primary"
                                                        aria-hidden="true"></i>
                                                    Pin Code <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="partner_pincode" name="partner_pincode"
                                                    style="height: 55px;">
                                            </div>



                                            <div class="col-4 form-group">
                                                <label style="font-weight: 700;"><i
                                                        class="fa fa-map-location-dot text-primary"
                                                        aria-hidden="true"></i>
                                                    Google Map <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control"
                                                    style="height: 55px;" readonly>
                                            </div>





                                            <div class="col-4 form-group">
                                                <label for="partner_state" style="font-weight: 700;"><i
                                                        class="fa-solid fa-globe text-primary"></i>
                                                    State <span class="text-danger">*</span></label>
                                                <select name="partner_state" id="partner_state" class="form-control" style="height: 55px;">
                                                    <option selected>Select State</option>
                                                    <option value="Andaman and Nicobar Islands">Andaman and Nicobar
                                                        Islands</option>
                                                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                                                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                                    <option value="Assam">Assam</option>
                                                    <option value="Bihar">Bihar</option>
                                                    <option value="Chandigarh">Chandigarh</option>
                                                    <option value="Chhattisgarh">Chhattisgarh</option>
                                                    <option value="Dadra and Nagar Haveli and Daman and Diu">Dadra and
                                                        Nagar Haveli
                                                        and Daman and Diu</option>
                                                    <option value="Delhi">Delhi</option>
                                                    <option value="Goa">Goa</option>
                                                    <option value="Gujarat">Gujarat</option>
                                                    <option value="Haryana">Haryana</option>
                                                    <option value="Himachal Pradesh">Himachal Pradesh</option>
                                                    <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                                    <option value="Jharkhand">Jharkhand</option>
                                                    <option value="Karnataka">Karnataka</option>
                                                    <option value="Kerala">Kerala</option>
                                                    <option value="Ladakh">Ladakh</option>
                                                    <option value="Lakshadweep">Lakshadweep</option>
                                                    <option value="Madhya Pradesh">Madhya Pradesh</option>
                                                    <option value="Maharashtra">Maharashtra</option>
                                                    <option value="Manipur">Manipur</option>
                                                    <option value="Meghalaya">Meghalaya</option>
                                                    <option value="Mizoram">Mizoram</option>
                                                    <option value="Nagaland">Nagaland</option>
                                                    <option value="Odisha">Odisha</option>
                                                    <option value="Puducherry">Puducherry</option>
                                                    <option value="Punjab">Punjab</option>
                                                    <option value="Rajasthan">Rajasthan</option>
                                                    <option value="Sikkim">Sikkim</option>
                                                    <option value="Tamil Nadu">Tamil Nadu</option>
                                                    <option value="Telangana">Telangana</option>
                                                    <option value="Tripura">Tripura</option>
                                                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                                                    <option value="Uttarakhand">Uttarakhand</option>
                                                    <option value="West Bengal">West Bengal</option>

                                                </select>
                                            </div>





                                            <div class="col-4 form-group">
                                                <label for="partner_city" style="font-weight: 700;"><i
                                                        class="fa-solid fa-city text-primary"></i> City
                                                    <span class="text-danger">*</span></label>

                                                <input type="text" name="partner_city" id="partner_city" class="form-control" style="height: 55px;">
                                            </div>




                                            <div class="col-12 form-group">
                                                <label for="partner_address" style="font-weight: 700;"><i
                                                        class="fa-solid fa-location-dot text-primary"></i> Address
                                                    <span class="text-danger">*</span></label>

                                                <textarea name="partner_address" id="partner_address" class="form-control" rows="7"></textarea>
                                            </div>



                                            <div class="col-6 form-group">
                                                <label for="partner_password" style="font-weight: 700;"><i
                                                        class="fa-solid fa-lock text-primary"></i> Password
                                                    <span class="text-danger">*</span></label>

                                                <input type="text" class="form-control" style="height: 55px;" id="partner_password" name="partner_password">
                                            </div>





                                            <div class="col-6 form-group">
                                                <label style="font-weight: 700;"><i
                                                        class="fa-solid fa-lock text-primary"></i> Confirm Password
                                                    <span class="text-danger">*</span></label>

                                                <input type="text" class="form-control" style="height: 55px;" readonly>
                                            </div>




                                            <div class="d-flex justify-content-center w-100">
                                                <button type="submit" class="btn btn-danger rounded" style="font-weight: 700;">Register Partner</button>
                                            </div>

                                        


                                    </form>
                                </div>






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
        document.addEventListener("DOMContentLoaded", function() {
            // Form validation
            const form = document.querySelector("form");
            const passwordField = document.getElementById("partner_password");
            const confirmPasswordField = document.querySelector("input[placeholder='Confirm Password *']");
            const opdCheckbox = document.getElementById("opd");
            const pathologyCheckbox = document.getElementById("pathology");
            const doctorCheckbox = document.getElementById("doctor");

            // Validate form before submission
            form.addEventListener("submit", function(e) {
                let valid = true;

                // Check password and confirm password
                if (passwordField.value !== confirmPasswordField.value) {
                    alert("Passwords do not match!");
                    valid = false;
                }

                // If not valid, prevent form submission
                if (!valid) {
                    e.preventDefault();
                }
            });

            // Handle registration type logic
            opdCheckbox.addEventListener("change", function() {
                if (this.checked) {
                    doctorCheckbox.checked = false;
                }
            });

            pathologyCheckbox.addEventListener("change", function() {
                if (this.checked) {
                    doctorCheckbox.checked = false;
                }
            });

            doctorCheckbox.addEventListener("change", function() {
                if (this.checked) {
                    opdCheckbox.checked = false;
                    pathologyCheckbox.checked = false;
                }
            });
        });
    </script>
</body>

</html>