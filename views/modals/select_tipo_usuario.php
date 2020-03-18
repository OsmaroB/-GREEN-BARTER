
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Vender como</h5> 
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="card-group">
            <div class="card">
                <img src="../web/img/index/bussness.jpg" class="card-img-top img-fluid" alt="Responsive image">
                <div class="card-body">
                <h5 class="card-title">Empresa</h5>
                <a href="registrar.php?tipo=empresa" class="btn btn-primary white">Aceptar</a>
                </div>
            </div>
            <div class="card">
            <img src="../web/img/index/person.jpg" class="card-img-top img-fluid" alt="Responsive image">
                <div class="card-body">
                <h5 class="card-title">Persona natural</h5>
                <a href="registrar.php?tipo=persona" class="btn btn-primary white">Aceptar</a>
                </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a id="mybtn" class="btn btn-primary white" aria-hidden="true" data-toggle="modal" data-target="#modalLogin" >Inicia Sesión</a>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalDonar" tabindex="-1" role="dialog" aria-labelledby="modalDonalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalDonalLabel">Donar como</h5> 
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="card-group">
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
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a id="mybtn" class="btn btn-primary white" aria-hidden="true" data-toggle="modal" data-target="#modalLogin" >Inicia Sesión</a>
      </div>
    </div>
  </div>
</div>