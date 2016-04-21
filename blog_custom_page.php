<?php 
/*Template Name: Blog Posts */
get_header(); ?>
<?php query_posts('post_type=post&post_status=publish&posts_per_page=10&paged='. get_query_var('paged')); ?>
    <div class="blog-wrapper">
    <div class="row">
        <div class="twelve columns">
            <?php if (have_posts()) : 
                while (have_posts()) : the_post(); ?> 
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <p><?php the_excerpt(__('Continue reading »','example'));
                endwhile; ?></p>
                <!-- Navigation -->
                <div class="navigation">
                    <span class="newer"><?php previous_posts_link(__('« Newer','example')) ?></span> 
                    <span class="older"><?php next_posts_link(__('Older »','example')) ?></span>
                </div>
            <?php else: ?>
                <div class="404-section">
                    <p><?php _e('None found.', 'example'); ?></p>
                </div>
            <?php endif; wp_reset_query(); ?>
        </div>
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