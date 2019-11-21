<?php session_start(); ?>
<!doctype html>

<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Inscription</title>
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

        <section>

            <h1 id="titre"> Inscription </h1>

            <form action="inscription.php" method="POST">

                <article>
                    <label> Login </label>
                    <input type="text" name="login" required />
                </article>

                <article>
                    <label> Mot de passe </label>
                    <input type="password" name="password" required />
                </article>

                <article>
                    <label> Confirmation de mot de passe </label>
                    <input type="password" name="password_conf" required />
                </article>

                <input type="submit" name="inscription" value="Inscription" />

                <?php include 'vérifications/verification_inscription.php' ?>

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