<?php

/*
Template Name: Slidedown
*/

?>
<script>

function altezzaTab() {

$("#trofei").slideDown(1500);
}

$( "#trofei" ).ready(function() {
    altezzaTab();

});

$( window ).resize(function() {
    altezzaTab();
});
</script>
<div id="trofei">
<div class="openTab">
<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>

    <div class="container">
        <!-- <h2 class="theTitle"><?php the_title() ?></h2> -->
    </div>
    <div class="container" style="padding-top: 20px">

        <div class="col-lg-12">
            <?php echo the_content() ?>
        </div>
        <div class="clearfix"></div>
    </div>


</div>
</div>
	<?php endwhile; ?>
<?php endif; ?>
