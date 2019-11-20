<!-- CODE profil -->

<?php 

if (isset($_POST['profil'])) 
{
    $login = $_POST["login"];

    if ($_POST['password'] == $resultat['password'])
    {
        $password = $resultat['password'];
    }
    else 
    {
        $password = password_hash($_POST["password"], PASSWORD_BCRYPT, array('cost' => 12));

    }

    $requete_verif = "SELECT id, login FROM utilisateurs WHERE login = '$login'";
    $query_verif = mysqli_query($connexion,$requete_verif);
    $resultat_verif = mysqli_fetch_assoc($query_verif);
    // var_dump($resultat_verif);

    if ($resultat_verif['id'] == $_SESSION['id'])
    {
        if ($_POST['password'] != $_POST['password_conf'])
        {
            echo "<span class='warning'>/!\ Mot de passe différents /!\\</span>";
        }
        else 
        {
            $update_profil = "UPDATE utilisateurs SET login= '$login', password= '$password' WHERE id= '" . $resultat['id'] . "'";
            $query_profil = mysqli_query($connexion,$update_profil);
            echo "Vos modifications ont bien été prise en compte !";
        }
    }

    elseif (!empty($resultat_verif))
    {
        echo "<span class='warning'>Ce login est déjà prit !</span>";
    }

    else
    {
        $update_profil = "UPDATE utilisateurs SET login= '$login', password= '$password' WHERE id= '" . $resultat['id'] . "'";
        $query_profil = mysqli_query($connexion,$update_profil);
        $resultat_profil = mysqli_fetch_assoc($query_verif);
        // var_dump($resultat_profil);
        $_SESSION['login'] = $resultat_profil['login'];
        echo "Vos modifications ont bien été prise en compte !2";
    }
}

?>
