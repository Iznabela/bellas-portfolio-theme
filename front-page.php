<?php

get_header();

$backgroundImageArray = get_field('background_image');
$backgroundImage = $backgroundImageArray['sizes']['large'];
$frontTitle = get_field('title');
$profession = get_field('profession');
$frontDescription = get_field('description');
$github = get_field('github_link');
?>

<div class="background" <?php if( $backgroundImage ) : ?>
        style="background-image: url(<?php echo $backgroundImage; ?>);"
    <?php endif; ?>>
    <!-- <img src="<?php //echo $backgroundImage; ?>" class="backcontainer__photo" id="backcontainer__photo"> -->
</div>
<section class="front" id="front">
<div class="front__banner"></div>
  <div class="front__container">
    <div class="front__container__content">
      <h1 class="front__container__content__title"><?php echo $frontTitle; ?></h1> 
      <p class="front__container__content__under-title"><?php echo $profession; ?></p>
      <p class="front__container__content__description"><?php echo $frontDescription ?></p>
      <div class="front__container__content__links">
        <a class="front__container__content__links__link" href="/wordpress/projects">Projects</a>
        <a class="front__container__content__links__link" href="<?php echo $github ?>">GitHub</a>
      </div>
    </div>
  </div>
  <a href="#about">
    <svg xmlns="http://www.w3.org/2000/svg" href="https//:google.com" width="128" height="128" fill="currentColor" class="bi-arrow-down-circle-fill front__arrow-down" viewBox="0 0 16 16">
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