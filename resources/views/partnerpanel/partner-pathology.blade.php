<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Partner Pathology Details Upload</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('../partner-assets')}}">
    <link rel="stylesheet" href="{{asset('../partner-assets/vendors/ti-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('../partner-assets/js/select.dataTables.min.css')}}')}}">
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



                                        <!-- partner-profile-banner -->
                                        <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#ui-basicuy" aria-expanded="false"
                            aria-controls="ui-basicuy">
                            <i class="fa fa-panorama" aria-hidden="true"></i>&nbsp; <span
                                class="menu-title">Profile Banner</span><i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-basicuy">

                            <ul class="nav flex-column sub-menu">

                                @if(in_array('OPD', $registrationTypes))
                                <li class="nav-item"> <a class="nav-link" href="#" data-toggle="modal" data-target="#myOPDBanner">OPD Banner</a></li>
                                @endif

                                @if(in_array('Pathology', $registrationTypes))
                                <li class="nav-item"> <a class="nav-link" href="#" data-toggle="modal" data-target="#myPathologyBanner">Pathology Banner</a></li>
                                @endif


                                @if(in_array('Doctor', $registrationTypes))
                                <li class="nav-item"> <a class="nav-link" href="#" data-toggle="modal" data-target="#myDoctorBanner">Doctor Banner</a></li>
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
                                    <h3 class="font-weight-bold">Add Pathology Details !</h3>
                                    <h6 class="font-weight-normal mb-0"><span><i class="fa fa-stethoscope text-danger"
                                                aria-hidden="true"></i></span>&nbsp;Upload details of all the tests in
                                        your clinic for users to view.
                                    </h6>
                                </div>
                            </div>


                            <div class="row m-auto">
                                <div class="col-12 mt-4">

                                    <form class="prof-view" action="{{route('partner.pathology.store')}}" method="POST">
                                        @csrf





                                        <div class="from-view row  mt-5">



                                            <div class="col-4 form-group">
                                                <label for="test_name" style="font-weight: 700;"><i
                                                        class="fa-solid fa-syringe text-primary"></i>
                                                    Test Name <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="test_name" name="test_name"
                                                    placeholder="Enter Test Name" style="height: 55px;">
                                            </div>

                                            <div class="col-4 form-group">
                                                <label for="test_type" style="font-weight: 700;"><i
                                                        class="fa fa-sitemap text-primary" aria-hidden="true"></i> Test
                                                    Type <span class="text-danger">*</span></label>
                                                <select name="test_type" id="test_type" class="form-control" style="height: 55px;">
                                                    <option value="" selected>---Select Type---</option>

                                                    <option value="Complete Blood Count (CBC)">Complete Blood Count (CBC)</option>
                                                    <option value="Liver Function Test (LFT)">Liver Function Test (LFT)</option>
                                                    <option value="Kidney Function Test (KFT)">Kidney Function Test (KFT)</option>
                                                    <option value="Renal Function Test (RFT)">Renal Function Test (RFT)</option>
                                                    <option value="Lipid Profile">Lipid Profile</option>
                                                    <option value="Thyroid Function Tests (T3, T4, TSH)">Thyroid Function Tests (T3, T4, TSH)</option>
                                                    <option value="HbA1c (Glycated Hemoglobin)">HbA1c (Glycated Hemoglobin)</option>
                                                    <option value="Fasting Blood Sugar (FBS)">Fasting Blood Sugar (FBS)</option>
                                                    <option value="Postprandial Blood Sugar (PPBS)">Postprandial Blood Sugar (PPBS)</option>
                                                    <option value="Urine Routine and Microscopy">Urine Routine and Microscopy</option>
                                                    <option value="Stool Test">Stool Test</option>
                                                    <option value="Erythrocyte Sedimentation Rate (ESR)">Erythrocyte Sedimentation Rate (ESR)</option>
                                                    <option value="C-Reactive Protein (CRP)">C-Reactive Protein (CRP)</option>
                                                    <option value="Vitamin D Test">Vitamin D Test</option>
                                                    <option value="Vitamin B12 Test">Vitamin B12 Test</option>
                                                    <option value="Iron Studies (Ferritin, TIBC, Serum Iron)">Iron Studies (Ferritin, TIBC, Serum Iron)</option>
                                                    <option value="Blood Group and Rh Typing">Blood Group and Rh Typing</option>
                                                    <option value="Prothrombin Time (PT/INR)">Prothrombin Time (PT/INR)</option>
                                                    <option value="D-Dimer Test">D-Dimer Test</option>
                                                    <option value="HIV Test">HIV Test</option>
                                                    <option value="Hepatitis B Surface Antigen (HBsAg)">Hepatitis B Surface Antigen (HBsAg)</option>
                                                    <option value="Hepatitis C Test">Hepatitis C Test</option>
                                                    <option value="Widal Test">Widal Test</option>
                                                    <option value="Rapid Malaria Test">Rapid Malaria Test</option>
                                                    <option value="Dengue NS1 Antigen Test">Dengue NS1 Antigen Test</option>
                                                    <option value="RT-PCR Test (e.g., for COVID-19)">RT-PCR Test (e.g., for COVID-19)</option>
                                                    <option value="Pap Smear">Pap Smear</option>
                                                    <option value="Prostate-Specific Antigen (PSA)">Prostate-Specific Antigen (PSA)</option>
                                                    <option value="Blood Culture">Blood Culture</option>
                                                    <option value="Sputum Culture">Sputum Culture</option>
                                                    <option value="Ascitic Fluid Analysis">Ascitic Fluid Analysis</option>
                                                    <option value="Cerebrospinal Fluid (CSF) Analysis">Cerebrospinal Fluid (CSF) Analysis</option>
                                                    <option value="Skin Biopsy">Skin Biopsy</option>
                                                    <option value="Fine Needle Aspiration Cytology (FNAC)">Fine Needle Aspiration Cytology (FNAC)</option>
                                                    <option value="Bone Marrow Aspiration/Biopsy">Bone Marrow Aspiration/Biopsy</option>
                                                    <option value="Urine Microalbumin Test">Urine Microalbumin Test</option>
                                                    <option value="Pregnancy Test (hCG)">Pregnancy Test (hCG)</option>
                                                    <option value="Tissue Biopsy">Tissue Biopsy</option>
                                                    <option value="Direct/Indirect Coombs Test">Direct/Indirect Coombs Test</option>
                                                    <option value="Rheumatoid Factor (RA Factor)">Rheumatoid Factor (RA Factor)</option>
                                                    <option value="Anti-CCP Antibodies">Anti-CCP Antibodies</option>
                                                    <option value="Anti-Nuclear Antibody (ANA) Test">Anti-Nuclear Antibody (ANA) Test</option>
                                                    <option value="Troponin Test">Troponin Test</option>
                                                    <option value="Creatine Kinase-MB (CK-MB)">Creatine Kinase-MB (CK-MB)</option>
                                                    <option value="Electrolyte Panel (Sodium, Potassium, Chloride)">Electrolyte Panel (Sodium, Potassium, Chloride)</option>
                                                    <option value="Amylase and Lipase Test">Amylase and Lipase Test</option>
                                                    <option value="Serum Calcium">Serum Calcium</option>
                                                    <option value="Serum Albumin">Serum Albumin</option>
                                                    <option value="Serum Protein Electrophoresis">Serum Protein Electrophoresis</option>
                                                    <option value="Lactate Dehydrogenase (LDH)">Lactate Dehydrogenase (LDH)</option>
                                                    <option value="Asthma Panel (Allergen Testing)">Asthma Panel (Allergen Testing)</option>
                                                    <option value="Allergy Panel">Allergy Panel</option>
                                                    <option value="Tumor Marker Tests (e.g., CA-125, CA 19-9)">Tumor Marker Tests (e.g., CA-125, CA 19-9)</option>
                                                </select>

                                            </div>








                                            <div class="col-4 form-group">
                                                <label for="test_price" style="font-weight: 700;"><i
                                                        class="fa fa-indian-rupee-sign text-primary"
                                                        aria-hidden="true"></i>
                                                    Test Price <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="test_price" name="test_price"
                                                    placeholder="Enter Test Price" style="height: 55px;">
                                            </div>





                                            <!-- multiple -->
                                            <div id="add-same-section" class="row col-12">


                                                <div class="col-3 form-group">
                                                    <label for="test_day" style="font-weight: 700;"><i
                                                            class="fa-solid fa-calendar-days text-primary"></i>
                                                        Day <span class="text-danger">*</span></label>
                                                    <select name="test_day[]" id="test_day" class="form-control" style="height: 55px;">
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
                                                    <label for="test_start_time" style="font-weight: 700;"><i
                                                            class="fa-solid fa-clock text-primary"></i> Time From
                                                        <span class="text-danger">*</span></label>

                                                    <input type="time" class="form-control" style="height: 55px;" id="test_start_time" name="test_start_time[]">
                                                </div>





                                                <div class="col-4 form-group">
                                                    <label for="test_end_time" style="font-weight: 700;"><i
                                                            class="fa-solid fa-clock-rotate-left text-primary"></i> Time
                                                        To
                                                        <span class="text-danger">*</span></label>

                                                    <div class="d-flex align-items-center">
                                                        <input type="time" class="form-control" style="height: 55px;" name="test_end_time[]" id="test_end_time">

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
    <script src="../partner-assets/js/add-section-path.js"></script>
</body>

</html>