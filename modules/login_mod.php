<div id="module">
    <div class = "main">
    <div class = "content">
<img src onerror="login_mod_init();"></img>
<link rel="stylesheet" href="css/login.css">
    <div>
        <div id="_form-box" class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" value="login" class="toggle-btn" onclick="Application.getApplication().getUser().doLogin()" id="btn_login">Log
                    in</button>
                <button type="button" value="register" class="toggle-btn" onclick="Application.getApplication().getUser().doRegister()"
                    id="btn_register">Register</button>
            </div>
            <div id="info" class="form-box info"></div>
            <form id="login" class="input-group">
                <input id="email_login" type="type" class="input-field" placeholder="Adresse Mail" required>
                <input id="mdp_login" type="password" class="input-field" placeholder="Mot de passe" required>
                <input type="checkbox" class="check-box"><span>Se souvenir de moi</span>
                <button type="button" class="submit-btn" onclick="Application.getApplication().getUser().doConnection()"> Connexion</button>
            </form>
            <form id="register" class="input-group"> <input
                name="identifiant_register" type="type" class="input-field" placeholder="Nom utilisateur" required>
                <input id="pseudo_register" name="pseudo_register" type="type" class="input-field" placeholder="Pseudonyme" required>
                <input id="email_register" name="email_register" type="type" class="input-field" placeholder="Adresse Mail" required>
                <input id="mdp_register" name="mot_de_passe_register" type="password" class="input-field" placeholder="Mot de passe" required>
                <input id="nom_register" type="text" class="input-field" name="nom_register" placeholder="nom" required />
                <input id="prenom_register" type="text" class="input-field" name="prenom_register" placeholder="prénom" required />
                <input id="age_register" type="number" class="input-field" name="age_register" placeholder="age" required />
                <input id="legal_register" type="checkbox" class="check-box"><span>J'accepte les mentions légales</span>
                <button type="button" class="submit-btn" onclick="Application.getApplication().getUser().doInscription()">Inscription</button>
            </form>
   
        </div>
    </div>
    <div id="background-wrap">
        <div class="x2">
            <div class="cloud">
            </div>
        </div>
        <div class="x3">
            <div class="cloud">
            </div>
        </div>
        <div class="x4">
            <div class="cloud">
            </div>
        </div>
        <div class="x5">
            <div class="cloud">
            </div>
        </div>
        <div class="x6">
            <div class="cloud">
            </div>
        </div>
        <div class="x7">
            <div class="cloud">
            </div>
        </div>
    </div>
    <div id="background-wrap">
        <div class="x2">
            <div class="cloud">
            </div>
        </div>
        <div class="x3">
            <div class="cloud">
            </div>
        </div>
        <div class="x4">
            <div class="cloud">
            </div>
        </div>
        <div class="x5">
            <div class="cloud">
            </div>
        </div>
        <div class="x6">
            <div class="cloud">
            </div>
        </div>
        <div class="x7">
            <div class="cloud">
            </div>
        </div>
    </div>
   
</div>
</div>
</div>