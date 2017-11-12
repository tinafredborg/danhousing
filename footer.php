       
        <footer class="site-footer">
           
        <nav class="site-nav">
                    <?php 
                    $args = array( 'theme_location' => 'footer');
                    ?>        
                    <?php wp_nav_menu ($args); ?>                       
                </nav>
            <p class="copyright"><?php bloginfo('name'); ?> - &copy; tina fredborg <?php echo date('Y'); ?></p>
        </footer> 

    </div> <!-- container 6-->
<?php wp_footer(); ?>
   
    </body>
</html> 


		
					
			
			
					
	