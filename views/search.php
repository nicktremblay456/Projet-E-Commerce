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
                $result_image=$result['Path'];
                  
                echo "  <div class='container-content'>
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
                        </div>";
            }   
        } else {
            echo "<h2>No results found for your search: {$_GET['search']}</h2>";
        }
    } else {
        echo "<h2>No search query provided. Please try your search again.</h2>";
    }
    mysqli_close($con);
