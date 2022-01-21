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
            color: #fff;
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


        .cheacked {
            color: #67A746;
        }

        .hr.new2 {
            border-top: 1px dashed #67A746;
        }

        .image {
            width: 100%;
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

        text {
            overflow: hidden;
            text-align: center;
        }

        text:before,
        text:after {
            background-color: #000;
            content: "";
            display: inline-block;
            height: 1px;
            position: relative;
            vertical-align: middle;
            width: 50%;
        }

        text:before {
            right: 0.5em;
            margin-left: -50%;
        }

        text:after {
            left: 0.5em;
            margin-right: -50%;
        }

        .row-height {
            display: flex;
            justify-content: space-between;
        }

        .col-height {
            flex: 1;
            background: #f2f2f2;
            margin: 15px 10px;
        }

        .health-box {
            position: relative;
        }

        .health-box .text-box {
            position: absolute;
            bottom: 35px;
            color: #fff;
            left: 35px;
        }

        .fltr-line {
            position: absolute;
            top: -7px;
            width: 55%;
            right: 0px;
        }

        @media only screen and (max-width: 991px) {
            .col-height {
                flex: inherit;
            }
        }
    </style>


</head>

<body>

    <?php include("include/header.php"); ?>
    <section>
        <div class="container">
            <div class="col-md-12 mb-5">
                <div>

                    <img src="assets/img/community-bg.png" class="img-fluid" alt="Responsive image">
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <div class="row">
                        <ul class="nav nav-pills mb-5" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-WhoWeAre-tab" data-bs-toggle="pill" data-bs-target="#pills-WhoWeAre" type="button" role="tab" aria-controls="pills-WhoWeAre" aria-selected="true">Who We Are</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-Services-tab" data-bs-toggle="pill" data-bs-target="#pills-Services" type="button" role="tab" aria-controls="pills-Services" aria-selected="false">Our Story</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-Qualifications-tab" data-bs-toggle="pill" data-bs-target="#pills-Qualifications" type="button" role="tab" aria-controls="pills-Qualifications" aria-selected="false">Our Team</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-Documents-tab" data-bs-toggle="pill" data-bs-target="#pills-Documents" type="button" role="tab" aria-controls="pills-Documents" aria-selected="false">Our History</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-Testimonials-tab" data-bs-toggle="pill" data-bs-target="#pills-Testimonials" type="button" role="tab" aria-controls="pills-Testimonials" aria-selected="false">Our Certifications</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-Testimonials-tab" data-bs-toggle="pill" data-bs-target="#pills-Testimonials" type="button" role="tab" aria-controls="pills-Testimonials" aria-selected="false">Press</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <!--TAB DIV START -->
                            <div class="tab-pane fade show active" id="pills-WhoWeAre" role="tabpanel" aria-labelledby="pills-WhoWeAre-tab">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div>
                                            <h4 class="text-dark"><b>Our <a class="color">Mission</a></b></h4>
                                        </div>
                                        <div>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div>
                                            <p>
                                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                                                totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                                                Nemo enim ipsam voluptatem quia.</p>
                                            <p> Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                                                consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et
                                                dolore magnam aliquam quaerat voluptatem. </p>
                                            <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit
                                                esse quam nihil molestiae consequatur,
                                                vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.
                                            </p>
                                        </div>
                                    </div>
                                    <hr class="mt-5">
                                    <div class="border-above-title" style="margin-top: 40px;"><span class=""></span></div>
                                    <div class="mb-4">
                                        <h4 class="text-dark"><b>Our <a class="color">Promise</a></b></h4>
                                    </div>
                                    <div class="row row-height">
                                        <div class="col-height">
                                            <div class="member d-flex pe-3 ps-3 pt-4 pb-4">
                                                <img src="assets/img/whoware/our%20promise.svg" class="img1  me-2 ">
                                                <span class="pe-2 ms-3">
                                                    <h5><b>Our Promise</b></h5>
                                                    <p>Honesty is one of the values that Unived is built on. We started in 2010 with an honest attempt
                                                        to create a trustworthy brand and now,
                                                        we are making an honest attempt to keep it that way.
                                                        So, be assured of our offerings, as we take our promises seriously.</p>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-height">
                                            <div class="member d-flex pe-3 ps-3 pt-4 pb-4">
                                                <img src="assets/img/whoware/you.svg" class="img1  me-2 ">
                                                <span class="pe-2 ms-3">
                                                    <h5><b>You</b></h5>
                                                    <p>You are the reason why we work the way we do. We understand the importance of health in your life.
                                                        Health is the best investment you will ever make, and it is our responsibility
                                                        to safeguard your investments and ensure that they repay tenfold.
                                                        So, we have designed a unique customer loyalty program that repays you with each health product you purchase.</p>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row row-height">
                                        <div class="col-height">
                                            <div class="member d-flex pe-3 ps-3 pt-4 pb-4">
                                                <img src="assets/img/whoware/innovation.svg" class="img1  me-2 ">
                                                <span class="pe-2 ms-3">
                                                    <h5><b>Innovation</b></h5>
                                                    <p>Tablets can sometimes get monotonous. Health should be happiness and fun.
                                                        So, we have designed some unique delivery modes that ensure your daily consumption of health comes through enjoyable means.
                                                        Read about our health teas, health soups, orange DHA drops, protein enriched butter,
                                                        health masala and discover a whole new approach to daily health.</p>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-height">
                                            <div class="member d-flex pe-3 ps-3 pt-4 pb-4">
                                                <img src="assets/img/whoware/best%20quality.svg" class="img1  me-2 ">
                                                <span class="pe-2 ms-3">
                                                    <h5><b>Best Quality</b></h5>
                                                    <p>We don’t believe in compromises, and neither should you.
                                                        We use only the highest quality of natural ingredients
                                                        in each of our products. We have a stringent quality control process which ensures that each production batch is
                                                        standardized to the therapeutic dosage required,
                                                        and produced under the strictest safety measures necessary.</p>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row row-height">
                                        <div class="col-height">
                                            <div class="member d-flex pe-3 ps-3 pt-4 pb-4">
                                                <img src="assets/img/whoware/vegan.svg" class="img1  me-2 ">
                                                <span class="pe-2 ms-3">
                                                    <h5><b>Vegan</b></h5>
                                                    <p>They say ‘when vegetarians grow up, they turn vegan’ – we are proud that we started vegan. We love animals,
                                                        we respect them, and we leave them where they should be – in nature, free from testing laboratories and slaughter
                                                        houses. All our products are 100% vegan,
                                                        and we are proud to be registered by the Vegan Society – UK, as well as certified by PETA India.</p>

                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-height">
                                            <div class="member d-flex pe-3 ps-3 pt-4 pb-4">
                                                <img src="assets/img/whoware/our%20products.svg" class="img1  me-2 ">
                                                <span class="pe-2 ms-3">
                                                    <h5><b>Our Products</b></h5>
                                                    <p>Our products are made in wonderfully small batches with extreme care and detail. Since we don’t like nonsense,
                                                        we have kept our products free of unnecessary ingredients that act as fillers.
                                                        Instead, they are full of standardized natural ingredients which means ‘wholesome goodness’ – oh yeah!</p>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="border-above-title" style="margin-top: 40px;"><span class=""></span></div>
                                        <div class="mb-4">
                                            <h4 class="text-dark"><b>Bring your health to new heights</b></h4>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 health-box mb-5">
                                                <a href=""> <img src="assets/img/racing.png" class="image "></a>
                                                <div class="text-box">
                                                    <h3><b>Our Certifications</b></h3>
                                                    <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                                                </div>
                                            </div>
                                            <div class="col-md-6  health-box mb-5">
                                                <a href=""> <img src="assets/img/racing.png" class="image"></a>
                                                <div class="text-box">
                                                    <h3><b>Our Facility</b></h3>
                                                    <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Second Tab -->
                            <div class="tab-pane fade" id="pills-Services" role="tabpanel" aria-labelledby="pills-Services-tab">
                                <h5>Our <a class="color">Story</a></h5>
                                <div class="row">
                                    <div class="col-md-9 col-sm-12 pe-5">
                                        <img src="assets/img/racing.png" class="image mb-5 mt-3">
                                        <p> I ran away from school on the first day of 1st grade. I was 5.
                                            My parents braced themselves to foster the growth of a child who had started out as a rebel.
                                            A rebel indeed, I was. I stood up against most of my teachers, always told my parents that education was a
                                            waste of time, and instead spent hours every day at the gymnasium and reading about healthy foods.</p>
                                        <p>
                                            My parents supported my healthy habits, but had all but given up on educating me. They had a son who had switched 2 schools,
                                            2 colleges, dropped out of a university, and had no defined career path ahead of him.</p>
                                        <p> As I look back, I’ll say that I’ve been lucky enough to live in three countries, and hold degrees from institutions in each.
                                            Part of me will admit that they’ve done the right thing in pushing me through the ropes; however, part of me strongly argues that
                                            real education is outside the classroom. I guess I’ve been fortunate enough to experience both..</p>
                                        <p> My health goals, however,
                                            never changed. And now that I had all this MBA jargon stuck in my head,
                                            I just had to do something with it. So, like all adventure
                                            seekers I turned my back on corporate life in the USA, moved back to Bombay, and two days later, started Unived. </p>
                                        <p> Unived sprouted
                                            as a culmination of my innermost beliefs, my life’s experiences, and my earnest desire to offer the purest, most natural, vegan
                                            health products of the finest quality. Our foundation is built around two integral principals, never compromise on quality – ever;
                                            and be completely transparent with our stakeholders – you.</p>
                                        <p>
                                            What may have germinated in my mind has only taken shape because
                                            of the people who are part of Unived. It was a conscious decision to build the company with youth and that decision has proven to
                                            be invaluable; we are blessed with a fantastic team of bright young minds, some of the finest in this country, and I am proud that as
                                            we grow each of them is positively contributing towards the personality of this company. </p>
                                        <p> Those who joined during the early days,
                                            are the founding pillars and leaders at Unived, and have set a high standard of work ethics, values, and basic human principals that are
                                            ever-present in the organization. They are an immense source of inspiration and their leadership has been instrumental to our growth.</p>
                                        <p>
                                            At Unived, we are all one family, and the greatest source of joy, to us, is the all the sleepless nights and endless days of struggle,
                                            hard work, and passion, that we have and continue to pour into the organization, is someone’s joint pain disappearing, someone’s
                                            cholesterol reducing, someone’s health improving, someone racing faster, someone recovering quicker – we are changing people’s
                                            lives, for the better – we draw a lot of inspiration from this, and remain thankful to be given such an opportunity to serve mankind. </p>
                                        <p> Unived would not be what it is, without the unconditional support of a few people. You know who you are and thanks for being
                                            who you are.</p>
                                        <p class="text-dark"> Welcome to Unived, where you will always find all natural, all vegan, healthy products of the highest quality & integrity,
                                            that are inspired by nature and based on research. </p>
                                        <p> Thank you very much.</p>
                                        <div>Best Regards,</div>
                                        <div class="color mt-3">Amit Mehta</div>
                                        <div> <b>Founder & CEO</b></div>
                                    </div>
                                    <div class="col-md-3 col-sm-12 ps-5" style="border-left: 1px solid lightgrey; ">
                                        <div class="position-relative">
                                            <h4 class="font-size-18px tt-up fw-600 color-black mb-3">WHO WE ARE</h4>
                                            <hr class="fltr-line">
                                            <p>
                                                Founded In 2010, Unived Has Been At The Forefront Of Original In-House R&D To Develop Scientific Vegan Formulations For Various Dietary Supplement And Sports Nutrition Products.
                                                Since 2014, We Have Been Supporting Deserving Athletes And Over The Years Our Team Has Grown From Athletes Based In India To Athletes Across USA, UK, Singapore, Indonesia, And Philippines. We Extend Various
                                                Levels Of Support Tiered Across Our Youth, Ambassador, Athlete, And Elite Teams.
                                            </p>
                                        </div>

                                        <div>
                                            <div class="row">
                                                <div class="social mt-5">
                                                    <div class="trending social">
                                                        <div class="heading position-relative">  
                                                        <h4 class="font-size-18px tt-up fw-600 color-black mb-3">BE SOCIAL WITH US</h4>
                                                        <hr class="fltr-line">  
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

                            </div>
                            <!-- Third Tab -->
                            <div class="tab-pane fade" id="pills-Qualifications" role="tabpanel" aria-labelledby="pills-Qualifications-tab">
                                <h5>Our <a class="color">Story</a></h5>
                                <img src="assets/img/racing.png" class="">
                                <div class="row">
                                    <div class="col-md-9">
                                        8
                                    </div>
                                    <div class="col-md-3" style="border-left: 1px solid lightgrey; ">
                                        <h4 class="font-size-18px tt-up fw-600 color-black mb-3">WHO WE ARE</h4>
                                    </div>

                                </div>

                            </div>
                            <!-- four Tab -->
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


                </div> <!-- COL-12 END HERE -->

                <!-- COL-4 START HERE -->
                <div class="col-md-4">

                </div> <!-- COL-4 end HERE -->
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