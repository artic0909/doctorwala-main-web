<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Partner Profile</title>
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
                                    <h3 class="font-weight-bold">Your Profile Is Here !</h3>
                                    <h6 class="font-weight-normal mb-0"><span><i class="fa fa-stethoscope text-danger"
                                                aria-hidden="true"></i></span>&nbsp;You Can Easily Update Your Profile
                                    </h6>
                                </div>
                            </div>


                            <div class="row m-auto">
                                <div class="col-12 mt-4">


                                    <form method="POST" action="{{ route('partner.profile.update') }}">
                                        @csrf
                                        <div class="from-view row mt-4">
                                            <!-- Clinic Name, Contact Person, Mobile, Email, etc. -->


                                            <div class="col-12 form-group">
                                                <label for="partner_id" style="font-weight: 700;"><i class="fa fa-id-card text-primary" aria-hidden="true"></i> Partner ID <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="partner_id" value="{{ $partner->partner_id }}" style="height: 55px;" readonly>
                                            </div>



                                            <div class="col-4 form-group">
                                                <label for="partner_clinic_name" style="font-weight: 700;"><i class="fa fa-hospital text-primary" aria-hidden="true"></i> Clinic Name <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="partner_clinic_name" name="partner_clinic_name" value="{{ $partner->partner_clinic_name }}" style="height: 55px;">
                                            </div>
                                            <div class="col-4 form-group">
                                                <label for="partner_contact_person_name" style="font-weight: 700;"><i class="fa fa-user text-primary" aria-hidden="true"></i> Contact Person Name <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="partner_contact_person_name" name="partner_contact_person_name" value="{{ $partner->partner_contact_person_name }}" style="height: 55px;">
                                            </div>
                                            <div class="col-4 form-group">
                                                <label for="partner_mobile_number" style="font-weight: 700;"><i class="fa fa-phone text-primary" aria-hidden="true"></i> Mobile Number <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="partner_mobile_number" name="partner_mobile_number" value="{{ $partner->partner_mobile_number }}" style="height: 55px;">
                                            </div>
                                            <div class="col-4 form-group">
                                                <label for="partner_email" style="font-weight: 700;"><i class="fa fa-envelope text-primary" aria-hidden="true"></i> Email Id <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="partner_email" name="partner_email" value="{{ $partner->partner_email }}" style="height: 55px;">
                                            </div>
                                            <!-- State and City selection -->
                                            <div class="col-4 form-group">
                                                <label for="partner_state" style="font-weight: 700;"><i class="fa fa-globe text-primary" aria-hidden="true"></i> State <span class="text-danger">*</span></label>
                                                <select name="partner_state" id="partner_state" class="form-control" style="height: 55px;">
                                                    <option selected>{{ $partner->partner_state }}</option>
                                                    <option>--Select State--</option>
                                                    <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                                                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                                    <option value="Assam">Assam</option>
                                                    <option value="Bihar">Bihar</option>
                                                    <option value="Chandigarh">Chandigarh</option>
                                                    <option value="Chhattisgarh">Chhattisgarh</option>
                                                    <option value="Dadra and Nagar Haveli and Daman and Diu">Dadra and Nagar Haveli
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
                                                <label for="partner_city" style="font-weight: 700;"><i class="fa fa-building text-primary" aria-hidden="true"></i> City <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="partner_city" name="partner_city" value="{{ $partner->partner_city }}" style="height: 55px;">
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-center w-100">
                                            <button type="submit" class="btn btn-danger rounded">Update Profile</button>
                                        </div>
                                    </form>





                                    <div class="col-12 col-xl-8 mt-4 mb-xl-0">
                                        <h3 class="font-weight-bold">Security !</h3>
                                        <h6 class="font-weight-normal mb-0"><span><i
                                                    class="fa fa-stethoscope text-danger"
                                                    aria-hidden="true"></i></span>&nbsp;Change Your Password Securely
                                        </h6>
                                    </div>




                                    <form method="POST" action="{{ route('partner.password.update') }}">
                                        @csrf
                                        <div class="from-view row mt-4">
                                            <!-- Current Password, New Password, Confirm Password -->
                                            <div class="col-4 form-group">
                                                <label for="partner_password_existing" style="font-weight: 700;"><i class="fa fa-lock text-primary" aria-hidden="true"></i> Existing Password <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="partner_password_existing" value="*******************" required style="height: 55px;">
                                            </div>
                                            <div class="col-4 form-group">
                                                <label for="partner_password" style="font-weight: 700;"><i class="fa fa-unlock text-primary" aria-hidden="true"></i> New Password <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="partner_password" name="partner_password" required style="height: 55px;">
                                            </div>
                                            <div class="col-4 form-group">
                                                <label for="confirm_password" style="font-weight: 700;"><i class="fa fa-lock text-primary" aria-hidden="true"></i> Confirm Password <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="confirm_password" name="confirm_password" required style="height: 55px;">
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-center w-100">
                                            <button type="submit" class="btn btn-danger rounded">Update Password</button>
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




        <!-- profile update success modal start -->
        <div class="modal fade" id="profileUpdateSuccessModal" tabindex="-1" aria-labelledby="profileUpdateSuccessModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body d-flex flex-column align-middle justify-center align-items-center">
                        <h1 class="text-danger" style="font-weight: 700;"><span class="text-primary">+</span> SUCCESS <span class="text-primary">+</span></h1>
                        <h3 class="text-primary">Profile Updated Successfully</h3>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary rounded w-100" data-dismiss="modal">CLOSE</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- profile update success modal end -->

        <!-- profile update Unsuccess modal start -->
        <div class="modal fade" id="profileUpdateUnsuccessModal" tabindex="-1" aria-labelledby="profileUpdateUnsuccessModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body d-flex flex-column align-middle justify-center align-items-center">
                        <h1 class="text-danger" style="font-weight: 700;"><span class="text-primary">+</span> ERROR <span class="text-primary">+</span></h1>
                        <h3 class="text-danger">Profile Is Not Updated</h3>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary rounded w-100" data-dismiss="modal">CLOSE</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- profile update Unsuccess modal end -->


        <!-- password update success modal start -->
        <div class="modal fade" id="passwordUpdateSuccessModal" tabindex="-1" aria-labelledby="passwordUpdateSuccessModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body d-flex flex-column align-middle justify-center align-items-center">
                        <h1 class="text-danger" style="font-weight: 700;"><span class="text-primary">+</span> SUCCESS <span class="text-primary">+</span></h1>
                        <h3 class="text-primary">Password Updated Successfully</h3>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary rounded w-100" data-dismiss="modal">CLOSE</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- password update success modal end -->

        <!-- password update Unsuccess modal start -->
        <div class="modal fade" id="passwordUpdateUnsuccessModal" tabindex="-1" aria-labelledby="passwordUpdateUnsuccessModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body d-flex flex-column align-middle justify-center align-items-center">
                        <h1 class="text-danger" style="font-weight: 700;"><span class="text-primary">+</span> ERROR <span class="text-primary">+</span></h1>
                        <h3 class="text-danger">Password Is Not Updated</h3>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary rounded w-100" data-dismiss="modal">CLOSE</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- password update Unsuccess modal end -->



        @if(session('password_update_status') == 'success')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const successModal = new bootstrap.Modal(document.getElementById('passwordUpdateSuccessModal'));
                successModal.show();
            });
        </script>
        @elseif(session('password_update_status') == 'failure')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const failureModal = new bootstrap.Modal(document.getElementById('passwordUpdateUnsuccessModal'));
                failureModal.show();
            });
        </script>
        @endif

        @if(session('profile_update_status') == 'success')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const successModal = new bootstrap.Modal(document.getElementById('profileUpdateSuccessModal'));
                successModal.show();
            });
        </script>
        @elseif(session('profile_update_status') == 'failure')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const failureModal = new bootstrap.Modal(document.getElementById('profileUpdateUnsuccessModal'));
                failureModal.show();
            });
        </script>
        @endif




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