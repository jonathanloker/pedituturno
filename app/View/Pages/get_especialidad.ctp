<?php
echo $this->Form->input('especialidad_id', array('class' => 'form-control validate[required]',
    'empty' => __('Seleccione una especialida'),
    'default' => '',
    'options' => $especialidad,
    'placeholder' => __('Especialidad'),
    'data-prompt-position' => "topLeft:150"));
?>