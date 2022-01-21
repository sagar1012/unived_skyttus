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
        }

        p {
            font-size: 18px;
            font-family: Myriad Pro Regular;
            color: #909090;
        }

        .form-group input, .form-select input {

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

        .form-control {
            color: #909090;
            font-family: Myriad Pro Regular;
            font-size: 16px;
        }

        .line span::before {
            content: '';
            position: absolute;
            width: 46%;
            height: 1px;
            background: #DADADA;
            top: 50%;
            left: 0;
        }

        .line span::after {
            content: '';
            position: absolute;
            width: 46%;
            height: 1px;
            background: #DADADA;
            top: 50%;
            right: 0;
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
                <img class="img-fluid rounded mx-auto d-block mb-3" src="assets/img/registration/Logo Symbol.svg" alt="">
                <h2 class="text-center">Welcome to Unived</h2>
                <p class="text-center">Let's start with the basic details</p>

                <div class="align-middle align-self-center pt-lg-0 pt-md-5 pt-sm-5 r-con">
                    <form>

                        <div class="row mb-3">
                            <div class="form-group col-md-3 w-50 mt-3">
                                <select class="form-select form-control" type="text" placeholder="Country">
                                    <option selected>Country*</option>
                                    <option value="india">India</option>
                                    <option value="United States of America">United States of America</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3 w-50 mt-3">
                                <select class="form-select form-control" type="text" placeholder="State*">
                                    <option selected>State*</option>
                                    <option value="Maharashtra">Maharashtra</option>
                                    <option value="Gujarat">Gujarat</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3 w-50 mt-3">
                                <select class="form-select form-control" type="text" placeholder="City">
                                    <option selected>City*</option>
                                    <option value="thane">Thane</option>
                                    <option value="ahmedabad">Ahmedabad</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3 w-50 mt-3">
                                <input type="zip code" type="numeric" id="zCode" placeholder="Zipcode*">
                            </div>
                            <div class="form-group col-md-3 w-100 mt-3">
                                <select class="form-select form-control" type="text" placeholder="How were you referred to Unived?*">
                                    <option selected>Business Type*</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3 w-100 mt-3">
                                <input type="Legal Business Name*" id="lBussinessName" placeholder="Legal Business Name*" class="w-100">
                            </div>
                            <div class="form-group col-md-3 w-50 mt-3">
                                <input type="GST No.*" id="gstNo" placeholder="GST No.*">
                            </div>
                            <div class="form-group w-50 mt-3">
                                <input type="PAN Card No.*" id="panCardNo" placeholder="PAN Card No.*">
                            </div>
                            <div class="form-group col-md-3 w-100 mt-3">
                                <input type="Address*" id="address" placeholder="Address*" class="w-100">
                            </div>
                            <div class="form-group col-md-3 w-100 mt-3">
                                <input type="Phone**" id="phone*" placeholder="Phone*" class="w-100">
                            </div>
                        </div>
                        <div class="form-group col-md-3 w-100 mt-3">
                            <input type="Legal Business Name*" class="form-control" id="lBussinessName" placeholder="Legal Business Name*">
                        </div>
                        <div class="form-group col-md-3 w-50 mt-3">
                            <input type="GST No.*" class="form-control" id="gstNo" placeholder="GST No.*">
                        </div>
                        <div class="form-group w-50 mt-3">
                            <input type="PAN Card No.*" class="form-control" id="panCardNo" placeholder="PAN Card No.*">
                        </div>
                        <div class="form-group col-md-3 w-100 mt-3">
                            <input type="Address*" class="form-control" id="address" placeholder="Address*">
                        </div>
                        <div class="form-group col-md-3 w-100 mt-3">
                            <input type="Phone**" class="form-control" id="phone*" placeholder="Phone*">
                        </div>


                        <button type="Continue" class="btn btn-dark position-relative mt-4 cursor: pointer;" style="width: 100%;">Continue<i class="fas fa-arrow-right position-absolute end-0 pe-2 pt-1"></i></button>

                    </form>


                </div>

            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>