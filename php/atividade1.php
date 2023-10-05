<?php
   
    if (isset($_GET["numero"]))
     {
        $numero = intval($_GET["numero"]);

       
        echo "<p>Tabuada do $numero:</p>";
        echo "<ul>";
        $i = 0;
        while ($i <= 10)
         {
            $resultado = $numero * $i;
            echo "<li>$numero x $i = $resultado</li>";
            $i++;
        }
        echo "</ul>";
    } 
    ?>

    <a href="index.html">Calcular outra tabuada</a>