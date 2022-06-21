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
                                    <label for="expyear">Année d'expiration</label>
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
                    <input type="submit" class="button-modal" style="width: 200px;" value="Payer">
                </form>
            </div>
        </div>
        <div class="card">
            <div style="background-color: white;">
                <h4>Panier <span style="color:black"><i class="fa fa-shopping-cart"></i> <b><?= count($panier) ?></b></span></h4>
                <? foreach($panier as $product) { ?>
                    <div class="cart-item">
                        <a href="#"><?= $product['Name'] ?></a> <span>$<?= $product['Price'] ?></span> <span style="border-left: 2x solid black;"><strong>x<?= $product['Quantity'] ?></strong></span>
                        
                        <form class="cart-delete" action="/deletecart" method="post">
                            <input type="hidden" name="cartid" value="<?= $product['ID'] ?>" />
                            <label>
                                <input style="display: none;" type="submit">
                                <svg width="18px" height="18px" xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 122.88 122.88"><defs><style>.cls-1{fill:#f44336;fill-rule:evenodd;}</style></defs><title>Supprimer</title><path class="cls-1" d="M61.44,0A61.44,61.44,0,1,1,0,61.44,61.44,61.44,0,0,1,61.44,0ZM74.58,36.8c1.74-1.77,2.83-3.18,5-1l7,7.13c2.29,2.26,2.17,3.58,0,5.69L73.33,61.83,86.08,74.58c1.77,1.74,3.18,2.83,1,5l-7.13,7c-2.26,2.29-3.58,2.17-5.68,0L61.44,73.72,48.63,86.53c-2.1,2.15-3.42,2.27-5.68,0l-7.13-7c-2.2-2.15-.79-3.24,1-5l12.73-12.7L36.35,48.64c-2.15-2.11-2.27-3.43,0-5.69l7-7.13c2.15-2.2,3.24-.79,5,1L61.44,49.94,74.58,36.8Z"/></svg>
                            </label>
                        </form>
                    </div>
                    <!-- Formulaire avec un bouton supprimer dedans + input caché ID de la ligne du panier a supprimer -->
                    
                    <? } ?>
                <hr>
                <p>Totale <span class="price" style="color:black"><b>$<?= $totalPrice ?></b></span></p>
            </div>
        </div>
    </div>

    <?= $footer ?>
</body>

</html>