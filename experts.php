<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    .checked {
        color: #67A746;
    }

    .bg-text {
        position: absolute;
        display: none;
    }

    .image__overlay {
        position: absolute;
        top: -100px;
        left: 0;
        width: 100%;
        height: 150%;
        background: rgba(0, 0, 0, 0.23);
        font-family: 'Quicksand', sans-serif;
        color: #ffffff;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: opacity 0.25s;
        border-radius: 10px;
    }

    .image__overlay--blur {
        backdrop-filter: blur(13px);
    }

    .image__overlay>* {
        /* transform: translateY(20px); */
        transition: transform 0.25s;
    }

    .image__overlay:hover {
        opacity: 1;
    }

    .image__overlay:hover>* {
        transform: translateY(0);
    }

    .image__title {
        font-size: 2em;
        font-weight: bold;
    }

    .image__description {
        font-size: 16px;
        margin:13px;
        text-align:center;
    }

    .profile-btn {
        background-color:#67A746 !important;
        border:none !important;
    }
    #card-rowlist{
        margin-bottom:10px
      }
    
    .form-control{
        min-height: 42px;
        margin-left: 120px;
    }

    .h3{
        font-size:18px;
         }

    .hr{
        width: 26%;
        margin-right: 30px;
        margin-left: 26px;
        margin-top: 9px
       }

    .card{
        width:auto;
        height:200px;
        border-bottom-right-radius:14px;
        border-bottom-left-radius: 14px;
        background-color: #f6f6f6a8;
         }

    .blank{
        height:100px;
        width:auto;
        background-color:#80808054;
        border-top-left-radius:10px;
        border-top-right-radius:10px;
    }     

         
    </style>
    <?php include("include/require_css.php"); ?>
</head>

<body>
    <?php include("include/header.php"); ?>
    <div>
    <section class="Community-image" hight="400px">
        <div class="container">
            <div class="knowledge-text">
                <h1>Explore Experts</h1>
                <p> Home <span>&nbsp;&nbsp;&nbsp; / &nbsp;&nbsp;&nbsp; </span> <span class="color-lightgreen"> Explore Experts </span> </p>
                <p style="width:50%">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                    laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
            <div class="row mt-30">
                <div class="col-md-3 col-sm-3">

                    <!-- 1 -->
                    <div class="left-section">

                        <div class="heading">
                            <h3 class=" tt-up fw-600 color-black mb-2">Explore Experts</h3>
                             <hr>
                        </div>
                        <div class="category-checks">

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label font-size-14px" for="flexCheckDefault"
                                    style="margin-left: 12px">
                                    Doctors
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                <label class="form-check-label font-size-14px" for="flexCheckChecked"
                                    style="margin-left: 12px">
                                    Dietitians &amp; Nutritionists
                                </label>
                            </div>


                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked1">
                                <label class="form-check-label font-size-14px" for="flexCheckChecked1"
                                    style="margin-left: 12px">
                                    Certified Coaches
                                </label>
                            </div>
                        </div>

                    </div>
                    <div class="heading">
                        <h3 class="font-size-16px tt-up fw-600 color-black mt-30">HEALTH NEEDS</h3>
                        <hr style="width: 39%; margin-right: 30px; margin-left: 26px; margin-top: 9px; margin-bottom:-8px">
                    </div>
                    <div class="category-checks">


                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked2">
                            <label class="form-check-label font-size-14px ml-5" for="flexCheckChecked2"
                                style="margin-left: 12px">
                                Mental Health
                            </label>
                        </div>


                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked3">
                            <label class="form-check-label font-size-14px" for="flexCheckChecked3"
                                style="margin-left: 12px">
                                Fitness
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked4">
                            <label class="form-check-label font-size-14px" for="flexCheckChecked4"
                                style="margin-left: 12px">
                                Vegan Diet
                            </label>
                        </div>


                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked5">
                            <label class="form-check-label font-size-14px" for="flexCheckChecked5"
                                style="margin-left: 12px">
                                PCOS
                            </label>
                        </div>


                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked6">
                            <label class="form-check-label font-size-14px" for="flexCheckChecked6"
                                style="margin-left: 12px">
                                Wellness
                            </label>
                        </div>


                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked4">
                            <label class="form-check-label font-size-14px" for="flexCheckChecked4"
                                style="margin-left: 12px">
                                Sleep
                            </label>
                        </div>


                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked5">
                            <label class="form-check-label font-size-14px" for="flexCheckChecked5"
                                style="margin-left: 12px">
                                Immune Health
                            </label>
                        </div>


                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked6">
                            <label class="form-check-label font-size-14px" for="flexCheckChecked6"
                                style="margin-left: 12px">
                                Skin Health
                            </label>
                        </div>

                        <div class="heading">
                            <h4 class="font-size-16px tt-up fw-600 color-black mt-30"> LANGUAGE </h4>
                            <hr style="width: 120%; margin-right: 65px; margin-left: 26px; margin-top: 9px; margin-bottom: -18px">
                        </div>
                        <div class="category-checks">


                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label font-size-14px" for="flexCheckDefault"
                                    style="margin-left: 12px">
                                    English
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                <label class="form-check-label font-size-14px" for="flexCheckChecked"
                                    style="margin-left: 12px">
                                    हिन्दी
                                </label>
                            </div>


                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked1">
                                <label class="form-check-label font-size-14px" for="flexCheckChecked1"
                                    style="margin-left: 12px">
                                    ગુજરાતી
                                </label>
                            </div>


                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked1">
                                <label class="form-check-label font-size-14px" for="flexCheckChecked1"
                                    style="margin-left: 12px">
                                    मराठी
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked1">
                                <label class="form-check-label font-size-14px" for="flexCheckChecked1"
                                    style="margin-left: 12px">
                                    ਉਰਦੂ
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked1">
                                <label class="form-check-label font-size-14px" for="flexCheckChecked1"
                                    style="margin-left: 12px">
                                    பஞ்சாபி
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked1">
                                <label class="form-check-label font-size-14px" for="flexCheckChecked1"
                                    style="margin-left: 12px">
                                    తెలుగు
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked1">
                                <label class="form-check-label font-size-14px" for="flexCheckChecked1"
                                    style="margin-left: 12px">
                                    اردو
                                </label>
                            </div>



                            <div class="fa-fa-angle-down" style="font-size:14px; color:green; margin-top: 5px;">See
                                More</i>

                                <i class="fa fa-angle-down" style="font-size:14px;color:green;"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-sm-12 row" style="border-left: 1px solid lightgray;">
                    <div class="row" id="card-rowlist">
                        <div class="col-lg-4 col-sm-6 mb-2">
                            <div class="">
                                <div class="blank">
                                    
                                </div>
                                <div class="card" style="align-items: center;">
                                    
                                    <img src="assets\img\experts\Ellipse 500.png"
                                        style="height:132px;width:132px;margin:0 78px;margin-top:-70px"
                                        class="card-img-top" alt="...">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">Ria Patel</h5>
                                        <p class="card-text">Anesthesiologists</p>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                    </div>
                                    <div class="image__overlay image__overlay--blur">
                                        <!-- <div class="image__title"></div> -->
                                        <p class="image__description">
                                            Lorem ipsum dolor sit amet,consetetur sadipscing elitr,sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,sed diam voluptua. Atvero eos et
                                        </p>
                                        <button class="btn btn-success profile-btn"> View Profile</button>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-4 col-sm-6 mb-2">
                            <div class="blank"
                                style="height:100px;width:auto;background-color:#80808054;border-top-left-radius:10px;border-top-right-radius:10px;">
                            </div>
                            <div class="card"
                                style="width:auto;height:200px;border-bottom-right-radius:14px;border-bottom-left-radius: 14px;background-color: #f6f6f6a8; align-items: center;">
                                <img src="assets\img\experts\Boy.png"
                                    style="height:132px;width:132px;margin:0 78px;margin-top:-70px" class="card-img-top"
                                    alt="...">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Pranay Sharma</h5>
                                    <p class="card-text">Dermatologist</p>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <div class="image__overlay image__overlay--blur">
                                        <!-- <div class="image__title"></div> -->
                                        <p class="image__description">
                                            Lorem ipsum dolor sit amet,consetetur sadipscing elitr,sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,sed diam voluptua. Atvero eos et
                                        </p>
                                        <button class="btn btn-success profile-btn"> View Profile</button>
                                    </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6 mb-2">
                            <div class="blank"
                                style="height:100px;width:auto;background-color:#80808054;border-top-left-radius:10px;border-top-right-radius:10px;">
                            </div>
                            <div class="card"
                                style="width:auto;height:200px;border-bottom-right-radius:14px;border-bottom-left-radius: 14px;background-color: #f6f6f6a8; align-items: center;">
                                <img src="assets\img\experts\anj.png"
                                    style="height:132px;width:132px;margin:0 78px;margin-top:-70px" class="card-img-top"
                                    alt="...">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Anjali Priya</h5>
                                    <p class="card-text">Skin therapist</p>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                                <div class="image__overlay image__overlay--blur">
                                        <!-- <div class="image__title"></div> -->
                                        <p class="image__description">
                                            Lorem ipsum dolor sit amet,consetetur sadipscing elitr,sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,sed diam voluptua. Atvero eos et
                                        </p>
                                        <button class="btn btn-success profile-btn"> View Profile</button>
                                    </div>
                            </div>
                        </div>

                    <!-- </div>

                    <div class="row" id="card-rowlist"> -->
                        <div class="col-lg-4 col-sm-6 mb-2">
                            <div class="bg">
                                <div class="bg-text">
                                    <p>Hello</p>
                                </div>
                                <div class="blank"
                                    style="height:100px;width:auto;background-color:#80808054;border-top-left-radius:10px;border-top-right-radius:10px;">
                                </div>
                                <div class="card"
                                    style="width:auto;height:200px;border-bottom-right-radius:14px;border-bottom-left-radius: 14px;background-color: #f6f6f6a8; align-items: center;">
                                    <img src="assets\img\experts\Prachi.png"
                                        style="height:132px;width:132px;margin:0 78px;margin-top:-70px"
                                        class="card-img-top" alt="...">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">Prachi Agrawal</h5>
                                        <p class="card-text">Beauty Therapist</p>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                    <div class="image__overlay image__overlay--blur">
                                        <!-- <div class="image__title"></div> -->
                                        <p class="image__description">
                                            Lorem ipsum dolor sit amet,consetetur sadipscing elitr,sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,sed diam voluptua. Atvero eos et
                                        </p>
                                        <button class="btn btn-success profile-btn"> View Profile</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6 mb-2">
                            <div class="blank"
                                style="height:100px;width:auto;background-color:#80808054;border-top-left-radius:10px;border-top-right-radius:10px;">
                            </div>
                            <div class="card"
                                style="width:auto;height:200px;border-bottom-right-radius:14px;border-bottom-left-radius: 14px;background-color: #f6f6f6a8; align-items: center;">
                                <img src="assets\img\experts\Ellipse 500.png"
                                    style="height:132px;width:132px;margin:0 78px;margin-top:-70px" class="card-img-top"
                                    alt="...">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Ria Patel</h5>
                                    <p class="card-text">Anesthesiologists</p>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <div class="image__overlay image__overlay--blur">
                                        <!-- <div class="image__title"></div> -->
                                        <p class="image__description">
                                            Lorem ipsum dolor sit amet,consetetur sadipscing elitr,sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,sed diam voluptua. Atvero eos et
                                        </p>
                                        <button class="btn btn-success profile-btn"> View Profile</button>
                                    </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6 mb-2">
                            <div class="blank"
                                style="height:100px;width:auto;background-color:#80808054;border-top-left-radius:10px;border-top-right-radius:10px;">
                            </div>
                            <div class="card"
                                style="width:auto;height:200px;border-bottom-right-radius:14px;border-bottom-left-radius: 14px;background-color: #f6f6f6a8; align-items: center;">
                                <img src="assets\img\experts\Boy.png"
                                    style="height:132px;width:132px;margin:0 78px;margin-top:-70px" class="card-img-top"
                                    alt="...">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Pranay Sharma</h5>
                                    <p class="card-text">Dermatologist</p>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <div class="image__overlay image__overlay--blur">
                                        <!-- <div class="image__title"></div> -->
                                        <p class="image__description">
                                            Lorem ipsum dolor sit amet,consetetur sadipscing elitr,sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,sed diam voluptua. Atvero eos et
                                        </p>
                                        <button class="btn btn-success profile-btn"> View Profile</button>
                                    </div>
                            </div>
                        </div>

                    <!-- </div>


                    <div class="row" id="card-rowlist"> -->
                        <div class="col-lg-4 col-sm-6 mb-2">
                            <div class="bg">
                                <div class="bg-text">
                                    <p>Hello</p>
                                </div>
                                <div class="blank"
                                    style="height:100px;width:auto;background-color:#80808054;border-top-left-radius:10px;border-top-right-radius:10px;">
                                </div>
                                <div class="card"
                                    style="width:auto;height:200px;border-bottom-right-radius:14px;border-bottom-left-radius: 14px;background-color: #f6f6f6a8; align-items: center;">
                                    <img src="assets\img\experts\anj.png"
                                        style="height:132px;width:132px;margin:0 78px;margin-top:-70px"
                                        class="card-img-top" alt="...">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">Anjali Priya</h5>
                                        <p class="card-text">Skin Therapist</p>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                    <div class="image__overlay image__overlay--blur">
                                        <!-- <div class="image__title"></div> -->
                                        <p class="image__description">
                                            Lorem ipsum dolor sit amet,consetetur sadipscing elitr,sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,sed diam voluptua. Atvero eos et
                                        </p>
                                        <button class="btn btn-success profile-btn"> View Profile</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6 mb-2">
                            <div class="blank"
                                style="height:100px;width:auto;background-color:#80808054;border-top-left-radius:10px;border-top-right-radius:10px;">
                            </div>
                            <div class="card"
                                style="width:auto;height:200px;border-bottom-right-radius:14px;border-bottom-left-radius: 14px;background-color: #f6f6f6a8; align-items: center;">
                                <img src="assets\img\experts\Prachi.png"
                                    style="height:132px;width:132px;margin:0 78px;margin-top:-70px" class="card-img-top"
                                    alt="...">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Prachi Agrawal</h5>
                                    <p class="card-text">Beauty Therapist</p>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                                <div class="image__overlay image__overlay--blur">
                                        <!-- <div class="image__title"></div> -->
                                        <p class="image__description">
                                            Lorem ipsum dolor sit amet,consetetur sadipscing elitr,sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,sed diam voluptua. Atvero eos et
                                        </p>
                                        <button class="btn btn-success profile-btn"> View Profile</button>
                                    </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6 mb-2">
                            <div class="blank"
                                style="height:100px;width:auto;background-color:#80808054;border-top-left-radius:10px;border-top-right-radius:10px;">
                            </div>
                            <div class="card"
                                style="width:auto;height:200px;border-bottom-right-radius:14px;border-bottom-left-radius: 14px;background-color: #f6f6f6a8; align-items: center;">
                                <img src="assets\img\experts\Ellipse 500.png"
                                    style="height:132px;width:132px;margin:0 78px;margin-top:-70px" class="card-img-top"
                                    alt="...">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Ria Patel</h5>
                                    <p class="card-text">Anesthesiologists</p>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                                <div class="image__overlay image__overlay--blur">
                                        <!-- <div class="image__title"></div> -->
                                        <p class="image__description">
                                            Lorem ipsum dolor sit amet,consetetur sadipscing elitr,sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,sed diam voluptua. Atvero eos et
                                        </p>
                                        <button class="btn btn-success profile-btn"> View Profile</button>
                                    </div>
                            </div>
                        </div>


                    <!-- </div>



                    <div class="row" id="card-rowlist"> -->
                        <div class="col-lg-4 col-sm-6 mb-2">
                            <div class="">
                                <div class="blank"
                                    style="height:100px;width:auto;background-color:#80808054;border-top-left-radius:10px;border-top-right-radius:10px;">
                                </div>
                                <div class="card "
                                    style="width:auto;height:200px;border-bottom-right-radius:14px;border-bottom-left-radius: 14px; background-color: #f6f6f6a8;">
                                    <img src="assets\img\experts\Ellipse 500.png"
                                        style="height:132px;width:132px;margin:0 78px;margin-top:-70px"
                                        class="card-img-top" alt="...">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">Ria Patel</h5>
                                        <p class="card-text">Anesthesiologists</p>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                    </div>
                                    <div class="image__overlay image__overlay--blur">
                                        <!-- <div class="image__title"></div> -->
                                        <p class="image__description">
                                            Lorem ipsum dolor sit amet,consetetur sadipscing elitr,sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,sed diam voluptua. Atvero eos et
                                        </p>
                                        <button class="btn btn-success profile-btn"> View Profile</button>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-4 col-sm-6 mb-2">
                            <div class="blank"
                                style="height:100px;width:auto;background-color:#80808054;border-top-left-radius:10px;border-top-right-radius:10px;">
                            </div>
                            <div class="card"
                                style="width:auto;height:200px;border-bottom-right-radius:14px;border-bottom-left-radius: 14px;background-color: #f6f6f6a8; align-items: center;">
                                <img src="assets\img\experts\Boy.png"
                                    style="height:132px;width:132px;margin:0 78px;margin-top:-70px" class="card-img-top"
                                    alt="...">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Pranay Sharma</h5>
                                    <p class="card-text">Dermatologist</p>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <div class="image__overlay image__overlay--blur">
                                        <!-- <div class="image__title"></div> -->
                                        <p class="image__description">
                                            Lorem ipsum dolor sit amet,consetetur sadipscing elitr,sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,sed diam voluptua. Atvero eos et
                                        </p>
                                        <button class="btn btn-success profile-btn"> View Profile</button>
                                    </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6 mb-2">
                            <div class="blank"
                                style="height:100px;width:auto;background-color:#80808054;border-top-left-radius:10px;border-top-right-radius:10px;">
                            </div>
                            <div class="card"
                                style="width:auto;height:200px;border-bottom-right-radius:14px;border-bottom-left-radius: 14px;background-color: #f6f6f6a8; align-items: center;">
                                <img src="assets\img\experts\anj.png"
                                    style="height:132px;width:132px;margin:0 78px;margin-top:-70px" class="card-img-top"
                                    alt="...">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Anjali Priya</h5>
                                    <p class="card-text">Skin therapist</p>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                                <div class="image__overlay image__overlay--blur">
                                        <!-- <div class="image__title"></div> -->
                                        <p class="image__description">
                                            Lorem ipsum dolor sit amet,consetetur sadipscing elitr,sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,sed diam voluptua. Atvero eos et
                                        </p>
                                        <button class="btn btn-success profile-btn"> View Profile</button>
                                    </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="col-lg-12 d-flex" id="footer-knowl">
            <div class="col-lg-3">
                <h1>Knowledge to your inbox</h1>
                <p>Stay updated about new products and discount offers, news, podcasts & more, delivered to your inbox each month.</p>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Email address*">
                    <button class="btn btn-success">Subscribe</button>
                </div>
            </div>
            <div class="col-lg-2"></div>
        </div> -->
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
    </section>

  
</div>
</body>
</html>
            
            
            
            
    
    





