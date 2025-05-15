<section class="d-flex justify-content-center align-items-center mt-5 pt-4 container"><br><br><hr>
    <div class="card shadow-lg bg-black text-light mt-5" style="width: 25rem;">
        <div class="mt-3 text-center">
            <h1 class="">Login</h1>
            <p class="">favor de ingresar tus datos</p>
            <img src="views/images/user.png" class="foto-user" alt="icon">
        </div>
        <br>
        <form action="index.php?action=login" method="post" class="m-3">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Cuenta de email</label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Tu contraseña</label>
                <input type="password" class="form-control" name="pass" id="exampleInputPassword1">
            </div>
            <div class="text-center">
                <button type="submit" name="enviar" class="btn btn-outline-primary">ingresar</button>
                <p class="m-3">¿Aun no tienes cuenta? <a href="index.php?action=registerv"> Resgistrate aqui</a></p>
            </div>
        </form>
    </div>
</section>