<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unived - Support</title>
    <?php include("include/require_css.php"); ?>
    <style>
    .chatblock,
    .contactblock {
        background: #222222 0% 0% no-repeat padding-box;
        border-radius: 6px;
        opacity: 1;
        color: #fff;
        padding: 25px 20px;
    }

    .chatblock h5,
    .contactblock h5 {
        margin-bottom: 20px;
    }

    .support {
        text-align: left;
        /* font: normal normal normal 16px/26px Myriad Pro; */
        letter-spacing: 0px;
        color: #666666;
        text-transform: capitalize;
        opacity: 1;
        margin-top: 50px;
    }

    .support h5 {
        width: fit-content;
    }

    .hr-line {
        border-top: 1px solid lightgray;
        width: 78%;
        margin-top: 12px;
    }

    .ask {
        border: 1px dashed #67A746;
        border-radius: 6px;
        opacity: 1;
        padding: 30px;
    }

    .ask span {
        font-size: 26px;
        font-weight: bold;
    }

    .ask p {
        text-align: left;
        letter-spacing: 0px;
        opacity: 1;
    }

    .socialLine {
        position: relative;
        bottom: 30px;
        width: 60%;
        margin-left: 37%;
    }


    .order-title span,
    .business-title span,
    .general-title span {
        font-size: 26px;
        font-weight: bold;
        color: #222;
    }

    .order-support,
    .business-title p {
        font-size: 16px;
        color: #666666;
    }

    textarea,
    input.form-control::placeholder {
        color: #909090;
    }

    .btnSend {
        background-color: #90B83E;
        color: #fff;
        border-style: none;
        width: 120px;
        height: 45px;
        border-radius: 6px;
    }

    .knowledge-navbar {
        border-bottom: 1px solid #dadada;
    }

    .form-label {
        color: #222;
    }

    .trending.social h4:after {
        width: 40%;
    }

    .heading h4:after {
        width: 60%;
    }

    @media(max-width:991px) {
        .col-lg-8.col-md-12.border-end {
            border-right: 0px !important;
            padding-right: 20px !important;
            padding-left: 20px !important;
        }

        .col-lg-4.col-md-12.support {
            padding-left: 20px !important;
            padding-right: 20px !important;
        }

        .heading h4:after {
            width: 85%;
        }

        .trending.social h4:after {
            width: 70%;
        }
    }
    </style>
</head>

<body>
    <?php include("include/header.php"); ?>

    <section class="knowledge-image">
        <div class="container">
            <div class="knowledge-text">
                <h1>Support</h1>
                <p> Home <span>&nbsp;&nbsp;&nbsp; / &nbsp;&nbsp;&nbsp; </span>
                    <span class="color-lightgreen"> Support </span>
                </p>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-expand-lg navbar-light knowledge-navbar">

                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <ul>
                                <li class="active"> <a class="nav-item nav-link" href="knowledge.php">Contact Us</a>
                                </li>
                                <li><a class="nav-item nav-link" href="articals.php">FAQs</a></li>
                                <li> <a class="nav-item nav-link" href="videos.php">Orders Support</a> </li>
                                <li><a class="nav-link" href="podcast.php">Business Inquiry</a> </li>
                                <li> <a class="nav-link" href="events.php">General & Media</a> </li>
                            </ul>
                        </div>
                    </div>

                </nav>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 border-end pe-5 mt-5">
                    <div class="row">
                        <div class="col-sm-12 get-touch mb-4">
                            <h4><b> Get in Touch </b></h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="chatblock">
                                <h5>CHAT WITH US</h5>
                                <span>Monday - Friday</span>
                                <p>9:00am - 8:00pm(IST)</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contactblock">
                                <h5>CONTACT US</h5>
                                <span>Business - info@unived.in</span>
                                <p>Support - wecare@unived.in</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mt-4">
                        <div class="ask">
                            <span> Frequently <span style="color:#67A746">Asked Questions</span></span>
                            <p class="mt-3">We encourage you to visit our <u><strong>FAQ page</strong></u> where you
                                will
                                find answers to
                                common questions we
                                receive. For order, business, or media related queries, please submit your information
                                via
                                the
                                appropriate section below.</p>
                        </div>
                    </div>
                    <div class="col-md-12 order-support">
                        <hr style="margin-top:50px;">
                        <div class="order-title mt-2 mb-2">
                            <span>Order Support</span>
                            <p class="mt-3">Have a query regarding an order you recently placed? Be rest assured, we
                                will do
                                our best to
                                assist you. Please sate your Order ID in the subject, and clearly list your query.
                                Please do
                                allow us upto 48 hours to respond, we’ll try and respond at the earliest.</p>
                        </div>
                        <div class="col-md-12 row mt-5">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="order-id">Order ID*</label>
                                    <input type="text" class="form-control" placeholder="Order ID">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email" class="form-label">Email ID*</label>
                                    <input type="text" class="form-control" placeholder="Email ID">
                                </div>
                            </div>
                            <div class="form-group mt-4">
                                <label for="" class="form-label">Your Message*</label>
                                <textarea class="form-control" name="" id="" cols="30" rows="5"
                                    placeholder="Your Message"></textarea>
                            </div>
                            <div class="col-md-2 mt-5">
                                <button class="btnSend">Send</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 business-inquiry">
                        <hr style="margin-top:50px;">
                        <div class="business-title mt-2 mb-2">
                            <span>Business Inquiry</span>
                            <p class="mt-3">We are currently available in India, USA, UK, Singapore, Australia,
                                Indonesia,
                                Vietnam, and
                                HongKong. We welcome your interest in being a retailer or distributor for our brand,
                                within
                                India or overseas.</p>
                        </div>
                        <div class="col-md-12 row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="order-id">Company Name*</label>
                                    <input type="text" class="form-control" placeholder="Company Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email" class="form-label">Country*</label>
                                    <select class="form-control">
                                        <option value="" style="color:#666666;">Country</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 mt-4">
                                <div class="form-group">
                                    <label class="form-label" for="order-id">First Name*</label>
                                    <input type="text" class="form-control" placeholder="First Name">
                                </div>
                            </div>
                            <div class="col-md-6 mt-4">
                                <div class="form-group">
                                    <label class="form-label" for="order-id">Last Name*</label>
                                    <input type="text" class="form-control" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="col-md-6 mt-4">
                                <div class="form-group">
                                    <label class="form-label" for="order-id">Phone Number*</label>
                                    <input type="text" class="form-control" placeholder="Phone Number">
                                </div>
                            </div>
                            <div class="col-md-6 mt-4">
                                <div class="form-group">
                                    <label class="form-label" for="order-id">Email ID*</label>
                                    <input type="text" class="form-control" placeholder="Email ID">
                                </div>
                            </div>
                            <div class="form-group mt-4">
                                <label for="" class="form-label">Your Message*</label>
                                <textarea class="form-control" name="" id="" cols="30" rows="5"
                                    placeholder="Your Message"></textarea>
                            </div>
                            <div class="col-md-2 mt-4">
                                <button class="btnSend">Send</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 general-media">
                        <hr style="margin-top:50px;">
                        <div class="general-title mt-2 mb-2">
                            <span>General & Media</span>
                            <p class="mt-3">If you have a general query, or a media related inquiry, please use this
                                section
                                to get in
                                touch
                                with us.</p>
                        </div>
                        <div class="col-md-12 row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="order-id">Your Name*</label>
                                    <input type="text" class="form-control" placeholder="Company Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="order-id">Email ID*</label>
                                    <input type="text" class="form-control" placeholder="Email ID">
                                </div>
                            </div>
                            <div class="form-group mt-4">
                                <label class="form-label" for="order-id">Subject*</label>
                                <input type="text" class="form-control" placeholder="Subject">
                            </div>
                            <div class="form-group mt-4">
                                <label for="" class="form-label">Your Message*</label>
                                <textarea class="form-control" name="" id="" cols="30" rows="5"
                                    placeholder="Your Message"></textarea>
                            </div>
                            <div class="col-md-2 mt-5">
                                <button class="btnSend">Send</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 support ps-5">
                    <div class="row">
                        <div class="heading">
                            <h4 class="font-size-18px tt-up fw-600 color-black mt-30"> Support </h4>
                        </div>
                        <p class="mt-4">Welcome To Unived, We’re Happy To Help! You Will Find Answers To Common
                            Questions In Our FAQ
                            Page, We
                            Encourage You To Check That Out. If You Need Specific Support Related To An Order That
                            You’ve
                            Placed, Have A Business Inquiry For Wholesale Or Retail, Or Wish To Get In Touch For Media
                            Relations, Please Submit Your Request Via The Appropriate Sections Below.</p>
                    </div>
                    <div class="row">
                        <div class="social mt-5">
                            <div class="trending social">
                                <div class="heading">
                                    <h4 class="font-size-18px tt-up fw-600 color-black mb-3">BE SOCIAL WITH US</h4>
                                </div>
                                <ul class="mt-2">
                                    <li><a href="" class=""><img src="assets/img/facebook.svg"> </a> </li>
                                    <li><a href="" class=""><img src="assets/img/insta.svg"> </a> </li>
                                    <li><a href="" class=""><img src="assets/img/twitter.svg"> </a> </li>
                                    <li><a href="" class=""><img src="assets/img/linkdin.svg"> </a> </li>
                                    <li><a href="" class=""><img src="assets/img/whatsapp.svg"> </a> </li>
                                </ul>
                            </div>
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