<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <?php include("include/require_css.php"); ?>
    <style>
        .table-main {

            border-bottom-color: #DADADA;
        }

        .table {
            border-bottom-color: #DADADA;
        }

        .row1 {
            position: relative;
            bottom: 7px;

        }

        .data {
            /* top: 470px;
        left: 379px;
        width: 250px;
        height: auto; */
            text-align: left;
            font: normal normal normal 18px/86px Myriad Pro;
            letter-spacing: 0px;
            color: #000000;
            opacity: 1;
            vertical-align: center;
            font-size: medium;
        }

        .header-left {
            top: 161px;
            left: 352px;
            width: 32px;
            height: 15px;
            text-align: left;
            font: normal normal normal 14px/21px Myriad Pro;
            letter-spacing: 0.56px;
            color: #666666;
            opacity: 1;
        }

        .Available {
            color: #67A746
        }

        .notification {

            text-decoration: none;
            padding: 15px 15px;
            position: relative;
            display: inline-block;
            border-radius: 2px;
        }

        .notification .badge {
            position: absolute;
            top: 0px;
            margin-top: 5px;
            right: 5px;
            padding: 5px;
            border-radius: 50%;
            background: #90B83E;
            color: white;
            font-size: 12px;
        }

        .table-hover.mycart-table tr {
            border: 0;
            border-bottom-color: #ddd;
        }

        .table-hover.mycart-table thead th {
            border: 0;
        }

        .table-hover.mycart-table thead {
            border-top: 1px solid #ddd;
            border-bottom: 1px solid #ddd;
        }

        .table-hover.mycart-table .data-title {
            /* word-break: break-word; */
            line-height: 20px;
        }

        .table-hover.mycart-table td .data {
            top: auto;
            left: auto;
            width: auto;
            height: auto;
        }

        .table-hover.mycart-table #tblData {
            top: auto;
        }

        .table-hover.mycart-table {
            vertical-align: middle;
        }



        .btn.btn-login-header {
            outline: none;
            margin-left: 15px;
        }

        .svgtruck {
            color: #90B83E;
        }

        .days {
            background-color: #D2DCCD4D;
            padding: 12px;
            border-radius: 8px;
        }

        .top-title {
            display: contents;
        }

        .bl-det {
            color: #222222;
            font-size: 22px;
            font-weight: 600;
        }

        .section-products .right-line {
            border-right: 1px solid #DADADA;
        }

        .section-products .right-padding {
            padding-right: 30px;
        }

        .section-products .table-hover.mycart-table input {
            border: 1px solid #ddd;
            text-align: center;
            border-radius: 3px;
            height: 35px;
            outline: none;
        }

        .section-products .table-hover.mycart-table tr:last-child td {
            border-bottom: 0px;
        }





        @media only screen and (max-width: 991px) {
            .top-title {
                display: flex;
            }

            .section-products .right-line {
                border-right: none;
            }

            .section-products .right-padding {
                padding-right: 0px;
            }

        }

        @media only screen and (max-width: 768px) {
            .header-left {
                margin-left: 20px !important;
            }

            .form-select {
                width: 110%;
                font-size: 10px;
            }

            .top-bar.text-center {
                font-size: 11px;
            }

        }

        .form-control {
            font-size: 12px;

        }

        .Search {
            position: absolute;
            right: 10px;
            margin-top: 10px;

        }

        .chk-btn {
            background: #90B83E;
            color: #fff;
            border: none;
            width: 100%;
            height: 45px;
            border-radius: 6px;
            font-size: 16px;
            font: 'Myriad Pro';

        }

        #tblData {
            position: relative;
            top: 26px;

        }
    </style>


</head>

<body>

    <?php include("include/header.php"); ?>

    <section class="section-products">
        <div class="container">
            <div class="header-left" style="width: fit-content;padding-top: 10px;">
                <a class="active" href="#home">Home /</a>
                <a href="#Quick Order" style="color: #90B83E">My Cart</a>
            </div>
        </div>
        <div class="container">
      

            <div class="row me-0">
                   
                <div class="col-lg-8 col-md-12 right-line right-padding">
                <div class="border-above-title" style="margin-top: 70px;"><span class=""></span></div>
                    <div class="top-title  d-flex  justify-content-between ">
                        <h1 class="title mb-0 ps-lg-0 ps-3"> My</span>
                            <span class="color-theme">Cart</span>
                        </h1>
                        <div class="mt-2 ps-lg-0 ps-2" style="color: #231F20; font:  Myriad Pro; font-size: large; font-size:16px;">3 items in
                            cart
                            &nbsp;&nbsp;<a href="" style="color: #67A746; text-decoration: underline;">Clear
                                cart</a>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-hover mycart-table" style="margin-top: 45px;">
                            <thead>
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">Product Name</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Total</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr class="table-main">
                                    <th scope="row"><img src="assets/img/My Cart/1.png" class="rounded float-left" style="border-color: #DADADA; width: 75px; height: auto;"></th>
                                    <td> <span class="data data-title"> KMS-66 Ashwagandha</span></td>
                                    <td id="tblData"><span>&#8377;850.00</span></td>
                                    <td id="tblData"><input type="number" value="2" min="0" max="10"></td>
                                    <td id="tblData"><span>&#8377;1,700.00</span></td>
                                    <td id="tblData"><i class="far fa-trash-alt"></i></td>

                                </tr>
                                <tr class="table-main">
                                    <th scope="row"><img src="assets/img/My Cart/2.png" class="rounded float-left" style="border-color: #DADADA; width: 75px; height: auto;"></th>
                                    <td><span class="data data-title">
                                            Menopause Management </span>
                                    </td>
                                    <td class="data"><span> &#8377;850.00</span></td>
                                    <td id="tblData"><input type="number" value="2" min="0" max="10"></td>
                                    <td id="tblData"><span>&#8377;1,700.00</span></td>
                                    <td id="tblData"><i class="far fa-trash-alt"></i></td>
                                </tr>

                                <tr class="table-main">
                                    <td scope="row"><img src="assets/img/My Cart/3.png" class="rounded float-left" style="border-color: #DADADA; width: 75px; height: auto;"></td>
                                    <td><span class="data data-title">
                                            Calm </span>
                                    </td>
                                    <td class="data"><span>&#8377;550.00</span></td>
                                    <td id="tblData"><input type="number" value="1" min="0" max="10"></td>
                                    <td id="tblData"><span>&#8377;550.00</span></td>
                                    <td id="tblData"><i class="far fa-trash-alt"></i></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12">
                    <div class="d-flex justify-content-between">
                        <h3 style="color: #000000; font: Myriad Pro; height: 29px; margin-left: 12px;">ORDER SUMMARY
                        </h3>
                        <!-- <a href="" style="color: #67A746; text-decoration: underline; top: 247px; left: 1572px; width: 68px; height: 16px; font: Myriad Pro; font-size: unset;">Edit Order</a> -->
                    </div>
                    <div class="row1 mt-3" style="padding: 20px;">
                        <div class="d-flex justify-content-between">
                            <h6 style="color: #666666">Items Subtotal</h6>
                            <div class="ml-auto p-5px">₹2,850.00</div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6 style="color: #666666">Shipping Charges</h6>
                            <div class="ml-auto p-5px">₹100.00</div>
                        </div>
                        <div class="text-dark mt-3">Have a promo code?</div>
                        <div class="mt-2 d-flex justify-content-between">
                            <input type="text" placeholder="Enter Promo Code" class="form-control" style="margin-right: 20px;">
                            <button type="button" class="btn text-center text-white" style="background: #222222;">Apply</button>
                        </div>
                        <div style="border-bottom-style: dashed; border-color: #67A746; padding-top:20px; border-width:0.1rem">
                        </div>
                       
                       <br>
                        <div class="d-flex justify-content-between mb-3">
                            <h6 style="color:#222222;font-weight: 600; ">Total</h6>
                            <div class="ml-auto" style="color: #231F20; font-weight: 600;">₹2,950.00</div>
                        </div>

                        <div class=" ml-2 days">

                            <div class="ml-2 d-flex">
                                <div>
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="truck" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="svg-inline--fa fa-truck fa-w-20 fa-3x svgtruck ml-2 mt-1 mr-2" style="height: 15px;">
                                        <path fill="currentColor" d="M624 352h-16V243.9c0-12.7-5.1-24.9-14.1-33.9L494 110.1c-9-9-21.2-14.1-33.9-14.1H416V48c0-26.5-21.5-48-48-48H48C21.5 0 0 21.5 0 48v320c0 26.5 21.5 48 48 48h16c0 53 43 96 96 96s96-43 96-96h128c0 53 43 96 96 96s96-43 96-96h48c8.8 0 16-7.2 16-16v-32c0-8.8-7.2-16-16-16zM160 464c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48zm320 0c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48zm80-208H416V144h44.1l99.9 99.9V256z" class=""></path>
                                    </svg>
                                </div>
                                <div style="color: #000000; margin-left: 10px; font: Myriad Pro;">
                                    General Shipping: 3-7 working days</div>
                            </div>
                            <div class="ml-2" style="color: #666666; font-size: small;">Shipping options will be
                                updated
                                during checkout.</div>

                        </div>
                        <br>
                        <div>
                            <button type="button" class="chk-btn">
                                Proceed to Checkout
                            </button>
                        </div>
                    </div>


                </div>

                <!-- </div> -->

            </div>

    </section>


    <section class="section-subscribe mt-40">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5">
                    <h4 class="color-main mb-0 font-semibold font-size-26px ">Knowledge to Your Inbox</h4>
                    <p class="mb-0 fw-lighter mt-2">Stay updated about new products and discount offers, news, podcasts &amp;
                        more, delivered to your inbox each month.</p>
                </div>
                <div class="col-md-5 offset-md-2">
                    <div class="row">
                        <div class="col-md-9 col-8">
                            <input type="email" placeholder="Email address *" required="" class="form-control mt-md-0 mt-2">
                        </div>
                        <div class="col-md-3 col-4">
                            <button type="button" class="btn text-center text-white" style="background: #90B83E; width: fit-content">Subscribe</button>
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