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

    <form class="search-bar" action="/search" style="margin:auto;max-width:300px" method="post">
        <input type="text" placeholder="Recherche.." name="search">
        <button type="submit"><i class="fa fa-search"></i></button>
    </form>
    <div class="magasin-content">
        <div class="sidebar">
            <? foreach($allCategory as $category) { ?>
                <label class="filters"><?= $category['CategoryName'] ?>
                    <input id='<?= $category['ID'] ?>' type="radio" name="radio">
                    <span class="checkmark"></span>
                </label>
            <? } ?>
        </div>
        <div class='container-content'>
            <div class='container'>
                <div class='row'>
                    <? foreach ($allProducts as $product) { ?>
                        <div name='<?= $product['Category']?>' class='col col-content'>
                            <div class='card h-100' style='width: 18rem;'>
                                <img src='../img/<?= $product['Path'] ?>' class='card-img-top' alt='...'>
                                <div class='card-body'>
                                    <h5 class='card-title'><?= $product['Name'] ?></h5>
                                    <p class='card-text'><?= $product['Description'] ?></p>
                                </div>
                                <div style="display: flex; justify-content: space-around; margin: 5px;">
                                    <form action="/magasin" method="post">
                                        <p class="card-text"><strong>En stock: <?= is_user_login() ? $product['Diff'] : $product['CurrentStock'] ?></strong></p>
                                        <div style="display: flex; flex-direction: row;">
                                            <p style="margin-right: 5px;"><strong>Quantité:</strong></p>
                                            <select name="quantity" class="form-select" style="margin-bottom: 5px;">
                                                <? $currentStock = is_user_login() ? $product['Diff'] : $product['CurrentStock']; 
                                                for ($i = 0; $i < $currentStock; $i++) { $amount = $i + 1;  ?>
                                                <option 
                                                    value='<?= $amount ?>'
                                                    <? if ($amount === 1) { ?>
                                                    selected
                                                    <? } ?>
                                                >
                                                    <?= $amount ?>
                                                </option>
                                                <? } ?>
                                            </select>
                                        </div>
                                        <input type="hidden" name="itemid" value="<?= $product['ID'] ?>">
                                        <button type="submit" class="btn btn-primary">Ajouter au panier <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                                                <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                                            </svg></button>
                                    </form>
                                    <p class="card-text" style="align-self: center;"><strong>$<?= $product['Price'] ?></strong></p>
                                </div>
                            </div>
                        </div>
                    <? } ?>
                </div>
            </div>
        </div>
    </div>

    <div>
        <nav aria-label="Search results pages">
            <ul id="nav" class="pagination justify-content-center">
                <li class="page-item disabled">
                    <span class="page-link">Previous</span>
                </li>
                <? for ($i = 1; $i < 3; $i++) { ?>
                <li class="page-item active" aria-current="page">
                    <span class="page-link"><?= $i ?></span>
                </li>
                <? } ?>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
    </div>
    
    <?= $footer ?>
    
    <script src="js/sidebarFilter.js"></script>
</body>

</html>