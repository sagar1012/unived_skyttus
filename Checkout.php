<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <?php include("include/require_css.php"); ?>
</head>

<body>

    <?php include("include/header.php"); ?>

    <div class="container">
        <div style="margin-top: 30px; font-size:14px">
            <span>Home</span> <span class="px-2">/</span> <span style="color: #67A746;"> Checkout </span>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-8">
                <hr style="width: 127px;height: 3px;" />
                <div class="top-title d-flex justify-content-between">
                    <h3 style="color:#231F20; font:  Myriad Pro; font-size: 42px; font-weight:600;">Checkout</h3>
                    <div class="mt-2" style="color: #231F20; font:  Myriad Pro; font-size: large; font-size:16px;">Already have an account?
                        <a href="" style="color: #67A746; text-decoration: underline;">Sign In</a>
                    </div>
                </div>
                <br>
                <hr class="mt-2 mb-2" style="color: #DADADA;">
                <br><br>
                <h6 class="bl-det">Billing Details</h6>
                <br>
                <div class="col-sm-12 row">
                    <div class="col-sm-6">
                        <label>First Name*</label><br>
                        <input class="form-control" type="text" id="fname" name="fname" placeholder="First Name"><br>
                        <label>Phone*</label><br>
                        <input class="form-control" type="number" id="number" name="phone" placeholder="Phone"><br>
                        <label>Street Address*</label><br>
                        <input class="form-control" type="text" id="address" name="address" placeholder="House Number, Street Name"><br>
                        <label>Country*</label><br>
                        <select class="form-control" name="country" id="">
                            <option value="india">India</option>
                            <option value="usa">USA</option>
                            <option value="canada">Canada</option>
                        </select>
                        <br>
                        <label>City*</label><br>
                        <input class="form-control" type="text" id="city" name="city" placeholder="City"><br>
                        <label>Where did you find us?</label><br>
                        <select class="form-control" name="facebook" id="">
                            <option value="email">Email</option>
                            <option value="socialmedia">SocialMedia</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <div class="col-sm-6">
                        <label>Last Name*</label><br>
                        <input class="form-control" type="text" id="lname" name="lname" placeholder="Last Name"><br>
                        <label>Email*</label><br>
                        <input class="form-control" type="text" id="email" name="email" placeholder="Email"><br>
                        <label>&nbsp;</label>
                        <input class="form-control" type="text" id="address" name="address" placeholder="Apartment,Suite,Unit,etc...(Optional)"><br>
                        <label>State*</label><br>
                        <select class="form-control" name="state" id="">
                            <option value="gujarat">Gujarat</option>
                            <option value="assam">Assam</option>
                            <option value="goa">Goa</option>
                        </select>
                        <br>
                        <label>Zipcode*</label><br>
                        <input class="form-control" type="number" id="zipcode" name="zipcode" placeholder="Zipcode"><br>
                    </div>
                </div>

                <hr class="mt-2 mb-2" style="color: #DADADA;">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Ship to a Different Address?
                    </label>
                </div><br>
                <div class="col-sm-12 row">
                    <div class="col-sm-6">
                        <label>First Name*</label><br>
                        <input class="form-control" type="text" id="fname" name="fname" placeholder="First Name"><br>
                        <label>Phone*</label><br>
                        <input class="form-control" type="number" id="number" name="phone" placeholder="Phone"><br>
                        <label>Street Address*</label><br>
                        <input class="form-control" type="text" id="address" name="address" placeholder="House Number, Street Name"><br>
                        <label>Country*</label><br>
                        <select class="form-control" name="country" id="">
                            <option value="india">India</option>
                            <option value="usa">USA</option>
                            <option value="canada">Canada</option>
                        </select>
                        <br>
                        <label>City*</label><br>
                        <input class="form-control" type="text" id="city" name="city" placeholder="City"><br>
                    </div>


                    <div class="col-sm-6">
                        <label>Last Name*</label><br>
                        <input class="form-control" type="text" id="lname" name="lname" placeholder="Last Name"><br>
                        <label>Company Name*</label>
                        <input class="form-control" type="text" id="companyname" name="companyname" placeholder="Company Name"><br>
                        <label>&nbsp;</label>
                        <input class="form-control" type="text" id="address" name="address" placeholder="Apartment,Suite,Unit,etc...(Optional)"><br>
                        <label>State*</label><br>
                        <select class="form-control" name="state" id="">
                            <option value="gujarat">Gujarat</option>
                            <option value="assam">Assam</option>
                            <option value="goa">Goa</option>
                        </select>
                        <br>
                        <label>Zipcode*</label><br>
                        <input class="form-control" type="number" id="zipcode" name="zipcode" placeholder="Zipcode"><br>
                    </div>
                </div>

            </div>
            <div class="col-sm-4" style="border-left: 1px solid lightgrey;">
                <div class="d-flex justify-content-between">
                    <h4 style="color: #000000; font: Myriad Pro; height: 29px; margin-left: 12px; font-weight:600; ">YOUR ORDER</h4>
                    <a href="" style="color: #67A746; text-decoration: underline; font-size: 16px;">Edit Order</a>
                </div>

                <br>
                <div class="row">
                    <img src="assets/img/billing/img1.png" alt="" style="width: 80px; height: 70px ">
                    <div class="mt-2">
                        <p class="mb-0" style=" margin-top: -61px; margin-left: 69px;">KSM-66 Ashwagandha X 2</p>
                        <p style="margin-top: -2px; margin-left: 68px; font: Myriad Pro;">???1,400.00</p>
                    </div>
                </div>
                <div class="row">
                    <img height="80px" src="assets/img/billing/img2.png" alt="" style="width: 83px; height: 65px;">
                    <div class="mt-3">
                        <p class="mb-0" style="margin-top: -64px; margin-left: 68px">Basics Multivitamin & Minerals for Women X 1</p>
                        <p style="margin-top: -2px; margin-left: 68px; font: Myriad Pro;">???600.00</p>
                    </div>
                </div>
                <div class="row">
                    <img height="80px" src="assets/img/billing/img3.png" alt="" style="width: 84px; height: 59px">
                    <div class="mt-2">
                        <p class="mb-0" style=" margin-top: -56px; margin-left: 70px">Basics Multivitamin & Minerals for Women X 1</p>
                        <p style="margin-top: -2px; margin-left: 68px; font: Myriad Pro;">???850.00</p>
                    </div>
                </div>
                <div style="border-bottom-style: dashed; border-color: #67A746;">
                </div>
                <div class="row1 mt-3">
                    <div class="d-flex justify-content-between">
                        <h6 style="color: #666666">Items Subtotal</h6>
                        <div class="ml-auto p-5px">???2,850.00</div>
                    </div>

                    <div class="d-flex justify-content-between">
                        <h6 style="color: #666666">Shipping Charges</h6>
                        <div class="ml-auto p-5px">???100.00</div>
                    </div>

                    <div class="mt-2 ml-2">
                        <div class="d-flex justify-content-between">
                            <div class="d-flex">
                                <div style="width: 20px;">
                                    <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="tag" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-tag fa-w-16 fa-3x svgimg" style="height:15px;">
                                        <path fill="currentColor" d="M497.941 225.941L286.059 14.059A48 48 0 0 0 252.118 0H48C21.49 0 0 21.49 0 48v204.118a47.998 47.998 0 0 0 14.059 33.941l211.882 211.882c18.745 18.745 49.137 18.746 67.882 0l204.118-204.118c18.745-18.745 18.745-49.137 0-67.882zM259.886 463.996L48 252.118V48h204.118L464 259.882 259.886 463.996zM192 144c0 26.51-21.49 48-48 48s-48-21.49-48-48 21.49-48 48-48 48 21.49 48 48z" class="" style="mt-1 mr-2"></path>
                                    </svg>
                                </div>
                                <div class="mt-1 ml-2">
                                    <div>UNIVED20 </div>
                                    <div style="color: #67A746; font-family: Myriad Pro Regular;">You saved additional ???100</div>
                                </div>
                            </div>
                            <div>
                                <div>
                                    <svg style="height: 15px;" aria-hidden="true" focusable="false" data-prefix="fal" data-icon="times-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-times-circle fa-w-16 fa-2x">
                                        <path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 464c-118.7 0-216-96.1-216-216 0-118.7 96.1-216 216-216 118.7 0 216 96.1 216 216 0 118.7-96.1 216-216 216zm94.8-285.3L281.5 256l69.3 69.3c4.7 4.7 4.7 12.3 0 17l-8.5 8.5c-4.7 4.7-12.3 4.7-17 0L256 281.5l-69.3 69.3c-4.7 4.7-12.3 4.7-17 0l-8.5-8.5c-4.7-4.7-4.7-12.3 0-17l69.3-69.3-69.3-69.3c-4.7-4.7-4.7-12.3 0-17l8.5-8.5c4.7-4.7 12.3-4.7 17 0l69.3 69.3 69.3-69.3c4.7-4.7 12.3-4.7 17 0l8.5 8.5c4.6 4.7 4.6 12.3 0 17z" class=""></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <br>
                <div style="border-bottom-style: dashed; border-color: #67A746;">
                </div>
                <br>


                <div class="d-flex justify-content-between">
                    <h6 style="color:#222222; width: 47px; height: 23px; font: Myriad Pro;">Total</h6>
                    <div class="ml-auto p-5px" style="color: #231F20; width: 93px; height: 23px; font: Myriad Pro;">???2,850.00</div>
                </div>
                <br>
                <div class=" ml-2 days">
                    <div class="mt-2">
                        <div class="ml-2 d-flex">
                            <div>
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="truck" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="svg-inline--fa fa-truck fa-w-20 fa-3x svgtruck ml-2 mt-1 mr-2" style="height: 15px;">
                                    <path fill="currentColor" d="M624 352h-16V243.9c0-12.7-5.1-24.9-14.1-33.9L494 110.1c-9-9-21.2-14.1-33.9-14.1H416V48c0-26.5-21.5-48-48-48H48C21.5 0 0 21.5 0 48v320c0 26.5 21.5 48 48 48h16c0 53 43 96 96 96s96-43 96-96h128c0 53 43 96 96 96s96-43 96-96h48c8.8 0 16-7.2 16-16v-32c0-8.8-7.2-16-16-16zM160 464c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48zm320 0c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48zm80-208H416V144h44.1l99.9 99.9V256z" class=""></path>
                                </svg>
                            </div>
                            <div class="mt-1" style="color: #000000; margin-left: 10px; font: Myriad Pro;">General Shipping: 3-7 working days</div>
                        </div>
                        <div class="ml-2" style="color: #666666; font-size: small;">Shipping options will be updated
                            during checkout.</div>
                    </div>
                    <hr style="margin-left: 10px;margin-right: 10px;" />
                    <div class="d-flex justify-content-start">
                        <div>
                            <img src="assets/img/billing/img4.svg" style="height: 40px; width: 41px;">
                        </div>
                        <div>
                            <div style="color: #222222;">Pay by Razorpay</div>
                            <div style="color: #222222;">Cards,Netbanking,Wallet & UPI</div>
                        </div>

                    </div>
                    <div>
                        <div class="ml-2 credit" style="color: #666666; /*font-size: small; font: Myriad Pro;">Pay Securely By Credit Or
                            Debit Card Or Internet Banking Through Razorpay.</div>
                    </div>

                    <div class="d-flex justify-content-start">
                        <div class="ml-2">
                            <img src="assets/img/billing/removebg-preview.png" style="height: 33px;">
                        </div>
                        <div class="ml-2">
                            <img src="assets/img/billing/img7.png" style="margin-left: 20px; height: 19px; margin-top: 3px">
                        </div>
                        <div class="ml-2">
                            <img src="assets/img/billing/img9.png" style="height: 32px; margin-top: -3px; margin-left: 23px">
                        </div>
                    </div>

                    <!-- <div class="ml-2 d-flex">
                        <div class="p-0 pay">
                            <div class="mt-2 row">
                                <div class="ml-2">
                                    <img src="assets/img/billing/img4.svg" style="height: 40px; width: 41px;">
                                </div>
                                <div>
                                    <div class="mt-1" style="color: #222222;">Pay by Razorpay</div>
                                    <div class="cards" style="color: #222222;">Cards,Netbanking,Wallet & UPI</div>
                                </div>


                                
                            </div>
                        </div>
                    </div> -->

                </div>
                <br>
                <div>
                    <button type="button" style="background: #90B83E; color: #fff; border: none; width: 100%; height: 45px; border-radius: 6px; font-size: small; font: Myriad Pro;">Place Order</button>
                </div>
            </div>


        </div>
    </div>
    </div>

    <style>
        .notification {

            text-decoration: none;
            padding: 15px 26px;
            position: relative;
            display: inline-block;
            border-radius: 2px;
        }

        .fa-stack[data-count]:after {
            position: absolute;
            right: 0%;
            top: 1%;
            content: attr(data-count);
            font-size: 30%;
            padding: .6em;
            border-radius: 999px;

            color: white;
            background: rgba(255, 0, 0, .85);
            text-align: center;
            min-width: 2em;
            font-weight: bold;
        }

        .notification .badge {
            position: absolute;
            top: 0px;
            margin-top: 5px;
            right: 20px;
            padding: 5px 8px;
            border-radius: 50%;
            background: #90B83E;
            color: white;
        }

        .row {
            color: black;
        }

        .svgimg {
            margin-top: 6px;
            margin-right: 10px;
        }

        .svgtruck {
            color: #90B83E;
        }

        .days {
            background-color: #D2DCCD4D;
            padding: 12px;
            border-radius: 8px;
        }

        .pay {
            padding: 12px;
            border-radius: 8px;
        }

        .cards {
            margin-left: 49px;
            font-size: small;
            margin-top: -16px;
        }

        .credit {
            margin-top: 7px;
            margin-right: 29px;
            padding: 0;
        }

        .top-title {
            display: contents;
        }

        .bl-det {
            color: #222222;
            font-size: 26px;
            font-weight: 600;
        }

        @media only screen and (min-width: 960px) {
            .top-title {
                display: flex;
            }
        }

        @media only screen and (min-width: 420) {
            .bl-det {
                color: #222222;
                font-size: 26px;
                font-weight: 600;
            }
        }
    </style>



    </section>
    <!--------->


    <section class="section-subscribe mt-40">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5">
                    <h4 class="color-main mb-0 font-semibold font-size-26px ">Knowledge to Your Inbox</h4>
                    <p class="mb-0 fw-lighter">Stay updated about new products and discount offers, news, podcasts &amp; more, delivered to your inbox each month.</p>
                </div>
                <div class="col-md-5 offset-md-2">
                    <div class="row">
                        <div class="col-md-9 col-8">
                            <input type="email" placeholder="Email address *" required="" class="form-control mt-md-0 mt-2">
                        </div>
                        <div class="col-md-3 col-4">
                            <button class="btn btn-theme mt-md-0 mt-2">Subscribe</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php include("include/footer.php"); ?>
    <?php include("include/require_js.php"); ?>






</body>

</html>