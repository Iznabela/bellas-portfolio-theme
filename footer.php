<?php wp_footer();

$fullName = get_field('full_name', 10);
$year = get_field('year', 10);
$email = get_field('email', 10);
$linkedIn = get_field('linkedin', 10);
$github = get_field('github', 10);
$address = get_field('address', 10);
$postalCode = get_field('postal_code', 10);
$city = get_field('city', 10);
?>

<div class="footer__container">
    <div class="footer__container__content">
        <div class="footer__container__content__contact">
            <p>+46705433023</p>
            <p><?php echo $email; ?></p>
            <a href="<?php echo $linkedIn; ?>"><i class="bi bi-linkedin" style="font-size: 1.5rem; color: whitesmoke;"></i></a>
            <a href="<?php echo $github; ?>"><i class="bi bi-github" style="font-size: 1.5rem; color: whitesmoke;"></i></a>
        </div>
        <div class="footer__container__content__adress">
            <p><?php echo $fullName; ?></p>
            <p><?php echo $address; ?></p>
            <p><?php echo $postalCode; ?>, <?php echo $city; ?></p>
        </div>
        <div class="footer__container__content__copyright">
            <h3>© <?php echo $fullName; ?> <?php echo $year; ?></h3>
        </div>
    </div>
</div>
</body>
</html>