 <?php
    /**
     * Template part for displaying posts
     *
     * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
     *
     * @package ampere
     */
    $categories = get_the_terms($post->ID, 'category');
    $ampere_blog_cat = get_theme_mod('ampere_blog_cat', false);
    $ampere_singleblog_social = get_theme_mod('ampere_singleblog_social', false);

    $social_shear_col = $ampere_singleblog_social ? "col-xl-6 col-lg-6 col-md-6" : "col-xl-12 col-md-12 col-lg-12";

    if (is_single()) : ?>

     <article id="post-<?php the_ID(); ?>" <?php post_class('postbox__item tp-postbox-item-wrapper mb-80 format-image'); ?>>
         <?php if (has_post_thumbnail()) : ?>
             <div class="tp-postbox-item-thumb p-relative mb-25">
                 <?php the_post_thumbnail('full', ['class' => 'img-responsive']); ?>

             </div>
         <?php endif; ?>
         <!-- blog meta -->
         <?php get_template_part('template-parts/blog/blog-meta'); ?>

         <h3 class="tp-postbox-title2"><?php the_title(); ?></h3>
         <?php the_content(); ?>
         <?php
            wp_link_pages([
                'before'      => '<div class="page-links">' . esc_html__('Pages:', 'ampere'),
                'after'       => '</div>',
                'link_before' => '<span class="page-number">',
                'link_after'  => '</span>',
            ]);
            ?>
         <?php if (has_tag()) : ?>
             <div class="tp-postbox-share-wrapper">
                 <div class="row">
                     <div class="<?php echo esc_attr($social_shear_col); ?>">
                         <?php echo ampere_get_tag(); ?>
                     </div>
                     <?php ampere_blog_social_share() ?>
                 </div>
             </div>
         <?php endif; ?>
     </article>

 <?php else : ?>




     <article class="col-lg-6 col-md-6">
         <div id="post-<?php the_ID(); ?>" <?php post_class('item blog_card tp-postbox-item mb-50 format-standard'); ?>>

             <?php if (has_post_thumbnail()) : ?>
                 <div class="post-img tp-postbox-thumb p-relative">
                     <a href="<?php the_permalink(); ?>">
                         <?php the_post_thumbnail('full', ['class' => 'img-responsive']); ?>
                         <div class="posted_on"> <span class="date">19</span> <span class="month">July</span> </div>
                     </a>
                 </div>
             <?php endif; ?>

             <div class="post-detail">
                 <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                 <?php get_template_part('template-parts/blog/blog-meta'); ?>

                 <div class="description">
                     <?php the_excerpt(); ?>
                     <?php get_template_part('template-parts/blog/blog-btn'); ?>
                     <!-- <a href="blog-details.html" class="theme-button-one bttn color-one" data-text="Learn More"><span>Learn More</span></a> -->
                 </div>
             </div>
         </div>
     </article>


 <?php endif; ?>