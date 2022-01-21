<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <?php include("include/require_css.php"); ?>


    <style>
        .img {
            width: 50%;
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

        .notification {

            text-decoration: none;
            padding: 15px 26px;
            position: relative;
            display: inline-block;
            border-radius: 2px;
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

        .form-control {
            font-size: 12px;

        }

        .header-left {
            width: fit-content;
            padding-top: 10px;

        }

        .color {

            color: #67A746;

        }

        .member .c {
            padding: 6px 11px 6px 11px;
            width: 60px;
            height: 60px;
            border-width: 1px;
            border-style: dashed;
            border-radius: 100%;
            border-color: #67A746;
            background-color: white;
        }

        .member p {
            margin-bottom: 0;
        }

        .member h5 {
            color: #222;
        }

        .univedPrime-table td {
            padding: 20px 0;
        }

        table.univedPrime-table tr th {

            border-bottom-color: #ddd !important;
            border-color: inherit;
            /* border-style: solid; */
            border-width: 0;
        }

        @media only screen and (max-width: 768px) {
            .header-left {
                margin-left: 20px !important;
            }

            .form-select {
                width: 60%;
                font-size: 10px;
            }
        }

        @media only screen and (min-width: 768px) {
            .top-bar.text-center {
                font-size: 11px;
            }



        }

        @media only screen and (max-width: 768px) {
            .header-left {
                font-size: 10px;

            }

            .p {
                font-size: 10px;
            }

            .Subtilte {
                font-size: 10px;
            }
        }
    </style>


</head>

<body>

    <?php include("include/header.php"); ?>

    <section class="section-products">
        <div class="container">
            <div class="header-left">
                <a class="active" href="#home">Home</a>
                <a class="ms-3">/</a>
                <a href="#Shop" class="ms-3 " style="color: #90B83E">Unived Prime </a>

            </div>

            <div class="border-above-title"><span class="mt-5"></span></div>
            <div class="mb-4">
                <h5>Prime Member <a class="color">Benefits</a></h5>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12  background-color: #F7F7F7">
                    <div class="member d-flex pe-3 ps-3 pt-4 pb-4" style="background-color: #F7F7F7">
                        <img src="assets/img/UnivedPrime/Free%20shipping.svg" class="img1  me-2 c">
                        <span class="pe-2 ms-3">
                            <h5><b>Free Shipping</b></h5>
                            <p>Get something nice that you can enjoy for your birthday.</p>
                        </span>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 ">
                    <div class="member d-flex pe-3 ps-3 pt-4 pb-4 mb-4" style="background-color: #F7F7F7">
                        <img src="assets/img/UnivedPrime/Special%20Offer.svg" class="img1  me-2 c">

                        <span class="pe-2 ms-3">
                            <h5><b>Special Prime Deals</b></h5>
                            <p>Exclusive access to deals and discounts only for prime member.</p>
                        </span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="member d-flex pe-3 ps-3 pt-4 pb-4 mb-4" style="background-color: #F7F7F7">
                        <img src="assets/img/UnivedPrime/Customer%20support.svg" class="img1  me-2 c">

                        <span class="pe-2 ms-3">
                            <h5><b>Dedicated Customer Support</b></h5>
                            <p>Get order assistance & questions answered by your
                                dedicated customer care agent.</p>
                        </span>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="member d-flex pe-3 ps-3 pt-4 pb-4" style="background-color: #F7F7F7">
                        <img src="assets/img/UnivedPrime/Birthday%20Surprise.svg" class="img1  me-2 c">

                        <span class="pe-2 ms-3">
                            <h5><b>Free Birthday Surprise</b></h5>
                            <p>Get something nice that you can enjoy for your birthday.</p>
                        </span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="member d-flex pe-3 ps-3 pt-4 pb-4" style="background-color: #F7F7F7">
                        <img src="assets/img/UnivedPrime/points.svg" class="img1  me-2 c">

                        <span class="pe-2 ms-3">
                            <h5><b>Loyalty Points</b></h5>
                            <p>Earn points with every product purchase. 1 point is earned on net of GST value.</p>
                        </span>
                    </div>
                </div>
            </div>
            <br>

    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="border-above-title  p-0"><span class="mt-5"></span></div>
                <div class="mb-4 p-0">
                    <h5>Unived Rewards <a class="color">Rewards</a></h5>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="reward-box">
                        <table class="table univedPrime-table">
                            <thead>
                                <tr style="background-color: #F7F7F7;">
                                    <th scope="col"></th>
                                    <th scope="col">Title</th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                    <th scope="col">Get Rewards</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td scope="row"></td>
                                    <td>Review Your Purchase</td>
                                    <td></td>
                                    <td></td>
                                    <td>50 points</td>
                                </tr>
                                <tr>
                                    <td scope="row"></td>
                                    <td>Birthday Rewards</td>
                                    <td></td>
                                    <td></td>
                                    <td>50 points</td>
                                </tr>
                                <tr>
                                    <td scope="row"></td>
                                    <td>Refer a Friend</td>
                                    <td></td>
                                    <td></td>
                                    <td>50 points</td>
                                </tr>
                                <tr>
                                    <td scope="row"></td>
                                    <td>Account Sign Up</td>
                                    <td></td>
                                    <td></td>
                                    <td>50 points</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </section>

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