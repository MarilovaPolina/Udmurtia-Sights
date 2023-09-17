<?php include "path.php";
include './app/database/db.php';
include './app/controllers/topics.php';
include './app/controllers/users.php';
?>
<html lang="ru">
    <body>
        <p>Невозможно удалить категорию, к которой привязаны публикации. Сначала удалите данные публикации.</p>
        <a href="<?= BASE_URL."admin_topics.php" ?> ">Вернуться назад</a>
    </body>
</html>