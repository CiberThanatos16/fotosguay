<section class="mt-5 p-5">
    <div class="container text-center p-5">
        <form method="post" action="index.php?action=actualizar" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?=$foto_u['id'];?>">

            <i class="bi bi-plus-square-dotted" style="font-size: 6rem; color: black" aria-hidden="true"></i><br><br>

            
            <label for="img">Seleccionar Imagen</label><br>
            <input type="file" name="img" id="img" class="form-control" accept="image/*"><br><br>

            <label for="nombre">Nombre de la imagen</label><br>
            <input type="text" name="nombre" id="nombre" value="<?=$foto_u['nombre']?>" class="form-control form-control-lg" required>

            <input type="submit" class="mt-5 btn btn-info" name="subir" value="GUARDAR">
        </form>
    </div>
</section>