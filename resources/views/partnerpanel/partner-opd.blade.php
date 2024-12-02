<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Partner OPD Details Upload</title>
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

    <link href="../img/fav5.png" rel="icon">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
        integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>


    <div class="container-scroller">



        <!-- partial:partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo mr-5" href="partner-dashboard.html" style="font-weight: 900;"><img
                        src="../img/logo3.png" alt="logo"></a>
                <a class="navbar-brand brand-logo-mini" href="partner-dashboard.html"><img src="../img/fav5.png"
                        alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <i class="fa-solid fa-bars"></i>
                </button>

                <ul class="navbar-nav navbar-nav-right">

                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                            <img src="../IMG/empty.jpg" alt="profile" />
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                            aria-labelledby="profileDropdown">
                            <a class="dropdown-item" href="partner-profile.html">
                                <i class="ti-settings text-primary"></i>
                                Settings
                            </a>
                            <a class="dropdown-item">
                                <i class="ti-power-off text-primary"></i>
                                Logout
                            </a>
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
                        <a class="nav-link" href="partner-dashboard.html">
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
                                <li class="nav-item"> <a class="nav-link" href="partner-profile.html">Partner
                                        Profile</a></li>

                                <li class="nav-item"> <a class="nav-link" href="partner-opd-contact.html">OPD
                                        Contact</a></li>

                                <li class="nav-item"> <a class="nav-link"
                                        href="partner-pathology-contact.html">Pathology Contact</a></li>
                            </ul>
                        </div>
                    </li>




                    <!-- partner about clinic -->
                    <li class="nav-item">
                        <a class="nav-link" href="partner-about-clinic.html">
                            <i class="fa fa-info-circle" aria-hidden="true"></i>&nbsp; <span class="menu-title">About
                                Clinic</span>
                        </a>
                    </li>





                    <!-- partner service lists -->
                    <li class="nav-item">
                        <a class="nav-link" href="partner-service-lists.html">
                            <i class="fa fa-ambulance" aria-hidden="true"></i>&nbsp; <span class="menu-title">Service
                                Lists</span>
                        </a>
                    </li>




                    <!-- gallery -->
                    <li class="nav-item">
                        <a class="nav-link" href="partner-gallery.html">
                            <i class="fa-solid fa-image"></i>&nbsp; <span class="menu-title">Gallery</span>
                        </a>
                    </li>






                    <!-- OPD -->
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#ui-basic12" aria-expanded="false"
                            aria-controls="ui-basic12">
                            <i class="fa fa-user-doctor" aria-hidden="true"></i>&nbsp; <span
                                class="menu-title">OPD</span><i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-basic12">
                            <ul class="nav flex-column sub-menu">

                                <li class="nav-item"> <a class="nav-link" href="partner-opd.html">Upload OPD</a></li>

                                <li class="nav-item"> <a class="nav-link" href="partner-opd-show.html">Show OPD</a></li>

                            </ul>
                        </div>
                    </li>






                    <!-- Pathology -->
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#ui-basic123" aria-expanded="false"
                            aria-controls="ui-basic123">
                            <i class="fa fa-syringe" aria-hidden="true"></i>&nbsp; <span
                                class="menu-title">Pathology</span><i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-basic123">
                            <ul class="nav flex-column sub-menu">

                                <li class="nav-item"> <a class="nav-link" href="partner-pathology.html">Upload Path</a>
                                </li>

                                <li class="nav-item"> <a class="nav-link" href="partner-pathology-show.html">Show
                                        Path</a></li>

                            </ul>
                        </div>
                    </li>





                    <!-- Doctors -->
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#ui-basic1234" aria-expanded="false"
                            aria-controls="ui-basic1234">
                            <i class="fa fa-stethoscope" aria-hidden="true"></i>&nbsp; <span
                                class="menu-title">Doctor</span><i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-basic1234">
                            <ul class="nav flex-column sub-menu">

                                <li class="nav-item"> <a class="nav-link" href="partner-doctors.html">Upload Doctor</a>
                                </li>

                                <li class="nav-item"> <a class="nav-link" href="partner-doctors-show.html">Show
                                        Doctor</a></li>

                            </ul>
                        </div>
                    </li>





                    <!-- Inquiry from patients/user -->
                    <li class="nav-item">
                        <a class="nav-link" href="partner-inquiry-from-patients.html">
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

                                <li class="nav-item"> <a class="nav-link" href="partner-get-subscription.html">Get
                                        Subsription</a></li>

                                <li class="nav-item"> <a class="nav-link" href="partner-show-invoice.html">Invoice</a>
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

                                <li class="nav-item"> <a class="nav-link" href="partner-get-ticket.html">Get
                                        Ticket</a></li>

                                <li class="nav-item"> <a class="nav-link" href="partner-show-ticket.html">My Tickets</a>
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
                                    <h3 class="font-weight-bold">Add OPD Details !</h3>
                                    <h6 class="font-weight-normal mb-0"><span><i class="fa fa-stethoscope text-danger"
                                                aria-hidden="true"></i></span>&nbsp;Upload details of all the doctors in
                                        your clinic for users to view.
                                    </h6>
                                </div>
                            </div>


                            <div class="row m-auto">
                                <div class="col-12 mt-4">

                                    <form class="prof-view">






                                        <div class="from-view row  mt-5">



                                            <div class="col-3 form-group">
                                                <label for="name" style="font-weight: 700;"><i
                                                        class="fa-solid fa-user-doctor text-primary"></i>
                                                    Doctor Name <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="name" name="name"
                                                    value="xyz clinic" style="height: 55px;">
                                            </div>

                                            <div class="col-3 form-group">
                                                <label for="name" style="font-weight: 700;"><i
                                                        class="fa fa-graduation-cap text-primary"
                                                        aria-hidden="true"></i> Designation <span
                                                        class="text-danger">*</span></label>
                                                <select name="" id="" class="form-control" style="height: 55px;">
                                                    <option selected>Select</option>
                                                    <option value="MD">MD</option>
                                                    <option value="Dr">Dr</option>
                                                    <option value="Prof">Prof</option>
                                                    <option value="BDS">BDS</option>
                                                </select>
                                            </div>



                                            <div class="col-4 form-group">
                                                <label for="name" style="font-weight: 700;"><i
                                                        class="fa fa-stethoscope text-primary" aria-hidden="true"></i>
                                                    Specialist <span class="text-danger">*</span></label>
                                                <select name="" id="" class="form-control" style="height: 55px;">
                                                    <option selected>Select</option>
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
                                                <label for="name" style="font-weight: 700;"><i
                                                        class="fa fa-indian-rupee-sign text-primary"
                                                        aria-hidden="true"></i>
                                                    Doctor Fees <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="name" name="name"
                                                    value="999" style="height: 55px;">
                                            </div>





                                            <!-- multiple -->
                                            <div id="add-same-section" class="row col-12">


                                                <div class="col-3 form-group">
                                                    <label for="name" style="font-weight: 700;"><i
                                                            class="fa-solid fa-calendar-days text-primary"></i>
                                                        Day <span class="text-danger">*</span></label>
                                                    <select name="" id="" class="form-control" style="height: 55px;">
                                                        <option selected>Select Day</option>
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
                                                    <label for="name" style="font-weight: 700;"><i
                                                            class="fa-solid fa-clock text-primary"></i> Time From
                                                        <span class="text-danger">*</span></label>

                                                    <input type="time" class="form-control" style="height: 55px;">
                                                </div>





                                                <div class="col-4 form-group">
                                                    <label for="name" style="font-weight: 700;"><i
                                                            class="fa-solid fa-clock-rotate-left text-primary"></i> Time
                                                        To
                                                        <span class="text-danger">*</span></label>

                                                    <div class="d-flex align-items-center">
                                                        <input type="time" class="form-control" style="height: 55px;">

                                                        <button type="button" id="add-section-button"
                                                            class="btn btn-primary rounded col-3 ml-3"
                                                            style="height: 55px; font-weight: 700;">ADD</button>
                                                    </div>
                                                </div>







                                            </div>




                                            <div class="d-flex justify-content-center w-100">
                                                <button type="submit" class="btn btn-danger rounded">Upload
                                                    Details</button>
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




    <!-- add section JS -->
    <script src="../partner-assets/js/add-section.js"></script>
</body>

</html>