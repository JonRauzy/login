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
        <div class="welcome-container">
            <h1>fightclub</h1>
            <h2>PAS bienvenu sur fightclub &#x1F621; !</h2>
            <p>On sait pas qui t'es ou d'où tu viens alors inscrit toi comme un vrai ou faire te faire secouer pas ta grand mère sac à merde</p>
            <h3>Avec l'amour et le respect!</h3>
            
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
        <div class="footer">
            <div class="footer-link">
                <a href="">A propos</a>
                <p>.</p>
                <a href="">Aide</a>
                <p>.</p>
                <a href="">Plus</a>
            </div>
            <p id="meta">Meta &copy;
                <?= date("Y");?>
            </p>
        </div>

    </div>
</body>

</html>