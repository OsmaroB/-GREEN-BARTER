 <?php
if(isset($_GET['tipo'])){
    if ($_GET['tipo']== 'persona'){
        print('<!--CONTENEDOR JUMBOTRON CON IMAGEN Y EL SLOGAN DE LA EMPRESA-->
        
        <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-white text-center">
                    Ingresa la información
                </h1>
            </div>
        </div>
        <div class="row">
        <div class="col-12 col-sm-12 col-md-4 col-lg-4">
        <div class="up-50"></div>
            <div class="avatar-upload">
                <div class="avatar-edit">
                    <input type="file" id="imageUpload" name="archivo" accept=".png, .jpg, .jpeg" />
                    <label title="Seleccionar imagen"id="imageUpload1" for="imageUpload"></label>
                </div>
        
        ');
        print("
        <div class='avatar-preview'>
        <div id='imagePreview' style='background-image:url(../../web/img/general/fotoperfil.jpg);'>
        </div>
        </div>
    "); 
    
    print('
    </div> 
        </div>
        <div class="col-12 col-sm-12 col-lg-8 col-md-8">
                    <div class="up-50"></div>
            <div class="form-row">
                    <div class="form-group  col-12 col-6 col-sm-12 col-md-6 col-lg-6">
                    <label for="inputNombre" class="claro">Nombre</label>
                    <input type="text" class="form-control" id="txtNombre" placeholder="Ingresa tu nombre">
                    </div>
                    <div class="form-group col-12 col-6 col-sm-12 col-md-6 col-lg-6">
                    <label for="inputApellido" class="claro">Apellido</label>
                    <input type="text" class="form-control" id="txtApellido" placeholder="Ingresa tu o tus apellidos">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-12 col-sm-12 col-md-6 col-lg-6">
                    <label for="inputCorreo" class="claro">Email</label>
                    <input type="email" class="form-control" id="txtCorreo" placeholder="Ingresa tu correo">
                    </div>
                    <div class="form-group col-12 col-sm-12 col-md-6 col-lg-6">
                    <label for="inputTelefono" class="claro">Telefono</label>
                    <input type="phone" class="form-control" id="txtTelefono" placeholder="Ingresa tu teléfono">
                    </div>
                    
                </div>
                <div class="form-row">
                    <div class="form-group col-12 col-sm-12 col-md-6 col-lg-6">
                    <label for="txtPass" class="claro">Contraseña</label>
                    <input type="password" class="form-control" id="txtPass" placeholder="Ingresa tu contraseña">
                    </div>
                    <div class="form-group col-12 col-sm-12 col-md-6 col-lg-6">
                    <label for="txtPass2" class="claro">Repite la contraseña</label>
                    <input type="password" class="form-control" id="txtPass2" placeholder="Ingresa nevamente tu contraseña">
                    </div>
                    
                </div>
            </div>
        </div>    
    </div>
    
    <p class="text-center"> <a data-toggle="tab" href="#menu1" class="btn btn-lg btn-primary text-white">Siguiente</a></p>
                   
</div>

  
    ');

}else if($_GET['tipo']== 'empresa')
{
    print('<!--CONTENEDOR JUMBOTRON CON IMAGEN Y EL SLOGAN DE LA EMPRESA-->
        
    <div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-white text-center">
                Ingresa la información
            </h1>
        </div>
    </div>
    <div class="row">
    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
    <div class="up-50"></div>
        <div class="avatar-upload">
            <div class="avatar-edit">
                <input type="file" id="imageUpload" name="archivo" accept=".png, .jpg, .jpeg" />
                <label title="Seleccionar imagen"id="imageUpload1" for="imageUpload"></label>
            </div>
    
    ');
    print("
    <div class='avatar-preview'>
    <div id='imagePreview' style='background-image:url(../../web/img/general/fotoperfil.jpg);'>
    </div>
    </div>
"); 

print('
</div> 
    </div>
    <div class="col-12 col-sm-12 col-lg-8 col-md-8">
                <div class="up-50"></div>
        <div class="form-row">
                <div class="form-group  col-12 col-6 col-sm-12 col-md-6 col-lg-6">
                <label for="inputNombre" class="claro">Nombre</label>
                <input type="text" class="form-control" id="txtNombre" placeholder="Ingresa tu nombre">
                </div>
                <div class="form-group col-12 col-6 col-sm-12 col-md-6 col-lg-6">
                <label for="inputApellido" class="claro">Apellido</label>
                <input type="text" class="form-control" id="txtApellido" placeholder="Ingresa tu o tus apellidos">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-12 col-sm-12 col-md-6 col-lg-6">
                <label for="inputCorreo" class="claro">Email</label>
                <input type="email" class="form-control" id="txtCorreo" placeholder="Ingresa tu correo">
                </div>
                <div class="form-group col-12 col-sm-12 col-md-6 col-lg-6">
                <label for="inputTelefono" class="claro">Telefono</label>
                <input type="phone" class="form-control" id="txtTelefono" placeholder="Ingresa tu teléfono">
                </div>
                
            </div>
            <div class="form-row">
                <div class="form-group col-12 col-sm-12 col-md-6 col-lg-6">
                <label for="txtEmpresa" class="claro">Nombre empresa</label>
                <input type="text" class="form-control" id="txtEmpresa" placeholder="Ingresa nombre de la empresa">
                </div>
                <div class="form-group col-12 col-sm-12 col-md-6 col-lg-6">
                <label for="txtDesc" class="claro">Descripción empresa</label>
                <input type="text" class="form-control" id="txtDesc" placeholder="Ingresa descripción de la empresa ">
                </div>
                
            </div>
            <div class="form-row">
                <div class="form-group col-12 col-sm-12 col-md-6 col-lg-6">
                <label for="txtPass" class="claro">Contraseña</label>
                <input type="password" class="form-control" id="txtPass" placeholder="Ingresa tu contraseña">
                </div>
                <div class="form-group col-12 col-sm-12 col-md-6 col-lg-6">
                <label for="txtPass2" class="claro">Repite la contraseña</label>
                <input type="password" class="form-control" id="txtPass2" placeholder="Ingresa nevamente tu contraseña">
                </div>
                
            </div>
        </div>
    </div>    
</div>

<p class="text-center"> <a data-toggle="tab" href="#menu1" class="btn btn-lg btn-primary text-white">Siguiente</a></p>
               
</div>


');
}
else{
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