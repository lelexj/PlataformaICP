<!-- Adcionar Usuário-->
<div class="modal fade" id="addescp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Novo Escopo </h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>

      <div class="card-body">

     <form method="POST" action="{{ route('escp.create') }}">






       @csrf
                    <div class="form-group">


                        <input type="text" class="form-control form-control-user" id="name" placeholder="Nome" name="name" required autofocus>
                      </div>

                      






      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
        <button class="btn btn-success" type="submit" >Salvar</button>
    </form>
      </div>
     </div>
    </div>
  </div>
