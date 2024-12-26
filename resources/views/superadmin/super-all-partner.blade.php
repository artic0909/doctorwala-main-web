<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Super | All Partners</title>

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
                <a class="navbar-brand brand-logo mr-5" href="/superadmin/super-dashboard" style="font-weight: 900;"><img
                        src="{{asset('../img/logo3.png')}}" alt="logo"></a>
                <a class="navbar-brand brand-logo-mini" href="/superadmin/super-dashboard"><img src="{{asset('fav5.png')}}"
                        alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <i class="fa-solid fa-bars"></i>
                </button>

                <form method="GET" action="{{ route('superadmin.super-all-partner.get') }}" class="d-flex w-100">
                    <input type="search" id="search" name="search" value="{{ request('search') }}"
                        placeholder="Search Here ........" class="form-control mx-4 w-100">
                </form>

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

                                    <div class="row">
                                        <div class="col-3">
                                            <h3 class="font-weight-bold">All Partners</h3>
                                            <a href="{{ route('superadmin.export.partner') }}" style="text-decoration: underline;">Export</a> <!-- export as excel -->
                                        </div>

                                        <div class="col-9 d-flex justify-content-end align-items-center">
                                            <nav aria-label="Page navigation">
                                                <ul class="pagination">
                                                    <!-- Previous Page Link -->
                                                    @if ($partners->onFirstPage())
                                                    <li class="page-item disabled">
                                                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Prev</a>
                                                    </li>
                                                    @else
                                                    <li class="page-item">
                                                        <a class="page-link" href="{{ $partners->previousPageUrl() }}">Prev</a>
                                                    </li>
                                                    @endif

                                                    <!-- Page Number Links -->
                                                    @foreach ($partners->getUrlRange(1, $partners->lastPage()) as $page => $url)
                                                    <li class="page-item {{ $partners->currentPage() == $page ? 'active' : '' }}">
                                                        <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                                    </li>
                                                    @endforeach

                                                    <!-- Next Page Link -->
                                                    @if ($partners->hasMorePages())
                                                    <li class="page-item">
                                                        <a class="page-link" href="{{ $partners->nextPageUrl() }}">Next</a>
                                                    </li>
                                                    @else
                                                    <li class="page-item disabled">
                                                        <a class="page-link" href="#" aria-disabled="true">Next</a>
                                                    </li>
                                                    @endif
                                                </ul>
                                            </nav>
                                        </div>




                                    </div>



                                    <table class="table table-stripped table-bordered mt-4">
                                        <thead>
                                            <tr>
                                                <th>Staus</th>
                                                <th>Actions</th>
                                                <th>ID</th>
                                                <th>Partner ID</th>
                                                <th>Type</th>
                                                <th>Clinic Name</th>
                                                <th>Contact Person</th>
                                                <th>Email ID</th>
                                                <th>State/City</th>
                                                <th>Mobile</th>
                                            </tr>
                                        </thead>

                                        <tbody>

                                            @foreach ($partners as $partner)
                                            <tr>
                                                <td>
                                                    @if($partner->status == 'Active')
                                                    <!-- If partner is Active -->
                                                    <a href="" data-target="#myActiveInactiveModal{{$partner->id}}" data-toggle="modal" class="ed-btn">
                                                        <i class="fa-solid fa-toggle-on text-success" style="font-size: 1.1rem;"></i>
                                                    </a>
                                                    @else
                                                    <!-- If partner is Inactive -->
                                                    <a href="" data-target="#myActiveInactiveModal{{$partner->id}}" data-toggle="modal" class="ed-btn">
                                                        <i class="fa-solid fa-toggle-off text-danger" style="font-size: 1.1rem;"></i>
                                                    </a>
                                                    @endif
                                                </td>


                                                <td>
                                                    <a href="" data-target="#myDeleteModal{{$partner->id}}" data-toggle="modal"
                                                        class="ed-btn"><i class="fa-solid fa-trash-can text-danger"
                                                            style="font-size: 1.1rem;"></i></a>

                                                    <a href="" data-target="#myEditModal{{$partner->id}}" data-toggle="modal"
                                                        class="ed-btn mt-2"><i class="fa-solid fa-pen-to-square text-primary"
                                                            style="font-size: 1.1rem;"></i></a>


                                                </td>


                                                <td>
                                                    <p class="m-0" style="font-weight: 700;">
                                                        {{$partner->id}}
                                                    </p>
                                                </td>

                                                <td>
                                                    <p class="m-0" style="font-weight: 700;">
                                                        {{$partner->partner_id}}
                                                    </p>
                                                </td>

                                                <td>
                                                    <p class="m-0" style="font-weight: 700;">
                                                        @php
                                                        $registrationTypes = is_string($partner->registration_type) ? explode(',', $partner->registration_type) : $partner->registration_type;
                                                        @endphp

                                                        @foreach($registrationTypes as $type)
                                                        <span>{{ $type }}</span> @if(!$loop->last) - @endif
                                                        @endforeach
                                                    </p>
                                                </td>


                                                <td>
                                                    <p class="m-0" style="font-weight: 700;">{{$partner->partner_clinic_name}}</p>
                                                </td>

                                                <td>
                                                    <p class="m-0" style="font-weight: 700;">{{$partner->partner_contact_person_name}}</p>
                                                </td>




                                                <td>
                                                    <a href="mailto:{{$partner->partner_email}}" class="text-dark" style="text-decoration: underline;">{{$partner->partner_email}}</a>
                                                </td>



                                                <td>
                                                    <p class="m-0" style="font-weight: 700;">
                                                        <span>{{$partner->partner_state}} - </span>
                                                        <span class="text-primary">{{$partner->partner_city}}</span>
                                                    </p>
                                                </td>

                                                <td><a href="tel:{{$partner->partner_mobile_number}}" style="text-decoration: underline;">{{$partner->partner_mobile_number}}</a></td>




                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>


                                </div>
                            </div>
                        </div>
                    </div>





                </div>










                <!-- floating right button -->
                <a type="button" class="btn btn-primary rounded btn-icon-text p-0 px-2 py-2 floating-btnn"
                    href="/superadmin/super-add-partners" style="width: fit-content;">
                    <i class="fa fa-2x fa-plus" aria-hidden="true" style="font-size: 1.7rem;"></i>
                </a>







                <!-- My Active Inactive  Modal -->
                @foreach ($partners as $partner)
                <div class="modal fade" id="myActiveInactiveModal{{$partner->id}}" tabindex="-1" role="dialog"
                    aria-labelledby="myActiveInactiveModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">



                            <form class="modal-body" action="{{route('superadmin.status.edit', $partner->id)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')



                                <div class="form-group">
                                    <label for="status"><i class="fa fa-stethoscope text-success"
                                            aria-hidden="true"></i>
                                        Set Status <span class="text-danger">*</span></label>
                                    <select name="status" id="status" class="form-control">
                                        <option value="Inactive" selected>{{$partner->status}}</option>
                                        <option value="">---Select Status---</option>
                                        <option value="Active">Active</option>
                                        <option value="Inactive">Inactive</option>
                                    </select>
                                </div>



                                <button type="submit" class="btn btn-success rounded w-100">Submit</button>
                            </form>

                        </div>
                    </div>
                </div>
                @endforeach



                <!-- Delete Modal -->
                @foreach($partners as $partner)
                <div class="modal fade" id="myDeleteModal{{$partner->id}}" tabindex="-1" role="dialog"
                    aria-labelledby="myDeleteModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">

                            <form action="{{ route('superadmin.status.delete', $partner->id )}}" class="modal-body" method="POST">
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





                <!-- Edit Modal -->
                @foreach($partners as $partner)
                <div class="modal fade" id="myEditModal{{$partner->id}}" tabindex="-1" role="dialog"
                    aria-labelledby="myDeleteModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">

                            <form action="{{route('superadmin.update.partner', $partner->id)}}" class="modal-body" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <h3 style="font-weight: 700; color: red; font-size: 2rem; text-align: center;">Edit Partner</h3>

                                <div class="from-view row  mt-3">

                                    <div class="col-12 form-group">
                                        <label for="name" style="font-weight: 700;">
                                            <i class="fa-solid fa-sitemap text-primary"></i> Type
                                            <span class="text-danger">*</span>
                                        </label>

                                        <div class="group-main d-flex">
                                            {{-- Conditionally show OPD and Pathology --}}
                                            @if (is_array($partner->registration_type))
                                            @if (in_array('OPD', $partner->registration_type) || in_array('Pathology', $partner->registration_type))
                                            <div class="group ml-3">
                                                <label for="opd" style="font-weight: 700;">OPD</label>
                                                <input
                                                    type="checkbox"
                                                    name="registration_type[]"
                                                    id="opd"
                                                    value="OPD"
                                                    style="cursor: pointer;"
                                                    {{ in_array('OPD', $partner->registration_type) ? 'checked' : '' }}>
                                            </div>

                                            <div class="group ml-3">
                                                <label for="pathology" style="font-weight: 700;">Pathology</label>
                                                <input
                                                    type="checkbox"
                                                    name="registration_type[]"
                                                    id="pathology"
                                                    value="Pathology"
                                                    style="cursor: pointer;"
                                                    {{ in_array('Pathology', $partner->registration_type) ? 'checked' : '' }}>
                                            </div>
                                            @endif
                                            @endif

                                            {{-- Conditionally show Doctor --}}
                                            @if (is_array($partner->registration_type) && count($partner->registration_type) === 1 && in_array('Doctor', $partner->registration_type))
                                            <div class="group ml-3">
                                                <label for="doctor" style="font-weight: 700;">Doctor</label>
                                                <input
                                                    type="checkbox"
                                                    name="registration_type[]"
                                                    id="doctor"
                                                    value="Doctor"
                                                    style="cursor: pointer;"
                                                    {{ in_array('Doctor', $partner->registration_type) ? 'checked' : '' }}>
                                            </div>
                                            @endif
                                        </div>
                                    </div>




                                    <div class="col-4 form-group">
                                        <label for="partner_clinic_name" style="font-weight: 700;"><i
                                                class="fa fa-hospital text-primary" aria-hidden="true"></i>
                                            Clinic Name
                                            <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="partner_clinic_name" name="partner_clinic_name"
                                            style="height: 55px;" value="{{$partner->partner_clinic_name}}">
                                    </div>




                                    <div class="col-4 form-group">
                                        <label for="partner_contact_person_name" style="font-weight: 700;"><i
                                                class="fa-solid fa-user text-primary"></i>
                                            Contact Person <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="partner_contact_person_name" name="partner_contact_person_name"
                                            style="height: 55px;" value="{{$partner->partner_contact_person_name}}">
                                    </div>



                                    <div class="col-4 form-group">
                                        <label for="partner_mobile_number" style="font-weight: 700;"><i
                                                class="fa fa-phone text-primary" aria-hidden="true"></i> Mobile
                                            Number
                                            <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="partner_mobile_number" name="partner_mobile_number"
                                            style="height: 55px;" value="{{$partner->partner_mobile_number}}">
                                    </div>




                                    <div class="col-4 form-group">
                                        <label for="partner_email" style="font-weight: 700;"><i
                                                class="fa fa-envelope text-primary" aria-hidden="true"></i>
                                            Email Id <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="partner_email" name="partner_email"
                                            style="height: 55px;" value="{{$partner->partner_email}}">
                                    </div>





                                    <div class="col-4 form-group">
                                        <label for="partner_landmark" style="font-weight: 700;"><i
                                                class="fa fa-map-pin text-primary" aria-hidden="true"></i>
                                            Landmark <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="partner_landmark" name="partner_landmark"
                                            style="height: 55px;" value="{{$partner->partner_landmark}}">
                                    </div>



                                    <div class="col-4 form-group">
                                        <label for="partner_pincode" style="font-weight: 700;"><i
                                                class="fa fa-location-pin-lock text-primary"
                                                aria-hidden="true"></i>
                                            Pin Code <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="partner_pincode" name="partner_pincode"
                                            style="height: 55px;" value="{{$partner->partner_pincode}}">
                                    </div>



                                    <div class="col-4 form-group">
                                        <label style="font-weight: 700;"><i
                                                class="fa fa-map-location-dot text-primary"
                                                aria-hidden="true"></i>
                                            Google Map <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control"
                                            style="height: 55px;" value="{{$partner->partner_google_map_link}}">
                                    </div>





                                    <div class="col-4 form-group">
                                        <label for="partner_state" style="font-weight: 700;"><i
                                                class="fa-solid fa-globe text-primary"></i>
                                            State <span class="text-danger">*</span></label>
                                        <select name="partner_state" id="partner_state" class="form-control" style="height: 55px;">
                                            <option selected>{{$partner->partner_state}}</option>
                                            <option>---Select State---</option>
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

                                        <input type="text" name="partner_city" id="partner_city" class="form-control" style="height: 55px;" value="{{$partner->partner_city}}">
                                    </div>




                                    <div class="col-12 form-group">
                                        <label for="partner_address" style="font-weight: 700;"><i
                                                class="fa-solid fa-location-dot text-primary"></i> Address
                                            <span class="text-danger">*</span></label>

                                        <textarea name="partner_address" id="partner_address" class="form-control" rows="7">{{$partner->partner_address}}</textarea>
                                    </div>



                                    <div class="col-6 form-group">
                                        <label style="font-weight: 700;"><i
                                                class="fa-solid fa-lock text-primary"></i> Existing Password
                                            <span class="text-danger">*</span></label>

                                        <input type="text" class="form-control" style="height: 55px;" value="*********************" readonly>
                                    </div>



                                    <div class="col-6 form-group">
                                        <label for="partner_password" style="font-weight: 700;"><i
                                                class="fa-solid fa-lock text-primary"></i> New Password
                                            <span class="text-danger">*</span></label>

                                        <input type="text" class="form-control" style="height: 55px;" id="partner_password" name="partner_password" placeholder="Enter New Password">
                                    </div>






                                    <div class="d-flex justify-content-center w-100">
                                        <button type="submit" class="btn btn-danger rounded" style="font-weight: 700;">Update Partner Details</button>
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













    </div>
    <!-- container-scroller -->

    <!-- plugins:js -->
    <script src="{{asset('../partner-assets/vendors/js/vendor.bundle.base.js')}}">
    </script>
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