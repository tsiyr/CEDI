<?php
require "PHPMailer/PHPMailerAutoload.php";

    
    
    function sendEmail($from_, $from_name, $city, $phone, $message)
    {
        
        $arr = explode(' ',trim($from_name));
        $name_ = $arr[0]; // will print first name before the space.
        
        $body = '
        
             <html>
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
            <figure class="figure" style="margin-right:auto;margin-left:auto;"><a href="index.html"><img class="img-fluid" src="https://compassionatedrugrehab.com/assets/img/cedi_logo.png" style="margin-top:12px;width:300px;"></a></figure>
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
                                    <p>Client\'s Full Name: '.$from_name.'</p>
                                    <p>Client\'s City: '.$city.'</p>
                                    <p>Client\'s Email: '.$from_.'</p>
                                    <p>Client\'s Phone Number: '.$phone.'</p>
                                    
                                    <h3>Message: </h3>
                                    <p>'.$message.'</p>
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

</html>   ';
        

        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPAuth = true; 
 
        $mail->SMTPSecure = 'ssl'; 
        $mail->Host = 'mail.compassionatedrugrehab.com';
        $mail->Port = 465;  
        $mail->Username = 'info@compassionatedrugrehab.com';
        $mail->Password = 'cedi2020mail';   
   
   //   $path = 'reseller.pdf';
   //   $mail->AddAttachment($path);
   
        $from = "info@compassionatedrugrehab.com";
   
        $mail->IsHTML(true);
        $mail->From="info@compassionatedrugrehab.com";
        $mail->FromName=$from_name;
        $mail->Sender=$from;
        //$mail->setFrom("info@compassionatedrugrehab.com", "CEDI");
        $mail->AddReplyTo($from, "CEDI");
        $mail->Subject = "New Mail for CEDI";
        $mail->Body = $body;
        $mail->AddAddress('Abiodunfaith20@gmail.com', 'Faith');
        $mail->AddAddress('Sadegoke47@gmail.com', 'Sade');
        $mail->AddAddress('debodaniel55@gmail.com', 'Pst. Debo');
        $mail->AddAddress('niflasystems@gmail.com', 'Nifla ');
        $mail->AddAddress('compassionatedrugrehab@gmail.com', 'CEDI');
        
        if(!$mail->Send())
        {
            $error =false;
            return $error; 
        }
        else 
        {
            $error = true;  
            return $error;
        }
    }

    
    
    
    function emailRecieved($to, $to_name)
    {
        
        
        $arr = explode(' ',trim($to_name));
        $name_ = $arr[0]; // will print first name before the space.

        
        $body = '
            <html>
                
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
                            <figure class="figure" style="margin-right:auto;margin-left:auto;"><a href="index.html"><img class="img-fluid" src="https://compassionatedrugrehab.com/assets/img/cedi_logo.png" style="margin-top:12px;width:300px;"></a></figure>
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

</html> ';
        
        $from = "info@compassionatedrugrehab.com";

        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPAuth = true; 
 
        $mail->SMTPSecure = 'ssl'; 
        $mail->Host = 'mail.compassionatedrugrehab.com';
        $mail->Port = 465;  
        $mail->Username = 'info@compassionatedrugrehab.com';
        $mail->Password = 'cedi2020mail';   
   
   //   $path = 'reseller.pdf';
   //   $mail->AddAttachment($path);
   
        $mail->IsHTML(true);
        $mail->From=$from;
        $mail->FromName="CEDI Rehab";
        $mail->Sender=$from;
        $mail->AddReplyTo($from, "CEDI");
        $mail->Subject = "Email Recieved!";
        $mail->Body = $body;
        $mail->AddAddress($to, $name_);
   
        if(!$mail->Send())
        {
            $error = false;
            return $error; 
        }
        else 
        {
            $error = true;  
            return $error;
        }
    }
    
    
    
    
      if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['send_email']) &&  $_POST['send_email'] == "true") {

    //echo $_POST['email']; passed

    //die();

    $email_id = $_POST['email'];
    $full_name = $_POST['name'];
    $city = $_POST['city'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    
    

    if(sendEmail($email_id, $full_name, $city, $phone, $message)){

                    if(emailRecieved($email_id,  $full_name)){
                        //print_r (error_get_last());
                        echo "submitted";
                } else {
                    echo "error";
                }

  } else {
        echo "error";}
}

?>

