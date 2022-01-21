<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <?php include("include/require_css.php"); ?>

    <style>
    .popup {
        font-family: Myriad Pro Regular;
        border-radius: 6px;
        box-shadow: 1px 1px 7px 0px;
        width: 400px;
        padding: 25px;
        margin: auto;
    }

    .ttl {
        font-size: 26px;
        color: #000000;
        font-weight: bold;
    }

    .cnl-msg {
        font-size: 18px;
        color: #666666;
    }

    .usr-name {
        font-size: 18px;
        color: #000000;
    }

    .usr-info {
        font-size: 14px;
        color: #666666;
    }

    .tm-cls {
        /* border: 1px solid #DADADA; */
        height: auto;
        width: 100%;
        /* padding: 10px; */
        border-radius: 6px;
    }

    .tm {
        color: #666666;
        font-size: 14px;
        width: 100%;
        border: 1px solid #DADADA;
        border-radius: 6px;
        padding: 7px;
        outline: none;
    }

    .ftr {
        display: flex;
        justify-content: end;
        margin-left: 0px;
    }

    .ftr-cnl {
        color: #909090;
        width: auto;
        margin-top: 10px;
        margin-right: 10px;
    }

    .ftr-btn {
        color: #fff;
        background-color: #90B83E;
        padding: 10px;
        border-radius: 6px;
        width: 111px;
        text-align: center;
    }
    </style>


</head>

<body>
    <div class="container pt-5">
        <div class="popup">
            <div class="ttl">
                Add Consultation Note
            </div>
            <div class="row mt-3">
                <img height="50" class="w-auto" src="assets/img/usr1.png" alt="">
                <div class="w-auto">
                    <div class="usr-name">
                        Pranay Sharma
                    </div>
                    <div class="usr-info">
                        Male • 26 Years Old
                    </div>
                </div>
            </div>
            <div class="mt-3 tm-cls">
                <div class="">
                    <textarea class="tm" placeholder="Write Note" name="" id="" rows="10">

                </textarea>
                </div>
            </div>
            <div class="ftr row w-100 mt-3">
                <div class="ftr-cnl mr-3">Cancel</div>
                <div class="ftr-btn">Submit</div>
            </div>
        </div>
    </div>

</body>

</html>