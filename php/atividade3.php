<h2>Rendimento Diário</h2>

    <?php
    
    if (isset($_GET["investimento"]))
     {
        $investimento = floatval($_GET["investimento"]);
        $taxa_diaria = 0.00008;

        echo "<p>Depósito inicial: $investimento</p>";


        for ($dia = 1; $dia <= 30; $dia++) 
        {
            $investimento *= (1 + $taxa_diaria);
            echo "<p>Dia $dia - " . number_format($investimento, 2, ',', '.') . "</p>";
        }
    }

        ?>


        <a href="index.html">Calcular outra tabuada</a>