<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body id="body">
    <?= $header ?>
    <?= $loginModal ?>
    <?= $signupModal ?>

    <div class="row" style="display: flex; justify-content: space-around;">
        <div class="col-75" style="flex-grow: 5;">
            <div class="container">
                <form action="/action_page.php">
                    <div style="display: flex; flex-direction: row; ">
                        <div style="margin-right: 50px;">
                            <h3>Adresse de facturation</h3>
                            <label for="fname"><i class="fa fa-user"></i> Prénom et Nom</label>
                            <input type="text" id="fname" name="firstname" placeholder="John M. Doe">
                            <label for="email"><i class="fa fa-envelope"></i> Email</label>
                            <input type="text" id="email" name="email" placeholder="john@example.com">
                            <label for="adr"><i class="fa fa-address-card-o"></i> Adresse</label>
                            <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
                            <label for="city"><i class="fa fa-institution"></i> Ville</label>
                            <input type="text" id="city" name="city" placeholder="New York">

                            <div class="row">
                                <div class="col-50">
                                    <label for="state">État</label>
                                    <input type="text" id="state" name="state" placeholder="NY">
                                </div>
                                <div class="col-50">
                                    <label for="zip"> Code Postal</label>
                                    <input type="text" id="zip" name="zip" placeholder="10001">
                                </div>
                            </div>
                        </div>

                        <div>
                            <h3>Paiement</h3>
                            <label for="fname">Cartes acceptées</label>
                            <div class="icon-container">
                                <i class="fa fa-cc-visa" style="color:navy;"></i>
                                <i class="fa fa-cc-amex" style="color:blue;"></i>
                                <i class="fa fa-cc-mastercard" style="color:red;"></i>
                                <i class="fa fa-cc-discover" style="color:orange;"></i>
                            </div>
                            <label for="cname">Nom sur la carte</label>
                            <input type="text" id="cname" name="cardname" placeholder="John More Doe">
                            <label for="ccnum">Numéro de Carte de Crédit</label>
                            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
                            <label for="expmonth">Mois d'expiration</label>
                            <input type="text" id="expmonth" name="expmonth" placeholder="September">
                            <div class="row">
                                <div class="col-50">
                                    <label for="expyear">Exp Year</label>
                                    <input type="text" id="expyear" name="expyear" placeholder="2018">
                                </div>
                                <div class="col-50">
                                    <label for="cvv">CVV</label>
                                    <input type="text" id="cvv" name="cvv" placeholder="352">
                                </div>
                            </div>
                        </div>

                    </div>
                    <label>
                        <input type="checkbox" checked="checked" name="sameadr"> Adresse de livraison identique à celle de facturation
                    </label>
                    <input type="submit" class="button-modal" style="width: 200px;" value="Continue to checkout" class="btn">
                </form>
            </div>
        </div>
        <div class="card">
            <div style="background-color: white;">
                <h4>Panier <span style="color:black"><i class="fa fa-shopping-cart"></i> <b>4</b></span></h4>
                <? for ($i = 0; $i < 4; $i++) { ?>
                    <p><a href="#">Nom du produit</a> <span class="price">$15</span></p>
                <? } ?>
                <hr>
                <p>Totale <span class="price" style="color:black"><b>$30</b></span></p>
            </div>
        </div>
    </div>

    <?= $footer ?>
</body>

</html>