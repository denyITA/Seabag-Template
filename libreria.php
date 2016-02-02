<?php

/*
Template Name: Libreria
*/

?>

<div id="copertine">
<div class="openTab">
<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>

<div class="container" style="padding-top: 20px">

            <?php echo the_content() ?>
        <div class="clearfix"></div>
    </div>


</div>
</div>
	<?php endwhile; ?>
<?php endif; ?>

</script>
