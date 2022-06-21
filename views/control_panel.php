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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <?= $header ?>
    <?= $loginModal ?>
    <?= $signupModal ?>
    <div class="container">
        <h2>Panneau de control Administrateur</h2><br>
        <ul class="nav nav-pills nav-fill">
            <li class="nav-item">
                <a class="nav-link active" id="BtnAdd" aria-current="page">Ajouts d'items</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="BtnRemove">Suppression d'items</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="BtnItemModif">Modification d'items</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="BtnAccess">Gestion des Permissions</a>
            </li>
        </ul>
    </div>
    <div class="container" style="height: 100%" id="itemAddition">
        <?php
        if (isset($_SESSION['message']) && $_SESSION['message']) {
            echo '<p class="notification">' . $_SESSION['message'] . '</p>';
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
            <input type="text" placeholder="Entrer le nombre en stock." id="itemStock" name="itemStock" required>

            <label for="itemCategory"><b>Categorie</b></label>

            <select name="itemCategory" id="itemCategory" required>
                <?foreach ($allCategory as $category) {?>
                    <option value="<?=$category['ID']?>"> <?=$category['CategoryName']?> </option>
                <? } ?>
            </select>
            <br>

            <label for="itemPicture"><b>Photos de l'item</b></label>
            <input type="file" name="uploadedFile" required> <br>
            <input type="submit" name="uploadBtn" value="Upload">
        </form>
    </div>
    <div class="container" style="height: 100%;  display: none;" id="itemSuppression">
        <hr>
        <h1>Suppression d'items du magasin.</h1>
        <hr>
        <div style=" width: 250px; ">
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
    <div class="container" style="height: 100%; display: none;" id="AccessMgmt">
        <hr>
        <h1>Gestion des Permissions.</h1>
        <hr>
        <div style=" width: 350px; ">
            <textarea name="" id="" cols="100" rows="6" width="400px" style="text-align: left;" readonly><? foreach ($usersAccount as $account) { ?> ID:<?= $account['ID'] ?> - Username: <?= $account['UserName'] ?> - Admin: <?= $account['isAdmin'] ?>

<? } ?></textarea>
            <div>
                <form action="/access_mgmt" method="post">
                    <input type="text" placeholder="Entrer le ID du user" id="userID" name="userID" required>
                    <select name="userAccess" id="userAccess" required>
                        <option value="1">Permissions complète</option>
                        <option value="0">Compte client </option>
                    </select>
                    <input type="submit">
                </form>
            </div>
        </div>
    </div>
    <div class="container" style="height: 100%; display: none;" id="selectItemModif">
        <hr>
        <h1>Modification des Items</h1>
        <hr>
        <div style=" width: 250px; ">
            <textarea name="" id="" cols="0" rows="6" width="200px" style="text-align: left;" readonly><? foreach ($results as $produit) { ?><?= $produit['ID'] ?> - <?= $produit['Name'] ?>

<? } ?></textarea>
        </div>
        <div>
            <form action="/modify_item" method="post">
                <input type="text" placeholder="Entrer le ID de l'item a modifer" id="itemModif" name="itemModif" required>
                <input type="submit" id="BtnModifSubmit">
            </form>
        </div>
    </div>
    <div class="container" style="height: 100%; display: none;" id="ItemFields">
    <hr>
        <h1>Modification des Items</h1>
        <hr>
        <form action="/upload_item" method="post" enctype="multipart/form-data">
            <label for="itemName"><b>Nom de l'item</b></label>
            <input type="text" placeholder="Entrer le nom de l'item." id="itemName" name="itemName" required>

            <label for="itemDescription"><b>Description</b></label>
            <input type="text" placeholder="Entrer une description." id="itemDescription" name="itemDescription" required>

            <label for="itemPrice"><b>Prix</b></label>
            <input type="text" placeholder="Entrer un prix." id="itemPrice" name="itemPrice" required>

            <label for="itemStock"><b>Nombres en stock</b></label>
            <input type="text" placeholder="Entrer le nombre en stock." id="itemStock" name="itemStock" required>

            <label for="itemCategory"><b>Categorie</b></label>

            <select name="itemCategory" id="itemCategory" required>
            <?foreach ($allCategory as $category) {?>
                    
                    <option value="<?=$category['ID']?>"><?=$category['Categorie'] ?> </option>

                    <? }?>
                
            </select>
            <br>

            <label for="itemPicture"><b>Photos de l'item</b></label>
            <input type="file" name="uploadedFile"> <br>
            <input type="submit" name="uploadBtn" value="Upload">
        </form>
    </div>
    <?= $footer ?>
    <script src="js/control_panel.js"></script>
</body>

</html>