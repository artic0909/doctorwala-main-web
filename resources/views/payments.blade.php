<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Payment | Doctorwala</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- SEO Meta Tags for Payment Page/ Coupons Page/ Subscriptions -->
    <meta name="description" content="Payment | Doctorwala">
    <meta name="keywords" content="Payment, Doctorwala, Coupons, Subscriptions, Subscribe, Subscription, Coupon, Coupons, Coupons Page, Subscription Page, Subscribe Page, doctorwala.info, doctorwala, doctorwala.com">
    <meta name="author" content="Doctorwala">
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">
    <meta name="yandex-verification" content="yandex-verification-code">
    <meta name="copyright" content="Doctorwala">
    <meta name="distribution" content="Global">


    <!-- Favicon -->
    <link href="{{asset('fav5.png')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.0/css/all.min.css"
        integrity="sha512-9xKTRVabjVeZmc+GUW8GgSmcREDunMM+Dt/GrzchfN8tkwHizc5RP4Ok/MXFFy5rIjJjzhndFScTceq5e6GvVQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Libraries Stylesheet -->
    <link href="{{asset('../lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('../lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('../lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />
    <link href="{{asset('../lib/twentytwenty/twentytwenty.css')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('../css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('../css/style.css')}}" rel="stylesheet">
    <link href="{{asset('../css/cards-css.css')}}" rel="stylesheet">
    <link href="{{asset('../css/partner-btn.css')}}" rel="stylesheet">
    <link href="{{asset('../responsive/index_responsive.css')}}" rel="stylesheet">


</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-dark m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-secondary m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-light ps-5 pe-0 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-md-6 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <small class="py-2"><i class="far fa-clock text-primary me-2"></i>Opening Hours: Mon To Sun : 24/7 Available</small>
                </div>
            </div>
            <div class="col-md-6 text-center text-lg-end">
                <div class="position-relative d-inline-flex align-items-center bg-primary text-white top-shape px-5">
                    @foreach($aboutDetails as $aboutDetail)
                    <div class="me-3 pe-3 border-end py-2">
                        <p class="m-0"><i class="fa fa-envelope-open me-2"></i><a href="mailto:{{$aboutDetail->email}}" class="text-white">{{$aboutDetail->email}}</a></p>
                    </div>
                    <div class="py-2">
                        <p class="m-0"><i class="fa fa-phone me-2"></i><a href="tel:{{$aboutDetail->number}}" class="text-white">+91-{{$aboutDetail->number}}</a></p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->
















    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 hero-header mb-5">
        <div class="row py-3">
            <div class="col-12 text-center">
                <h1 class="display-3 text-white animated zoomIn">Make Payment For Activation</h1>
                <a href="/" class="h4 text-white" style="text-decoration: underline;">Home</a>
                <i class="fa fa-plus text-dark px-2" style="font-size: 2rem; font-weight: 700;"></i>
                <a href="" class="h4 text-white">Activation</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->
















    <!-- Payment Start -->
    <div class="container-fluid bg-primary bg-appointment mb-5 wow fadeInUp" data-wow-delay="0.1s"
        style="margin-top: 90px;">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-6 py-5">
                    <div class="py-5">
                        <h1 class="display-5 text-white mb-4">We Are A Certified and Award Winning Dental Clinic You Can
                            Trust</h1>
                        <p class="text-white mb-0">Eirmod sed tempor lorem ut dolores. Aliquyam sit sadipscing kasd
                            ipsum. Dolor ea et dolore et at sea ea at dolor, justo ipsum duo rebum sea invidunt
                            voluptua. Eos vero eos vero ea et dolore eirmod et. Dolores diam duo invidunt lorem. Elitr
                            ut dolores magna sit. Sea dolore sanctus sed et. Takimata takimata sanctus sed.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="appointment-form h-100 d-flex flex-column justify-content-center text-center p-5 wow zoomIn"
                        data-wow-delay="0.6s">
                        <h1 class="text-white mb-4">Make Payments</h1>

                        <form action="{{route('partner.coupon.code.add')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row g-3">



                                <div class="col-12">
                                    <p for="subciption_amount" class="form-label text-white fw-bolder fs-5"
                                        style="text-align: left;">Subscribe Now</p>
                                    <!-- <a href="/partnerpanel/partner-subscription" class="btn btn-dark w-100 py-3">Go With Subscription</a> -->
                                    <a href="" class="btn btn-dark w-100 py-3">Coming Soon</a>
                                </div>


                                <div class="col-12">
                                    <p for="currently_loggedin_partner_id" class="form-label text-white fw-bolder fs-5"
                                        style="text-align: left;">Partner ID*</p>
                                    <input type="text" class="form-control bg-light border-0"
                                        value="{{$partnerID->id}}" style="height: 55px;" name="currently_loggedin_partner_id"
                                        id="currently_loggedin_partner_id">
                                </div>



                                <div class="col-12">
                                    <p for="coupon_code" class="form-label text-white fw-bolder fs-5" style="text-align: left;">Coupon Code (if any)*</p>
                                    <input type="text" class="form-control bg-light border-0" placeholder="Enter Coupon Code"
                                        style="height: 55px;" name="coupon_code" id="coupon_code">

                                    <div class="btnns d-flex justify-content-end mt-2">
                                        <button type="button" class="btn btn-dark">Add</button>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <p for="coupon_amount" class="form-label text-white fw-bolder fs-5" style="text-align: left;">Coupon Code Amount*</p>
                                    <input type="text" class="form-control bg-light border-0" value="" style="height: 55px;" name="coupon_amount" id="coupon_amount" readonly>
                                </div>

                                <div class="col-12">
                                    <p for="coupon_start_date" class="form-label text-white fw-bolder fs-5" style="text-align: left;">Start Date*</p>
                                    <input type="text" class="form-control bg-light border-0" value="" style="height: 55px;" name="coupon_start_date" id="coupon_start_date" readonly>
                                </div>

                                <div class="col-12">
                                    <p for="coupon_end_date" class="form-label text-white fw-bolder fs-5" style="text-align: left;">End Date*</p>
                                    <input type="text" class="form-control bg-light border-0" value="" style="height: 55px;" name="coupon_end_date" id="coupon_end_date" readonly>
                                </div>



                                <div class="col-12">
                                    <button id="submitBtn" class="btn btn-dark w-100 py-3" type="submit">Cotinue With Code</button>
                                </div>



                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Payment End -->










    <!-- Testimonial Start -->
    <div class="container-fluid bg-primary bg-testimonial py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="owl-carousel testimonial-carousel rounded p-5 wow zoomIn" data-wow-delay="0.6s">



                        <div class="testimonial-item text-center text-white">
                            <img class="img-fluid mx-auto rounded mb-4" src="img/testilogo.png" alt="">

                            <p class="fs-5" style="color: white; opacity: 1; font-weight: 700;">

                                <i class="fa-solid fa-2x fa-quote-left"></i>&nbsp;Dolores sed duo clita justo
                                dolor et stet
                                lorem kasd dolore lorem ipsum. At
                                lorem lorem magna ut et, nonumy labore diam erat. Erat dolor rebum sit ipsum.&nbsp;
                                <i class="fa-solid fa-2x fa-quote-right"></i>
                            </p>
                            <hr class="mx-auto w-25">
                            <h4 class="text-white mb-0">Client Name</h4>
                        </div>




                        <div class="testimonial-item text-center text-white">
                            <img class="img-fluid mx-auto rounded mb-4" src="img/testilogo.png" alt="">

                            <p class="fs-5" style="color: white; opacity: 1; font-weight: 700;">

                                <i class="fa-solid fa-2x fa-quote-left"></i>&nbsp;Dolores sed duo clita justo
                                dolor et stet
                                lorem kasd dolore lorem ipsum. At
                                lorem lorem magna ut et, nonumy labore diam erat. Erat dolor rebum sit ipsum.&nbsp;
                                <i class="fa-solid fa-2x fa-quote-right"></i>
                            </p>
                            <hr class="mx-auto w-25">
                            <h4 class="text-white mb-0">Client Name</h4>
                        </div>




                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
























    <!-- marquee text start -->
    <marquee id="marqueeText"
        style="background: #051225; color: white; padding: 10px; position: fixed; bottom: 0; width: 100%; z-index: 1000;">
        Welcome to <b>Doctorwala.info</b> !! In addition
        to doctors, we also connect you with pathologists and OPDs. If you require diagnostic services or need to visit
        an OPD for consultation, DoctorWala.info is your go-to platform. We collaborate with trusted pathologists and
        OPDs to ensure that you receive accurate and timely medical tests and consultations. for more information feel
        free to call us or write us directly at <b>support@doctorwala.info.</b>
    </marquee>
    <!-- marquee text end -->









    <!-- Footer Start -->
    <div class="container-fluid text-light py-4 footer-content"
        style="background: #051225; position: relative; z-index: 1001;">
        <div class="">
            <div class="footer-content-inner">

                <div class="text-center text-md-start">
                    <p class="mb-md-0">&copy; <a class="text-white border-bottom"
                            href="doctorwala.info">DoctorWala.info</a>. All
                        Rights Reserved.</p>
                </div>

                <!-- <div class="col-md-6 text-center text-md-end">
                    <p class="mb-0">Designed by <a class="text-white border-bottom" href="https://htmlcodex.com">HTML
                            Codex</a><br>
                        Distributed by <a class="text-white border-bottom" href="https://themewagon.com">ThemeWagon</a>
                    </p>
                </div> -->

                <div class="">
                    <div class="d-flex">
                        <a class="btn btn-lg btn-dark btn-lg-square rounded me-2 btn-footer" href="#"><i
                                class="fab fa-twitter fw-normal"></i></a>
                        <a class="btn btn-lg btn-dark btn-lg-square rounded me-2 btn-footer" href="#"><i
                                class="fab fa-facebook-f fw-normal"></i></a>
                        <a class="btn btn-lg btn-dark btn-lg-square rounded me-2 btn-footer" href="#"><i
                                class="fab fa-linkedin-in fw-normal"></i></a>
                        <a class="btn btn-lg btn-dark btn-lg-square rounded btn-footer" href="#"><i
                                class="fab fa-instagram fw-normal"></i></a>
                    </div>
                </div>


                <div class="login-partner">
                    @guest
                    <a href="/partner-register" class="btn btn-lg btn-dark2 btn-lg-square rounded partner-login">
                        <i class="fa fa-plus" aria-hidden="true"></i>
                        <span class="showing-text"> Partner Register</span>
                    </a>
                    @endguest
                    @auth
                    @endauth
                </div>


            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>




    <!-- PARTNER REGISTER BUTTON -->
    <a href="partner-register.html" class="btn btn-lg btn-dark2 btn-lg-square rounded partner-login">
        <i class="fa fa-plus" aria-hidden="true"></i>
        <span class="showing-text"> Partner Register</span>
    </a>




















    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('../lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('../lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('../lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('../lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('../lib/tempusdominus/js/moment.min.js')}}"></script>
    <script src="{{asset('../lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
    <script src="{{asset('../lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>
    <script src="{{asset('../lib/twentytwenty/jquery.event.move.js')}}"></script>
    <script src="{{asset('../lib/twentytwenty/jquery.twentytwenty.js')}}"></script>

    <script src="{{asset('../js/main.js')}}"></script>



    <script>
        document.getElementById('coupon_code').addEventListener('change', function() {
            const couponCode = this.value;

            if (couponCode) {
                fetch('{{ route("get.coupon.details") }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        },
                        body: JSON.stringify({
                            coupon_code: couponCode
                        }),
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            const coupon = data.data;
                            document.getElementById('coupon_amount').value = coupon.coupon_amount;
                            document.getElementById('coupon_start_date').value = coupon.coupon_start_date;
                            document.getElementById('coupon_end_date').value = coupon.coupon_end_date;

                            // Get current date in YYYY-MM-DD format (ignores time)
                            const currentDate = new Date().toISOString().split('T')[0];
                            const couponEndDate = new Date(coupon.coupon_end_date).toISOString().split('T')[0];

                            const submitButton = document.getElementById('submitBtn');

                            // If the coupon's end date is today or in the future, enable the button
                            if (couponEndDate > currentDate) {
                                submitButton.disabled = false; // Enable button
                                submitButton.textContent = 'Continue With Code';
                            } else {
                                submitButton.disabled = true; // Disable button
                                submitButton.textContent = 'Coupon is expired';
                            }
                        } else {
                            alert(data.message);
                            document.getElementById('coupon_amount').value = '';
                            document.getElementById('coupon_start_date').value = '';
                            document.getElementById('coupon_end_date').value = '';
                        }
                    })
                    .catch(error => {
                        console.error('Error fetching coupon details:', error);
                    });
            }
        });
    </script>



</body>

</html>