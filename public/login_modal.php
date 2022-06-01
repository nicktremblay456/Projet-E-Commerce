<div id="id01" class="modal">
    <form class="modal-content animate" action="/action_page.php" method="post">
        <div class="container">
            <h1>Login</h1>
            <p>Please fill in this form to login</p>
            <hr>
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <!--<label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>-->
        </div>
        
        <div class="container clearfix" style="background-color:#f1f1f1">
            <button type="submit" class="button-modal">Login</button>
            <button class="button-modal" type="button" onclick="document.getElementById('id01').style.display='none'">Cancel</button>
            <!--<span class="psw">Forgot <a href="#">password?</a></span>-->
        </div>
    </form>
</div>