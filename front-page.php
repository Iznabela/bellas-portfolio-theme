<?php

get_header();

$backgroundImageArray = get_field('background_image');
$backgroundImage = $backgroundImageArray['sizes']['large'];
$frontTitle = get_field('title');
$frontDescription = get_field('description');
$projectsLink = get_field('projects-link');
?>

<div class="background" <?php if( $backgroundImage ) : ?>
        style="background-image: url(<?php echo $backgroundImage; ?>);"
    <?php endif; ?>>
    <!-- <img src="<?php //echo $backgroundImage; ?>" class="backcontainer__photo" id="backcontainer__photo"> -->
</div>
<section class="front">
  <div class="front__banner">
  </div>
  <div class="front__container">
    <h1 class="front__container__title"><?php echo $frontTitle; ?>
      <p class="front__container__title__description"><?php echo $frontDescription ?></p>
      <a class="front__container__title__button btn btn btn-outline-dark" href="<?php echo $projectsLink ?>"><?php echo $projectsLink ?></a>
    </h1> 
  </div>
</section>

<?php
get_footer();