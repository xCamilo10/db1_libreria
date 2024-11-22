<?php
include 'includes/db.php';

// Consulta para obtener los libros
$query = 'SELECT t.id, t.titulo, a.nombre AS autor, p.nombre AS publicador, t.precio
          FROM titulos t
          JOIN titulo_autor ta ON t.id = ta.titulo_id
          JOIN autores a ON ta.autor_id = a.id
          JOIN publicadores p ON t.publicador_id = p.id';

$stmt = $pdo->query($query);
$libros = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de Libros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="container">
        <h1>Listado de Libros</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Autor</th>
                    <th>Publicador</th>
                    <th>Precio</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($libros as $libro): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($libro['titulo']); ?></td>
                        <td><?php echo htmlspecialchars($libro['autor']); ?></td>
                        <td><?php echo htmlspecialchars($libro['publicador']); ?></td>
                        <td><?php echo htmlspecialchars($libro['precio']); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
