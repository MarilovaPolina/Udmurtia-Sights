<footer>
    <img src="assets/img/logo.png" class="logo_img"><br><br>
    <a href="about.php" class="footer_link txt20">О сайте</a><br>

    <?php if (isset($_SESSION['id_user'])): ?>
        <a href="<?php echo BASE_URL."admin_posts.php" ?>" class="footer_link txt20">Администраторам</a><br><br>
    <?php else: ?>
        <a href="<?php echo BASE_URL."log.php" ?>" class="footer_link txt20">Администраторам</a><br><br>
    <?php endif ?>
    <p class="date_txt">© 2023 Достопримечательности Удмуртской Республики</p>
</footer>