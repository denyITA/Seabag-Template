        <footer id="contacts" class="container-fluid">
            <div class="row">

                <aside id="cf" >
                    <?php

                    if ( cml_get_current_language()->cml_locale === "it_IT") { echo do_shortcode('[contact-form-7 id="173" title="Modulo di contatto 1"]'); }
                    else echo do_shortcode('[contact-form-7 id="270" title="Modulo di contatto 1_copy"]'); ?>

                    <div class="clearfix"></div>
                </aside>

            </div>
            <div class="servizi row">
                <div class="col-md-12 col-lg-3">
                    <div class="tplogo">
                        <div class="tpbg">
  		                    <div class="cerchiopiccolo"></div>
  		                    <div class="cerchiogrande"></div>
                        </div>
                    </div>
                </div>
                <div class=" menuservizi col-md-12 col-lg-6">
                    <nav><?php wp_nav_menu(array('theme_location' => 'eshop')) ?></nav>
                    <nav class="translate">
                        <ul>
                            <li><a href="<?php get_bloginfo("site") ?>/it/">Italiano</a></li>
                            <li><a href="<?php get_bloginfo("site") ?>/en/">English</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-md-12 col-lg-3 social">
                    <nav><?php wp_nav_menu(array('theme_location' => 'social-menu')) ?></nav>
            	</div>
            </div>
            <div id="partitaIva" class="row">
                <div class="col-lg-12">
                    <small>© <?php echo date("Y")?> by GL P.Iva 05984740828</small>
                </div>
            </div>
        </footer>


        <?php if (is_front_page()) : ?> </div> <!-- Closing da box --> <?php endif; ?>
        <?php
        if (is_user_logged_in()) : ?>
        <div class="seriusadminbar"><a href="wp-admin"><i class="fa fa-wordpress"></i></a></div>

        <?php endif; ?>
        <div id="back-top" style="display: block;"><a href="#testata"><i class="fa fa-angle-up"></i></a></div>
    <?php wp_footer() ?>
<!-- [[[ Pagina generata in <?php timer_stop(1); ?> secondi. Wow! ]]] -->
    <script id="dispatcher" type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/dispatcher.min.js"></script>
    <script type="application/ld+json">
    [
        {
            "@context" : "http://schema.org",
            "@type" : "Organization",
            "name" : "Seabag",
            "url": "http://seabag.it",
            "logo": "http://seabag.it/wp-content/uploads/2015/10/logo.png",
            "awards" : [
                "The Start Something Challenge",
                "Innovation Makers Day",
                "Cerisdi Awards",
                "Italia degli Innovatori"
            ],
            "email": "seabag@siestas.it",
            "employees" : [
                {
                    "@type" : "Person",
                    "name" : "Daniele Irsuti",
                    "jobTitle" : "Webmaster",
                    "image" : "https://scontent-mxp1-1.xx.fbcdn.net/hphotos-ash2/v/t1.0-9/1911856_10203325122596082_906620366236471267_n.jpg?oh=f9b78bceb3b41048e1e47a5650b3dd67&oe=56BB4386",
                    "sameAs" : "http://danieleirsuti.com"
                },
                {
                    "@type" : "Person",
                    "name" : "Lorenzo Lo Dato",
                    "jobTitle" : "Architectural Designer",
                    "image" : "http://seabag.us/wp-content/uploads/2015/08/lorenzo.jpg"
                },
                {
                    "@type" : "Person",
                    "name" : "Giuseppe Lucido",
                    "jobTitle" : "Founder and CEO",
                    "image" : "http://seabag.us/wp-content/uploads/2015/08/giuseppe.jpg"
                },
                {
                    "@type" : "Person",
                    "name" : "Rossana Lo Dato",
                    "jobTitle" : "Founder and Designer",
                    "image" : "http://seabag.us/wp-content/uploads/2015/08/rossana.jpg"
                },
                {
                    "@type" : "Person",
                    "name" : "Maria Luisa Greco",
                    "jobTitle" : "Public Relations and designer",
                    "image" : "http://seabag.us/wp-content/uploads/2015/08/pub_rel.jpg"
                },
                {
                    "@type" : "Person",
                    "name" : "Lorenzo Politi",
                    "jobTitle" : "Product manager and Designer",
                    "image" : "http://seabag.us/wp-content/uploads/2015/08/politi.jpg"
                },
                {
                    "@type" : "Person",
                    "name" : "Joanna Chmarzewska",
                    "jobTitle" : "Sales manager USA",
                    "image" : "http://seabag.us/wp-content/uploads/2015/08/johanna.jpg"
                }
            ],
            "sameAs" : [
                "https://facebook.com/SeabagSea",
                "http://www.instagram.com/seabag_original_underwater",
                "https://plus.google.com/u/0/b/117434256623666403415/117434256623666403415/posts",
                "https://www.pinterest.com/glucido64/",
                "https://www.youtube.com/channel/UCZPNmvzIWG-iHi-F7ced4YA"
            ],
            "contactPoint" : [{
            "@type" : "ContactPoint",
            "telephone" : "+39-091-977-25-10",
            "contactType" : "customer service"
        }]
        },
        {
            "@context" : "http://schema.org",
            "@type" : "CreativeWork",
            "creator" : [
                "Rossana Lo Dato",
                "Giuseppe Lucido"
                ],
            "video" : [
                {
                    "playerType" : "Flash",
                    "embedUrl" : "https://www.youtube.com/watch?v=REBaEN22I60",
                    "description":  "100% Waterproof, Inflatable, Floating ... Fashionable and chic! Prevents your things from being stolen at the beach.",
                    "name": "Seabag Original Underwater",
                    "thumbnailUrl": "http://seabag.it/wp-content/themes/seabagtemplate/img/seabag-intro.jpg",
                    "uploadDate":   "05/26/2015"
                }
            ]
        }
    ]
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            <?php if (is_front_page()) : ?>
            $.get("<?php echo get_stylesheet_directory_uri(); ?>/album.php", function(data, status) {
                $("#media").append(data);
                console.log('%c'+"Media status:"+status, 'background: #222; color: #bada55; font-size: 20px;');
            });
            <?php endif; ?>
            $(".shop").one("click", function() {
                $.get("<?php echo get_stylesheet_directory_uri(); ?>/inc/lingue.php/?choose=true", function(data, status) {
                    $("#selezionaShop").append(data);
                    console.log('%c'+status, 'background: #222; color: #bada55; font-size: 20px;');
                });
            });
            $('a[href="#pp"]').click(function(){
                $.get("<?php echo get_stylesheet_directory_uri(); ?>/pp.txt", function(data, status) {
                    alert(data);
                });
            });
        });

    </script>
<!--
    <script type="text/javascript">
        $("#triggerino").click(function(click) {
            if ($("#YT").length > 0) {
                player.playVideo();
                $('#animatedHeader').fadeIn("slow");
            }
            if ($("#YT").length === 0) {
            var videoAppenditi = '<div id="animatedHeader" class="filmato" style="z-index: 1"><b></b><div class="loading"></div><div id="YT"></div></div>';
            $('#testata').prepend(videoAppenditi);
            //$('#triggerino').hide('slow');
            $("body").append("<script src='/wp-content/themes/seabagtemplate/js/yt.js'><\/script>");
        }
        })
    </script> -->
    <?php
        get_template_part("analytics");
    ?>
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','//connect.facebook.net/en_US/fbevents.js');

fbq('init', '456290021187239');
fbq('track', "PageView");
fbq('track', 'ViewContent');
</script>
<script>
$('#sliderTestata').carousel({
    interval: 2000,
    pause: "hover",
    keyboard: true
});
</script>
<script>
var fullscreenOptions = {
    // Defines if the gallery should open in fullscreen mode:
    fullScreen: false
};
blueimp.Gallery([
    {
        title: 'Seabag Video',
        href: 'https://www.youtube.com/embed/kUwBjT7Bu8s?modestbranding=1&rel=0&amp;controls=0&amp;showinfo=0',
        type: 'text/html',
        youtube: 'kUwBjT7Bu8s',
        poster: 'https://img.youtube.com/vi/kUwBjT7Bu8s/maxresdefault.jpg'
    },
    {
        title: 'Banana',
        href: 'https://www.youtube.com/embed/ly8yuRGfs5U?modestbranding=1&rel=0&amp;controls=0&amp;showinfo=0',
        type: 'text/html',
        youtube: 'ly8yuRGfs5U',
        poster : 'https://img.youtube.com/vi/ly8yuRGfs5U/maxresdefault.jpg'
    }
]);
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=456290021187239&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

</body>

</html>
