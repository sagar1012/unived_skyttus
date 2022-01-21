<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <?php include("include/require_css.php"); ?>
    <style>
        h2 {
            color: black;
            font-weight: bold;
            font-family: Myriad Pro Regular;
            font-weight: 42px;
        }

        .form-group {
            width: 50%;
            color: #909090;
        }

        .form-group input {

            /* color: #DADADA; */
            font-size: 16px;
            font-family: "Myriad Pro Regular";
            opacity: 1;
            letter-spacing: 0px;
            display: block;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #212529;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #ced4da;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            height: 45px;
            border-radius: 0.25rem;
        }

        .form-group1 input {
            font-size: 16px;
            font-family: "Myriad Pro Regular";
            opacity: 1;
            letter-spacing: 0px;
            display: block;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #212529;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #ced4da;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            height: 45px;
            border-radius: 0.25rem;
            width: 100%;
        }

        ::placeholder {
            color: #909090;
            opacity: 1;
            /* Firefox */
        }

        :-ms-input-placeholder {
            /* Internet Explorer 10-11 */
            color: #909090;
        }

        ::-ms-input-placeholder {
            /* Microsoft Edge */
            color: #909090;
        }

        .btn-round span {
            height: 45px;
            width: 45px;
            position: absolute;
            border-radius: 100%;
            background: #fff;
            top: -150px;
            left: -50px;
        }



        .btn-round i { line-height: 45px; text-align: center;display: block;}
        .form-control {
            /* color: #909090; */
            font-family: "Myriad Pro Regular";
            letter-spacing: 0px;
            opacity: 1;
            font-size: 16px;
        }



        .btn-round span {
            height: 45px;
            width: 45px;
            position: absolute;
            border-radius: 100%;
            background: #fff;
            top: 0px;
            left: -50px;
        }

        .btn-round i {
            line-height: 45px;
            text-align: center;
            display: block;
        }

        .carousel-item {
            height: auto;
        }

        ol.carousel-indicators li.active {
            height: 8px;
            width: 20px;
            background: #222;
            border-radius: 4px;
        }

        ol.carousel-indicators li {
            height: 8px;
            width: 8px;
            margin: 0 5px;
            border-radius: 100%;
            background: #bbb;
            flex: inherit;
            border: none;
        }

        .r-con {
            padding: 20px;
        }

        @media only screen and (min-width: 1000px) {
            .form-group {
                width: 50%;
            }

        }

        @media only screen and (max-width: 1400px) {
            .btn-round span {
                top: -85px;
            }
        }

        @media only screen and (max-width: 1199px) {
            .btn-round span {
                top: -35px;
            }
        }

        @media only screen and (max-width: 768px) {
            .btn-round span {
                background-color: none;
            }

            .btn-round span i {
                display: none;
            }
        }

        @media only screen and (min-width: 1199px) {
            .r-con {
                padding: 120px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 overflow-hidden">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="assets/img/registration/1.png" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/img/registration/2.png" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/img/registration/3.png" alt="Third slide">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 align-middle align-self-center pt-lg-0 pt-md-5 pt-sm-5">
                <div class="btn-round position-relative">
                    <span>
                        <i class="fas fa-arrow-left"></i> </span>
                </div>
                <div>
                    <img class="img-fluid rounded mx-auto d-block mb-3" src="assets/img/registration/Logo Symbol.svg" alt="">
                    <h2 class="text-center mb-5">Create Your <br> Professional Account</h2>

                    <div class="align-middle align-self-center pt-lg-0 pt-md-5 pt-sm-5 r-con">
                        <form>
                            <div class="row mb-3">
                                <div class="form-group col-md-3">
                                    <input type="First Name"  id="fName" placeholder="First Name*">
                                </div>
                                <div class="form-group col-md-3">
                                    <input type="Last Name"  id="lName" placeholder="Last Name*">
                                </div>
                            </div>
                            <div class="form-group1 mb-3">
                                <input type="email"  id="inputemail" placeholder="Email*">
                            </div>
                            <div class="form-group1 mb-3">
                                <input type="password"  id="inputpassword" placeholder="Password*">
                            </div>
                            <div class="form-group1 mb-3">
                                <input type="password" class="form-control" id="inputpassword" placeholder="Password*">
                            </div>

                            <select class="form-select form-select-mb-3" aria-label=".form-select-mb-3 example" style="color:#909090;">
                                <option selected>I am a*</option>
                                <option value="1"></option>
                            </select>

                            <select class="form-select form-select-mb-3" aria-label=".form-select-mb-3 example" style="color:#909090;">
                                <option selected>I am a*</option>
                                <option value="1"></option>
                            </select>

                            <button type="Continue" class="btn btn-dark position-relative w-100 mt-4">Continue
                                <i class="fas fa-arrow-right position-absolute end-0 pe-2 pt-1"></i></button>

                        </form>

                        </form>

                    </div>

                </div>

            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>