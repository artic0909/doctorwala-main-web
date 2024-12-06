<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Home Page | Doctorwala</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/fav5.png" rel="icon">

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

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        :root {
            --primary-color: #1896e4;
            --secondary-color: #1896e4;
            --black: #000000;
            --white: #ffffff;
            --gray: #efefef;
            --gray-2: #757575;

            --facebook-color: #4267b2;
            --google-color: #db4437;
            --twitter-color: #1896e4;
            --insta-color: #e1306c;
        }

        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap");

        * {
            font-family: "Poppins", sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html,
        body {
            height: 100vh;
            overflow: hidden;
        }

        .container {
            position: relative;
            min-height: 100vh;
            overflow: hidden;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
            height: 100vh;
        }

        .col {
            width: 50%;
        }

        .align-items-center {
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .form-wrapper {
            width: 100%;
            max-width: 28rem;
        }

        .form {
            padding: 1rem;
            background-color: var(--white);
            border-radius: 1.5rem;
            width: 100%;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            transform: scale(0);
            transition: 0.5s ease-in-out;
            transition-delay: 1s;
        }

        .input-group {
            position: relative;
            width: 100%;
            margin: 1rem 0;
        }

        .input-group i {
            position: absolute;
            top: 50%;
            left: 1rem;
            transform: translateY(-50%);
            font-size: 1.4rem;
            color: var(--gray-2);
        }

        .input-group input {
            width: 100%;
            padding: 1rem 3rem;
            font-size: 1rem;
            background-color: var(--gray);
            border-radius: 0.5rem;
            border: 0.125rem solid var(--white);
            outline: none;
        }

        .input-group input:focus {
            border: 0.125rem solid var(--primary-color);
        }

        .input-group select {
            width: 100%;
            padding: 1rem 3rem;
            font-size: 1rem;
            background-color: var(--gray);
            border-radius: 0.5rem;
            border: 0.125rem solid var(--white);
            outline: none;
        }

        .input-group select:focus {
            border: 0.125rem solid var(--primary-color);
        }


        .form button {
            cursor: pointer;
            width: 100%;
            padding: 0.6rem 0;
            border-radius: 0.5rem;
            border: none;
            background-color: var(--primary-color);
            color: var(--white);
            font-size: 1.2rem;
            outline: none;
        }

        .form p {
            margin: 1rem 0;
            font-size: 0.7rem;
        }

        .flex-col {
            flex-direction: column;
        }

        .social-list {
            margin: 2rem 0;
            padding: 1rem;
            border-radius: 1.5rem;
            width: 100%;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            transform: scale(0);
            transition: 0.5s ease-in-out;
            transition-delay: 1.2s;
        }

        .social-list>div {
            color: var(--white);
            margin: 0 0.5rem;
            padding: 0.7rem;
            cursor: pointer;
            border-radius: 0.5rem;
            cursor: pointer;
            transform: scale(0);
            transition: 0.5s ease-in-out;
        }

        .social-list>div:nth-child(1) {
            transition-delay: 1.4s;
        }

        .social-list>div:nth-child(2) {
            transition-delay: 1.6s;
        }

        .social-list>div:nth-child(3) {
            transition-delay: 1.8s;
        }

        .social-list>div:nth-child(4) {
            transition-delay: 2s;
        }

        .social-list>div>i {
            font-size: 1.5rem;
            transition: 0.4s ease-in-out;
        }

        .social-list>div:hover i {
            transform: scale(1.5);
        }

        .facebook-bg {
            background-color: var(--facebook-color);
        }

        .google-bg {
            background-color: var(--google-color);
        }

        .twitter-bg {
            background-color: var(--twitter-color);
        }

        .insta-bg {
            background-color: var(--insta-color);
        }

        .pointer {
            cursor: pointer;
        }

        .container.sign-in .form.sign-in,
        .container.sign-in .social-list.sign-in,
        .container.sign-in .social-list.sign-in>div,
        .container.sign-up .form.sign-up,
        .container.sign-up .social-list.sign-up,
        .container.sign-up .social-list.sign-up>div {
            transform: scale(1);
        }

        .content-row {
            position: absolute;
            top: 0;
            left: 0;
            pointer-events: none;
            z-index: 6;
            width: 100%;
        }

        .text {
            margin: 4rem;
            color: var(--white);
        }

        .text h2 {
            font-size: 3.5rem;
            font-weight: 800;
            margin: 2rem 0;
            transition: 1s ease-in-out;
        }

        .text p {
            font-weight: 600;
            transition: 1s ease-in-out;
            transition-delay: 0.2s;
        }

        .img img {
            width: 30vw;
            transition: 1s ease-in-out;
            transition-delay: 0.4s;
        }

        .text.sign-in h2,
        .text.sign-in p,
        .img.sign-in img {
            transform: translateX(-250%);
        }

        .text.sign-up h2,
        .text.sign-up p,
        .img.sign-up img {
            transform: translateX(250%);
        }

        .container.sign-in .text.sign-in h2,
        .container.sign-in .text.sign-in p,
        .container.sign-in .img.sign-in img,
        .container.sign-up .text.sign-up h2,
        .container.sign-up .text.sign-up p,
        .container.sign-up .img.sign-up img {
            transform: translateX(0);
        }

        /* BACKGROUND */

        .container::before {
            content: "";
            position: absolute;
            top: 0;
            right: 0;
            height: 100vh;
            width: 300vw;
            transform: translate(35%, 0);
            background-image: linear-gradient(-45deg,
                    var(--primary-color) 0%,
                    var(--secondary-color) 100%);
            transition: 1s ease-in-out;
            z-index: 6;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            border-bottom-right-radius: max(50vw, 50vh);
            border-top-left-radius: max(50vw, 50vh);
        }

        .container.sign-in::before {
            transform: translate(0, 0);
            right: 50%;
        }

        .container.sign-up::before {
            transform: translate(100%, 0);
            right: 50%;
        }

        /* RESPONSIVE */

        @media only screen and (max-width: 425px) {

            .container.sign-in {
                margin-top: -90px;
            }


            .container::before,
            .container.sign-in::before,
            .container.sign-up::before {
                height: 100vh;
                border-bottom-right-radius: 0;
                border-top-left-radius: 0;
                z-index: 0;
                transform: none;
                right: 0;
            }

            /* .container.sign-in .col.sign-up {
        transform: translateY(100%);
    } */

            .container.sign-in .col.sign-in,
            .container.sign-up .col.sign-up {
                transform: translateY(0);
            }

            .content-row {
                align-items: flex-start !important;
            }

            .content-row .col {
                transform: translateY(0);
                background-color: unset;
            }

            .col {
                width: 100%;
                position: absolute;
                padding: 2rem;
                background-color: var(--white);
                border-top-left-radius: 2rem;
                border-top-right-radius: 2rem;
                transform: translateY(100%);
                transition: 1s ease-in-out;
            }

            .row {
                align-items: flex-end;
                justify-content: flex-end;
            }

            .form,
            .social-list {
                box-shadow: none;
                margin: 0;
                padding: 0;
            }

            .text {
                margin: 0;
                margin-top: 110px;
            }

            .text p {
                display: none;
            }

            .text h2 {
                margin: 0.5rem;
                font-size: 2rem;
            }
        }
    </style>
</head>

<body>






















    <div id="container" class="container">
        <!-- FORM SECTION -->
        <div class="row">



            <!-- SIGN UP -->
            <div class="col align-items-center flex-col sign-up">
                <div class="form-wrapper align-items-center">
                    <form class="form sign-up">
                        <h1 style="color: #1896e4; font-weight: 900;"><span
                                style="color: red; font-weight: 1000;">+</span> JOIN US TODAY <span
                                style="color: red; font-weight: 1000;">+</span></h1>
                        <div class="input-group">
                            <i class="fa-solid fa-user"></i>
                            <input type="text" placeholder="Name" name="user_name" id="user_name">
                        </div>


                        <div class="input-group">
                            <i class="fa-solid fa-phone"></i>
                            <input type="text" placeholder="Mobile" name="user_mobile" id="user_mobile">
                        </div>


                        <div class="input-group">
                            <i class="fa-solid fa-building"></i>
                            <select name="user_city" id="user_city">
                                <option value="">Select City</option>
                            </select>
                        </div>


                        <div class="input-group">
                            <i class="fa-solid fa-at"></i>
                            <input type="email" placeholder="Email" name="user_email" id="user_email">
                        </div>







                        <div class="input-group">
                            <i class="fa-solid fa-lock signin-lock-icon"></i>
                            <input type="password" placeholder="Password" name="user_password" id="user_password">
                        </div>

                        <div class="input-group">
                            <i class="fa-solid fa-eye signin-eye-icon"></i>
                            <input type="password" placeholder="Confirm password" id="user_confirm_password">
                        </div>






                        <div class="input-group">
                            <canvas id="signupCaptchaCanvas" width="150" height="40"></canvas>
                        </div>

                        <div class="input-group">
                            <i class="fa-solid fa-circle-check"></i>
                            <input type="text" placeholder="Enter Captcha" id="signupCaptchaInput">
                        </div>



                        <button>
                            Sign up
                        </button>
                        <p>
                            <span>
                                Already have an account?
                            </span>
                            <b onclick="toggle()" class="pointer" style="text-decoration: underline;">
                                Login here
                            </b>
                            <span>&nbsp; <a href="/" style="color: black; font-size: 1rem;"
                                    onmouseover="this.style.color='red'" onmouseout="this.style.color='black'"><i
                                        class="fa fa-home" aria-hidden="true"></i></a></span>
                        </p>
                    </form>
                </div>

            </div>
            <!-- END SIGN UP -->





            <!-- Login with OTP -->
            <div class="col align-items-center flex-col sign-in login">
                <div class="form-wrapper align-items-center">
                    <form class="form sign-in" method="POST" action="{{ route('user.verify.otp') }}">
                        @csrf
                        <h1 style="color: #1896e4; font-weight: 900;"><span
                                style="color: red; font-weight: 1000;">+</span> ENTER THE OTP
                            <span style="color: red; font-weight: 1000;">+</span>
                        </h1>

                        @if(session('message'))
                        <div class="alert alert-success">{{ session('message') }}</div>
                        @endif
                        @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        <div class="input-group">
                            <i class="fa-solid fa-user-secret"></i>
                            <input type="text" placeholder="Enter OTP" name="user_otp" id="user_otp">
                        </div>

                        <p style="text-align: start; margin-top: -10px;">Your OTP will expired in 3 minutes</p>


                        <button type="submit" style="font-weight: 700;">
                            LOGIN
                        </button>



                        <p style="margin-top: 3px;">
                            <b>
                                <span>
                                    If Not Send?
                                </span>
                                <a href="/user-otp" class="pointer" style="text-decoration: underline; color: black;">
                                    Go back
                                </a>
                                <span>&nbsp; <a href="/" style="color: black; font-size: 1rem;"
                                        onmouseover="this.style.color='red'" onmouseout="this.style.color='black'"><i
                                            class="fa fa-home" aria-hidden="true"></i></a></span>
                            </b>
                        </p>
                    </form>
                </div>
                <div class="form-wrapper">

                </div>
            </div>
            <!-- Login -->






        </div>
        <!-- END FORM SECTION -->




        <!-- CONTENT SECTION -->
        <div class="row content-row">



            <!-- Login CONTENT -->
            <div class="col align-items-center flex-col">
                <div class="text sign-in">
                    <h2>
                        Login Using OTP !
                    </h2>

                </div>
            </div>
            <!-- END Login CONTENT -->




            <!-- SIGN UP CONTENT -->
            <div class="col align-items-center flex-col">
                <div class="text sign-up">
                    <h2>
                        Join us!
                        <br>
                        Easily connect with healthcare professionals on our platform.
                    </h2>

                </div>
            </div>
            <!-- END SIGN UP CONTENT -->





        </div>
        <!-- END CONTENT SECTION -->
    </div>



































    <script src="js/captcha.js"></script>


    <script>
        let container = document.getElementById('container')

        toggle = () => {
            container.classList.toggle('sign-in')
            container.classList.toggle('sign-up')
        }

        setTimeout(() => {
            container.classList.add('sign-in')
        }, 200)
    </script>


</body>

</html>