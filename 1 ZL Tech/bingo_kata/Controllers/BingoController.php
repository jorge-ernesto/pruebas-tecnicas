<?php

session_start();

$action = $_GET['action'];

switch($action) {
   case "generate":           
      //VALIDAMOS SI NO ES EL PRIMER NUMERO GENERADO  
      if (isset($_SESSION['numeros_aleatorios'])) {
         $x = 0;
      
         while ($x<1) {
            $num_aleatorio = rand(1,75);
            if (!in_array($num_aleatorio, $_SESSION['numeros_aleatorios'])) {               
               //ASIGNAMOS NUMEROS ALEATORIOS A VARIABLES DE SESSION
               // array_push($_SESSION['numeros_aleatorios'], $num_aleatorio);
               $_SESSION['numeros_aleatorios'][] = $num_aleatorio;
               $_SESSION["numeros_aleatorio_actual"] = $num_aleatorio;

               $x++;
            }
         }  
      } else { //ES EL PRIMER NUMERO GENERADO
         $num_aleatorio = rand(1,75);
         $_SESSION['numeros_aleatorios'][] = $num_aleatorio;
         $_SESSION["numeros_aleatorio_actual"] = $num_aleatorio;
      }                    
   break;

   case "delete":                      
      //ELIMINAMOS NUMEROS
      unset($_SESSION['numeros_aleatorios']);
      unset($_SESSION['numeros_aleatorio_actual']);
   break;

   case "generate_bingo_cards":  
      $valores = array();
      $x = 0;
      
      while ($x<75) {
         $num_aleatorio = rand(1,75);
         if (!in_array($num_aleatorio,$valores)) {
           array_push($valores,$num_aleatorio);
           $x++;
         }
      }   
      $_SESSION['bingo_cards'] = $valores;
   break;

   case "delete_bingo_cards":                      
      //ELIMINAMOS NUMEROS
      unset($_SESSION['bingo_cards']);
   break;
}