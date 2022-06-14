<div id="id03" class="modal">
    <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Fermer">&times;</span>
    <form class="modal-content animate" action="/control_panel" method="post">

        <ul class="nav nav-pills nav-fill">
            <li class="nav-item">
                <a class="nav-link active" id="usersControl" aria-current="page" href="#" onclick="">Users</a>
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
        <div class="container">
            <h1>Inscription</h1>
            <p>Veuillez remplir ce formulaire pour créer un compte..</p>
            <hr>
            <label for="username"><b>test</b></label>
            <input type="text" placeholder="Entrer votre nom d'utilisateur" id="username" name="username" required>

            <label for="email"><b>test</b></label>
            <input type="text" placeholder="Entrer votre Email" id="email" name="email" required>

            <label for="psw"><b>test</b></label>
            <input type="password" placeholder="Entrer mot de passe" id="psw" name="psw" required>

            <label for="psw-repeat"><b>test</b></label>
            <input type="password" placeholder="Entrer le mot de passe de nouveau" name="psw-repeat" required>


            <div class="container clearfix" style="background-color:#f1f1f1">
                <button type="submit" id="sub" class="button-modal">Appliquer</button>
                <button type="button" class="button-modal" onclick="document.getElementById('id03').style.display='none'" class="cancelbtn">Annuler</button>
            </div>
        </div>
    </form>
</div>