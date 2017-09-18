<html>
    <?php session_start(); ?>
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
        #contact{
            padding:10px 0 10px;
          }
        
        .contact-text{
            margin:45px auto;
          }
        
        .mail-message-area{
            width:100%;
            padding:0 15px;
          }

        .mail-message{
            width: 100%;
            background:rgba(255,255,255, 0.8) !important;
            -webkit-transition: all 0.7s;
            -moz-transition: all 0.7s;
            transition: all 0.7s;
            margin:0 auto;
            border-radius: 0;
          }

        .not-visible-message{
            height:0px;
            opacity: 0;
          }

        .visible-message{
            height:auto;
            opacity: 1;
            margin:25px auto 0;
          }

/* Input Styles */

  .form{
    width: 100%;
    padding: 15px;
    background:#f8f8f8;
    border:1px solid rgba(0, 0, 0, 0.075);
    margin-bottom:25px;
    color:#727272 !important;
    font-size:13px;
    -webkit-transition: all 0.4s;
    -moz-transition: all 0.4s;
    transition: all 0.4s;
  }

  .form:hover{
    border:1px solid #8BC3A3;
  }

  .form:focus{
    color: white;
    outline: none;
    border:1px solid #8BC3A3;
  }

  .textarea{
    height: 200px;
    max-height: 200px;
    max-width: 100%;
  }
  
/* Generic Button Styles */

  .button{
    padding:8px 12px;
    background:#0A5175;
    display: block;
    width:120px;
    margin:10px 0 0px 0;
    border-radius:3px;
    -webkit-transition: all 0.3s;
    -moz-transition: all 0.3s;
    transition: all 0.3s;
    text-align:center;
    font-size:0.8em;
    box-shadow: 0px 1px 4px rgba(0,0,0, 0.10);
    -moz-box-shadow: 0px 1px 4px rgba(0,0,0, 0.10);
    -webkit-box-shadow: 0px 1px 4px rgba(0,0,0, 0.10);
  }

  .button:hover{
    background:#8BC3A3;
    color:white;
  }

/* Send Button Styles */

  .form-btn{
    width:180px;
    display: block;
    height: auto;
    padding:15px;
    color:#fff;
    background:#8BC3A3;
    border:none;
    border-radius:3px;
    outline: none;
    -webkit-transition: all 0.3s;
    -moz-transition: all 0.3s;
    transition: all 0.3s;
    margin:auto;
    box-shadow: 0px 1px 4px rgba(0,0,0, 0.10);
    -moz-box-shadow: 0px 1px 4px rgba(0,0,0, 0.10);
    -webkit-box-shadow: 0px 1px 4px rgba(0,0,0, 0.10);
  }

  .form-btn:hover{
    background:#111;
    color: white;
    border:none;
  }

  .form-btn:active{
    opacity: 0.9;
  }
    </style>
    </head>
    <body>
        <div class="container">
            <div class="inner contact">
                <!-- Form Area -->
                <div class="contact-form">
                    <!-- Form -->
                    <form id="contact-us" method="POST" action="contact.php">
                        <div id="legend">
			              <legend class="">Contact Us</legend>
			             </div>
			             
			             <div class="session-message">
			                 <h3><?php echo ($_SESSION['sessionMessage']);?></h3>
			                 <h3><?php echo $successMsg;?></h3>
			                 <h3><?php echo $errorMsg;?></h3>
			                 <ul class="error-messages">
			                   <li><?php $contactNameErrorMsg;?></li>
			                   <li><?php echo $contactEmailErrorMsg;?></li>
			                   <li><?php echo $contactSubjectErrorMsg;?></li>
			                   <li><?php echo $contactMsgErrorMsg;?></li>
			                 </ul>
			             </div>
                        <!-- Left Inputs -->
                        <div class="col-xs-6">
                            <!-- Name -->
                            <input type="text" name="contactName" id="contactName" class="form" placeholder="Name" value="<?php echo $contactName; ?>" />
                            <!-- Email -->
                            <input type="email" name="contactEmail" id="contactEmail" class="form" placeholder="Email" value="<?php echo $contactEmail; ?>"/>
                            <!-- Subject -->
                            <input type="tel" name="contactPhone" id="contactPhone"  class="form" placeholder="Your Phone" value="<?php echo $contactPhone; ?>" />
                        </div><!-- End Left Inputs -->
                        <!-- Right Inputs -->
                        <div class="col-xs-6">
                            <!-- Message -->
                            <textarea name="contactMsg" id="contactMsg" class="form textarea"  placeholder="Your Message"><?php echo $contactMsg; ?></textarea>
                        </div><!-- End Right Inputs -->
                        <!-- Bottom Submit -->
                        <div class="relative fullwidth col-xs-12">
                            <!-- Send Button -->
                            <input type="submit" id="submit" name="submit" class="form-btn semibold" value="Send Message"> 
                        </div><!-- End Bottom Submit -->
                        <!-- Clear -->
                        <div class="clear"></div>
                    </form>


                </div><!-- End Contact Form Area -->
            </div><!-- End Inner -->