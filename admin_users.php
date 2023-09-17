<?php   
    include("path.php");
    include("app/controllers/users.php");
    $userRole=selectAllFromPostsWithTopics('users', 'roles', 'id_role','id_role');
?>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style/bootstrap.min.css">
    <link rel="stylesheet" href="assets/style/style.css">
    <link rel="stylesheet" href="assets/style/media.css">
    <title>Достопримечательности Удмуртской Республики — Администраторы</title>
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
                    <p class="txt30 bl publ_txt">Администраторы</p>
                    <a class="btn_log btn_add" href="add_user.php">Добавить администратора</a>
                    <div class="scroll">
                        <table class="table ">
                            <thead class="table-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Логин</th>
                                <th scope="col">Роль</th>
                                <th scope="col">ФИО</th>
                                <th scope="col">Телефон</th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody class="table-group-divider">
                            <?php foreach ($userRole as $key => $admin): 
                                if ($admin['id_user']!==$_SESSION['id_user']): ?>
                                <tr>
                                    <th scope="row"><?= $admin['id_user']; ?></th>
                                    <td><?= $admin['login']; ?></td>
                                    <td><?= $admin['title_role']; ?></td>
                                    <td><?= $admin['surname'].' '.$admin['name'].' '.$admin['patronymic']; ?></td>
                                    <td><?= $admin['phone']; ?></td>
                                    <td><a href="del_topic.php?del_id_user=<?=$admin['id_user'];?>" onclick="delModalUser()" class="del_a">Delete</a></td>
                                </tr>
                                <?php endif; ?>
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