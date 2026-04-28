<?php
require 'db.php';
require 'clases/Cine.php';
require 'includes/header.php';

$cines = Cine::toArray($pdo);
?>

<h2>🎬 Selecciona cine y asiento</h2>

<?php foreach($cines as $cine): ?>

<div class="card mb-4 p-3">
    <h4><?= $cine['nombre'] ?> (<?= $cine['poblacion'] ?>)</h4>

    <?php
    // ASIENTOS OCUPADOS
    $stmt = $pdo->prepare("SELECT asiento FROM entradas WHERE idCine=?");
    $stmt->execute([$cine['idCine']]);
    $ocupados = array_column($stmt->fetchAll(), 'asiento');
    ?>

    <form method="POST" action="comprar.php">
        <input type="hidden" name="cine" value="<?= $cine['idCine'] ?>">

        <input type="hidden" name="asiento" id="asiento-<?= $cine['idCine'] ?>">

        <div class="asientos">

        <?php
        $filas = ['A','B','C'];
        $columnas = 4;

        foreach($filas as $f):
            for($i=1;$i<=$columnas;$i++):
                $asiento = $f.$i;
                $ocupado = in_array($asiento, $ocupados);
        ?>

            <button type="button"
                class="seat <?= $ocupado ? 'ocupado' : '' ?>"
                <?= $ocupado ? 'disabled' : '' ?>
                onclick="seleccionarAsiento('<?= $asiento ?>', <?= $cine['idCine'] ?>)">
                <?= $asiento ?>
            </button>

        <?php endfor; endforeach; ?>

        </div>

        <button class="btn btn-success mt-3">Comprar entrada</button>
    </form>
</div>

<?php endforeach; ?>

<script>
function seleccionarAsiento(asiento, cineId){
    document.getElementById('asiento-' + cineId).value = asiento;
    alert("Asiento seleccionado: " + asiento);
}

function seleccionarAsiento(asiento, cineId){

    document.getElementById('asiento-' + cineId).value = asiento;

    document.querySelectorAll('.seat').forEach(s => s.classList.remove('selected'));

    event.target.classList.add('selected');
}
</script>

<?php require 'includes/footer.php'; ?>