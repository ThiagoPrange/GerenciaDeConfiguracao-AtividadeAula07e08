<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Cálculo de IMC</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>
            <?php
            $alt = filter_input(INPUT_POST, 'altura', FILTER_SANITIZE_SPECIAL_CHARS);
            $peso = filter_input(INPUT_POST, 'peso', FILTER_SANITIZE_SPECIAL_CHARS);
            $imc = number_format($peso / ($alt * $alt),2,".",",");
            switch ($imc){
                case ($imc < 18.5):
                    $classificacao = "MAGREZA";
                    break;
                case (($imc >= 18.5)&&($imc < 25)):
                    $classificacao = "NORMAL";
                    break;
                case (($imc >= 25)&&($imc < 30)):
                   $classificacao = "SOBREPESO";
                   break;
                case (($imc >= 30)&&($imc < 40)):
                   $classificacao = "OBESIDADE";
                   break;
                case ($imc > 40):
                    $classificacao = "OBESIDADE GRAVE";
                    break;
            }
            echo "<h1>Resultado:</h1>";
            echo "<h3>Classificação: $classificacao</h3>";
            echo "<h3>Seu IMC: $imc </h3>";
            ?>
        </div>
        <div>
            <h4>Tabela de IMC</h4>
            <table>
                <tr><td>MENOR QUE 18,5:</td><td>MAGREZA</td></tr>
                <tr><td>ENTRE 18,5 E 24,9:</td><td>NORMAL</td></tr>
                <tr><td>ENTRE 25,0 E 29,9:</td><td>SOBREPESO</td></tr>
                <tr><td>ENTRE 30,0 E 39,9:</td><td>OBESIDADE</td></tr>                
                <tr><td>MAIOR QUE 40,0:</td><td>OBESIDADE GRAVE</td></tr>
            </table>
        </div>
        <br/>
        <br/>
        <a href='index.php'>Refazer teste</a>
    </body>
</html>