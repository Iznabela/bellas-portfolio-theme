<?php

get_header();

$backgroundImageArray = get_field('background_image');
$backgroundImage = $backgroundImageArray['sizes']['large'];
$frontTitle = get_field('title');
$frontDescription = get_field('description');
$github = get_field('github_link');
?>

<div class="background" <?php if( $backgroundImage ) : ?>
        style="background-image: url(<?php echo $backgroundImage; ?>);"
    <?php endif; ?>>
    <!-- <img src="<?php //echo $backgroundImage; ?>" class="backcontainer__photo" id="backcontainer__photo"> -->
</div>
<section class="front" id="front">
  <div class="front__container">
    <div class="front__container__content">
      <h1 class="front__container__content__title"><?php echo $frontTitle; ?></h1> 
      <p class="front__container__content__under-title">under title</p>
      <p class="front__container__content__description"><?php echo $frontDescription ?></p>
      <div class="front__container__content__links">
        <a class="front__container__content__links__projects btn btn-outline-light" href="/wordpress/projects">Projects</a>
        <a class="front__container__content__links__button btn btn-outline-light" href="<?php echo $github ?>"><?php echo $github ?></a>
      </div>
    </div>
  </div>
  <a href="#about">
  <svg xmlns="http://www.w3.org/2000/svg" href="https//:google.com" width="128" height="128" fill="currentColor" class="bi bi-chevron-down front__arrow-down" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
</svg>
</a>
</button>
</section>

<section class="about" id="about">
	<?php get_template_part('about'); ?>
</section>

<section class="contact" id="contact">
  <?php get_template_part('contact'); ?>
</section>

<?php
get_footer();