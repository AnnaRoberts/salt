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

<script src="js/jquery-2.1.4.min (1).js"></script>   
<script src="js/jquery.backstretch.min.js"></script>
<script src="js/main.js"></script>

<?php get_footer(); ?>