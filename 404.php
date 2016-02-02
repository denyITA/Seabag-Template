<!DOCTYPE html>

<html  <?php language_attributes(); ?>>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1">
     <meta http-equiv="refresh"
   content="5; url=<?php bloginfo("url") ?>">
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,800,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <style>

    .nfContainer {
        display: table;
        width: 100%;
        height: 100vh;
    }

    .nfCell {
        display: table-cell;
        vertical-align: middle;
        text-align: center
    }

    .nfCell img {
        max-width: 95%
    }

    .rip {
        padding-top: 20px;
    }

    </style>
</head>

<body class="nfBody <?php  get_body_class() ?>">
<div class="nfContainer">
    <div class="nfCell">
        <a href="<?php bloginfo("url") ?>" title="Home">
            <img src="<?php bloginfo("wpurl")?>/wp-content/uploads/2015/09/logo-01.png">
        </a>
    <p class="rip"><?php
        if (cml_get_current_language()->cml_locale === "it_IT") {
            echo "Pagina non trovata, verrai reindirizzato tra poco...";
        }
        else
            echo "Page not found, you will redirected soon...";
    ?>
    </p>
    </div>

</div>

</body>
<?php wp_footer() ?>
