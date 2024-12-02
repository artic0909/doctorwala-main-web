<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Partner Pathology Details Show</title>
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
                                    <h3 class="font-weight-bold">Your Pathology Details !</h3>
                                    <h6 class="font-weight-normal mb-0"><span><i class="fa fa-stethoscope text-danger"
                                                aria-hidden="true"></i></span>&nbsp;Here is the complete list of your
                                        pathology details.
                                    </h6>
                                </div>
                            </div>


                            <div class="row m-auto">
                                <div class="col-12 mt-4">


                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Edit</th>
                                                <th scope="col">Delete</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Test Name</th>
                                                <th scope="col">Test Type</th>
                                                <th scope="col">Day</th>
                                                <th scope="col">Time</th>
                                                <th scope="col">Price</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>

                                                <td><a href="" data-target="#myEditModal" data-toggle="modal"
                                                        class="ed-btn"><i class="fa-solid fa-pen-to-square text-success"
                                                            style="font-size: 1.4rem;"></i></a></td>


                                                <td><a href="" data-target="#myDeleteModal" data-toggle="modal"
                                                        class="ed-btn"><i class="fa-solid fa-trash-can text-danger"
                                                            style="font-size: 1.4rem;"></i></a></td>


                                                <td style="font-size: 1.05rem;">
                                                    <b>Available</b>
                                                </td>

                                                <td style="font-size: 1.05rem;">
                                                    <p class="m-0"><b>CBC</b></p>
                                                </td>


                                                <td style="font-size: 1.05rem;">
                                                    <p class="m-0"><b>Blood</b></p>
                                                </td>


                                                <td style="font-size: 1.05rem;">
                                                    <p class="m-0"><b>Wedness Day</b></p>
                                                </td>

                                                <td style="font-size: 1.05rem;">
                                                    <p class="m-0"><b>9:00 AM - 11:00 AM</b></p>
                                                </td>


                                                <td style="font-size: 1.05rem;">
                                                    <b>₹ 999</b>
                                                </td>



                                            </tr>
                                        </tbody>
                                    </table>


                                </div>


                            </div>
                        </div>
                    </div>








                </div>






                <!-- Edit Modal -->
                <div class="modal fade" id="myEditModal" tabindex="-1" role="dialog" aria-labelledby="myEditModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">

                            <div class="modal-header">
                                <h3 class="modal-title text-primary" style="font-weight: 700;"><i
                                        class="fa fa-syringe text-primary" aria-hidden="true"></i> Edit Pathology
                                    Details
                                </h3>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                            <form class="modal-body">

                                <div class="form-group">
                                    <label for=""><i class="fa fa-stethoscope text-danger" aria-hidden="true"></i>
                                        Test Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="" id="" value="">
                                </div>




                                <div class="form-group">
                                    <label for=""><i class="fa fa-stethoscope text-danger" aria-hidden="true"></i>
                                        Test Type <span class="text-danger">*</span></label>
                                    <select name="" id="" class="form-control">
                                        <option value="" selected>Select Type</option>
                                        <option value="cbc">Complete Blood Count (CBC)</option>
                                        <option value="lft">Liver Function Test (LFT)</option>
                                        <option value="kft">Kidney Function Test (KFT)</option>
                                        <option value="rft">Renal Function Test (RFT)</option>
                                        <option value="lipid_profile">Lipid Profile</option>
                                        <option value="thyroid_panel">Thyroid Function Tests (T3, T4, TSH)
                                        </option>
                                        <option value="hba1c">HbA1c (Glycated Hemoglobin)</option>
                                        <option value="fasting_blood_sugar">Fasting Blood Sugar (FBS)
                                        </option>
                                        <option value="postprandial_blood_sugar">Postprandial Blood Sugar
                                            (PPBS)</option>
                                        <option value="urine_analysis">Urine Routine and Microscopy</option>
                                        <option value="stool_test">Stool Test</option>
                                        <option value="esr">Erythrocyte Sedimentation Rate (ESR)</option>
                                        <option value="crp">C-Reactive Protein (CRP)</option>
                                        <option value="vitamin_d">Vitamin D Test</option>
                                        <option value="vitamin_b12">Vitamin B12 Test</option>
                                        <option value="iron_studies">Iron Studies (Ferritin, TIBC, Serum
                                            Iron)</option>
                                        <option value="blood_group">Blood Group and Rh Typing</option>
                                        <option value="pt_inr">Prothrombin Time (PT/INR)</option>
                                        <option value="d_dimer">D-Dimer Test</option>
                                        <option value="hiv_test">HIV Test</option>
                                        <option value="hbsag">Hepatitis B Surface Antigen (HBsAg)</option>
                                        <option value="hcv_test">Hepatitis C Test</option>
                                        <option value="widal_test">Widal Test</option>
                                        <option value="rapid_malaria_test">Rapid Malaria Test</option>
                                        <option value="dengue_ns1">Dengue NS1 Antigen Test</option>
                                        <option value="rtpcr">RT-PCR Test (e.g., for COVID-19)</option>
                                        <option value="pap_smear">Pap Smear</option>
                                        <option value="psa">Prostate-Specific Antigen (PSA)</option>
                                        <option value="blood_culture">Blood Culture</option>
                                        <option value="sputum_culture">Sputum Culture</option>
                                        <option value="ascitic_fluid_analysis">Ascitic Fluid Analysis
                                        </option>
                                        <option value="csf_analysis">Cerebrospinal Fluid (CSF) Analysis
                                        </option>
                                        <option value="skin_biopsy">Skin Biopsy</option>
                                        <option value="fine_needle_aspiration">Fine Needle Aspiration
                                            Cytology (FNAC)</option>
                                        <option value="bone_marrow_test">Bone Marrow Aspiration/Biopsy
                                        </option>
                                        <option value="microalbumin_test">Urine Microalbumin Test</option>
                                        <option value="pregnancy_test">Pregnancy Test (hCG)</option>
                                        <option value="tissue_biopsy">Tissue Biopsy</option>
                                        <option value="coombs_test">Direct/Indirect Coombs Test</option>
                                        <option value="ra_factor">Rheumatoid Factor (RA Factor)</option>
                                        <option value="anti_ccp">Anti-CCP Antibodies</option>
                                        <option value="ana_test">Anti-Nuclear Antibody (ANA) Test</option>
                                        <option value="troponin">Troponin Test</option>
                                        <option value="ck_mb">Creatine Kinase-MB (CK-MB)</option>
                                        <option value="electrolyte_panel">Electrolyte Panel (Sodium,
                                            Potassium, Chloride)</option>
                                        <option value="amylase_lipase">Amylase and Lipase Test</option>
                                        <option value="serum_calcium">Serum Calcium</option>
                                        <option value="serum_albumin">Serum Albumin</option>
                                        <option value="serum_protein">Serum Protein Electrophoresis</option>
                                        <option value="ldh">Lactate Dehydrogenase (LDH)</option>
                                        <option value="asthma_panel">Asthma Panel (Allergen Testing)
                                        </option>
                                        <option value="allergy_panel">Allergy Panel</option>
                                        <option value="tumor_markers">Tumor Marker Tests (e.g., CA-125, CA
                                            19-9)</option>

                                    </select>
                                </div>



                                <div class="form-group">
                                    <label for=""><i class="fa fa-stethoscope text-danger" aria-hidden="true"></i> Day
                                        <span class="text-danger">*</span></label>
                                    <select name="" id="" class="form-control">
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



                                <div class="form-group">
                                    <label for=""><i class="fa fa-stethoscope text-danger" aria-hidden="true"></i> Time
                                        From
                                        <span class="text-danger">*</span></label>
                                    <input type="time" class="form-control">
                                </div>




                                <div class="form-group">
                                    <label for=""><i class="fa fa-stethoscope text-danger" aria-hidden="true"></i> Time
                                        To
                                        <span class="text-danger">*</span></label>
                                    <input type="time" class="form-control">
                                </div>

                                <button type="submit" class="btn btn-primary rounded w-100">Submit</button>
                            </form>

                        </div>
                    </div>
                </div>



                <!-- Delete Modal -->
                <div class="modal fade" id="myDeleteModal" tabindex="-1" role="dialog"
                    aria-labelledby="myDeleteModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">

                            <form action="" class="modal-body">
                                <div class="form-group d-flex flex-column align-items-center">
                                    <i class="fa-solid fa-trash-can fa-2x text-danger"></i>

                                    <h3 class="mt-3">Are You Sure ?</h3>

                                    <p class="mt-2 text-center">Do you really want to delete these record? This Process
                                        cannot be undone.</p>

                                    <div class="btnss d-flex justify-content-around align-items-center w-100 mt-3">
                                        <button type="button" class="btn btn-primary rounded w-50 mr-3"
                                            data-dismiss="modal">Cancel</button>
                                        <button type="button" class="btn btn-danger rounded w-50">Confirm</button>
                                    </div>
                                </div>
                            </form>

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