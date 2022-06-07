<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $title ?></title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>
    <?= $header ?>

    <?= $loginModal ?>
    <?= $signupModal ?>

    <div class="container" style="display: flex; flex-direction: column; justify-content: center; background-color: white; margin-top: 10px; padding-left: 125px;">
        <h2>Les plus demandés dans Jeux Vidéo</h2><br>
        <div class="row">
            <? for ($i = 0; $i < count($videoGames)/2; $i++) { ?>
                <div class="col">
                    <div class="card h-100" style="width: 18rem; margin-bottom: 10px;">
                        <img src='../img/<?= $videoGames[$i]['Path'] ?>' class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?= $videoGames[$i]['Name'] ?></h5>
                            <p class="card-text"><?= $videoGames[$i]['Description'] ?></p>
                            <p class="card-text">$<?= $videoGames[$i]['Price'] ?></p>
                            <a href="#" class="btn btn-primary">Ajouter au panier <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                                    <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                                </svg></a>
                        </div>
                    </div>
                </div>
            <? } ?>
        </div>
    </div>

    <div class="container" style="display: flex; flex-direction: column; justify-content: center; background-color: white; margin-top: 10px; padding-left: 125px;">
        <h2>Les plus demandés dans Sport</h2><br>
        <div class="row">
            <? for ($i = 0; $i < count($sports)/2; $i++) { ?>
                <div class="col">
                    <div class="card h-100" style="width: 18rem; margin-bottom: 10px;">
                        <img src='../img/<?= $sports[$i]['Path'] ?>' class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?= $sports[$i]['Name'] ?></h5>
                            <p class="card-text"><?= $sports[$i]['Description'] ?></p>
                            <p class="card-text">$<?= $sports[$i]['Price'] ?></p>
                            <a href="#" class="btn btn-primary">Ajouter au panier <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                                    <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                                </svg></a>
                        </div>
                    </div>
                </div>
            <? } ?>
        </div>
    </div>

    <div class="container" style="display: flex; flex-direction: column; justify-content: center; background-color: white; margin-top: 10px; padding-left: 125px;">
        <h2>Les plus demandés dans Vêtements</h2><br>
        <div class="row">
            <? for ($i = 0; $i < count($clothes)/2; $i++) { ?>
                <div class="col">
                    <div class="card h-100" style="width: 18rem; margin-bottom: 10px;">
                        <img src='../img/<?= $clothes[$i]['Path'] ?>' class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?= $clothes[$i]['Name'] ?></h5>
                            <p class="card-text"><?= $clothes[$i]['Description'] ?></p>
                            <p class="card-text">$<?= $clothes[$i]['Price'] ?></p>
                            <a href="#" class="btn btn-primary">Ajouter au panier <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                                    <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                                </svg></a>
                        </div>
                    </div>
                </div>
            <? } ?>
        </div>
    </div>

    <?= $footer ?>
</body>

</html>