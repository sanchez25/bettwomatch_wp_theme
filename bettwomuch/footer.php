<footer style="background-image: url(<?php echo get_template_directory_uri() ?>/img/footer-back.jpg)">
    <div class="footer-block">
        <div class="footer-logo">
            <a href="/">
                <img class="footer-logo-img" src="<?php echo get_template_directory_uri() ?>/img/bet2mutch-logo.png">
            </a>
        </div>
        <div class="footer-menu">
            <?php wp_nav_menu([ 'menu' => 'Футер' ]); ?>
        </div>
    </div>
</footer>

<div id="button-up">
    <svg version="1.1" id="Capa_1" class="up-ikon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
        viewBox="0 0 490.523 490.523" style="enable-background:new 0 0 490.523 490.523;" xml:space="preserve">
        <path style="fill:#FFC107;" d="M487.411,355.047L252.744,120.38c-4.165-4.164-10.917-4.164-15.083,0L2.994,355.047
            c-4.093,4.237-3.976,10.99,0.262,15.083c4.134,3.993,10.687,3.993,14.821,0l227.115-227.115l227.115,227.136
            c4.237,4.093,10.99,3.976,15.083-0.261c3.993-4.134,3.993-10.688,0-14.821L487.411,355.047z"/>
        <path d="M479.859,373.266c-2.831,0.005-5.548-1.115-7.552-3.115L245.192,143.015L18.077,370.151
            c-4.237,4.093-10.99,3.976-15.083-0.262c-3.993-4.134-3.993-10.687,0-14.821l234.667-234.667c4.165-4.164,10.917-4.164,15.083,0
            l234.667,234.667c4.159,4.172,4.148,10.926-0.024,15.085C485.388,372.146,482.681,373.265,479.859,373.266z"/>
    </svg>
</div>

<?php wp_footer(); ?>
<script>
    jQuery(document).ready(function ($) {
        $('.menu-mobile-button').on('click', function() {
  			    $('.mobile-menu').addClass('active');
		    });

        $('.close-block-button').on('click', function() {
            $('.mobile-menu').removeClass('active');
        });

        $(".slick-slider").slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            arrows: true,
            vertical: false,
            autoplay: true,
            autoplaySpeed: 5000,
            verticalSwiping: true,
            responsive: [
                {
                    breakpoint: 1440,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 861,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 641,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });

        $(".bonuses-block-content").slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            arrows: true,
            vertical: false,
            autoplay: true,
            autoplaySpeed: 5000,
            verticalSwiping: true,
            responsive: [
                {
                    breakpoint: 1440,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 861,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 641,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });

        $(".slick-slider-forecasts").slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            arrows: true,
            vertical: false,
            autoplay: true,
            autoplaySpeed: 5000,
            verticalSwiping: true,
            responsive: [
                {
                    breakpoint: 1440,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 861,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 641,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });

        $("#owl-slider").owlCarousel ({
            navigation: false,
            dots: false,
            nav: true,
            slideSpeed: 300,
            paginationSpeed: 400,
            singleItem: true,
            items: 9, 
            animateOut: 'fadeOut', 
            autoplay: false,
            autoplayHoverPause: true,
            autoplayTimeout: 3000,
            loop: true,
            itemsDesktop: false,
            itemsDesktopSmall: false,
            itemsTablet: false,
            itemsMobile: false,
            responsive: {
                0: {
                    items: 1,
                },
                425: {
                    items: 2,
                },
                640: {
                    items: 3,
                },
                768: {
                    items: 4,
                },
                860: {
                    items: 5,
                },
                1024: {
                    items: 6,
                },
                1152: {
                    items: 7,
                },
                1360: {
                    items: 8,
                }
            }
        });

        $("#owl-slider-bundesteam").owlCarousel ({
            navigation: false,
            dots: false,
            nav: false,
            slideSpeed: 300,
            paginationSpeed: 400,
            singleItem: true,
            items: 9, 
            animateOut: 'fadeOut', 
            autoplay: false,
            autoplayHoverPause: true,
            autoplayTimeout: 3000,
            loop: true,
            itemsDesktop: false,
            itemsDesktopSmall: false,
            itemsTablet: false,
            itemsMobile: false,
            responsive: {
                0: {
                    items: 1,
                },
                425: {
                    items: 2,
                },
                640: {
                    items: 3,
                },
                768: {
                    items: 4,
                },
                860: {
                    items: 5,
                },
                1024: {
                    items: 6,
                },
                1152: {
                    items: 7,
                },
                1360: {
                    items: 8,
                }
            }
        });

        $('#btn-title-one').click(function(){
            $('.content-title-block').removeClass('click');
            $(this).addClass('click');
            $('.content-table').show();
            $('.content-table-tomorrow').hide();
        });

        $('#btn-title-two').click(function(){
            $('.content-title-block').removeClass('click');
            $(this).addClass('click');
            $('.content-table-tomorrow').show();
            $('.content-table').hide();
        });

        $('#title-champions').click(function(){
            $('.tabs-leagues-item').removeClass('check');
            $(this).addClass('check');
            $('.block-content-league').show();
            $('.block-content-europe').hide();
            $('.block-content-germany').hide();
        });

        $('#title-europe').click(function(){
            $('.tabs-leagues-item').removeClass('check');
            $(this).addClass('check');
            $('.block-content-europe').show();
            $('.block-content-league').hide();
            $('.block-content-germany').hide();
        });

        $('#title-bundesteam').click(function(){
            $('.tabs-leagues-item').removeClass('check');
            $(this).addClass('check');
            $('.block-content-germany').show();
            $('.block-content-europe').hide();
            $('.block-content-league').hide();
        });

        /*$('#details').click(function(){
            $('.item-tab-title-book').removeClass('btn');
            $(this).addClass('btn');
            $('.single-text-detail').show();
            $('.single-text-content').hide();
            $('.single-text-mobile').hide();
            $('.single-text-reg').hide();
        });*/

        $('#review').click(function(){
            $('.item-tab-title-book').removeClass('btn');
            $(this).addClass('btn');
            $('.single-text-content').show();
            $('.single-text-detail').hide();
            $('.single-text-mobile').hide();
            $('.single-text-reg').hide();
        });

        $('#mobile').click(function(){
            $('.item-tab-title-book').removeClass('btn');
            $(this).addClass('btn');
            $('.single-text-mobile').show();
            $('.single-text-detail').hide();
            $('.single-text-content').hide();
            $('.single-text-reg').hide();
        });

        $('#register').click(function(){
            $('.item-tab-title-book').removeClass('btn');
            $(this).addClass('btn');
            $('.single-text-reg').show();
            $('.single-text-detail').hide();
            $('.single-text-content').hide();
            $('.single-text-mobile').hide();
        });

        $('.ask-item-title').on('click', function() {
			$(this).parent().children('.ask-item-content').slideToggle(300, function() {
				if($(this).is(':hidden')) {
					$(this).siblings().children().removeClass('active');
				}
				else {
					$(this).siblings().children().addClass('active');
				}
			}); 
			return false;
		});

        $(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
                $('#button-up').fadeIn();
            } else {
                $('#button-up').fadeOut();
            }
        });
    
        $('#button-up').click(function () {
            $('body,html').animate({
                scrollTop: 0
            }, 500);
            return false;
        });

    });
</script>
<script>
    import posts from './js/posts.json'
</script>
</body>
</html>
