<?php
/* Template Name: General Content */
get_header();
?>

<section class="privacy-policy-page">
    <div class="container">
        <h2 class="heading-2 text-center"><?php echo get_the_title(); ?></h2>
        <div class="row justify-content-center ">
            <div class="col-10">
                <?php echo get_the_content(); ?>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
?>

<script>
    jQuery(document).ready(function() {
        // Fixed Header on on scroll down
        jQuery(window).scroll(function() {
            var scroll = jQuery(window).scrollTop();
            var scrolled = 150;
            var screen_resolution = jQuery(window).width();
            if (screen_resolution < 768) {
                scrolled = 105;
            }
            if (scroll >= scrolled) {
                jQuery(".header-wrap").addClass("fixed-header");
            } else {
                jQuery(".header-wrap").removeClass("fixed-header");
            }
        })

        // Hide Header on on scroll down
        var didScroll;
        var lastScrollTop = 0;
        var delta = 5;
        var navbarHeight = jQuery('.header-wrap').outerHeight();
        jQuery(window).scroll(function(event) {
            didScroll = true;
        });
        setInterval(function() {
            if (didScroll) {
                hasScrolled();
                didScroll = false;
            }
        }, 250);
     });

</script>