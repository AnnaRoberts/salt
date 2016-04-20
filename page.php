<?php get_header(); ?>  
    
    <div class="page-content">
        <div class="row">
            <div class="six columns">
                <?php if (have_posts()) :     
                    while (have_posts()) : the_post(); ?> 
                        <h2><?php the_title(); ?></h2>
                        <?php the_content();
                     endwhile;
                endif; ?>            
            </div>

        <!-- BEGIN SIDEBAR -->
        <div class="four columns">
            <?php dynamic_sidebar('about-me'); ?>
        </div>
    <!-- END SIDEBAR -->
        </div>
    </div> 

<script type="text/javascript" src="<?php get_template_directory_uri() . "/js/jquery-2.1.4min (1).js"; ?>"> </script>   
<script type="text/javascript" src="<?php get_template_directory_uri() . "js/jquery.backstretch.min.js"; ?>"> </script>  
<script type="text/javascript" src="<?php get_template_directory_uri() . "js/main.js"; ?>"> </script>   


<?php get_footer(); ?>
