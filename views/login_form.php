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

<body id="body" class="d-flex flex-column min-vh-100">
    <?= $header ?>
    <? if (isset($_SESSION['username']) && isset($_SESSION['psw'])) { ?>
        <div class="card" style="width: 50%; margin: auto; margin-top: 10px;">
            <div class="card-body" style="text-align: center;">
                <h5 class="card-title">Bienvenue <?= $username ?></h5>
            </div>
        </div>
    <? } else { ?>
        <?= $loginModal ?>
        <?= $signupModal ?>
        <div class="card" style="width: 50%; margin: auto; margin-top: 10px;">
            <div class="card-body">
                <h5 class="card-title">Nom d'utilisateur ou mot de passe invalid...</h5>
            </div>
        </div>
    <? } ?>

    <?= $footer ?>
</body>

</html>