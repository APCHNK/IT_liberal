    <link rel="stylesheet" href="./assets/css/animate.css" type="text/css" />
    <!-- FOR MODAL -->
    <script src="./assets/js/classie.js"></script>
    <script src="./assets/js/modalEffects.js"></script>
    <script src="./assets/js/cssParser.js"></script>
    <!-- FOR MODAL -->

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/jquery.maskedinput.js"></script>
    <script src="./assets/js/wow.min.js"></script>

    <!-- https://github.com/verlok/vanilla-lazyload#-getting-started---html -->
    <script src="./assets/js/lazyload.js"></script>

    <!-- Counter -->
    <script src="./assets/js/counter/jquery.cookie.js"></script>
    <script src="./assets/js/counter/jquery.plugin.js"></script>
    <script src="./assets/js/counter/jquery.countdown.js"></script>
    <script src="./assets/js/counter/jquery.countdown-ru.js"></script>
    <script>
        var endDateTime = new Date();
        var nowDateTime = new Date(3600 * 24 * 1000);
    </script>
    <!-- End Counter -->
    <script src="https://www.youtube.com/iframe_api"></script>
    <script src="./assets/js/script.js"></script>

    <link rel="stylesheet" href="./assets/css/swiper/swiper-bundle.min.css">
    <script src="./assets/js/swiper/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 4.8,
            loop: true,
            spaceBetween: 50,
            autoplay: true,
            breakpoints: {
                // when window width is >= 320px
                320: {
                    slidesPerView: 2,
                    spaceBetween: 20
                },
                // when window width is >= 480px
                480: {
                    slidesPerView: 3,
                    spaceBetween: 30
                },
                // when window width is >= 640px
                640: {
                    slidesPerView: 4,
                    spaceBetween: 40
                },
                768: {
                    slidesPerView: 5,
                    spaceBetween: 40
                },
                992: {
                    slidesPerView: 4.8,
                    spaceBetween: 40
                }
            }
        });
    </script>
    <script>
        AOS.init();
    </script>
    <script>
        $(document).ready(function() {
            //плавный скролл
            var $page = $("html, body");
            $('a[href*="#"]').click(function() {
                $page.animate({
                        scrollTop: $($.attr(this, "href")).offset().top,
                    },
                    400
                );
                return false;
            });
            //
            //закрытие меню при клике
            $("#mobile-menu ul a").click(function() {
                $("#mobile-menu").removeClass("show_mobile_menu");
                $("#burger-menu").removeClass("active");
            });
            //
        });
    </script>
    </body>

    </html>