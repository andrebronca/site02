<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site02</title>
</head>
<body>
    <?php 
    //com isso o composer fica encarregado de carregar as classes
    require './vendor/autoload.php';
    
    $url = new Core\ConfigController();
    
    ?>
</body>
</html>