<h2>Resultado do Fatorial</h2>

    <?php
   
    if (isset($_GET["numero"]))
     {
        $numero = intval($_GET["numero"]);

        function calcularFatorial($n)
         {
            if ($n <= 1) 
            {
                return 1;

            } else
             {
                return $n * calcularFatorial($n - 1);
            }
        }

        $fatorial = calcularFatorial($numero);
        echo "<p>$numero! = $fatorial</p>";
    } 

    ?>


<a href="index.html">Calcular outra tabuada</a>