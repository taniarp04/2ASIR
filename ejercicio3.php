<?php
/*se pide 2 numeros a y b */
 /*
    valores superiores a la media
 */
 
 // ---------- PROGRAMA PRINCIPAL ----------------------
  $media = Media();
  Visualizar ($media);
  
  // --------------- FUNCIONES -------------------
 
  
  // ------------- obtiene la media -------------
  function Media (){
    $acum = 0;
    for ($i = 1; $i <= 7; $i++){
      if (isset($_POST['numero'.$i]) && is_numeric($_POST['numero'.$i])) {
        $acum += $_POST['numero'.$i];
      } else {
        return null; // Indica que hay un error en los datos enviados
      }
    }
    return $acum / 7;
 }
 

  function Visualizar ($media){
    for ($i = 1; $i <= 7; $i++){
       if ($_POST['numero'.$i] > $media){
           echo $_POST['numero'.$i];
       }
    }
  }


?>