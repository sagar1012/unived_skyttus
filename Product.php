<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <?php include("include/require_css.php"); ?>


    <style>
    .form-select {
        outline: none;
        padding: 5px 10px;
        line-height: 1.5;
        color: grey;
        background-color: #fff;
        border: 1px solid #ced4da;
        border-radius: 0.25rem;
        appearance: none;
    }

    .dropdown {
        padding: 46px 10px 10px 10px;
        font-size: 1rem;
        font-weight: semibold;
        font-family: Myriad Pro, Regular;
        line-height: 1.5;
        color: grey;
        background-color: #fff;
        background-position: right 0.75rem center;
        background-size: 16px 12px;
        border: 1px solid #ced4da;
        border-radius: 0.25rem;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        background-color: #D2DCCD;
    }

    .img {
        width: 50%;
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

    .header-left2 {
        top: 161px;
        left: 352px;
        width: 32px;
        height: 15px;
        text-align: left;
        font: normal normal normal 14px/21px Myriad Pro;
        letter-spacing: 0.56px;
        color: #222222;
        opacity: 1;
    }

    .titlemb-0 {
        top: 273px;
        left: 279px;
        width: 219px;
        height: 43px;
        text-align: left;
        font: normal normal 600 42px/42px Myriad Pro;
        letter-spacing: 0px;
        color: #231F20;
        opacity: 1;
    }

    .Available {
        color: #67A746
    }

    .Subtilte {
        top: 269px;
        left: 279px;
        width: 615px;
        height: 35px;
        text-align: left;
        font: normal normal 600 34px/28px Myriad Pro;
        letter-spacing: 0px;
        color: #231F20;
        opacity: 1;
        font-size: larger;
        margin-top: -24px;
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

    .star {
        margin-top: -53px;
    }

    .header-left {
        width: fit-content;
        padding-top: 10px;
    }

    .checked {
        top: 312px;
        left: 330px;
        height: 0px;
        background: var(--unnamed-color-67a746) 0% 0% no-repeat padding-box;
        opacity: 1;
        color: #67A746;
    }

    .Img {
        top: 484px;
        left: 522px;
        width: 529px;
        height: 529px;
        background: transparent url('img/P1.1.png') 0% 0% no-repeat padding-box;
        border-radius: 6px;
        opacity: 1;
    }

    .img {
        border: 1px solid #00000029;
        width: 60px;
    }

    .col-md-6 {
        max-width: 100%;
    }

    .content {
        top: 448px;
        left: 1297px;
        width: 126px;
        height: 35px;
        color: var(--unnamed-color-67a746);
        text-align: left;
        font: normal normal 600 34px/49px Myriad Pro;
        letter-spacing: 1.36px;
        color: #67A746;
        text-transform: uppercase;
        opacity: 1;
        font-size: 25px;
    }

    .lable {
        top: 543px;
        left: 1299px;
        width: 56px;
        height: 16px;
        text-align: left;
        font: normal normal normal 16px/22px Myriad Pro;
        letter-spacing: 0px;
        color: #222222;
        opacity: 1;
    }

    .select {
        top: 585px;
        left: 1313px;
        width: 99px;
        height: 16px;
        text-align: left;
        font: normal normal normal 16px/22px Myriad Pro;
        letter-spacing: 0px;
        color: #666666;
        opacity: 1;
        width: 257px;
    }

    .p {
        font-size: 12px;
    }

    .SCBSCRIBE {
        position: absolute;
        left: 44px;
        top: 15px;
        font-size: 11px;
        font-weight: bold;
        color: black;
    }

    .downarrow {
        position: absolute;
        right: 10px;
        top: 15px;
    }

    .s2 {
        width: 60%;
        font-size: 12px;
    }

    input {
        margin-right: 12px;
    }

    .box {
        background-color: #D2DCCD4D;
        border-style: dotted;
        padding: 3px 3px 3px 3px;
        font-size: 12px;
    }

    .box b {
        color: #222;
    }

    .color {
        color: #67A746;
    }

    .img1 {
        width: 8%;
    }

    .v-divider {
        height: 100%;
        border-left: 1px solid #DADADA;
    }

    .ContentM {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    ul li::marker {
        color: #67A746;
    }

    .new2 {
        border-top: 1px dashed #67A746;
    }

    /* ACCORDIAN */

    .suggest-box .accordion-collapse {
        border: inherit;
        border-width: 0 1px;
    }

    .suggest-box .accordion-button {
        color: #222;
        font-weight: 600;
        border: 0;
        background: #fff;
        padding-left: 0;
    }

    .accordion-button:focus {
        z-index: 0;
        border-color: inherit;
        outline: 0;
        border: 0;
        box-shadow: inherit;
    }

    .suggest-box .accordion-header i {
        font-size: 20px;
        padding-top: 15px;
    }

    /* .suggest-box .accordion-button::after {
        display: none;
    } */
    /* User Stories */
    .right-content .more-post-bottom-div {
        position: inherit;
        width: auto;
        bottom: inherit;
    }

    /* TITLE */
    h5.title-box {
        font-size: 24px;
        font-weight: 600;
        color: #222;
        margin-bottom: 20px;
    }

    h5.title-box a {
        margin-left: 8px;
    }

    h5.title-box a:hover {
        color: inherit;
    }

    /* tabing */

    .option-box {
        border-top: 1px dashed #dadada;
        padding-top: 35px;
        margin-top: 40px;
    }

    .option-box ul.nav {
        border-bottom: 1px solid #dadada;
    }

    .option-box li.nav-item button {
        border: 0;
        background: transparent;
        color: #666666;
        margin-right: 15px;
    }

    .option-box li.nav-item button.active,
    .option-box li.nav-item button:focus {
        background: transparent;
        border-bottom: 3px solid #dadada;
        color: #222;
        border-radius: 0;
    }

    .option-box li.nav-item button:focus {
        outline: 0;
    }

    /* SLIDER */

    .bag-pill-price {
        background: #fff;
        height: 29px;
        width: fit-content;
        padding: 6px 10px;
        border-radius: 15px;
        position: absolute;
        right: 10px;
        margin-top: 10px;
        font-size: 12px;
        bottom: 10px;
        border: 1px solid lightgray;
        z-index: 9;
    }

    .img-opa {
        opacity: 0.9;
        background-color: #F7F7F7;
    }

    .img2 {
        width: 3%;
    }

    .image {
        position: relative;
    }

    .image__img {
        display: block;
        width: 100%;
    }

    .image__overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.6);
        font-family: 'Quicksand', sans-serif;
        color: #ffffff;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: opacity 0.25s;
    }

    .image__overlay--blur {
        backdrop-filter: blur(5px);
    }

    .image__overlay>* {
        transition: transform 0.25s;
    }

    .image__overlay:hover {
        opacity: 1;
    }

    .bag-pill {
        background: #000;
        height: 27px;
        width: fit-content;
        padding: 6px 10px;
        border-radius: 15px;
        color: #fff;
        position: absolute;
        right: 10px;
        margin-top: 10px;
        font-size: 12px;
        top: 0;
    }

    h6 small {
        color: #67A746;
    }

    .cheacked {
        color: #90EE90;
    }

    .slider-box {
        position: relative;
    }

    .slider-box a.btn {
        background: #fff;
        border: none;
        color: #222;
        border-radius: 100%;
        line-height: 40px;
        height: 40px;
        width: 40px;
        text-align: center;
        padding: inherit;
        position: absolute;
        top: 40%;
        z-index: 99;
    }

    .slider-box a.btn.btn-left {
        left: -20px;
    }

    .slider-box a.btn.btn-right {
        right: -20px;
    }

    .cart-btn input,
    .cart-btn .btn {
        height: 40px;
    }

    .cart-btn input {
        padding-left: 15px;
        width: 55px;
        border-radius: 4px;
        border: 1px solid #d2dccd;
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

        .star {
            margin-top: -63px;
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
                <a class="active" href="#home">Home /</a>
                <a href="#Shop">&nbsp;&nbsp;&nbsp;Wellness / </a>
                <a href="#Quick Order">&nbsp;&nbsp;&nbsp;Vitamins & Minerals</a>
                <a href="#Quick Order" style="color: #90B83E">&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;Basic Multivitamin &
                    Mine...</a>
            </div>
        </div>
        <div class="container mt-30">
            <div>
                <p class="title mb-0" style="color: #90B83E"> Vitamins & Minerals</p>
            </div>
            <br>
            <h1 class="Subtilte"> Basic Multivitamin & Minerals for Women</h1>
            <br>
            <br>
            <div class="star">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span>4 Reviews</span>
            </div>
            <br>
            <hr>
            <div class="row">
                <div class="col-md-8 col-sm-12 pe-5 pb-5">
                    <div class="row">
                        <div class="col-md-2">
                            <div>
                                <img src="assets/img/Product/Unived-Basics-Women-Multivitamin-Minerals-60-Caps-MRP.png"
                                    class="img-responsive center-block d-block mx-auto" style="
    border: 1px solid  #00000029; width: 45px;">
                            </div>
                            <br>
                            <div>
                                <img src="assets/img/Product/Unived-Basics-Women-Multivitamin-Minerals-60-Caps-Benefits-600x600.png"
                                    class="img-responsive center-block d-block mx-auto"
                                    style="border: 1px solid  #00000029; width: 45px;">
                            </div>
                            <br>
                            <div>
                                <img src="assets/img/Product/Unived-Basics-Women-Multivitamin-Minerals-60-Caps-ING.png"
                                    class="img-responsive center-block d-block mx-auto"
                                    style="border: 1px solid  #00000029; width: 45px;">
                            </div>
                            <br>
                            <div>
                                <img src="assets/img/Product/Unived-Basics-Women-Multivitamin-Minerals-60-Caps-MRP.png"
                                    class="img-responsive center-block d-block mx-auto"
                                    style="border: 1px solid  #00000029; width: 45px;">
                            </div>
                            <br>
                            <div>
                                <img src="assets/img/Product/Unived-Basics-Women-Multivitamin-Minerals-60-Caps-ING.png"
                                    class="img-responsive center-block d-block mx-auto"
                                    style="border: 1px solid  #00000029; width: 45px;">
                            </div>
                            <br>
                            <div>
                                <img src="assets/img/Product/Unived-Basics-Women-Multivitamin-Minerals-60-Caps-ING.png"
                                    class="img-responsive center-block d-block mx-auto"
                                    style="border: 1px solid  #00000029; width: 45px;">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div>
                                <img src="assets/img/Product/P1.1@2x.png"
                                    class="img-responsive center-block d-block mx-auto" style="background-color: lightgray; width: 100%;
    height: auto;">
                            </div>
                        </div>
                    </div>
                    <hr class="mt-5">
                    <div class="row mt-4">

                        <div class="col-md-4 msg ContentM"><img src="assets/img/Product/Group%2021713.svg"
                                class="img1 me-2"><b>Nutrition Facts</b></div>
                        <div class="col-md-4 v-divider msg ContentM"><img src="assets/img/Product/Group%2021715.svg"
                                class="img1  me-2"><b>Certificate of Analysis</b></div>
                        <div class="col-md-4 v-divider msg ContentM"><img src="assets/img/Product/Group%2021745.svg"
                                class="img1  me-2"><b>Ask Questios</b></div>
                    </div>
                    <hr>
                    <div class="border-above-title" style="margin-top: 40px;"><span class=""></span></div>
                    <div>
                        <h5 class="title-box">Product <a class="color">Information</a></h5>

                        <p>
                            A complete formulation offering 100% RDA of all the Vitamins inclding Plant-Based Vitamin
                            D3,as well as essential minerals
                            with clcium derived from Alge.Formulated to meet a Woman's Multivitamin & Minera needs and
                            support general health &
                            well-begin,promoting an active lifestyle.
                            <br>
                            Plant-Based Vitamin D3(lichen)and a more bio-available source of Calcium(Algae).
                            <br>
                            Just the required ingredients, no filters or inactive inggredients, no binders, no
                            unnecessary ingredients.
                        </p>
                    </div>
                    <div class="border-above-title" style="margin-top: 40px;"><span class=""></span></div>
                    <div>
                        <h5 class="title-box">Key <a class="color">Benefits</a></h5>
                        <div>
                            <ul class="bullets" style="list-style:inherit">
                                <li>Helps reduce stress, anxiety, cortisol levels and stress-related food cravings.</li>
                                <li>Helps promote enhanced memory and cognitive function.</li>
                                <li>Helps promote endurance, strength, muscle size and muscle recovery rate.</li>
                                <li>Helps enhance sexual performance health in both men and women, and testosterone in
                                    men.</li>
                                <li>Organic & Vegan version of KSM-66</li>
                            </ul>
                        </div>
                    </div>
                    <div class="border-above-title" style="margin-top: 40px;"><span class=""></span></div>
                    <div>
                        <h5 class="title-box">Ingredient <a class="color">Information</a></h5>
                        <div>
                            <b><u>Synthesizers</u> – 274mg </b><br>
                            <p>Amino Acid Blend (Glycine, L-Lysine HCL, L-Ornithine L-Aspartate), Vitamin C (As Ascorbic
                                Acid), Elemental Copper (as Copper Gluconate)</p>
                        </div>
                        <div>
                            <b><u>Plant-Based Protectors </u>– 450mg</b> <br>Citrus Bioflavonoids (Standardized to 40%
                            Hesperidin),Tagetes erecta (Standardized to 5% Lutein)
                        </div>
                        <div class="mt-2">
                            <b><u>Maintenance & Hydration </u>– 142mg</b> <br>Hyaluronic Acid as
                            Na-glucuronate-N-acetylglucosamine from Standardized to 95% Hyaluronic Acid, Organic Bamboo
                            Extract Bambusa vulgaris Extract Standardized to 70% Silica
                        </div>
                    </div>
                    <div class="option-box">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-about-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-about" type="button" role="tab" aria-controls="pills-about"
                                    aria-selected="true">About</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-learn-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-learn" type="button" role="tab" aria-controls="pills-learn"
                                    aria-selected="false">Learn</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-our-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-our" type="button" role="tab" aria-controls="pills-our"
                                    aria-selected="false">Our Formulation</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-about" role="tabpanel"
                                aria-labelledby="pills-about-tab">
                                <p>
                                    A complete formulation offering 100% RDA of all the Vitamins including Plant-Based
                                    Vitamin D3,
                                    as well as essential minerals with Calcium derived from Algae.
                                    Formulated to meet a Woman’s Multivitamin & Mineral needs and support general health
                                    & well-being,
                                    promoting an active lifestyle. </p>
                                </p>Plant-Based Vitamin D3 (Lichen) and a more bio-available source of Calcium (Algae).
                                </p>
                                </p> Just the required ingredients,
                                no fillers or inactive ingredients, no binders, no unnecessary ingredients.</p>
                                </p>
                            </div>
                            <div class="tab-pane fade" id="pills-learn" role="tabpanel"
                                aria-labelledby="pills-learn-tab">
                                <p>
                                    2 A complete formulation offering 100% RDA of all the Vitamins including Plant-Based
                                    Vitamin
                                    D3, as well as essential minerals
                                    with Calcium derived from Algae. Formulated to meet a Woman’s Multivitamin & Mineral
                                    needs
                                    and support general health &
                                    well-being, promoting an active lifestyle. <br>
                                    Plant-Based Vitamin D3 (Lichen) and a more bio-available source of Calcium
                                    (Algae).<br>
                                    Just the required ingredients, no fillers or inactive ingredients, no binders, no
                                    unnecessary ingredients.
                                </p>
                            </div>
                            <div class="tab-pane fade" id="pills-our" role="tabpanel" aria-labelledby="pills-our-tab">
                                <p>
                                    3 A complete formulation offering 100% RDA of all the Vitamins including Plant-Based
                                    Vitamin
                                    D3, as well as essential minerals
                                    with Calcium derived from Algae. Formulated to meet a Woman’s Multivitamin & Mineral
                                    needs
                                    and support general health &
                                    well-being, promoting an active lifestyle. <br>
                                    Plant-Based Vitamin D3 (Lichen) and a more bio-available source of Calcium
                                    (Algae).<br>
                                    Just the required ingredients, no fillers or inactive ingredients, no binders, no
                                    unnecessary ingredients.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="option-box">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                    aria-selected="true">Reviews (04) </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-profile" type="button" role="tab"
                                    aria-controls="pills-profile" aria-selected="false">Questions (10)</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-contact" type="button" role="tab"
                                    aria-controls="pills-contact" aria-selected="false">Stories (04)</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-expert-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-expert" type="button" role="tab" aria-controls="pills-expert"
                                    aria-selected="false">Expert Speak (06)</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                aria-labelledby="pills-home-tab">
                                <h5 class="title-box mt-5">Customer <a class="color">Reviews</a></h5>
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                aria-labelledby="pills-profile-tab">Questions...</div>
                            <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                                aria-labelledby="pills-contact-tab">
                                <div class="more-post mt-50">
                                    <h5 class="title-box">User <a class="color">Stories</a></h5>
                                    <div class="post-block d-flex mt-4">
                                        <div class="left-content col-md-4 pe-4">
                                            <a class="position-relative d-block knowledge-box" href="#">
                                                <img src="assets/img/podcast.png" class="w-100 knowledge-img" />
                                                <div class="product-tag knowledge-tag">Podcast</div>
                                                <div class="middle-icon">
                                                    <img src="assets/img/podcast-icon.svg">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="right-content col-md-8">
                                            <div class="bottom-div">
                                                <h6 class="color-green knowledge-topic mb-0 font-size-16px pt-0">Vegan
                                                    Diet</h6>
                                                <h5 class="font-size-20px color-black fw-600">Fuelling For Training, A
                                                    Race, And A
                                                    Time Trial</h5>
                                                <p class="font-size-16px border-bottom mb-0 pb-3">Fuelling for
                                                    training, a race, and a time trial plays a crucial role in achieving
                                                    ones target
                                                    finish time. However, many amateur runners do not incorporate....
                                                </p>
                                            </div>
                                            <div
                                                class="more-post-bottom-div d-flex justify-content-between align-items-center pt-3">
                                                <div class="icons d-flex">
                                                    <div class="icon">
                                                        <img src="assets/img/eye.svg">
                                                        <p>275</p>
                                                    </div>
                                                    <div class="icon">
                                                        <img src="assets/img/comment.svg">
                                                        <p>275</p>
                                                    </div>
                                                    <div class="icon">
                                                        <img src="assets/img/heart.svg">
                                                        <p>275</p>
                                                    </div>
                                                </div>
                                                <div class="right-date">
                                                    <p class="color-green mb-0 font-size-14px">By John Doe | 14 Jun,
                                                        2021</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="post-block d-flex mt-50">
                                        <div class="left-content col-md-4 pe-4">
                                            <a class="position-relative d-block knowledge-box" href="#">
                                                <img src="assets/img/podcast.png" class="w-100 knowledge-img" />
                                                <div class="product-tag knowledge-tag">Podcast</div>
                                                <div class="middle-icon">
                                                    <img src="assets/img/podcast-icon.svg">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="right-content col-md-8">
                                            <div class="bottom-div">
                                                <h6 class="color-green knowledge-topic mb-0 font-size-16px pt-0">Immune
                                                    Health</h6>

                                                <h5 class="font-size-20px color-black fw-600">Nihal Baig – Road To
                                                    Ironman 70.3
                                                    World Championship</h5>
                                                <p class="font-size-16px border-bottom mb-0 pb-3">Fuelling for
                                                    training, a race, and a time trial plays a crucial role in achieving
                                                    ones target
                                                    finish time. However, many amateur runners do not incorporate....
                                                </p>
                                            </div>
                                            <div
                                                class="more-post-bottom-div d-flex justify-content-between align-items-center pt-3">
                                                <div class="icons d-flex">
                                                    <div class="icon">
                                                        <img src="assets/img/eye.svg">
                                                        <p>275</p>
                                                    </div>
                                                    <div class="icon">
                                                        <img src="assets/img/comment.svg">
                                                        <p>275</p>
                                                    </div>
                                                    <div class="icon">
                                                        <img src="assets/img/heart.svg">
                                                        <p>275</p>
                                                    </div>
                                                </div>
                                                <div class="right-date">
                                                    <p class="color-green mb-0 font-size-14px">By John Doe | 14 Jun,
                                                        2021</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="post-block d-flex mt-50">
                                        <div class="left-content col-md-4 pe-4">
                                            <a class="position-relative d-block knowledge-box" href="#">
                                                <img src="assets/img/podcast.png" class="w-100 knowledge-img" />
                                                <div class="product-tag knowledge-tag">Podcast</div>
                                                <div class="middle-icon">
                                                    <img src="assets/img/podcast-icon.svg">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="right-content col-md-8">
                                            <div class="bottom-div">
                                                <h6 class="color-green knowledge-topic mb-0 font-size-16px pt-0">Fitness
                                                </h6>
                                                <h5 class="font-size-20px color-black fw-600">Fuelling For Training, A
                                                    Race, And A
                                                    Time Trial</h5>
                                                <p class="font-size-16px border-bottom mb-0 pb-3">Fuelling for
                                                    training, a race, and a time trial plays a crucial role in achieving
                                                    ones target
                                                    finish time. However, many amateur runners do not incorporate....
                                                </p>
                                            </div>
                                            <div
                                                class="more-post-bottom-div d-flex justify-content-between align-items-center pt-3">
                                                <div class="icons d-flex">
                                                    <div class="icon">
                                                        <img src="assets/img/eye.svg">
                                                        <p>275</p>
                                                    </div>
                                                    <div class="icon">
                                                        <img src="assets/img/comment.svg">
                                                        <p>275</p>
                                                    </div>
                                                    <div class="icon">
                                                        <img src="assets/img/heart.svg">
                                                        <p>275</p>
                                                    </div>
                                                </div>
                                                <div class="right-date">
                                                    <p class="color-green mb-0 font-size-14px">By John Doe | 14 Jun,
                                                        2021</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="post-block d-flex mt-50">
                                        <div class="left-content col-md-4 pe-4">
                                            <a class="position-relative d-block knowledge-box" href="#">
                                                <img src="assets/img/podcast.png" class="w-100 knowledge-img" />
                                                <div class="product-tag knowledge-tag">Podcast</div>
                                                <div class="middle-icon">
                                                    <img src="assets/img/podcast-icon.svg">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="right-content col-md-8">
                                            <div class="bottom-div">
                                                <h6 class="color-green knowledge-topic mb-0 font-size-16px pt-0">Health
                                                    & Wellness
                                                </h6>
                                                <h5 class="font-size-20px color-black fw-600">Nihal Baig – Road To
                                                    Ironman 70.3
                                                    World Championship</h5>
                                                <p class="font-size-16px border-bottom mb-0 pb-3">Fuelling for
                                                    training, a race, and a time trial plays a crucial role in achieving
                                                    ones target
                                                    finish time. However, many amateur runners do not incorporate</p>
                                            </div>
                                            <div
                                                class="more-post-bottom-div d-flex justify-content-between align-items-center pt-3">
                                                <div class="icons d-flex">
                                                    <div class="icon">
                                                        <img src="assets/img/eye.svg">
                                                        <p>275</p>
                                                    </div>
                                                    <div class="icon">
                                                        <img src="assets/img/comment.svg">
                                                        <p>275</p>
                                                    </div>
                                                    <div class="icon">
                                                        <img src="assets/img/heart.svg">
                                                        <p>275</p>
                                                    </div>
                                                </div>
                                                <div class="right-date">
                                                    <p class="color-green mb-0 font-size-14px">By John Doe | 14 Jun,
                                                        2021</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-expert" role="tabpanel"
                                aria-labelledby="pills-expert-tab">Expert...</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 ps-5" style="border-left: 1px solid lightgrey">
                    <div>
                        <a class="content">₹600.00</a>
                        <p class="p">Earn 10 points by purchasing this product</p>
                        <div>
                            <label class="lable">Flavours</label>
                            <select class="form-select mb-3">
                                <option selected>Vanila Sea Salt</option>
                                <option value="1">Variation One</option>
                                <option value="2">Variation Two</option>
                                <option value="3">Variation Three</option>
                            </select>
                        </div>

                        <div>
                            <label class="lable">Pack of</label>
                            <select class="form-select">
                                <option selected>1 Month Supply</option>
                                <option value="1">Variation One</option>
                                <option value="2">Variation Two</option>
                                <option value="3">Variation Three</option>
                            </select>
                        </div>
                        <br>
                        <div class="dropdown ">
                            <div class="SCBSCRIBE">
                                SCBSCRIBE TO SaVE
                            </div>
                            <div class="downarrow"><i class="fas fa-chevron-down"></i>
                            </div>
                        </div>
                        <br>
                        <div class="dropdown mb-3 ">
                            <div class="SCBSCRIBE">SCBSCRIBE TO SaVE</div>
                            <div>
                                <select class="form-select s2">
                                    <option selected>Monthly</option>
                                    <option value="1">Variation One</option>
                                    <option value="2">Variation Two</option>
                                    <option value="3">Variation Three</option>
                                </select>
                            </div>

                            <div style="font-size: 10px; color:#90B83E">
                                Save 10% on Every Repeat Order
                            </div>
                            <div style=" font-size: 10px;">
                                You can cancel or modify anytime
                            </div>
                            <div class="downarrow"><i class="fas fa-chevron-up"></i>
                            </div>
                        </div>
                        <div class="d-flex mt-10 mr-10 cart-btn">
                            <div>
                                <input type="number" value="1" min="0" max="10" class="mr-15">
                            </div>
                            <div class="w-100">
                                <button class="btn btn-theme mt-md-0 mt-2 w-100">Add to Cart</button>
                            </div>
                        </div>
                        <hr>
                        <div class="box p-3">
                            <div><b>Batch No.:</b> &nbsp;D.f.105.6</div>
                            <div><b>MFG.: </b> &nbsp;21 apr,2021</div>
                            <div><b>Exp.: </b> &nbsp;21 Oct,2022</div>
                        </div>
                        <br>
                        <div>

                            <div>
                                Serving Size:&nbsp;<b>2 Capsules</b>
                            </div>
                            <div>
                                Serving Per container:&nbsp;<b>60 Capsules</b>
                            </div>
                        </div>
                        <hr>

                        <div class="d-flex justify-content-between w-100">
                            <b>CONSULT OUR HELTHCOUACH</b>
                            <i class="fas fa-chevron-right"></i>
                        </div>
                        <hr>
                        <div class="suggest-box">
                            <div class="accordion" id="myAccordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <div class="d-flex"> <button type="button" class="accordion-button collapsed"
                                                data-bs-toggle="collapse" data-bs-target="#collapseOne">SUGGESTED
                                                USE</button>
                                            <!-- <i class="fas fa-chevron-down"></i> -->
                                        </div>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse"
                                        data-bs-parent="#myAccordion">
                                        <div class="card-body">
                                            <p>HTML stands for HyperText Markup Language. HTML is the standard markup
                                                language for describing the structure of web pages. </p>
                                            <p>HTML stands for HyperText Markup Language. HTML is the standard markup
                                                language for describing the structure of web pages. Bootstrap is a
                                                sleek, intuitive, and powerful front-end framework for faster and easier
                                                web development. It is a collection of CSS and HTML conventions. </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- <b>SUGGESTED USE</b><i class="fas fa-chevron-down"></i> -->
                            </div>
                            <hr>
                            <div>
                                <div class="msg  fw-600 color-black mt-30">
                                    <b>RELATED ARTICLES & VIDEOS </b>

                                </div>

                                <div class="color">
                                    Articles
                                </div>
                                <div>
                                    Uderstanding Premenstrual Syndrome
                                </div>
                                <div>(Pms)</div>
                                <div>
                                    Plant Based Protein Sources - Vegan
                                </div>
                                <div>Pea Protein</div>
                                <br>
                                <div class="color">Video</div>
                                <div>
                                    Fuelling For Training, a Race, and
                                </div>
                                <div>a Time Trial </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <section class="pt-3 slider-box">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="border-above-title" style="margin-top: 40px;">
                                    <span class=""></span>
                                </div>
                                <div>
                                    <h5 class="title-box">Related <a class="color">Products</a></h5>
                                </div>
                            </div>
                            <div class="mt-4">
                                <a class="btn btn-left shadow" href="#carouselExampleIndicators2" role="button"
                                    data-slide="prev">
                                    <i class="fa fa-arrow-left"></i>
                                </a>
                                <a class="btn btn-right shadow" href="#carouselExampleIndicators2" role="button"
                                    data-slide="next">
                                    <i class="fa fa-arrow-right"></i>
                                </a>
                            </div>
                            <div class="col-12">
                                <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">

                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <div class="row">

                                                <div class="col-md-3 mb-3">


                                                    <div class="card card1 mb-2">
                                                        <div class="image">
                                                            <div class="bag-pill-price">$600.00</div>
                                                            <img src="./assets/img/shop/P1.png" class="img-opa w-100"
                                                                mb-5>
                                                            <div class="bag-pill">
                                                                New
                                                            </div>
                                                            <div class="image__overlay image__overlay--blur">
                                                                <span class="image__description p-3 pt-5">
                                                                    Unived Basics Multivitamin & Minerals for Women has
                                                                    been formulated to offer you a complete RDA of all
                                                                    the essential vitamins & minerals. Key benefit...
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="d-flex justify-content-between">
                                                        <h6><small>Vitamins & Minerals</small></h6>

                                                        <a class="nav-link link-theme py-0" href="cart.php"> <img
                                                                src="assets\Group 21693.svg" alt=""></i>
                                                        </a>
                                                    </div>
                                                    <h5><b>Basics Multivitamin-Women</b></h5>
                                                    <p><small>Basics, Vitamins & Minerals, Women</small></p>
                                                    <span class="fa fa-star cheacked"></span>
                                                    <span class="fa fa-star cheacked"></span>
                                                    <span class="fa fa-star cheacked"></span>
                                                    <span class="fa fa-star"></span>
                                                </div>
                                                <div class="col-md-3 mb-3">
                                                    <div class="card card1 mb-2">
                                                        <div class="image">
                                                            <div class="bag-pill-price">$600.00</div>
                                                            <img src="./assets/img/shop/P1.png" class="img-opa w-100"
                                                                mb-5>
                                                            <!-- <div class="bag-pill">
                                                                New
                                                            </div> -->
                                                            <div class="image__overlay image__overlay--blur">
                                                                <span class="image__description p-3 pt-5">
                                                                    Unived Basics Multivitamin & Minerals for Women has
                                                                    been formulated to offer you a complete RDA of all
                                                                    the essential vitamins & minerals. Key benefit...
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="d-flex justify-content-between">
                                                        <h6><small>Vitamins & Minerals</small></h6>

                                                        <a class="nav-link link-theme py-0" href="cart.php"> <img
                                                                src="assets\Group 21693.svg" alt=""></i>
                                                        </a>
                                                    </div>
                                                    <h5><b>Basics Multivitamin-Women</b></h5>
                                                    <p><small>Basics, Vitamins & Minerals, Women</small></p>
                                                    <span class="fa fa-star cheacked"></span>
                                                    <span class="fa fa-star cheacked"></span>
                                                    <span class="fa fa-star cheacked"></span>
                                                    <span class="fa fa-star"></span>
                                                </div>
                                                <div class="col-md-3 mb-3">
                                                    <div class="card card1 mb-2">
                                                        <div class="image">
                                                            <div class="bag-pill-price">$600.00</div>
                                                            <img src="./assets/img/shop/P1.png" class="img-opa w-100"
                                                                mb-5>
                                                            <!-- <div class="bag-pill">
                                                                New
                                                            </div> -->
                                                            <div class="image__overlay image__overlay--blur">
                                                                <span class="image__description p-3 pt-5">
                                                                    Unived Basics Multivitamin & Minerals for Women has
                                                                    been formulated to offer you a complete RDA of all
                                                                    the essential vitamins & minerals. Key benefit...
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="d-flex justify-content-between">
                                                        <h6><small>Vitamins & Minerals</small></h6>

                                                        <a class="nav-link link-theme py-0" href="cart.php"> <img
                                                                src="assets\Group 21693.svg" alt=""></i>
                                                        </a>
                                                    </div>
                                                    <h5><b>Basics Multivitamin-Women</b></h5>
                                                    <p><small>Basics, Vitamins & Minerals, Women</small></p>
                                                    <span class="fa fa-star cheacked"></span>
                                                    <span class="fa fa-star cheacked"></span>
                                                    <span class="fa fa-star cheacked"></span>
                                                    <span class="fa fa-star"></span>
                                                </div>
                                                <div class="col-md-3 mb-3">
                                                    <div class="card card1 mb-2">
                                                        <div class="image">
                                                            <div class="bag-pill-price">$600.00</div>
                                                            <img src="./assets/img/shop/P1.png" class="img-opa w-100"
                                                                mb-5>
                                                            <!-- <div class="bag-pill">
                                                                New
                                                            </div> -->
                                                            <div class="image__overlay image__overlay--blur">
                                                                <span class="image__description p-3 pt-5">
                                                                    Unived Basics Multivitamin & Minerals for Women has
                                                                    been formulated to offer you a complete RDA of all
                                                                    the essential vitamins & minerals. Key benefit...
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="d-flex justify-content-between">
                                                        <h6><small>Vitamins & Minerals</small></h6>

                                                        <a class="nav-link link-theme py-0" href="cart.php"> <img
                                                                src="assets\Group 21693.svg" alt=""></i>
                                                        </a>
                                                    </div>
                                                    <h5><b>Basics Multivitamin-Women</b></h5>
                                                    <p><small>Basics, Vitamins & Minerals, Women</small></p>
                                                    <span class="fa fa-star cheacked"></span>
                                                    <span class="fa fa-star cheacked"></span>
                                                    <span class="fa fa-star cheacked"></span>
                                                    <span class="fa fa-star"></span>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="row">

                                                <div class="col-md-3 mb-3">
                                                    <div class="card card1 mb-2">
                                                        <div class="image">
                                                            <div class="bag-pill-price">$600.00</div>
                                                            <img src="./assets/img/shop/P1.png" class="img-opa w-100"
                                                                mb-5>
                                                            <div class="bag-pill">
                                                                New
                                                            </div>
                                                            <div class="image__overlay image__overlay--blur">
                                                                <span class="image__description p-3 pt-5">
                                                                    Unived Basics Multivitamin & Minerals for Women has
                                                                    been formulated to offer you a complete RDA of all
                                                                    the essential vitamins & minerals. Key benefit...
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="d-flex justify-content-between">
                                                        <h6><small>Vitamins & Minerals</small></h6>

                                                        <a class="nav-link link-theme py-0" href="cart.php"> <img
                                                                src="assets\Group 21693.svg" alt=""></i>
                                                        </a>
                                                    </div>
                                                    <h5><b>Basics Multivitamin-Women</b></h5>
                                                    <p><small>Basics, Vitamins & Minerals, Women</small></p>
                                                    <span class="fa fa-star cheacked"></span>
                                                    <span class="fa fa-star cheacked"></span>
                                                    <span class="fa fa-star cheacked"></span>
                                                    <span class="fa fa-star"></span>
                                                </div>
                                                <div class="col-md-3 mb-3">
                                                    <div class="card card1 mb-2">
                                                        <div class="image">
                                                            <div class="bag-pill-price">$600.00</div>
                                                            <img src="./assets/img/shop/P1.png" class="img-opa w-100"
                                                                mb-5>
                                                            <div class="bag-pill">
                                                                New
                                                            </div>
                                                            <div class="image__overlay image__overlay--blur">
                                                                <span class="image__description p-3 pt-5">
                                                                    Unived Basics Multivitamin & Minerals for Women has
                                                                    been formulated to offer you a complete RDA of all
                                                                    the essential vitamins & minerals. Key benefit...
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="d-flex justify-content-between">
                                                        <h6><small>Vitamins & Minerals</small></h6>

                                                        <a class="nav-link link-theme py-0" href="cart.php"> <img
                                                                src="assets\Group 21693.svg" alt=""></i>
                                                        </a>
                                                    </div>
                                                    <h5><b>Basics Multivitamin-Women</b></h5>
                                                    <p><small>Basics, Vitamins & Minerals, Women</small></p>
                                                    <span class="fa fa-star cheacked"></span>
                                                    <span class="fa fa-star cheacked"></span>
                                                    <span class="fa fa-star cheacked"></span>
                                                    <span class="fa fa-star"></span>
                                                </div>
                                                <div class="col-md-3 mb-3">
                                                    <div class="card card1 mb-2">
                                                        <div class="image">
                                                            <div class="bag-pill-price">$600.00</div>
                                                            <img src="./assets/img/shop/P1.png" class="img-opa w-100"
                                                                mb-5>
                                                            <div class="bag-pill">
                                                                New
                                                            </div>
                                                            <div class="image__overlay image__overlay--blur">
                                                                <span class="image__description p-3 pt-5">
                                                                    Unived Basics Multivitamin & Minerals for Women has
                                                                    been formulated to offer you a complete RDA of all
                                                                    the essential vitamins & minerals. Key benefit...
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex justify-content-between">
                                                        <h6><small>Vitamins & Minerals</small></h6>

                                                        <a class="nav-link link-theme py-0" href="cart.php"> <img
                                                                src="assets\Group 21693.svg" alt=""></i>
                                                        </a>
                                                    </div>
                                                    <h5><b>Basics Multivitamin-Women</b></h5>
                                                    <p><small>Basics, Vitamins & Minerals, Women</small></p>
                                                    <span class="fa fa-star cheacked"></span>
                                                    <span class="fa fa-star cheacked"></span>
                                                    <span class="fa fa-star cheacked"></span>
                                                    <span class="fa fa-star"></span>
                                                </div>
                                                <div class="col-md-3 mb-3">
                                                    <div class="card card1 mb-2">
                                                        <div class="image">
                                                            <div class="bag-pill-price">$600.00</div>
                                                            <img src="./assets/img/shop/P1.png" class="img-opa w-100"
                                                                mb-5>
                                                            <div class="bag-pill">
                                                                New
                                                            </div>
                                                            <div class="image__overlay image__overlay--blur">
                                                                <span class="image__description p-3 pt-5">
                                                                    Unived Basics Multivitamin & Minerals for Women has
                                                                    been formulated to offer you a complete RDA of all
                                                                    the essential vitamins & minerals. Key benefit...
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex justify-content-between">
                                                        <h6><small>Vitamins & Minerals</small></h6>

                                                        <a class="nav-link link-theme py-0" href="cart.php"> <img
                                                                src="assets\Group 21693.svg" alt=""></i>
                                                        </a>
                                                    </div>
                                                    <h5><b>Basics Multivitamin-Women</b></h5>
                                                    <p><small>Basics, Vitamins & Minerals, Women</small></p>
                                                    <span class="fa fa-star cheacked"></span>
                                                    <span class="fa fa-star cheacked"></span>
                                                    <span class="fa fa-star cheacked"></span>
                                                    <span class="fa fa-star"></span>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
    </section>
    <section class="section-subscribe">
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

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <!-- <script>
                    $('#recipeCarousel').carousel({
                        interval: 10000
                    })

                    $('.carousel .carousel-item').each(function() {
                        var minPerSlide = 6;
                        var next = $(this).next();
                        if (!next.length) {
                            next = $(this).siblings(':first');
                        }
                        next.children(':first-child').clone().appendTo($(this));

                        for (var i = 0; i < minPerSlide; i++) {
                            next = next.next();
                            if (!next.length) {
                                next = $(this).siblings(':first');
                            }

                            next.children(':first-child').clone().appendTo($(this));
                        }
                    });
                </script> -->
</body>

</html>