<?php get_header(); ?>
     
    <section class="row">
        <div class="two columns">
            <?php 
                $mood = get_post_meta($post->ID, 'mood', true); 
                if ($mood) {
                    echo "<h4>Mood: " . $mood . "</h4>";
                } else { ?>
                    <br />
                <?php }
            ?>
            <?php 
                $activity = get_post_meta($post->ID, 'Activity_While_Writing', true); 
                if ($activity) {
                    echo "<h4>Activity: " . $activity . "</h4>";
                } else { ?>
                    <br />
                <?php }
            ?>
        </div>
        <div class="eight columns">
             <?php 
             if ( have_posts() ) {
                while ( have_posts() ) {
                     the_post(); ?> 
                    <h3><?php the_title(); ?></h3>
                    <h4><?php the_date(); ?></h4>
                    <?php if ( has_post_thumbnail() ) {
                        ?> <div class="single-post-thumbnail">
                        <?php  the_post_thumbnail('large'); ?>
                        </div>
                        <?php
                        }  
                        the_content();
                } // end while
             }  // end if
             ?>
        </div>
        <div class ="two columns">
            <br/>
        </div>
     </section>

<?php get_footer(); ?>