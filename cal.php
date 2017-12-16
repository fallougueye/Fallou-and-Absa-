<?php
    session_start();
    if (!$_SESSION['admin']) {
        header('location: conet.php');
    }
?>
<!DOCTYPE html>
<html lang="fr">
<meta charset="utf-8">

<head>
    <title>Calculator</title>
</head>
<body>
    <center>
        <img src="im.jpeg" />
        <h1>Calculator</h1>
        <table style="border:2px solid red ">
            <form method="POST" action="Cal.php">
                <tr>
                    <td><label for "num">Put the first number</label></td>
                    <td><input type="number" name="n1" placeholder="Premier number " required="required " /></td>
                </tr>
                <tr>
                    <td><label for "opera ">Put the second number</label></td>
                    <td><input type="number" name="n2" placeholder="Second number" required="required " /></td>
                </tr>
                <tr>
                    <td><label for "opera ">Choose a numbe:</label></td>
                    <td>
                        <select name="operateurs" width="70 " id="operateurs">
                    <option value="">Selectionne a operator</option>
                    <option value="1">+</option>
                    <option value="2">-</option>
                    <option value="3">/</option>
                    <option value="4">*</option>
                    <option value="5">%</option>
                       </select>
                    </td>
                </tr>
                <tr>
                    <td><input type="submit" value="Calculer" name="submit"/></td>
                    <td><input type="reset" value="Annuler" /></td>
                </tr>
            </form>
        </table><br>
        <form method="POST" action="Cal.php">
            <input type="submit" name="deconnexion" value="deconnexion">
       </form><br>
        <div class="button">
        <a href="login1.php" > <button type="submit" name="conec">Retour</button></a>
    </div>
    </center>

    <!--code php-->
    <?php
    extract($_POST);
    $result;
    if (isset($_POST['deconnexion'])) {
    session_destroy();
    header('location: conet.php');
    }

    if(isset($submit)){
        switch($operator) {
            case "":
                echo "Choose a operator";
            break;
            case 1:
                $result = $n1 + $n2;
            break;
            case 2:
                $result = $n1 - $n2;
            break;
            case 3:
            if($n2!==0){
                $result = $n1 / $n2;
            } 
             break;  
             case 4:
                $result = $n1 * $n2;
             break;
             case 5:
                $result = $n1 % $n2;
             break; 
        }
        echo "<p>Resultat: donne $result </p>"; 
}
?>
    

</body>

</html>