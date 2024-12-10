<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Partner OPD Details Show</title>
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
                                    <h3 class="font-weight-bold">Your OPD Details !</h3>
                                    <h6 class="font-weight-normal mb-0"><span><i class="fa fa-stethoscope text-danger"
                                                aria-hidden="true"></i></span>&nbsp;Here is the complete list of your
                                        OPD details.
                                    </h6>
                                </div>
                            </div>


                            <div class="row m-auto">
                                <div class="col-12 mt-4">


                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Type</th>
                                                <th scope="col">Edit</th>
                                                <th scope="col">Delete</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Designation</th>
                                                <th scope="col">Doctor Name</th>
                                                <th scope="col">Specialization</th>
                                                <th scope="col">Day & Time</th>
                                                <th scope="col">Fees</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse($storedData as $data)
                                            <tr>
                                                <th scope="row">
                                                    <i class="fa fa-stethoscope text-primary fa-2x" aria-hidden="true"></i>
                                                </th>

                                                <!-- Edit Button -->
                                                <td>
                                                    <a href="" data-target="#myEditModal{{ $data->id }}" data-toggle="modal" class="ed-btn">
                                                        <i class="fa-solid fa-pen-to-square text-success" style="font-size: 1.1rem;"></i>
                                                    </a>
                                                </td>

                                                <!-- Delete Button -->
                                                <td>
                                                    <a href="" data-target="#myDeleteModal{{ $data->id }}" data-toggle="modal" class="ed-btn">
                                                        <i class="fa-solid fa-trash-can text-danger" style="font-size: 1.1rem;"></i>
                                                    </a>
                                                </td>

                                                <!-- Status -->

                                                <td>
                                                    @if($data->status == 'Available')
                                                    <b class="badge badge-success p-3" style="font-size: 1.03rem;">Available</b>
                                                    @else
                                                    <b class="badge badge-danger p-3" style="font-size: 1.03rem;">Unavailable</b>
                                                    @endif
                                                </td>


                                                <!-- Doctor Designation -->
                                                <td style="font-size: 1.03rem;">
                                                    <p class="m-0"><b>{{ $data->doctor_designation }}</b></p>
                                                </td>

                                                <!-- Doctor Name -->
                                                <td style="font-size: 1.03rem;">
                                                    <p class="m-0"><b>{{ $data->doctor_name }}</b></p>
                                                </td>

                                                <!-- Doctor Specialist -->
                                                <td style="font-size: 1.03rem;">
                                                    <p class="m-0"><b>{{ $data->doctor_specialist }}</b></p>
                                                </td>

                                                <!-- Doctor Visit Days and Times -->
                                                <td style="font-size: 1.05rem;">
                                                    <ul style="list-style: none; padding-left: 0;">
                                                        @foreach($data->visit_day_time as $visit)
                                                        <li>
                                                            <p class="m-0"><b>{{ $visit['day'] }}</b></p>
                                                            <p class="m-0"><b>{{ $visit['start_time'] }} - {{ $visit['end_time'] }}</b></p>
                                                        </li>
                                                        @endforeach
                                                    </ul>
                                                </td>

                                                <!-- Doctor Fees -->
                                                <td style="font-size: 1.03rem;">
                                                    <p class="m-0"><b>₹ {{ $data->doctor_fees }}</b></p>
                                                </td>
                                            </tr>
                                            @empty
                                            <tr>
                                                <td colspan="8" class="text-center">
                                                    <p>No OPD Doctor Details Found.</p>
                                                </td>
                                            </tr>
                                            @endforelse
                                        </tbody>




                                    </table>


                                </div>


                            </div>
                        </div>
                    </div>








                </div>






                <!-- Edit Modal -->
                @foreach($storedData as $data)
                <div class="modal fade" id="myEditModal{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="myEditModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title text-primary" style="font-weight: 700;">
                                    <i class="fa fa-user-doctor text-primary" aria-hidden="true"></i> Edit OPD Details
                                </h3>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                            <form class="modal-body" action="{{ route('partner.opd.update', $data->id) }}" method="POST">
                                @csrf
                                @method('PUT')

                                <div class="form-group">
                                    <label for="status"><i class="fa fa-stethoscope text-danger" aria-hidden="true"></i> Status
                                        <span class="text-danger">*</span></label>
                                    <select class="form-control" name="status" id="status">
                                        <option selected>{{ $data->status }}</option>
                                        <option>---Select Status---</option>
                                        <option value="Available">Available</option>
                                        <option value="Unavailable">Unavailable</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="doctor_name"><i class="fa fa-stethoscope text-danger" aria-hidden="true"></i> Doctor Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="doctor_name" id="doctor_name" value="{{ $data->doctor_name }}">
                                </div>

                                <div class="form-group">
                                    <label for="doctor_designation"><i class="fa fa-stethoscope text-danger" aria-hidden="true"></i> Doctor Designation <span class="text-danger">*</span></label>
                                    <select class="form-control" name="doctor_designation" id="doctor_designation">
                                        <option selected>{{ $data->doctor_designation }}</option>
                                        <option>---Select Designation---</option>
                                        <option value="MD">MD</option>
                                        <option value="Dr">Dr</option>
                                        <option value="Prof">Prof</option>
                                        <option value="BDS">BDS</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="doctor_specialist"><i class="fa fa-stethoscope text-danger" aria-hidden="true"></i> Doctor Specialist <span class="text-danger">*</span></label>
                                    <select class="form-control" name="doctor_specialist" id="doctor_specialist">
                                        <option selected>{{ $data->doctor_specialist }}</option>
                                        <option>---Select Specialist---</option>
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

                                <div class="form-group">
                                    <label for="doctor_fees"><i class="fa fa-stethoscope text-danger" aria-hidden="true"></i> Doctor Fees <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="doctor_fees" id="doctor_fees" value="{{ $data->doctor_fees }}">
                                </div>

                                <label><i class="fa fa-calendar-days text-danger" aria-hidden="true"></i> Visiting Schedules</label>

                                <!-- Existing schedules loop -->
                                @foreach($data->visit_day_time as $index => $visit)
                                <div class="form-group" id="schedule-{{ $data->id }}-{{ $index }}">
                                    <label for="doctor_visit_day_{{ $data->id }}_{{ $index }}"><i class="fa fa-stethoscope text-danger" aria-hidden="true"></i> Day <span class="text-danger">*</span></label>
                                    <select class="form-control mb-2" name="doctor_visit_day[]" id="doctor_visit_day_{{ $data->id }}_{{ $index }}">
                                        <option selected>{{ $visit['day'] }}</option>
                                        <option>---Select Day---</option>
                                        <option value="All Day">All Day</option>
                                        <option value="Monday">Monday</option>
                                        <option value="Tuesday">Tuesday</option>
                                        <option value="Wednesday">Wednesday</option>
                                        <option value="Thursday">Thursday</option>
                                        <option value="Friday">Friday</option>
                                        <option value="Saturday">Saturday</option>
                                        <option value="Sunday">Sunday</option>
                                    </select>

                                    <label for="doctor_visit_start_time_{{ $data->id }}_{{ $index }}"><i class="fa fa-stethoscope text-danger" aria-hidden="true"></i> From Time <span class="text-danger">*</span></label>
                                    <input type="time" class="form-control mb-2" name="doctor_visit_start_time[]" id="doctor_visit_start_time_{{ $data->id }}_{{ $index }}" value="{{ $visit['start_time'] }}">

                                    <label for="doctor_visit_end_time_{{ $data->id }}_{{ $index }}"><i class="fa fa-stethoscope text-danger" aria-hidden="true"></i> To Time <span class="text-danger">*</span></label>
                                    <input type="time" class="form-control" name="doctor_visit_end_time[]" id="doctor_visit_end_time_{{ $data->id }}_{{ $index }}" value="{{ $visit['end_time'] }}">

                                </div>
                                @endforeach



                                <button type="submit" class="btn btn-primary rounded w-100">Submit</button>
                            </form>

                        </div>
                    </div>
                </div>
                @endforeach







                <!-- Delete Modal -->
                @foreach($storedData as $data)
                <div class="modal fade" id="myDeleteModal{{ $data->id }}" tabindex="-1" role="dialog"
                    aria-labelledby="myDeleteModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">

                            <form action="{{ route('partner.opd.delete', $data->id) }}" method="POST" class="modal-body">
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


    <!-- Add the following scripts for the add/remove functionality -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {
            // Add schedule section when Add button is clicked
            $(document).on('click', '#addthisectionbtn', function() {
                // Get the modal ID to target the correct modal
                var modalId = $(this).closest('.modal').attr('id');

                // Generate a new unique index for each schedule section
                var newIndex = $('#' + modalId + ' #schedule-container-' + modalId + ' .form-group').length + 1;

                // Create the new schedule section
                var newSection = `
            <div class="form-group" id="schedule-${modalId}-${newIndex}">
                <label for="doctor_visit_day_${modalId}_${newIndex}"><i class="fa fa-stethoscope text-danger" aria-hidden="true"></i> Day <span class="text-danger">*</span></label>
                <select class="form-control mb-2" name="doctor_visit_day[]" id="doctor_visit_day_${modalId}_${newIndex}">
                    <option>---Select Day---</option>
                    <option value="All Day">All Day</option>
                    <option value="Monday">Monday</option>
                    <option value="Tuesday">Tuesday</option>
                    <option value="Wednesday">Wednesday</option>
                    <option value="Thursday">Thursday</option>
                    <option value="Friday">Friday</option>
                    <option value="Saturday">Saturday</option>
                    <option value="Sunday">Sunday</option>
                </select>

                <label for="doctor_visit_start_time_${modalId}_${newIndex}"><i class="fa fa-stethoscope text-danger" aria-hidden="true"></i> From Time <span class="text-danger">*</span></label>
                <input type="time" class="form-control mb-2" name="doctor_visit_start_time[]" id="doctor_visit_start_time_${modalId}_${newIndex}">

                <label for="doctor_visit_end_time_${modalId}_${newIndex}"><i class="fa fa-stethoscope text-danger" aria-hidden="true"></i> To Time <span class="text-danger">*</span></label>
                <input type="time" class="form-control" name="doctor_visit_end_time[]" id="doctor_visit_end_time_${modalId}_${newIndex}">

                <button type="button" class="btn btn-danger btn-sm mt-2 remove-schedule-btn" data-schedule-id="${modalId}-${newIndex}">Remove</button>
            </div>
        `;

                // Append the new schedule section to the correct container within the modal
                $('#' + modalId + ' #schedule-container-' + modalId).append(newSection);
            });

            // Remove schedule section when Remove button is clicked
            $(document).on('click', '.remove-schedule-btn', function() {
                var scheduleId = $(this).data('schedule-id');
                $('#' + scheduleId).remove(); // Remove the corresponding schedule section
            });
        });
    </script>




</body>

</html>