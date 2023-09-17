<?php
include("path.php");
include("app/controllers/users.php");
include("app/controllers/topics.php");
include ("app/controllers/posts.php");
if(empty($_GET['id_city'])){
    $_GET['id_city']=1;
}
$posts = selectAll1('posts','id_post', 'id_city',$_GET['id_city']);
?>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style/bootstrap.min.css">
    <link rel="stylesheet" href="assets/style/style.css">
    <link rel="stylesheet" href="assets/style/media.css">
    <title>Достопримечательности Удмуртской Республики — Главная</title>
</head>

<body>
    <div class="container">
        <?php include("app/include/header.php"); ?>
    </div>

    <main>
        <div class="container my-5">
            <div class="sights_block">
                <div class="row">
                    <?php
                    $i = 0;
                    foreach ($posts as $post) {
                        if ($i < 1) { ?>
                            <div class="col-lg-6 col-sm-12 new">
                                <div class="box_img_new">
                                    <img class="w-100" src="<?= BASE_URL . 'assets/img/posts/' . $post['img']; ?>"
                                        alt="<?= $post['title'] ?>">
                                </div>
                                <p class="txt14 r my-4">НОВОЕ В ГОРОДЕ <span class="date_txt">
                                        <?= mb_substr($post['date'], 0, -3, 'UTF-8'); ?>
                                    </span></p>
                                <p class="txt30 card_link pntr"><a
                                        href='<?= BASE_URL . 'single.php?post=' . $post['id_post']; ?>'><?= mb_substr($post['title'], 0, 100, 'UTF-8') . '...'; ?></a></p>
                            </div>
                        <?php }
                        $i++;
                    } ?>

                    <div class="col-xl-6 col-sm-12 other">
                        <p class='hidden'><?=$city = selectOne('cities', ['id_city' => $_GET['id_city']]); ?></p>
                        <p class="txt30">Достопримечательности, <span class="r"> <?=$city['name_city']; ?></span></p>
                        
                        <?php
                        $i = 0;
                        foreach ($posts as $post) {
                            if ($i > 0 && $i < 5) { ?>
                                <a href='<?= BASE_URL . 'single.php?post=' . $post['id_post']; ?>'>
                                    <div class="card_sight pntr">
                                        <div class="box_img">
                                            <img class="card_sight_img" src="<?= BASE_URL . 'assets/img/posts/' . $post['img']; ?>" alt="<?= $post['title'] ?>">
                                        </div>
                                        <div class="txt_card overflow">
                                            <div class="time">
                                                <img class="clock" src="/assets/img/time.png">
                                                <p class="date_txt">
                                                    <?= mb_substr($post['date'], 0, -3, 'UTF-8'); ?>
                                                </p>
                                            </div>
                                            <p class="txt20 card_link">
                                                <?= mb_substr($post['title'], 0, 75, 'UTF-8') . '...'; ?>
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            <?php }
                            $i++;
                        } ?>

                        <a href="<?= BASE_URL . 'other.php?id_city=' . $city['id_city']; ?>" class="txt14 r pntr"><b>ВСЕ МЕСТА —></b></a>
                    </div>
                </div>
            </div>

            <div class="area_block my-6">
                <p class="txt30 ">Административно-территориальное устройство</p>
                <div class="row counts">
                    <p class="col-lg-2 col-md-6 txt14 r first_col">В перечень муниципальных образований Удмуртской
                        Республики входят:</p>
                    <p class="col-lg-2 col-md-6 txt14 alcenter"><span
                            class="txt40 count_txt">333</span><br><b>МУНИЦИПАЛЬНЫХ ОБРАЗОВАНИЯ</b></p>
                    <p class="col-lg-2 col-md-6 txt14 alcenter"><span class="txt40 count_txt">5</span><br><b>ГОРОДСКИХ
                            ОКРУГОВ</b></p>
                    <p class="col-lg-2 col-md-6 txt14 alcenter"><span
                            class="txt40 count_txt">25</span><br><b>МУНИЦИПАЛЬНЫХ РАЙОНОВ</b></p>
                    <p class="col-lg-2 col-md-6 txt14 alcenter"><span class="txt40 count_txt">302</span><br><b>СЕЛЬСКИХ
                            ПОСЕЛЕНИЯ</b></p>
                    <p class="col-lg-2 col-md-6 txt14 alcenter"><span class="txt40 count_txt">1</span><br><b>ГОРОДСКОЕ
                            ПОСЕЛЕНИЕ</b></p>
                </div>
                <img class="area_img" src="assets/img/UDM.png">
            </div>

            <div class="glava_block my-6">
                <p class="txt30 ">Глава Удмуртской Республики</p>
                <a href="glava.php">
                    <div class="glava">
                        <img class="img_glava" src="assets/img/бречалов.jpg">
                        <div class="txt_card ">
                            <p class="txt20">Бречалов Александр Владимирович</p>
                            <p class="txt20 regular gl_desr">Бречалов Александр Владимирович — российский
                                государственный и политический деятель. Глава Удмуртской Республики с 18 сентября 2017.
                                Секретарь Удмуртского регионального отделения партии «Единая Россия».</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </main>

    <?php include("app/include/footer.php"); ?>
    <script src="assets/scripts/script.js"></script>
</body>

</html>