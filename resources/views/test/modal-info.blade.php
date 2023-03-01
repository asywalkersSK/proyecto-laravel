<!-- Modal Edit-->
<div class="modal fade" id="edit{{$test->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Pregunta</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route("home.update",$test->id)}}" method="post" enctype="multipart/form-data">
      @csrf
      @Method("PUT")
      <div class="modal-body">
        <label for="">Pregunta</label>
        <input type="text" name="pregunta" id="" class="form-control" value="{{$test->pregunta}}">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Actualizar</button>
      </div>
    </div>
    </form>
  </div>
</div>

<!-- Modal Eliminar -->
<div class="modal fade" id="delete{{$test->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Eliminar Pregunta</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route("home.destroy",$test->id)}}" method="post" enctype="multipart/form-data">
      @csrf
      @method("DELETE")
      <div class="modal-body">
        ¿Estás segurdo de eliminar a <strong>{{$test->pregunta}}</strong>?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Si</button>
      </div>
    </div>
    </form>
  </div>
</div>
