<?php
include 'includes/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $correo = $_POST['correo'];
    $nombre = $_POST['nombre'];
    $asunto = $_POST['asunto'];
    $comentario = $_POST['comentario'];

    // Consulta para insertar los datos en la tabla contacto
    $query = 'INSERT INTO contacto (correo, nombre, asunto, comentario) VALUES (?, ?, ?, ?)';
    $stmt = $pdo->prepare($query);
    $stmt->execute([$correo, $nombre, $asunto, $comentario]);

    echo "<p>Gracias por tu mensaje, nos pondremos en contacto contigo pronto.</p>";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Contacto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="container">
        <h1>Formulario de Contacto</h1>
        <form action="contacto.php" method="POST">
            <div class="mb-3">
                <label for="correo" class="form-label">Correo:</label>
                <input type="email" class="form-control" id="correo" name="correo" required>
            </div>
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="mb-3">
                <label for="asunto" class="form-label">Asunto:</label>
                <input type="text" class="form-control" id="asunto" name="asunto" required>
            </div>
            <div class="mb-3">
                <label for="comentario" class="form-label">Comentario:</label>
                <textarea class="form-control" id="comentario" name="comentario" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
</body>
</html>
