<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<?php session_start(); ?>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Intensitee Custom Clothing - Screen Printing and Embroidery in Central Iowa.">
    <title>INTENSITEE Custom Screen Printing and Embroidery</title>
    <link rel="stylesheet" href="css/zurb/foundation.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Exo+2|Roboto+Slab|Roboto">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" type="text/css" href="slick/slick.css" />
    <link rel="stylesheet" href="slick/slick-theme.css"> </head>

<body>
    <div class="hero-section">
        <div class="hero-section-text">
            <h1 class="hero-title">Intensitee Custom Clothing</h1>
            <p class="hero-description">Incepted in 1992, Intensitee Inc. is a supplier of screen printed and embroidered apparel to schools, businesses, non-profit organizations and various types of sports teams across the United States. Located in Boone, Iowa, the firm provides a variety of logo shirts, ladies T-shirts, jackets, hats, crew and polos, etc. Additionally, Intensitee Inc. provides campus clothing for Universities, as well as local School Districts.
            </p>
        </div>
    </div>
    <div class="example-gallery">
        <div><img src="img/gallery/awards-case.jpeg"></div>
        <div><img src="img/gallery/bad-to-the-boone.jpg"></div>
        <div><img src="img/gallery/boone-golf.jpg"></div>
        <div><img src="img/gallery/design-wall.jpg"></div>
        <div><img src="img/gallery/fdny-racing.jpg"></div>
        <div><img src="img/gallery/hat-examples.jpg"></div>
        <div><img src="img/gallery/isu-mailbox.jpg"></div>
        <div><img src="img/gallery/shirt-colors.jpg"></div>
        <div><img src="img/gallery/toreador-playoffs.jpg"></div>
        <div><img src="img/gallery/we-wear-pink.jpeg"></div>
    </div>
    <div class="content-container">
        <div class="grid-container">
            <div class="locations-section">

                <div class="grid-x">
                    <div class="medium-6 cell">
                        <div class="section-header">
                            <h1>Our Locations</h1>
                        </div>
                        <div class="grid-x location">
                            <div class="large-6 cell ">
                                <h1 class="location-title">Intensitee Inc</h1>
                                <p class="location-address">
                                    1330 S Marshall St
                                    <br>Boone, Iowa
                                </p>
                                <p class="location-phone">
                                    (515) 432-9367
                                </p>
                            </div>
                            <div class=" large-6 cell">
                                <img class="location-image" src="img/storefronts/boone-location.jpg" alt="Intensitee Inc location in Boone, Iowa - Near the Boone Speedway">
                            </div>
                        </div>

                        <div class="grid-x location">
                            <div class="large-6 cell">
                                <h1 class="location-title">Intensitee Campus Clothing</h1>
                                <p class="location-address">
                                    133 Welch Ave
                                    <br>Ames, Iowa
                                </p>
                                <p class="location-phone">
                                    (515) 292-8639
                                </p>
                            </div>
                            <div class="large-6 cell">
                                <img class="location-image" src="img/storefronts/ames-location.jpg" alt="Intensitee Campus Clothing location in Ames, Iowa - near Iowa State University">
                            </div>
                        </div>
                    </div>
                    <div class="medium-6 cell contact">
                        <div class="section-header">
                            <h1>Send Us a Message</h1>
                        </div>
                        <!-- contact form -->
                        <form id="contact-form" class="contact-form" method="post" action="mailer.php">


                            <div class="error">
                                <?php echo $contactNameErrorMsg;?>
                            </div>
                            <div class="floated-label-wrapper">
                                <label for="contactName">Your Name</label>
                                <input type="text" id="contactName" name="contactName" placeholder="Your Name" value="<?php echo $contactName ?>">
                            </div>
                            <div class="error">
                                <?php echo $contactErrorMsg;?>
                            </div>
                            <div class="floated-label-wrapper">
                                <label for="contactEmail">Your Email</label>
                                <input type="text" id="contactEmail" name="contactEmail" placeholder="Your Email" value="<?php echo $contactEmail; ?>">
                            </div>
                            <div class="error">
                                <?php echo $contactPhoneErrorMsg;?>
                            </div>
                            <div class="floated-label-wrapper">
                                <label for="contactPhone">Your Phone Number</label>
                                <input type="tel" id="contactPhone" name="contactPhone" placeholder="Phone Number" value="<?php $contactPhone ?>">
                            </div>
                            <div class="error">
                                <?php echo $contactMsgErrorMsg;?>
                            </div>
                            <div class="floated-label-wrapper">
                                <textarea name="contactMsg" id="contactMsg" class="form textarea" placeholder="Your Message"><?php echo $contactMsg; ?></textarea>
                                <input type="submit" id="submit" name="submit" class="button expanded" value="Send Message">
                            </div>
                        </form>
                        <div class="email-status">
                            <h3>
                                <?php 
			             echo ($_SESSION['emailStatus']);
			             $_SESSION['emailStatus']=""
			             ?>
                            </h3>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="services-section">
        <div class="section-header">
            <h1>What We Do</h1>
        </div>
        <div class="content-container">
            <div class="grid-x">
                <div class="cell medium-6 large-3 service">
                    <h2 class="service-title">
                        Screen Printing
                    </h2>
                    <p class="service-description">
                        <em>Description of screenprinting services goes here</em>
                    </p>
                </div>
                <div class="cell medium-6 large-3 service">
                    <h2 class="service-title">
                        Embroidery
                    </h2>
                    <p class="service-description">
                        Description of embroidery services goes here
                    </p>
                </div>
                <div class="cell medium-6 large-3 service">
                    <h2 class="service-title">
                        Advertising Specialties
                    </h2>
                    <p class="service-description">
                        <em>Description of advertising specialty services goes here</em>
                    </p>
                </div>
                <div class="cell medium-6 large-3 service">
                    <h2 class="service-title">
                        Graphic Design
                    </h2>
                    <p class="service-description">
                        <em>Description of graphic design services goes here</em>
                    </p>
                </div>
            </div>
        </div>
    </div>





    <script src="js/vendor/jquery.js"></script>

    <script src="js/vendor/foundation.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="slick/slick.min.js"></script>
    <script src="js/app.js"></script>

</body>

</html>
