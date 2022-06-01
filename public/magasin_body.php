<? $sortResult = 4;
  $sortResultDiv = $sortResult / 4;
?>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<form class="search-bar" action="/action_page.php" style="margin:auto;max-width:300px">
  <input type="text" placeholder="Recherche.." name="search2">
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
    <div class="container-content">
        <div class="container">  
        <? for ($n = 0; $n < $sortResultDiv; $n++){ ?>
            <div class="row">
            <? for ($i = 0; $i < 4; $i++) { ?>
                <div class="col col-content">
                    <div class="card" style="width: 18rem;">
                        <img src="../src/placeholder.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                        </div>
                    </div>
                </div>
               <? } ?> 
               <? } ?>   
            </div>

        </div>
    </div>
</div>
<div >
    <nav aria-label="Search results pages">
        <ul id="nav" class="pagination">
            <li class="page-item disabled">
                <span class="page-link">Previous</span>
            </li>
            <li class="page-item active" aria-current="page">
                <span class="page-link">1</span>
            </li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">4</a></li>
            <li class="page-item"><a class="page-link" href="#">5</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav>
</div>