<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $title ?></title>

    <link rel="shortcut icon" href="img/Logo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body style="background-color: #6c757d;">
    <?= $header ?>
    <?= $loginModal ?>
    <?= $signupModal ?>

    <div class="container card" style="margin-top: 10px;">
        <h3>Nous contacter</h3>
        <form action="/action_page.php">
            <label for="fname"><b>First Name</b></label>
            <input type="text" id="fname" name="firstname" placeholder="Your name..">

            <label for="lname"><b>Last Name</b></label>
            <input type="text" id="lname" name="lastname" placeholder="Your last name..">

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" id="email" name="email" required>

            <label for="subject"><b>Subject</b></label>
            <textarea id="subject" name="subject" placeholder="Écrivez votre message.." style="height:200px"></textarea>

            <input class="button-modal" type="submit" value="Envoyer">
        </form>
    </div>

    <?= $footer ?>
</body>

</html>