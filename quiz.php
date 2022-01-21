<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <?php include("include/require_css.php"); ?>

    <style>
        .main-content {
            font-family: Myriad Pro Regular;
        }

        .pill-cls {
            background-color: #67A746;
            color: #fff;
            border-radius: 20px;
            font-size: 14px;
            padding: 7px 14px;
            display: inline-block;
        }

        .qz-ttl {
            font-size: 42px;
            color: #231F20;
        }

        .qz-img {
            border-radius: 6px;
            z-index: 1;
            box-shadow: 0px 0px 5px 0px;
            width: 500px;
            height: auto;
        }

        .cross-dv {
            height: 335px;
            width: 510px;
            position: absolute;
            background-color: #D2DCCD;
            border-radius: 6px;
            transform: rotate(-3deg);
        }

        .cal-icn {
            background-color: #222222;
            height: 75px;
            width: 75px;
            border-radius: 50%;
            padding-top: 18px;
            position: absolute;
            z-index: 2;
            margin-top: 297px;
        }

        .qz-p {
            color: #666666;
            font-size: 18px;
        }

        .qz-btn {
            color: #fff;
            background-color: #90B83E;
            display: inline-block;
            border-radius: 6px;
            padding: 10px 20px 10px 20px;
        }

        .bc-btn {
            font-size: 16px;
            color: #222222;
            text-decoration: underline;
        }

        .faico {
            font-size: 16px;
            color: #222222;
            margin-right: 10px;
            margin-top: 10px;
        }

        @media only screen and (max-width: 530px) {
            .qz-img {
                border-radius: 6px;
                z-index: 1;
                box-shadow: 0px 0px 5px 0px;
                width: 300px;
                height: auto;
            }

            .cross-dv {
                height: 210px;
                width: 304px;
                position: absolute;
                background-color: #D2DCCD;
                border-radius: 6px;
                transform: rotate(-3deg);
            }

            .cal-icn {
                background-color: #222222;
                height: 75px;
                width: 75px;
                border-radius: 50%;
                padding-top: 18px;
                position: absolute;
                z-index: 2;
                margin-top: 170px;
            }
        }
    </style>


</head>

<body>
    <?php include("include/header.php"); ?>

    <div class="container pt-5">
        <div class="row justify-content-center">
            <div class="col mx-auto text-center">
                <div class="pill-cls">
                    8 QUESTIONS
                </div>

                <div class="qz-ttl mt-2">
                    <b> Multi-Vitamin Quiz </b>
                </div>

                <div class="mt-4 d-flex justify-content-center">
                    <div class="cross-dv">

                    </div>
                    <img class="qz-img" src="assets/img/Multi_Vitamins.png" alt="">
                    <div class="cal-icn">
                        <img src="assets/img/Quiz.svg" alt="">
                    </div>
                </div>

                <div class="qz-p mt-5">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor <br> incididunt ut labore et dolore magna aliqua.
                </div>

                <div class="qz-btn text-center mt-3">
                    Start Quiz
                </div>

                <div class="row mt-3">
                    <div class="">
                        <i class="fa fa-angle-left faico"></i>
                        <a href="#" class="bc-btn">Explore more quizzes</a>
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