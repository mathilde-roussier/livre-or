<!-- CODE commentaire -->

<?php 

if (isset($_POST['validation']))
{
    $commentaire = addslashes($_POST['commentaire']);
    $utilisateur = $_SESSION['id'];
    $connexion = mysqli_connect('localhost','root','','livreor');
    $insert_comment= "INSERT INTO commentaires (commentaire,id_utilisateur, date) VALUES ('$commentaire', '$utilisateur',NOW())";
    $query_comment = mysqli_query($connexion,$insert_comment);
    echo "Prise en compte du commentaire";
    mysqli_close($connexion);
}

?>