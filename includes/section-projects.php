<?php

get_header();

$backgroundImageArray = get_field('projects_background_image');
$backgroundImage = $backgroundImageArray['sizes']['large'];

?>

<div class="projects-background" <?php if ( $backgroundImage ) : ?>
        style="background-image: url(<?php echo $backgroundImage; ?>);"
  <?php endif; ?>>
</div>
<section class="projects" id="projects">
  <div class="projects__container">
    <div class="projects__container__content">
      <h1 class="projects__container__content__title">PROJECTS</h1>
      <div class="projects__container__content__posts">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="projects__container__content__posts__post">
          <h2 class="projects__container__content__posts__post__title"><?php echo the_title(); ?></h2>
          <p class="projects__container__content__posts__post__description"><?php echo the_excerpt(); ?></p>
        <?php 
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
    </div>
  </div>
</section>
<?php
get_footer();
?>