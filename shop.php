<!DOCTYPE html>
<html lang="en">

<head>
   <title></title>
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link href="//db.onlinewebfonts.com/c/3dd6e9888191722420f62dd54664bc94?family=Myriad+Pro" rel="stylesheet" type="text/css" />
   <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
   <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

   <?php include("include/require_css.php"); ?>
   <style>
      .card1 {
         /* background:transparent url('./assets/img/shop/P1.png') 0% 0% no-repeat padding-box; */
         opacity: 1;
         border: none;
         background-color: #acabab;
      }

      .card1>.blur-img>img {
         background-color: #f7f7f7;
      }

      .cheacked {
         color: #90EE90;
      }

      h6 {
         color: #67A746;
      }

      .page-number {
         border: 0px !important;
         color: black;

      }

      .page-number1 {
         border: 1px solid black;
         color: black;
         width: auto;
         height: auto;
      }

      .page-number2 {
         color: #fff !important;
         background-color: #67A746;
         border-radius: 8px;
         border-top-left-radius: 8px !important;
         border-bottom-left-radius: 8px !important
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
         /* z-index: 9; */
         top: 0;
      }

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
         /* transform: translateY(20px); */
         transition: transform 0.25s;
      }

      .image__overlay:hover {
         opacity: 1;
      }

      .image__title {
         font-size: 2em;
         font-weight: bold;
      }

      .image__description {
         top: 751px;
         left: 658px;
         /* width: 256px;
         height: 81px; */
         font-size: 0.2em;
         padding: 1px;
         text-align: left;
         font: normal normal normal 14px/22px Myriad Pro;
         letter-spacing: 0.42px;
         color: #FFFFFF;
         margin-top: -8.23em;
         font-weight: 200;
      }

      .card-elements {
         height: 175px;
         width: 200px;
         margin-right: 19px;
      }

      .carousel-item {
         height: 250px !important;
         min-height: 20px !important;
      }

      /* .box-card {
         height: 165px;
         width: 185px;
         background-color: #F7F7F7;
         margin-left: -100px;
      } */

      .card-img-top {
         height: 154px;
      }

      /* .card-title {
         margin-top: -40px;
         text-align: center;
         color: black;
         font-weight: bold;

      } */
      /* @media only screen and (min-width: 960px) {
         .form-select {
            width: 16%;
            height: 38px;
         
            margin-top: -46px;
            color: #666666;
            font-family: 'Myriad Pro regular'
         }
      } */


      @media (max-width: 768px) {
         .carousel-inner .carousel-item>div {
            display: none;
         }

         .carousel-inner .carousel-item>div:first-child {
            display: block;
         }

         .pagination {
            display: flex;
            padding-left: 0px;
            list-style: none;
         }

         .page-link {

            margin-right: -51px;

         }

         .page-number {
            border: 0px !important;
            color: black;

         }

         .page-number1 {
            border: 1px solid black;
            color: black;
            width: auto;
            height: auto;
         }

         .page-number2 {
            color: #fff;
            background-color: #67A746;
            border-radius: 8px;
            border-top-left-radius: 8px !important;
            border-bottom-left-radius: 8px !important
         }

      }

      .carousel-inner .carousel-item.active,
      .carousel-inner .carousel-item-next,
      .carousel-inner .carousel-item-prev {

         display: flex;
      }


      /* display 3 */
      @media (min-width: 768px) {

         .carousel-inner .carousel-item-right.active,
         .carousel-inner .carousel-item-next {
            transform: translateX(33.333%);
         }

         .carousel-inner .carousel-item-left.active,
         .carousel-inner .carousel-item-prev {
            transform: translateX(-33.333%);
         }

         /* .form-select {
            width: 16%;
            height: 38px;
            margin-left: 1102px;
            margin-top: -46px;
         } */


      }

      .carousel-inner .carousel-item-right,
      .carousel-inner .carousel-item-left {
         transform: translateX(0);
      }

      .card-body {
         background-color: #F7F7F7;
         height: 200px;
         width: auto;
         cursor: pointer;
      }

      .card-body1 {
         background-color: #67A746;
         height: 200px;
         width: auto;
         cursor: pointer;
      }

      #wellness-image {
         margin-bottom: 1.5rem;
      }

      .card-title {
         /* margin-bottom: 2.7rem !important; */
         color: black;
         font-weight: bold;
      }

      .card-title1 {
         /* margin-bottom: 2.7rem !important; */
         color: white;
         font-weight: bold;
      }

      /* .form-select {
         position: absolute;
         right: 0;
         width: 150px;
      } */

      .angle {

         margin-right: 11px
      }

      #wellness-image {
         max-width: 47%;
         height: auto;
         position: relative;
         left: 27%;
         margin-bottom: 4.7rem !important;
         top: 39px;

      }

      #sport-image {
         max-width: 47%;
         height: auto;
         position: relative;
         left: 27%;
         margin-bottom: 4.7rem !important;
         top: 39px;
      }

      #socks-image {
         max-width: 47%;
         height: auto;
         position: relative;
         left: 27%;
         margin-bottom: 4.7rem !important;
         top: 39px;
      }

      #gear-image {
         max-width: 47%;
         height: auto;
         position: relative;
         left: 27%;
         margin-bottom: 4.7rem !important;
         top: 39px;
      }

      #main-section {
         border: 1px solid #0000001f;
      }

      #product-line {
         border-left: 1px solid #0000001f;
      }

      #inp-grp {
         width: 91%;
         margin-top: 11px;
      }

      #rounded-pill {
         width: 100px;
      }

      #round-size {
         padding-left: 10px !important;
         padding-right: 10px !important;
      }

      .Search {
         position: absolute;
         right: 8px;
         margin-top: 10px;
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

      .img-wo {
         margin-top: 30px;
      }

      .img-wa {
         background-color: #67A746;
      }

      /* CARD-R */
      .card.card1 {margin-bottom: 20px;}
      .card.card1 img{width: 100%; height: auto;}

      @media only screen and (min-width: 1250px) {
         .img-wo {
            margin-top: 0px;
         }
      }
   </style>


</head>

<body>

   <?php include("include/header.php"); ?>
   <section class="shop-image">
      <div class="container"></div>
   </section>

   <!-- <?php include("include/shop-navbar.php"); ?> -->

   <section class="section-padding" id="main-section">
      <div class="container">
         <div class="header-left" style="width: fit-content;padding-top: 10px;">
            <a class="active" href="#home" style="color:#666666">Home &nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;</a>
            <a href="#Shop" style="color:#67A746">Shop</a>
         </div>
         <div class="border-above-title" style="margin-top: 70px;"><span class=""></span></div>
         <div class="title-div title-div-with-btn">
            <div>
               <h1 class="title" style="margin-bottom: 15px;">Our
                  <span class="color-theme">Shop</span>
               </h1>
            </div>
            <a class="btn btn-dark-outline btn-login-header" href="http://localhost:1234/unived/unived/QuickOrder.php" data-bs-toggle="modal" data-bs-target="#loginmodal"><img class="img-fluid" src="assets\img\Group 21144.svg" style="position: relative; margin-right: 11px; margin-left: -16px">Quick Order</a>
         </div>

         <div class="row">
            <div class="col-md-12  pl-0 pr-0">
               <!-- carousel section -->
               <div class="container text-center mt-3 pr-0 pl-0">
                  <div class="row mx-auto my-auto">
                     <div id="recipeCarousel" class="carousel slide w-100 pl-0 pr-0" data-ride="carousel">
                        <div class="carousel-inner w-100" role="listbox">
                           <div class="carousel-item active">
                              <div class="col-xl-2 col-md-4 col-sm-12">
                                 <div class="card card-body1 pt-0 pb-0" style="border: 0">
                                    <img class="img-fluid" id="wellness-image" style="margin-bottom: 1.5rem !Important;" src="assets\img\shop\Wellness_w.svg">
                                    <h6 class="card-title1" id="wellness-image">
                                       WELLNESS
                                    </h6>
                                 </div>
                              </div>
                           </div>
                           <div class="carousel-item">
                              <div class="col-xl-2 col-md-4 col-sm-12">
                                 <div class="card card-body pt-0 pb-0" style="border: 0;">
                                    <img class="img-fluid img-wo" src="assets\img\Women.svg">
                                    <h6 class="card-title">
                                       WOMEN
                                    </h6>
                                 </div>
                              </div>
                           </div>
                           <div class="carousel-item">
                              <div class="col-xl-2 col-md-4 col-sm-12">
                                 <div class="card card-body pt-0 pb-0" style="border: 0">
                                    <img class="img-fluid img-wo" src="assets\img\Kids.svg">
                                    <h6 class="card-title">
                                       KIDS
                                    </h6>
                                 </div>
                              </div>
                           </div>
                           <div class="carousel-item">
                              <div class="col-xl-2 col-md-4 col-sm-12">
                                 <div class="card card-body pt-0 pb-0" style="border: 0">
                                    <img class="img-fluid" id="sport-image" src="assets\img\shop\Path 38560.svg">
                                    <h6 class="card-title">
                                       SPORTS
                                    </h6>
                                 </div>
                              </div>
                           </div>
                           <div class="carousel-item">
                              <div class="col-xl-2 col-md-4 col-sm-12">
                                 <div class="card card-body pt-0 pb-0" style="border: 0">
                                    <img class="img-fluid" id="socks-image" src="assets\img\shop\socks.svg">
                                    <h6 class="card-title">
                                       SOCKS
                                    </h6>
                                 </div>
                              </div>
                           </div>
                           <div class="carousel-item">
                              <div class="col-xl-2 col-md-4 col-sm-12">
                                 <div class="card card-body pt-0 pb-0" style="border: 0">
                                    <img class="img-fluid" id="gear-image" src="assets\img\shop\gear.svg">
                                    <h6 class="card-title">
                                       GEAR
                                    </h6>
                                 </div>
                              </div>
                           </div>

                        </div>
                        <a class="carousel-control-prev w-auto" href="#recipeCarousel" role="button" data-slide="prev">
                           <span class="carousel-control-prev-icon bg-white border rounded-circle" style="margin-right: 38px; width: 40px; padding:14px 0px 0px 5px;" aria-hidden="true"><i class="fas fa-angle-left text-dark" style="position: relative;top: -11px; left: -4px;"></i></span>
                           <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next w-auto" href="#recipeCarousel" role="button" data-slide="next">
                           <span class="carousel-control-next-icon bg-white border rounded-circle" style="width:2rem;height:1.8rem;position: relative;left:39PX;" aria-hidden="true"><i class="fas fa-angle-right text-dark" style="position:relative;top: 3px;left: 2px;"></i></span>
                           <span class="sr-only">Next</span>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section style="border-bottom:1px solid #dadada;">
      <div class="container">
         <div class="row">
            <div class="col-md-9 col-sm-12 mt-4 mb-4">
               <p style="text-align: left; margin-left: 10px;">
                  Showing 1-15 of 123 results &nbsp;<a style="color:black;">| &nbsp; Women &nbsp; &nbsp;<a style="color:#67A746;" href="" ;>
                        Clear all</a></a></p>
            </div>
            <div class="col-md-3 col-sm-12 mt-4 mb-4">
               <select class="form-select mb-0">
                  <option selected>Default Sorting</option>
                  <option value="#"></option>
               </select>
            </div>
         </div>
      </div>
   </section>
   <section>
      <div class="container">
         <div class="row">
            <div class="col-md-12 col-sm-12 row pr-0 justify-content-between ml-0">
               <div class="col-md-3 col-sm-12 pt-5">
                  <div class="left-section">
                     <div class="heading">
                        <h3 class="font-size-16px tt-up fw-600 color-black mb-2">FILTER BY</h3>
                        <hr style="width: 60%; margin-right: 29px; margin-left: 26px; margin-top: 9px;" />
                     </div>

                     <div class="category-checks">

                        <div class="form-check">
                           <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                           <label class="form-check-label font-size-14px" for="flexCheckDefault" style="margin-left: 12px">
                              All Products
                           </label>
                        </div>

                        <div class="form-check">
                           <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                           <label class="form-check-label font-size-14px" for="flexCheckChecked" style="margin-left: 12px">
                              Bestseller
                           </label>
                        </div>


                        <div class="form-check">
                           <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked1">
                           <label class="form-check-label font-size-14px" for="flexCheckChecked1" style="margin-left: 12px">
                              New Launches
                           </label>
                        </div>
                     </div>

                  </div>


                  <div class="heading">
                     <h3 class="font-size-16px tt-up fw-600 color-black mt-30">HEALTH NEEDS</h3>
                     <hr style="width: 48%;margin-right: 29px;margin-left: 26px;margin-top: 39px;" />
                  </div>
                  <div class="category-checks">


                     <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked2">
                        <label class="form-check-label font-size-14px " for="flexCheckChecked2" style="margin-left: 12px">
                           Mental Health
                        </label>
                     </div>


                     <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked3">
                        <label class="form-check-label font-size-14px" for="flexCheckChecked3" style="margin-left: 12px">
                           Fitness
                        </label>
                     </div>

                     <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked4">
                        <label class="form-check-label font-size-14px" for="flexCheckChecked4" style="margin-left: 12px">
                           Vegan Diet
                        </label>
                     </div>


                     <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked5">
                        <label class="form-check-label font-size-14px" for="flexCheckChecked5" style="margin-left: 12px">
                           PCOS
                        </label>
                     </div>


                     <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked6">
                        <label class="form-check-label font-size-14px" for="flexCheckChecked6" style="margin-left: 12px">
                           Wellness
                        </label>
                     </div>


                     <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked4">
                        <label class="form-check-label font-size-14px" for="flexCheckChecked4" style="margin-left: 12px">
                           Sleep
                        </label>
                     </div>


                     <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked5">
                        <label class="form-check-label font-size-14px" for="flexCheckChecked5" style="margin-left: 12px">
                           Immune Health
                        </label>
                     </div>


                     <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked6">
                        <label class="form-check-label font-size-14px" for="flexCheckChecked6" style="margin-left: 12px">
                           Skin Health
                        </label>
                     </div>

                     <div class="fa-fa-angle-down" style="font-size:14px; color:#67a746; margin-top: 5px; cursor:pointer;">See More</i>

                        <i class="fa fa-angle-down" style="font-size:14px;color:#67a746 ;"></i>
                     </div>


                  </div>


                  <div class="left-search-section">

                     <div class="heading">
                        <h3 class="font-size-16px tt-up fw-600 color-black mt-5">INGREDIENTS</h3>
                        <hr style="width: 60%; margin-right: 29px; margin-left: 26px; margin-top: 55px" />
                     </div>

                     <div class="input-group rounded" id="inp-grp">
                        <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                        <div class="Search">
                           <i class="fa fa-search"></i>
                        </div>

                     </div>
                     <div class="rounded-pill position-relative mt-3" id="round-size">
                        <span class="badge rounded-pill text-white px-3 mb-1" style="background-color:#67a746; font-weight: 100;">Bilberry <i class="fas fa-times text:white p-1"></i></span>
                        <span class="badge rounded-pill text-white px-3 mb-1" style="background-color:#67a746; font-weight: 100;">Pycnogenol <i class="fas fa-times text:white p-1"></i></span>
                     </div>
                  </div>

                  <div class="heading mt-2">
                     <h3 class="font-size-16px tt-up fw-600 color-black mt-30">PRODUCT FORM</h3>
                     <hr style="width: 44%; margin-right: 29px; margin-left: 26px; margin-top: 39px;" />
                  </div>
                  <div class="category-checks">


                     <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked2">
                        <label class="form-check-label font-size-14px" for="flexCheckChecked2" style="margin-left: 12px">
                           Capsule
                        </label>
                     </div>

                     <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked5">
                        <label class="form-check-label font-size-14px" for="flexCheckChecked5" style="margin-left: 12px">
                           Powder
                        </label>
                     </div>
                     <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked5">
                        <label class="form-check-label font-size-14px" for="flexCheckChecked5" style="margin-left: 12px">
                           Liquid
                        </label>
                     </div>
                     <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked5">
                        <label class="form-check-label font-size-14px" for="flexCheckChecked5" style="margin-left: 12px">
                           Tablet
                        </label>
                     </div>

                  </div>

               </div>

               <div class="col-md-9 col-sm-12 row pr-0 pt-5" id="product-line">

                  <div class="col-lg-4 col-md-6 col-sm-12">


                     <div class="card card1 mb-2">
                        <div class="image">
                           <div class="bag-pill-price">$600.00</div>
                           <img src="./assets/img/shop/P1.png" class="img-opa w-100" alt="#">
                           <div class="bag-pill">
                              New
                           </div>
                           <div class="image__overlay image__overlay--blur">
                              <span class="image__description p-3 pt-5">
                                 Unived Basics Multivitamin & Minerals for Women has been formulated to offer you a complete RDA of all the essential vitamins & minerals. Key benefit...
                              </span>
                           </div>
                        </div>
                     </div>

                     <div class="d-flex justify-content-between">
                        <h6><small>Vitamins & Minerals</small></h6>

                        <a class="nav-link link-theme py-0" href="cart.php"> <img src="assets\Group 21693.svg" alt=""></i>
                        </a>
                     </div>
                     <h5><b>Basics Multivitamin-Women</b></h5>
                     <p><small>Basics, Vitamins & Minerals, Women</small></p>
                     <span class="fa fa-star cheacked"></span>
                     <span class="fa fa-star cheacked"></span>
                     <span class="fa fa-star cheacked"></span>
                     <span class="fa fa-star"></span>
                  </div>

                  <div class="col-lg-4 col-md-6 col-sm-12 mt-lg-0 mt-md-0 mt-sm-5">
                     <div class="card card1">
                        <div class="image">
                           <div class="bag-pill-price">$550.00</div>
                           <img src="./assets/img/shop/bcomplex.png" class="img-opa">
                           <div class="image__overlay image__overlay--blur">
                              <p class="image__description p-3 pt-5">
                                 Unived Basics Multivitamin & Minerals for Women has been formulated to offer you a complete RDA of all the essential vitamins & minerals. Key benefit...
                              </p>
                           </div>
                        </div>
                     </div>

                     <div class="d-flex justify-content-between">
                        <h6><small>Vitamins & Minerals</small></h6>

                        <a class="nav-link link-theme py-0" href="cart.php"> <img src="assets\Group 21693.svg" alt=""></i>
                        </a>
                     </div>
                     <!-- <h6><small>Vitamins & Minerals</small></h6> -->
                     <h5><b>Basics B-Complex</b></h5>
                     <p><small>Basics, Cellular Energy, Vitamins & Minerals</small></p>
                     <span class="fa fa-star cheacked"></span>
                     <span class="fa fa-star cheacked"></span>
                     <span class="fa fa-star cheacked"></span>
                     <span class="fa fa-star"></span>
                  </div>

                  <div class="col-lg-4 col-md-6 col-sm-12 mt-lg-0 mt-md-0 mt-sm-5">
                     <div class="card card1">
                        <div class="image">
                           <div class="bag-pill-price">$550.00</div>
                           <img src="./assets/img/shop/basick2.png" class="img-opa">
                           <div class="image__overlay image__overlay--blur">
                              <p class="image__description p-3 pt-5">
                                 Unived Basics Multivitamin & Minerals for Women has been formulated to offer you a complete RDA of all the essential vitamins & minerals. Key benefit...
                              </p>
                           </div>
                        </div>
                     </div>

                     <div class="d-flex justify-content-between">
                        <h6><small>Vitamins & Minerals</small></h6>
                        <a class="nav-link link-theme py-0" href="cart.php"> <img src="assets\Group 21693.svg" alt=""></i>
                        </a>
                     </div>
                     <!-- <h6><small>Vitamins & Minerals</small></h6> -->
                     <h5><b>Basic K2-7</b></h5>
                     <p><small>Basics, Vitamins & Minerals</small></p>
                     <span class="fa fa-star cheacked"></span>
                     <span class="fa fa-star cheacked"></span>
                     <span class="fa fa-star cheacked"></span>
                     <span class="fa fa-star"></span>
                  </div>

                  <div class="col-lg-4 col-md-6 col-sm-12 mt-5">
                     <div class="card card1">
                        <div class="image">
                           <div class="bag-pill-price">$550.00</div>
                           <img src="./assets/img/shop/FOLATE100.png" class="img-opa">
                           <div class="bag-pill">
                              New
                           </div>
                           <div class="image__overlay image__overlay--blur">
                              <p class="image__description p-3 pt-5">
                                 Unived Basics Multivitamin & Minerals for Women has been formulated to offer you a complete RDA of all the essential vitamins & minerals. Key benefit...
                              </p>
                           </div>
                        </div>
                     </div>
                     <div class="d-flex justify-content-between">
                        <h6><small>Vitamins & Minerals</small></h6>

                        <a class="nav-link link-theme py-0" href="cart.php"> <img src="assets\Group 21693.svg" alt=""></i>
                        </a>
                     </div>
                     <!-- <h6><small>Vitamins & Minerals</small></h6> -->
                     <h5><b>Folate</b></h5>
                     <p><small>Basics, Cellular Energy, Vitamins & Minerals</small></p>
                     <span class="fa fa-star cheacked"></span>
                     <span class="fa fa-star cheacked"></span>
                     <span class="fa fa-star cheacked"></span>
                     <span class="fa fa-star"></span>
                  </div>

                  <div class="col-lg-4 col-md-6 col-sm-12 mt-5">
                     <div class="card card1">
                        <div class="image">
                           <div class="bag-pill-price">$975.00</div>
                           <img src="./assets/img/shop/CALM.png" class="img-opa">
                           <div class="image__overlay image__overlay--blur">
                              <p class="image__description p-3 pt-5">
                                 Unived Basics Multivitamin & Minerals for Women has been formulated to offer you a complete RDA of all the essential vitamins & minerals. Key benefit...
                              </p>
                           </div>
                        </div>
                     </div>
                     <div class="d-flex justify-content-between">
                        <h6><small>Cognitive function</small></h6>

                        <a class="nav-link link-theme py-0" href="cart.php"> <img src="assets\Group 21693.svg" alt=""></i>
                        </a>
                     </div>
                     <!-- <h6><small>Cognitive function</small></h6> -->
                     <h5><b>CALM</b></h5>
                     <p><small>Stress Management, Cognitive Function Foc...</small></p>
                     <span class="fa fa-star cheacked"></span>
                     <span class="fa fa-star cheacked"></span>
                     <span class="fa fa-star cheacked"></span>
                     <span class="fa fa-star"></span>
                  </div>

                  <div class="col-lg-4 col-md-6 col-sm-12 mt-5">
                     <div class="card card1">
                        <div class="image">
                           <div class="bag-pill-price">$350.00-$950.00</div>
                           <img src="./assets/img/shop/Caffine1.png" class="img-opa">
                           <div class="bag-pill">
                              New
                           </div>
                           <div class="image__overlay image__overlay--blur">
                              <p class="image__description p-3 pt-5">
                                 Unived Basics Multivitamin & Minerals for Women has been formulated to offer you a complete RDA of all the essential vitamins & minerals. Key benefit...
                              </p>
                           </div>

                        </div>

                     </div>
                     <div class="d-flex justify-content-between">
                        <h6><small>Cognitive function</small></h6>

                        <a class="nav-link link-theme py-0" href="cart.php"> <img src="assets\Group 21693.svg" alt=""></i>
                        </a>
                     </div>
                     <!-- <h6><small>Cognitive function</small></h6> -->
                     <h5><b>Elite Caffeine Strips</b></h5>
                     <p><small>Cognitive Function, Endurance Fuel, Energy...</small></p>
                     <span class="fa fa-star cheacked"></span>
                     <span class="fa fa-star cheacked"></span>
                     <span class="fa fa-star cheacked"></span>
                     <span class="fa fa-star"></span>
                  </div>

                  <div class="col-lg-4 col-md-6 col-sm-12 mt-5">
                     <div class="card card1">
                        <div class="image">
                           <div class="bag-pill-price">$600.00-$1000.00</div>
                           <img src="./assets/img/shop/KSM66.png" class="img-opa">
                           <div class="bag-pill">
                              New
                           </div>
                           <div class="image__overlay image__overlay--blur">
                              <p class="image__description p-3 pt-5">
                                 Unived Basics Multivitamin & Minerals for Women has been formulated to offer you a complete RDA of all the essential vitamins & minerals. Key benefit...
                              </p>
                           </div>
                        </div>
                     </div>

                     <div class="d-flex justify-content-between">
                        <h6><small>Cognitive function</small></h6>
                        <a class="nav-link link-theme py-0" href="cart.php"> <img src="assets\Group 21693.svg" alt=""></i>
                        </a>
                     </div>
                     <!-- <h6><small>Cognitive function</small></h6> -->
                     <h5><b>ksm-66® ashwagandha</b></h5>
                     <p><small>Focus, Best Sellers, Cognitive function, End</small></p>
                     <span class="fa fa-star cheacked"></span>
                     <span class="fa fa-star cheacked"></span>
                     <span class="fa fa-star cheacked"></span>
                     <span class="fa fa-star"></span>
                  </div>

                  <div class="col-lg-4 col-md-6 col-sm-12 mt-5">
                     <div class="card card1">
                        <div class="image">
                           <div class="bag-pill-price">$650.00</div>
                           <img src="./assets/img/shop/CALCIUM.png" class="img-opa">
                           <div class="image__overlay image__overlay--blur">
                              <p class="image__description p-3 pt-5">
                                 Unived Basics Multivitamin & Minerals for Women has been formulated to offer you a complete RDA of all the essential vitamins & minerals. Key benefit...
                              </p>
                           </div>

                        </div>
                     </div>
                     <div class="d-flex justify-content-between">
                        <h6><small>Cognitive function</small></h6>

                        <a class="nav-link link-theme py-0" href="cart.php"> <img src="assets\Group 21693.svg" alt=""></i>
                        </a>
                     </div>
                     <!-- <h6><small>Cognitive function</small></h6> -->
                     <h5><b>Basic Plant Calcium</b></h5>
                     <p><small>Basics, Born Health, Calcium Absorption, Vi... </small></p>
                     <span class="fa fa-star cheacked"></span>
                     <span class="fa fa-star cheacked"></span>
                     <span class="fa fa-star cheacked"></span>
                     <span class="fa fa-star"></span>
                  </div>

                  <div class="col-lg-4 col-md-6 col-sm-12 mt-5">
                     <div class="card card1">
                        <div class="image">
                           <div class="bag-pill-price">$650.00</div>
                           <img src="./assets/img/shop/POTASSIUM.png" class="img-opa">
                           <div class="bag-pill">
                              New
                           </div>
                           <div class="image__overlay image__overlay--blur">
                              <p class="image__description p-3 pt-5">
                                 Unived Basics Multivitamin & Minerals for Women has been formulated to offer you a complete RDA of all the essential vitamins & minerals. Key benefit...
                              </p>
                           </div>
                        </div>
                     </div>
                     <div class="d-flex justify-content-between">
                        <h6><small>Vitamins & Minerals</small></h6>
                        <a class="nav-link link-theme py-0" href="cart.php"> <img src="assets\Group 21693.svg" alt=""></i>
                        </a>
                     </div>
                     <!-- <h6><small>Vitamins & Minerals</small></h6> -->
                     <h5><b>Basic Potassium Citrate</b></h5>
                     <p><small>Basics, Cellular Energy, Vitamins & Minerals </small></p>
                     <span class="fa fa-star cheacked"></span>
                     <span class="fa fa-star cheacked"></span>
                     <span class="fa fa-star cheacked"></span>
                     <span class="fa fa-star"></span>
                  </div>


                  <div class="col-lg-4 col-md-6 col-sm-12 mt-5">
                     <div class="card card1">
                        <div class="image">
                           <div class="bag-pill-price">$600.00</div>
                           <img src="./assets/img/shop/P1.1.png" class="img-opa">
                           <div class="bag-pill">
                              Out of Stock
                           </div>
                           <div class="image__overlay image__overlay--blur">
                              <p class="image__description p-3 pt-5">
                                 Unived Basics Multivitamin & Minerals for Women has been formulated to offer you a complete RDA of all the essential vitamins & minerals. Key benefit...
                              </p>
                           </div>
                        </div>
                     </div>
                     <div class="d-flex justify-content-between">
                        <h6><small>Vitamins & Minerals</small></h6>
                        <a class="nav-link link-theme py-0" href="cart.php"> <img src="assets\Group 21693.svg" alt=""></i>
                        </a>
                     </div>
                     <!-- <h6><small>Vitamins & Minerals</small></h6> -->
                     <h5><b>Basics Multivitamin-Women</b></h5>
                     <p><small>Basics, Vitamins & Minerals, Women</small></p>
                     <span class="fa fa-star cheacked"></span>
                     <span class="fa fa-star cheacked"></span>
                     <span class="fa fa-star cheacked"></span>
                     <span class="fa fa-star"></span>
                  </div>

                  <div class="col-lg-4 col-md-6 col-sm-12 mt-5">
                     <div class="card card1">
                        <div class="image">
                           <div class="bag-pill-price">$550.00</div>
                           <img src="./assets/img/shop/B-COMPLEX-FRONT.png" class="img-opa">
                           <div class="image__overlay image__overlay--blur">
                              <p class="image__description p-3 pt-5">
                                 Unived Basics Multivitamin & Minerals for Women has been formulated to offer you a complete RDA of all the essential vitamins & minerals. Key benefit...
                              </p>
                           </div>
                        </div>
                     </div>
                     <div class="d-flex justify-content-between">
                        <h6><small>Vitamins & Minerals</small></h6>

                        <a class="nav-link link-theme py-0" href="cart.php"> <img src="assets\Group 21693.svg" alt=""></i>
                        </a>
                     </div>
                     <!-- <h6><small>Vitamins & Minerals</small></h6> -->
                     <h5><b>Basics B-Complex</b></h5>
                     <p><small>Basics, Cellular Energy, Vitamins & Minerals</small></p>
                     <span class="fa fa-star cheacked"></span>
                     <span class="fa fa-star cheacked"></span>
                     <span class="fa fa-star cheacked"></span>
                     <span class="fa fa-star"></span>
                  </div>

                  <div class="col-lg-4 col-md-6 col-sm-12 mt-5">
                     <div class="card card1">
                        <div class="image">
                           <div class="bag-pill-price">$550.00</div>
                           <img src="./assets/img/shop/BASICS-K2-7-FRONT.png" class="img-opa">
                           <div class="bag-pill">
                              New
                           </div>
                           <div class="image__overlay image__overlay--blur">
                              <p class="image__description p-3 pt-5">
                                 Unived Basics Multivitamin & Minerals for Women has been formulated to offer you a complete RDA of all the essential vitamins & minerals. Key benefit...
                              </p>
                           </div>
                        </div>
                     </div>
                     <div class="d-flex justify-content-between">
                        <h6><small>Vitamins & Minerals</small></h6>

                        <a class="nav-link link-theme py-0" href="cart.php"> <img src="assets\Group 21693.svg" alt=""></i>
                        </a>
                     </div>
                     <!-- <h6><small>Vitamins & Minerals</small></h6> -->
                     <h5><b>Basics K2-7</b></h5>
                     <p><small>Basics, Vitamins & Minerals</small></p>
                     <span class="fa fa-star cheacked"></span>
                     <span class="fa fa-star cheacked"></span>
                     <span class="fa fa-star cheacked"></span>
                     <span class="fa fa-star"></span>
                  </div>

                  <div class="col-lg-4 col-md-6 col-sm-12 mt-5">
                     <div class="card card1">
                        <div class="image">
                           <div class="bag-pill-price">$550.00</div>
                           <img src="./assets/img/shop/FOLATE-1000MCG-DFE-FRONT.png" class="img-opa">
                           <div class="bag-pill">
                              New
                           </div>
                           <div class="image__overlay image__overlay--blur">
                              <p class="image__description p-3 pt-5">
                                 Unived Basics Multivitamin & Minerals for Women has been formulated to offer you a complete RDA of all the essential vitamins & minerals. Key benefit...
                              </p>
                           </div>
                        </div>
                     </div>
                     <div class="d-flex justify-content-between">
                        <h6><small>Vitamins & Minerals</small></h6>
                        <a class="nav-link link-theme py-0" href="cart.php"> <img src="assets\Group 21693.svg" alt=""></i>
                        </a>
                     </div>
                     <!-- <h6><small>Vitamins & Minerals</small></h6> -->
                     <h5><b>Folate</b></h5>
                     <p><small>Basics, Cellular Energy, Vitamins & Minerals</small></p>
                     <span class="fa fa-star cheacked"></span>
                     <span class="fa fa-star cheacked"></span>
                     <span class="fa fa-star cheacked"></span>
                     <span class="fa fa-star"></span>
                  </div>

                  <div class="col-lg-4 col-md-6 col-sm-12 mt-5">
                     <div class="card card1">
                        <div class="image">
                           <div class="bag-pill-price">$975.00</div>
                           <img src="./assets/img/shop/India-CALM-Ashwagandha-L-Theanine-60-Caps-Front.png" class="img-opa">
                           <div class="image__overlay image__overlay--blur">
                              <p class="image__description p-3 pt-5">
                                 Unived Basics Multivitamin & Minerals for Women has been formulated to offer you a complete RDA of all the essential vitamins & minerals. Key benefit...
                              </p>
                           </div>
                        </div>
                     </div>
                     <div class="d-flex justify-content-between">
                        <h6><small>Cognitive Function</small></h6>
                        <a class="nav-link link-theme py-0" href="cart.php"> <img src="assets\Group 21693.svg" alt=""></i>
                        </a>
                     </div>
                     <!-- <h6><small></small></h6> -->
                     <h5><b>CALM</b></h5>
                     <p><small>Stress Management, Cognitive Function Foc...</small></p>
                     <span class="fa fa-star cheacked"></span>
                     <span class="fa fa-star cheacked"></span>
                     <span class="fa fa-star cheacked"></span>
                     <span class="fa fa-star"></span>
                  </div>

                  <div class="col-lg-4 col-md-6 col-sm-12 mt-5">
                     <div class="card card1">
                        <div class="image">
                           <div class="bag-pill-price">$350-$950.00</div>
                           <img src="./assets/img/shop/India-Unived-Elite-Caffeine-Strip-Box-Front-Mint-1.png" class="img-opa">
                           <div class="bag-pill">
                              New
                           </div>
                           <div class="image__overlay image__overlay--blur">
                              <p class="image__description p-3 pt-5">
                                 Unived Basics Multivitamin & Minerals for Women has been formulated to offer you a complete RDA of all the essential vitamins & minerals. Key benefit...
                              </p>
                           </div>
                        </div>
                     </div>
                     <div class="d-flex justify-content-between">
                        <h6><small>Cognitive function</small></h6>

                        <a class="nav-link link-theme py-0" href="cart.php"> <img src="assets\Group 21693.svg" alt=""></i>
                        </a>
                     </div>
                     <!-- <h6><small></small></h6> -->
                     <h5><b>Elite Caffeine Strips</b></h5>
                     <p><small>Cognitive Function, Endurance Fuel, Energy...</small></p>
                     <span class="fa fa-star cheacked"></span>
                     <span class="fa fa-star cheacked"></span>
                     <span class="fa fa-star cheacked"></span>
                     <span class="fa fa-star"></span>
                  </div>

                  <div class="col-md-4 col-sm-12 mt-3">

                     <nav aria-label="Page navigation example">
                        <ul class="pagination pg-none">
                           <li class="page-item disabled" style="position: relative; margin-left: 1px; padding: 3px;"><a class="page-link page-number1"><i class="fas fa-angle-left"></i> &nbsp; Previous </a></li>
                        </ul>
                     </nav>
                  </div>

                  <div class="col-md-4 col-sm-12 mt-3">
                     <nav aria-label="Page navigation example">
                        <ul class="pagination pg-none">
                           <li class="page-item"><a class="page-link page-number2">1</a></li>
                           <li class="page-item"><a class="page-link page-number">2</a></li>
                           <li class="page-item"><a class="page-link page-number">3</a></li>
                           <li class="page-item"><a class="page-link page-number">...</a></li>
                           <li class="page-item"><a class="page-link page-number">13</a></li>
                        </ul>
                     </nav>
                  </div>
                  <div class="col-md-4 col-sm-12 mt-3">
                     <nav aria-label="Page navigation example">
                        <ul class="pagination pg-none justify-content-end">
                           <li class="page-item"><a class="page-link page-number1">Next &nbsp;<i class="fas fa-angle-right"></i></a></li>
                        </ul>
                     </nav>
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
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
   <script>
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
   </script>
</body>

</html>