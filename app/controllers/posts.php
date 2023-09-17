<?php
require_once './app/database/db.php';

$errMsg = "";
$succMsg = '';
$title = '';
$topic = '';
$city = '';
$description = '';

$topics = selectAll('topics');
$posts = selectAll('posts');

//добавление записи
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_post'])) {

    if (!empty($_FILES['img']['name'])) {
        $imgName = time() . "_" . $_FILES['img']['name'];
        $fileTmpName = $_FILES['img']['tmp_name'];
        $fileType = $_FILES['img']['type'];
        $destination = ROOT_PATH . "\assets\img\posts\\" . $imgName;

        $result = move_uploaded_file($fileTmpName, $destination);

        if ($result) {
            $_POST['img'] = $imgName;
        } else {
            $errMsg = "Ошибка загрузки изображения на сервер";
        }
    } else {
        $errMsg = "Ошибка получения изображения";
    }

    $title = trim($_POST['title']);
    $img = trim($_POST['img']);
    $city = trim($_POST['city']);
    $topic = trim($_POST['topic']);
    $description = trim($_POST['description']);

    if ($title === '' || $description === '' || $topic === '' || $city === '') {
        $errMsg = 'Заполните все поля';
    } else {
        $post = [
            'title' => $title,
            'img' => $_POST['img'],
            'id_topic' => $topic,
            'id_city' => $city,
            'description' => $description
        ];
        $post = insert('posts', $post);
        $post = selectOne('posts', ['id_post' => $id_post]);
        $succMsg = 'Публикация опубликована';
    }
} else {
    $id_post = '';
    $title = '';
    $topic = '';
    $city = '';
    $description = '';
    $img = '';
}


// АПДЕЙТ СТАТЬИ
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id_post'])) {
    $post = selectOne('posts', ['id_post' => $_GET['id_post']]);

    $id_post = $post['id_post'];
    $title = $post['title'];
    $description = $post['description'];
    $topic = $post['id_topic'];
    $city = $post['id_city'];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['edit_post'])) {
    $id_post = $_POST['id_post'];
    $title = trim($_POST['title']);
    $img = trim($_POST['img']);
    $city = trim($_POST['city']);
    $topic = trim($_POST['topic']);
    $description = trim($_POST['description']);

    if (!empty($_FILES['img']['name'])) {
        $imgName = time() . "_" . $_FILES['img']['name'];
        $fileTmpName = $_FILES['img']['tmp_name'];
        $fileType = $_FILES['img']['type'];
        $destination = ROOT_PATH . "\assets\img\posts\\" . $imgName;

        $result = move_uploaded_file($fileTmpName, $destination);

        if ($result) {
            $_POST['img'] = $imgName;
        } else {
            $errMsg = "Ошибка загрузки изображения на сервер";
        }
    } else {
        $errMsg = "Ошибка получения изображения";
    }


    if ($title === '' || $description === '' || $topic === '' || $city === '') {
        $errMsg = 'Заполните все поля';
    } else {
        $post = [
            'title' => $title,
            'img' => $_POST['img'],
            'id_topic' => $topic,
            'id_city' => $city,
            'description' => $description
        ];

        $post = update("posts", $id_post, $post);
        $succMsg = 'Публикация успешно изменена';
    }
} else {
    $title = isset($_POST['title']) ? $_POST['title'] : '';
    $city = isset($_POST['id_city']) ? $_POST['id_city'] : '';
    $topic = isset($_POST['id_topic']) ? $_POST['id_topic'] : '';
    $description = isset($_POST['description']) ? $_POST['description'] : '';
}

// Удаление статьи
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['del_id_post'])) {
    $id_post = $_GET['del_id_post'];
    delete2('posts', $id_post);
    header("location: " . BASE_URL . 'admin_posts.php');
}