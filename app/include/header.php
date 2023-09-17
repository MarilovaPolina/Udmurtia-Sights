<?php 
$cities = selectAll('cities'); 
$cities = sortOld('cities', 'id_city');
?>

<header class="my-3 open">
    <a href="<?=BASE_URL . '?id_city=1' ?>" class="logo">
        <img src="assets/img/logo.png" class="logo_img">
        <p>ДОСТОПРИМЕЧАТЕЛЬНОСТИ УДМУРТСКОЙ РЕСПУБЛИКИ</p>
    </a>

    <nav id="nav" class="nav_list">
        <ul class="nav">
            <?php foreach ($cities as $key => $city): ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?= BASE_URL . '?id_city=' . $city['id_city']; ?>"><?= $city['name_city']; ?></a>
                </li>
            <?php endforeach; ?><br>
        </ul>
    </nav>

        <button class="menu_btn" id="menu_btn">
            <img class="menu_btn_img" src="assets/img/menu.svg" id="menu_btn_img" >
        </button>
</header>