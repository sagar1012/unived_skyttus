<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <?php include("include/require_css.php"); ?>


    <style>
    h5.title {
        font-size: 24px;
        font-weight: 600;
        color: #222;
    }

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
        font-family: Myriad Pro Regular;
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

    table.univedPrime-table tr:last-child td {
        border-bottom: 0px
    }

    .hedaerimg {
        width: 100%;
        height: 400px;
        border-radius: 5px;
    }

    .ihedaerimgmage {
        position: relative;
    }

    .hedaerimg .text {

        top: 10px;
        left: 10px;
        width: 300px;
    }

    .top-left {
        position: absolute;
        bottom: -33px;
        left: 145px;
        color: white;

    }

    .top-right {
        position: absolute;
        bottom: 97px;
        right: 274px;
    }

    .form-select {
        width: 60%;
        font-size: 10px;
    }

    .footerimg {
        width: 100%;
        top: 2089px;
        left: 280px;
        height: 168px;
        opacity: 1;
        border-radius: 5px;
    }

    @media only screen and (min-width: 768px) {
        .top-bar.text-center {
            font-size: 11px;
        }



    }

    @media only screen and (max-width: 768px) {
        .header-left {
            font-size: 10px;
            font-family: Myriad Pro Regular;
        }

        .p {
            font-size: 10px;
        }

        .Subtilte {
            font-size: 10px;
        }
    }

    .banner1 {
        background-image: url('assets/img/UnivedPrime/Group 33513.png');
        height: auto;
        border-radius: 6px;
        background-repeat: no-repeat;
        background-size: cover;
        overflow: hidden;
        padding: 60px 30px;
    }

    .prime-ttl {
        font-size: 72px;
        color: #fff;
    }

    .prime-txt {
        font-size: 32px;
        color: #fff;
    }

    .prime-txt2 {
        font-size: 26px;
        color: #DCDD5D;
    }

    .prime-txt3 {
        font-size: 16px;
        color: #fff;
    }

    .join-btn {
        background-color: #90B83E;
        border-radius: 6px;
        color: #fff;
        font-size: 20px;
        text-align: center;
        width: 150px;
        padding-top: 10px;
        padding-bottom: 10px;
        margin-top: 20px;
    }

    .crwn-img {
        position: absolute;
        right: 125px;
        top: 190px;
        padding: 10px;

    }

    .crwn-bg {
        background: #fff;
        border-radius: 6PX;
        opacity: 0.2;
        height: 48px;
        width: 48px;
    }

    .crwnI {
        position: absolute;
        top: 20px;
        left: 20px;
    }

    .banner2 {
        background-image: url('assets/img/UnivedPrime/Group 33513.png');
        border-radius: 6px;
        padding: 50px 30px;
        overflow: hidden;
    }

    .prime-text3 {
        font-size: 30px;
        color: #FFFFFF;
    }

    .prime-text4 {
        text-align: left;
        font: normal normal 300 20px/24px;
        color: #FFFFFF;
        opacity: 1;
    }

    .button {
        margin-left: 322px;
        margin-top: 54px;
    }

    @media(max-width:768px) {
        .crwn-img {
            right: 80px;
            top: 230px;

        }

        .btn.d-flex.justify-content-end {
            justify-content: flex-start !important;
            margin-top: 15px;
        }
    }
    </style>


</head>

<body>

    <?php include("include/header.php"); ?>

    <section class="section-products">
        <div class="container">
            <div class="header-left mb-4">
                <div class="mb-4">
                    <a class="active" href="#home">Home</a>
                    <a class="ms-3">/</a>
                    <a href="#Shop" class="ms-3 ">Unived Prime </a>
                </div>
                <div class="col-md-12 banner1 row">
                    <div class="col-lg-6 col-md-12">
                        <div class="prime-ttl">
                            Unived Prime
                        </div>
                        <div class="prime-txt">
                            Become a member and start enjoying the benefits.
                        </div>
                        <div class="prime-txt2 mt-3">
                            Just ₹1000
                        </div>
                        <div class="prime-txt3">
                            Excl. GST | Yearly Membership
                        </div>
                        <div>
                            <div class="join-btn">
                                Join Now
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 d-flex justify-content-center">
                        <div>
                            <div>
                                <img src="assets/img/UnivedPrime/Logo.svg" height="301">
                            </div>
                            <div class="crwn-img">
                                <div class="crwn-bg">

                                </div>
                                <img class="crwnI" src="assets/img/UnivedPrime/crown.svg">
                            </div>
                        </div>

                    </div>
                </div>
                <div>

                </div>
                <div class="border-above-title"><span class="mt-5"></span></div>
                <div class="mb-4">
                    <h5 class="title">Prime Member <a class="color">Benefits</a></h5>
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
                    <div class="col-md-6 col-sm-12  mt-md-0 mt-sm-4">
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
                    <div class="col-md-6 col-sm-12 mt-md-0 mt-sm-4">
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
                    <h5 class="title">Unived Rewards <a class="color">Rewards</a></h5>
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
                                    <td scope="row"><img src="assets/img/UnivedPrime/review.svg"></td>
                                    <td>Review Your Purchase</td>
                                    <td></td>
                                    <td></td>
                                    <td><img src="assets/img/UnivedPrime/coin.svg" class="me-3">50 points</td>
                                </tr>
                                <tr>
                                    <td scope="row"><img src="assets/img/UnivedPrime/birthday.svg"></td>
                                    <td>Birthday Rewards</td>
                                    <td></td>
                                    <td></td>
                                    <td><img src="assets/img/UnivedPrime/coin.svg" class="me-3">50 points</td>
                                </tr>
                                <tr>
                                    <td scope="row"><img src="assets/img/UnivedPrime/refere%20a%20friends.svg"></td>
                                    <td>Refer a Friend</td>
                                    <td></td>
                                    <td></td>
                                    <td><img src="assets/img/UnivedPrime/coin.svg" class="me-3">50 points</td>
                                </tr>
                                <tr>
                                    <td scope="row"><img src="assets/img/UnivedPrime/account%20sign%20up.svg"></td>
                                    <td>Account Sign Up</td>
                                    <td></td>
                                    <td></td>
                                    <td><img src="assets/img/UnivedPrime/coin.svg" class="me-3">50 points</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
            <div class="col-md-12 row banner2">

                <div class="col-md-6 col-sm-12">
                    <div class="prime-text3">
                        Ready to Join?
                    </div>
                    <div class="prime-text4">
                        Become a member and start enjoying the benefits.
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 btn d-flex justify-content-end">
                    <button class="btn btn-theme">Join Today!</button>
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
                    <p class="mb-0 fw-lighter">Stay updated about new products and discount offers, news, podcasts &amp;
                        more, delivered to your inbox each month.</p>
                </div>
                <div class="col-md-5 offset-md-2">
                    <div class="row">
                        <div class="col-md-9 col-8">
                            <input type="email" placeholder="Email address *" required=""
                                class="form-control mt-md-0 mt-2">
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