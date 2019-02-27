<?php

/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

?>

<footer id="footer">
    <div class="footer-stripe stripe">
        <div class="line line--1"></div>
        <div class="line line--2"></div>
        <div class="line line--3"></div>
    </div>
    <div class="container">

        <div class="row">
            <div class="col-sm-2">
                <a href="<?php echo get_home_url(); ?>" id="" class="footer__logo">
                    <img class="footer__logo" src="<?php bloginfo('template_directory'); ?>/img/acc_logo.svg" alt="Logo">
                </a>
            </div>
            <div class="col-sm-8 offset-sm-1">
                <div class="row">
                    <div class="col-md-3">
                        <a>
                            <h6>Our Business</h6>
                        </a>
                        <?php wp_nav_menu(
                            array(
                                'theme_location' => 'business-menu',
                                'container_class' => 'footer-menu',
                                'container_id' => '',
                                'menu_class' => 'menu',
                                'fallback_cb' => '',
                                'menu_id' => 'footer__corporate',
                            )
                        ); ?>
                    </div>
                    <div class="col-md-3">
                        <a>
                            <h6>Our Capability</h6>
                        </a>

                        <?php wp_nav_menu(
                            array(
                                'theme_location' => 'capability-menu',
                                'container_class' => 'footer-menu',
                                'container_id' => '',
                                'menu_class' => 'menu',
                                'fallback_cb' => '',
                                'menu_id' => 'footer__corporate',
                            )
                        ); ?>
                    </div>
                    <div class="col-md-3">
                        <a>
                            <h6>Our people</h6>
                        </a>

                        <?php wp_nav_menu(
                            array(
                                'theme_location' => 'people-menu',
                                'container_class' => 'footer-menu',
                                'container_id' => '',
                                'menu_class' => 'menu',
                                'fallback_cb' => '',
                                'menu_id' => 'footer__corporate',
                            )
                        ); ?>
                    </div>
                    <div class="col-md-3">
                        <a>
                            <h6>Contacts</h6>
                        </a>

                        <?php wp_nav_menu(
                            array(
                                'theme_location' => 'contact-menu',
                                'container_class' => 'footer-menu',
                                'container_id' => '',
                                'menu_class' => 'menu',
                                'fallback_cb' => '',
                                'menu_id' => 'footer__social',
                            )
                        ); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <p class="footer-text">© Copyright
                    <?php echo date('Y'); ?> All Rights Reserved</p>
            </div>
            <div class="col-sm-4">
                <p class="footer-text"></p>

            </div>
            <div class="col-sm-4">

            </div>

        </div>

</footer>

<div class="search-form ">
    <span class="search-close">
        <i class="fas fa-times"></i>
    </span>
    <?php get_template_part('searchform'); ?>
</div>

<script>
    (function($) {
        $(".search-btn a").click(function() {
            $(".search-form").toggleClass("is-open");
        });

    })(jQuery);

    (function($) {
        $(".search-close").click(function() {
            $(".search-form").removeClass("is-open");
        });
    })(jQuery);
</script>



<?php wp_footer(); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/header.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/flickity.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/fontawesome-all.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/parallax.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/typed.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/smooth-scroll.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/ytplayer.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/aos.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/swiper.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>

<script>
    AOS.init();

    var mySwiper = new Swiper('.swiper-container', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,
        effect: 'fade',
        autoplay: {
            delay: 5000,
        },
        fadeEffect: {
            crossFade: true
        },
        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
        },
    })
    mySwiper.on('slideChangeTransitionEnd', function() {
        var slide = document.querySelector('.swiper-slide-active');
        var menu = document.querySelector('#home-menu');
        var pagination = document.querySelector('#pagination');
        if (slide.classList.contains('light')) {
            menu.classList.add('light');
            pagination.classList.add('light');

        } else {
            if (menu.classList.contains('light')) {
                menu.classList.remove('light');
                pagination.classList.remove('light');

            }
        }
    });

    jQuery(document).ready(function($) {

        $('.timeline__dates').on('click', function(e) {
            if (!$(e.target).hasClass('active')) {
                $('.timeline__dates').removeClass('active');
                $('.timeline__section').removeClass('active');
                console.log(e.target);

                var container_id = '#' + e.target.id.split('_')[0] + '_container--' + e.target.id.split('--')[1];

                console.log(container_id);

                $(e.target).addClass('active');
                $(container_id).addClass('active')

            }
        })

        $('#timeline').on('click', function(e) {
            if (!$(e.target).hasClass('active')) {
                $('.selector').removeClass('active');
                $(e.target).addClass('active');
                $('#awards--container').removeClass('active');
                $('#timeline--container').addClass('active');
                $('#timeline_container--1').addClass('active')
                $('#timeline_daterange--1').addClass('active')

            }
        })

        $('#awards').on('click', function(e) {
            if (!$(e.target).hasClass('active')) {
                $('.selector').removeClass('active');
                $(e.target).addClass('active');
                $('#timeline--container').removeClass('active');
                $('#awards--container').addClass('active');
                $('#awards_container--1').addClass('active')
                $('#awards_daterange--1').addClass('active')


            }
        })

        $('.properties__daterange').on('click', function(e) {
            if (!$(e.target).hasClass('active')) {
                $('.properties__daterange').removeClass('active');
                $('.properties__row').removeClass('active');

                var row_id = '#row--' + e.target.id.split('--')[1];

                $(e.target).addClass('active');
                $(row_id).addClass('active')
                changeLocation(e.target.id.split('--')[1], 1);

            }
        })

        $('.location__select').on('change', function(e) {
            var id = $(e.target).find(":selected")[0].id;
            changeLocation(id.split('__')[1], id.split('--')[1]);
        })



        $('.location__list').children().on('click', function(e) {
            if (!$(e.target).hasClass('active')) {
                changeLocation(e.target.id.split('__')[1], e.target.id.split('--')[1]);
            }
        })

        $()

        function changeLocation(rowid, id) {
            $('.enclosing').children().each(function() {
                $(this).removeClass('active');
            })
            $('.location__list').children().each(function() {
                $(this).removeClass('active');
            })

            $('.details__box').removeClass('active');
            $('#row__' + rowid + '__details--' + id).addClass('active');
            $('#row__' + rowid + '__name--' + id).addClass('active');
            $('#row__' + rowid + '__g--' + id).addClass('active');

            var text = $('#row__' + rowid + '__name--' + id)[0].textContent;
            console.log($('.location__select'));
            $('.location__select').val(text);
        }


        $('.enclosing').children().on('click', function(e) {
            var node = e.target.parentNode.parentNode;
            if (!$(node).hasClass('active')) {
                changeLocation(node.id.split('__')[1], node.id.split('--')[1]);
            }
        })

    });
</script>

</body>

</html> 