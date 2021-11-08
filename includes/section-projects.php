<?php

get_header();

?>

<div class="background" <?php if( $backgroundImage ) : ?>
        style="background-image: url(<?php echo $backgroundImage; ?>);"
    <?php endif; ?>>
    <!-- <img src="<?php //echo $backgroundImage; ?>" class="backcontainer__photo" id="backcontainer__photo"> -->
</div>
<section class="front" id="front">
  <div class="front__banner">
  </div>
  <div class="front__container">
    <div>
      <h1 class="front__container__title">PROJECTS</h1>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="front__container__title__under-title">
          <?php echo the_title(); ?>
        </div>
        <div class="front__container__title__description">
          <?php echo the_excerpt(); ?>
        </div>
        <?php 
        if ( has_post_thumbnail() ) {
          $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' );
          if ( ! empty( $large_image_url[0] ) ) {
              echo '<a href="' . esc_url( $large_image_url[0] ) . '" title="' . the_title_attribute( array( 'echo' => 0 ) ) . '">';
              echo get_the_post_thumbnail( $post->ID, 'thumbnail', array( 'class' => 'front__container__title__image' )); 
              echo '</a>';
          }
      ?> <br> <?php
      }
        endwhile; else: ?>
        <p>Sorry, no posts found.<p></p>
        <?php endif; ?>
  </div>
</div>

<?php
get_footer();
?>