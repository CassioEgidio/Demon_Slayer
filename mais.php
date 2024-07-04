<?php
    include_once('helpers/url.php');
    include_once('data/personagens.php');

    if(isset($_GET['id'])) {

        $maisId = $_GET['id'];
        $currentPerso;

        foreach($personagens as $perso) {
            if($perso['id'] == $maisId) {
                $currentPerso = $perso; 
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $currentPerso['title'] ?></title>

    <link rel="stylesheet" href="Style/mais.css">
    <script src="Script/mais.js" defer></script>
</head>

<body>
    <div class="center">

        <div class="top"><?= $currentPerso['title'] ?></div>


        <div class="carousel">
            <div class="left">

                <div class="left-item">
                    <div class="title"><?= $currentPerso['title'] ?></div>
                    <div class="text"><?= $currentPerso['description'] ?></div>
                </div>

                <div class="left-item">
                    <div class="title"><?= $currentPerso['title'] ?></div>
                    <div class="text"><?= $currentPerso['description'] ?></div>
                </div>

                <div class="left-item">
                    <div class="title"><?= $currentPerso['title'] ?></div>
                    <div class="text"><?= $currentPerso['description'] ?></div>
                </div>

            </div>

            <div class="right">

                <div class="item">
                    <img src="<?= $BASE_URL ?>/imagens/<?= $currentPerso['img'] ?>" alt="">
                </div>

                <div class="item">
                    <img src="<?= $BASE_URL ?>/imagens/<?= $currentPerso['img'] ?>" alt="">
                </div>

                <div class="item">
                    <img src="<?= $BASE_URL ?>/imagens/<?= $currentPerso['img'] ?>" alt="">
                </div>

            </div>
        </div>

    </div>

</body>

</html>