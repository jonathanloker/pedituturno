<?php
echo $this->Form->input('especialidad_id', array('class' => 'form-control validate[required]',
    'empty' => __('Seleccione una especialida'),
    'default' => '',
    'options' => $especialidad,
    'placeholder' => __('Especialidad'),
    'data-prompt-position' => "topLeft:150"));
?>


<script type="text/javascript">
    $(document).ready(function() {
        $('#especialidad_id').on('change', function(evt) {
            <?php
            echo $this->Js->request(array(
                'controller' => 'localidads',
                'action' => 'ajax_getCiudad'
                    ), array(
                'update' => '#div_ciudad',
                'async' => true,
                'method' => 'get',
                'data' => '{especialidad_id:$("#especialidad_id").val()}',
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
    });

</script>