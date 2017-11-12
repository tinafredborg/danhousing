<?php

/* Template Name: lejemaal layout 
*/

get_header();

if (have_posts()) :
	while (have_posts()) : the_post(); ?>
	
	<article class="post page">
    <h2>Her finder du vores ledige lejligheder</h2>

    <?php the_post_thumbnail(banner-image); ?>
    <!-- column-container -->
    <div class="column-container clearfix">

        <!-- side-bar-left -->
        <div class="side-bar-left">
        <h1>filter</h1>  
        </div><!-- /side-bar-left -->
        
        <!-- center-column -->
        <div class="center-column">
        <h1>image</h1>  
        </div><!-- /center-column -->

        <!-- side-bar-right -->
        <div class="side-bar-right">
        <h1>image</h1>  
        </div><!-- /side-bar-right -->   


    </div>

		
	</article>
	
	<?php endwhile;
	
	else :
		echo '<p>No content found</p>';
	
    endif;
    
    get_sidebar();
	
get_footer();

?>