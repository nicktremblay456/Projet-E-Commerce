



<link rel="stylesheet" href="../public/css/style.css">
<link rel="stylesheet" href="../public/css/bootstrap.css">

<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "e-commerce";

    $con = mysqli_connect($servername, $username, $password, $database);
	
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }
	
    if (isset($_GET['search'])) {
        $param = "%{$_GET['search']}%";
        $query = mysqli_prepare($con, "SELECT * FROM Produit WHERE Description LIKE ?");
        mysqli_stmt_bind_param($query, "s", $param);
        mysqli_stmt_execute($query);
        $results = mysqli_stmt_get_result($query);
        $rows = mysqli_num_rows($results);
        mysqli_stmt_close($query);
    
        if ($rows > 0) {
            echo "<h2>Search results for: {$_GET['search']}</h2>";
                 
            while ($result = mysqli_fetch_array($results)) {
                $result_name=$result['Name'];
                $result_cat=$result['Category'];
                $result_descrip=$result['Description'];
                $result_image=$result['Path']; ?>
                  










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

<body id="body" class="d-flex flex-column min-vh-100">
    <?= $header ?>
    <?= $loginModal ?>
    <?= $signupModal ?>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<form class="search-bar" action="/search" style="margin:auto;max-width:300px" method="get">
  <input type="text" placeholder="Recherche.." name="search">
  <button type="submit"><i class="fa fa-search"></i></button>
</form>  

<div class="magasin-content">
    <div class="sidebar">
        <label class="filters">Catégorie 1
            <input type="radio" name="radio">
            <span class="checkmark"></span>
        </label>

        <label class="filters">Catégorie 2
            <input type="radio" name="radio">
            <span class="checkmark"></span>
        </label>

        <label class="filters">Catégorie 3
            <input type="radio" name="radio">
            <span class="checkmark"></span>
        </label>

        <label class="filters">Catégorie 4
            <input type="radio" name="radio">
            <span class="checkmark"></span>
        </label>
        <label class="filters">Catégorie 5
            <input type="radio" name="radio">
            <span class="checkmark"></span>
        </label>
        <label class="filters">Catégorie 6
            <input type="radio" name="radio">
            <span class="checkmark"></span>
        </label>
    </div>
                        <div class='container-content'>
                            <div class='container'>  
                                <div class='row'>
                                    <div class='col col-content'>
                                        <div class='card' style='width: 18rem;'>
                                            <img src='../src/$result_image' class='card-img-top' alt='...'>
                                            <div class='card-body'>
                                                <h5 class='card-title'>'$result_name'</h5>
                                                <p class='card-text'>'$result_descrip'</p>
                                                <a href='#' class='btn btn-primary'>Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>"
</div>
<div>
    <nav aria-label="Search results pages">
        <ul id="nav" class="pagination">
            <li class="page-item disabled">
                <span class="page-link">Previous</span>
            </li>
            <li class="page-item active" aria-current="page">
                <span class="page-link">1</span>
            </li>
            <? if ($sortResultDiv > 1){
                for ($x = 2; $x <= $sortResultDiv; $x++){ ?>
                    <li class="page-item"><a class="page-link" href="#"> <?=$x?></a></li>

                    <? } ?>
            <? } ?>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav>
</div>
    <?= $footer ?>
</body>

</html>

 <? } else {
    echo "<h2>No results found for your search: {$_GET['search']}</h2>";
}
} else {
echo "<h2>No search query provided. Please try your search again.</h2>";
}
mysqli_close($con); ?>
