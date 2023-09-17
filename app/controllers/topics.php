<?php
require_once './app/database/db.php';

$errMsg = "";
$succMsg = "";

$posts = selectAll('posts');
$topics = selectAll('topics');

//добавление категории
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_topic'])) {
    $title = trim($_POST['title']);
    if ($title === '') {
        $errMsg = 'Заполните все поля';
    } else {
        $exist = selectOne('topics', ['title_topic' => $title]);
        if ($exist['title_topic'] === $title) {
            $errMsg = 'Данная категория уже зарегестрирована';
        } else {
            $topic = [
                'title_topic' => $title
            ];
            $id_topic = insert('topics', $topic);
            $title = selectOne('topics', ['id_topic' => $id_topic]);
            $succMsg = 'Категория успешно зарегестрирована';
        }
    }

} else {
    $title = '';
}

//delete category
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['del_id'])) {
    $id_topic = $_GET['del_id'];

    $isPostTopic = checkPostsWithTopics('posts',$_GET['del_id']);
    if (!$isPostTopic) {
        delete1('topics', $id_topic);
        header("Location: " . BASE_URL . "admin_topics.php");
    }
}
