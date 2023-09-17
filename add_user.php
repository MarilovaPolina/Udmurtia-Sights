<?php
include("path.php");
include("app/controllers/users.php");
?>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style/bootstrap.min.css">
    <link rel="stylesheet" href="assets/style/style.css">
    <link rel="stylesheet" href="assets/style/media.css">
    <title>Достопримечательности Удмуртской Республики — Добавить администратора</title>
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
                    <p class="txt30 bl publ_txt">Добавление нового администратора</p>

                    <form action="add_user.php" method="post" class="info_item" enctype="multipart/form-data">
                        <label class="add_input">Логин: <br><input value="<?= $login; ?>" name="login"
                                type="text" class="inputline add_input" placeholder="Логин администратора"
                                required>
                        </label>
                        <label class="add_input">Фамилия: <br><input value="<?= $surname; ?>" name="surname"
                                type="text" class="inputline add_input" placeholder="Фамилия администратора"
                                required>
                        </label>
                        <label class="add_input">Имя: <br><input value="<?= $name; ?>" name="name"
                                type="text" class="inputline add_input" placeholder="Имя администратора"
                                required>
                        </label>
                        <label class="add_input">Отчество: <br><input value="<?= $patronymic; ?>" name="patronymic"
                                type="text" class="inputline add_input" placeholder="Отчество администратора"
                                required>
                        </label>
                        <label class="add_input">Телефон: <br><input value="<?= $phone; ?>" name="phone"
                                type="text" class="inputline add_input" placeholder="Номер телефона администратора"
                                required>
                        </label>
                        <label class="add_input">Пароль: <br><input name="passF"
                                type="text" class="inputline add_input" placeholder="Пароль администратора"
                                required>
                        </label>
                        <label class="add_input">Повторите пароль: <br><input name="passS"
                                type="text" class="inputline add_input" placeholder="Повторите пароль"
                                required>
                        </label>
                        
                        <input name="id_role" value='1' type="checkbox"> <label>Главный администратор</label><br>
                        <button class="btn_log create_btn my-2" type="submit" name="add_user">Добавить
                            администратора</button>

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