<?php   
    include("path.php");
    include("app/controllers/posts.php");
?>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style/bootstrap.min.css">
    <link rel="stylesheet" href="assets/style/style.css">
    <link rel="stylesheet" href="assets/style/media.css">
    <title>Достопримечательности Удмуртской Республики — О нас</title>
</head>

<body>
    <div class="wrap">
        <div class="container">
            <?php include("app/include/header.php"); ?>
        </div>

        <main>
            <div class="container my-4">
                <div class="single_block">
                    <img class="center_img" src="assets/img/logo.png">
                    <p class="txt30">О нас</p>
                    <p class="txt20 descr_single">«Достопримечательности Удмуртской Республики» — это проект об архитектурном наследнии народа, ныне живущего на территории Удмуртии. Проект, который в полной мере отражает всю историческую красоту этих краев и помогает жителям и туристам узнать больше о городах республики. </p>
                    <p class="txt30">Наша цель</p>
                    <p class="txt20 descr_single">Главной задачей проекта является сохранение культурного наследия и помощь в создании нового туристического бренда Удмуртской Республики. Помимо этого, он позволяет создать интересный интерактивный гид по различным достопримечательностям: новым и давно известным местам, скульптурам, памятникам, усадьбам и музеям. </p>
                    <p class="txt30">О каких городах наш проект</p>
                    <p class="txt20 descr_single">Мы пишем о всех 6 городах Удмуртии:<b> об <a class="gl_desr" href="<?= BASE_URL .'?id_city=1'?> ">Ижевске</a>, <a class="gl_desr" href="<?= BASE_URL .'?id_city=3'?> ">Глазове</a>, <a class="gl_desr" href="<?= BASE_URL .'?id_city=5'?> ">Камбарке</a>, <a class="gl_desr" href="<?= BASE_URL .'?id_city=6'?> ">Можге</a>, <a class="gl_desr" href="<?= BASE_URL .'?id_city=7'?> ">Сарапуле</a> <a class="gl_desr" href="<?= BASE_URL .'?id_city=8'?> ">и Воткинске.</a></b></p>
                </div>
            </div>
        </main>

        <?php include("app/include/footer.php"); ?>
    </div>
    <script src="assets/scripts/script.js"></script>
</body>

</html>