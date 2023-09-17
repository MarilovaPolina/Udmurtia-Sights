<?php
include("path.php");
include("app/controllers/users.php");
include("app/controllers/topics.php");
include "app/controllers/posts.php";


$post= selectTopic('posts', 'topics', $_GET['post']);
$c_post= selectCity('posts', 'cities', $_GET['post']);

?>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style/bootstrap.min.css">
    <link rel="stylesheet" href="assets/style/style.css">
    <link rel="stylesheet" href="assets/style/media.css">
    <title>Достопримечательности Удмуртской Республики — <?= $post['title']; ?></title>
</head>

<body>
    <div class="wrap">
        <div class="container">
            <?php include("app/include/header.php"); ?>
        </div>

        <main>
            <div class="container my-4">
                <div class="single_block">
                    <p class="txt40">
                        <?= $post['title']; ?>
                    </p>
                    <div class="time">
                        <img src="/assets/img/time.png">
                        <p class="date_txt">
                            <?= mb_substr($post['date'], 0, -3, 'UTF-8').';'; ?>&nbsp&nbsp
                        </p>
                        <p  class="date_txt"><?= $c_post['name_city'] .';'?>&nbsp&nbsp</p>
                        <p  class="date_txt"><?= $post['title_topic']?></p>
                    </div>
                    <img class="w-100" src="<?= BASE_URL . 'assets/img/posts/' . $post['img']; ?>"
                        alt="<?= $post['title'] ?>">
                    <p class="txt20 my-4 descr_single">
                        <?= $post['description'] ?>
                    </p>
                </div>
            </div>
        </main>

        <?php include("app/include/footer.php"); ?>
    </div>
    <script src="assets/scripts/script.js"></script>
</body>

</html>