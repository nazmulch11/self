<?php 

global $self;

?>

<div id="contact" class="contact-area area-padding">
    <div class="head-overly"></div>
    <div class="container">
        <div class="row contact-inner">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div class="Cont-content ">
                    <h4 class="intro-head">Contact us</h4>
                </div>
                <div class="map-zone">
                    <!-- Map area -->
                    <div class="map-area">
                        <div id="googleMap" style="width:100%;height:320px;"></div>
                    </div><!-- End Map area -->
                    <div class="contact-info">
                        <div class="contact-icons">
                            <h3><?php echo $self['self-contact-info-title']; ?></h3>
                            <ul>
                                <li>
                                    <i class="fa fa-map-marker"></i> <strong>Address</strong>
                                     
                                     <?php echo $self['self-contact-address']; ?>
                                </li>
                                <li>
                                    <i class="fa fa-mobile"></i> <strong>Phone</strong>
                                    <?php echo $self['self-contact-phone']; ?>
                                </li>
                                <li>
                                    <i class="fa fa-envelope"></i> <strong>Email</strong>
                                    <a href="#"><?php echo $self['self-contact-email']; ?></a>
                                </li>
                            </ul>
                        </div>
                        <div class="icons-bottom text-center">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
                <div class="contact-form">
                    <div class="Cont-content">
                        <h4 class="intro-head">Leave a massege</h4>
                    </div>
                    <div class="row contact-bg">
                        <form action="mail.php" method="post">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <input name="name" type="text" placeholder="Name (required)" />
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <input name="email" type="email" placeholder="Email (required)" />
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <input name="subject" type="text" placeholder="Subject" />
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <textarea name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                                <input type="submit" value="Submit Form" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>