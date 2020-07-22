<?php


function email_recieved($email_ , $full_name){
$headers="";
$to = $email_;
$subject = "Email Recieved!";
//get first name from full name
$arr = explode(' ',trim($full_name));
$name_ = $arr[0]; // will print Test


$message = '<html>

<head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Email Recieved</title>
    </head>

<body style="font-family:Yantramanav,System,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Oxygen-Sans,Ubuntu,Cantarell,Helvetica Neue,sans-serif;">



    <style>
    .container{
    
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
    }
    </style>

    <div class="sticky-top">
        <div class="container" style="text-align:center;">
            <figure class="figure" style="margin-right:auto;margin-left:auto;"><a href="index.html"><img class="img-fluid" src="assets/img/cedi_logo.png" style="margin-top:12px;width:300px;"></a></figure>
        </div>
    </div>
    <div class="container" style="max-width:700px;">
        <div class="container" >

             <div class="col-12 container" >
                        <div class="contact_col">
                            <fieldset style="border:none;">
                                <div class="contact_heading" style="background-color:#5bb10d; height:7px;"></div>
                            </fieldset>
                        </div>
                    </div>
           
                <div class="form-row">


                    
                    <div class="col container" style="max-width:85%; margin-left: auto;margin-right: auto;">
                        <div class="contact_col">
                            <div class="form-row">
                                <div class="col-12">
                                    <p>Dear '.$name_.',</p>
                                    <p>We have recieved your message and will get back to you soonest. Be rest assured that your messages are treated with utmost discretion and confidentiality and we will do our very best to ensure you get the best of our
                                        services.</p>
                                    <p>Thanks for Reaching out.</p>
                                    <p>Dr. Sayo</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 container" >
                        <div class="contact_col">
                            <fieldset style="border:none;">
                                <div class="contact_heading" style="background-color:#5bb10d; height:7px;"></div>
                            </fieldset>
                        </div>
                    </div>
                </div>
            
        </div>
    </div>
    <div class="container" style="
    color: #f0f9ff;
    background-color: #5bb10d; padding:21px;">
        <footer>
            <div>
                <div class="row">
                    <div class="col item social" style="display:none;"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
                </div>
                <p style="text-align:center;margin-right:auto;margin-left:auto;width:80%;max-width:400px;"><br><strong>Compassionate Empowerment Development Initiative&nbsp;</strong>© 2020</p>
            </div>
        </footer>
    </div>
    
</body>

</html>';

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <CEDI@compassionate-rehab.000webhostapp.com>' . "\r\n";
$headers .= 'Cc: CEDI@compassionaterehab.com' . "\r\n";

//set_time_limit(0);

if(mail($to,$subject,$message,$headers)){
 
 return true;

} else {return false;}

  flush();

}


function send_email($email_, $full_name, $city, $phone, $message_){
$headers="";
//$to = "Abiodunfaith20@gmail.com, Sadegoke47@gmail.com, debodaniel55@gmail.com ";
$to = "tsiyrmail@gmail.com ";
$subject = "CEDI MAIL | From Client ";


$message = '<html>
<head>
    <title>New Message</title>
    </head>

<body style="font-family:Yantramanav,System,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Oxygen-Sans,Ubuntu,Cantarell,Helvetica Neue,sans-serif;">



    <style>
    .container{
    
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
    }
    </style>

    <div class="sticky-top">
        <div class="container" style="text-align:center;">
            <figure class="figure" style="margin-right:auto;margin-left:auto;"><a href="index.html"><img class="img-fluid" src="https://compassionate-rehab.000webhostapp.com/assets/img/cedi_logo.png" style="margin-top:12px;width:300px;"></a></figure>
        </div>
    </div>
    <div class="container" style="max-width:700px;">
        <div class="container" >

             <div class="col-12" >
                        <div class="contact_col">
                            <fieldset style="border:none;">
                                <div class="contact_heading" style="background-color:#5bb10d; height:7px;"></div>
                            </fieldset>
                        </div>
                    </div>
           
                <div class="form-row">


                    
                    <div class="col" style="max-width: 90%;margin-left: auto;margin-right: auto;">
                        <div class="contact_col">
                            <div class="form-row">
                                <div class="col-12">
                                <h3>Client\'s Info </h3>
                                    <p>Client\'s Full Name: '.$full_name.'</p>
                                    <p>Client\'s City: '.$city.'</p>
                                    <p>Client\'s Email: '.$email_.'</p>
                                    <p>Client\'s Phone Number: '.$phone.'</p>
                                    
                                    <h3>Message: </h3>
                                    <p>'.$message_.'</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12" >
                        <div class="contact_col">
                            <fieldset style="border:none;">
                                <div class="contact_heading" style="background-color:#5bb10d; height:7px;"></div>
                            </fieldset>
                        </div>
                    </div>
                </div>
            
        </div>
    </div>
    <div style="max-width: 700px;
    padding: 50px 0;
    color: #f0f9ff;
    background-color: #5bb10d;
    margin-left: auto;
    margin-right: auto;">
        <footer>
            <div class="container_">
                <div class="row">
                    <div class="col item social" style="display:none;"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
                </div>
                <p style="text-align:center;margin-right:auto;margin-left:auto;width:80%;max-width:400px;"><br><strong>Compassionate Empowerment Development Initiative&nbsp;</strong>© 2020</p>
            </div>
        </footer>
    </div>
    
</body>

</html>';

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <info@compassionate-rehab.000webhostapp.com>'. "\r\n";
$headers .= 'Cc: CEDI@compassionaterehab.com' . "\r\n";

//set_time_limit(0);
if(mail($to,$subject,$message,$headers)){
    return true;
  
} else {
    return false;
}
  flush();

}






  if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['send_email']) &&  $_POST['send_email'] == "true") {

    //echo $_POST['email']; passed

    //die();

    $email_id = $_POST['email'];
    $full_name = $_POST['name'];
    $city = $_POST['city'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    if(send_email($email_id, $full_name, $city, $phone, $message )){

                    if(email_recieved($email_id, $full_name)){
                        //print_r (error_get_last());
                        echo "submitted";
                } else {
                    echo "error";
                }

  } else {
        echo "error";}
}

?>