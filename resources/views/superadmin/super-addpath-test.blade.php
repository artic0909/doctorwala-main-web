<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Add Pathology Tests</title>

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





                                    <div class="row m-auto">
                                        <div class="col-12 mt-4">









                                            <h3 class="font-weight-bold mt-3"><i class="fa fa-panorama text-danger" aria-hidden="true"></i> Add Pathology Banners Image</h3>

                                            <form class="prof-view" action="{{ route('superadmin.super-addpath.banner')}}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="from-view row mt-5 align-items-center">

                                                    <div class="col-3 form-group">
                                                        @if($pathBanner && isset($pathBanner->pathologybanner))
                                                        <!-- Show the uploaded OPD banner -->
                                                        <img src="{{ asset('storage/' . $pathBanner->pathologybanner) }}" width="500" alt="Pathology Banner" class="img-fluid">
                                                        @else
                                                        <!-- Show placeholder if no OPD banner exists -->
                                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRDVuaQbojYLTlYezNW7HPVIYO6QiLZsd8RFP86jMuySoBlJ369aVAK0Mtzo7La2hyVcxU&usqp=CAU" width="500" class="img-fluid" alt="Placeholder OPD Banner">
                                                        @endif


                                                    </div>

                                                    <div class="col-7">
                                                        <div class="col-12 form-group">
                                                            <label for="currently_loggedin_partner_id" style="font-weight: 700;"><i
                                                                    class="fa-solid fa-id-card text-primary"></i>
                                                                Partner ID <span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control" id="currently_loggedin_partner_id" name="currently_loggedin_partner_id"
                                                                style="height: 75px;" value="{{$pid}}" readonly>
                                                        </div>

                                                        <div class="col-12 form-group">
                                                            <label for="pathologybanner" style="font-weight: 700;"><i
                                                                    class="fa-solid fa-user-doctor text-primary"></i>
                                                                Pathology Banner <span class="text-danger">*</span></label>
                                                            <input type="file" class="form-control" id="pathologybanner" name="pathologybanner"
                                                                style="height: 75px;">
                                                        </div>
                                                    </div>


                                                    <div class="d-flex justify-content-center col-2">
                                                        <button type="submit" class="btn btn-danger rounded" style="height: 55px; font-weight: 700;">Upload
                                                            Banner</button>
                                                    </div>




                                                </div>
                                            </form>





                                            <h3 class="font-weight-bold mt-3"><i class="fa fa-syringe text-danger" aria-hidden="true"></i> Add Pathology Tests</h3>

                                            <form class="prof-view" action="{{route('superadmin.super-addpath.test')}}" method="POST">
                                                @csrf


                                                <div class="from-view row mt-3">
                                                    <div class="col-3 form-group">
                                                        <label for="currently_loggedin_partner_id" style="font-weight: 700;"><i
                                                                class="fa-solid fa-id-card text-primary"></i>
                                                            Partner ID <span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" id="currently_loggedin_partner_id" name="currently_loggedin_partner_id"
                                                            style="height: 55px;" value="{{$pid}}" readonly>
                                                    </div>
                                                </div>



                                                <div class="from-view row">



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
                                                        <input type="number" class="form-control" id="test_price" name="test_price"
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







                                            <h3 class="font-weight-bold mt-5 mb-2"><i class="fa fa-syringe text-danger" aria-hidden="true"></i> Your All Pathology Tests</h3>

                                            <div class="table-responsive">
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">ID</th>
                                                            <th scope="col">Test Name</th>
                                                            <th scope="col">Test Type</th>
                                                            <th scope="col">Test Price</th>
                                                            <th scope="col">Day | Time</th>
                                                            <th scope="col">Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @forelse ($pathTests as $pathTest)
                                                        <tr>
                                                            <th scope="row">{{ $loop->iteration }}</th>
                                                            <td>{{ $pathTest->test_name }}</td>
                                                            <td>{{ $pathTest->test_type }}</td>
                                                            <td>₹ {{ $pathTest->test_price }}</td>
                                                            <td>
                                                                @if(!empty($pathTest->test_day_time) && is_array($pathTest->test_day_time))
                                                                @foreach($pathTest->test_day_time as $test)
                                                                <ul style="list-style: none; padding: 0; margin: 0;">
                                                                    <li>
                                                                        <p class="m-0"><strong>{{ $test['day'] }}</strong></p>
                                                                        <p class="m-0">{{ $test['start_time'] }} - {{ $test['end_time'] }}</p>
                                                                    </li>
                                                                </ul>
                                                                @endforeach
                                                                @else
                                                                <p class="text-muted">No visit schedule available</p>
                                                                @endif
                                                            </td>


                                                            <td class="d-flex align-items-center" style="gap: 8px;">
                                                                @if($pathTest->status == 'Available')
                                                                <a href="" data-target="#myActiveInactiveModal{{$pathTest->id}}" data-toggle="modal" class="ed-btn">
                                                                    <i class="fa-solid fa-toggle-on text-success" style="font-size: 1.1rem;"></i>
                                                                </a>
                                                                @else
                                                                <a href="" data-target="#myActiveInactiveModal{{$pathTest->id}}" data-toggle="modal" class="ed-btn">
                                                                    <i class="fa-solid fa-toggle-off text-danger" style="font-size: 1.1rem;"></i>
                                                                </a>
                                                                @endif


                                                                <a href="" data-target="#myDeleteModal{{ $pathTest->id }}" data-toggle="modal"
                                                                    class="ed-btn"
                                                                    style="font-size: 1.03rem;">
                                                                    <i class="fa fa-trash text-danger" aria-hidden="true"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        @empty
                                                        <tr>
                                                            <td colspan="7" class="text-center">No OPD doctors available</td>
                                                        </tr>
                                                        @endforelse
                                                    </tbody>

                                                </table>
                                            </div>









                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>





            </div>





            <!-- floating right button -->
            <a type="button" class="btn btn-primary rounded btn-icon-text p-0 px-2 py-2 floating-btnn"
                href="/superadmin/super-all-pathology" style="width: fit-content;">
                <i class="fa fa-2x fa-reply" aria-hidden="true" style="font-size: 1.7rem;"></i>
            </a>









            <!-- Delete Modal -->
            @foreach ($pathTests as $pathTest)
            <div class="modal fade" id="myDeleteModal{{ $pathTest->id }}" tabindex="-1" role="dialog"
                aria-labelledby="myDeleteModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">

                        <form action="{{ route('superadmin.super-deletepath.test' , $pathTest->id) }}" class="modal-body" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('DELETE')

                            <div class="form-group d-flex flex-column align-items-center">
                                <i class="fa-solid fa-trash-can fa-2x text-danger"></i>

                                <h3 class="mt-3">Are You Sure ?</h3>

                                <p class="mt-2 text-center">Do you really want to delete these record? This Process
                                    cannot be undone.</p>

                                <div class="btnss d-flex justify-content-around align-items-center w-100 mt-3">
                                    <button type="button" class="btn btn-primary rounded w-50 mr-3"
                                        data-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-danger rounded w-50">Confirm</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
            @endforeach



            <!-- My Active Inactive  Modal -->
            @foreach ($pathTests as $pathTest)
            <div class="modal fade" id="myActiveInactiveModal{{$pathTest->id}}" tabindex="-1" role="dialog"
                aria-labelledby="myActiveInactiveModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">



                        <form class="modal-body" action="{{route('superadmin.status.pathTest.edit', $pathTest->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')



                            <div class="form-group">
                                <label for="status"><i class="fa fa-stethoscope text-success"
                                        aria-hidden="true"></i>
                                    Set Status <span class="text-danger">*</span></label>
                                <select name="status" id="status" class="form-control">
                                    <option value="Inactive" selected>{{$pathTest->status}}</option>
                                    <option value="">---Select Status---</option>
                                    <option value="Available">Available</option>
                                    <option value="Unavailable">Unavailable</option>
                                </select>
                            </div>



                            <button type="submit" class="btn btn-success rounded w-100">Submit</button>
                        </form>

                    </div>
                </div>
            </div>
            @endforeach









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
    <script src="{{asset('../partner-assets/js/add-section-path.js')}}"></script>



</body>

</html>