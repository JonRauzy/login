
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

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