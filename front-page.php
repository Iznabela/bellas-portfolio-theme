<?php

get_header();

$backgroundImageArray = get_field('background_image');
$backgroundImage = $backgroundImageArray['sizes']['large'];
?>

<div class="background" <?php if( $backgroundImage ) : ?>
        style="background-image: url(<?php echo $backgroundImage; ?>);"
    <?php endif; ?>>
    <!-- <img src="<?php //echo $backgroundImage; ?>" class="backcontainer__photo" id="backcontainer__photo"> -->
</div>
<section class="front">
  <div class="front__container">
    <h1 class="front__container__title">TITLE
      <p class="front__container__description">tjena tjena</p>
      <a class="front__container__btn btn btn--round"></a>
      </h1>
  </div>
</section>

<?php
get_footer();