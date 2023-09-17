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
    <title>Достопримечательности Удмуртской Республики — Вход</title>
</head>
<body>
    <div class="wrap">
        <div class="container">
        <?php include("app/include/header.php"); ?>
        </div>

        <main>
            <div class="container my-5">
                <div class="reg_block">
                    <p class="txt30 bl">Доступ к правам администратора</p>
                    <p class="date_txt"><i>Если вы являетесь администратором и забыли логин или пароль, пожалуйста, уточните его у вашего работодателя или главного администратора сайта.</i></p><br>
                    <form action="log.php" method="post">
                        <input name="login" type="text" maxlength="255" placeholder="Логин*" class="inputline" required></br>
                        <input name="password" type="password" maxlength="255" placeholder="Пароль*" class="inputline" required></br>
                        <br>
                        <button name="btn_log" class="btn_log" id="logup-button" type="submit">Войти в админ-панель</button><br><br>

                        <div>
                            <p><?= $errMsg ?></p>
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