<?php echo $this->Element('animacion'); ?>
<div id="content">
    <div class='row'>
        <p class="pull-right">
            <button type="button" class="btn btn-default">Crear Cuenta</button>
            <button type="button" class="btn btn-primary">Entrar</button>
        </p></div>
    <?php echo $this->Session->flash(); ?>
    <?php echo $this->element('menu'); ?>
    <br />
    <div class="row">
        <div class='col-md-4'>
            <?php echo $this->element('busqueda'); ?>
        </div>
        <div class="col-md-8"><img src="comohago.png"></div>
    </div>
    <div class="row"><div id="turnosDisponibles"></div></div>
</div>




<script type="text/javascript">
    $(document).ready(function() {
        $('#prepaga_id').on('change', function(evt) {
            <?php
            echo $this->Js->request(array(
                'controller' => 'especialidads',
                'action' => 'ajax_getEspecialidad'
                    ), array(
                'update' => '#div_especialidad',
                'async' => true,
                'method' => 'get',
                'data' => '{prepaga_id:$("#prepaga_id").val()}',
                'dataExpression' => true,
            ));
            echo $this->Js->request(array(
                'controller' => 'localidads',
                'action' => 'ajax_getCiudad'
                    ), array(
                'update' => '#div_ciudad',
                'async' => true,
                'method' => 'get',
                'data' => '{reset:1}',
                'dataExpression' => true,
            ));
            echo $this->Js->request(array(
                'controller' => 'especialidads',
                'action' => 'ajax_getEspecialidad'
                    ), array(
                'update' => '#div_especialidad',
                'async' => true,
                'method' => 'get',
                'data' => '{reset:1}',
                'dataExpression' => true,
            ));
            echo $this->Js->request(array(
                'controller' => 'medicos',
                'action' => 'ajax_getMedico'
                    ), array(
                'update' => '#div_medico',
                'async' => true,
                'method' => 'get',
                'data' => '{reset:1}',
                'dataExpression' => true,
            ));
            echo $this->Js->request(array(
                'controller' => 'clinicas',
                'action' => 'ajax_getClinica'
                    ), array(
                'update' => '#div_clinica',
                'async' => true,
                'method' => 'get',
                'data' => '{reset:1}',
                'dataExpression' => true,
            ));
            ?>
        });
        $('#buscarTurno').on('click', function(evt) {
            <?php
                $variablephp = "$('#prepaga_id').val()";
                //echo "variablephp = ".$variablephp;

            echo $this->Js->request(array(
                'controller' => 'turnos',
                'action' => 'ajax_generarTabla'
                    ), array(
                'update' => '#turnosDisponibles',
                'async' => true,
                'method' => 'get',
                'data' => '{prepaga:$("#prepaga_id option:selected").text(),medico:$("#medico_id option:selected").text()'
                        . ',clinica:$("#centroDeSalud_id option:selected").text()}',
                'dataExpression' => true,
            ))
            ?>
            $('html,body').animate({
                scrollTop: $("#turnosDisponibles").offset().top
            }, 2000);
        });
    });

</script>