<div class="tags index">
      
    <div class="row">
        <div class="col-sm-12">
            <div class="page-header">
                <h1><?php echo __('Productos'); ?></h1>
            </div>
        </div><!-- end col md 12 -->
    </div><!-- end row -->

    <div class="row">
        <div class="col-sm-12">
            <table cellpadding="0" cellspacing="0" class="table table-hover">
                <thead>
                    <tr>
                        <th><?php echo $this->Paginator->sort('id'); ?></th>
                        <th><?php echo $this->Paginator->sort('nombre'); ?></th>
                        <th><?php echo $this->Paginator->sort('cantidad'); ?></th>
                        <th><?php echo $this->Paginator->sort('precio'); ?></th>
                        <th><?php echo $this->Paginator->sort('descripcion'); ?></th>
                        <th class="actions"></th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($productos as $producto): ?>
                        <tr>
                            <td><?php echo $producto['Producto']['id']; ?>&nbsp;</td>
                            <td><?php echo $producto['Producto']['nombre']; ?>&nbsp;</td>
                            
                            <td><?php echo $producto['Producto']['cantidad']; ?>&nbsp;</td>
                            
                            <td><?php echo $producto['Producto']['precio']; ?>&nbsp;</td>
                            <td><?php echo $producto['Producto']['descripcion']; ?>&nbsp;</td>
                            <td>
                                <?php
                                /*$this->ActionMenu->addAction(__('View'), array('action' => 'view', $producto['Producto']['id']), 'search');
                                $this->ActionMenu->addAction(__('Edit'), array('action' => 'edit', $producto['Producto']['id']), 'edit');
                                $this->ActionMenu->showMenu();*/
                                ?> 
                                <!-- Single button -->

                            </td>
                            
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <p>
                <small><?php echo $this->Paginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}'))); ?></small>
            </p>

            <?php
            $params = $this->Paginator->params();
            if ($params['pageCount'] > 1) {
                ?>
                <ul class="pagination pagination-sm pull-right">
                    <?php
                    echo $this->Paginator->prev('&larr; Previous', array('class' => 'prev', 'tag' => 'li', 'escape' => false), '<a onclick="return false;">&larr; Previous</a>', array('class' => 'prev disabled', 'tag' => 'li', 'escape' => false));
                    echo $this->Paginator->numbers(array('separator' => '', 'tag' => 'li', 'currentClass' => 'active', 'currentTag' => 'a'));
                    echo $this->Paginator->next('Next &rarr;', array('class' => 'next', 'tag' => 'li', 'escape' => false), '<a onclick="return false;">Next &rarr;</a>', array('class' => 'next disabled', 'tag' => 'li', 'escape' => false));
                    ?>
                </ul>
<?php } ?>

        </div> <!-- end col md 9 -->
    </div><!-- end row -->


</div><!-- end containing of content -->
<script type="text/javascript" src="js/bootstrap.js"></script>