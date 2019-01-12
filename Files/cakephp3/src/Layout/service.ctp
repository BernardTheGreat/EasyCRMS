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
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    
    
     <?= $this->Html->css('assets/bootstrap.min.css'); ?>
     <?= $this->Html->css('assets/font-awesome.min.css'); ?>  
     <?= $this->Html->css('assets/themify-icons.css'); ?>
     <?= $this->Html->css('assets/metisMenu.css'); ?>
     <?= $this->Html->css('assets/owl.carousel.min.css'); ?>
     <?= $this->Html->css('assets/slicknav.min.css'); ?>

     <?= $this->Html->css('assets/typography.css'); ?>
     <?= $this->Html->css('assets/default-css.css'); ?>  
     <?= $this->Html->css('assets/styles.css'); ?>
     <?= $this->Html->css('assets/responsive.css'); ?>
   
    <?= $this->Html->script('assets/modernizr-2.8.3.min.js'); ?>
    <!-- modernizr css -->

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

</head>
<body>

                <?= $this->Flash->render() ?>
                <?= $this->fetch('content') ?>
  

   
        
    <footer>
         
        <?= $this->Html->script('assets/jquery-2.2.4.min.js'); ?>
        <?= $this->Html->script('assets/popper.min.js'); ?>
        <?= $this->Html->script('assets/bootstrap.min.js'); ?>
        <?= $this->Html->script('assets/owl.carousel.min.js'); ?>
        <?= $this->Html->script('assets/metisMenu.min.js'); ?>
        <?= $this->Html->script('assets/jquery.slimscroll.min.js'); ?>
        <?= $this->Html->script('assets/jquery.slicknav.min.js'); ?>
        <?= $this->Html->script('assets/plugins.js'); ?>
        <?= $this->Html->script('assets/scripts.js'); ?>
    </footer>
    </div>
</body>
</html>
