<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice PDF</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <link href="{{asset('fav5.png')}}" rel="icon">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
        integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <style>
        * {
            font-family: Arial, sans-serif;
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        .text-primaryy {
            color: #06A3DA;
        }

        .btn-primaryy {
            background: #06A3DA;
            color: white;
            font-weight: 700;
        }

        .text-black {
            color: #000000;
        }

        .bg-secondaryy {
            background-color: #f0f0f0;
        }

        p {
            margin: 0 !important;
            padding: 0 !important;
        }

        a {
            text-decoration: none !important;
        }

        #print-btn {
            position: fixed;
            bottom: 20px;
            right: 15px;
            transition: all 150ms ease-in-out;

            &:hover {
                color: white;
                background: rgb(235, 62, 62);
                scale: 1.1;
            }
        }
    </style>

</head>

<body>
    <div class="pdf-main-container m-0" style="border: 1px solid black; height: 100vh;">

        <div class="pdf-inner text-center">

            <span style="text-decoration: underline; font-weight: 900;">TAX INVOICE</span>


            <!-- upper part -->
            <div class="upper text-start p-2 mt-2 d-flex justify-content-between align-items-center"
                style=" border-bottom: 1px solid black;">




                <div class="upper-left" style="margin-top: -10px;">

                    <p style="font-weight: 700; font-size: 1.5rem;" class="text-primaryy">Sumatra Sales Private Limited</p>
                    <p style="font-weight: 700; font-size: 0.7rem;" class="text-dark">ADD : Ranihati, Joynagar, Panchla, Howrah, W.B-711302</p>
                    <p style="font-weight: 700; font-size: 0.7rem;" class="text-dark">GSTIN : 19ABDCS8853N1ZG</p>
                </div>

                <div class="upper-right d-flex flex-column align-items-center" style="margin-top: -10px;">

                    <img src="../img/logo.png" width="50" alt="">
                    <p style="font-weight: 700; font-size: 0.8rem;" class="text-dark">Brand Under this Company</p>
                </div>

            </div>


            <!-- mid part -->
            <div class="mid text-start p-1">


                <table class="table table-striped table-bordered">

                    <thead>
                        <tr>
                            <th>Customer Details</th>
                            <th>Company Details</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td class="" style="font-size: 0.8rem;">
                                <p class="d-flex justify-content-between"><span>Billing Name &nbsp;:</span> <span>John Doe</span></p>
                                <p class="d-flex justify-content-between"><span>Contact Person &nbsp;:</span> <span>John Doe</span></p>
                                <p class="d-flex justify-content-between"><span>Billing Address &nbsp;:</span> <span>Uluberiya, Howrah, 700000</span></p>
                                <p class="d-flex justify-content-between"><span>State &nbsp;:</span> <span>West Bengal</span></p>
                                <p class="d-flex justify-content-between"><span>Email &nbsp;:</span> <span>sm@gmail.com</span></p>
                                <p class="d-flex justify-content-between"><span>Contact &nbsp;:</span> <span>+91 9945850001</span></p>
                                <p class="d-flex justify-content-between"><span>GSTIN &nbsp;:</span> <span>GSTHY9945850001</span></p>
                            </td>

                            <td class="" style="font-size: 0.8rem;">
                                <p class="d-flex justify-content-between"><span>Date &nbsp;:</span> <span>28-11-2024</span></p>
                                <p class="d-flex justify-content-between"><span>Invoice No &nbsp;:</span> <span>INVC3535</span></p>
                                <p class="d-flex justify-content-between"><span>Address &nbsp;:</span> <span>Ranihati, Howrah, 700000</span></p>
                                <p class="d-flex justify-content-between"><span>State &nbsp;:</span> <span>West Bengal</span></p>
                                <p class="d-flex justify-content-between"><span>Email &nbsp;:</span> <span>sm@gmail.com</span></p>
                                <p class="d-flex justify-content-between"><span>Contact &nbsp;:</span> <span>+91 9945850001</span></p>
                                <p class="d-flex justify-content-between"><span>GSTIN &nbsp;:</span> <span>GSTHY9945850001</span></p>
                                <p class="d-flex justify-content-between"><span>HSN &nbsp;:</span> <span>998361</span></p>
                            </td>

                        </tr>

                    </tbody>

                </table>


            </div>



            <!-- billings part -->
            <div class="billings text-center p-1">
                <p style="font-weight: 700;">Being Amount paid for on Doctorwala info</p>



                <div class="billings-inner text-start d-flex gap-3 mt-3">

                    <div class="b-left w-50">
                        <p class="bg-secondaryy p-1" style="font-size: 0.9rem; font-weight: 600;">
                            Subscription Name
                        </p>

                        <p class="p-1" style="font-size: 0.8rem;">Monthly DW</p>



                        <p class="bg-secondaryy p-1" style="font-size: 0.9rem; font-weight: 600;">
                            Subscription Description
                        </p>

                        <p class="p-1" style="font-size: 0.8rem;">
                            Monthly Subscription for Doctorwala info
                        </p>




                        <p class="bg-secondaryy p-1" style="font-size: 0.9rem; font-weight: 600;">
                            Subscription Period
                        </p>

                        <p class="p-1" style="font-size: 0.8rem;">From: 11-11-2024, To: 11-11-2024</p>

                    </div>

                    <div class="b-right w-50">
                        <div class="bg-secondaryy p-1 d-flex justify-content-between align-items-center gap-5" style="font-size: 0.9rem; font-weight: 600;">
                            <p>Payment Details</p>
                            <p>Amount</p>
                        </div>

                        <div class="p-1 d-flex justify-content-between align-items-center gap-5" style="font-size: 0.8rem;">
                            <p>Gross Service Amount</p>
                            <p style="font-weight: 700; font-size: 0.9rem;">1000.00</p>
                        </div>



                        <div class="p-1 d-flex justify-content-between align-items-center gap-5" style="font-size: 0.8rem; border-top: 1px solid black; border-bottom: 1px solid black;">
                            <p><b>(A) </b> Net Amount</p>
                            <p style="font-weight: 700; font-size: 0.9rem;">1000.00</p>
                        </div>


                        <div class="p-1 d-flex justify-content-between align-items-center gap-5" style="font-size: 0.8rem;">
                            <p>CGST (0%)</p>
                            <p style="font-weight: 700; font-size: 0.9rem;">(+) &nbsp;&nbsp;&nbsp;&nbsp; 0</p>
                        </div>


                        <div class="p-1 d-flex justify-content-between align-items-center gap-5" style="font-size: 0.8rem;">
                            <p>SGST/UTGST (0%)</p>
                            <p style="font-weight: 700; font-size: 0.9rem;">(+) &nbsp;&nbsp;&nbsp;&nbsp; 0</p>
                        </div>


                        <div class="p-1 d-flex justify-content-between align-items-center gap-5" style="font-size: 0.8rem;">
                            <p>IGST (18%)</p>
                            <p style="font-weight: 700; font-size: 0.9rem;">(+) &nbsp;&nbsp;&nbsp;&nbsp; 180.00</p>
                        </div>


                        <div class="p-1 d-flex justify-content-between align-items-center gap-5" style="font-size: 0.8rem;">
                            <p><b>(B) </b> Net Amount</p>
                            <p style="font-weight: 700; font-size: 0.9rem;">180.00</p>
                        </div>



                        <div class="p-1 d-flex justify-content-between align-items-center gap-5" style="font-size: 0.8rem; border-top: 1px solid black; border-bottom: 1px solid black;">
                            <p style="font-weight: 700; font-size: 0.9rem;">(A + B) Grand Amount</p>
                            <p style="font-weight: 700; font-size: 0.9rem;">1180.00</p>
                        </div>



                        <div class="p-1 d-flex justify-content-between align-items-center gap-5" style="font-size: 0.8rem;">
                            <p>TDS</p>
                            <p style="font-weight: 700; font-size: 0.9rem;">(-) &nbsp;&nbsp;&nbsp;&nbsp; 0.00</p>
                        </div>


                        <div class="p-1 d-flex justify-content-between align-items-center gap-5" style="font-size: 0.8rem; border-top: 1px solid black; border-bottom: 1px solid black;">
                            <p style="font-weight: 700; font-size: 0.9rem;">Instrument Amount</p>
                            <p style="font-weight: 700; font-size: 0.9rem;">1180.00</p>
                        </div>

                    </div>
                </div>
            </div>


            <!-- acts part -->
            <div class="acts text-start mt-2 d-flex gap-3">
                <ul class="w-50">
                    <li><span style="font-size: 0.8rem;">For all TDS deductions, form 16A should be sent at info@doctorwala.info.</span></li>
                    <li><span style="font-size: 0.8rem;">For privacy policy via advertiser visit privacy-policy.</span></li>
                    <li><span style="font-size: 0.8rem;">Doctorwala will share information related to your account via SMS/Email/Watsapp or App notification.</span></li>
                    <li><span style="font-size: 0.8rem;">We fall in category of Advertisement Service under section 194C of Income Tax Act, wherein maximum TDS rate is mentioned as 2% on Net Amount.</span></li>
                    <li><span style="font-size: 0.8rem;">Pursuant to Income Tax circular No. 1/2014 dated 13-01-2014. TDS should not be deducted on tax.</span></li>
                    <li><span style="font-size: 0.8rem;">This is system generated receipt.</span></li>
                </ul>

                <div class="w-50" style="font-size: 0.8rem; font-weight: 700;">
                    <p>Relationship Manager : Saklin Mustak</p>

                    <br>
                    <br>
                    <p>Authorized signature:</p>


                    <img src="../img/sig.jpg" width="150" alt="" class="mt-2">
                </div>
            </div>








        </div>

    </div>





    <a href="" id="print-btn" class="btn btn-primaryy rounded">Print Now</a>






    <script>
        document.getElementById('print-btn').addEventListener('click', function() {
            // Hide the button
            this.style.display = 'none';

            // Trigger the print dialog
            window.print();

            // Optional: Restore the button visibility after printing
            window.onafterprint = () => {
                this.style.display = 'block';
            };
        });
    </script>
</body>

</html>