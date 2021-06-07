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
            $voiture2 = new voitureConstruct("Rouge", 3, 111, "Gazoil");
            $voiture3 = new voitureConstruct($RandomCouleur, $RandomPorte, $RandomPuissance, $RandomCarburant); //2eme objet avec la function construct 
            $voiture4 = new voitureConstruct($RandomCouleur, $RandomPorte, $RandomPuissance, $RandomCarburant); 
            $voiture5 = new voitureConstruct($RandomCouleur, $RandomPorte, $RandomPuissance, $RandomCarburant); 
            $voiture6 = new voitureConstruct($RandomCouleur, $RandomPorte, $RandomPuissance, $RandomCarburant); 
    ?>
    <header>
        <h1>POO Premier cours</h1>
    </header>

    <div class="FirstVoiture">
        <h1>Mes belles voitures</h1>
        <pre>
            <p> On affiche la variable RandomCouleur qui randomise la couleur comme sa nom l'indique : <?php echo $RandomCouleur?> </p>
            <p> On fais pareil avec RandomPorte : <?php echo $RandomPorte ?> </p>
            <p> Variable RandomPuissance : <?php echo $RandomPuissance ?> </p>
            <p> Variable RandomCarburant : <?php echo $RandomCarburant ?> </p>
            
            <?php echo $voiture2->getHtmlRepresentation(); ?>
            <?php echo $voiture3->getHtmlRepresentation(); ?>
            <?php echo $voiture4->getHtmlRepresentation(); ?>
            <?php echo $voiture5->getHtmlRepresentation(); ?>
            <?php echo $voiture6->getHtmlRepresentation(); ?>
            
        </pre>
    </div>

    
</body>
</html>