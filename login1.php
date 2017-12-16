<?php
    session_start();
    if (!$_SESSION['admin']) {
        header('location: conet.php');
    }
    else{
        $date = date("d-m-y");
        $heure = date("h:i");
        print("nous somme le $date ---- il est $heure a DAKAR. <br />");
        echo '<br /> <h3>Bienvenue a loginInfo:</h3> <br />';
        if (isset($_POST['deconnexion'])) {
            session_destroy();
            header('location: conet.php');
        } 
    }
    
?>

<!DOCTYPE html>
<html lang="fr">
<body>
    
    <a href="tableau.php">aller sur tableau</a><br /><br />
    <a href="Cal.php">aller sur calcul</a><br /><br />
    <form method="POST" action="login1.php">
        <input type="submit" name="deconnexion" value="deconnexion">
    </form>
</body>
</html>