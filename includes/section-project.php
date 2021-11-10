<?php
   get_header();
?>
<div>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
      if ( has_post_thumbnail() ) {
          $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' );
          if ( ! empty( $large_image_url[0] ) ) {
              echo '<a href="' . the_title_attribute( array( 'echo' => 0 ) ) . '" title="' . the_title_attribute( array( 'echo' => 0 ) ) . '">';
              echo get_the_post_thumbnail( $post->ID, 'thumbnail', array( 'class' => 'projects__container__content__posts__post__img' )); 
              echo '</a>';
          }
      ?> </div> <?php
      }
        endwhile; else: ?>
      <p>Sorry, no posts found.<p></p>
      <?php endif; ?>
   </div>

<?php
   get_footer();
?>