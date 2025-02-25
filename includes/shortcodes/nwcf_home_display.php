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
                        $class              ="no-image";
                        $facebook_handle    = get_post_meta( $query->post->ID, 'facebook_handle', TRUE ); 
                        $instagram_handle   = get_post_meta( $query->post->ID, 'instagram_handle', TRUE ); 
                        $twitter_handle     = get_post_meta( $query->post->ID, 'twitter_handle', TRUE ); 
                        $tiktok_handle      = get_post_meta( $query->post->ID, 'ttiktok_handle', TRUE );
                        
                        
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
                                <div class="tablers__item--social-media">
                                    <?php if(!empty($facebook_handle)): ?>
                                        <a href="https://facebook.com/<?php echo $facebook_handle; ?>" target="_blank"><i class="fa-brands fa-square-facebook"></i></a>
                                    <?php endif; ?>
                                    <?php if(!empty($instagram_handle)): ?>
                                        <a href="https://instagram.com/<?php echo $instagram_handle; ?>" target="_blank"><i class="fa-brands fa-square-instagram"></i></a>
                                    <?php endif; ?>   
                                    <?php if(!empty($twitter_handle)): ?>
                                        <a href="https://x.com/<?php echo $twitter_handle; ?>" target="_blank"><i class="fa-brands fa-square-twitter"></i></a>
                                    <?php endif; ?>                                       
                                    <?php if(!empty($tiktok_handle)): ?>
                                        <a href="https://tiktok.com/<?php echo $tiktok_handle; ?>" target="_blank"><i class="fa-brands fa-tiktok"></i></a>
                                    <?php endif; ?>                                      
                                    
                                </div>
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