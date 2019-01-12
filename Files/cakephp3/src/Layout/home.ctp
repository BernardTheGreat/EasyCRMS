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

    
    
     <?= $this->Html->css('font-awesome.min.css'); ?>
     <?= $this->Html->css('themify-icons.css'); ?>  
     <?= $this->Html->css('bootstrap-grid.min.css'); ?>
     <?= $this->Html->css('magnific-popup.min.css'); ?>
     <?= $this->Html->css('owl.carousel.css'); ?>
     <?= $this->Html->css('main.css'); ?>
    

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

</head>
<body>
    <div class="page-wrap">
       <!-- header -->
            <header class="header">
                <div class="container">
                    <div class="header__logo"><a href="/">PELEXINC</a></div>
                    
                    
                    <!-- consult-nav -->
                    <nav class="consult-nav">
                        
                        <!-- consult-menu -->
                        <ul class="consult-menu">
                            <li><a href="/">Home</a>
                            </li>
                            <!--
                            <li class="menu-item-has-children"><a href="#">page</a>
                                <ul class="sub-menu">
                                    <li><a href="comming-soon.html">Comming Soon</a>
                                    </li>
                                    <li><a href="404.html">404</a>
                                    </li>
                                    <li><a href="typography.html">Typography</a>
                                    </li>
                                </ul>
                            </li>
                          -->
                            <li class="menu-item-has-children"><a href="project.html">Services</a>
                                <ul class="sub-menu">
                                    <li><a href="/tracker">Tracker</a></li>
                                    <li><a href="/clients/login">Booking</a></li>
                                </ul>
                            </li>
                            <li><a href="/">Contact Us</a>
                            
                        </ul><!-- consult-menu -->
                        
                        <div class="navbar-toggle"><span></span><span></span><span></span></div>
                    </nav><!-- End / consult-nav -->
                    
                </div>
            </header><!-- End / header -->
                <?= $this->Flash->render() ?>
                <?= $this->fetch('content') ?>
  

   
        
    <footer>
          <div class="footer__main">
                    <div class="row row-eq-height">
                        <div class="col-8 col-sm-7 col-md-9 col-lg-3 ">
                            <div class="footer__item">PELEXINC</a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut laoreet ut lacus a tincidunt.</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 offset-0 offset-sm-0 offset-md-0 offset-lg-0 offset-xl-1 ">
                            <div class="footer__item">
                                    
                                    <!-- widget-text__widget -->
                                    <section class="widget-text__widget widget">
                                        <div class="widget-text__content">
                                            <ul>
                                                <li><a href="#">Term of Services </a></li>
                                                <li><a href="#">Privacy Policy </a></li>
                                                <li><a href="#">Sitemap </a></li>
                                                <li><a href="#">Help</a></li>
                                            </ul>
                                        </div>
                                    </section><!-- End / widget-text__widget -->
                                    
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-2 col-xl-2 ">
                            <div class="footer__item">
                                    
                                    <!-- widget-text__widget -->
                                    <section class="widget-text__widget widget">
                                        <div class="widget-text__content">
                                            <ul>
                                                <li><a href="#">How It Work </a></li>
                                                <li><a href="#">Carrier </a></li>
                                                <li><a href="#">Pricing </a></li>
                                                <li><a href="#">Support</a></li>
                                            </ul>
                                        </div>
                                    </section><!-- End / widget-text__widget -->
                                    
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-2 col-xl-2 ">
                            <div class="footer__item">
                                   Powered by: SoftBuddy 
                                    
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-2 col-xl-2  consult_backToTop">
                            <div class="footer__item"><a href="#" id="back-to-top"> <i class="fa fa-angle-up" aria-hidden="true"> </i><span>Back To Top</span></a></div>
                        </div>
                    </div>
                </div>
         <div class="footer__copyright"><?php echo date('Y'); ?> &copy; Copyright Pelican Express, Inc. All rights Reserved.</div>
        <?= $this->Html->script('jquery.min.js'); ?>
        <?= $this->Html->script('imagesloaded.pkgd.js'); ?>
        <?= $this->Html->script('isotope.pkgd.js'); ?>
        <?= $this->Html->script('jquery.countdown.min.js'); ?>
        <?= $this->Html->script('jquery.countTo.min.js'); ?>
        <?= $this->Html->script('jquery.countup.min.js'); ?>
        <?= $this->Html->script('jquery.matchHeight.min.js'); ?>
        <?= $this->Html->script('jquery.mb.YTPlayer.min.js'); ?>
        <?= $this->Html->script('jquery.magnific-popup.min.js'); ?>
        <?= $this->Html->script('masonry.pkgd.js'); ?>
        <?= $this->Html->script('owl.carousel.js'); ?>
        <?= $this->Html->script('jquery.waypoints.min.js'); ?>
        <?= $this->Html->script('menu.min.js'); ?>
        <?= $this->Html->script('SmoothScroll.min.js'); ?>
        <?= $this->Html->script('main.js'); ?>
        
    </footer>
    </div>
</body>
</html>
