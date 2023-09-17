<?php

session_start();
include "path.php";

unset($_SESSION["id_user"]);
unset($_SESSION["id_role"]);
unset($_SESSION["name"]);
unset($_SESSION["surname"]);
unset($_SESSION["patronymic"]);
unset($_SESSION["phone"]);
unset($_SESSION["login"]);

header('location:' . BASE_URL .'?id_city=1');