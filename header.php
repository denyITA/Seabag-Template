<!DOCTYPE html>

<html  <?php language_attributes(); ?> class="no-js">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1">
	<?php if ($_SERVER["SERVER_NAME"] === "seabag.us") {
	// Meta tag per gli STATI UNITI
	echo '<meta name="google-site-verification" content="fmYwtSw11biNinjGVtoR_4g6jh1YnM-Wl0EABkmJAtM" />';

	}

	?>
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,800,600' rel='stylesheet' type='text/css'>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.png">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/old.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.min.css">
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/modernizer.js"></script>
	<title><?php bloginfo('name','display'); ?><?php wp_title( '&#124;', true, 'left' ); ?></title>
	<?php $meta = seo_danielo(cml_get_current_language()->cml_language_slug); ?>

	<!-- FB -->
	<meta property="og:title" content="<?php echo $meta["og_title"] ?>">
	<meta property="og:type" content="<?php echo $meta["og_type"] ?>">
	<meta property="og:url" content="<?php echo $meta["og_url"] ?>">
	<meta property="og:image" content="<?php echo $meta["og_image"] ?>">
	<meta property="og:site_name" content="<?php echo $meta["og_sitename"] ?>">
	<meta property="og:description" content="<?php echo $meta["og_description"] ?>">
	<!-- META -->
	<meta name="description" content="<?php echo $meta["meta_description"] ?>">
	<meta name="keywords" content="<?php echo $meta["meta_keywords"] ?>">
	<!-- ALTERNATE -->
	<link rel="alternate" href="<?php bloginfo("wpurl") ?>/it/" hreflang="it">
	<link rel="alternate" href="<?php bloginfo("wpurl") ?>/en/" hreflang="en">
	<!-- TWITTER -->
	<meta name="twitter:card" content="<?php echo $meta["twitter_card"] ?>" />
	<meta name="twitter:site" content="<?php echo $meta["twitter_site"] ?>" />
	<meta name="twitter:title" content="<?php echo $meta["twitter_title"] ?>" />
	<meta name="twitter:description" content="<?php echo $meta["twitter_description"] ?>" />
	<meta name="twitter:image" content="<?php echo $meta["twitter_img"] ?>" />

	<?php unset($meta) ?>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

	<!--[if lt IE 9]>
		<script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<?php wp_head() ?>


    <?php
        get_template_part("analytics");
    ?>
</head>
<body id="testata" class="<?php  get_body_class() ?>">

	<!-- NAVBAR TOP -->
	<?php if(is_front_page()) : ?>
	<div class="topbar">
		<div class="logo"></div>

		<div class="fakenav"></div>

		<nav class="navbar navbar-fixed-top gradient">
			<div class="navbar-header">
		        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collassa" aria-expanded="false">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
		      	</button>
		    	<span itemscope itemtype="http://schema.org/Organization">
		    		<a itemprop="url" class="navbar-brand hidden-xs" href="<?php get_bloginfo("site") ?>">
		    			<strong  itemprop="name" class="hidden">Seabag Original Underwater, made in Italy</strong>
		    			<img itemprop="logo"  src="<?php echo get_header_image(); ?>" alt="Seabag Original Underwater">
		    		</a>
				</span>
			</div>

	    	<nav class="collapse navbar-collapse" id="collassa">
	    	<ul class="nav navbar-nav navbar-right">
	        	<li id="lingua" class="dropdown">
	            	<button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn btn-default navbar-btn">
		                <img src="<?php $bandierina = cml_get_current_language()->id; echo cml_get_flag_by_lang_id($bandierina, $size = "tiny");?>" alt="Flag">
		                <span class="fa fa-caret-down"></span>
	            	</button>
			        <div class="dropdown-menu">
			            <?php echo do_shortcode('[cml_show_available_langs]') ?>
			        </div>
	        	</li>
	      	</ul>

	        <?php wp_nav_menu(array('theme_location' => 'header-menu', 'items_wrap'      => '<ul id="%1$s" class="nav navbar-nav navbar-right">%3$s</ul>', )) ?>
	        </nav>
	    </nav>
	</div>
	<!-- END NAVBAR TOP -->

<?php
if ( wp_is_mobile() ) : ?>

	<div class="quadro-testata"></div>

<?php endif;
if ( !wp_is_mobile() ) : ?>

	<div class="quadro-testata">
		<!-- <div id="triggerino"><i class="fa fa-play-circle"></i></div> -->
	</div>

	<!--
	<div id="animatedHeader" class="filmato">
		<b></b>
		<div class="loading"></div>
		<div id="YT"></div>
		<noscript>
			<div class="endCover"></div>
		</noscript>
	</div>
	-->

<?php endif; ?>


	<div  class="daBox">
		<div class="giuseppe">
			<header id="seabag" class="testata container-fluid">
				<h1 class="text-center"><?php echo get_bloginfo( 'name', 'display' ) ?></h1>
				<h5 class="text-center"><?php bloginfo('description') ?></h5>
				<div class="made">
					<div class="bandiera">
						<span class="divisore-verde"></span>
						<span class="divisore-bianco"></span>
						<span class="divisore-rosso"></span>
					</div>
					<b>made in italy</b>
				</div>
			</header>
		</div>
<?php endif; ?>
