<?php
include("path.php");
include("app/controllers/topics.php");
include("app/controllers/posts.php");
?>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style/bootstrap.min.css">
    <link rel="stylesheet" href="assets/style/style.css">
    <link rel="stylesheet" href="assets/style/media.css">
    <title>Достопримечательности Удмуртской Республики — Добавить публикацию</title>
</head>

<body>
    <div class="wrap">
        <div class="container">
            <?php include("app/include/header.php"); ?>
        </div>

        <main>
            <div class="container my-4">
                <?php include("app/include/admin_menu.php"); ?>

                <div class="posts_block my-4">
                    <p class="txt30 bl publ_txt">Добавление новой публикации</p>

                    <form action="add_post.php" method="post" class="info_item" enctype="multipart/form-data">
                        <label class="add_input">Название публикации: <br><input value="<?= $title; ?>" name="title"
                                type="text" class="inputline add_input" placeholder="Название публикации"
                                required></label>
                        <label>Фото: <input name="img" type="file" placeholder="Фото" required></label><br>

                        <label>Город:
                            <select name="city" class="sort_select pntr" required>
                            <?php foreach ($cities as $key => $city): ?>
                                    <option value="<?= $city['id_city']; ?>"><?= $city['name_city']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </label><br>

                        <label>Категория:
                            <select name="topic" class="sort_select pntr" required>
                                <?php foreach ($topics as $key => $topic): ?>
                                    <option value="<?= $topic['id_topic']; ?>"><?= $topic['title_topic']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </label>

                        <br>

                        <label class="add_input">Описание: <br><textarea name="description"
                                placeholder="Описание товара" class="add_input descr"
                                required><?= $description ?></textarea></label>
                        <br>

                        <button class="btn_log create_btn my-2" type="submit" name="add_post">Добавить
                            публикацию</button>

                        <div>
                            <p class="err">
                                <?= $errMsg ?>
                            </p>
                            <p class="succ">
                                <?= $succMsg ?>
                            </p>
                        </div>
                </div>
            </div>
        </main>

        <?php include("app/include/footer.php"); ?>
    </div>
    <script src="assets/scripts/script.js"></script>
</body>

</html>