<!--CONTENEDOR JUMBOTRON CON IMAGEN Y EL SLOGAN DE LA EMPRESA-->
<div class="container ">
      <div class="row ">
        <div class="col col-lg-12 text-white" >
          <div class=" block-space ">
            <h2 class="ajuste1" align=center>Producto</h2>
            <div class="avatar-upload">
                <div class="avatar-edit">
                    <input type='file' id="imageUpload" name="archivo" accept=".png, .jpg, .jpeg" />
                    <label title="Seleccionar imagen"id="imageUpload1" for="imageUpload"></label>
                </div>
                <?php  
                    print("
                        <div class='avatar-preview'>
                        <div id='imagePreview' style='background-image:url(../../web/img/general/fotoperfil.jpg);'>
                        </div>
                        </div>
                    "); 
                ?> 
            </div> 
              <div class="up-30"></div>
              <form class="container col-7 center">
              <div class="form-row">
                  <div class="form-group col-6 col-sm-12 col-md-6 col-lg-6">
                  <label for="inputNombre" class="oscuro">Producto</label>
                  <input type="text" class="form-control" id="txtNombre" placeholder="Ingresa nombre del producto">
                  </div>
                  <div class="form-group col-6 col-sm-12 col-md-6 col-lg-6">
                  <label for="inputApellido" class="oscuro">Descripcion</label>
                  <input type="text" class="form-control" id="txtApellido" placeholder="Ingresa descripcion del producto">
                  </div>
              </div>
              <div class="form-row">
                  <div class="form-group col-md-6">
                  <label for="inputCorreo" class="oscuro">Precio</label>
                  <input type="number" class="form-control" id="txtCorreo"  placeholder="Ingresa el precio del producto">
                  </div>
                  <div class="col-md-3 mb-3">
                    <label for="validationCustom04">Estado</label>
                    <select class="custom-select" id="validationCustom04" required>
                        <option>Usado</option>
                        <option>Nuevo</option>
                    </select>
                    <div class="invalid-feedback">
                        Please select a valid state.
                    </div>
                    </div>
                  <div class="form-group col-md-3">
                  <label for="inputTelefono" class="oscuro">Cantidad</label>
                  <input type="number" class="form-control" id="txtTelefono" placeholder="Ingresa la cantidad de producto que tengas">
                  </div>
                  
              </div>
              <p class="text-center"><button type="submit" class="btn btn-success">Aceptar</button>
              <a type="submit" class="btn btn-danger">Cancelar</a></p>
              </form>
            
          </div>
        </div>
      </div>
    </div>
  </div>