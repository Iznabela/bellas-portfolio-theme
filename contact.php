<?php
/*
 Template Name: Contact
 */

$contactTitle = get_field('contact_title');
$contactDescription = get_field('contact_description');
$email = get_field('email');

$linkedin = get_field('linkedin_profile');
if( $linkedin ): 
    $linkedin_url = $linkedin['url'];
    $linkedin_title = $linkedin['title'];
    $linkedin_target = $linkedin['target'] ? $linkedin['target'] : '_self';
 endif;

$github = get_field('github_profile');
if( $github ): 
    $github_url = $github['url'];
    $github_title = $github['title'];
    $github_target = $github['target'] ? $github['target'] : '_self';
endif;
?>

<div class="contact__container">
    <div class="contact__container__content">
        <h1 class="contact__container__content__title"><?php echo $contactTitle; ?></h1>
        <p class="contact__container__content__description"><?php echo $contactDescription; ?><p> 
        <div class="contact__container__content__socials">
            <div class="contact__container__content__email">
                <i class="bi bi-envelope-fill" style="font-size: 2rem; color: whitesmoke;"></i>
                <?php echo $email ?>
            </div> 
            <a class="button" href="<?php echo esc_url( $linkedin_url ); ?>" target="<?php echo esc_attr( $linkedin_target ); ?>">
                <div class="contact__container__content__linkedin">
                    <i class="bi bi-linkedin" style="font-size: 2rem; color: whitesmoke;"></i>
                    <?php echo esc_html( $linkedin_title ); ?>
                </div>
            </a>
            <a class="button" href="<?php echo esc_url( $github_url ); ?>" target="<?php echo esc_attr( $github_target ); ?>">
                <div class="contact__container__content__github">
                    <i class="bi bi-github" style="font-size: 2rem; color: whitesmoke;"></i>
                    <?php echo esc_html( $github_title ); ?>
                </div>
            </a>
        </div>
    </div>
</div>