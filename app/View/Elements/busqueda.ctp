<div class="row">
    <div class="panel panel-primary">
        <div class="panel-heading">Busque su turno</div>
        <div class="panel-body">
            <div  id="div_prepaga">
                <?php
                echo $this->Form->input('prepaga_id', array('class' => 'form-control validate[required]',
                    'empty' => __('Seleccione una prepaga'),
                    'default' => '',
                    'options' => $prepaga,
                    'placeholder' => __('Prepaga'),
                    'data-prompt-position' => "topLeft:150"));
                ?>
            </div>
            <div  id="div_especialidad">
                <?php
                echo $this->Form->input('especialidad_id', array('class' => 'form-control validate[required]',
                    'empty' => __('Seleccione una especialida'),
                    'default' => '',
                    'placeholder' => __('Especialidad'),
                    'data-prompt-position' => "topLeft:150"));
                ?>
            </div>
            <div  id="div_ciudad">
                <?php
                echo $this->Form->input('ciudad_id', array('class' => 'form-control validate[required]',
                    'empty' => __('Seleccione una ciudad'),
                    'default' => '',
                    'placeholder' => __('Ciudad'),
                    'data-prompt-position' => "topLeft:150"));
                ?>
            </div>
            <div  id="div_medico">
                <?php
                echo $this->Form->input('medico_id', array('class' => 'form-control validate[required]',
                    'empty' => __('Seleccione un medico'),
                    'default' => '',
                    'placeholder' => __('Medico'),
                    'data-prompt-position' => "topLeft:150"));
                ?>
            </div>
            <div  id="div_clinica">
                <?php
                echo $this->Form->input('centroDeSalud_id', array('class' => 'form-control validate[required]',
                    'empty' => __('Seleccione una Centro de salud'),
                    'default' => '',
                    'placeholder' => __('Centro de salud'),
                    'data-prompt-position' => "topLeft:150"));
                ?>
            </div>
            <div>
                <br><button id="buscarTurno" type="button" class="btn btn-primary pull-right">Buscar turno</button>
            </div>
        </div>
    </div>
</div><!-- end row -->
