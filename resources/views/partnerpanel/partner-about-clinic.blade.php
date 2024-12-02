<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Partner About Clinic Details</title>
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
                                    <h3 class="font-weight-bold">Add More About Clinic !</h3>
                                    <h6 class="font-weight-normal mb-0"><span><i class="fa fa-stethoscope text-danger"
                                                aria-hidden="true"></i></span>&nbsp;Write about clinic & mission &
                                        vision
                                    </h6>
                                </div>
                            </div>


                            <div class="row m-auto">
                                <div class="col-12 mt-4">

                                    <div class="row">
                                        <div class="col-12 col-xl-8 mb-4 mb-xl-0">

                                            <h4 class="font-weight-bold" style="font-weight: 900;"><i
                                                    class="fa-solid fa-circle-info text-primary"></i> ABOUT</h4>

                                        </div>
                                    </div>



                                    <div class="ab-view">
                                        <div class="form-control" style="height: auto; font-size: 1rem;">
                                            <p style="text-align: justify;">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae,
                                                adipisci voluptates, repudiandae eveniet distinctio consectetur quas
                                                blanditiis odit iste assumenda tempora facilis modi delectus nesciunt
                                                voluptatem, ipsa totam corrupti sapiente natus soluta. Et corporis iure
                                                fuga enim delectus! Laborum repellat adipisci, blanditiis, ex
                                                repellendus commodi dignissimos maiores sed, laboriosam labore ipsa
                                                provident dolore quo explicabo ipsam nam ad natus optio quibusdam omnis
                                                debitis. Distinctio rerum numquam porro quisquam suscipit natus
                                                excepturi, a laudantium, expedita placeat possimus molestiae assumenda!
                                                Quo ipsam laborum aliquam maiores molestias doloribus fugit ea repellat
                                                delectus! Rerum eaque dolore quos recusandae amet veritatis deleniti
                                                nemo perferendis temporibus repudiandae, odit, aspernatur non porro
                                                reiciendis praesentium! Nihil ad maxime animi fugiat perferendis quo
                                                adipisci totam cumque. Est explicabo cupiditate consequuntur sed minima,
                                                quas, nisi velit vero corporis reprehenderit eligendi optio mollitia
                                                vitae quo. Nesciunt praesentium distinctio, sequi magnam quod quis fuga
                                                recusandae animi? Quidem neque velit omnis doloremque. Nulla asperiores
                                                suscipit omnis veniam fugit maxime deserunt commodi corporis, id impedit
                                                odio, atque laborum eius ut delectus. Rem, enim vitae! Natus corrupti
                                                ipsa possimus? Omnis voluptas qui vel repellat id rerum aliquam, nulla
                                                culpa delectus soluta ratione odit dolorum earum tenetur autem error
                                                provident maiores blanditiis? Asperiores omnis doloremque non.
                                            </p>

                                            <div class="btnn d-flex justify-content-end">
                                                <button data-toggle="modal" data-target="#myAboutModal"
                                                    class="btn rounded btn-primary">Edit</button>
                                            </div>
                                        </div>
                                    </div>

                                </div>





                                <div class="col-12 mt-4">

                                    <div class="row">
                                        <div class="col-12 col-xl-8 mb-4 mb-xl-0">

                                            <h4 class="font-weight-bold" style="font-weight: 900;"><i
                                                    class="fa-solid fa-users-viewfinder text-primary"></i> MISSION</h4>

                                        </div>
                                    </div>



                                    <div class="ab-view">
                                        <div class="form-control" style="height: auto; font-size: 1rem;">
                                            <p style="text-align: justify;">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae,
                                                adipisci voluptates, repudiandae eveniet distinctio consectetur quas
                                                blanditiis odit iste assumenda tempora facilis modi delectus nesciunt
                                                voluptatem, ipsa totam corrupti sapiente natus soluta. Et corporis iure
                                                fuga enim delectus! Laborum repellat adipisci, blanditiis, ex
                                                repellendus commodi dignissimos maiores sed, laboriosam labore ipsa
                                                provident dolore quo explicabo ipsam nam ad natus optio quibusdam omnis
                                                debitis. Distinctio rerum numquam porro quisquam suscipit natus
                                                excepturi, a laudantium, expedita placeat possimus molestiae assumenda!
                                                Quo ipsam laborum aliquam maiores molestias doloribus fugit ea repellat
                                                delectus! Rerum eaque dolore quos recusandae amet veritatis deleniti
                                                nemo perferendis temporibus repudiandae, odit, aspernatur non porro
                                                reiciendis praesentium! Nihil ad maxime animi fugiat perferendis quo
                                                adipisci totam cumque. Est explicabo cupiditate consequuntur sed minima,
                                                quas, nisi velit vero corporis reprehenderit eligendi optio mollitia
                                                vitae quo. Nesciunt praesentium distinctio, sequi magnam quod quis fuga
                                                recusandae animi? Quidem neque velit omnis doloremque. Nulla asperiores
                                                suscipit omnis veniam fugit maxime deserunt commodi corporis, id impedit
                                                odio, atque laborum eius ut delectus. Rem, enim vitae! Natus corrupti
                                                ipsa possimus? Omnis voluptas qui vel repellat id rerum aliquam, nulla
                                                culpa delectus soluta ratione odit dolorum earum tenetur autem error
                                                provident maiores blanditiis? Asperiores omnis doloremque non.
                                            </p>

                                            <div class="btnn d-flex justify-content-end">
                                                <button type="submit" data-toggle="modal" data-target="#myMissionModal"
                                                    class="btn rounded btn-primary">Edit</button>
                                            </div>
                                        </div>
                                    </div>

                                </div>






                                <div class="col-12 mt-4">

                                    <div class="row">
                                        <div class="col-12 col-xl-8 mb-4 mb-xl-0">

                                            <h4 class="font-weight-bold" style="font-weight: 900;"><i
                                                    class="fa-solid fa-eye text-primary"></i> VISION</h4>

                                        </div>
                                    </div>



                                    <div class="ab-view">
                                        <div class="form-control" style="height: auto; font-size: 1rem;">
                                            <p style="text-align: justify;">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae,
                                                adipisci voluptates, repudiandae eveniet distinctio consectetur quas
                                                blanditiis odit iste assumenda tempora facilis modi delectus nesciunt
                                                voluptatem, ipsa totam corrupti sapiente natus soluta. Et corporis iure
                                                fuga enim delectus! Laborum repellat adipisci, blanditiis, ex
                                                repellendus commodi dignissimos maiores sed, laboriosam labore ipsa
                                                provident dolore quo explicabo ipsam nam ad natus optio quibusdam omnis
                                                debitis. Distinctio rerum numquam porro quisquam suscipit natus
                                                excepturi, a laudantium, expedita placeat possimus molestiae assumenda!
                                                Quo ipsam laborum aliquam maiores molestias doloribus fugit ea repellat
                                                delectus! Rerum eaque dolore quos recusandae amet veritatis deleniti
                                                nemo perferendis temporibus repudiandae, odit, aspernatur non porro
                                                reiciendis praesentium! Nihil ad maxime animi fugiat perferendis quo
                                                adipisci totam cumque. Est explicabo cupiditate consequuntur sed minima,
                                                quas, nisi velit vero corporis reprehenderit eligendi optio mollitia
                                                vitae quo. Nesciunt praesentium distinctio, sequi magnam quod quis fuga
                                                recusandae animi? Quidem neque velit omnis doloremque. Nulla asperiores
                                                suscipit omnis veniam fugit maxime deserunt commodi corporis, id impedit
                                                odio, atque laborum eius ut delectus. Rem, enim vitae! Natus corrupti
                                                ipsa possimus? Omnis voluptas qui vel repellat id rerum aliquam, nulla
                                                culpa delectus soluta ratione odit dolorum earum tenetur autem error
                                                provident maiores blanditiis? Asperiores omnis doloremque non.
                                            </p>

                                            <div class="btnn d-flex justify-content-end">
                                                <button type="submit" data-toggle="modal" data-target="#myVisionModal"
                                                    class="btn rounded btn-primary">Edit</button>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>








                </div>










                <!-- about edit modal -->
                <div class="modal fade" id="myAboutModal" tabindex="-1" role="dialog"
                    aria-labelledby="myAboutModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">

                            <form class="modal-body">
                                <div class="form-group">
                                    <label for="about" style="font-weight: 700; font-size: 1.1rem;"><i
                                            class="fa fa-info-circle text-success" aria-hidden="true"></i> About <span
                                            class="text-danger">*</span></label>
                                    <textarea class="form-control rounded" id="about" rows="12"></textarea>
                                </div>

                                <button type="submit" class="btn btn-success rounded w-100">Submit</button>
                            </form>

                        </div>
                    </div>
                </div>



                <!-- mission edit modal -->
                <div class="modal fade" id="myMissionModal" tabindex="-1" role="dialog"
                    aria-labelledby="myMissionModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">

                            <form class="modal-body">
                                <div class="form-group">
                                    <label for="about" style="font-weight: 700; font-size: 1.1rem;"><i
                                            class="fa fa-users-viewfinder text-success" aria-hidden="true"></i> Mission
                                        <span class="text-danger">*</span></label>
                                    <textarea class="form-control rounded" id="about" rows="12"></textarea>
                                </div>

                                <button type="submit" class="btn btn-success rounded w-100">Submit</button>
                            </form>

                        </div>
                    </div>
                </div>



                <!-- vision edit modal -->
                <div class="modal fade" id="myVisionModal" tabindex="-1" role="dialog"
                    aria-labelledby="myVisionModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">

                            <form class="modal-body">
                                <div class="form-group">
                                    <label for="about" style="font-weight: 700; font-size: 1.1rem;"><i
                                            class="fa fa-eye text-success" aria-hidden="true"></i> Vision
                                        <span class="text-danger">*</span></label>
                                    <textarea class="form-control rounded" id="about" rows="12"></textarea>
                                </div>

                                <button type="submit" class="btn btn-success rounded w-100">Submit</button>
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