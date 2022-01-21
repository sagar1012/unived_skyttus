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
            font-size: 16px;
            font-family: Myriad Pro Regular;
            color: #666666;
        }

        .form-group input,
        .form-group1 input {

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

        .r-con {
            padding: 20px;
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

        @media only screen and (max-width: 992px) {
            .btn-round  {
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

            <div class="col-lg-6 col-sm-12 overflow-hidden">
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
            <div class="col-lg-6 col-sm-12 align-middle align-self-center pt-lg-0 pt-md-5 pt-sm-5">
                <div class="btn-round position-relative">
                    <span>
                        <i class="fas fa-arrow-left"></i> </span>
                </div>
                <img class="img-fluid rounded mx-auto d-block mb-3" src="assets/img/registration/Logo Symbol.svg" alt="">
                <h2 class="text-center">Welcome to Unived</h2>
                <p class="text-center">Please create your account</p>

                <div class="align-middle align-self-center pt-lg-0 pt-md-5 pt-sm-5 r-con">
                    <form>

                        <div class="row mb-3">
                            <div class="form-group col-md-6 mt-3">
                                <div class="input-group date" data-provide="datepicker">

                                    <input type="text" onfocus="(this.type='date')" class="form-control" placeholder="Date of Birth*">
                                    <div class="input-group-addon">
                                        <span class="glyphicon glyphicon-th"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-6 mt-3">
                                <select class="form-select form-control" type="text" placeholder="gender*">
                                    <option selected>Gender*</option>
                                    <option value="">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-md-3 w-100">
                            <select class="form-select form-control" type="text" placeholder="How were you referred to Unived?*">
                                <option selected>How were you referred to Unived?*</option>
                            </select>

                        </div>
                        <div class="form-check col-md-3 mt-4 w-100">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault" style="color:#666666; font-size:15px;">
                                Subscribe for educational and promotional communication
                            </label>
                        </div>

                        <button type="Continue" class="btn btn-dark position-relative w-100 mt-4">Create an Account
                        </button>

                    </form>


                </div>

            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>