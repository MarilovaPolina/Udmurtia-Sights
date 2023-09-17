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
    <title>Достопримечательности Удмуртской Республики — Категории</title>
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
                    <p class="txt30 bl publ_txt">Категории</p>
                    <a class="btn_log btn_add" name="" href="add_topic.php">Новая категория</a>

                    <div class="scroll">
                        <table class="table">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Название</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                <?php foreach ($topics as $key => $topic): ?>
                                    <tr>
                                        <th scope="row">
                                            <?= $topic['id_topic']; ?>
                                        </th>
                                        <td>
                                            <?= $topic['title_topic']; ?>
                                        </td>
                                        <td><a href="del_topic.php?del_id=<?= $topic["id_topic"]; ?>"  class="del_a">Delete</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    <div class="scroll">
                </div>
            </div>
        </main>
<p class='place'></p>
        <?php include("app/include/footer.php"); ?>
    </div>
    <script src="assets/scripts/script.js"></script>
</body>

</html>