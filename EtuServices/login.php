<?php
require_once("connexion_db.php");

if (isset($_POST["connexion"])) {
    if (empty($_POST['email'])) {
        echo "saisir un email.";
    } 
    else {
        if (empty($_POST['mdp'])) {
            echo "saisir un mot de passe.";
        } 
        else {

            $email = $_POST['email'];
            $mdp = $_POST['mdp'];


            $sql="SELECT * FROM utilisateurs WHERE email='".$_POST["email"]."' and mdp = '".$_POST["mdp"]."';";
            
            $result=mysqli_query($conn, $sql);
            
            if($result->fetch_array()==NULL){
                echo "La connexion a échouée";
            }
            else{
                $command = escapeshellcmd("python3.10.exe tp.py $email");
                echo $command;
                $output = shell_exec($command);
                echo $output;
            }
        }
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
</head>

<title></title>

<body>

    <div id="connect">

        <h2>Connexion</h2>
        
        <form id="informations" method="POST">
            Email : <input type="email" name="email" required></br>
            Mot de passe : <input type="password" name="mdp" required></br>
            <button type="submit" name="connexion">Se connecter</button>
        </form>



    </div>

</body>