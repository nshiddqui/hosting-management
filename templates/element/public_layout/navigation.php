<!-- Google Tag Manager (noscript)
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
<header class="header-global">
    <nav id="navbar-main" class="navbar navbar-main navbar-expand-lg headroom py-lg-3 px-lg-6 navbar-theme-primary <?= $this->fetch('nav_class') ? $this->fetch('nav_class') : 'navbar-dark' ?>">
        <div class="container">
            <a class="navbar-brand @@logo_classes" href="<?= $this->Url->build('/') ?>">
                <?= $this->Html->image('brand/light.svg', ['class' => 'navbar-brand-dark common', 'height' => '35', 'alt' => 'Logo light']) ?>
                <?= $this->Html->image('brand/dark.svg', ['class' => 'navbar-brand-light common', 'height' => '35', 'alt' => 'Logo dark']) ?>
            </a>
            <div class="navbar-collapse collapse" id="navbar_global">
                <div class="navbar-collapse-header">
                    <div class="row">
                        <div class="col-6 collapse-brand">
                            <?= $this->Html->image('brand/dark.svg', ['url' => '/', 'height' => '35', 'alt' => 'Logo Impact']) ?>
                        </div>
                        <div class="col-6 collapse-close">
                            <?= $this->Html->link('', '#navbar_global', ['role' => 'button', 'class' => 'fas fa-times', 'data-toggle' => 'collapse', 'data-target' => '#navbar_global', 'aria-controls' => 'navbar_global', 'aria-expanded' => 'false', 'aria-label' => 'Toggle navigation']) ?>
                        </div>
                    </div>
                </div>
                <ul class="navbar-nav navbar-nav-hover justify-content-center">
                    <li class="nav-item">
                        <?= $this->Html->link('Overview', '/', ['class' => 'nav-link']) ?>
                    </li>
                    <li class="nav-item">
                        <?= $this->Html->link('Web Hosting', '/web-hosting', ['class' => 'nav-link']) ?>
                    </li>
                    <li class="nav-item">
                        <?= $this->Html->link('About', '/about', ['class' => 'nav-link']) ?>
                    </li>
                    <li class="nav-item">
                        <?= $this->Html->link('Contact', '/contact', ['class' => 'nav-link']) ?>
                    </li>
                    <li class="nav-item">
                        <?= $this->Html->link('FAQ\'s', '/faqs', ['class' => 'nav-link']) ?>
                    </li>
                </ul>
            </div>
            <div class="d-none d-lg-block @@cta_button_classes">
                <?= $this->Html->link('Clinet Area', '/login', ['class' => 'btn btn-md btn-docs btn-outline-white animate-up-2 mr-3']) ?>
                <?= $this->Html->link('<i class="fas fa-phone-alt mr-2"></i> 7210482353', 'tel:+917210482353', ['escape' => false, 'class' => 'btn btn-md btn-secondary animate-up-2']) ?>
            </div>
            <div class="d-flex d-lg-none align-items-center">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            </div>
        </div>
    </nav>
</header>