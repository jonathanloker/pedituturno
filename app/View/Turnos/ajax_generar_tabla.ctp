<div class="col-md-12 panel panel-primary">
    <table class="table table-condensed">
        <thead>
            <tr>
                <th>Hora</th>
                <th>Domingo</th>
                <th>Lunes</th>
                <th>Martes</th>
                <th>Miercoles</th>
                <th>Jueves</th>
                <th>Viernes</th>
                <th>Sábado</th>
            </tr>
        </thead>
        <?php for($i=0;$i<12;$i++): ?>
        <tr>
            <td class="success"><?php echo $i.":00"; ?></td>
            <td class="info"><a href="" data-toggle="modal" data-target="#myModal"><span class="label label-danger">Ocupado</span></a></td>
            <td class="info"><a href=""><span class="label label-success">Libre</span></a></td>
            <td class="info"><a href=""><span class="label label-success">Libre</span></a></td>
            <td class="info"><a href=""><span class="label label-success">Libre</span></a></td>
            <td class="info"><a href=""><span class="label label-success">Libre</span></a></td>
            <td class="info"><a href=""><span class="label label-success">Libre</span></a></td>
            <td class="info"><a href=""><span class="label label-danger">Ocupado</span></a></td>
        </tr>
        <?php endfor; ?>
    </table>
</div>
<?php echo $this->element("modal_confirmarTurno"); ?>


