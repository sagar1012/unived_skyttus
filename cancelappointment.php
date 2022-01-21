<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <?php include("include/require_css.php"); ?>

    <style>
        .popup{
            font-family: Myriad Pro Regular;
            border-radius: 6px;
            box-shadow: 1px 1px 7px 0px;
            width: fit-content;
            padding: 25px;
            margin: auto;
        }
        .ttl{
            font-size: 26px;
            color: #000000;
            font-weight: bold;
        }
        .cnl-msg{
            font-size: 18px;
            color: #666666;
        }
        .usr-name{
            font-size: 18px;
            color: #000000;
        }
        .usr-info{
            font-size: 14px;
            color: #666666;
        }
        .tm-cls{
            border: 1px #67A746 dashed;
            background-color: #F7F7F7;
            height: auto;
            width: 100%;
            padding: 10px;
            border-radius: 6px;
        }
        .tm{
            color: #000000;
            font-size: 18px;
        }
        .ftr{
            display: flex;
            justify-content: end;
        }
        .ftr-cnl{
            color: #909090;
            width: auto;
            margin-top: 10px;
            margin-right: 10px;
        }
        .ftr-btn{
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
            Cancel Appointment
        </div>
        <div class="cnl-msg">
            Are you sure you want to cancel this appointment?
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
            <div class="tm">
                18 Dec, 21 | 10:00 AM - 11:00 AM
            </div>
            <div class="tm">
                1 hours Consultation: <span style="color: #67A746;">₹2499</span> 
            </div>
        </div>
        <div class="ftr row w-100 mt-3">
            <div class="ftr-cnl mr-3">Cancel</div>
            <div class="ftr-btn">Confirm</div>
        </div>
      </div>
    </div>

</body>

</html>