<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Confirmar Turno</h4>
      </div>
      <div class="modal-body">
          <h3>¿Está seguro que desea reservar el turno?</h3><br>
            <h5>Clinica: <?php echo $clinica; ?></h5>
            <h5>Médico: <?php echo $medico; ?></h5>
            <h5>Prepaga: <?php echo $prepaga; ?></h5>
            <h5><b>Horario: <?php echo "00:00"; ?></b></h5><br>
            <div>
                <?php
                echo $this->Form->input('comentario', array('class' => 'form-control validate[required]',
                    'empty' => __('Comentario'),
                    'placeholder' => __('Comentario'),
                    'data-prompt-position' => "topLeft:150"));
                ?>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary">Reservar Turno</button>
      </div>
    </div>
  </div>
</div>
