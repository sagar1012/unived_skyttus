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

        .text2 {

            font-size: 25px;
            font-weight: bold;
            height: 95px;
            letter-spacing: 0px;
            color: #231F20;
            opacity: 1;
        }

        .checkbox1 {
            width: 100%;
            height: auto;
            background: #FFFFFF 0% 0% no-repeat padding-box;
            border: 1px solid #DADADA;
            border-radius: 6px;
            opacity: 1;
            padding: 10px 30px;

        }

        .box3 {
            border: 1px solid #DADADA;
            padding: 10px 30px;
            width: 40%;
        }

        a {
            color: black;
        }

        #myinput {
            background: linear-gradient(to right, #67A746 0%, #67A746 50%, #fff 50%, #fff 100%);
            border: solid 1px #67A746;
            border-radius: 8px;
            height: 7px;
            width: 356px;
            outline: none;
            transition: background 450ms ease-in;
            -webkit-appearance: none;

        }

        input[type=range]::-webkit-slider-thumb {
            border: 2px solid #67A746;
            height: 12px;
            width: 12px;
            border-radius: 10px;
            background: #FFFFFF;
            cursor: pointer;
            -webkit-appearance: none;
            margin-top: -2px;
        }


        @media only screen and (max-width: 768px) {

            .form-check.checkbox1.float-left {
                margin-top: 15px;
            }

            #myinput {
                width: 200px;
            }

            .box3 {
                padding: 10px 30px;
                width: 100%;
            }
        }
    </style>


</head>

<body>

    <?php include("include/header.php"); ?>

    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 mb-3 d-flex justify-content-center">
                    <div class="chrome mb-4">
                        <input id="myinput" min="0" max="60" type="range" value="30" />
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="d-flex justify-content-center  mb-0">Question 1/8</div>
                    <div class="text-center text2 mb-3">
                        If any of the below statements apply to you
                        , please select the one most relevant

                    </div>

                    <div class="row">
                        <div class="col-md-6 ">
                            <div class="form-check checkbox1  float-right" style="border:1px solid #DADADA;">
                                <input class="form-check-input box2" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                <label class="form-check-label " for="exampleRadios1">
                                    I live in a high heavy metals environment
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-check checkbox1  float-left" style="border:1px solid #DADADA;">
                                <input class="form-check-input box2" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                <label class="form-check-label " for="exampleRadios1">
                                    I am trying to manage my weight
                                </label>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-12 mb-3 d-flex justify-content-center">
                    <div class="form-check checkbox1 box3 " style="border:1px solid #DADADA;">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                        <label class="form-check-label" for="exampleRadios1">
                            None of the above
                        </label>
                    </div>
                </div>
                <div class="col-md-12 mb-3 d-flex justify-content-center">
                    <div>
                        <button class="btn btn-theme button">Continue<i class="fas fa-arrow-right ms-2"></i></button>
                    </div>

                </div>
                <div class="col-md-12 mb-3 d-flex justify-content-center">
                    <div>
                        <i class="fas fa-chevron-left me-2"></i><a href="url" onMouseOver="this.style.color='#222222'" onMouseOut="this.style.color='#222222'"><u>Go Back</u></a>
                    </div>
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
        // .chrome styling Vanilla JS

        document.getElementById("myinput").oninput = function() {
            var value = (this.value - this.min) / (this.max - this.min) * 100
            this.style.background = 'linear-gradient(to right, #67A746 0%, #67A746 ' + value + '%, #fff ' + value + '%, white 100%)'
        };
    </script>
</body>

</html>