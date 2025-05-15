<main>
    <section class="container">
        <div class="pt-5">
            <h1 class="mt-5 fw-light">
                <div style="vertical-align: inherit;">
                    <div style="vertical-align: inherit;">Galeria</div>
                </div>
            </h1>
            <hr>
        </div>
    </section>

    <section class="m-3">

        <?php foreach ($foto as $fotos): ?>
            <img src="<?= $fotos['img']; ?>" class="cont-foto"  alt="<?= $fotos["nombre"]; ?>">
        <?php endforeach; ?>
        </div>
    </section>


</main>