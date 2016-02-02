<?php

/*
Template Name: Press page
*/

?>

<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>
<div id="pressExtended">
        <div class="pressOverlay">
            <span class="noAwards cerchioX"><span class="glyphicon glyphicon-remove"></span></span>
        </div>
    <div class="container firstBg">
        <h2 class="theTitle"><?php the_title() ?></h2>
    </div>
    <div class="container" style="padding-top: 20px">

        <div class="col-lg-12">
            <p><?php echo the_content() ?></p>
        </div>
    </div>


</div>
<script>
$(".noAwards").click(function(){
    $("body").css("overflow","auto");
    $("#pressExtended").remove();
});

</script>
	<?php endwhile; ?>
<?php endif; ?>
