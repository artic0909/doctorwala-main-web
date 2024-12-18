<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Doctor Contact Person</title>
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
                                    <h3 class="font-weight-bold">Doctor Contact Person Details Is Here !</h3>
                                    <h6 class="font-weight-normal mb-0"><span><i class="fa fa-stethoscope text-danger"
                                                aria-hidden="true"></i></span>&nbsp;Provide the details of a single
                                        doctor for the single clinic.
                                    </h6>
                                </div>
                            </div>


                            <div class="row m-auto">
                                <div class="col-12 mt-4">

                                    <form class="prof-view" action="{{route('partner.doctor.contact.store')}}" method="POST">
                                        @csrf


                                        <div class="from-view row  mt-2">




                                            <div class="col-4 form-group">
                                                <label for="name" style="font-weight: 700;"><i
                                                        class="fa fa-sitemap text-primary" aria-hidden="true"></i> Type
                                                    <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="clinic_registration_type" name="clinic_registration_type"
                                                    value="{{ $contactDetails->clinic_registration_type ?? 'Doctor' }}" style="height: 55px;" readonly>
                                            </div>



                                            <div class="col-4 form-group">
                                                <label for="partner_doctor_name" style="font-weight: 700;"><i
                                                        class="fa-solid fa-user text-primary"></i>
                                                    Doctor Name <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="partner_doctor_name" name="partner_doctor_name"
                                                    placeholder="Enter Doctor Name" style="height: 55px;">
                                            </div>







                                            <div class="col-4 form-group">
                                                <label for="partner_doctor_specialist" style="font-weight: 700;"><i
                                                        class="fa fa-stethoscope text-primary" aria-hidden="true"></i>
                                                    Specialist <span class="text-danger">*</span></label>
                                                <select name="partner_doctor_specialist" id="partner_doctor_specialist" class="form-control" style="height: 55px;">
                                                    <option selected>---Select Specialization---</option>
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



                                            <div class="col-4 form-group">
                                                <label for="partner_doctor_designation" style="font-weight: 700;"><i
                                                        class="fa fa-graduation-cap text-primary"
                                                        aria-hidden="true"></i> Designation <span
                                                        class="text-danger">*</span></label>
                                                <select name="partner_doctor_designation" id="partner_doctor_designation" class="form-control" style="height: 55px;">
                                                    <option selected>---Select Designation---</option>
                                                    <option value="MD">MD</option>
                                                    <option value="Dr">Dr</option>
                                                    <option value="Prof">Prof</option>
                                                    <option value="BDS">BDS</option>
                                                </select>
                                            </div>



                                            <div class="col-4 form-group">
                                                <label for="partner_doctor_fees" style="font-weight: 700;"><i
                                                        class="fa fa-indian-rupee-sign text-primary"
                                                        aria-hidden="true"></i>
                                                    Doctor Fees <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="partner_doctor_fees" name="partner_doctor_fees"
                                                    placeholder="Enter Doctor Fees" style="height: 55px;">
                                            </div>






                                            <div class="col-4 form-group">
                                                <label for="partner_doctor_mobile" style="font-weight: 700;"><i
                                                        class="fa fa-phone text-primary" aria-hidden="true"></i>
                                                    Mobile Number <span class="text-danger">*</span></label>
                                                <input type="number" class="form-control" id="partner_doctor_mobile" name="partner_doctor_mobile"
                                                    placeholder="Enter Your Email" style="height: 55px;">
                                            </div>



                                            <div class="col-4 form-group">
                                                <label for="partner_doctor_email" style="font-weight: 700;"><i
                                                        class="fa fa-envelope text-primary" aria-hidden="true"></i>
                                                    Email Id <span class="text-danger">*</span></label>
                                                <input type="email" class="form-control" id="partner_doctor_email" name="partner_doctor_email"
                                                    placeholder="Enter Your Email" style="height: 55px;">
                                            </div>












                                            <div class="col-4 form-group">
                                                <label for="partner_doctor_landmark" style="font-weight: 700;"><i
                                                        class="fa fa-map-pin text-primary" aria-hidden="true"></i>
                                                    Landmark <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="partner_doctor_landmark" name="partner_doctor_landmark"
                                                    placeholder="Enter Your Landmark" style="height: 55px;">
                                            </div>



                                            <div class="col-4 form-group">
                                                <label for="partner_doctor_pincode" style="font-weight: 700;"><i
                                                        class="fa fa-location-pin-lock text-primary"
                                                        aria-hidden="true"></i>
                                                    Pin Code <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="partner_doctor_pincode" name="partner_doctor_pincode"
                                                    placeholder="Enter Your Pin Code" style="height: 55px;">
                                            </div>



                                            <div class="col-4 form-group">
                                                <label for="partner_doctor_google_map_link" style="font-weight: 700;"><i
                                                        class="fa fa-map-location-dot text-primary"
                                                        aria-hidden="true"></i>
                                                    Google Map </label>
                                                <input type="text" class="form-control" id="partner_doctor_google_map_link" name="partner_doctor_google_map_link"
                                                    placeholder="Enter Your Google Map Link" style="height: 55px;">
                                            </div>





                                            <div class="col-4 form-group">
                                                <label for="partner_doctor_state" style="font-weight: 700;"><i
                                                        class="fa-solid fa-globe text-primary"></i>
                                                    State <span class="text-danger">*</span></label>
                                                <select name="partner_doctor_state" id="partner_doctor_state" class="form-control" style="height: 55px;">
                                                    <option selected>---Select State---</option>
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
                                                <label for="partner_doctor_city" style="font-weight: 700;"><i
                                                        class="fa-solid fa-city text-primary"></i> City
                                                    <span class="text-danger">*</span></label>

                                                <input type="text" id="partner_doctor_city" name="partner_doctor_city" class="form-control" style="height: 55px;">
                                            </div>











                                            <div class="col-12 form-group">
                                                <label for="partner_doctor_address" style="font-weight: 700;"><i
                                                        class="fa-solid fa-location-dot text-primary"></i> Address
                                                    <span class="text-danger">*</span></label>

                                                <textarea name="partner_doctor_address" id="partner_doctor_address" class="form-control" rows="7"></textarea>
                                            </div>



                                            <!-- multiple -->
                                            <div id="add-same-section" class="row col-12">


                                                <div class="col-3 form-group">
                                                    <label for="partner_doctor_visit_day" style="font-weight: 700;"><i
                                                            class="fa-solid fa-calendar-days text-primary"></i>
                                                        Day <span class="text-danger">*</span></label>
                                                    <select name="partner_doctor_visit_day[]" id="partner_doctor_visit_day" class="form-control" style="height: 55px;">
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
                                                    <label for="partner_doctor_visit_start_time" style="font-weight: 700;"><i
                                                            class="fa-solid fa-clock text-primary"></i> Time From
                                                        <span class="text-danger">*</span></label>

                                                    <input type="time" id="partner_doctor_visit_start_time" name="partner_doctor_visit_start_time[]" class="form-control" style="height: 55px;">
                                                </div>





                                                <div class="col-4 form-group">
                                                    <label for="name" style="font-weight: 700;"><i
                                                            class="fa-solid fa-clock-rotate-left text-primary"></i> Time
                                                        To
                                                        <span class="text-danger">*</span></label>

                                                    <div class="d-flex align-items-center">
                                                        <input type="time" class="form-control" style="height: 55px;" id="partner_doctor_visit_end_time" name="partner_doctor_visit_end_time[]">

                                                        <button type="button" id="add-section-button"
                                                            class="btn btn-primary rounded col-3 ml-3"
                                                            style="height: 55px; font-weight: 700;">ADD</button>
                                                    </div>
                                                </div>







                                            </div>









                                            <div class="d-flex justify-content-center w-100">
                                                @if($contactCount === 1)
                                                <!-- Show Edit Button if only one record exists -->
                                                <a href="" data-target="#myEditModal" data-toggle="modal" class="text-danger ed-btn" style="font-weight: 700;">
                                                    <i class="fa fa-pen-to-square" aria-hidden="true"></i> Edit Details
                                                </a>
                                                @else
                                                <!-- Show Upload Button -->
                                                <button type="submit" class="btn btn-success rounded mr-3" style="font-weight: 700;">
                                                    Upload Contact Person
                                                </button>
                                                @endif
                                            </div>





                                        </div>



                                    </form>

                                </div>

                            </div>
                        </div>
                    </div>








                </div>






                <!-- edit modal -->
                <div class="modal fade" id="myEditModal" tabindex="-1" role="dialog"
                    aria-labelledby="myDeleteModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content p-4" style="background-color:#F5F7FF;">


                            <form class="prof-view modal-body" action="{{ route('partner.doctor.contact.store') }}" method="POST">
                                @csrf

                                <h2 class="text-center text-danger mb-4" style="font-weight: 700;"><i class="fa fa-plus text-primary" aria-hidden="true"></i> Edit Your Profile <i class="fa fa-plus text-primary" aria-hidden="true"></i></h2>

                                <div class="from-view row mt-2">
                                    <!-- Clinic Registration Type -->
                                    <div class="col-3 form-group">
                                        <label for="clinic_registration_type" style="font-weight: 700;">
                                            <i class="fa fa-sitemap text-primary" aria-hidden="true"></i> Type
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input type="text" class="form-control" id="clinic_registration_type" name="clinic_registration_type"
                                            value="{{ old('clinic_registration_type', $contactDetails->clinic_registration_type ?? 'Doctor') }}"
                                            style="height: 55px;" readonly>
                                    </div>

                                    <!-- Doctor Name -->
                                    <div class="col-3 form-group">
                                        <label for="partner_doctor_name" style="font-weight: 700;">
                                            <i class="fa-solid fa-user text-primary"></i> Doctor Name
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input type="text" class="form-control" id="partner_doctor_name" name="partner_doctor_name"
                                            placeholder="Enter Doctor Name"
                                            value="{{ old('partner_doctor_name', $contactDetails->partner_doctor_name ?? '') }}"
                                            style="height: 55px;">
                                    </div>

                                    <!-- Specialist -->
                                    <div class="col-3 form-group">
                                        <label for="partner_doctor_specialist" style="font-weight: 700;">
                                            <i class="fa fa-stethoscope text-primary" aria-hidden="true"></i> Specialist
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input type="text" name="partner_doctor_specialist" id="partner_doctor_specialist" class="form-control" style="height: 55px;" value="{{ old('partner_doctor_specialist', $contactDetails->partner_doctor_specialist ?? '') }}">
                                    </div>

                                    <!-- Designation -->
                                    <div class="col-3 form-group">
                                        <label for="partner_doctor_designation" style="font-weight: 700;">
                                            <i class="fa fa-graduation-cap text-primary" aria-hidden="true"></i> Designation
                                            <span class="text-danger">*</span>
                                        </label>
                                        <select name="partner_doctor_designation" id="partner_doctor_designation" class="form-control" style="height: 55px;">
                                            <option selected disabled>---Select Designation---</option>
                                            <option value="MD" {{ old('partner_doctor_designation', $contactDetails->partner_doctor_designation ?? '') == 'MD' ? 'selected' : '' }}>MD</option>
                                            <option value="Dr" {{ old('partner_doctor_designation', $contactDetails->partner_doctor_designation ?? '') == 'Dr' ? 'selected' : '' }}>Dr</option>
                                            <option value="Prof" {{ old('partner_doctor_designation', $contactDetails->partner_doctor_designation ?? '') == 'Prof' ? 'selected' : '' }}>Prof</option>
                                            <option value="BDS" {{ old('partner_doctor_designation', $contactDetails->partner_doctor_designation ?? '') == 'BDS' ? 'selected' : '' }}>BDS</option>
                                        </select>
                                    </div>

                                    <!-- Doctor Fees -->
                                    <div class="col-3 form-group">
                                        <label for="partner_doctor_fees" style="font-weight: 700;">
                                            <i class="fa fa-indian-rupee-sign text-primary" aria-hidden="true"></i> Doctor Fees
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input type="text" class="form-control" id="partner_doctor_fees" name="partner_doctor_fees"
                                            placeholder="Enter Doctor Fees"
                                            value="{{ old('partner_doctor_fees', $contactDetails->partner_doctor_fees ?? '') }}"
                                            style="height: 55px;">
                                    </div>

                                    <!-- Mobile Number -->
                                    <div class="col-3 form-group">
                                        <label for="partner_doctor_mobile" style="font-weight: 700;">
                                            <i class="fa fa-phone text-primary" aria-hidden="true"></i> Mobile Number
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input type="number" class="form-control" id="partner_doctor_mobile" name="partner_doctor_mobile"
                                            placeholder="Enter Mobile Number"
                                            value="{{ old('partner_doctor_mobile', $contactDetails->partner_doctor_mobile ?? '') }}"
                                            style="height: 55px;">
                                    </div>

                                    <!-- Email -->
                                    <div class="col-3 form-group">
                                        <label for="partner_doctor_email" style="font-weight: 700;">
                                            <i class="fa fa-envelope text-primary" aria-hidden="true"></i> Email Id
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input type="email" class="form-control" id="partner_doctor_email" name="partner_doctor_email"
                                            placeholder="Enter Email Id"
                                            value="{{ old('partner_doctor_email', $contactDetails->partner_doctor_email ?? '') }}"
                                            style="height: 55px;">
                                    </div>

                                    <div class="col-3 form-group">
                                        <label for="partner_doctor_landmark" style="font-weight: 700;"><i
                                                class="fa fa-map-pin text-primary" aria-hidden="true"></i>
                                            Landmark <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="partner_doctor_landmark" name="partner_doctor_landmark"
                                            placeholder="Enter Your Landmark" value="{{ old('partner_doctor_landmark', $contactDetails->partner_doctor_landmark ?? '') }}" style="height: 55px;">
                                    </div>



                                    <div class="col-3 form-group">
                                        <label for="partner_doctor_pincode" style="font-weight: 700;"><i
                                                class="fa fa-location-pin-lock text-primary"
                                                aria-hidden="true"></i>
                                            Pin Code <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="partner_doctor_pincode" name="partner_doctor_pincode"
                                            placeholder="Enter Your Pin Code" style="height: 55px;" value="{{ old('partner_doctor_pincode', $contactDetails->partner_doctor_pincode ?? '') }}">
                                    </div>



                                    <div class="col-3 form-group">
                                        <label for="partner_doctor_google_map_link" style="font-weight: 700;"><i
                                                class="fa fa-map-location-dot text-primary"
                                                aria-hidden="true"></i>
                                            Google Map </label>
                                        <input type="text" class="form-control" id="partner_doctor_google_map_link" name="partner_doctor_google_map_link"
                                            placeholder="Enter Your Google Map Link" style="height: 55px;" value="{{ old('partner_doctor_google_map_link', $contactDetails->partner_doctor_google_map_link ?? '') }}">
                                    </div>


                                    <div class="col-3 form-group">
                                        <label for="partner_doctor_state" style="font-weight: 700;"><i
                                                class="fa-solid fa-globe text-primary"></i>
                                            State <span class="text-danger">*</span></label>
                                        <input type="text" name="partner_doctor_state" id="partner_doctor_state" class="form-control" style="height: 55px;" value="{{ old('partner_doctor_state', $contactDetails->partner_doctor_state ?? '') }}">
                                    </div>





                                    <div class="col-3 form-group">
                                        <label for="partner_doctor_city" style="font-weight: 700;"><i
                                                class="fa-solid fa-city text-primary"></i> City
                                            <span class="text-danger">*</span></label>

                                        <input type="text" id="partner_doctor_city" name="partner_doctor_city" class="form-control" style="height: 55px;" value="{{ old('partner_doctor_city', $contactDetails->partner_doctor_city ?? '') }}">
                                    </div>


                                    <!-- Address -->
                                    <div class="col-12 form-group">
                                        <label for="partner_doctor_address" style="font-weight: 700;">
                                            <i class="fa-solid fa-location-dot text-primary"></i> Address
                                            <span class="text-danger">*</span>
                                        </label>
                                        <textarea name="partner_doctor_address" id="partner_doctor_address" class="form-control" rows="7">{{ old('partner_doctor_address', $contactDetails->partner_doctor_address ?? '') }}</textarea>
                                    </div>

                                    <!-- Visit Days and Times -->
                                    <div id="add-same-section" class="w-100">
                                        <label class="col-12" style="font-weight: 700;">Visit Schedule</label>
                                        <div id="visit-schedule-wrapper">
                                            @php
                                            $visitSchedule = old('partner_doctor_visit_day', $contactDetails ? ($contactDetails->visit_day_time ?? []) : []);
                                            @endphp

                                            @foreach($visitSchedule as $index => $visit)

                                            <div class="row w-100 mb-2 visit-schedule-row p-3">


                                                <div class="col-4 form-group">
                                                    <label for="partner_doctor_visit_day_{{ $index }}"><i
                                                            class="fa-solid fa-calendar-days text-primary"></i> Day</label>
                                                    <select name="partner_doctor_visit_day[]" id="partner_doctor_visit_day_{{ $index }}" class="form-control" style="height: 55px;">
                                                        <option selected disabled>Select Day</option>
                                                        <option value="Allday" {{ $visit['day'] == 'Allday' ? 'selected' : '' }}>Allday</option>
                                                        <option value="Monday" {{ $visit['day'] == 'Monday' ? 'selected' : '' }}>Monday</option>
                                                        <option value="Tuesday" {{ $visit['day'] == 'Tuesday' ? 'selected' : '' }}>Tuesday</option>
                                                        <option value="Wednesday" {{ $visit['day'] == 'Wednesday' ? 'selected' : '' }}>Wednesday</option>
                                                        <option value="Thursday" {{ $visit['day'] == 'Thursday' ? 'selected' : '' }}>Thursday</option>
                                                        <option value="Friday" {{ $visit['day'] == 'Friday' ? 'selected' : '' }}>Friday</option>
                                                        <option value="Saturday" {{ $visit['day'] == 'Saturday' ? 'selected' : '' }}>Saturday</option>
                                                        <option value="Sunday" {{ $visit['day'] == 'Sunday' ? 'selected' : '' }}>Sunday</option>
                                                    </select>
                                                </div>
                                                <div class="col-3 form-group">
                                                    <label><i
                                                            class="fa-solid fa-clock text-primary"></i> Start Time</label>
                                                    <input type="time" name="partner_doctor_visit_start_time[]" value="{{ $visit['start_time'] ?? '' }}" class="form-control" style="height: 55px;">
                                                </div>
                                                <div class="col-3 form-group">
                                                    <label><i
                                                            class="fa-solid fa-clock-rotate-left text-primary"></i> End Time</label>
                                                    <input type="time" name="partner_doctor_visit_end_time[]" value="{{ $visit['end_time'] ?? '' }}" class="form-control" style="height: 55px;">
                                                </div>
                                                <div class="col-1 form-group d-flex flex-column justify-content-center">
                                                    <label>Action</label>
                                                    <button type="button" class="btn btn-danger rounded remove-row">Remove</button>
                                                </div>


                                            </div>
                                            @endforeach
                                        </div>
                                        <div class="col-12 d-flex justify-content-center align-items-center mb-3">
                                            <button type="button" id="add-row" class="btn btn-primary rounded" style="font-weight: 700;">Add Visit Schedule</button>
                                        </div>
                                    </div>

                                    <!-- Submit Button -->
                                    <div class="d-flex justify-content-center w-100">
                                        <button type="submit" class="btn btn-danger rounded" style="font-weight: 700;">Update Contact Person</button>
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






        <!-- OPD Banner Upload Edit & Show Modal -->
        <div class="modal fade" id="myOPDBanner" tabindex="-1" role="dialog" aria-labelledby="myOPDBannerLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">

                    <div class="modal-body">
                        <h3 class="text-center text-primary" id="myOPDBannerLabel" style="font-weight: 700; font-size: 1.8rem;"><span class="text-danger">+</span> Upload OPD Banner <span class="text-danger">+</span></h3>

                        <!-- Display Uploaded Image (Dynamically) -->

                        <div class="img-b d-flex justify-content-center align-items-center mt-4">
                            @if($opdBanner && isset($opdBanner->opdbanner))
                            <!-- Show the uploaded OPD banner -->
                            <img src="{{ asset('storage/' . $opdBanner->opdbanner) }}" alt="OPD Banner" class="img-fluid">
                            @else
                            <!-- Show placeholder if no OPD banner exists -->
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRDVuaQbojYLTlYezNW7HPVIYO6QiLZsd8RFP86jMuySoBlJ369aVAK0Mtzo7La2hyVcxU&usqp=CAU" class="img-fluid" alt="Placeholder OPD Banner">
                            @endif
                        </div>


                        <form action="{{ route('partner.opd.banner.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mt-4">
                                <label for="opdbanner" class="form-label" style="font-weight: 700;"><i class="fa fa-image text-danger" aria-hidden="true"></i> Upload OPD Banner <span class="text-danger">*</span></label>
                                <input class="form-control" type="file" id="opdbanner" name="opdbanner">
                            </div>
                            <div class="modal-foote d-flex justify-content-between align-items-center" style="gap: 15px;">
                                <button type="button" class="btn btn-danger rounded w-100" data-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary rounded w-100">Save Changes</button>
                            </div>
                        </form>

                    </div>

                </div>
            </div>
        </div>


        <!-- Pathology Banner Upload Edit & Show Modal -->
        <div class="modal fade" id="myPathologyBanner" tabindex="-1" role="dialog" aria-labelledby="myPathologyBannerLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">

                    <div class="modal-body">
                        <h3 class="text-center text-primary" id="myPathologyBannerLabel" style="font-weight: 700; font-size: 1.8rem;"><span class="text-danger">+</span> Upload Pathology Banner <span class="text-danger">+</span></h3>

                        <div class="img-b d-flex justify-content-center align-items-center mt-4">
                            @if($pathologyBanner && isset($pathologyBanner->pathologybanner))
                            <!-- Show the uploaded OPD banner -->
                            <img src="{{ asset('storage/' . $pathologyBanner->pathologybanner) }}" alt="Pathology Banner" class="img-fluid">
                            @else
                            <!-- Show placeholder if no OPD banner exists -->
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRDVuaQbojYLTlYezNW7HPVIYO6QiLZsd8RFP86jMuySoBlJ369aVAK0Mtzo7La2hyVcxU&usqp=CAU" class="img-fluid" alt="Placeholder OPD Banner">
                            @endif
                        </div>


                        <form action="{{ route('partner.pathology.banner.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mt-4">
                                <label for="pathologybanner" class="form-label" style="font-weight: 700;"><i class="fa fa-image text-danger" aria-hidden="true"></i> Upload Pathology Banner <span class="text-danger">*</span></label>
                                <input class="form-control" type="file" id="pathologybanner" name="pathologybanner">
                            </div>
                            <div class="modal-foote d-flex justify-content-between align-items-center" style="gap: 15px;">
                                <button type="button" class="btn btn-danger rounded w-100" data-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary rounded w-100">Save Changes</button>
                            </div>
                        </form>

                    </div>

                </div>
            </div>
        </div>



        <!-- Doctor Banner Upload Edit & Show Modal -->
        <div class="modal fade" id="myDoctorBanner" tabindex="-1" role="dialog" aria-labelledby="myDoctorBannerLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">

                    <div class="modal-body">
                        <h3 class="text-center text-primary" id="myDoctorBannerLabel" style="font-weight: 700; font-size: 1.8rem;"><span class="text-danger">+</span> Upload Docotor Banner <span class="text-danger">+</span></h3>

                        <div class="img-b d-flex justify-content-center align-items-center mt-4">
                            @if($doctorBanner && isset($doctorBanner->doctorbanner))
                            <!-- Show the uploaded OPD banner -->
                            <img src="{{ asset('storage/' . $doctorBanner->doctorbanner) }}" alt="Doctor Banner" class="img-fluid">
                            @else
                            <!-- Show placeholder if no OPD banner exists -->
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRDVuaQbojYLTlYezNW7HPVIYO6QiLZsd8RFP86jMuySoBlJ369aVAK0Mtzo7La2hyVcxU&usqp=CAU" class="img-fluid" alt="Placeholder OPD Banner">
                            @endif
                        </div>


                        <form action="{{ route('partner.doctor.banner.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mt-4">
                                <label for="doctorbanner" class="form-label" style="font-weight: 700;"><i class="fa fa-image text-danger" aria-hidden="true"></i> Upload Doctor Banner <span class="text-danger">*</span></label>
                                <input class="form-control" type="file" id="doctorbanner" name="doctorbanner">
                            </div>
                            <div class="modal-foote d-flex justify-content-between align-items-center" style="gap: 15px;">
                                <button type="button" class="btn btn-danger rounded w-100" data-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary rounded w-100">Save Changes</button>
                            </div>
                        </form>

                    </div>

                </div>
            </div>
        </div>






        <!-- OPD Banner Upload Edit & Show Modal -->
        <div class="modal fade" id="myOPDBanner" tabindex="-1" role="dialog" aria-labelledby="myOPDBannerLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">

                    <div class="modal-body">
                        <h3 class="text-center text-primary" id="myOPDBannerLabel" style="font-weight: 700; font-size: 1.8rem;"><span class="text-danger">+</span> Upload OPD Banner <span class="text-danger">+</span></h3>

                        <!-- Display Uploaded Image (Dynamically) -->

                        <div class="img-b d-flex justify-content-center align-items-center mt-4">
                            @if($opdBanner && isset($opdBanner->opdbanner))
                            <!-- Show the uploaded OPD banner -->
                            <img src="{{ asset('storage/' . $opdBanner->opdbanner) }}" alt="OPD Banner" class="img-fluid">
                            @else
                            <!-- Show placeholder if no OPD banner exists -->
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRDVuaQbojYLTlYezNW7HPVIYO6QiLZsd8RFP86jMuySoBlJ369aVAK0Mtzo7La2hyVcxU&usqp=CAU" class="img-fluid" alt="Placeholder OPD Banner">
                            @endif
                        </div>


                        <form action="{{ route('partner.opd.banner.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mt-4">
                                <label for="opdbanner" class="form-label" style="font-weight: 700;"><i class="fa fa-image text-danger" aria-hidden="true"></i> Upload OPD Banner <span class="text-danger">*</span></label>
                                <input class="form-control" type="file" id="opdbanner" name="opdbanner">
                            </div>
                            <div class="modal-foote d-flex justify-content-between align-items-center" style="gap: 15px;">
                                <button type="button" class="btn btn-danger rounded w-100" data-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary rounded w-100">Save Changes</button>
                            </div>
                        </form>

                    </div>

                </div>
            </div>
        </div>


        <!-- Pathology Banner Upload Edit & Show Modal -->
        <div class="modal fade" id="myPathologyBanner" tabindex="-1" role="dialog" aria-labelledby="myPathologyBannerLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">

                    <div class="modal-body">
                        <h3 class="text-center text-primary" id="myPathologyBannerLabel" style="font-weight: 700; font-size: 1.8rem;"><span class="text-danger">+</span> Upload Pathology Banner <span class="text-danger">+</span></h3>

                        <div class="img-b d-flex justify-content-center align-items-center mt-4">
                            @if($pathologyBanner && isset($pathologyBanner->pathologybanner))
                            <!-- Show the uploaded OPD banner -->
                            <img src="{{ asset('storage/' . $pathologyBanner->pathologybanner) }}" alt="Pathology Banner" class="img-fluid">
                            @else
                            <!-- Show placeholder if no OPD banner exists -->
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRDVuaQbojYLTlYezNW7HPVIYO6QiLZsd8RFP86jMuySoBlJ369aVAK0Mtzo7La2hyVcxU&usqp=CAU" class="img-fluid" alt="Placeholder OPD Banner">
                            @endif
                        </div>


                        <form action="{{ route('partner.pathology.banner.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mt-4">
                                <label for="pathologybanner" class="form-label" style="font-weight: 700;"><i class="fa fa-image text-danger" aria-hidden="true"></i> Upload Pathology Banner <span class="text-danger">*</span></label>
                                <input class="form-control" type="file" id="pathologybanner" name="pathologybanner">
                            </div>
                            <div class="modal-foote d-flex justify-content-between align-items-center" style="gap: 15px;">
                                <button type="button" class="btn btn-danger rounded w-100" data-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary rounded w-100">Save Changes</button>
                            </div>
                        </form>

                    </div>

                </div>
            </div>
        </div>



        <!-- Doctor Banner Upload Edit & Show Modal -->
        <div class="modal fade" id="myDoctorBanner" tabindex="-1" role="dialog" aria-labelledby="myDoctorBannerLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">

                    <div class="modal-body">
                        <h3 class="text-center text-primary" id="myDoctorBannerLabel" style="font-weight: 700; font-size: 1.8rem;"><span class="text-danger">+</span> Upload Docotor Banner <span class="text-danger">+</span></h3>

                        <div class="img-b d-flex justify-content-center align-items-center mt-4">
                            @if($doctorBanner && isset($doctorBanner->doctorbanner))
                            <!-- Show the uploaded OPD banner -->
                            <img src="{{ asset('storage/' . $doctorBanner->doctorbanner) }}" alt="Doctor Banner" class="img-fluid">
                            @else
                            <!-- Show placeholder if no OPD banner exists -->
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRDVuaQbojYLTlYezNW7HPVIYO6QiLZsd8RFP86jMuySoBlJ369aVAK0Mtzo7La2hyVcxU&usqp=CAU" class="img-fluid" alt="Placeholder OPD Banner">
                            @endif
                        </div>


                        <form action="{{ route('partner.doctor.banner.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mt-4">
                                <label for="doctorbanner" class="form-label" style="font-weight: 700;"><i class="fa fa-image text-danger" aria-hidden="true"></i> Upload Doctor Banner <span class="text-danger">*</span></label>
                                <input class="form-control" type="file" id="doctorbanner" name="doctorbanner">
                            </div>
                            <div class="modal-foote d-flex justify-content-between align-items-center" style="gap: 15px;">
                                <button type="button" class="btn btn-danger rounded w-100" data-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary rounded w-100">Save Changes</button>
                            </div>
                        </form>

                    </div>

                </div>
            </div>
        </div>






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
    <script src="../partner-assets/js/add-section-doctor.js"></script>

    <script>
        $(document).ready(function() {
            // Add new row when "Add Visit Schedule" is clicked
            $('#add-row').click(function() {
                var newRow = `
            <div class="row w-100 mb-2 visit-schedule-row p-3">
                <div class="col-4 form-group">
                    <label for="partner_doctor_visit_day[]"><i class="fa-solid fa-calendar-days text-primary"></i> Day</label>
                    <select name="partner_doctor_visit_day[]" class="form-control" style="height: 55px;">
                        <option selected disabled>Select Day</option>
                        <option value="Allday">Allday</option>
                        <option value="Monday">Monday</option>
                        <option value="Tuesday">Tuesday</option>
                        <option value="Wednesday">Wednesday</option>
                        <option value="Thursday">Thursday</option>
                        <option value="Friday">Friday</option>
                        <option value="Saturday">Saturday</option>
                        <option value="Sunday">Sunday</option>
                    </select>
                </div>
                <div class="col-3 form-group">
                    <label><i class="fa-solid fa-clock text-primary"></i> Start Time</label>
                    <input type="time" name="partner_doctor_visit_start_time[]" class="form-control" style="height: 55px;">
                </div>
                <div class="col-3 form-group">
                    <label><i class="fa-solid fa-clock-rotate-left text-primary"></i> End Time</label>
                    <input type="time" name="partner_doctor_visit_end_time[]" class="form-control" style="height: 55px;">
                </div>
                <div class="col-1 form-group d-flex flex-column justify-center align-items-center">
                    <label>Action</label>
                    <button type="button" class="btn btn-danger rounded remove-row">Remove</button>
                </div>
            </div>
        `;
                $('#visit-schedule-wrapper').append(newRow); // Append the new row to the wrapper
            });

            // Remove row when "X" is clicked
            $(document).on('click', '.remove-row', function() {
                $(this).closest('.visit-schedule-row').remove(); // Remove the closest .visit-schedule-row
            });
        });
    </script>
</body>

</html>