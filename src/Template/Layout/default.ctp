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

$cakeDescription = 'Switchography: Wedding and Portrait Photographer - ';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Premium Wedding & Portrait Photographer." />  
    <meta name="keywords" content="photos, photo, photography, mariage, prise de vue, angle, évènement, évènements, appareil photo, flash">

    <title>
        <?= $cakeDescription ?><?= $this->fetch('title') ?>

    </title>
    <?= $this->Html->meta('favicon.png','/img/favicon.png',['type'=>'icon']) ?>
    <?= $this->fetch('meta') ?>
    
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script:400,700|Raleway:400,500,600,600i|Roboto+Slab:400,700|Roboto:500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <?= $this->Html->css('main') ?>
    <?= $this->Html->css('../node_modules/bulma/custom-bulma') ?>

    <?= $this->fetch('css') ?>
</head>
<body>

        <!-- Navbar -->
        <?= $this->element('navbar') ?>
        <!-- Content -->
        <?= $this->fetch('content') ?>   
        <!-- Footer -->
        <?= $this->element('footer') ?>
        <?= $this->fetch('script') ?>

</body>
</html>
