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
        <div class="sub-container">
            <h1>fightclub</h1>
            <h2>inscription</h2>
            <form action="" method="post" id="sub-form">
                <input type="text" placeholder="Donne ton prénom" name="subfirstname">
                <input type="text" placeholder="Donne ton nom de famille" name="sublastname">
                <input type="email" placeholder="Donne ton email" name="submail">
                <input type="password" placeholder="Donne un mot de passe" name="subpword">
                <input type="submit" id="btn-submit" value="S'inscrire">
            </form>
        </div>

        <?php include_once '../view/include/footer.php' ?>

    </div>
</body>

</html>
