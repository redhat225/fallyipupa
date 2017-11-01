<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'Fally Ipupa Official: Welcome';
?>
<!DOCTYPE html>
<html>
<head>
    <!-- Google Tag Manager Area -->
  
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>
    </title>
    <?= $this->Html->meta('favicon.png','/img/favicon.png',['type'=>'icon']) ?>
    
    <?= $this->fetch('meta') ?>
    <!-- Third Party dependencies -->
    <?= $this->Html->css('../bower_components/materialize/dist/css/materialize') ?>
    <!-- Custom Css goes here -->
    <?= $this->Html->css('main') ?>
    <?= $this->Html->css('pace') ?>
    
    <?= $this->Html->css('ionicons-2.0.1/css/ionicons.min') ?>
    <?= $this->Html->css('../bower_components/hover/css/hover-min') ?>
    <?= $this->Html->css('../bower_components/magic/magic.min') ?>
    <?= $this->Html->css('../js/slick-1.6.0/slick/slick') ?>
    <?= $this->Html->css('../js/slick-1.6.0/slick/slick-theme') ?>
    <?= $this->Html->css('../js/Justified-Gallery-master/dist/css/justifiedGallery.min') ?>
    <?= $this->Html->css('../js/strip-1.6.4/dist/css/strip') ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cssgram/0.1.10/cssgram.min.css">

    <?= $this->fetch('css') ?>
      <!-- Scripts -->
      <?= $this->Html->script('jquery.min') ?>
      <?= $this->Html->script('pace') ?>
      <?= $this->Html->script('../bower_components/angular/angular.min') ?>
      <?= $this->Html->script('../bower_components/materialize/dist/js/materialize.min') ?>
      <?= $this->Html->script('../bower_components/angular/angular-materialize.min') ?>
      <?= $this->Html->script('../bower_components/angular/angular-ui-router.min') ?>
      <?= $this->Html->script('slick-1.6.0/slick/slick.min') ?>
      <?= $this->Html->script('Justified-Gallery-master/dist/js/jquery.justifiedGallery.min') ?>
      <?= $this->Html->script('strip-1.6.4/dist/js/strip.pkgd') ?>
      <?= $this->Html->script('../node_modules/parallax-js/dist/parallax.min') ?>
      <?= $this->Html->script('../bower_components/howler.js/dist/howler.min') ?>

    <base href="/">
</head>
<body  ng-app="fally-website-app" ng-controller="MainCtrl as mainctrl" class="{{$root.on_loading_attribute}} ">

     <!-- Flash render -->
     <?= $this->Flash->render() ?>
    <!-- Preloader -->
    <div class="row center" ng-show="$root.on_loading">
         <div class="container">
            <div class="container">
               <div class="container">
                 <div class="container">
                    <div class="container">
                          <?= $this->Html->image('assets/logo/website_logo.png',['class'=>'front_logo_preloader_position front_logo_preloader_width']) ?>
                          <button class="btn btn-primary white-text bold mg_prim_background none-border mg-chub hide-on-large-only mg-size-30" style="width:100%">OFFICIAL</button>

                          <button class="btn btn-primary white-text bold mg_prim_background none-border  hide-on-med-and-down mg-size-30 mg-chub" style="width:120%">OFFICIAL</button>
                    </div>
                 </div>
               </div>
            </div>
         </div>
    </div>
     <!-- Ui-Views -->
     <div ng-hide="$root.on_loading" ng-hide="$root.preloader" ui-view="navbar"></div>
     <div ng-hide="$root.on_loading" ng-hide="$root.preloader" ui-view></div>
     <div ng-hide="$root.on_loading" ng-hide="$root.preloader" ui-view="footer"></div> 

          
  </div>
      <!-- Angular App -->
      <?= $this->Html->script('Red/app') ?>
      <?= $this->Html->script('Red/controllers') ?>
      <?= $this->Html->script('Red/services') ?>
      <?= $this->Html->script('Red/directives') ?>
      <!-- Additional Dependencies -->
      <?= $this->fetch('script') ?>
      <script>
        $(document).ready(function(){
          var scene = document.getElementById('scene');
          var parallaxInstance = new Parallax(scene);
        });


        var sound = new Howl({
              src:['https://s3.eu-west-2.amazonaws.com/fallyipupa/jukebox/Fally+Ipupa+-+Posa.mp3'],
              volume:0.5,
              loop:false,
              html5 :true,
              autoplay:true 
            });
      </script>
</body>
</html>
