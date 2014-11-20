<?php
$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
    <head>
        <?php echo $this->Html->charset(); ?>
        <title>
            <?php echo "PediTuTurno - " . $this->fetch('title'); ?>
        </title>
        <?php
        echo $this->Html->meta('icon');

        echo $this->Html->css('cake.generic');

        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');

        echo $this->Html->css('bootstrap.min');
        echo $this->Html->script('bootstrap.min');
        ?>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script type="text/javascript" src="/js/bootstrap.js"></script>
    </head>


    <body style="margin: auto; background-color: '#4845F5';">

        <?php echo $this->Session->flash(); ?>
        <div id="container">
            <div class="center-block" style="width: 931px;"><br />
                <?php echo $this->fetch('content'); ?>
            </div>
        </div>
        
        <div class="center-block" style="width: 931px; background-color: #467489;"><br></div>
        <div id="footer" class="center-block" style="width: 931px; background-color: #245269;">
            <div >
                <div><br><br>
                    PIE DE PAGINA!<br><br><br><br><br><br><br><br>
                     <!--<img src="pedituturno.png">-->
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php echo $this->element('sql_dump'); ?>
