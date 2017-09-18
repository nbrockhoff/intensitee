<?php
	class Email 
	{
	    public $successMsg;
        public $submittedData;
        public $errorMsg;
		public $sendFrom;
		public $sendTo;
		public $message;
		public $subject;
		public $body;

		function __construct()
		{
		}
		
		function checkEmail(){
			if (isset($_POST["emailSubmit"])){
    //variables
      $successMsg;
      $submittedData;
      $errorMsg;
      $contactName=($_POST['contactName']);
      $contactNameErrorMsg;
      $contactEmail=($_POST['contactEmail']);
      $contactEmailErrorMsg;
      $contactPhone=($_POST['contactPhone']);
      $contactPhoneErrorMsg;
      $contactMsg=($_POST['contactMsg']);
      $contactCommentsErrorMsg;
      $valid;
      $formDisplay;
      $emailBody ="Name: ".$contactName."<br>";
      $emailBody.="Email: ".$contactEmail."<br>";
      $emailBody.="Phone: ".$contactPhone."<br>";
      $emailBody.="Message:".$contactMsg;


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



      if (empty($contactMsg)) {
        $valid=false;
        $contactCommentsErrorMsg ="Please add a message.";
      };

      if (preg_match("/(-\b)|(<)|(>)/", $contactMsg)){
        $valid=false;
        $contactMsgErrorMsg .= "Please use unformatted, alphanumeric characters.";
      }; 
			}

		}
		function set_sender($new_sender) {
			$this->sendFrom = $new_sender;
		}
		function get_sender(){
			return $this->sendFrom;
		}

		function set_sendTo($new_sendTo) {
			$this->sendTo = $new_sendTo;
		}
		function get_recipient(){	
			return $this->sendTo;
		}

		function set_message($new_message) {
			$this->message = $new_message;
		}
		function get_message(){
			return $this->message;
		}

		function set_subject($new_subject) {
			$this->subject = "New Inquiry from Website Contact Form";
		} 
		function get_subject(){
			return $this->subject;
		}

		function set_body(){
		$this->body .= "To: ".$this->sendTo."\r\n";
		$this->body .= "From: ".$this->sendFrom."\r\n";
		$this->body .="Message: ".$this->message;
		}

		function get_body(){
			return $this->body;
		}

		function sendEmail(){	
			mail($this->sendTo,$this->subject,$this->body,$this->sendFrom);
		}			
	}	
?>