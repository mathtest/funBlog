<?php
/**
 * The Template for displaying all single posts
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

 <div class="subWrapper">
	<?php if ( have_posts() ): ?>
	
	<?php while ( have_posts() ) : the_post(); ?>
		
	            <header>
	                <div class="openButton"></div>
	                <h1><?php the_title(); ?></h1>
	                <small><?php the_subtitle() ?></small>
	            </header>
				
                <div class="content">

                    <?php the_content(); ?>
            		<?  get_post_meta(  ); ?>

                </div>
				
				<div class="divider"></div>

	<?php endwhile; ?>
	
	<?php else: ?>
	<h2>No posts to display</h2>
	<?php endif; ?>

</div><!--subwrap-->


<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>