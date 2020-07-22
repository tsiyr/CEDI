//var status;
var id = name = email = city = message = phone = "";

 
            $("form").submit(function(e){
                //alert('submit intercepted');
                e.preventDefault(e);
            });

 function err(id, error){
  //alert(id+' :'+error); passed
  $(id+"err").css("color", "red").text(error);
  $(id).css("border-color", "red");
 }


function IsEmail(text_){
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

if(text_.match(mailformat)){
return true;
}
else{

return false;
}

}


 $( "#send_email" ).click(function() {
  
  send_email();

});


 function send_email(){

  var status = true;

  /*function sanitized_text(text){
    var result = text.replace('=','');
    return result;
  }*/

  name = $("#name_").val();
  //alert(name); passed
  //var name = sanitized_text(name);

  email = $("#email_").val();
  //alert(email); passed

  city = $("#city_").val();

  phone = $("#phone_").val();

  message = $("#message_").val();


  if(!$.isNumeric(phone) || phone.length > 15 || phone.length < 9 ){
              status = false;
              id="#phone_";
              err(id, "Pls Enter a valid Phone Number."); 

             }

if(!IsEmail(email) ){
              status = false;
              id="#email_";
              err(id, "Pls enter a valid email address."); 

             }

  if(name.length > 30 || name.length < 2 ){
              status = false;
              id="#name_";
              err(id, "Name expected to be btw 2 - 30 chars."); 

             }

  if(city.length > 30 || city.length < 2 ){
              status = false;
              id="#city_";
              err(id, "City Name expected to be btw 2 - 30 chars."); 

             }

  if(message.length > 3000 || message.length < 2){
              status = false;
              id="#message_";
              err(id, "Message body is either too short or too long.", message); 

             }


if(status){

             var form_data = new FormData();
                     form_data.append('send_email',  'true');
                     form_data.append('name',    name);
                     form_data.append('email',    email);
                     form_data.append('phone',phone);
                     form_data.append('city',city);
                     form_data.append('message',message);
                     
                       $.ajax({
                        url:"includes/mail.php",
                        method:"POST",
                        data: form_data,
                        contentType: false,
                        cache: false,
                        processData: false,

                        beforeSend:function(){
                        
                         $("#button_text").text("Submitting...");
                         $('#send_email').prop('disabled', true);
                         
                        }, 

                        success:function(data){
                            
                            if(!data.includes("submitted")){
                                
                                //$("#button_text").text("Message Not Sent. Retry");
                                $("#button_text").text(data);
                            $('#send_email').prop('disabled', false);
                                
                            } else{ 
                                
                            $("#button_text").text("submitted...redirecting to homepage");
                            $('#send_email').prop('disabled', false);
                            
                            // Simulate a mouse click:
                            setTimeout(gotoIndex, 2000);
                            
                            
                            //
                                
                            }

                          
                        }

                       });

            } //else {alert(status);}

 }
 
 
 function gotoIndex(){
     window.location.href = "index.html";
 }
 
 
 function getParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, '\\$&');
    var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, ' '));
    }

     var query = getParameterByName("service");

     //$("#copyright_").text(getParameterByName("service"));


      if(query == "in-patient"){
                $("#contact_heading").text("IN-PATIENT REHAB APPLICATION");
                $("#message_").text("I'd like to make enquiries on your in-patient rehabilitation services.");
                $("#button_text").text("Submit");

            } else if (query == "out-patient"){
                $("#contact_heading").text("OUT-PATIENT REHAB APPLICATION");
                $("#message_").val("I'd like to make enquiries on your out-patient rehabilitation services.");
                $("#button_text").text("Submit");
                
            } else {}