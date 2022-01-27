<?php
    //  if (isset($_POST['submit'])) {
        $fname = $_REQUEST['fname'];
        $lname = $_REQUEST['lname'];
        $mobile = $_REQUEST['mobile'];
        $email = $_REQUEST['email'];
        $checkindate = $_REQUEST['date_1'];
        $checkoutdate = $_REQUEST['date_2'];
        $special_request = $_REQUEST['request'];
        
			
        $message = "Name: ". $fname. " ".$lname. "\r\n";
        $message .= "Email: ".$email. "\r\n";
        $message .= "Mobile Number: ".$mobile. "\r\n";
        $message .= "Check In Date: ".$checkindate. "\r\n";
        $message .= "Check Out Date: ".$checkoutdate. "\r\n";
        
        
        // Set your email address where you want to receive emails. 
        $to = 'info@roomsinmedaram.in';
       $headers = "From:" . $_REQUEST["email"] . "\r\n";
       $headers = "CC:" . $cc . "\r\n";
    
    	$headers = $headers . "MIME-Version: 1.0" . "\r\n";
    	$headers = $headers . "Content-type: text/html; Charset=iso-8859-1" . "\r\n";
    	
       $subject = 'Request For Room Enquiry';
    
       $headers = "From: ".$name;
       mail($to,$subject,$message,$headers);

    //   echo ($send_email) ? 'success' : 'error';

//   }
?>