<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from www.madebydesignesia.com/themes/rentaly/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 May 2024 07:16:56 GMT -->

<head>
    <title>Rentaly - Multipurpose Vehicle Car Rental Website Template</title>
    <link rel="icon" href="images/icon.png" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Rentaly - Multipurpose Vehicle Car Rental Website Template" name="description">
    <meta content="" name="keywords">
    <meta content="" name="author">
    <!-- CSS Files
    ================================================== -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap">
    <link href="css/mdb.min.css" rel="stylesheet" type="text/css" id="mdb">
    <link href="css/plugins.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/coloring.css" rel="stylesheet" type="text/css">
    <!-- color scheme -->
    <link id="colors" href="css/colors/scheme-01.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div id="wrapper">

        <!-- page preloader begin -->
        <div id="de-preloader"></div>
        <!-- page preloader close -->

        <!-- header begin -->
        <?php include('header.php') ?>

        <!-- header close -->
        <!-- content begin -->
        <div class="no-bottom no-top" id="content">
            <div id="top"></div>

            <!-- section begin -->
            <section id="subheader" class="jarallax text-light">
                <img src="images/background/subheader.jpg" class="jarallax-img" alt="">
                <div class="center-y relative text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h1>Contact Us</h1>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- section close -->


            <section aria-label="section">
                <div class="container">
                    <div class="row g-custom-x">

                        <div class="col-lg-8 mb-sm-30">

                            <h3>Do you have any question?</h3>

                            <form name="contactForm" id="feedbackForm" class="form-border" method="post" action="feedback.php">
                                <div class="row">
                                    <div class="col-md-4 mb10">
                                        <div class="field-set">
                                            <input type="text" name="name" id="name" class="form-control" placeholder="Your Name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb10">
                                        <div class="field-set">
                                            <input type="text" name="email" id="email" class="form-control" placeholder="Your Email" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb10">
                                        <div class="field-set">
                                            <input type="text" name="phone" id="phone" class="form-control" placeholder="Your Phone" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="field-set mb20">
                                    <textarea style="padding-bottom: 100px" name="message" id="message" class="form-control" placeholder="Your Message" required></textarea>
                                </div>
                                <div id='submit' class="mt20">
                                    <button type='submit' id='send_message' class="btn-main">Send Message</button>
                                </div>
                                <div id="success_message" class='success'>
                                    Your message has been sent successfully. Refresh this page if you want to send more messages.
                                </div>
                                <div id="error_message" class='error'>
                                    Sorry there was an error sending your form.
                                </div>
                            </form>
                        </div>

                        <div class="col-lg-4">

                            <div class="de-box mb30">
                                <h4>US Office</h4>
                                <address class="s1">
                                    <span><i class="id-color fa fa-map-marker fa-lg"></i>08 W 36th St, New York, NY 10001</span>
                                    <span><i class="id-color fa fa-phone fa-lg"></i>+1 333 9296</span>
                                    <span><i class="id-color fa fa-envelope-o fa-lg"></i><a href="mailto:contact@example.com">contact@example.com</a></span>
                                    <span><i class="id-color fa fa-file-pdf-o fa-lg"></i><a href="#">Download Brochure</a></span>
                                </address>
                            </div>


                            <div class="de-box mb30">
                                <h4>AU Office</h4>
                                <address class="s1">
                                    <span><i class="fa fa-map-marker fa-lg"></i>100 Mainstreet Center, Sydney</span>
                                    <span><i class="fa fa-phone fa-lg"></i>+61 333 9296</span>
                                    <span><i class="fa fa-envelope-o fa-lg"></i><a href="mailto:contact@example.com">contact@example.com</a></span>
                                    <span><i class="fa fa-file-pdf-o fa-lg"></i><a href="#">Download Brochure</a></span>
                                </address>
                            </div>

                        </div>

                    </div>
                </div>

            </section>

        </div>
        <!-- content close -->

        <a href="#" id="back-to-top"></a>

        <!-- footer begin -->
        <?php include("footer.php") ?>

        <!-- footer close -->

    </div>


    <!-- Javascript Files
    ================================================== -->
    <script src="js/plugins.js"></script>
    <script src="js/designesia.js"></script>
    <script src='../../../www.google.com/recaptcha/api.js' async defer></script>
    <script src="form.js"></script>
</body>


<!-- Mirrored from www.madebydesignesia.com/themes/rentaly/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 May 2024 07:16:56 GMT -->

</html>