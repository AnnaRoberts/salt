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
        <div class="six columns">  
            <?php dynamic_sidebar('about-me'); ?>
        </div>
    <!-- END SIDEBAR -->
        </div>
    </div> 

<script src="https://code.jquery.com/jquery-2.2.3.min.js"   integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo="   crossorigin="anonymous"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() . "/js/jquery.backstretch.min.js"; ?>"> </script>  
<script type="text/javascript" src="<?php echo get_template_directory_uri() . "/js/main.js"; ?>"> </script>  
<script type="text/javascript">
    $(document).ready(function() {

        $.backstretch("<?php echo get_template_directory_uri() . '/img/home-background.jpg'; ?>");

    });
</script> 



<?php get_footer(); ?>
