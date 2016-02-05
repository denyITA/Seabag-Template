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
                    <img id="miniLogo" src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.svg" width="60" height="60">
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

        <?php endif; ?>
        <div id="back-top" style="display: block;"><a href="#testata"><i class="fa fa-angle-up"></i></a></div>
    <?php wp_footer() ?>
<!-- [[[ Pagina generata in <?php timer_stop(1); ?> secondi. Wow! ]]] -->
<script>
    function init() {
        	$LAB
    .script("https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js")


	.script( [
                wpTheme + "/js/custom.min.js",
                wpTheme + "/js/lazysizes.min.js"
            ]
           ).wait()
    .script( wpTheme + "/js/blueimp-gallery.min.js" ).wait()
    .script( wpTheme + "/js/blueimpFire.js")
    }

</script>
<script type="text/javascript" async src="<?php echo get_stylesheet_directory_uri(); ?>/js/LAB.min.js" onload="init()"></script>
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
$(".photos").click(function () {
    blueimp.Gallery([
        wpurl + '/wp-content/uploads/2015/10/seabag-bianca.jpg',
        wpurl + '/wp-content/uploads/2015/08/schiuma.jpg',
        wpurl + '/wp-content/uploads/2015/07/1007.jpg',
        wpurl + '/wp-content/uploads/2015/08/seabagTWO1.jpg',
        wpurl + '/wp-content/uploads/2015/08/sundial-3.jpg',
        wpurl + '/wp-content/uploads/2015/08/modella.jpg',
        wpurl + '/wp-content/uploads/2015/08/lookatpareo.jpg',
        wpurl + '/wp-content/uploads/2015/10/seabag-splash.jpg',
        wpurl + '/wp-content/uploads/2015/10/bimba-seabag.jpg',
        wpurl + '/wp-content/uploads/2015/10/girl-seabag.jpg',
        wpurl + '/wp-content/uploads/2015/10/backpack-seabag.jpg',
        wpurl + '/wp-content/uploads/2015/10/kate-seabag.jpg',
        wpurl + '/wp-content/uploads/2015/10/sundial-seabag.jpg'
    ]);
});

$(".close").click(function() {
    setTimeout(function() {
      $("body").css("overflow","auto");
    }, 1500);
});

$("#PlayVideos").click(function () {
    var fullscreenOptions = {
        // Defines if the gallery should open in fullscreen mode:
        fullScreen: false
    };

    blueimp.Gallery([
        {
            href: 'https://www.youtube.com/watch?v=kUwBjT7Bu8s',
            type: 'text/html',
            youtube: 'kUwBjT7Bu8s',
            poster: 'https://img.youtube.com/vi/kUwBjT7Bu8s/maxresdefault.jpg'
        },
        {
            href: 'https://www.youtube.com/watch?v=aTMjkFx1pbk',
            type: 'text/html',
            youtube: 'aTMjkFx1pbk',
            poster : '/wp-content/themes/seabagtemplate/img/seabag-intro.jpg'
        }
    ]);
});
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=456290021187239&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

</body>

</html>
