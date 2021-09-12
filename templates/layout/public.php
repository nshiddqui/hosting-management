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

$yuserverBaseDescription = 'Get cheap hosting with high performance hosting, latest features of cpanel and 24*7 days support';
$yuserverKeywords = (!empty($this->fetch('keywords')) ? $this->fetch('keywords') : 'yuserver,dns,domain,domain name,hosting,free web hosting,domain check,domain registration,free hosting,cheap hosting,website hosting');
$yuserverTitle = ($this->request->getAttribute('here') === '/' ? PORJECT_NAME . ': ' . $yuserverBaseDescription : $this->fetch('title') . ' : ' . PORJECT_NAME);
$yuserverDescription = (!empty($this->fetch('description')) ? $this->fetch('description') : 'Buy Best and cheap Unlimited SSD Web Hosting 2021 at Best Price start at ₹40! Free SSL, SiteLock, cPanel, Website Builder, Softaculous and many more.');
$yuserverImage = $this->Url->build((!empty($this->fetch('image')) ? $this->fetch('image') : '/img/brand/dark.png'), ['fullBase' => true]);

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
    <?= $this->Html->meta('keywords', $yuserverKeywords) ?>
    <?= $this->Html->meta('description', $yuserverDescription) ?>

    <!-- Open Graph data -->
    <?= $this->Html->meta(['property' => 'og:title', 'content' => $yuserverTitle]) ?>
    <?= $this->Html->meta(['property' => 'og:description', 'content' => $yuserverDescription]) ?>
    <?= $this->Html->meta(['property' => 'og:image', 'content' => $yuserverImage]) ?>

    <!-- Fontawesome -->
    <?= $this->Html->css('/vendor/@fortawesome/fontawesome-free/css/all.min') ?>

    <!-- Nucleo icons -->
    <?= $this->Html->css('/vendor/nucleo/css/nucleo') ?>

    <!-- Prism -->
    <?= $this->Html->css('/vendor/prismjs/themes/prism') ?>

    <!-- Front CSS -->
    <?= $this->Html->css('front') ?>

    <!-- Core -->
    <?= $this->Html->script('/vendor/jquery/dist/jquery.min') ?>
    <?= $this->Html->script('/vendor/popper.js/dist/umd/popper.min') ?>
    <?= $this->Html->script('/vendor/bootstrap/dist/js/bootstrap.min') ?>
    <?= $this->Html->script('/vendor/headroom.js/dist/headroom.min') ?>

    <!-- Vendor JS -->
    <?= $this->Html->script('/vendor/onscreen/dist/on-screen.umd.min') ?>
    <?= $this->Html->script('/vendor/waypoints/lib/jquery.waypoints.min') ?>
    <?= $this->Html->script('/vendor/jarallax/dist/jarallax.min') ?>
    <?= $this->Html->script('/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min') ?>

    <!-- Place this tag in your head or just before your close body tag. -->
    <?= $this->Html->script('https://buttons.github.io/buttons.js') ?>

    <!-- Impact JS -->
    <?= $this->Html->script('front') ?>


    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

</head>

<body>
    <?= $this->element('public_layout/navigation') ?>
    <main>
        <div class="preloader bg-soft flex-column justify-content-center align-items-center">
            <div class="loader-element">
                <?= $this->Html->image('brand/dark-loader.svg', ['height' => '40', 'alt' => 'Impact logo']) ?>
                <?= $this->Html->image('brand/dark.svg', ['height' => '40', 'alt' => 'Impact logo']) ?>
            </div>
        </div>

        <?= $this->fetch('content') ?>
        <?= $this->element('public_layout/footer') ?>
    </main>

</body>

</html>