<?php
require_once 'inc/email.class.php';

        

  if (isset($_POST["submit"])){
    //variables
      
      $contactName=($_POST['contactName']);
      $contactNameErrorMsg;
      $contactEmail=($_POST['contactEmail']);
      $contactEmailErrorMsg;
      $contactPhone=($_POST['contactPhone']);
      $contactPhoneErrorMsg;
      $contactMsg=($_POST['contactMsg']);
      $contactMsgErrorMsg;
      $valid;
      $formDisplay;
      $emailBody=$contactMsg;


        if (empty(trim($contactName))==true){

            

        $valid = false;
        $contactNameErrorMsg="Please enter your name.";

        } elseif ($contactName != strip_tags($contactName)){
        
          $valid=false;
          $contactNameErrorMsg="Please use alphanumeric characters only to enter your name.";
          } else {
          $valid=true;
        };

          if (empty($contactEmail) == true){
          $valid = false;
          $contactEmailErrorMsg="Please enter your email.";
          } elseif (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$contactEmail)){
          $valid = false;
          $contactEmailErrorMsg="Please enter a valid email.";

        } else {
          $valid=true;
      };




      if (preg_match("/(-\b)|(<)|(>)/", $contactMsg)){
        $valid=false;
        $contactMsgErrorMsg .= "Please use unformatted, alphanumeric characters.";
      }; 

      if($valid==true){
          $formDisplay = "hide-form";
          $successMsg = "Success! Your form has been submitted.";
          // echo "Made it past success";
          $submitTimestamp = date("M j, Y H:i:s");
          $formSubmitTime = date("H:i:s");
          $formSubmitDate = date("m/d/Y");

        


            

         // echo "<br>Made it past timestamp";

          $emailBody .=  "Name: ".$contactName."\r\n";
        $emailBody .=  "Your Email: ".$contactEmail."\r\n";
        $emailBody .=  "Phone: ".$contactPhone."\r\n";
        $emailBody .=  "Message: ".$emailBody."\r\n";
        $emailBody.=  "Submitted: ".$submitTimestamp." GMT \r\n";

         // echo "<br>Made it past submitted data";
          
          $newEmail = new Email();
          
          // echo "Made it past new Email";
          $newEmail->set_sendTo("nderrb@gmail.com");
          $newEmail->set_sender($contactEmail);
          $newEmail->set_message($emailBody);
          $newEmail->set_subject("New Inquiry via Website Contact Form");
          $newEmail->set_body();
          $newEmail->sendEmail();
          
         // echo "Made it past sendEmail";
          
        } else {
          $errorMsg = "We're sorry - the form did not submit. Please fill out all fields.";
        };
      };
      require_once('tpl/contact.tpl.php'); 
   ?>