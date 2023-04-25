<?php include('header.php'); // Header The ArtBox 
?>


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

<?php include('footer.php'); // Footer The ArtBox 
?>

</body>

</html>