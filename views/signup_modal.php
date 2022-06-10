<div id="id02" class="modal">
    <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Fermer">&times;</span>
    <form class="modal-content animate" action="/signup" method="post">
        <div class="container">
            <h1>Inscription</h1>
            <p>Veuillez remplir ce formulaire pour créer un compte..</p>
            <hr>
            <label for="username"><b>Nom d'utilisateur</b></label>
            <input type="text" placeholder="Entrer votre nom d'utilisateur" id="username" name="username" required>

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Entrer votre Email" id="email" name="email" required>

            <label for="psw"><b>Mot de passe</b></label>
            <input type="password" placeholder="Entrer mot de passe" id="psw" name="psw" required>

            <label for="psw-repeat"><b>Répeter le mot de passe</b></label>
            <input type="password" placeholder="Entrer le mot de passe de nouveau" name="psw-repeat" required>

            <!--<label>
            <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
            </label>-->

            <!--<p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>-->

            <div class="container clearfix" style="background-color:#f1f1f1">
                <button type="submit" id="sub" class="button-modal">S'inscrire</button>
                <button type="button" class="button-modal" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Annuler</button>
            </div>
        </div>
    </form>
</div>