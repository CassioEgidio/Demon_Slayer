<?php
    include_once('helpers/url.php');
    include_once('data/personagens.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="Style/style.css">
    <script src="Script/script.js" defer></script>

    <title>Home</title>
</head>

<body>

    <div class="center">

        <div class="top">Demon Slayer</div>

        <div class="carousel">
            <div class="left">

                <?php foreach($personagens as $perso): ?>
                <div class="left-item">
                    <div class="title"><?= $perso['title'] ?></div>
                    <div class="text"><?= $perso['description'] ?></div>
                </div>
                <?php endforeach; ?>

            </div>

            <div class="right">

                <?php foreach($personagens as $perso): ?>
                <div class="item">
                    <img src="<?= $BASE_URL ?>/imagens/<?= $perso['img'] ?>" alt="<?= $perso['title'] ?>">
                    
                    <a href="<?= $BASE_URL ?>mais.php?id=<?=$perso['id']?>">
                        <button type="button">Saiba mais</button>
                    </a>
                </div>
                <?php endforeach; ?>

            </div>
        </div>
        
    </div>

</body>

</html>