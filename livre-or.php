<?php session_start(); ?>
<!doctype html>

<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Livre d'or</title>
    <link rel="stylesheet" href="css/livre-or.css">
</head>

<body id="body_livre">

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

    <main id="main_comment">

        <?php if (isset($_SESSION['login'])) : ?>

            <figure>
                <a href="commentaire.php"><img src='img/logo_comment.png' /></a>
                <figcaption> Nouveau commentaire </figcaption>
            </figure>

            <section class="commentaire">
                <article>
                    <p> Auxerunt haec vulgi sordidioris audaciam, quod cum ingravesceret penuria commeatuum, famis et furoris inpulsu Eubuli cuiusdam inter suos clari domum ambitiosam ignibus subditis inflammavit rectoremque ut sibi iudicio imperiali addictum calcibus incessens et pugnis conculcans seminecem laniatu miserando discerpsit. post cuius lacrimosum interitum in unius exitio quisque imaginem periculi sui considerans documento recenti similia formidabat.</p>
                    <p> Auxerunt haec vulgi sordidioris audaciam, quod cum ingravesceret penuria commeatuum, famis et furoris inpulsu Eubuli cuiusdam inter suos clari domum ambitiosam ignibus subditis inflammavit rectoremque ut sibi iudicio imperiali addictum calcibus incessens et pugnis conculcans seminecem laniatu miserando discerpsit. post cuius lacrimosum interitum in unius exitio quisque imaginem periculi sui considerans documento recenti similia formidabat.</p>
                    <p> Auxerunt haec vulgi sordidioris audaciam, quod cum ingravesceret penuria commeatuum, famis et furoris inpulsu Eubuli cuiusdam inter suos clari domum ambitiosam ignibus subditis inflammavit rectoremque ut sibi iudicio imperiali addictum calcibus incessens et pugnis conculcans seminecem laniatu miserando discerpsit. post cuius lacrimosum interitum in unius exitio quisque imaginem periculi sui considerans documento recenti similia formidabat.</p>
                    <p> Auxerunt haec vulgi sordidioris audaciam, quod cum ingravesceret penuria commeatuum, famis et furoris inpulsu Eubuli cuiusdam inter suos clari domum ambitiosam ignibus subditis inflammavit rectoremque ut sibi iudicio imperiali addictum calcibus incessens et pugnis conculcans seminecem laniatu miserando discerpsit. post cuius lacrimosum interitum in unius exitio quisque imaginem periculi sui considerans documento recenti similia formidabat.</p>
                </article>
            </section>

        <?php else : ?>
            
            <section id="noconnect" class="commentaire">
                <article>
                    <p> Auxerunt haec vulgi sordidioris audaciam, quod cum ingravesceret penuria commeatuum, famis et furoris inpulsu Eubuli cuiusdam inter suos clari domum ambitiosam ignibus subditis inflammavit rectoremque ut sibi iudicio imperiali addictum calcibus incessens et pugnis conculcans seminecem laniatu miserando discerpsit. post cuius lacrimosum interitum in unius exitio quisque imaginem periculi sui considerans documento recenti similia formidabat.</p>
                    <p> Auxerunt haec vulgi sordidioris audaciam, quod cum ingravesceret penuria commeatuum, famis et furoris inpulsu Eubuli cuiusdam inter suos clari domum ambitiosam ignibus subditis inflammavit rectoremque ut sibi iudicio imperiali addictum calcibus incessens et pugnis conculcans seminecem laniatu miserando discerpsit. post cuius lacrimosum interitum in unius exitio quisque imaginem periculi sui considerans documento recenti similia formidabat.</p>
                    <p> Auxerunt haec vulgi sordidioris audaciam, quod cum ingravesceret penuria commeatuum, famis et furoris inpulsu Eubuli cuiusdam inter suos clari domum ambitiosam ignibus subditis inflammavit rectoremque ut sibi iudicio imperiali addictum calcibus incessens et pugnis conculcans seminecem laniatu miserando discerpsit. post cuius lacrimosum interitum in unius exitio quisque imaginem periculi sui considerans documento recenti similia formidabat.</p>
                    <p> Auxerunt haec vulgi sordidioris audaciam, quod cum ingravesceret penuria commeatuum, famis et furoris inpulsu Eubuli cuiusdam inter suos clari domum ambitiosam ignibus subditis inflammavit rectoremque ut sibi iudicio imperiali addictum calcibus incessens et pugnis conculcans seminecem laniatu miserando discerpsit. post cuius lacrimosum interitum in unius exitio quisque imaginem periculi sui considerans documento recenti similia formidabat.</p>

                </article>
            </section>

        <?php endif; ?>

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