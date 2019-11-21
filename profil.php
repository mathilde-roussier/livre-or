<?php

session_start();
$connexion = mysqli_connect('localhost', 'root', '', 'livreor');
include "vérifications/verification_profil.php";
$requete = "SELECT * FROM utilisateurs WHERE login = '".$_SESSION['login']."'";
$query = mysqli_query($connexion, $requete);
$resultat = mysqli_fetch_assoc($query);

mysqli_close($connexion);

?>

<!doctype html>

<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Profil</title>
    <link rel="stylesheet" href="css/livre-or.css">
</head>

<body class="body_base">

    <header class="hetf">
        <nav>
            <ul>
                <li><a href="index.php"><img src='img/logo-accueil.png'></a></li>

                <?php if (!isset($_SESSION['login'])) : ?>

                    <li><a href="inscription.php">Inscription</a></li>
                    <li><a href="livre-or.php">Livre d'or</a></li>
                    <li><a href="connexion.php">Connexion</a></li>

                <?php else : ?>

                    <li><a href="profil.php">Profil</a></li>
                    <li><a href="livre-or.php">Livre d'or</a></li>
                    <li>
                        <form action="index.php" method="post">
                            <input type="submit" name='deco' value="Deconnexion">
                        </form>
                        <?php if (isset($_POST['deco'])) {
                                session_unset();
                                session_destroy();
                                header('Location:index.php');
                            }
                            ?>
                    </li>

                <?php endif; ?>
            </ul>
        </nav>
    </header>

    <main>

        <section >

            <p id="titre"> Profil </p>


            <form action="profil.php" method="POST">

                <article>
                    <label> Login </label>
                    <input type="text" name="login" value=<?php echo $resultat['login']; ?> />
                </article>

                <article>
                    <label> Mot de passe </label>
                    <input type="password" name="password" value=<?php echo $resultat['password']; ?> />
                </article>

                <article>
                    <label> Confirmation de mot de passe </label>
                    <input type="password" name="password_conf" value=<?php echo $resultat['password']; ?> />
                </article>

                <input type="submit" name="Modifier" value="Modifier" />

                <?php
                 include "vérifications/echo_profil.php" 
                
                ?>
                
            </form>

        </section>

    </main>

    <footer class="hetf">
        <nav>
            <ul>

                <?php if (!isset($_SESSION['login'])) : ?>

                    <li><a href="inscription.php">Inscription</a></li>
                    <li><a href="livre-or.php">Livre d'or</a></li>
                    <li><a href="connexion.php">Connexion</a></li>

                <?php else : ?>

                    <li><a href="profil.php">Profil</a></li>
                    <li><a href="livre-or.php">Livre d'or</a></li>

                <?php endif; ?>

            </ul>

            <aside>
                <p>Copyright 2019 Coding School | All Rights Reserved | Project by Mathilde.</p>
            </aside>

        </nav>
    </footer>

</body>

</html>