<?php session_start(); ?>
<!doctype html>

<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Site de Mathilde</title>
    <link rel="stylesheet" href="css/livre-or.css">
</head>

<body>

    <header class="hetf">
        <nav>
            <ul>
                <li><a href="index.php"><img src='img/logo-accueil.png'></a></li>

                <?php include "header.php" ?>
            </ul>
        </nav>
    </header>

    <main>

        <section id="accueil">

            <?php if (isset($_SESSION['login'])) : ?>

                <h1> Bienvenue <?php echo $_SESSION['login'] ?>,</h1>
                <aside><img src='img/livre_accueil.png'></aside>
                <p id='p1'>Vous vous trouvez </p>
                <p id='p2'>sur mon livre d'or !</p>

            <?php else : ?>

                <h1> Bienvenue, </h1>
                <aside><img src='img/livre_accueil.png'></aside>
                <p id='p1'>Vous vous trouvez </p>
                <p id='p2'>sur mon livre d'or !</p>
                
            <?php endif; ?>

        </section>

    </main>

    <footer class="hetf">
        <nav>
            <ul>
                <?php include "footer.php" ?>

            </ul>

            <aside>
                <p>Copyright 2019 Coding School | All Rights Reserved | Project by Mathilde.</p>
            </aside>

        </nav>
    </footer>

</body>

</html>