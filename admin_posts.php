<?php   
    include("path.php");
    include("app/controllers/posts.php");
    $postsTopic=selectAllFromPostsWithTopics('posts', 'cities', 'id_city','id_city');
    //tt($_SESSION);
?>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style/bootstrap.min.css">
    <link rel="stylesheet" href="assets/style/style.css">
    <link rel="stylesheet" href="assets/style/media.css">
    <title>Достопримечательности Удмуртской Республики — Публикации</title>
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
                    <p class="txt30 bl publ_txt">Публикации</p>
                    <a class="btn_log btn_add" href="add_post.php">Новая публикация</a>
                    <div class="scroll">
                        <table class="table ">
                            <thead class="table-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Название</th>
                                <th scope="col">Город</th>
                                <th scope="col">Дата</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody class="table-group-divider">
                            <?php foreach ($postsTopic as $key => $post): ?>
                                <tr>
                                    <th scope="row"><?= $post['id_post']; ?></th>
                                    <td><?= mb_substr($post['title'], 0, 60, 'UTF-8').'...'; ?></td>
                                    <td><?= $post['name_city']; ?></td>
                                    <td><?= $post['date']; ?></td>
                                    <td><a href="edit_post.php?id_post=<?= $post['id_post'];?>" class="edit_a">Edit</a></td>
                                    <td><a href="edit_post.php?del_id_post=<?= $post['id_post'];?>" onclick="delModalPost()" class="del_a">Delete</a></td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
        
        <?php include("app/include/footer.php"); ?>
    </div>
    <script src="assets/scripts/script.js"></script>
</body>
</html>