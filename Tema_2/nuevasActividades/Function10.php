<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Function10</title>
</head>
<body>
    
<?php
function fibonacci($n) {
    $serie = [];

    if ($n <= 0) {
        return $serie;
    }

    $serie[] = 0; 

    if ($n == 1) {
        return $serie; 
    }

    $serie[] = 1; 

    for ($i = 2; $i < $n; $i++) {
        $serie[] = $serie[$i - 1] + $serie[$i - 2];
    }

    return $serie;
}
?>

</body>
</html>