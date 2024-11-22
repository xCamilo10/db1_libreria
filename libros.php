<?php
include 'includes/db.php';
$query = 'SELECT * FROM libros';
$stmt = $pdo->query($query);
$libros = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Libros</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <h1>Listado de Libros</h1>
    <table>
        <tr>
            <th>Título</th>
            <th>Autor</th>
            <th>Precio</th>
        </tr>
        <?php foreach ($libros as $libro): ?>
        <tr>
            <td><?php echo htmlspecialchars($libro['titulo']); ?></td>
            <td><?php echo htmlspecialchars($libro['autor']); ?></td>
            <td><?php echo htmlspecialchars($libro['precio']); ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
