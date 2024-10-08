<?php
if (!isset ($_POST['enviar']) ) {?>
 <html> 
<head>
    <meta charset="UTF-8">
    <title>Par o Impar</title>
</head>
<body>
    <h2>Verificar si un número s par o impar</h2>
    <form action="parimpar2.php" method="POST">

        <label for="numero">Introduce tu número:</label>
        <input type="number" id="numero" name="numero" required>
        <br><br>
        <button type="submit" name="enviar" > Verificar</button> 
    </form>
</body>
</html>


<?php

}
else{  
    echo "hola";}
?>