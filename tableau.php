<?php
    session_start();
    if (!$_SESSION['admin']) {
        header('location: conet.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="accueil.php">
    <title>fallou gueye</title>
</head>
<style media="screen">
.vert{
    background-color: green;
}
.jaune{
    background-color: yellow;
}
.rouge{
    background-color: red;
}
td{ 
width: 70px;
height: 70px;
border: solid 3px pink;
}
#form{
    float: left;
    width: 50px;

}
</style>
<body>
<form method="$POST" action="tableau.php">
<div id="form">
<h1>C'est ce qu'on demande</h1>
<form method="POST" action="tableau.php">
<div align="center">
<select name="n">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<input type="submit" name="submit" value="taper">
</select>
</div>
</form>
</div>
</form>
<?php
if (isset($_POST['deconnexion'])) {
    session_destroy();
    header('location: conet.php');
    }

        if(isset($_POST['valider'])){
            extract ($_POST);
echo "<table>";
for ($i=1; $i <=$n ;$i++){
    echo "<tr>";
for ($j=1; $j <=$n ; $j++){
if ($i==$j && $j==$n-$i+1){
    $bg="vert";
    echo "<td class=$bg></td>";
    }
    elseif ($i==$j){
        $bg="jaune";
        echo "<td class=$bg></td>";
    }
    elseif ($j==$n-$i+1) {
        $bg="rouge";
        echo "<td class=$bg></td>";
    }
    else {
        "<td></td>";
       }
     }
      echo "</tr>";
 }
      echo "</table>";
}
?>
<div class="button">
<a href="login1.php" > <button type="submit" name="conec">Retour</button></a>
</div> 
</body>
</html>