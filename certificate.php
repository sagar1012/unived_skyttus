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
            font-family: 'Myriad Pro Regular';
            font-size: 42px;
            opacity: 1;
        }

        p {
            font-size: 14px;
            font-family: 'Myriad Pro Regular';
            font-style: normal;
            font-weight: normal;
            color: #666666;
            line-height: 26px;
            letter-spacing: 0px;
        }

        .form-group input,
        .form-select input {

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

        .form-group1 {
            width: 100%;    
        }
        
        .form-select select {
            padding: 10px;
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

        #upload {
            width: 100%;

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

        @media only screen and (min-width: 1199px) {
            .r-con {
                padding: 120px;
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
                <h2 class="text-center">Upload Certification</h2>
                <p class="text-center">Almost there, let's upload your certification</p>

                <div class="align-middle align-self-center pt-lg-0 pt-md-5 pt-sm-5 r-con">
                    <form>
                        <div class="row mb-3">
                            <div class="form-group col-md-3 w-100 mt-4">
                                <select style="padding: 10px; color: #909090;" class="form-select" type="text" placeholder="Certificate Type*">
                                    <option selected>Certificate Type*</option>
                                </select>
                            </div>
                            <div class="col-md-12">
                                <input type="file" id="imgupload" style="display:none" />
                                <a href="#" class="w-100 mt-4 pt-2 pb-2 ps-3 pe-3 rounded d-flex justify-content-between" style=" border: 2px dotted #ced4da; color:#222;">
                                    <span id="OpenImgUpload"> <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-cloud-arrow-up me-2" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M7.646 5.146a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 6.707V10.5a.5.5 0 0 1-1 0V6.707L6.354 7.854a.5.5 0 1 1-.708-.708l2-2z" />
                                            <path d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383zm.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z" />
                                        </svg><strong>Upload</strong></span>
                                    <p class="mb-0">File size less than 1MB</p>
                                </a>
                            </div>
                        </div>
                        <p >Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat,</p>
                        <p >Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <button type="Continue" class="btn btn-dark position-relative" style="width: 100%;">Submit
                            <i class="fas fa-check right position-absolute end-0 pe-2 pt-1"></i>
                        </button>
                    </form>

                </div>

            </div>

        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $('#OpenImgUpload').click(function() {
            $('#imgupload').trigger('click');
        });
    </script>
</body>

</html>