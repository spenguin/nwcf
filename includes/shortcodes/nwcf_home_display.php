<?php
/**
 * Render Audition parts
 * (Might need to be extended or rebuilt if section is used elsewhere)
 */

function nwcf_home_display( $atts = [], $content = null, $tag = '' )
{
    $args = [
        'post_type'     => 'tabler',
        'posts_per_page'=> -1
    ];
    $query = new WP_Query($args); 
    if( $query->have_posts() ): 
        ob_start(); ?>
            <div class="tablers">
                <?php
                    while($query->have_posts()): $query->the_post(); 
                        $class="no-image";
                    ?>
                        <div class="tablers__item">
                            <?php 
                                if( has_post_thumbnail() ): 
                                    $class = "";
                                    $src = wp_get_attachment_image_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
                                    <div class="tablers__item--image">
                                        <img src="<?php echo $src; ?>" />
                                    </div>
                                <?php endif; ?>
                            <div class="tablers__item--text <?php echo $class; ?>">
                                <h3><?php echo the_title(); ?></h3>
                            </div>
                        </div>
                    <?php
                    endwhile; ?>
            </div>
            <?php
        $return = ob_get_clean();
    endif;
    
    return $return;
}