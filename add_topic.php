<?php
include("path.php");
include("app/controllers/topics.php");
?>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style/bootstrap.min.css">
    <link rel="stylesheet" href="assets/style/style.css">
    <link rel="stylesheet" href="assets/style/media.css">
    <title>Достопримечательности Удмуртской Республики — Добавить категорию</title>
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
                    <p class="txt30 bl publ_txt">Добавление новой категории</p>

                    <form action="" method="post" class="info_item" enctype="multipart/form-data">
                        <label class="add_input">Название категории: <br><input name="title" type="text"
                                class="inputline add_input" value="<?=isset ($name) ? $name : ""; ?>" placeholder="Название категории"
                                required></label>
                        <button class="btn_log create_btn" type="submit" name="add_topic">Добавить категорию</button>
                        <div>
                            <p class="err">
                                <?= $errMsg ?>
                            </p>
                            <p class="succ">
                                <?= $succMsg ?>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </main>

        <?php include("app/include/footer.php"); ?>
    </div>
    <script src="assets/scripts/script.js"></script>
</body>

</html>