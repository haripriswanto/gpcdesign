<a href="https://api.whatsapp.com/send?phone=+6281315270227&text=Selamat %20Datang%21%20Di%20Graha%20Pesona%20Cikeas." class="wa" target="_blank">
    <i class="fab fa-whatsapp my-wa"></i>
</a>

<!--footer -->
<footer class="footer-sec-w3layouts py-lg-5 py-3">
    <div class="container">
        <div class="w3ls-inner-sec py-lg-4 py-3">
            <div class="row">
                <div class="col-lg-6 footer-left-info text-left">
                    <div class="logo">
                        <h2>
                            <a href="index.html">
                                <!-- <i class="fab fa-firstdraft"></i> GpC -->
                                <img src="images/2.logo.png" id="logo-bottom"> GpC
                            </a>
                        </h2>
                    </div>
                    <style>
                        #logo {
                            width: 8%;
                        }

                        a.navbar-brand {
                            margin: 0px;
                        }

                        #logo-bottom {
                            width: 10%;
                        }
                    </style>
                    <p class="my-5">
                        <a data-toggle="modal" href='#download' class="btn btn-success btn-outline-success">Download E-Brochure
                            <i class="fa fa-caret-right" aria-hidden="true"></i>
                        </a>
                    </p>

                </div>
                <div class="col-lg-6 footer-right-info text-right">
                    <h6>Address</h6>
                    <address class="ad-info mt-5">
                        <!-- <strong></strong> -->
                        <i class="fas fa-map-marker-alt mr-2"></i> Jl. Raya Bojong Nangka,
                        <br> Bojong Nangka, Kec. Gn. Putri, Bogor
                        <br>
                        <i class="fas fa-phone mr-2"></i> 0813 1527 0227
                    </address>

                </div>
            </div>
            <div class="row copyright-info mt-3">
                <div class="col-lg-6 copyright">
                    <p>&copy; 2020. Develope By Muhammad Aulia Ahsan |
                        <a href="https://www.instagram.com/muhamad.auliya.ahsan/" target="_blank"> MAA </a>
                    </p>
                </div>
                <div class="col-lg-6 social_media footer-icons text-right">
                    <ul class="text-right">
                        <li>
                            <a href="https://api.whatsapp.com/send?phone=+6281315270227&text=Selamat %20Datang%21%20Di%20Graha%20Pesona%20Cikeas." target="_blank" class="facebook text-center">
                                <i class="fab fa-whatsapp" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://web.facebook.com/graha.p.cikeas" target="_blank" class="facebook text-center">
                                <i class="fab fa-facebook-f" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/grahapesonacikeasofficial/" target="_blank" class="twitter text-center">
                                <i class="fab fa-instagram" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</footer>

<!-- //Custom-JavaScript-File-Links -->
<div class="modal fade" id="download">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg bg-primary text-center">
                <h5 class="modal-title">Fill This Form</h5>
                <i>To Download E-Brochure</i>
                <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> -->
            </div>
            <form method="post" action="#">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="fullName" name="fullName" placeholder="Full Name" autofocus="" required="">
                    </div>
                    <div class="form-group">
                        <input type="telp" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="Phone Number" required="">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required="">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Send</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- js -->
<script src="js/jquery-2.2.3.min.js"></script>
<!--slider-->
<!-- banner slider -->
<script src="js/responsiveslides.min.js"></script>
<!-- //banner slider -->
<!-- //dropdown nav -->
<script src="js/jquery.sliderPro.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<!-- /timeline -->
<script src="js/timeline.min.js"></script>
<!-- //js -->
<script src="js/bootstrap.js"></script>
<!--/ start-smoth-scrolling -->
<script src="js/move-top.js"></script>
<script src="js/easing.js"></script>

<script src="js/lightcase.js"></script>
<script src="js/jquery.events.touch.js"></script>

<script>
    $('.showcase').lightcase();

    // Sliders
    $(function() {
        $("#slider4").responsiveSlides({
            auto: true,
            pager: true,
            nav: false,
            speed: 1000,
            namespace: "callbacks",
            before: function() {
                $('.events').append("<li>before event fired.</li>");
            },
            after: function() {
                $('.events').append("<li>after event fired.</li>");
            }
        });
    });

    // Dropdown Nav
    $(document).ready(function() {
        $(".dropdown").hover(
            function() {
                $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                $(this).toggleClass('open');
            },
            function() {
                $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                $(this).toggleClass('open');
            }
        );
    });

    // FancyBox
    $(document).ready(function($) {
        $('#example2').sliderPro({
            width: 350,
            height: 400,
            visibleSize: '100%',
            forceSize: 'fullWidth',
            autoSlideSize: true
        });

        // instantiate fancybox when a link is clicked
        $(".slider-pro").each(function() {
            var slider = $(this);

            slider.find(".sp-image").parent("a").on("click", function(event) {
                event.preventDefault();

                if (slider.hasClass("sp-swiping") === false) {
                    var sliderInstance = slider.data("sliderPro"),
                        isAutoplay = sliderInstance.settings.autoplay;

                    $.fancybox.open(slider.find(".sp-image").parent("a"), {
                        index: $(this).parents(".sp-slide").index(),
                        afterShow: function() {
                            if (isAutoplay === true) {
                                sliderInstance.settings.autoplay = false;
                                sliderInstance.stopAutoplay();
                            }
                        },
                        afterClose: function() {
                            if (isAutoplay === true) {
                                sliderInstance.settings.autoplay = true;
                                sliderInstance.startAutoplay();
                            }
                        }

                    });
                }
            });
        });
    });

    // TimeLine
    timeline(document.querySelectorAll('.timeline'), {
        forceVerticalMode: 700,
        mode: 'horizontal',
        verticalStartPosition: 'left',
        visibleItems: 4
    });

    jQuery(document).ready(function($) {
        $(".scroll").click(function(event) {
            event.preventDefault();
            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 900);
        });
    });

    $(document).ready(function() {
        var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
        };

        $().UItoTop({
            easingType: 'easeOutQuart'
        });

    });
</script>
<!--// end-smoth-scrolling -->
</body>

</html>