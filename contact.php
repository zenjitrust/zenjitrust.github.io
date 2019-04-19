<?php
include("includes/header.php")
?>

<div class="top-image">
    <img src="images/bg/bg8-event.jpg"/>
</div><!-- Page Top Image -->

<section class="inner-page">
    <div class="container">
        <div class="page-title">
            <h1>Contact <span>Us</span></h1>
        </div><!-- Page Title -->
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="contact-info col-sm-12">
                    <h3 class="sub-head">CONTACT INFORMATION</h3>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15868.209716598947!2d39.21171782586212!3d-6.12364662905652!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x185cd1431584578f%3A0x9582edaa0f956864!2sKibweni%2C+Zanzibar%2C+Tanzania!5e0!3m2!1sen!2sus!4v1554264881448!5m2!1sen!2sus" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    <p>Aenean sit a ametlandit a urna. Sed vehicula rhoncus tellus, quis accumsan nunc dicti quiis enean
                        sit amet nibh ut magna malesuada convallis. Quisque pulvinar odio et justo convalis
                        mollis.Aenean elit eros, molestie ac viverra nec, blandit a urna.</p>
                    <ul class="contact-details">
                        <li>
                            <span><i class="icon-home"></i>ADDRESS</span>
                            <p>MG/SH/G/167, Kibweni, Zanzibar</p>
                        </li>
                        <li>
                            <span><i class="icon-phone-sign"></i>PHONE NO</span>
                            <p><a href="tel:+255655559911" style="color: inherit; ">(+255) 655-559-911</a></p>
                        </li>
                        <li>
                            <span><i class="icon-envelope-alt"></i>EMAIL ID</span>
                            <p><a href="mailto:zenjistrust@gmail.com" style="color: inherit; ">Zenjistrust@gmail.com</a>
                            </p>
                        </li>
                        <li>
                            <span><i class="icon-youtube"></i>YOUTUBE CHANNEL</span>
                            <p><a href="https://www.youtube.com/channel/UCrtsRaCuZLUneXI_8FT8fVA" style="color: inherit; ">Mrisho Athuman</a></p>
                        </li>
                    </ul>
                </div>
            </div> <!-- Contact Info -->
            <div class="col-md-6 col-sm-12">
                <div class="form col-sm-12">
                    <h3 class="sub-head">CONTACT US BY MESSAGE</h3>
                    <p><strong>Please fill all required fields ( <span style="color: red">*</span> ) </strong></p>
                    <div id="message"></div>
                    <form method="post" action="" name="contactform" id="contactform">
                        <label for="name">Full name <span style="color: red">*</span></label>
                        <input name="name" class="form-control input-field" type="text" id="name" size="30" placeholder="Enter your full name" required />
                        <label for="email">Email Address <span style="color: red">*</span></label>
                        <input name="email" class="form-control input-field" type="email" id="email" size="30" placeholder="Enter your email address" required />
                        <label for="comments">Message <span style="color: red">*</span></label>
                        <textarea name="comments" id="comments" rows="7" class="form-control input-field" placeholder="Write your message here..." required></textarea>
                        <input type="submit" class="form-button submit" id="submit" value="SEND MESSAGE" />
                    </form>
                </div>
            </div> <!-- Message Form -->
        </div>
    </div>

    <section>
        <div class="work-section">
            <div class="social-connect">
                <div class="container">
                    <div class="social-div">
                        <h3 class="col-md-6">FIND US ON SOCIAL MEDIA:</h3>
                        <ul class="social-icons icon-circle icon-rotate list-unstyled list-inline col-md-6">
                            <li> <a href="#"><i class="fa fa-youtube"></i></a></li>
                            <li> <a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li> <a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li> <a href="#"><i class="fa fa-whatsapp"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--Social Media Bar -->
        </div>
    </section>
</section>
</div>

<?php
include("includes/footer.php")
?>