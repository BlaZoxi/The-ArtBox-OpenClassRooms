<?php ?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>The ArtBox</title>
</head>
<body>

        <?php include('header.php'); // Header The ArtBox ?>

    <main>
        <div id="liste-oeuvres">
        <?php
            include('oeuvres.php'); // Tableau des Oeuvres 
            foreach ($oeuvres as $data) :
        ?>
        <!-- Page d’accueil -->
            <article class="oeuvre">
                <a href="oeuvre.php?id=<?php echo $data['id'] ?>">
                    <img src="<?php echo $data['lien'] ?>" alt="<?php echo $data['alt'] ?>">
                    <h2><?php echo $data['titre'] ?></h2>
                    <p class="description"><?php echo $data['auteur'] ?></p>
                </a>
            </article>
            <?php endforeach; ?>
        </div>
    </main>

    <?php include('footer.php'); // Footer The ArtBox ?>

</body>
</html>