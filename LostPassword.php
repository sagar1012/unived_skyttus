<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <?php include("include/require_css.php"); ?>
    <link rel="#" href="./assets/fonts/MYRIADPRO-REGULAR.woff">
    <style>
        h2 {
            color: black;
            font-weight: bold;
            font-family: "Myriad Pro Regular";
            font-size: 42px;
            opacity: 1;
        }

        p {
            font-size: 15px;
            font-family: "Myriad Pro Regular";
            font-weight: normal;
            color: #666666;
        }

        .form-group {
            width: 50%;
            color: #DADADA;
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
            top: -150px;
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

    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"> -->

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
            <div class="col-md-6 col-sm-12 align-middle align-self-center pt-lg-0 pt-md-5 pt-sm-5 r-con" style="font-family: 'Myriad Pro Regular'">
                <div class="btn-round position-relative" style="margin-left: -104px;">
                    <span>
                        <i class="fas fa-arrow-left"></i> </span>
                </div>

                <img class="img-fluid rounded mx-auto d-block mb-3" src="assets/img/registration/Logo Symbol.svg" alt="">
                <h2 class="text-center">Lost Your Password?</h2>
                <p class="text-center mb-5">Please enter your username or email address. You will receive a link to create a new password via email.</p>

                <div class="align-middle align-self-center pt-lg-0 pt-md-5 pt-sm-5">
                    <form>
                        <div class="form-group1 mb-3">
                            <input type="password" class="form-control" id="inputpassword" placeholder="Username or Email">
                        </div>
                        <button type="Continue" class="btn btn-dark position-relative mt-3 w-100">Send
                        </button>
                    </form>

                    <p class="text-center mt-5 mb-0" style="font-size: 14px; cursor: pointer; 
                     color:#222222; font-weight: normal; font-family: 'Myriad Pro Regular'">
                        <i class="fas fa-chevron-left pe-2 pt-1" style="font-weight: bold"></i> Back to Login
                    </p>
                </div>

            </div>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>