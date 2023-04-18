<?php
ob_start();
session_start();

if (isset($_SESSION["numeros_aleatorios"])) {
    $numeros_aleatorios = $_SESSION["numeros_aleatorios"];    
}

if (isset($_SESSION["numeros_aleatorios"])) {
    $numero_aleatorio_actual = $_SESSION["numeros_aleatorio_actual"];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bingo Kata App</title>
    <?php include 'layout/head.php'; ?>
</head>
<body>
    <?php include 'layout/header.php'; ?>

    <!-- CONTAINER -->
    <div class="container">
        <div class="row justify-content-center mt-3 pt-2">
            <div class="col-md-12">
               
                <div class="card text-center">
                    <div class="card-header">
                        Calling Bingo Numbers
                    </div>
                    <div class="card-body">
                        
                        <h5 class="card-title">Los numeros que salieron son:</h5>
                        <?php
                            $numeros = "";
                            if (isset($numeros_aleatorios)) {
                                foreach ($numeros_aleatorios as $key => $value) { 
                                    $numeros .= $value . ", ";
                                }   
                            }                                                      
                        ?>
                        <p class="card-text"><?=$numeros?></p>                        
                                                
                        <hr />
                        <button id="calling_bingo_numbers" class="btn btn-primary">Generar numero</button>
                        <button id="delete_bingo_numbers" class="btn btn-primary">Eliminar numeros</button>
                        
                        <br />
                        <h1 style="font-size:200px;"><?=isset($numero_aleatorio_actual) ? $numero_aleatorio_actual : 0;?></h1>
                    </div>
                    <div class="card-footer text-muted">
                        Aun falta para llegar a los 75 :) y nadie canto bingo
                    </div>
                </div>                

                <?php include 'layout/footer.php'; ?>

            </div>
        </div>
    </div>
    <!-- END CONTAINER -->

    <?php include 'layout/scripts.php'; ?>
    <script src="js/application.js"></script>
</body>
</html>