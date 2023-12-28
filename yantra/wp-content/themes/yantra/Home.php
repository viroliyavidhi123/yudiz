<!-- header start -->
<?php
/* Template Name: Home */
get_header();
?>


<!-- banner section start -->
<?php
$banner_grp = get_field('banner_grp');

if (isset($banner_grp) && !empty($banner_grp)) { ?>
    <section class="banner" id="banner">

        <!-- Video will be here -->

        <div class="container">
            <div class="row">
                <div class="col-lg-9 m-auto">
                    <div class="banner-content">
                        <div class="banner-content-inner">
                            <?php if (isset($banner_grp['subtitle']) && !empty($banner_grp['subtitle'])) { ?>
                                <h3 class="heading-3 wow fadeIn"><?= $banner_grp['subtitle']; ?></h3>
                            <?php } ?>

                            <?php if (isset($banner_grp['title']) && !empty($banner_grp['title'])) { ?>
                                <div class="heading-1-warp wow fadeIn">
                                    <h1 class="heading-1"><?= $banner_grp['title']; ?></h1>
                                </div>
                            <?php } ?>

                            <?php if (isset($banner_grp['text']) && !empty($banner_grp['text'])) { ?>
                                <h5 class="heading-5 wow fadeIn"><?= $banner_grp['text']; ?></h5>
                            <?php } ?>

                            <?php if (isset($banner_grp['button']) && !empty($banner_grp['button'])) { ?>
                                <a href="<?= $banner_grp['button']['url']; ?>" target="<?= $banner_grp['button']['target']; ?>" class="big-theam-button m-auto wow fadeIn"><?= $banner_grp['button']['title']; ?></a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="scroll-down-wrap">
            <a href="#discover"><img src="<?php echo site_url(); ?>/wp-content/themes/yantra/image/down-arrow.svg" alt="down arrow" /></a>
        </div>
    </section>
<?php } ?>
<!-- banner section end -->

<!-- discover section start -->
<?php
$discover_grp = get_field('discover_grp');

if (isset($discover_grp) && !empty($discover_grp)) { ?>
    <div id="discover">
        <section class="discover-wrap">
            <div class="container">
                <div class="discover">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="discover-content">
                                <?php if (isset($discover_grp['subtitle']) && !empty($discover_grp['subtitle'])) { ?>
                                    <h6 class="wow fadeIn heading-6 mb-lg-3 mb-2"><?= $discover_grp['subtitle']; ?></h6>
                                <?php } ?>

                                <?php if (isset($discover_grp['title']) && !empty($discover_grp['title'])) { ?>
                                    <h2 class="wow fadeIn heading-2"><?= $discover_grp['title']; ?></h2>
                                <?php } ?>

                                <?php if (isset($discover_grp['text']) && !empty($discover_grp['text'])) {
                                    echo $discover_grp['text'];
                                } ?>

                                <?php if (isset($discover_grp['button']) && !empty($discover_grp['button'])) { ?>
                                    <a href="<?= $discover_grp['button']['url']; ?>" target="<?= $discover_grp['button']['target']; ?>" class="wow fadeIn big-theam-button"><?= $discover_grp['button']['title']; ?></a>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="discover-img scrollme">
                                <div class="doctor-wrap">
                                    <div class="doctor">
                                        <div class="doc-img">
                                            <?php if (isset($discover_grp['doctor_img']) && !empty($discover_grp['doctor_img'])) { ?>
                                                <img src="<?= $discover_grp['doctor_img']['url']; ?>" alt="<?= $discover_grp['doctor_img']['alt']; ?>" class="img-fluid animateme" data-when="enter" data-from="0" data-to="1" data-easing="easeinout">
                                            <?php } ?>
                                        </div>
                                        <?php if (isset($discover_grp['hologram']) && !empty($discover_grp['hologram'])) { ?>
                                            <div class="hologram">
                                                <img src="<?= $discover_grp['hologram']['url']; ?>" alt="<?= $discover_grp['hologram']['alt']; ?>" class="hologram-img img-fluid animateme" data-when="enter" data-from="0" data-to="1" data-easing="easeinout">
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php } ?>
<!-- discover section end -->

<!-- solution section start -->
<?php
$solutions_grp = get_field('solutions_grp');

if (isset($solutions_grp) && !empty($solutions_grp)) { ?>
    <section class="solution" id="solution">
        <div class="container">
            <div class="head text-center">
                <?php if (isset($solutions_grp['subtitle']) && !empty($solutions_grp['subtitle'])) { ?>
                    <h6 class="wow fadeIn heading-6 mb-lg-3 mb-2"><?= $solutions_grp['subtitle']; ?></h6>
                <?php } ?>

                <?php if (isset($solutions_grp['title']) && !empty($solutions_grp['title'])) { ?>
                    <h2 class="wow fadeIn heading-2"><?= $solutions_grp['title']; ?></h2>
                <?php } ?>

            </div>

            <?php if (isset($solutions_grp['solutions_repeater']) && !empty($solutions_grp['solutions_repeater'])) { ?>
                <div class="solution-content-wrap">
                    <?php
                    foreach ($solutions_grp['solutions_repeater'] as $single_solution) {
                    ?>
                        <div class="solution-content row">
                            <div class=" col-md-4 solution-img-wrap">
                                <?php if (isset($single_solution['image']) && !empty($single_solution['image'])) { ?>
                                    <div class="solution-img wow fadeIn">
                                        <img src="<?= $single_solution['image']['url']; ?>" alt="<?= $single_solution['image']['alt']; ?>">
                                    </div>
                                <?php } ?>
                            </div>

                            <div class=" col-md-8">
                                <div class="solution-detail">
                                    <?php if (isset($single_solution['heading']) && !empty($single_solution['heading'])) { ?>
                                        <h3 class="heading-3 mb-lg-4 mb-md-3 md-2 wow fadeIn"><?= $single_solution['heading']; ?></h3>
                                    <?php } ?>

                                    <div class="solution-detail-list-wrap">
                                        <?php if (isset($single_solution['column_repeater']) && !empty($single_solution['column_repeater'])) { ?>
                                            <div class="row">
                                                <?php foreach ($single_solution['column_repeater'] as $point_col) {
                                                ?>
                                                    <div class="col-md-6 ">
                                                        <?php if (isset($point_col['point_repeater']) && !empty($point_col['point_repeater'])) { ?>
                                                            <div class="solution-detail-list-inner">
                                                                <?php foreach ($point_col['point_repeater'] as $single_point) { ?>
                                                                    <div class="solution-detail-list d-flex wow fadeIn">
                                                                        <img src="<?php echo site_url(); ?>/wp-content/themes/yantra/image/cheack-mark.svg" alt="cheack-mark">

                                                                        <?php if (isset($single_point['point']) && !empty($single_point['point'])) { ?>
                                                                            <h5 class="heading-5"><?= $single_point['point']; ?></h5>
                                                                        <?php } ?>
                                                                    </div>
                                                                <?php } ?>
                                                            </div>
                                                        <?php } ?>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
    </section>
<?php } ?>
<!-- solution section end -->

<!-- get-in-touch section start -->
<?php
$git_grp = get_field('git_grp');

if (isset($git_grp) && !empty($git_grp)) { ?>
    <section class="get-in-touch section-padding-152" id="get-in-touch">
        <div class="container">
            <div class="get-in-touch-inner wow fadeIn">
                <?php if (isset($git_grp['question']) && !empty($git_grp['question'])) { ?>
                    <h4 class="heading-4"><?= $git_grp['question']; ?></h4>
                <?php } ?>

                <?php if (isset($git_grp['button']) && !empty($git_grp['button'])) { ?>
                    <a href="<?= $git_grp['button']['url']; ?>" target="<?= $git_grp['button']['target']; ?>" class="big-theam-button"><?= $git_grp['button']['title']; ?></a>
                <?php } ?>
            </div>
        </div>
    </section>
<?php } ?>
<!-- get-in-touch section end -->

<!-- innovation section start -->
<?php
$innovation_grp = get_field('innovation_grp');

if (isset($innovation_grp) && !empty($innovation_grp)) { ?>
    <section class="innovation" id="innovation">
        <div class="container">
            <div class="head">
                <?php if (isset($innovation_grp['subtitle']) && !empty($innovation_grp['subtitle'])) { ?>
                    <h6 class="wow fadeIn heading-6 mb-lg-3 mb-2"><?= $innovation_grp['subtitle']; ?></h6>
                <?php } ?>

                <?php if (isset($innovation_grp['title']) && !empty($innovation_grp['title'])) { ?>
                    <h2 class="wow fadeIn heading-2"><?= $innovation_grp['title']; ?></h2>
                <?php } ?>

                <?php if (isset($innovation_grp['text']) && !empty($innovation_grp['text'])) { ?>
                    <h5 class="wow fadeIn heading-5"><?= $innovation_grp['text']; ?></h5>
                <?php } ?>
            </div>
            <div class="slick-slider-arrow d-flex gap-4 d-none d-md-flex">
                <button class="prev-btn slider-btn"><img src="<?php echo site_url(); ?>/wp-content/themes/yantra/image/previous-arrow.png" alt="arrow"></button>
                <button class="next-btn slider-btn"><img src="<?php echo site_url(); ?>/wp-content/themes/yantra/image/next-arrow.png" alt="arrow"></button>
            </div>
        </div>

        <?php if (isset($innovation_grp['innovations_repeater']) && !empty($innovation_grp['innovations_repeater'])) { ?>
            <div class="innovation-slider card-group wow fadeIn">
                <?php foreach ($innovation_grp['innovations_repeater'] as $innovation) { ?>
                    <div>
                        <div class="card">
                            <div class="card-body">
                                <?php if (isset($innovation['heading']) && !empty($innovation['heading'])) { ?>
                                    <h4 class="card-title heading-4"><?= $innovation['heading']; ?></h4>
                                <?php } ?>

                                <?php if (isset($innovation['image']) && !empty($innovation['image'])) {
                                ?>
                                    <div class="card-img-wrap">
                                        <div class="slider-img">
                                            <img src="<?= $innovation['image']['url']; ?>" alt="<?= $innovation['image']['alt']; ?>">
                                        </div>
                                    </div>
                                <?php }  ?>

                                <?php if (isset($innovation['text']) && !empty($innovation['text'])) { ?>
                                    <h5 class="card-text heading-5"><?= $innovation['text']; ?></h5>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>
        <div class="slick-slider-arrow d-flex gap-4 d-sm-flex d-md-none justify-content-center">
            <button class="prev-btn slider-btn"><img src="<?php echo site_url(); ?>/wp-content/themes/yantra/image/previous-arrow.png" alt="arrow"></button>
            <button class="next-btn slider-btn"><img src="<?php echo site_url(); ?>/wp-content/themes/yantra/image/next-arrow.png" alt="arrow"></button>
        </div>
    </section>
<?php } ?>
<!-- innovation section end -->

<!-- yantra-card section start -->
<?php
$card_grp = get_field('card_grp');

if (isset($card_grp) && !empty($card_grp)) { ?>
    <section class="yantra-card-wrap section-padding-182" id="yantra-card">
        <div class="container">
            <div class="head text-center wow fadeIn">
                <?php if (isset($card_grp['title']) && !empty($card_grp['title'])) { ?>
                    <h2 class="heading-2"><?= $card_grp['title']; ?></h2>
                <?php } ?>
            </div>

            <?php if (isset($card_grp['card_repeater']) && !empty($card_grp['card_repeater'])) { ?>
                <div class="yantra-card-group card-group">
                    <?php foreach ($card_grp['card_repeater'] as $card) { ?>
                        <div class="yantra-card card text-center wow fadeIn">
                            <?php if (isset($card['image']) && !empty($card['image'])) { ?>
                                <div class="ynatra-card--img-wrap m-auto">
                                    <div class="yantra-card-img">
                                        <img src="<?= $card['image']['url']; ?>" class="card-img-top" alt="<?= $card['image']['alt']; ?>">
                                    </div>
                                </div>
                            <?php } ?>

                            <div class="card-body">
                                <?php if (isset($card['title']) && !empty($card['title'])) { ?>
                                    <h4 class="card-title heading-4"><?= $card['title']; ?></h4>
                                <?php } ?>

                                <?php if (isset($card['text']) && !empty($card['text'])) { ?>
                                    <p class="card-text mt-lg-4 mt-md-3 mt-2"><?= $card['text']; ?></p>
                                <?php } ?>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
    </section>
<?php } ?>
<!-- yantra-card section end -->

<!-- faqs section start -->
<?php
$faq_grp = get_field('faq_grp');

if (isset($faq_grp) && !empty($faq_grp)) { ?>
    <section class="faqs" id="faqs">
        <div class="container">
            <div class="head text-center">
                <?php if (isset($faq_grp['subtitle']) && !empty($faq_grp['subtitle'])) { ?>
                    <h6 class="wow fadeIn heading-6 mb-lg-3 mb-2"><?= $faq_grp['subtitle']; ?></h6>
                <?php } ?>

                <?php if (isset($faq_grp['title']) && !empty($faq_grp['title'])) { ?>
                    <h2 class="wow fadeIn heading-2"><?= $faq_grp['title']; ?></h2>
                <?php } ?>
            </div>

            <?php if (isset($faq_grp['faq_repeater']) && !empty($faq_grp['faq_repeater'])) { ?>
                <div class="faqs-wrap">
                    <div class="accordion" id="accordionPanelsStayOpenExample">
                        <?php foreach ($faq_grp['faq_repeater'] as $faqkey => $faq) {

                            //**** Logic variables for Accordians ****//
                            $btn_class = ($faqkey > 0) ? "collapsed" : "";
                            $area_expand = ($faqkey > 0) ? "false" : "true";
                            $div_class = ($faqkey > 0) ? "" : "show";
                        ?>

                            <div class="accordion-item wow fadeIn">
                                <?php if (isset($faq['question']) && !empty($faq['question'])) { ?>
                                    <h2 class="accordion-header" id="panelsStayOpen-heading_<?= $faqkey; ?>">
                                        <button class="accordion-button heading-5 <?= $btn_class; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse_<?= $faqkey; ?>" aria-expanded="<?= $area_expand; ?>" aria-controls="panelsStayOpen-collapse_<?= $faqkey; ?>">
                                            <?= $faq['question']; ?>
                                        </button>
                                    </h2>
                                <?php } ?>

                                <?php if (isset($faq['explanation']) && !empty($faq['explanation'])) { ?>
                                    <div id="panelsStayOpen-collapse_<?= $faqkey; ?>" class="accordion-collapse collapse <?= $div_class; ?>" aria-labelledby="panelsStayOpen-heading_<?= $faqkey; ?>" data-bs-parent="#accordionPanelsStayOpenExample">
                                        <div class="accordion-body">
                                            <?= $faq['explanation']; ?>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </section>
<?php } ?>
<!-- faqs section end -->

<!-- contact-us section start -->
<?php
$contact_us_grp = get_field('contact_us_grp');

if (isset($contact_us_grp) && !empty($contact_us_grp)) { ?>
    <section class="contact-us" id="contact-us">
        <div class="container">
            <div class="head text-center">
                <?php if (isset($contact_us_grp['pre_heading_text']) && !empty($contact_us_grp['pre_heading_text'])) { ?>
                    <h6 class="wow fadeIn heading-6 mb-xl-3 mb-2"><?= $contact_us_grp['pre_heading_text']; ?></h6>
                <?php } ?>

                <?php if (isset($contact_us_grp['heading']) && !empty($contact_us_grp['heading'])) { ?>
                    <h2 class="wow fadeIn heading-2 mb-xl-3 mb-2"><?= $contact_us_grp['heading']; ?></h2>
                <?php } ?>

                <?php if (isset($contact_us_grp['post_heading_text']) && !empty($contact_us_grp['post_heading_text'])) { ?>
                    <h5 class="wow fadeIn heading-5"><?= $contact_us_grp['post_heading_text']; ?></h5>
                <?php } ?>
            </div>

            <?php if (isset($contact_us_grp['form_shortcode']) && !empty($contact_us_grp['form_shortcode'])) { ?>
                <div class="contact-form-wrap wow fadeIn">
                    <?php echo apply_shortcodes($contact_us_grp['form_shortcode']); ?>
                </div>
            <?php } ?>
        </div>
    </section>
<?php } ?>
<!-- contact-us section end -->

<?php
get_footer();
?>
<script>
    jQuery(document).ready(function() {
        $(window).scroll(function() {
            var sticky = $('.header-wrap')
            var gotop = $('.scrollToTop'),
                scroll = $(window).scrollTop();
            if (scroll >= 20) sticky.addClass('header-stick');
            else sticky.removeClass('header-stick');

            if (scroll >= 250) gotop.addClass('gotop-stick');
            else gotop.removeClass('gotop-stick');

        });
        jQuery('.innovation-slider').slick({
            autoplay: true,
            autoplaySpeed: 3500,
            dots: false,
            speed: 1000,
            prevArrow: $('.prev-btn'),
            nextArrow: $('.next-btn'),
            infinite: true,
            slidesToScroll: 1,
            variableWidth: true,
            pauseOnHover: true,
            cssEase: 'linear',
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        dots: true
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });

        // remove pipe sign
        if (window.innerWidth < 576) {
            let copyrightElement = document.querySelector('.powered-by .widget > p');
            let textContent = copyrightElement.innerHTML;
            let updatedText = textContent.replace(/\|/g, '');
            copyrightElement.innerHTML = updatedText;
        }

        jQuery(".doc-img img").attr("data-translatey", "-200");
        jQuery(".hologram-img").attr("data-translatey", "50");

        // Onscroll animation added
        wow = new WOW({
            boxClass: 'wow',
            animateClass: 'animated',
            offset: 100,
            mobile: true
        });
        wow.init();

        // body - overflow-hidden
        jQuery(".dropdown-icon").click(function() {
            jQuery("body, html").toggleClass("overflow-hidden");
        });


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

        function hasScrolled() {
            var st = jQuery(this).scrollTop();
            // Make sure they scroll more than delta
            if (Math.abs(lastScrollTop - st) <= delta)
                return;
            // If they scrolled down and are past the navbar, add class .nav-up.
            // This is necessary so you never see what is "behind" the navbar.
            if (st > lastScrollTop && st > navbarHeight) {
                // Scroll Down
                jQuery('.header-wrap').removeClass('nav-down').addClass('nav-up');
            } else {
                // Scroll Up
                if (st + jQuery(window).height() < jQuery(document).height()) {
                    jQuery('.header-wrap').removeClass('nav-up').addClass('nav-down');
                }
            }
            lastScrollTop = st;
        }
    });
</script>