<?php
include("path.php");
$role= selectRole('users', 'roles', $_SESSION['id_role']);
?>

<div class="admin_menu_block">
<p><?= $role['title_role'].", "?> <b><?= $_SESSION['login'] ?> </b></p>
    <hr>
    <nav id="nav" class="nav_list">
        <ul class="admin_nav">
            <li class="nav-item">
                <a class="nav-link" href="admin_posts.php">Публикации</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="admin_topics.php">Категории</a>
            </li>
            <?php if ($_SESSION['id_role']): ?>
                <li class="nav-item">
                    <a class="nav-link" href="admin_users.php">Администраторы</a>
                </li>
            <?php endif; ?>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo BASE_URL."logout.php" ?> ">Выход</a>
            </li>
        </ul>
    </nav>
    <hr>
</div>