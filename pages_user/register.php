<section class="d-flex justify-content-center align-items-center mt-5 pt-4"><br><br><hr>
    <div class="card shadow-lg bg-black text-light mt-5" style="width: 25rem;">
        <div class="mt-3 text-center">
            <h1 class="">Login</h1>
            <p class="">favor de registrar tus datos</p>
            <img src="views/images/user.png" class="foto-user rounded-5" alt="icon">
        </div>
        <br>
        <form action="index.php?action=subir_user" method="post" class="m-3">
            <div class="mb-3">
                <label for="" class="form-label">Nombre de usuario</label>
                <input type="text" class="form-control" name="nombre" id="" aria-describedby="">
                <div class="form-text">Escribe tu nombre completo.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Cuenta de email</label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Tu contraseña</label>
                <input type="password" class="form-control" name="pass" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Verifica tu contraseña</label>
                <input type="password" class="form-control" name="pass2" id="exampleInputPassword1">
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-outline-primary">ingresar</button>
                <p class="m-3">¿Ya tienes cuenta? <a href="index.php?action=loginv"> inicia sesion aqui</a></p>
            </div>
        </form>
    </div>
</section>