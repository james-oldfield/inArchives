<?php get_header(); ?>
<div class="container text-center">
    
<!--post loop-->
<?php
if ( have_posts() ) :
	while ( have_posts() ) : the_post(); ?>
        
        <!--display thumbnail loop-->
        <div class="post-thumb col-xs-12 col-sm-3">

            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('post-thumb'); ?></a>
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><span class="title"><p><?php the_title(); ?></p></span></a>
            
        </div>    

        <!--END display thumbnail loop-->
    
	<?php endwhile;
else :
	echo wpautop( '<p class="sorry">Sorry, no posts were found</p>' );
endif;
?>
    
</div>

<?php get_footer(); ?>

