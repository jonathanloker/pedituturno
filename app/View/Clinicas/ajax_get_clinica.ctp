<?php
echo $this->Form->input('centroDeSalud_id', array('class' => 'form-control validate[required]',
    'empty' => __('Seleccione una Centro de salud'),
    'default' => '',
    'options' => $clinica,
    'placeholder' => __('Centro de salud'),
    'data-prompt-position' => "topLeft:150"));
?>

