<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $title ?></title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <?= $header ?>
    <?= $loginModal ?>
    <?= $signupModal ?>
    <div class="container">
        <h2>Admin Control Panel</h2><br>
        <ul class="nav nav-pills nav-fill">
            <li class="nav-item">
                <a class="nav-link active" id="usersControl" aria-current="page" href="#" onclick="">Ajouts d'items</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Much longer nav link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
            </li>
        </ul>
    </div>
    <div class="container" style="height: 600px" id="itemManagement">

        <h1>Ajouts d'item au magasin.</h1>
        <hr>
        <label for="itemname"><b>Nom de l'item</b></label>
        <input type="text" placeholder="Entrer le nom de l'item." id="itemname" name="itemname" required>

        <label for="itemDescription"><b>Description</b></label>
        <input type="text" placeholder="Entrer une description." id="itemDescription" name="itemDescription" required>

        <label for="itemPrice"><b>Price</b></label>
        <input type="text" placeholder="Entrer un prix." id="itemPrice" name="itemPrice" required>

        <label for="itemPrice"><b>Photos de l'item</b></label>
        <form action="/action_page.php">
            <input type="file" id="myFile" name="filename">
            <input type="submit">
        </form>
    </div>
    <?= $footer ?>
</body>

</html>