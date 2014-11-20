<?php
echo $this->Form->input('medico_id', array('class' => 'form-control validate[required]',
    'empty' => __('Seleccione un medico'),
    'default' => '',
    'options' => $medico,
    'placeholder' => __('Medico'),
    'data-prompt-position' => "topLeft:150"));
?>

<script type="text/javascript">
    $(document).ready(function() {
        $('#medico_id').on('change', function(evt) {
            <?php
            echo $this->Js->request(array(
                'controller' => 'clinicas',
                'action' => 'ajax_getClinica'
                    ), array(
                'update' => '#div_clinica',
                'async' => true,
                'method' => 'get',
                'data' => '{medico_id:$("#medico_id").val()}',
                'dataExpression' => true,
            ))
            ?>
        });
    });

</script>