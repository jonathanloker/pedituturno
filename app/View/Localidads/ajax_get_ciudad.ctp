<?php
 echo $this->Form->input('ciudad_id', array('class' => 'form-control validate[required]',
     'empty' => __('Seleccione una ciudad'),
     'default' => '',
     'options' => $ciudad,
     'placeholder' => __('Ciudad'),
     'data-prompt-position' => "topLeft:150"));
 ?>


<script type="text/javascript">
    $(document).ready(function() {
        $('#ciudad_id').on('change', function(evt) {
            <?php
            echo $this->Js->request(array(
                'controller' => 'medicos',
                'action' => 'ajax_getMedico'
                    ), array(
                'update' => '#div_medico',
                'async' => true,
                'method' => 'get',
                'data' => '{especialidad_id:$("#especialidad_id").val(),prepaga_id:$("#prepaga_id").val(),ciudad_id:$("#ciudad_id").val()}',
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