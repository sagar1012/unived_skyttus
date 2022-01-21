<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unived - FAQs</title>
    <?php include("include/require_css.php"); ?>
    <style>
        .head-line {
            font-size: 34px;
            font-weight: bold;
            color: #231F20;
        }

        .ask-questions {
            border-right: 1px solid lightgray;
        }

        .knowledge-text {
            width: auto;
            height: inherit;
            padding: 100px 0;
        }

        /* Custom style */
        .accordion-button::after {

            transform: scale(.7) !important;
            border: 1px solid #67A746;
            border-radius: 100%;
            width: 30px;
            background-size: 20px;
            height: 30px;
            text-align: center;
            color: #67A746;
            font-size: 24px;
            line-height: 24px;
            background-image: none;
            content: '+';
        }

        .accordion-button:not(.collapsed)::after {
            background-image: none;
            content: '-';
        }

        .filter-block {
            font-size: 18px;
            color: #222222;
        }

        .fltr-line {
            position: relative;
            top: -30px;
            width: 70%;
            left: 100px;
        }

        .getin-line {
            position: relative;
            bottom: 31px;
            width: 70%;
            left: 115px;
        }

        .accordion-button {
            font-size: 20px;
        }

        .form-check-label {
            font-size: 16px;
            color: #666666;
        }

        .form-check-input {
            margin-right: 20px;
        }

        .chat-block,
        .contact-block {
            background: linear-gradient(to top left, #464141, #000000);
            border-radius: 6px;
            opacity: 1;
            color: #FFFFFF;
            width: 343px;
            height: 150px;
        }

        .chat-block span,
        .contact-block span {
            text-transform: uppercase;
            position: relative;
            top: 25px;
            left: 80px;
        }

        .chat-block p,
        .contact-block p {
            font-size: 16px;
            color: #FFFFFF;
            margin-top: 55px;
            margin-left: 25px;
        }

        .accordion-button:not(.collapsed) {
            color: #000000 !important;
            background-color: #ffffff;
        }

        .accordion-button:focus {
            border: none !important;
            border-color: #FFFFFF !important;
            box-shadow: 0 0 0 0.25rem rgb(255 255 255 / 25%) !important;
        }

        .chatblock,
        .contactblock {
            background: #222222 0% 0% no-repeat padding-box;
            border-radius: 6px;
            opacity: 1;
            color: #fff;
            padding: 25px 20px;
        }

        .chatblock p,
        .contactblock p {
            margin-bottom: 0;
        }

        .chatblock h5,
        .contactblock h5 {
            margin-left: 15px;
            margin-bottom: 0;
        }

        .chatblock img,
        .contactblock img {
            width: 25px;
        }

        section.faq-image {
            background: url(assets/img/FAQs.png);
            background-repeat: no-repeat;
            background-size: cover;
        }

        .accordion-item:first-of-type .accordion-button {
            border: 0;
            padding-left: 0;
            padding-right: 0;
            text-align: left;
        }

        .accordion {
            border-bottom: 1px solid #ddd;
            padding: 15px 0;
        }

        .accordion-item:last-of-type .accordion-collapse {
            border: 0;
        }

        .accordion .card-body {
            padding-left: 0;
        }

        @media(max-width:768px) {
            .ask-questions {
                border-right: none;
            }
        }
    </style>

</head>

<body>
    <?php include("include/header.php"); ?>
    <section class="faq-image">
        <div class="container">
            <div class="knowledge-text">
                <h1>How can we help?</h1>
                <p> Home <span>&nbsp;&nbsp;&nbsp; / &nbsp;&nbsp;&nbsp; </span>
                    <span class="color-lightgreen"> FAQs </span>
                </p>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row">
            <div class="col-md-12 d-flex col-sm-12 row">
                <div class="col-md-8 col-sm-12 p-4 mt-5 ask-questions">
                    <hr style="height: 3px;width: 130px;color: #000000;">
                    <span class="head-line">Frequently <span style="color:#67A746">Asked Questions</span> </span>
                    <div class="accordion" id="myAccordion">
                        <div class="accordion-item mt-3">
                            <h2 class="accordion-header" id="headingOne">
                                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne">Is Unived an Indian company?</button>
                                <span class="plus"></span>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                                <div class="card-body">
                                    <p>Yes, very much. Unived was founded in 2010, and is involved in the research and
                                        manufacturing of various vegan dietary supplements and sports nutrition
                                        products. We are based in Bombay.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion" id="myAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo">What are the different types of products you
                                    manufacture?</button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                                <div class="card-body">
                                    <p>Yes, very much. Unived was founded in 2010, and is involved in the research and
                                        manufacturing of various vegan dietary supplements and sports nutrition
                                        products. We are based in Bombay.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion" id="myAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree">Are all your products Vegan?</button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                                <div class="card-body">
                                    <p>Yes, very much. Unived was founded in 2010, and is involved in the research and
                                        manufacturing of various vegan dietary supplements and sports nutrition
                                        products. We are based in Bombay.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion" id="myAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFour">What does Vegan mean?</button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                                <div class="card-body">
                                    <p>Yes, very much. Unived was founded in 2010, and is involved in the research and
                                        manufacturing of various vegan dietary supplements and sports nutrition
                                        products. We are based in Bombay.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion" id="myAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFive">Why Vegan?</button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                                <div class="card-body">
                                    <p>Yes, very much. Unived was founded in 2010, and is involved in the research and
                                        manufacturing of various vegan dietary supplements and sports nutrition
                                        products. We are based in Bombay.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion" id="myAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseSix">What about the capsules?</button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                                <div class="card-body">
                                    <p>Yes, very much. Unived was founded in 2010, and is involved in the research and
                                        manufacturing of various vegan dietary supplements and sports nutrition
                                        products. We are based in Bombay.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion" id="myAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseSeven">Now, how do I understand which products are suited
                                    for my lifestyle?</button>
                            </h2>
                            <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                                <div class="card-body">
                                    <p>Yes, very much. Unived was founded in 2010, and is involved in the research and
                                        manufacturing of various vegan dietary supplements and sports nutrition
                                        products. We are based in Bombay.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion" id="myAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseEight">I require assistance in placing an order, how do I
                                    reach you?</button>
                            </h2>
                            <div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                                <div class="card-body">
                                    <p>Yes, very much. Unived was founded in 2010, and is involved in the research and
                                        manufacturing of various vegan dietary supplements and sports nutrition
                                        products. We are based in Bombay.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion" id="myAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseNine">I require assistance in placing an order, how do I
                                    reach you?</button>
                            </h2>
                            <div id="collapseNine" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                                <div class="card-body">
                                    <p>Yes, very much. Unived was founded in 2010, and is involved in the research and
                                        manufacturing of various vegan dietary supplements and sports nutrition
                                        products. We are based in Bombay.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion" id="myAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTen">How long do orders typically take to ship
                                    out?</button>
                            </h2>
                            <div id="collapseTen" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                                <div class="card-body">
                                    <p>Yes, very much. Unived was founded in 2010, and is involved in the research and
                                        manufacturing of various vegan dietary supplements and sports nutrition
                                        products. We are based in Bombay.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion" id="myAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseEleven">How long do orders take to get delivered?</button>
                            </h2>
                            <div id="collapseEleven" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                                <div class="card-body">
                                    <p>Yes, very much. Unived was founded in 2010, and is involved in the research and
                                        manufacturing of various vegan dietary supplements and sports nutrition
                                        products. We are based in Bombay.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion" id="myAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwelve">Can I track my orders?</button>
                            </h2>
                            <div id="collapseTwelve" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                                <div class="card-body">
                                    <p>Yes, very much. Unived was founded in 2010, and is involved in the research and
                                        manufacturing of various vegan dietary supplements and sports nutrition
                                        products. We are based in Bombay.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion" id="myAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThirteen">Do you ship International?</button>
                            </h2>
                            <div id="collapseThirteen" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                                <div class="card-body">
                                    <p>Yes, very much. Unived was founded in 2010, and is involved in the research and
                                        manufacturing of various vegan dietary supplements and sports nutrition
                                        products. We are based in Bombay.</p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="accordion" id="myAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFourteen">Are your products available in other
                                    countries?</button>
                            </h2>
                            <div id="collapseFourteen" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                                <div class="card-body">
                                    <p>Yes, very much. Unived was founded in 2010, and is involved in the research and
                                        manufacturing of various vegan dietary supplements and sports nutrition
                                        products. We are based in Bombay.</p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="accordion" id="myAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFifteen">Do you offer nutrition consultation?</button>
                            </h2>
                            <div id="collapseFifteen" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                                <div class="card-body">
                                    <p>Yes, very much. Unived was founded in 2010, and is involved in the research and
                                        manufacturing of various vegan dietary supplements and sports nutrition
                                        products. We are based in Bombay.</p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="accordion" id="myAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseSixteen">How can I become a Unived sponsored
                                    athlete?</button>
                            </h2>
                            <div id="collapseSixteen" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                                <div class="card-body">
                                    <p>Yes, very much. Unived was founded in 2010, and is involved in the research and
                                        manufacturing of various vegan dietary supplements and sports nutrition
                                        products. We are based in Bombay.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-12 mt-5 p-4 filter-block">
                    <div class="row">
                        <div class="col-md-12">
                            <span>FILTER BY</span>
                            <hr class="fltr-line">
                            <form>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1" checked>
                                    <label class="form-check-label" for="exampleCheck1">Orders</label>
                                </div>
                                <div class="form-check mt-2">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Shipping</label>
                                </div>
                                <div class="form-check mt-2">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Returns</label>
                                </div>
                                <div class="form-check mt-2">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Supplements</label>
                                </div>
                                <div class="form-check mt-2">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Consultations</label>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-12 mt-4">
                            <div class="chatblock">
                                <div class="d-flex align-items-center mb-4">
                                    <img src="assets/img/chat with us.svg" alt="chat-svg">
                                    <h5>CHAT WITH US</h5>
                                </div>
                                <span>Monday - Friday</span>
                                <p>9:00am - 8:00pm(IST)</p>
                            </div>
                        </div>
                        <div class="col-md-12 mt-4">
                            <div class="contactblock">
                                <div class="d-flex align-items-center mb-4">
                                    <img src="assets/img/contact us.svg" alt="chat-svg">
                                    <h5>CONTACT US</h5>
                                </div>
                                <span>Business - info@unived.in</span>
                                <p>Support - wecare@unived.in</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <section class="section-subscribe mt-40">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5">
                    <h4 class="color-main mb-0 font-semibold font-size-26px ">Knowledge to Your Inbox</h4>
                    <p class="mb-0 fw-lighter">Stay updated about new products and discount offers, news,
                        podcasts &amp;
                        more, delivered to your inbox each month.</p>
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