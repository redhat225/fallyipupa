<!DOCTYPE html>
<html>
<head>  
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fally Ipupa World - Site Web Officiel</title>
    <meta name="description" content="Tout savoir sur Fally Ipupa - Biographie - Images - Musique - Event - Tournées - Fondation - être alerté en temps réels des dernières actualités sur Fally Ipupa - Le roi de la Tokooos Music" />  
    <meta name="keywords" content="Fally Ipupa, music, tokos music, artist, singer, chanteur, chanson, musique, congo, kinshasa, koffi olomidé, papa wemba, tour, hustler, dicaprio, la merveille, eloko oyo, fally ipupa eloko oyo, fally ipupa mp3">
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
      <?= $this->Html->script('../bower_components/howler.js/dist/howler.min') ?>
</head>
<body  ng-app="fally-website-app" ng-controller="MainCtrl as mainctrl">
      <!-- Flash render -->
      <?= $this->Flash->render() ?> 
      <!-- Navbar -->
      <?= $this->element('navbar') ?>
      <!-- Views -->
      <?= $this->fetch('content') ?>
      <!-- Footer -->
      <?= $this->element('footer') ?>
      <!-- Angular App -->
      <?= $this->Html->script('Red/app') ?>
      <?= $this->Html->script('Red/controllers') ?>
      <?= $this->Html->script('Red/services') ?>
      <?= $this->Html->script('Red/directives') ?>
      <!-- Additional Dependencies -->
      <?= $this->Html->script('main') ?>
      <?= $this->fetch('script') ?>
</body>
</html>
