<?php 

if (isset($_POST['Modifier']))
{
    if ($erreur_log == 1)
    {
        echo "<span class='warning'>Désolée, ".$login." est déjà pris !</span>";
    }
    elseif ($erreur_password == 1)
    {
        echo "<span class='warning'>/!\ Mot de passe différents ! /!\ </span>";
    }
    elseif ($modif_log == 1)
    {
        echo "Validation du nouveau Login.";
    }
    elseif ($modif_password == 1)
    {
        echo "Validation du nouveau mot de passe. ";
    }
}

?>