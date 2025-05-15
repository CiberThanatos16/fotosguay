
<hr>
<section>
    <div class="container text-center p-5">
        <h1>Subir Imagen</h1><br>
        <form method="post" action="index.php?action=subir" enctype="multipart/form-data">
            <i class="bi bi-plus-square-dotted" style="font-size: 6rem; color: black" aria-hidden="true"></i><br><br>

            <label for="img">Seleccionar Imagen</label><br>
            <input type="file" name="img" id="img" class="form-control" accept="image/*" required><br><br>

            <label for="nombre">Nombre de la imagen</label><br>
            <input type="text" name="nombre" id="nombre" class="form-control form-control-lg" required><br><br>

            <input type="submit" class="btn btn-info" name="subir" value="GUARDAR">
        </form>
    </div>
</section>
<hr>

<section class="container">
    <div class="p-5">
        <h1>Actualizar foto</h1><br>
        <div class="row row-cols-2 row-cols-md-5 g-5">
            <?php foreach ($foto as $fotos): ?>
                <div class="col">
                    <div class="card bg-info" style="width: 12rem;">
                        <img src="<?= $fotos['img']; ?>" class="card-img-top" style="height: 100px;" alt="<?= $mobs["nombre"]; ?>">
                        <h3 class="text-center"><?php echo $fotos["nombre"]; ?></h3>
                    </div>
                    <div class="card-footer bg-transparent border-info">
                        <a href="index.php?action=edit&id=<?php echo $fotos["id"]; ?>">Actualizar</a> |
                        <a href="index.php?action=eliminar&id=<?php echo $fotos["id"]; ?>" onclick="return confirm('¿Estás seguro de eliminar esta foto?')">Eliminar</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div><br>
        <hr>
    </div>
</section>