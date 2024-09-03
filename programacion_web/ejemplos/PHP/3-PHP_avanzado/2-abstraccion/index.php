<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animales en PHP</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Información de Animales</h1>
    
    <?php
    require_once('Animal.php');
    require_once('Volador.php');
    require_once('Gato.php');
    require_once('Perro.php');
    require_once('Pajaro.php');
    
    $miGato = new Gato("Gatito");
    $miPerro = new Perro("Perrito");
    $miPajaro = new Pajaro("Canario");
    $claseAbstracta = new Animal("Animalito");
    ?>
    
    <div class="animal-info">
        <div class="animal">Gato:</div> <?php echo $miGato->getNombre() ?> hace <?php echo $miGato->sonido() ?>
    </div>
    
    <div class="animal-info">
        <div class="animal">Perro:</div> <?php echo $miPerro->getNombre() ?> hace <?php echo $miPerro->sonido() ?>
    </div>
    
    <div class="animal-info">
        <div class="animal">Pájaro:</div> <?php echo $miPajaro->getNombre() ?> hace <?php echo $miPajaro->sonido() ?>, <?php echo $miPajaro->volar() ?> y <?php echo $miPajaro->aterrizar() ?>
    </div>
</body>
</html>
