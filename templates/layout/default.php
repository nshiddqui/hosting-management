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
 * @var \App\View\AppView $this
 */

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $this->fetch('title') ?> : <?= PORJECT_NAME ?></title>
    <?= $this->Html->meta('icon') ?>

    <!-- Canonical SEO -->
    <link rel="canonical" href="<?= $this->Url->build(null, ['fullBase' => true]) ?>" />

    <!--  Social tags      -->
    <meta name="keywords" content="impact design system, design system, login, form, table, tables, calendar, card, cards, navbar, modal, icons, icons, map, chat, carousel, menu, datepicker, gallery, slider, date, sidebar, social, dropdown, search, tab, nav, footer, date picker, forms, tabs, time, button, select, input, timeline, cart, car, fullcalendar, about us, invoice, account, chat, log in, blog, profile, portfolio, landing page, ecommerce, shop, landing, register, app, contact, one page, sign up, signup, store, bootstrap 4, bootstrap4, dashboard, bootstrap 4 dashboard, bootstrap 4 design, bootstrap 4 system, bootstrap 4, bootstrap 4 uit kit, bootstrap 4 kit, impact, impact ui kit, creative tim, html kit, html css template, web template, bootstrap, bootstrap 4, css3 template, frontend, responsive bootstrap template, bootstrap ui kit, responsive ui kit, impact dashboard">
    <meta name="description" content="Kick-Start Your Development With An Awesome Design System carefully designed for your online business showcase. It comes as a complete solution, with front pages and dashboard pages included.">

    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="Impact Design System by Creative Tim">
    <meta itemprop="description" content="Kick-Start Your Development With An Awesome Design System carefully designed for your online business showcase. It comes as a complete solution, with front pages and dashboard pages included.">

    <meta itemprop="image" content="https://s3.amazonaws.com/creativetim_bucket/products/296/original/opt_impact_thumbnail.jpg">

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="product">
    <meta name="twitter:site" content="@creativetim">
    <meta name="twitter:title" content="Impact Design System by Creative Tim">

    <meta name="twitter:description" content="Kick-Start Your Development With An Awesome Design System carefully designed for your online business showcase. It comes as a complete solution, with front pages and dashboard pages included.">
    <meta name="twitter:creator" content="@creativetim">
    <meta name="twitter:image" content="https://s3.amazonaws.com/creativetim_bucket/products/296/original/opt_impact_thumbnail.jpg">


    <!-- Open Graph data -->
    <meta property="fb:app_id" content="655968634437471">
    <meta property="og:title" content="Impact Design System by Creative Tim" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="https://demos.creative-tim.com/impact-design-system/" />
    <meta property="og:image" content="https://s3.amazonaws.com/creativetim_bucket/products/296/original/opt_impact_thumbnail.jpg" />
    <meta property="og:description" content="Kick-Start Your Development With An Awesome Design System carefully designed for your online business showcase. It comes as a complete solution, with front pages and dashboard pages included." />
    <meta property="og:site_name" content="Creative Tim" />

    <!-- Favicon -->
    <link rel="icon" href="/img/brand/favicon.png" type="image/png">
    <!-- Fonts -->
    <?= $this->Html->css('https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700') ?>

    <!-- Icons -->
    <?= $this->Html->css('/vendor/nucleo/css/nucleo') ?>
    <?= $this->Html->css('/vendor/@fortawesome/fontawesome-free/css/all.min') ?>

    <!-- Argon CSS -->
    <?= $this->Html->css('dashboard') ?>

    <!-- Argon Scripts -->
    <!-- Core -->
    <?= $this->Html->script('/vendor/jquery/dist/jquery.min') ?>
    <?= $this->Html->script('/vendor/bootstrap/dist/js/bootstrap.bundle.min') ?>
    <?= $this->Html->script('/vendor/js-cookie/js.cookie') ?>
    <?= $this->Html->script('/vendor/jquery.scrollbar/jquery.scrollbar.min') ?>
    <?= $this->Html->script('/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min') ?>
    <!-- Optional JS -->
    <?= $this->Html->script('/vendor/chart.js/dist/Chart.min') ?>
    <?= $this->Html->script('/vendor/chart.js/dist/Chart.extension') ?>
    <!-- Argon JS -->
    <?= $this->Html->script('dashboard') ?>


    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

</head>

<body>
    <?= $this->element('default_layout/navigation') ?>
    <!-- Main content -->
    <div class="main-content" id="panel">
        <?= $this->element('default_layout/header') ?>
        <!-- Page content -->
        <div class="container-fluid mt--6">
            <div class="row">
                <?= $this->fetch('content') ?>
            </div>
            <?= $this->element('default_layout/footer') ?>
        </div>
    </div>
</body>

</html>