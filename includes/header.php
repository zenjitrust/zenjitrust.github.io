<!DOCTYPE html>
<html>

<head>
    <title>Zenji Humanitarian Trust</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include("links.php")
    ?>
    <style>
        .modal-header,
        .heading-modal,
        .close {
            background-color: #66BD37;
            color: white !important;
            text-align: center;
            font-size: 30px;
            border-top-left-radius: 18px;
            border-top-right-radius: 18px;
            margin-top: -2px;
        }

        .modal-content,
        .modal-body {
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
        }

        .modal-footer {
            background-color: #f9f9f9;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
        }
    </style>

    <script>
        $(window).load(function() {
            $('.our-causes').flexslider({
                animation: "slide",
                animationLoop: false,
                controlNav: true,
                maxItems: 1,
                pausePlay: false,
                mousewheel: false,
            });
            $(".slideshow").flexslider({
                animation: "fade",
                animationLoop: false,
                slideShow: false,
                controlNav: true,
                maxItems: 1,
                pausePlay: false,
                mousewheel: false,
            });
            $(".footer_carousel").flexslider({
                animation: "slide",
                animationLoop: false,
                slideShow: false,
                controlNav: true,
                maxItems: 1,
                pausePlay: false,
                mousewheel: false,
            });
        });
        $(document).ready(function() {
            $(function() {
                $("#carousel").carouFredSel({
                    responsive: true,
                    circular: false,
                    auto: false,
                    items: {
                        visible: 1,
                        width: 20,
                    },
                    scroll: {
                        fx: "directscroll"
                    }
                });
                $("#thumbs").carouFredSel({
                    responsive: true,
                    circular: false,
                    infinite: false,
                    auto: false,
                    prev: "#prev",
                    next: "#next",
                    items: {
                        visible: {
                            min: 1,
                            max: 6
                        },
                        width: 200,
                        height: "80%"
                    }
                });
                $("#thumbs a").click(function() {
                    $("#carousel").trigger("slideTo", "#" + this.href.split("#").pop());
                    $("#thumbs a").removeClass("selected");
                    $(this).addClass("selected");
                    return false;
                });
            });
        });
    </script>
    <!-- Scripts For Layer Slider  -->
    <script src="layerslider/js/greensock.js" type="text/javascript"></script>
    <!-- LayerSlider script files -->
    <script src="layerslider/js/layerslider.transitions.js" type="text/javascript"></script>
    <script src="layerslider/js/layerslider.kreaturamedia.jquery.js" type="text/javascript"></script>
    <script>
        $(document).ready(function() {
            jQuery("#layerslider").layerSlider({
                responsive: true,
                responsiveUnder: 1280,
                layersContainer: 1170,
                skin: "fullwidth",
                hoverPrevNext: true,
                skinsPath: "layerslider/skins/"
            });
        });
    </script>

</head>

<body>
    <!-- normal top bar-->
    <div class="container-fluid">
        <div class="theme-layout ">
            <div id="top-bar" class="modern">
                <div class="container">

                    <ul>
                        <li>
                            <i class="icon-home"></i>
                            MG/SH/G/167, Kibweni, Zanzibar
                        </li>
                        <li>
                            <i class="icon-phone"></i>
                            <a href="tel:+255655559911" style="color: inherit; ">(+255) 655-559-911</a>
                        </li>
                        <li>
                            <i class="icon-envelope"></i>
                            <a href="mailto:zenjistrust@gmail.com" style="color: inherit; ">Zenjistrust@gmail.com</a>
                        </li>
                        <li>

                            <a class="login-btn" href="#" target="_blank" style="padding: 4px 10px;"><i class="icon-inbox"></i> Staff Mail</a>
                            <a class="login-btn" data-toggle="modal" data-target="#login" data-backdrop="static" style="padding: 4px 10px;"><i class="icon-signin"></i> Login</a>
                        </li>
                    </ul>
                    <div class="header-social">
                        <ul>
                            <li><a href="#"><i class="icon-google-plus"></i></a></li>
                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                            <li><a href="#"><i class=" icon-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- normal top bar end-->

            <!--Normal Navigation Bar-->
            <header class="header2">
                <div class="container">
                    <div class="logo" style="margin-bottom: -15px; margin-top: -8px;">
                        <a href="index.php" title="Zenji Humanitarian Trust"><img src="images/zenjitrust.png" alt="Zenji Trust logo" height="80px" /></a>
                    </div><!-- Logo -->
                    <a class="header-btn animated bounceIn delay-1s" href="#" style="margin-top: 30px;">DONATE
                        NOW</a>
                    <nav class="menu">
                        <ul id="menu-navigation">
                            <li class="active"><a href="index.php"><i class="icon-home"></i>Home</a>
                            <li><a href="about.php"><i class="icon-user"></i>About Us</a></li>
                            <li><a href="projects.php"><i class="fa fa-th-list"></i>Projects</a></li>
                            <li><a href="gallery.php"><i class="fa fa-image"></i>Gallery</a></li>
                            <li><a href="partners.php"><i class="fa fa-users"></i>Partners</a></li>
                            <li><a href="events.php"><i class="icon-calendar"></i>Events</a></li>
                            <li><a href="contact.php"><i class="icon-phone"></i>Contact</a></li>
                        </ul>
                    </nav><!-- Menu -->
                </div>
            </header>
            <!--Normal Navigation Bar End-->

            <!-- responsive Navigation bar -->
            <div class="responsive-header">
                <div class="responsive-topbar">
                    <div class="responsive-topbar-info">

                        <div class="container" style="color: white; text-align: center;">
                            <span><i class="fa fa-home"></i> MG/SH/G/167, Kibweni, Zanzibar</span>
                            <div class="responsive-socialbtns">
                                <ul>
                                    <li><a href="tel:+255655559911"><i class="fa fa-phone"></i></a></li>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                    <li><a href="mailto:zenjistrust@gmail.com"><i class="fa fa-envelope"></i></a>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="responsive-logomenu">
                    <div class="container">
                        <a href="index.php"><img src="images/zenjitrust.png" width="80%" height="80px" style="margin-bottom: -70px; margin-top: -20px;" alt="Zenji Trust Logo" /> </a>
                        <span class="menu-btn" style="width: 35px; height: 30px"><i class="fa fa-navicon" style="font-size: 25px"></i></span>
                    </div>
                </div>
                <div class="responsive-menu">
                    <span class="close-btn"><i class="fa fa-close"></i></span>
                    <ul>
                        <li><a href="index.php"><i class="fa fa-home responsive-icon"></i> Home</a></li>
                        <li><a href="about.php"><i class="icon-user responsive-icon"></i> About Us</a></li>
                        <li><a href="projects.php"><i class="fa fa-th-list responsive-icon"></i> Projects</a></li>
                        <li><a href="gallery.php"><i class="fa fa-image responsive-icon"></i> Gallery</a> </li>
                        <li><a href="partners.php"><i class="fa fa-users responsive-icon"></i> Partners</a> </li>
                        <li><a href="events.php"><i class="icon-calendar responsive-icon"></i> Events</a></li>
                        <li><a href="contact.php"><i class="icon-phone responsive-icon"></i>Contact</a></li>
                        <li><a data-toggle="modal" data-target="#login" data-backdrop="static"><i class="icon-signin responsive-icon"></i>Login</a></li>
                        <li><a class="close-login" href="#" target="_blank"><i class="icon-inbox responsive-icon"></i>Staff Mail</a></li>
                    </ul>
                </div>
                <button class="responsive-donate" style="background: #66bd37">Donate Now</button>
            </div>
            <!-- Responsive Navigation bar -->

            <!-- Login Modal -->

            <div class="modal fade col-md-12 col-sm-12 col-xs-12" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="z-index: 99999999999999999999999999999999">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="heading-modal"><span class="fa fa-lock"></span> Login</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>

                        </div>
                        <div class="modal-body">
                            <form role="form">
                                <div class="form-group">
                                    <label for="usrname"><span class="fa fa-user"></span> Email:</label>
                                    <input type="email" class="form-control" id="usrname" placeholder="Enter your email address" required>
                                </div>
                                <div class="form-group">
                                    <label for="psw"><span class="fa fa-eye"></span> Password:</label>
                                    <input type="password" class="form-control" id="psw" placeholder="Enter your password" required>
                                </div>
                                <a href="#"><button type="submit" class="btn btn-success btn-block login">
                                        <span class="fa fa-sign-in"></span> Login</button></a>
                            </form>
                        </div>
                        <div class="modal-footer" style="margin-top: 23px;">
                            <h6 style="color: red;" class="text-left" style="width: 64%;"><b>(For authorized users only)</b></h6>
                            <button type="submit" class="btn btn-danger btn-default" data-dismiss="modal" style="margin-top: -15px;" pan class="fa fa-remove"></span> Cancel</button>
                            <!-- <h6 style="float: left;">(For authorized users only)</h6> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Login Modal -->