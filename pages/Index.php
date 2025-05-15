<body>
    <div id="inicio">
        <div class="presentacion">
            <p class="bienvenida">Bienvenido a</p>
            <h2>FOTOSGUAY</h2>
            <p class="descripcion">
                capturando momentos que cuentan historias. Mi pasión por la fotografía va más allá del simple clic
            </p>
            <a href="#portfolio">Ir a mi galeria</a>
        </div>
    </div>
    <hr>
    <section>
        <div class="p-5">
            <h2 class="text-dark text-center text-decoration-underline">SERVICIOS</h2>
        </div>
        <div class="row featurette bg-info">
            <div class="col-md-7">
                <div class="m-5">
                    <h2 class="featurette-heading fw-normal lh-1">Para todo tipo de <span class="text-body-secondary">Eventos</span></h2>
                    <p class="lead">Capturamos tus momentos más importantes, para todo tipo de eventos. Ya sea una boda, cumpleaños, sesión familiar o evento corporativo, ofrecemos servicios fotográficos profesionales que convierten cada instante 
                        en un recuerdo inolvidable. Calidad, creatividad y compromiso en cada toma.</p>
                </div>
            </div>
            <div class="col-md-5">
                <img src="views/images/img1.jpg" class="featurette-image img-fluid mx-auto" style="height: 350px; width: 450px;">
            </div>
        </div>
        <div class="row featurette bg-light">
            <div class="col-md-7">
                <div class="m-5">
                    <h2 class="featurette-heading fw-normal lh-1">Para tus <span class="text-body-secondary">retratos</span></h2>
                    <p class="lead">Retratos que cuentan tu historia, para tus retratos más especiales. Ofrecemos sesiones fotográficas personalizadas donde tu esencia es la protagonista. 
                        Ya sea en estudio o en exteriores, capturamos tu mejor versión con estilo y profesionalismo.</p>
                </div>
            </div>
            <div class="col-md-5">
                <img src="views/images/img2.jpg" class="featurette-image img-fluid mx-auto" style="height: 350px; width: 450px;">
            </div>
        </div>
        <div class="row featurette bg-info">
            <div class="col-md-7">
                <div class="m-5">
                    <h2 class="featurette-heading fw-normal lh-1">Capturando los <span class="text-body-secondary">mejores momentos de tu vida</span></h2>
                    <p class="lead">Capturando los mejores momentos de tu vida con pasión y precisión. Desde sesiones íntimas hasta grandes celebraciones, inmortalizamos cada instante con un estilo único y profesional. 
                        Tu historia merece ser recordada con imágenes que emocionen.</p>
                </div>
            </div>
            <div class="col-md-5">
                <img src="views/images/img3.jpg" class="featurette-image img-fluid mx-auto" style="height: 350px; width: 450px;">
            </div>
        </div>
    </section>

    <section class="container p-5 m-5">

        <h3 class="text-center m-5">puedes contactarme</h3>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Tu nombre completo</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nombre completo">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Tu correo electonico</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Direccion de email">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Tema...</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Tema...">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label" placeholder="escribe tu mensaje aqui">Example textarea</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-outline-primary">Enviar mensaje</button>
    </section>
    <section class="bg-black p-4">
        <footer class="m-5 text-center text-white">
            <p class="text-size-18">Todos los derechos reservados - 2025</p>
            <div class="icon-size-32">
                <a href="#" class="text-decoration-none text-white"><i class="bi bi-whatsapp"></i> </a>
                <a href="#" class="text-decoration-none text-white"><i class="bi bi-facebook"></i> </i></a>
                <a href="#" class="text-decoration-none text-white"><i class="bi bi-instagram"></i> </i></a>
            </div>
        </footer>
    </section>
</body>
<?php
include_once 'Plantillas/Foooter.php';
?>