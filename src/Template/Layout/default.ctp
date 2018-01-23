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
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
        <?= $this->Html->css('providerLogin.css') ?>
        <?= $this->Html->css('skins/_all-skins.css') ?>
        <?php echo $this->Html->css('/main-site/style.css') ?>
        <?php echo $this->Html->css('/main-site/css/responsive.css') ?>
        <?php echo $this->Html->css('/main-site/css/color-changer.css') ?>
        <?php echo $this->Html->css('https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css') ?> 
        <?php echo $this->Html->css('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css') ?>
        <?php echo $this->Html->css('/main-site/css/bootstrap.min.css') ?>
        <?php echo $this->Html->script('https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js') ?>
        <?php echo $this->Html->script('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js') ?> 

        <?= $this->Html->css('base.css') ?>
        <?= $this->Html->css('cake.css') ?>


        <?= $this->fetch('meta') ?>
        <?= $this->fetch('css') ?>
        <?= $this->fetch('script') ?>
    </head>
    <body class="">
        <!--    <nav class="top-bar expanded" data-topbar role="navigation">
                <ul class="title-area large-3 medium-4 columns">
                    <li class="name">
                        <h1><a href=""><?= $this->fetch('title') ?></a></h1>
                    </li>
                </ul>
                <div class="top-bar-section">
                    <ul class="right">
                        <li><a target="_blank" href="https://book.cakephp.org/3.0/">Documentation</a></li>
                        <li><a target="_blank" href="https://api.cakephp.org/3.0/">API</a></li>
                    </ul>
                </div>
            </nav>-->
        <?= $this->Flash->render() ?>
        <div class="">
            <!--container clearfix-->
            <?= $this->fetch('content') ?>
        </div>

        <!-- ===================== Footer Area End ===================== -->

        <!-- ===================== All jQuery Plugins ===================== -->

        <!-- jQuery (necessary for all JavaScript plugins) -->
        <?php echo $this->Html->script('/main-site/js/jquery-2.2.4.min.js') ?> 
        <?php echo $this->Html->script('/main-site/js/bootstrap.min.js') ?>
        <?php echo $this->Html->script('/main-site/js/jquery.nivoslider.js') ?> 
        <?php echo $this->Html->script('/main-site/js/nivoslider-active.js') ?> 
        <?php echo $this->Html->script('/main-site/js/owl.carousel.min.js') ?> 
        <?php echo $this->Html->script('/main-site/js/ajax-contact.js') ?> 
        <?php echo $this->Html->script('/main-site/js/coundown-timer.js') ?> 
        <?php echo $this->Html->script('/main-site/js/meanmenu.js') ?> 
        <?php echo $this->Html->script('/main-site/js/jquery.magnific-popup.min.js') ?> 
        <?php echo $this->Html->script('/main-site/js/jquery.waypoints.min.js') ?> 
        <?php echo $this->Html->script('/main-site/js/counterup.min.js') ?> 		
        <?php echo $this->Html->script('/main-site/js/jquery.scrollUp.js') ?>
        <?php echo $this->Html->script('/main-site/js/wow.min.js') ?>
        <?php echo $this->Html->script('/main-site/js/custom.js') ?>

        <script>

            $(document).ready(function () {
                $("[placeholder!='']").focus(function () {
                    var pholder = $(this).attr("placeholder");
                    var pholder = $(this).attr("data-placeholder", pholder);
                    $(this).removeAttr("placeholder");
                });

                $("[placeholder!='']").blur(function () {
                    if ($(this).val() == '') {
                        $(this).attr("placeholder", $(this).data("placeholder"));
                    }
                });
            });

        </script>
    </body>
</html>
