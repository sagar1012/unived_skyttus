<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <?php include("include/require_css.php"); ?>


    <style>
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

        .color {
            color: #67A746;
        }



        .panel-body {
            border: 1px solid #DADADA;
            height: auto;
            padding: 30px 20px;
            width: 100%;
        }

        .panel-body i {
            font-size: 40px;
            color: #90b83e;
            margin-right: 25px;
        }

        .panel-body .text-end {
            background: #ddd;
            padding: 5px 15px;
            font-weight: 600;
            color: #222;
        }

        .cheacked {
            color: #67A746;
        }

        .hr.new2 {
            border-top: 1px dashed #67A746;
        }



        .image {
            border-radius: 6px;
            width: 250px;
            height: auto;
        }

        ul.nav {
            border-bottom: 1px solid #ddd;
        }

        ul .nav-item .nav-link {
            margin-right: 15px;
        }

        .nav-pills .nav-link.active,
        .nav-pills .show>.nav-link {
            color: #222;
            background: none;
            border-bottom: 2px solid #222;
        }

        ul .nav-item .nav-link:focus {
            outline: inherit;
        }

        ul .nav-item .nav-link {
            color: #222222;
            background: none;
            border-radius: 0px;
            border: 0;
        }

        ul li::marker {
            color: #67A746;
        }

        @media(max-width:768px) {
            .col-md-4.col-sm-12.ps-5 {
                border-left:0px solid lightgrey !important;
                padding-top: 50px;
            }
        }
    </style>


</head>

<body>

    <?php include("include/header.php"); ?>

    <section>
        <div class="container mb-5">
            <div class="header-left" style="width: fit-content;padding-top: 10px;">
                <a class="active me-3" href="#home" style="color: #666666">Home /</a>
                <a href="#Shop" style="color: #666666" class="me-3">Explore Experts / </a>
                <a href="#Quick Order" style="color: #90B83E" class="me-3">Experts Profile</a>
            </div>
        </div>

    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12 pe-5">
                    <div class="row">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-about-tab" data-bs-toggle="pill"
                                 data-bs-target="#pills-about" type="button" role="tab" aria-controls="about" 
                                 aria-selected="true">About Me</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-Services-tab" data-bs-toggle="pill" data-bs-target="#pills-Services" type="button" role="tab" aria-controls="pills-Services" aria-selected="false">Services</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-Qualifications-tab" data-bs-toggle="pill" data-bs-target="#pills-Qualifications" type="button" role="tab" aria-controls="pills-Qualifications" aria-selected="false">Qualifications</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-Documents-tab" data-bs-toggle="pill" data-bs-target="#pills-Documents" type="button" role="tab" aria-controls="pills-Documents" aria-selected="false">Documents</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-Testimonials-tab" data-bs-toggle="pill" data-bs-target="#pills-Testimonials" type="button" role="tab" aria-controls="pills-Testimonials" aria-selected="false">Testimonials</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-about" role="tabpanel" aria-labelledby="pills-about-tab">
                                <p class="mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                    aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                                    eu fugiat nulla pariatur.
                                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain
                                    was born and I will give you a complete account of the system, and expound the actual teachings
                                    of the great explorer of the truth, the master-builder of
                                    human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure</p>
                            </div>
                            <div class="tab-pane fade" id="pills-Services" role="tabpanel" aria-labelledby="pills-Services-tab">

                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                                <div>
                                    <ul class="bullets" style="list-style:inherit">
                                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing</li>
                                        <li>Sed ut perspiciatis unde omnis iste </li>
                                        <li>At vero eos et accusamus et iusto odio dignissimos Ducimus On the other hand, we denounce with righteous </li>
                                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing </li>
                                        <li>Sed ut perspiciatis unde omnis iste</li>
                                    </ul>
                                    <h5>Specializations</h5>
                                    <ul class="bullets" style="list-style:inherit">
                                        <li>Sed ut perspiciatis unde</li>
                                        <li>Lorem ipsum dolor sit amet</li>
                                        <li>At vero eos et accusamus et iusto odio</li>

                                    </ul>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-Qualifications" role="tabpanel" aria-labelledby="pills-Qualifications-tab">
                                <div>
                                    <h5>Education</h5>
                                    <ul class="bullets" style="list-style:inherit">
                                        <li>BDS - K.M. Shah Dental College Hospital, 2012</li>
                                        <li>Fellowship in Oral implantlogy - Harvard University, 2007 </li>
                                        <li>Certificate in Cosmetic Dentistry - UNITED KINGDOM, 2005</li>

                                    </ul>
                                </div>
                                <div>
                                    <h5>Awards and Recognitions</h5>
                                    <ul class="bullets" style="list-style:inherit">
                                        <li>ARDS Implants Certified : Minimal Drilling, Maximum Stability - 2016 </li>
                                        <li>The Immersive Studio - Pre Conference Course - 2013</li>
                                        <li>Professional Advanced Training on Soft & Hard Tissue Management Course of OSSTEM AIC - 2016</li>

                                    </ul>
                                </div>
                                <div>
                                    <h5>Experience</h5>
                                    <ul class="bullets" style="list-style:inherit">
                                        <li>2013 Sed ut perspiciatis unde omnis iste natus</li>
                                        <li>2011 - 2012 Internship at At vero eos et accusamus 2012</li>
                                        <li>2014 Sed ut perspiciatis unde omnis iste</li>

                                    </ul>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-Documents" role="tabpanel" aria-labelledby="pills-Documents-tab">
                                <div class="row">
                                    <div class="col-md-12 d-flex justify-content-between mt-3 mb-3">
                                        <div> <img src="assets/img/explore/pdf.png" style="width: 40px;" class="me-3">Certificate.pdf </div>
                                        <button class="btn button" style="border: 1px solid;">View Document</i></button>
                                    </div>
                                    <div class="col-md-12 d-flex justify-content-between mt-3 mb-3">
                                        <div> <img src="assets/img/explore/pdf.png" style="width: 40px;" class="me-3">Certificate.pdf </div>
                                        <button class="btn button" style="border: 1px solid;">View Document</i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-Testimonials" role="tabpanel" aria-labelledby="pills-Testimonials-tab">
                                <div class="row">
                                    <div class="col-md-12 d-flex justify-content-between mt-4">
                                        <div>
                                            <img src="assets/img/prachi.png" style="width: 40px;" class="me-3">
                                        </div>
                                        <div>
                                            <div><b>John Smith</b>
                                            </div>
                                            <div class="text-end">
                                                <p>12 days ago</p>
                                            </div>

                                            <div><small>Customer, since 2014</small></div>

                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                                doloremque laudantium, totam rem aperiam,
                                                eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae
                                                vitae dicta sunt explicabo.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="col-md-12 d-flex justify-content-between ">
                                        <div>
                                            <img src="assets/img/prachi.png" style="width: 40px;" class="me-3">
                                        </div>
                                        <div>
                                            <div><b>John Smith</b>
                                            </div>
                                            <div class="text-end">
                                                <p>12 days ago</p>
                                            </div>

                                            <div><small>Customer, since 2014</small></div>

                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                                doloremque laudantium, totam rem aperiam,
                                                eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae
                                                vitae dicta sunt explicabo.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-12 d-flex justify-content-between ">
                                        <div>
                                            <img src="assets/img/prachi.png" style="width: 40px;" class="me-3">
                                        </div>
                                        <div>
                                            <div><b>John Smith</b>
                                            </div>
                                            <div class="text-end">
                                                <p>12 days ago</p>
                                            </div>

                                            <div><small>Customer, since 2014</small></div>

                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                                doloremque laudantium, totam rem aperiam,
                                                eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae
                                                vitae dicta sunt explicabo.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-12 color mb-4 ">
                                        Show all stories (34) <i class="fas fa-angle-down ms-2"></i>
                                    </div>


                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- TAB CONENT END HERE -->
                    <section>
                        <hr>
                        <!-- <div>
                            <h5>Service <a class="color">Plan</a></h5>
                        </div> -->
                        <div class="title-div title-div-with-btn mb-3 mt-5">
                            <div>
                                <h3 class="title mb-0">Service <span class="color-theme">Plan</span></h3>
                            </div>
                        </div>
                        <div class="panel panel-default mt-4">
                            <div class="panel-body mb-5">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <i class="far fa-clock"></i> 1 HOURS CONSULTATION
                                    </div>
                                    <div class="text-end">
                                        ₹4999
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="text-end mt-5">
                                <button class="btn btn-theme button">Book Appointment<i class="fas fa-chevron-right ms-3 "></i></button>
                            </div>
                    </section>

                </div> <!-- COL-8 END HERE -->

                <!-- COL-4 START HERE -->
                <div class="col-md-4 col-sm-12 ps-5" style="border-left: 1px solid lightgrey; ">
                    <div class="mb-4">
                        <img src="assets/img/thumb.jpg" class="image">
                    </div>
                    <div>
                        <div class="text-dark"><b>PRANAY SHARMA</b></div>
                        <div><small>Dermatologist</small></div>
                        <span class="fa fa-star cheacked"></span>
                        <span class="fa fa-star cheacked"></span>
                        <span class="fa fa-star cheacked"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <hr class="new2">
                    <div>
                        <img src="assets/img/explore/Group%2020924.svg" class="me-3">Bhopal, Madhya Pradesh, India
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
    <script>
        $(function() {

            $(".progress").each(function() {

                var value = $(this).attr('data-value');
                var left = $(this).find('.progress-left .progress-bar');
                var right = $(this).find('.progress-right .progress-bar');

                if (value > 0) {
                    if (value <= 50) {
                        right.css('transform', 'rotate(' + percentageToDegrees(value) + 'deg)')
                    } else {
                        right.css('transform', 'rotate(180deg)')
                        left.css('transform', 'rotate(' + percentageToDegrees(value - 50) + 'deg)')
                    }
                }

            })

            function percentageToDegrees(percentage) {

                return percentage / 100 * 360

            }

        });
    </script>


</body>


</html>