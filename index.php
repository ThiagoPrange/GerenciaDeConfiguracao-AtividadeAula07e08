<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Cálculo de IMC</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>
            <h1>Cálculo de IMC</h1>
            <form method="POST" action="calculaIMC.php">
                <table>
                    <tr><td>Digite sua altura em metros:</td><td><input type="number" step="0.01" name="altura" placeholder="Ex.: 1,5" required=""/></td></tr>
                    <tr><td>Digite seu peso em Kg:</td><td><input type="number" step="0.1" name="peso" placeholder="Ex.: 70,4" required=""/></td></tr>
                    <tr><td colspan="2"><input type="submit" value="Calcular IMC"/></td></tr>
                </table>
            </form>            
        </div>
    </body>
</html>
