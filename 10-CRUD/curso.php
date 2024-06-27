<?php
require('conexion.php');
require('header.php');

?>

<div class="container">
    <h2>Formulario de Registro</h2>

    <?php if (isset($_SESSION['mensaje'])): ?>
        <div class="row">
            <div class="col">
                <div class="alert alert-<?php echo htmlspecialchars($_SESSION['color']); ?> alert-dismissible fade show" role="alert">
                    <p class="mb-0"><?php echo htmlspecialchars($_SESSION['mensaje']); ?></p>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        </div>
        <?php session_unset(); ?>
    <?php endif; ?>

    <form action="agregar_curso.php" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="Imagen" class="form-label">Imagen</label>
            <input type="file" id="Imagen" name="Imagen" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="Titulo" class="form-label">Título</label>
            <input type="text" id="Titulo" name="Titulo" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="Descripcion" class="form-label">Descripción</label>
            <input type="text" id="Descripcion" name="Descripcion" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="Estudiantes" class="form-label">Estudiantes</label>
            <input type="text" id="Estudiantes" name="Estudiantes" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Registrarse</button>
    </form>
</div>

<h2>Cursos de Lectura</h2>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Imagen</th>
            <th>Título</th>
            <th>Descripción</th>
            <th>Estudiantes</th>
            <th>Acción</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $statement = $conexion->prepare("SELECT * FROM cursos");
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);

        foreach ($result as $item): ?>
            <tr>
                <td><?php echo htmlspecialchars($item['id']); ?></td>
                <td><img src="<?php echo htmlspecialchars($item['imagen']); ?>" width="100" alt=""></td>
                <td><?php echo htmlspecialchars($item['titulo']); ?></td>
                <td><?php echo htmlspecialchars($item['descripcion']); ?></td>
                <td><?php echo htmlspecialchars($item['estudiantes']); ?></td>
                <td class="d-flex gap-2">
                    <a class="text-success" href="editar_curso.php?id=<?php echo $item['id']; ?>"><i class="bi bi-pencil-fill"></i></a>
                    <a class="text-danger" href="borrar_curso.php?id=<?php echo $item['id']; ?>"><i class="bi bi-trash2-fill"></i></a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>



<?php require('footer.php'); ?>