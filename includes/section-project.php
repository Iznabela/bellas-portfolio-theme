<?php
   get_header();
?>
<section class="project">
   <div class="project__container">
      <div class="project__container__content">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
         <h2 class="project__container__content__title"><?php echo the_title(); ?></h2>
         <p class="project__container__content__description"><?php echo the_excerpt(); ?></p>
         <?php 
         if ( has_post_thumbnail() ) {
               $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' );
               if ( ! empty( $large_image_url[0] ) ) {
                  echo get_the_post_thumbnail( $post->ID, 'thumbnail', array( 'class' => 'project__container__content__img' )); 
                  echo '</a>';
               }
         ?> </div> <?php
         }
            endwhile; else: ?>
         <p>Sorry, no posts found.<p></p>
         <?php endif; ?>
   </div>
</section>

<?php
   get_footer();
?>