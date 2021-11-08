<?php
/*
 Template Name: About
 */

$aboutImageArray = get_field('about_image');
$aboutImage = $aboutImageArray['sizes']['large'];
$aboutTitle = get_field('about_title');
$aboutDescription = get_field('about_description');
?>

<div class="about__container">
    <div class="about__container__image-container">
        <img src="<?php echo $aboutImage; ?>" class="about__container__image-container__img">
    </div>
    <div class="about__container__description-container">
        <h1 class="about__container__description-container__title"><?php echo $aboutTitle; ?></h1>
        <p class="about__container__description-container__description"><?php echo $aboutDescription; ?><p>  
    </div>
</div>