
// $(window).on('load', function () {
// $('#loading').fadeOut(); 
// });





// $('.signupsection').css('min-height','calc(100vh - $(".navbar").height())');

$(document).ready(function () {

  var quantitiy = 0;
  $(document).on("click", '.quantity-right-plus', function (e) {
    var productId = $(this).attr('product_data');
    var userId = $(this).attr('user_data');
    var cartId = $(this).attr('cart_id');
    var dataType = $(this).attr('data-type');

    // Stop acting like a button  
    e.preventDefault();
    // Get the field name
    var quantity = parseInt($('#quantity_' + cartId).val());

    // If is not undefined

    $('#quantity_' + cartId).val(quantity + 1);
    updateQuantity(cartId, dataType);


    // Increment

  });

  $(document).on("click", '.quantity-left-minus', function (e) {
    var productId = $(this).attr('product_data');
    var userId = $(this).attr('user_data');
    var cartId = $(this).attr('cart_id');
    var dataType = $(this).attr('data-type');

    // Stop acting like a button
    e.preventDefault();
    // Get the field name
    var quantity = parseInt($('#quantity_' + cartId).val());

    // If is not undefined

    // Increment
    if (quantity > 1) {
      $('#quantity_' + cartId).val(quantity - 1);
      updateQuantity(cartId, dataType);
    }
  });

  function updateQuantity(cartId, dataType) {

    $.ajax({
      url: "action/action_cart.php?do=updateQnt",
      type: "post",

      data: {
        'cart_id': cartId,
        'dataType': dataType
      },
      success: function (response) {
        var json = $.parseJSON(response);
        $("#price").html(json.total);
        $("#subTotal").html(json.subTotal);
        $("#total_amount").val(json.total_amount);
        $("#discount_amount").val(json.discount_amount);
        $("#subTotal_amount").val(json.subTotal_amount);

        // You will get response from your PHP page (what you echo or print)
      },
      error: function (jqXHR, textStatus, errorThrown) {
        console.log(textStatus, errorThrown);
      }
    });

  }
  // $("a.grouped_elements").fancybox();
  $('.test-img').height($('.test-img').width());
  $('.tc-expert-btn-div').height($('.tc-expert-detail').height());
  $("#profileimglabel").click(function (e) {
    $("#imageUpload_expert").click();
  });

  $('#pillsconsultation').click(function () {

    $('#pillsconsultationdiv').css('display', 'block');
    $('#pillsprofilediv').css('display', 'none');
    $('#pillschatdiv').css('display', 'none');

  });
  $('#pillschat').click(function () {

    $('#pillschatdiv').css('display', 'block');
    $('#pillsconsultationdiv').css('display', 'none');

    $('#pillsprofilediv').css('display', 'none');
  });
  $('#pillsprofile').click(function () {
    $('#pillsprofilediv').css('display', 'block');
    $('#pillsconsultationdiv').css('display', 'none');
    $('#pillschatdiv').css('display', 'none');

  });
  $('#pillconsultationclose').click(function () {
    $('#pillsconsultationdiv').css('display', 'none');

  });
  $('#pillprofileclose').click(function () {
    $('#pillsprofilediv').css('display', 'none');

  });

  $('#pillchatclose').click(function () {
    $('#pillschatdiv').css('display', 'none');

  });


  function fasterPreviewProfile(uploader) {
    console.log("Done");
    console.log(uploader.files[0]);
    if (uploader.files && uploader.files[0]) {
      $('#profileImage').attr('src',
        window.URL.createObjectURL(uploader.files[0]));
    }
  }

  $("#imageUpload_expert").change(function () {
    console.log("Done");
    fasterPreviewProfile(this);
  });
  $('#upgrade_badge_btn').click(function () { //user profile js
    $('.user-badge-select-div').css('display', 'block');
    $('.user-details-div').css('display', 'none');

  });




  $('#upgrade_badge_btn_cancel').click(function () {
    $('.user-badge-select-div').css('display', 'none');
    $('.user-details-div').css('display', 'block');

  });

  $('.chosen').chosen();

  // step js ends
  $('.threeslides').slick({ //three items slider with arrows

    slidesToShow: 3,
    slidesToScroll: 3,
    infinite: false,
    arrows: true,
    prevArrow: '<svg class="left-arrow-slider" style="transform:rotate(180deg)" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 16"><path d="M19.8,9H1.8V7h18V0l8,8-8,8Z" transform="translate(-1.8)"/></svg>',

    nextArrow: '<svg class="right-arrow-slider"  style="" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 16"><path d="M19.8,9H1.8V7h18V0l8,8-8,8Z" transform="translate(-1.8)"/></svg>',

    responsive: [
      {
        breakpoint: 1025,

        settings: {

          slidesToShow: 3,
          slidesToScroll: 3,

        }
      },
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,

        }
      },
      {
        breakpoint: 767,

        settings: {

          slidesToShow: 1.2,
          slidesToScroll: 1.2,

        }
      },


    ]
  });


  $('.fourslidesnoarrow').slick({ //three items slider with arrows

    slidesToShow: 4,
    slidesToScroll: 4,
    infinite: false,
    arrows: true,
    prevArrow: false,

    nextArrow: false,

    responsive: [
      {
        breakpoint: 1025,

        settings: {

          slidesToShow: 4,
          slidesToScroll: 4,

        }
      },
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 4,

        }
      },
      {
        breakpoint: 767,

        settings: {

          slidesToShow: 4,
          slidesToScroll: 4,

        }
      },


    ]
  });

  $('.twoslides').slick({ //three items slider with arrows

    slidesToShow: 2,
    slidesToScroll: 2,
    infinite: false,
    arrows: false,
    dots:true,
    // prevArrow: '<svg class="left-arrow-slider" style="transform:rotate(180deg)" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 16"><path d="M19.8,9H1.8V7h18V0l8,8-8,8Z" transform="translate(-1.8)"/></svg>',

    // nextArrow: '<svg class="right-arrow-slider"  style="" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 16"><path d="M19.8,9H1.8V7h18V0l8,8-8,8Z" transform="translate(-1.8)"/></svg>',

    responsive: [
      {
        breakpoint: 1025,

        settings: {

          slidesToShow: 2,
          slidesToScroll: 2,

        }
      },
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,

        }
      },
      {
        breakpoint: 767,

        settings: {

          slidesToShow: 1.2,
          slidesToScroll: 1.2,

        }
      },


    ]
  });

  $('.sixslides').slick({ //three items slider with arrows

    slidesToShow: 5,
    slidesToScroll: 5,
    infinite: false,
    arrows: true,
    //  prevArrow:'<svg class="left-arrow-slider" style="transform:rotate(180deg)" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 16"><path d="M19.8,9H1.8V7h18V0l8,8-8,8Z" transform="translate(-1.8)"/></svg>',

    // nextArrow:'<svg class="right-arrow-slider"  style="" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 16"><path d="M19.8,9H1.8V7h18V0l8,8-8,8Z" transform="translate(-1.8)"/></svg>',

    responsive: [
      {
        breakpoint: 1025,

        settings: {

          slidesToShow: 3,
          slidesToScroll: 3,

        }
      },
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,

        }
      },
      {
        breakpoint: 767,

        settings: {

          slidesToShow: 1.2,
          slidesToScroll: 1.2,

        }
      },


    ]
  });

  $('.single-slider').slick({ //single slider with arrows
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    dots:true,
    arrows:false,
    // autoplay: true,
    // autoplaySpeed: 2000,
    // arrows: false,
    //  prevArrow:'<svg class="left-arrow-slider" style="width:20px;left: -20px;transform:rotate(180deg)" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 16"><path d="M19.8,9H1.8V7h18V0l8,8-8,8Z" transform="translate(-1.8)"/></svg>',

    // nextArrow:'<svg class="right-arrow-slider"  style="width:20px;right:-20px" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 16"><path d="M19.8,9H1.8V7h18V0l8,8-8,8Z" transform="translate(-1.8)"/></svg>',


  });
  var url = $("#videoinside").attr('src'); //iframe close on modal close
  $("#videomodal").on('hide.bs.modal', function () {
    $("#videoinside").attr('src', '');
  });
  $("#videomodal").on('show.bs.modal', function () {
    $("#videoinside").attr('src', url);
  });


  $(".navbar-toggler").click(function () { //navbar cross icon on mobile view
    $(".navbar-toggler").toggleClass("cross");
    $(".navbar-collapse").toggleClass("active");
    $("body").toggleClass("overflow-hidden");
  });

  //         $('.menu-toggle').click(function(){
  // $('.nav-on-hover .navbar').toggle(300)
  //         });
  //$('.flatpickr').flatpickr();
  // step js starts
  var current_fs, next_fs, previous_fs; //fieldsets
  var opacity;
  var current = 1;
  var steps = $("fieldset").length;

  setProgressBar(current);

  $(".next_123").click(function () {

    current_fs = $(this).parents('fieldset');
    next_fs = $(this).parents('fieldset').next();

    //Add Class Active
    $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active"); //adds active class to current tab
    $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active").addClass("complete"); //adds complete class to prev tab

    //show the next fieldset
    next_fs.show();
    //hide the current fieldset with style
    current_fs.animate({ opacity: 0 }, {
      step: function (now) {
        // for making fielset appear animation
        opacity = 1 - now;

        current_fs.css({
          'display': 'none',
          'position': 'relative'
        });
        next_fs.css({ 'opacity': opacity });
      },
      duration: 500
    });
    setProgressBar(++current);
  });

  $(".previous").click(function () {

    $('#con_reason_er_cls').hide();
    $('#con_reason_er_cls').html("");
    $('#user_er_cls').hide();
    $('#user_suc_cls').html("");

    current_fs = $(this).parents('fieldset');
    previous_fs = $(this).parents('fieldset').prev();

    //Remove class active
    $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active"); //removes active class to current tab
    $("#progressbar li").eq($("fieldset").index(previous_fs)).addClass("active"); //adds active class to previous tab

    //show the previous fieldmsfoet
    previous_fs.show();

    //hide the current fieldset with style
    current_fs.animate({ opacity: 0 }, {
      step: function (now) {
        // for making fielset appear animation
        opacity = 1 - now;

        current_fs.css({
          'display': 'none',
          'position': 'relative'
        });
        previous_fs.css({ 'opacity': opacity });
      },
      duration: 500
    });
    setProgressBar(--current);
  });

  function setProgressBar(curStep) {
    var percent = parseFloat(100 / steps) * curStep;
    percent = percent.toFixed();
    $(".progress-bar")
      .css("width", percent + "%")
  }

  $(".submit").click(function () {
    return false;
  });
  // on radiobutton click, show popup
  $('input[name="otheroption"]').change(function () {
    if ($(this).is(':checked')) {
      $('#otheroptionmodal').modal('show');
    }
  });
  const actualBtn1 = document.getElementById('actual-btn1'); //file upload js

  const fileChosen1 = document.getElementById('file-chosen1');

  if (actualBtn1 != null) {

    actualBtn1.addEventListener('change', function () {
      fileChosen1.textContent = this.files[0].name
    });

  }
  // file upload js ends

});


$('.nav-profile-dropdown').click(function () {
  $('.profile-sidebar').addClass('profile-sidebar-open');
  $('body').addClass('overlay');
  $('#close-circle').removeClass('profile-sidebar-open');
});

$('#close-circle').click(function () {
  $('.profile-sidebar').removeClass('profile-sidebar-open');
  $('body').removeClass('overlay');
});



//Get the button
let mybutton = document.getElementById("btn-back-to-top");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (
    document.body.scrollTop > 20 ||
    document.documentElement.scrollTop > 20
  ) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
// When the user clicks on the button, scroll to the top of the document
mybutton.addEventListener("click", backToTop);

function backToTop() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}



$(document).on("click", ".click_services", function() {
  var id = $(this).attr('data-id');
  
  console.log('id:'+id);

  localStorage.setItem("local-serviceid", id);

  window.location.href="services.php#innerservices";


});





if($("#audio-songs-name").length != 0) { 

  var audioSongs = $("#audio-songs-name").val();

  const audioPlayer = document.querySelector(".audio-player");
  const audio = new Audio(
    //"assets/audio/"+audioSongs
    "upload/resource/"+audioSongs
  );

  //credit for song: Adrian kreativaweb@gmail.com

  

  audio.addEventListener(
    "loadeddata",
    () => {
      audioPlayer.querySelector(".time .length").textContent = getTimeCodeFromNum(
        audio.duration
      );
      audio.volume = .75;
    },
    false
  );

  //click on timeline to skip around
  const timeline = audioPlayer.querySelector(".timeline");
  timeline.addEventListener("click", e => {
    const timelineWidth = window.getComputedStyle(timeline).width;
    const timeToSeek = e.offsetX / parseInt(timelineWidth) * audio.duration;
    audio.currentTime = timeToSeek;
  }, false);

  //click volume slider to change volume
  const volumeSlider = audioPlayer.querySelector(".controls .volume-slider");
  volumeSlider.addEventListener('click', e => {
    const sliderWidth = window.getComputedStyle(volumeSlider).width;
    const newVolume = e.offsetX / parseInt(sliderWidth);
    audio.volume = newVolume;
    audioPlayer.querySelector(".controls .volume-percentage").style.width = newVolume * 100 + '%';
  }, false)

  //check audio percentage and update time accordingly
  setInterval(() => {
    const progressBar = audioPlayer.querySelector(".progress");
    progressBar.style.width = audio.currentTime / audio.duration * 100 + "%";
    audioPlayer.querySelector(".time .current").textContent = getTimeCodeFromNum(
      audio.currentTime
    );
  }, 500);

  //toggle between playing and pausing on button click
  const playBtn = audioPlayer.querySelector(".controls .toggle-play");
  playBtn.addEventListener(
    "click",
    () => {
      if (audio.paused) {
        playBtn.classList.remove("play");
        playBtn.classList.add("pause");
        audio.play();
      } else {
        playBtn.classList.remove("pause");
        playBtn.classList.add("play");
        audio.pause();
      }
    },
    false
  );

  audioPlayer.querySelector(".volume-button").addEventListener("click", () => {
    const volumeEl = audioPlayer.querySelector(".volume-container .volume");
    audio.muted = !audio.muted;
    if (audio.muted) {
      volumeEl.classList.remove("icono-volumeMedium");
      volumeEl.classList.add("icono-volumeMute");
    } else {
      volumeEl.classList.add("icono-volumeMedium");
      volumeEl.classList.remove("icono-volumeMute");
    }
  });

  //turn 128 seconds into 2:08
  function getTimeCodeFromNum(num) {
    let seconds = parseInt(num);
    let minutes = parseInt(seconds / 60);
    seconds -= minutes * 60;
    const hours = parseInt(minutes / 60);
    minutes -= hours * 60;

    if (hours === 0) return `${minutes}:${String(seconds % 60).padStart(2, 0)}`;
    return `${String(hours).padStart(2, 0)}:${minutes}:${String(
      seconds % 60
    ).padStart(2, 0)}`;
  }

}


const actualBtn1 = document.getElementById('actual-btn1'); //file upload js

const fileChosen1 = document.getElementById('file-chosen1');

if (actualBtn1!= null) {

  actualBtn1.addEventListener('change', function(){
    fileChosen1.textContent = this.files[0].name
  });

};

// $('.chosen').chosen(); 