<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Confirmation</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
</head> 

<body>
    <?= $header ?>

    <?= $loginModal ?>
    <?= $signupModal ?>

    <? if ($accepted) { ?>
        <div class="card" style="width: 50%; margin: auto; margin-top: 10px;">
            <div class="card-body">
                <h5 class="card-title">Votre compte a été créer avec succes</h5>
                <p class="card-text">
                    Nom d'utilisateur: <strong><?= $username ?></strong>
                    <br>
                    Email: <strong><?= $email ?></strong>
                </p>
            </div>
        </div>
    <? } else { ?>
        <div class="card" style="width: 50%; margin: auto; margin-top: 10px;">
            <div class="card-body">
                <h5 class="card-title">Le nom d'utilisateur et/ou le email est déjà utilisé...</h5>
            </div>
        </div>
    <? } ?>

    <?= $footer ?>
</body>

</html>