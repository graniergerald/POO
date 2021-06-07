<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <title>POO1</title>
</head>
<body>
    <?php   require_once "VoitureVide.php";
            $voiture1 = new voiture();  // Premier objet mais les attribut sont static c'est pas bon
            $voiture2 = new voitureConstruct();
            $voiture3 = new voitureConstruct(); //2eme objet avec la function construct 
            $voiture4 = new voitureConstruct(); 
            $voiture5 = new voitureConstruct(); 
            $voiture6 = new voitureConstruct(); 
            $voiture7 = new voitureConstruct(); 
    ?>
    <header>
        <h1>POO Premier cours</h1>
    </header>

    <div class="MesBellesVoitures">
        <div class="FirstP">

            <h1>Mes belles voitures</h1>
            <p> On affiche la variable RandomCouleur qui randomise la couleur comme son nom l'indique : <?php echo $RandomCouleur?> </p>
            <p> On fais pareil avec RandomPorte : <?php echo $RandomPorte ?> </p>
            <p> Variable RandomPuissance : <?php echo $RandomPuissance ?> </p>
            <p> Variable RandomCarburant : <?php echo $RandomCarburant ?> </p>
        </div>

        <h1>Objet Voiture</h1>
        <p>On crée 6 voitures sous forme d'objet. On randomise chaque attribut et on l'affiche sous forme de carte.</p>
        <div class="container">

            <?php echo $voiture2->getHtmlRepresentation(); ?>
            <?php echo $voiture3->getHtmlRepresentation(); ?>
            <?php echo $voiture4->getHtmlRepresentation(); ?>
            <?php echo $voiture5->getHtmlRepresentation(); ?>
            <?php echo $voiture6->getHtmlRepresentation(); ?>
            <?php echo $voiture7->getHtmlRepresentation(); ?>
        </div>
    </div>

    <div class="ObjetIntoSVG">
        <h1></h1>
    </div>

    
</body>
</html>