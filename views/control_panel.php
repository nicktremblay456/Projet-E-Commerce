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
                <a class="nav-link" href="#">Suppression d'items</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
            </li>
        </ul>
    </div>
    <div class="container" style="height: 100%" id="itemManagement">
    <?php
    if (isset($_SESSION['message']) && $_SESSION['message'])
    {
      echo '<p class="notification">'.$_SESSION['message'].'</p>';
      //echo "<script>alert(".$_SESSION['message'].")</script>";
      unset($_SESSION['message']);
    }
  ?>
        <hr>
        <h1>Ajouts d'item au magasin.</h1>

        <form action="/upload_item" method="post" enctype="multipart/form-data">
            <label for="itemName"><b>Nom de l'item</b></label>
            <input type="text" placeholder="Entrer le nom de l'item." id="itemName" name="itemName" required>

            <label for="itemDescription"><b>Description</b></label>
            <input type="text" placeholder="Entrer une description." id="itemDescription" name="itemDescription" required>

            <label for="itemPrice"><b>Prix</b></label>
            <input type="text" placeholder="Entrer un prix." id="itemPrice" name="itemPrice" required>

            <label for="itemStock"><b>Nombres en stock</b></label>
            <input type="text" placeholder="Entrer le nombere en stock." id="itemStock" name="itemStock" required>

            <label for="itemCategory"><b>Categorie</b></label>

            <select name="itemCategory" id="itemCategory" required>
                <option value="1">Animaux</option>
                <option value="2">Informatique </option>
                <option value="3">Jeux Video </option>
                <option value="4">Maison </option>
                <option value="5">Musique </option>
                <option value="6">Sante </option>
                <option value="7">Sports </option>
                <option value="8">Vetements </option>
            </select>
            <br>

            <label for="itemPicture"><b>Photos de l'item</b></label>
            <input type="file" name="uploadedFile" required> <br>
            <input type="submit" name="uploadBtn" value="Upload">
        </form>
    </div>
    <div class="container" style="height: 100%" id="itemSuppression">
        <hr>
        <h1>Suppression d'item du magasin.</h1>
        <hr>
        <div style=" width: 250px;">
                <textarea name="" id="" cols="0" rows="6" width="200px" style="text-align: left;" readonly><? foreach ($result as $produit) { ?><?= $produit['ID'] ?> - <?= $produit['Name'] ?>

<? } ?></textarea>
        </div>
        <div>
            <form action="/delete_item" method="post">
                <input type="text" placeholder="Entrer le ID de l'item a supprimer" id="itemSupp" name="itemSupp" required>
                <input type="submit">
            </form>
        </div>
    </div>
    <?= $footer ?>
</body>

</html>