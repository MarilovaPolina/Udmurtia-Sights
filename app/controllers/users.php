<?php
//include SITE_ROOT . "/app/database/db.php";
require_once './app/database/db.php';

$errMsg = "";

function userAuth($user)
{
    $_SESSION['id_user'] = $user['id_user'];
    $_SESSION['id_role'] = $user['id_role'];
    $_SESSION['login'] = $user['login'];
    $_SESSION['name'] = $user['name'];
    $_SESSION['surname'] = $user['surname'];
    $_SESSION['patronymic'] = $user['patronymic'];
    $_SESSION['phone'] = $user['phone'];
    header('location: ' . BASE_URL . "admin_posts.php");
}

$users = selectAll('users');


// Код добавления пользователя в админке
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_user'])){

    $login = trim($_POST['login']);
    $id_role = 0;
    $surname = trim($_POST['surname']);
    $name = trim($_POST['name']);
    $patronymic = trim($_POST['patronymic']);
    $phone = trim($_POST['phone']);
    $passF = trim($_POST['passF']);
    $passS = trim($_POST['passS']);

    if($login === '' || $surname === '' || $name === '' || $patronymic === '' || $phone === '' || $passF === '' || $passS === ''){
        $errMsg="Не все поля заполнены!";
    }elseif (mb_strlen($login, 'UTF8') < 5){
        $errMsg="Логин должен быть более 5 символов";
    }elseif(!preg_match("/^[a-яA-Я ]*$/",$name) || !preg_match("/^[a-яA-Я ]*$/",$surname) || !preg_match("/^[a-яA-Я ]*$/",$patronymic)){
        $errMsg='ФИО может содержать только буквы';
    }elseif(mb_strlen($phone, 'UTF8')!==11 || !is_numeric($phone)){
        $errMsg='Номер телефона РФ должен содержать 11 цифр';
    }elseif(mb_strlen($passF, 'UTF8')<5){
        $errMsg='Пароль должен содержать более 5 символов';
    }elseif ($passF !== $passS) {
        $errMsg="Пароли в обеих полях должны соответствовать!";
    }else{
        $existenceL = selectOne('users', ['login' => $login]);
        $existenceP = selectOne('users', ['phone' => $phone]);
        if($existenceP['phone'] === $phone){
            $errMsg="Пользователь с таким номером уже зарегистрирован!";
        }elseif ($existenceP['login'] === $login) {
            $errMsg="Пользователь с таким логином уже зарегистрирован!";
        }else{
            $pass = password_hash($passF, PASSWORD_DEFAULT);
            if (isset($_POST['id_role'])) {
                $id_role = 1;}
                settype($id_role, "integer");
            $user = [
                'id_role' => $id_role,
                'login' => $login,
                'phone' => $phone,
                'surname' => $surname,
                'name' => $name,
                'patronymic' => $patronymic,
                'password' => $pass
            ];
            $id = insert('users', $user);
            $user = selectOne('users', ['id_user' => $id] );
            $succMsg = 'Администратор успешно добавлен';
        }
    }
}else{
    $login = '';
    $name = '';
    $surname = '';
    $patronymic = '';
    $phone = '';
}


// Код для формы авторизации
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['btn_log'])) {

    $login = trim($_POST['login']);
    $pass = trim($_POST['password']);

    if ($login === '' || $pass === '') {
        $errMsg = 'Заполните все поля';
    } else {
        $exist = selectOne('users', ['login' => $login]);
        if($exist && password_verify($pass, $exist['password'])){
            userAuth($exist);
        } else {
            $errMsg = 'Неверный логин или пароль';
        }
    }
}

// Код удаления пользователя в админке
if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['del_id_user'])){
    $id = $_GET['del_id_user'];
    delete3('users', $id);
    header('location: ' . BASE_URL . 'admin_users.php');
}