<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Super | Partners Inquiry Replies</title>
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
                                <div class="col-12 mt-5">


                                    <div class="row">


                                        <div class="col-3">
                                            <h3 class="font-weight-bold">Partners Inquiry Replies</h3>
                                        </div>



                                        <div class="col-9 d-flex justify-content-end align-items-center">
                                            <nav aria-label="Page navigation">
                                                <ul class="pagination">
                                                    {{-- Previous Page Link --}}
                                                    @if ($repliedTickets->onFirstPage())
                                                    <li class="page-item disabled"><span class="page-link">Prev</span></li>
                                                    @else
                                                    <li class="page-item"><a class="page-link" href="{{ $repliedTickets->previousPageUrl() }}">Prev</a></li>
                                                    @endif

                                                    {{-- Pagination Elements --}}
                                                    @foreach ($repliedTickets->links()->elements[0] as $page => $url)
                                                    @if ($page == $repliedTickets->currentPage())
                                                    <li class="page-item active"><span class="page-link">{{ $page }}</span></li>
                                                    @else
                                                    <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                                                    @endif
                                                    @endforeach

                                                    {{-- Next Page Link --}}
                                                    @if ($repliedTickets->hasMorePages())
                                                    <li class="page-item"><a class="page-link" href="{{ $repliedTickets->nextPageUrl() }}">Next</a></li>
                                                    @else
                                                    <li class="page-item disabled"><span class="page-link">Next</span></li>
                                                    @endif
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>




                                    <table class="table table-stripped table-bordered mt-4">
                                        <thead>
                                            <tr>
                                                <th>Ticket ID</th>
                                                <th>Date & Time</th>
                                                <th>Clinic Name</th>
                                                <th>Contact Person</th>
                                                <th>Contact Details</th>
                                                <th>Address Details</th>
                                                <th>Inquiries</th>
                                                <th>Replies</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach($repliedTickets as $ticket)
                                            <tr>

                                                <td><b class="badge badge-success">{{ $ticket->ticket_id }}</b></td>

                                                <td>
                                                    <p class="m-0"><b>Raised on: {{ \Carbon\Carbon::parse($ticket->created_at)->format('jS M Y - h:i A') }}</b></p>

                                                    @if (!empty($ticket->partner_problem_reply))
                                                    <p class="m-0"><b class="text-success">Replied on: {{ \Carbon\Carbon::parse($ticket->updated_at)->format('jS M Y - h:i A') }}</b></p>
                                                    @else
                                                    <p class="m-0"><b class="text-danger">Not Replied Yet</b></p>
                                                    @endif
                                                </td>


                                                <td><b class="badge badge-primary" style="text-transform: capitalize;">{{ $ticket->partner_clinic_name }}</b></td>

                                                <td><b style="text-transform: capitalize;">{{ $ticket->partner_contact_person_name }}</b></td>
                                                <td>
                                                    <p class="m-0"><b>Moble: {{ $ticket->partner_mobile_number }}</b></p>
                                                    <p class="m-0"><b>Email: {{ $ticket->partner_email }}</b></p>
                                                </td>

                                                <td>
                                                    <p class="m-0"><b>State: {{ $ticket->partner_state }}</b></p>
                                                    <p class="m-0"><b>City: {{ $ticket->partner_city }}</b></p>
                                                </td>


                                                <td><a href="" data-target="#myDescModal{{ $ticket->id }}" data-toggle="modal"
                                                        class="ed-btn"><i class="fa-solid fa-turn-down text-primaryy"
                                                            style="font-size: 1.1rem;"></i></a></td>


                                                <td><a href="" data-target="#myReplyModal{{ $ticket->id }}" data-toggle="modal"
                                                        class="ed-btn"><i class="fa-solid fa-reply text-dark"
                                                            style="font-size: 1.1rem;"></i></a></td>


                                                <td><a href="" data-target="#myDeleteModal{{ $ticket->id }}" data-toggle="modal"
                                                        class="ed-btn"><i class="fa-solid fa-trash-can text-danger"
                                                            style="font-size: 1.1rem;"></i></a></td>

                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>


                                </div>
                            </div>
                        </div>
                    </div>

                </div>














                <!-- Delete Modal -->
                @foreach($repliedTickets as $ticket)
                <div class="modal fade" id="myDeleteModal{{ $ticket->id }}" tabindex="-1" role="dialog"
                    aria-labelledby="myDeleteModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">

                            <form class="modal-body" action="{{ route('superadmin.super-reply.delete', $ticket->id) }}" method="post" enctype="multipart/form-data">
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




                <!-- Inquiry Modal -->
                @foreach($repliedTickets as $ticket)
                <div class="modal fade" id="myDescModal{{ $ticket->id }}" tabindex="-1" role="dialog"
                    aria-labelledby="myDeleteModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">

                            <div class="modal-header">
                                <h5 class="modal-title text-primary" id="myDescModalLabel"
                                    style="font-weight: 700; font-size: 1.3rem;">Inquiry</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                        aria-hidden="true">&times;</span></button>
                            </div>

                            <div class="modal-body">

                                <p style="font-weight: 700;">{{ $ticket->partner_clinic_name}} - {{ $ticket->partner_contact_person_name}}</p>

                                <p class="mt-2 text-start text-danger" style="text-align: justify; font-weight: 700;">{{ $ticket->partner_problem}}</p>

                            </div>
                        </div>


                    </div>
                </div>
                @endforeach


                <!-- Reply Modal -->
                @foreach($repliedTickets as $ticket)
                <div class="modal fade" id="myReplyModal{{ $ticket->id }}" tabindex="-1" role="dialog"
                    aria-labelledby="myReplyModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">

                            <div class="modal-header">
                                <h5 class="modal-title text-primary" id="myReplyModalLabel"
                                    style="font-weight: 700; font-size: 1.3rem;">Reply</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                        aria-hidden="true">&times;</span></button>
                            </div>

                            <form action="" class="modal-body">

                                <p style="font-weight: 700; font-size: 1.02rem;">{{ $ticket->partner_clinic_name}} - {{ $ticket->partner_contact_person_name}}</p>


                                <p style="font-weight: 700; font-size: 1.03rem;">Partner's Inquiry:</p>

                                <p class="text-start text-danger" style="text-align: justify; font-weight: 500; font-size: 1.02rem;">{{ $ticket->partner_problem}}
                                </p>




                                <p style="font-weight: 700; font-size: 1.03rem;">Our Reply:</p>

                                <p class="text-start text-success" style="text-align: justify; font-weight: 500; font-size: 1.02rem;">{{ $ticket->partner_problem_reply}}
                                </p>

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
</body>

</html>