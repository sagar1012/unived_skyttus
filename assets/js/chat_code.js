$(function () {

$(document).on("keypress", "#chat_message", function(e) {
        if (e.keyCode == 13 && !e.shiftKey) {
            e.preventDefault();
            $('.insert_user_chat').trigger('click');
        }
}); 

$(document).on('click', '.get_patient_chat', function () {
	var id = $(this).attr('data-id');
	var personName = $(this).attr('data-chatname');
	var userImage_src = $(this).attr('data-chatimg');
	var userImage = "<img src='"+userImage_src+"' class='avatar-image is-loaded bg-theme' width='100%'>";

	$('.right .top .personName').html(personName);
	$('.right .top .userimage').html(userImage);
  
  $(".chat-left-aside").removeClass('open-pnl');
  
	if ($("#pane-intro").css('visibility') == 'visible'){	    
	    $("#pane-intro").css({'visibility':'hidden'});
	    $(".chat-right-aside").css({'visibility':'visible'});
	}
 
    $.post("action/action_get_chat.php", {
      csid: id
    }, function (data) {
        $("#resultchat").html(data);
        scrollDown();
    })
 });

 $(document).on('click', '.insert_user_chat', function (e) {
  
    e.preventDefault();
    proceed = true;
    var myStr = $("#chat_message").val();
    var chat_message = $.trim(myStr); 

    var chat_person = $("#chat_person").val();

     var url = 'action/action_insert_chat.php';


    if (chat_message == "") {
       alert("Plaese Enter Message");
      return false;
    }

    $.post(url, {
      chat_message: chat_message
    }, function (data) { 
        $("#chat_message").val('');
        $("#resultchat").append(data);
        scrollDown();
    })


 });


 $(document).on('change', '.insert_user_chat_upload', function (e) { 
    e.preventDefault();
    proceed = true;
    var post_url = $(this).attr("action");
    var request_method = $(this).attr("method");
    var form_data = new FormData(this);
    $.ajax({
      url: post_url,
      type: request_method,
      data: form_data,
      dataType: "text",
      contentType: false,
      cache: false,
      processData: false
    }).done(function (data) {

      if (data == 4) { 
        alert("File to large");
        return false;
      } else if (data == 3) {
        alert("Please upload valid file");
        return false;
      } else {
        $("#chat_message").val(''); 
        $("#resultchat").append(data);
        scrollDown();
      }
     
    });
 });


 

$(document).on('click', '.delte_chat', function (e) {
    e.preventDefault();
    proceed = true; 
    var chatid = $(this).attr('data-chatid'); 
    $.post("action/action_chat_delete.php", {
      chatid:chatid
    }, function (data) {  
       $("#chat_row"+chatid).remove();
    })
 });

// $(document).on('keyup', '.chat_list_serch_main', function () {
//     var val = this.value; 
//     $.post("action_search_chat_list.php", {
//       val: val
//     }, function (data) {
//       $(".update_chat_list_main").html(data);
//     }) 
//   })
 

});

