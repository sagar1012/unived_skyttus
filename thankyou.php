<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <?php include("include/require_css.php"); ?>
</head>
<style>
    #box {
        border: 1px solid #000000;
        height: 611px;
        width: auto;
    }

    .parchase {
        align-items: center;
        letter-spacing: 0px;
        color: #222222;
        opacity: 100%;
        font-style: Myriad Pro;
        size: 34px;
    }

    .p {
        text-align: center;
        font: normal normal normal 16px/24px Myriad Pro;
        letter-spacing: 0px;
        color: #666666;
        opacity: 1;
    }

    .form-control {
        text-align: center;
        font: normal normal 600 18px/26px Myriad Pro;
        letter-spacing: 0px;
        color: #222222;
        opacity: 1;
        width: 50%;
        margin-right: 20px;
        height: 1px;
        font-size: 14px;
    }

    #shop {
        border: 1px solid #222222;
    }

    @media only screen and (max-width: 786px) {
        .form-control {
            font-size: 14px;
        }

        .card.h-auto.p-5 {
            padding: 20px !important;
        }
    }
</style>

<body>
    <div class="h-100">
        <div>
            <div class="d-lg-flex d-md-flex justify-content-center align-items-center center-data">
                <div class="container">
                    <div class="card h-auto p-5" style="border: 0; box-shadow: 1px 2px 6px lightgrey;">
                        <div class="text-center">
                            <div><img src="assets/img/tnkyou/Success Check.svg"></div>
                            <h5 class="parchase my-3"><b>Thank you for purchase!<b></h5>
                            <p class="p w-100 my-2" style="max-width:400px;">You will receive an order confirmation email/SMS shortly with the expected delivery date for your items.</p>
                        </div>
                        <div class="text-center mt-4">
                            <button class="bg-white text-center p-2 mb-3 mx-2" style="border: 1px solid #ced4da; border-radius: 0.25rem; color: #222222; font-size: 14px; font-weight: 600;"> Continue Shopping</button>
                            <button class="text-white text-center p-2 mb-3 mx-2" style="border: 1px solid #ced4da; border-radius: 0.25rem; background: #90B83E;  font-size: 14px; font-weight: 600;">View Order</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>