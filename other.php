<?php
include("path.php");
include("app/controllers/users.php");
include("app/controllers/topics.php");
include "app/controllers/posts.php";

$posts = selectAll1('posts','id_post', 'id_city',$_GET['id_city']);
$id_city_get=($_GET);
?>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style/bootstrap.min.css">
    <link rel="stylesheet" href="assets/style/style.css">
    <link rel="stylesheet" href="assets/style/media.css">
    <title>Достопримечательности Удмуртской Республики — Все места</title>
</head>

<body>
    <div class="wrap">
        <div class="container">
            <?php include("app/include/header.php"); ?>
        </div>

        <main>
            <div class="container my-5">
                <div class="sights_block">
                    <div class="other_sort">
                        <p class='hidden'><?=$city = selectOne('cities', ['id_city' => $_GET['id_city']]); ?></p>
                        <p class="txt30">Достопримечательности, <span class="r"> <?=$city['name_city']; ?></span></p>
                        <div class="sort_other">
                            <img src="/assets/img/sort.png">

                            <div id="Navigation" class="sort_select_other">
                                <ul class="Navigation">
                                    <li><a href="<?= BASE_URL . 'other.php?id_city='. $city['id_city'] ?>" >Cначала новые &nbsp <span
                                                class="arrow_down">v</span></a>
                                        <ul>
                                            <li><a href="<?= BASE_URL . 'other.php?id_city='. $city['id_city'] ?>">Cначала новые</a></li>
                                            <?php foreach ($topics as $key => $topic): ?>
                                                <li>
                                                    <a
                                                        href="<?= BASE_URL . 'category.php?id_city=' . $city['id_city'].'&id_category=' . $topic['id_topic']; ?>"><?= $topic['title_topic'] ?></a>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="sights my-4">
                        <?php foreach ($posts as $post): ?>
                            <a href="<?= BASE_URL . 'single.php?post=' . $post['id_post']; ?>">
                                <div class="card_sight pntr other_page">
                                    <div class="box_img"><img class="card_sight_img"
                                            src="<?= BASE_URL . 'assets/img/posts/' . $post['img']; ?>"
                                            alt="<?= $post['title'] ?>"></div>
                                    <div class="txt_card">
                                        <div class="time">
                                            <img class="clock" src="/assets/img/time.png">
                                            <p class="date_txt">
                                                <?= mb_substr($post['date'], 0, -3, 'UTF-8') ?>
                                            </p>
                                        </div>
                                        <p class="txt20 other_txt">
                                            <?= $post['title'] ?>
                                        </p>
                                        <p class="date_txt other_txt gl_desr">
                                            <?= mb_substr($post['description'], 0, 300, 'UTF-8') . '...'; ?>
                                        </p>
                                    </div>

                                </div>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </main>
        <?php include("app/include/footer.php"); ?>
    </div>
    <script src="assets/scripts/script.js"></script>
</body>

</html>