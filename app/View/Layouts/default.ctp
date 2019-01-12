<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashboard One | Notika - Notika Admin Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <?php
     	echo $this->Html->meta('icon')
    ?>
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <?php
		echo $this->Html->css('bootstrap.min');
	?>
    <!-- Bootstrap CSS
		============================================ -->
    <?php
		echo $this->Html->css('font-awesome.min');
	?>
    <!-- owl.carousel CSS
		============================================ -->

    <?php
		echo $this->Html->css('owl.carousel');
		echo $this->Html->css('owl.theme');
		echo $this->Html->css('owl.transitions');
	?>
    <!-- meanmenu CSS
		============================================ -->

    <?php
		echo $this->Html->css('meanmenu/meanmenu.min');
	?>
    <!-- animate CSS
		============================================ -->
    
    <?php
		echo $this->Html->css('animate');
	?>
    <!-- normalize CSS
		============================================ -->

    <?php
		echo $this->Html->css('normalize');
	?>
    <!-- mCustomScrollbar CSS
		============================================ -->
    
     <?php
		echo $this->Html->css('scrollbar/jquery.mCustomScrollbar.min');
	?>

    <!-- jvectormap CSS
		============================================ -->

    <?php
		echo $this->Html->css('jvectormap/jquery-jvectormap-2.0.3');
	?>
    <!-- notika icon CSS
		============================================ -->
    
    <?php
		echo $this->Html->css('notika-custom-icon');
	?>
    <!-- wave CSS
		============================================ -->
    <?php
		echo $this->Html->css('wave/waves.min');
        echo $this->Html->css('wave/button');
	?>
    <!-- wave CSS
        ============================================ -->
    <?php
        echo $this->Html->css('datapicker/datepicker3');
    ?>
    <!-- dialog CSS
        ============================================ -->
    <?php
        echo $this->Html->css('dialog/sweetalert2.min');
        echo $this->Html->css('dialog/dialog');
    ?>
    <!-- main CSS
		============================================ -->
    <?php
		echo $this->Html->css('main');
	?>
    <!-- style CSS
		============================================ -->
    <?php
		echo $this->Html->css('style');
        echo $this->Html->css('jquery.dataTables.min');
	?>

    <!-- responsive CSS
		============================================ -->
    <?php
		echo $this->Html->css('responsive');
	?>
    <!-- modernizr JS
		============================================ -->
    <?php echo $this->Html->script('vendor/modernizr-2.8.3.min'); ?>
    <?php echo $this->Html->script('vendor/jquery-1.12.4.min'); ?>
    <?php
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');		
	?>
</head>
<body>


    <?php echo $this->Element('layouts/header'); ?>
	
		<div id="content">

                <div class="text-center">
                    <h2><?php echo $this->Flash->render(); ?> </h2>
                </div>

		        <?php echo $this->fetch('content'); ?>
		</div>
		
    <?php echo $this->Element('layouts/footer'); ?>


    <!-- jquery
		============================================ -->
    
    <!-- bootstrap JS
		============================================ -->
    <?php echo $this->Html->script('bootstrap.min'); ?>
    <!-- wow JS
		============================================ -->
    <?php echo $this->Html->script('wow.min'); ?>
    <!-- price-slider JS
		============================================ -->
    <?php echo $this->Html->script('jquery-price-slider'); ?>
    <!-- owl.carousel JS
		============================================ -->
    <?php echo $this->Html->script('owl.carousel.min'); ?>
    <!-- scrollUp JS
		============================================ -->
    <?php echo $this->Html->script('jquery.scrollUp.min'); ?>
    <!-- meanmenu JS
		============================================ -->
    <?php echo $this->Html->script('meanmenu/jquery.meanmenu'); ?>
    <!-- counterup JS
		============================================ -->
	<?php 

	echo $this->Html->script('counterup/jquery.counterup.min'); 
	echo $this->Html->script('counterup/waypoints.min'); 
	echo $this->Html->script('counterup/counterup-active'); 
	?>
    <!-- mCustomScrollbar JS
		============================================ -->
	<?php echo $this->Html->script('scrollbar/jquery.mCustomScrollbar.concat.min'); ?>
    <!-- jvectormap JS
		============================================ -->
    <?php 
    echo $this->Html->script('jvectormap/jquery-jvectormap-2.0.2.min'); 
    echo $this->Html->script('jvectormap/jquery-jvectormap-world-mill-en'); 
    echo $this->Html->script('jvectormap/jvectormap-active'); 
    ?>
    <!-- sparkline JS
		============================================ -->
    <?php 
    echo $this->Html->script('sparkline/jquery.sparkline.min'); 
    echo $this->Html->script('sparkline/sparkline-active'); 
    ?>
    <!-- sparkline JS
		============================================ -->
    <?php 
    echo $this->Html->script('flot/jquery.flot'); 
    echo $this->Html->script('flot/jquery.flot.resize'); 
    echo $this->Html->script('flot/curvedLines'); 
    echo $this->Html->script('flot/flot-active'); 
    ?>
    <!-- knob JS
		============================================ -->
    <?php 
    echo $this->Html->script('knob/jquery.knob'); 
    echo $this->Html->script('knob/jquery.appear'); 
    echo $this->Html->script('knob/knob-active'); 
    ?>
    <!--  wave JS
		============================================ -->
    <?php 
    echo $this->Html->script('wave/waves.min'); 
    echo $this->Html->script('wave/wave-active'); 
    echo $this->Html->script('wave/button'); 
    ?>
      <!-- icheck JS
        ============================================ -->
    <?php 
    echo $this->Html->script('icheck/icheck.min'); 
    echo $this->Html->script('icheck/icheck-active'); 
    ?>
    <!--  Chat JS
        ============================================ -->
    <?php 
    echo $this->Html->script('dialog/sweetalert2.min'); 
    echo $this->Html->script('dialog/dialog-active'); 
    ?>

    <!--  Chat JS
        ============================================ -->
    <?php 
    echo $this->Html->script('datapicker/bootstrap-datepicker'); 
    echo $this->Html->script('datapicker/datepicker-active'); 
    ?>

    <!--  todo JS
		============================================ -->
    <?php echo $this->Html->script('todo/jquery.todo'); ?>
    <!-- plugins JS
		============================================ -->
    <?php echo $this->Html->script('plugins'); ?>
	<!--  Chat JS
		============================================ -->
    <?php 
    echo $this->Html->script('chat/moment.min'); 
    echo $this->Html->script('chat/jquery.chat'); 
    ?>
    <!-- Data Table JS
        ============================================ -->
    <?php 
    echo $this->Html->script('data-table/jquery.dataTables.min'); 
    echo $this->Html->script('data-table/data-table-act'); 
    ?>
    <!-- main JS
		============================================ -->
    <?php echo $this->Html->script('main'); ?>
	<!-- tawk chat JS
		============================================ -->
    <?php echo $this->Html->script('tawk-chat'); ?>


    <?php echo $this->element('sql_dump'); ?>
    
</body>

</html>
