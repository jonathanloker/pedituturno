<div class="form">

    <div class="row">
        <div class="col-sm-12">
            <div class="page-header">
                <h1><?php echo __('Agregar Producto'); ?></h1>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <?php echo $this->Form->create('Producto', array(
                'role' => 'form', 
                'type' => 'file',
                'inputDefaults' => array(
                    'div' => array('class' => 'form-group'),
                    'error' => array(
                        'attributes' => array('wrap' => 'span', 'class' => 'label label-danger')
                    ),                
                ),
                )); 
            ?>
            <div class="form-group">
                <?php   echo $this->Form->input('nombre', 
                            array('class' => 'form-control validate[required]', 
                                'type' => 'text',
                                'placeholder' => __('Nombre'),
                                'data-prompt-position' => "topLeft:150")); ?>
            </div>
            <div class="form-group">
                <?php echo $this->Form->input('descripcion', 
                        array('class' => 'form-control validate[required]',
                            'placeholder' => __('Descripción'),
                            'data-prompt-position' => "topLeft:150")); 
                ?>
            </div>
            <div class="form-group">
                <?php   echo $this->Form->input('precio', 
                            array('class' => 'form-control validate[required]', 
                                'type' => 'text',
                                'placeholder' => __('Precio'),
                                'data-prompt-position' => "topLeft:150")); ?>
            </div>
            <div class="form-group">
                <?php echo $this->Form->input('cantidad', 
                        array('class' => 'form-control validate[required]',
                            'placeholder' => __('Cantidad'),
                            'data-prompt-position' => "topLeft:150")); 
                ?>
            </div>
            
                       
            <div class="form-group">
                <?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default pull-right')); ?>
            </div>
            
            <?php echo $this->Form->end() ?>

        </div><!-- end col md 12 -->
    </div><!-- end row -->
</div>
<?php 
$this->start( 'script_blocks_from_views' );
?>
<script type="text/javascript">   
    $( document ).ready(function() {
        /*form javascript validation*/
        instanceFormValidateWithAddStyle();
    });
    
</script>
<?php $this->end( 'script_blocks_from_views' );  ?>