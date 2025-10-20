<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora dos digitos suma</title>
</head>
<body>
    <h1>Calculadora de Sumas</h1>
    <form method="post">
        <input type="number" name="num1" placeholder="Primer número" required>
        <br>
        <input type="number" name="num2" placeholder="Segundo número" required>
        <br>
        <button type="submit">Calcular</button>
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numero1 = $_POST['num1'] ?? '';
            $numero2 = $_POST['num2'] ?? '';
            $suma = $numero1 + $numero2;

            print ("La suma de " . $numero1 . " y " . $numero2 . ": " . $suma);
        }
    ?>
</body>
</html>