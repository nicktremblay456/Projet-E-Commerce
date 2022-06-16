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

<body style="background-color: #6c757d;">
    <?= $header ?>

    <?= $loginModal ?>
    <?= $signupModal ?>
    <div id="container-best-seller" class="container">
        <div>
            <h2 class="best-seller-title">Les plus demandés dans Jeux Vidéo</h2><br>
            <div class="row">
                <? if (count($videoGames) > 0) {
                    for ($i = 0; $i < 4; $i++) {
                        if ($videoGames[$i]['CurrentStock'] > 0) { ?>
                            <div class="col">
                                <div class="card h-100" style="width: 18rem; margin-bottom: 10px;">
                                    <img src='../img/<?= $videoGames[$i]['Path'] ?>' class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title"><?= $videoGames[$i]['Name'] ?></h5>
                                        <p class="card-text"><?= $videoGames[$i]['Description'] ?></p>
                                    </div>
                                    <div style="display: flex; justify-content: space-around; margin: 5px;">
                                        <form action="/" method="post">
                                            <p class="card-text"><strong>En stock: <?= $videoGames[$i]['CurrentStock'] ?></strong></p>
                                            <div style="display: flex; flex-direction: row;">
                                                <p><strong>Quantité:</strong> <span name="quantityText"></span></p>
                                                <input style="align-self: center;" type="range" min="1" max='<?= $videoGames[$i]['CurrentStock'] ?>' value="1" class="slider" name="quantitySlider">
                                            </div>
                                            <input type="hidden" name="itemid" value="<?= $videoGames[$i]['ID'] ?>">
                                            <button type="submit" class="btn btn-primary">Ajouter au panier <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                                                    <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                                                </svg></button>
                                        </form>
                                        <p class="card-text" style="align-self: center;"><strong>$<?= $videoGames[$i]['Price'] ?></strong></p>
                                    </div>
                                </div>
                            </div>
                <? } } } ?>
            </div>
        </div>

        <br>
        <hr><br>

        <div>
            <h2 class="best-seller-title">Les plus demandés dans Sport</h2><br>
            <div class="row">
                <? if (count($sports) > 0) {
                    for ($i = 0; $i < 4; $i++) {
                        if ($sports[$i]['CurrentStock'] > 0) { ?>
                            <div class="col">
                                <div class="card h-100" style="width: 18rem; margin-bottom: 10px;">
                                    <img src='../img/<?= $sports[$i]['Path'] ?>' class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title"><?= $sports[$i]['Name'] ?></h5>
                                        <p class="card-text"><?= $sports[$i]['Description'] ?></p>
                                    </div>
                                    <div style="display: flex; justify-content: space-around; margin: 5px;">
                                        <form action="/" method="post">
                                            <div style="display: flex; flex-direction: row;">
                                                <p><strong>Quantité:</strong> <span name="quantityText"></span></p>
                                                <input style="align-self: center;" type="range" min="1" max='<?= $sports[$i]['CurrentStock'] ?>' value="1" class="slider" name="quantitySlider">
                                            </div>
                                            <input type="hidden" name="itemid" value="<?= $sports[$i]['ID'] ?>">
                                            <button type="submit" class="btn btn-primary">Ajouter au panier <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                                                    <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                                                </svg></button>
                                        </form>
                                        <p class="card-text" style="align-self: center;"><strong>$<?= $sports[$i]['Price'] ?></strong></p>
                                    </div>
                                </div>
                            </div>
                <? } } } ?>
            </div>
        </div>

        <br>
        <hr><br>

        <div>
            <h2 class="best-seller-title">Les plus demandés dans Vêtements</h2><br>
            <div class="row">
                <? if (count($clothes) > 0) {
                    for ($i = 0; $i < 4; $i++) {
                        if ($clothes[$i]['CurrentStock'] > 0) { ?>
                            <div class="col">
                                <div class="card h-100" style="width: 18rem; margin-bottom: 10px;">
                                    <img src='../img/<?= $clothes[$i]['Path'] ?>' class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title"><?= $clothes[$i]['Name'] ?></h5>
                                        <p class="card-text"><?= $clothes[$i]['Description'] ?></p>
                                    </div>
                                    <div style="display: flex; justify-content: space-around; margin: 5px;">
                                        <form action="/" method="post">
                                            <div style="display: flex; flex-direction: row;">
                                                <p><strong>Quantité:</strong> <span name="quantityText"></span></p>
                                                <input style="align-self: center;" type="range" min="1" max='<?= $clothes[$i]['CurrentStock'] ?>' value="1" class="slider" name="quantitySlider">
                                            </div>
                                            <input type="hidden" name="itemid" value="<?= $clothes[$i]['ID'] ?>">
                                            <button type="submit" class="btn btn-primary">Ajouter au panier <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                                                    <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                                                </svg></button>
                                        </form>
                                        <p class="card-text" style="align-self: center;"><strong>$<?= $clothes[$i]['Price'] ?></strong></p>
                                    </div>
                                </div>
                            </div>
                <? } } } ?>
            </div>
        </div>
    </div>

    <?= $footer ?>

    <script src="js/quantitySlider.js"></script>
</body>

</html>