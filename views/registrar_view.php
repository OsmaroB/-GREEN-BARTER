 <?php
 if (isset($GET['tipo'])){
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
 ?>
 <div class="container">
     <div class="row">
         <div class="col-6 center">
            <div class="card card-background border-light mb-3" style="max-width: 18rem;">
            <div class="card-body text-light">
                <h5 class="card-title">Primary card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            </div>
         </div>
         <div class="col-6 center">
            <div class="card card-background border-light mb-3" style="max-width: 18rem;">
            <div class="card-body text-light">
                <h5 class="card-title">Primary card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            </div>
         </div>
     </div>
 </div>
 