<?php
ob_start();
session_start();

if (isset($_SESSION["bingo_cards"])) {
    $bingo_cards = $_SESSION["bingo_cards"];    
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
                        Generate Bingo Cards
                    </div>
                    <div class="card-body">
                        <?php
                            // echo "<pre>";
                            // print_r($_SESSION["bingo_cards"]);
                            // echo "</pre>";
                        ?>

                        <h5 class="card-title">Bingo card:</h5>
                        <table class="table table-bordered"> 
                            <?php if (isset($_SESSION["bingo_cards"])) { ?>    
                        
                                <tbody>                                                                
                                    <tr>      
                                        <?php for ($i=0; $i<=4; $i++) { ?>
                                            <td><?=$bingo_cards[$i]?></td>    
                                        <?php } ?>
                                    </tr>                                         
                                        
                                    <tr>      
                                        <?php for ($i=5; $i<=9; $i++) { ?>
                                            <td><?=$bingo_cards[$i]?></td>    
                                        <?php } ?>         
                                    </tr>      

                                    <tr>      
                                        <?php for ($i=10; $i<=14; $i++) { ?>
                                            <td><?=$bingo_cards[$i]?></td>    
                                        <?php } ?>         
                                    </tr>     

                                    <tr>      
                                        <?php for ($i=15; $i<=19; $i++) { ?>
                                            <td><?=$bingo_cards[$i]?></td>    
                                        <?php } ?>         
                                    </tr>      

                                    <tr>      
                                        <?php for ($i=20; $i<=24; $i++) { ?>
                                            <td><?=$bingo_cards[$i]?></td>    
                                        <?php } ?>         
                                    </tr>
                                </tbody>

                            <?php } ?>    
                        </table>                 
                                                
                        <hr />
                        <button id="generate_bingo_cards" class="btn btn-primary">Generar Bingo Card</button>
                        <button id="delete_bingo_cards" class="btn btn-primary">Eliminar Bingo Card</button>
                    </div>
                    <div class="card-footer text-muted">
                        Generate Bingo Cards
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