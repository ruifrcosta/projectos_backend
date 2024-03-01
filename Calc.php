<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular</title>
    <link rel="stylesheet" href="Calculadora.css">
</head>
<body>
    
    <div>
    <form action="" method="get">
        <input type="text" name="Valor1" placeholder="Digite o valor">
        <input type="text" name="Valor2" placeholder="Digite o Valor">
        <select name="Operador" id="op1">
            <option value="nenhum">Nenhum</option>
            <option value="soma">Soma</option>
            <option value="subtracao">Subtração</option>
            <option value="divisao">Divisão</option>
            <option value="multiplicacao">Multiplicação</option>
        </select>
        <button name="submeter" type="submit" value="submeter">Calcule</button>
        <br>
    </form>
    <p class="resultado" name="resultado">
        Resultado:
        <?php
        if (isset($_GET['submeter'])) {
            $resultado1 = $_GET['Valor1'];
            $resultado2 = $_GET['Valor2'];
            $operador = $_GET['Operador'];
            switch ($operador) {
                case 'nenhum':
                    echo "Selecione um operador.";
                    break;
                case'soma':
                    echo $resultado1 + $resultado2;
                    break;
                case'subtracao':
                    echo $resultado1 - $resultado2;
                    break;
                case 'divisao':
                    if ($resultado2 != 0) {
                        echo $resultado1 / $resultado2;
                    } else {
                        echo "Divisão por zero não permitida.";
                    }
                    break;
                case'multiplicacao':
                    echo $resultado1 * $resultado2;
                    break;
            }
        }
        ?>
    </div>
</body>
</html>