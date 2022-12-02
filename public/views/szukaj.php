<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/szukaj.css">
    <script src="https://kit.fontawesome.com/9c10ee4fff.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./public/js/search.js" defer></script>

    <title>FIND PAGE</title>
</head>
<body>
<div class="container6">
    <header>
        <div class="header1">
            <div class="logo2">
                <a>
                    <img id="im2"src="public/img/logo2.svg">
                </a>
            </div>
            <div class="search-bar2">
                <input name="rejon" type="text" placeholder="Rejon lub nazwa stoku">
            </div>
            <div class="plus">
                <a href="/add"><i id="plus1">+</i></a>
            </div>
        </div>
    </header>
    <div class="buttons">
        <div class="house_icon2">
            <a href="/menu" class="Icon_of_house">
                <i  class="fa-sharp fa-solid fa-house" ></i>
            </a>
        </div>
    </div>
    <section class="slopes">
        <?php foreach($slopes as $slope): ?>
            <div>
                <img src="public/uploads/<?= $slope->getImage(); ?>">
                <div >
                    <a class="slope_id" href="/stok"><?= $slope->getTitle(); ?></a>
                    <p><?= $slope->getDescription(); ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </section>
</div>
</body>

<template id="slope-template">
    <div>
        <img src="">
        <div>
            <h2>title</h2>
            <?php foreach($slopes as $slope): ?>
                if (<?= $slope->getTitle(); ?> == title)
                <a class="get_here" href="/stok">-></a>
            <?php endforeach; ?>
            <p>description</p>
        </div>
    </div>
</template>