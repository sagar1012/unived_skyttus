
$(document).on('click', '#pay_now_mart', function (e) {

    $.pay_now_mart(e);

});


$.pay_now_mart = function (e) {

    $('.overlay-popup-full').show();

    var total = "<?php echo $amount; ?>" * 100;
    var amount = "<?php echo $MartPrice; ?>";
    var main_amount = "<?php echo $amount; ?>";
    var discount = "<?php echo $MartDiscount; ?>";

    var merchant_total = total;
    var merchant_surl_id = jQuery('form#razorpay-frm-payment-mart').find('input#surl').val();
    var merchant_furl_id = jQuery('form#razorpay-frm-payment-mart').find('input#furl').val();
    var merchant_amount = amount;
    var currency_code_id = jQuery('form#razorpay-frm-payment-mart').find('input#currency').val();
    var key_id = "<?php echo $keyId; ?>";
    var store_name = 'PCOS Club India';
    var store_description = 'Mart Payment';
    var store_logo = 'assets/img/logo.png';


    var self_first_name = "<?php echo $uname; ?>";
    var card_holder_name_id = self_first_name;
    var email = jQuery('form#razorpay-frm-payment-mart').find('input#self_email').val();
    var phone = jQuery('form#razorpay-frm-payment-mart').find('input#self_phno').val();
    var um_id = "<?php echo base64_encode($um_id); ?>";
    var mart_id = "<?php echo $mart_id; ?>";
    var mart_name = "<?php echo $MartName; ?>";
    var manufacturer_id = "<?php echo $MartManufacturerID; ?>";
    var manufacturer_name = "<?php echo $MartManufacturerName; ?>";

    jQuery('.text-danger').remove();

    if (card_holder_name_id == "") {
        jQuery('input#billing-name').after('<small class="text-danger">Please enter full mame.</small>');
        return false;
    }
    if (email == "") {
        jQuery('input#billing-email').after('<small class="text-danger">Please enter valid email.</small>');
        return false;
    }

    var razorpay_options = {
        key: key_id,
        amount: merchant_total,
        name: store_name,
        description: store_description,
        image: store_logo,
        netbanking: true,
        currency: currency_code_id,
        prefill: {
            name: self_first_name,
            email: email,
            contact: phone
        },
        handler: function (transaction) {
            jQuery.ajax({
                url: 'razorpay/verify_mart.php',
                type: 'post',
                data: {
                    razorpay_payment_id: transaction.razorpay_payment_id,
                    merchant_surl_id: merchant_surl_id,
                    merchant_furl_id: merchant_furl_id,
                    card_holder_name_id: card_holder_name_id,
                    merchant_total: merchant_total,
                    merchant_amount: merchant_amount,
                    currency_code_id: currency_code_id,
                    um_id: um_id,
                    amount: amount,
                    main_amount: main_amount,
                    discount: discount,
                    um_contact_no: phone,
                    um_email: email,
                    um_name: card_holder_name_id,
                    mart_id: mart_id,
                    mart_name: mart_name,
                    manufacturer_id: manufacturer_id,
                    manufacturer_name: manufacturer_name
                },
                dataType: 'json',
                success: function (res) {
                    if (res.msg) {
                        $('.overlay-popup-full').hide();
                        alert(res.msg);
                        return false;
                    }
                    //console.log("Done");
                    window.location = res.redirectURL;
                }
            });
        },
        "modal": {
            "ondismiss": function () {
                // code here
                $('.overlay-popup-full').hide();
            }
        }
    };
    // obj        
    var objrzpv1 = new Razorpay(razorpay_options);
    objrzpv1.open();
    e.preventDefault();

};