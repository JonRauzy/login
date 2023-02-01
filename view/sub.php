<?php 
$titleHeader = 'Inscrivez-vous';
include_once 'include/header.php'; 7
?>

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
