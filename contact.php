<?php include('header.php') ?>

        <!-- page-title -->
        <section class="page-title centred">
            <div class="bg-layer" style="background-image: url(assets/images/background/page-title2.jpg);"></div>
            <div class="pattern-layer">
                <div class="pattern-1" style="background-image: url(assets/images/shape/shape-18.png);"></div>
                <div class="pattern-2" style="background-image: url(assets/images/shape/shape-17.png);"></div>
            </div>
            <div class="auto-container">
                <div class="content-box">
                    <h1>Contact Us</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.php">Home</a></li>
                        <li>Contact Us</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- page-title end -->


        <!-- contact-info-section -->
        <section class="contact-info-section centred pt_120 pb_90">
            <div class="auto-container">
                <div class="sec-title mb_70">
                    <h6>Contact US</h6>
                    <h2>Contact Details</h2>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 info-column">
                        <div class="info-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-2"></i></div>
                                <h3>Our Location</h3>
                                <p><b>C.O :</b>  West Chithirai Street, Srirangam</p>
                                <p><b>B.O :</b>  BHEL  A Sector, Trichy</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 info-column">
                        <div class="info-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-43"></i></div>
                                <h3>Email Address</h3>
                                <p><a href="mailto:support@rajagopuram.in">support@rajagopuram.in</a><br></p>
                                <p><a href="mailto:rajagopuram@gmail.com">rajagopuram@gmail.com</a><br></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 info-column">
                        <div class="info-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-44"></i></div>
                                <h3>Phone Number</h3>
                                <p><a href="tel:+918646012345">+91 86460 12345</a></p>
                                <p><a href="tel:+918190001234">+91 81900 01234</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-info-section end -->


        <!-- google-map-section -->
        <section class="google-map-section pb_120">
            <div class="auto-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.3337754966724!2d78.68534327417392!3d10.86219805760757!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3baaf79f87e00831%3A0x506c5cb348e40485!2srajagopuram%20wealth%20management!5e0!3m2!1sen!2sin!4v1701772983354!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>
        <!-- google-map-section end -->


        <!-- contact-section -->
        <section class="contact-section pt_120 pb_120">
            <div class="auto-container">
                <div class="sec-title centred mb_70">
                    <h6>Contact US</h6>
                    <h2>Contact Details</h2>
                </div>
                <div class="form-inner">
                    <form method="post" action="mail.php" id="contact-form" class="default-form" autocomplete="off">
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <input type="text" name="name" placeholder="Your Name" required="">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <input type="email" name="email" placeholder="Your email" required="">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <input type="text" name="mobile" required="" placeholder="Mobile Number">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <input type="text" name="subject" required="" placeholder="Subject">
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <textarea name="message" placeholder="Type message"></textarea>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn centred">
                                <button class="theme-btn btn-one" type="submit" name="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!-- contact-section end -->

        <?php include('footer.php') ?>