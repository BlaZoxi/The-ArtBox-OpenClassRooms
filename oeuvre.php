    <?php
    include('header.php');  // Header The ArtBox 

    include('oeuvres.php'); //Tableau des Oeuvres

    if (!isset($_GET['id']) || !array_key_exists($_GET['id'], $oeuvres)) {
        header("Location: index.php");
    }

    ?>

    <main>
        <?php
        // Boucle des Oeuvres 

        foreach ($oeuvres as $data) :;
            if (array_key_exists('id', $data) && $data['id'] == $_GET['id']) :
                //if ($data['id'] == $_GET['id']) : ;
        ?>

                <!-- Les Oeuvre -->

                <article id="detail-oeuvre">
                    <div id="img-oeuvre">
                        <img src="<?php echo $data['lien'] ?>" alt="<?php echo $data['alt'] ?>">
                    </div>
                    <div id="contenu-oeuvre">
                        <h1><?php echo $data['titre'] ?></h1>
                        <p class="description"><?php echo $data['auteur'] ?></p>
                        <p class="description-complete"><?php echo $data['description'] ?></p>
                    </div>
                </article>

        <?php
            endif;
        endforeach;
        ?>

    </main>

    <?php include('footer.php'); // Footer The ArtBox 
    ?>

    </body>

    </html>