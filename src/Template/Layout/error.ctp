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
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <title>
        Page introuvable
    </title>
    <?= $this->Html->meta('favicon.png','/img/favicon.png',['type'=>'icon']) ?>  
    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body style="background: #000;">
     <?= $this->Flash->render() ?>
    <div id="container" style="text-align:center;">
        <?= $this->Html->image('assets/logo/error_logo.png',['width'=>'350px']) ?>
        <div id="content">
            <?= $this->fetch('content') ?>
        </div>
        <div id="footer">
            <?= $this->Html->link(__('Retour'), 'javascript:history.back()',['style'=>'color:#9c38a6;']) ?>
        </div>
    </div>
</body>
</html>
