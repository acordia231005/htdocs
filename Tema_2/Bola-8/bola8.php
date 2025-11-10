
<?php
if (isset($_GET['pregunta'])) {
    $pregunta = htmlspecialchars($_GET['pregunta']);
    
    $respuestas = [
        "Sí",
        "No",
        "Quizás",
        "Claro que sí",
        "Por supuesto que no",
        "No lo tengo claro",
        "Seguro",
        "Yo diría que sí",
        "Ni de coña"
    ];
    
    $respuesta = $respuestas[array_rand($respuestas)];
    
    echo "<h1>Bola 8 Mágica</h1>";
    echo "<p><strong>Tu pregunta:</strong> $pregunta</p>";
    echo "<p><strong>Respuesta:</strong> $respuesta</p>";
} else {
    echo "<p>No se ha recibido ninguna pregunta.</p>";
}
?>
