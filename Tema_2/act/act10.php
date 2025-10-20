<!DOCTYPE html>
<html>
<head>
    <title>Prueba de PHP</title>
</head>
<body>
   <?php
        $variable = NULL;
        if (is_null($variable)) {
            echo "La variable es NULL.";
        } else {
            echo "La variable no es NULL.";
        }
    ?>
</body>
</html>