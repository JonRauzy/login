<?php 
$titleHeader = 'Connectez-vous à FightClub';
include_once 'include/header.php'; 
?>

<body>
    <div class="container">
        <div class="form-container">
            <h1>fightclub</h1>
            <form action="" method="post" id="sub-form">
                <input type="text" placeholder="E-mail ou nom d'utilisateur" name="login">
                <input type="password" placeholder="mot de passe" name="pword">
                <input type="submit" id="btn-submit" value="Se connecter">
            </form>
            <a href="">Mot de passe oublié ?</a>
            <div id="ou">
                <hr>
                <p>ou</p>
                <hr>
            </div>
            <a href="?p=sub" id="btn-new"><button>Créer nouveau compte</button></a>
        </div>
        <div class="lang-list">
            <div class="col1">
                <a href="">Français(france)</a>
                <a href="">English(US)</a>
                <a href="">Español</a>
                <a href="">Deutsch</a>
            </div>
            <div class="col2">
                <a href="">Vlaams</a>
                <a href="">Tükçe</a>
                <a href="">Português(Brasil)</a>
                <a href="">Plus</a>
            </div>
        </div>
      
        <?php include_once '../view/include/footer.php' ?>

    </div>
</body>

</html>