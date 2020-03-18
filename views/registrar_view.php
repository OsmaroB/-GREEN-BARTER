 <?php
if(isset($_GET['tipo'])){
    if ($_GET['tipo']== 'persona'){
        print('<!--CONTENEDOR JUMBOTRON CON IMAGEN Y EL SLOGAN DE LA EMPRESA-->
        <div class="container ">
        <div class="row ">
            <div class="col col-lg-12 text-white" >
            <div class=" block-space ">
                <h1 class="text-title text-center">Ingresar información</h1>
                <div class="up-30"></div>
                <form class="container col-7 center">
                <div class="form-row">
                    <div class="form-group col-6 col-sm-12 col-md-6 col-lg-6">
                    <label for="inputNombre">Nombre</label>
                    <input type="text" class="form-control" id="txtNombre" placeholder="Ingresa tu nombre">
                    </div>
                    <div class="form-group col-6 col-sm-12 col-md-6 col-lg-6">
                    <label for="inputApellido">Apellido</label>
                    <input type="text" class="form-control" id="txtApellido" placeholder="Ingresa tu o tus apellidos">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="inputCorreo">Email</label>
                    <input type="email" class="form-control" id="txtCorreo">
                    </div>
                    <div class="form-group col-md-6">
                    <label for="inputTelefono">Telefono</label>
                    <input type="phone" class="form-control" id="txtTelefono">
                    </div>
                    
                </div>
                <button type="submit" class="btn btn-primary">Sign in</button>
                </form>
                
            </div>
            </div>
        </div>
        </div>
    </div>');
    }else{
        print('');
    }
}else{
    print(' <div class="container">
    <div class="row">
        <div class="col-12">
        <div class="up-50"></div>
            <h1 class="text-center text-white">Debes de elegir algun tipo de usuario</h1>
        <div class="up-50"></div>
        <div class="col-6 offset-3"> <div class="card-group">
        <div class="card">
            <img src="../web/img/index/bussness.jpg" class="card-img-top img-fluid" alt="Responsive image">
            <div class="card-body">
            <h5 class="card-title">Empresa</h5>
            <a href="registrar.php?tipo=empresa&donar=SI" class="btn btn-primary white">Aceptar</a>
            </div>
        </div>
        <div class="card">
        <img src="../web/img/index/person.jpg" class="card-img-top img-fluid" alt="Responsive image">
            <div class="card-body">
            <h5 class="card-title">Persona natural</h5>
            <a href="registrar.php?tipo=persona&donar=SI" class="btn btn-primary white">Aceptar</a>
            </div>
        </div>
    </div></div>    
        </div>
    </div>
</div>');
}
 ?>
 <div class="col-6"></div>
 

