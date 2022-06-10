<div id="id01" class="modal">
    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Fermer">&times;</span>
    <form class="modal-content animate" action="/login" method="post">
        <div class="container">
            <h1>Connexion</h1>
            <p>Veuillez remplir ce formulaire pour vous connecter..</p>
            <hr>
            <label for="username"><b>Nom d'utilisateur</b></label>
            <input type="text" placeholder="Entrer Nom d'Utilisateur" id="username" name="username" required>

            <label for="psw"><b>Mot de passe</b></label>
            <input type="password" placeholder="Entrer Mot de Passe" id="psw" name="psw" required>

            <!--<label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>-->
        </div>
        
        <div class="container clearfix" >
            <button type="submit" class="button-modal">Connecter</button>
            <button class="button-modal" type="button" onclick="document.getElementById('id01').style.display='none'">Annuler</button>
            <!--<span class="psw">Forgot <a href="#">password?</a></span>-->
        </div>
    </form>
</div>