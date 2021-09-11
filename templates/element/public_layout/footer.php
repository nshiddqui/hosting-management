<?php $this->Form->setTemplates(['inputContainer' => '{{content}}']); ?>
<section class="section section-lg pb-5 bg-soft">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="mb-4">Faster growth starts with Yuserver</h2>
                <p class="lead mb-5">Join over <span class="font-weight-bolder">30,000+</span> users</p>
                <?= $this->Html->link('<i class="fab fa-cpanel"></i>', 'https://cpanel.net/', ['escape' => false, 'class' => 'icon icon-lg text-gray mr-3', 'target' => '_BLANK']) ?>
                <?= $this->Html->link('<i class="fab fa-php"></i>', 'https://www.php.net/', ['escape' => false, 'class' => 'icon icon-lg text-gray mr-3', 'target' => '_BLANK']) ?>
                <?= $this->Html->link('<i class="fab fa-python"></i>', 'https://www.python.org/', ['escape' => false, 'class' => 'icon icon-lg text-gray mr-3', 'target' => '_BLANK']) ?>
                <?= $this->Html->link('<i class="fab fa-node"></i>', 'https://nodejs.org/', ['escape' => false, 'class' => 'icon icon-lg text-gray mr-3', 'target' => '_BLANK']) ?>
                <?= $this->Html->link('<i class="fab fa-github"></i>', 'https://github.com/', ['escape' => false, 'class' => 'icon icon-lg text-gray mr-3', 'target' => '_BLANK']) ?>
                <?= $this->Html->link('<i class="fab fa-wordpress"></i>', 'https://wordpress.com/', ['escape' => false, 'class' => 'icon icon-lg text-gray mr-3', 'target' => '_BLANK']) ?>
            </div>
            <div class="col-12 text-center">
                <!-- Button Modal -->
                <?= $this->Html->link('<span class="mr-2"><i class="fas fa-hand-pointer"></i></span> Request a demo', 'contact', ['escape' => false, 'class' => 'btn btn-secondary animate-up-2']) ?>
            </div>
        </div>
    </div>
</section>

<footer class="footer section pt-6 pt-md-8 pt-lg-10 pb-3 bg-primary text-white overflow-hidden">
    <div class="pattern pattern-soft top"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mb-4 mb-lg-0">
                <a class="footer-brand mr-lg-5 d-flex" href="<?= $this->Url->build('/') ?>">
                    <?= $this->Html->image('brand/light.svg', ['height' => '35', 'class' => 'mr-3', 'alt' => 'Footer logo']) ?>
                </a>
                <p class="my-4">Create, prototype, collaborate and turn your ideas into incredible products with the definitive platform for digital design.</p>
            </div>
            <div class="col-6 col-sm-3 col-lg-2 mb-4 mb-lg-0">
                <h6>QUICK ACCESS</h6>
                <ul class="links-vertical">
                    <li><?= $this->Html->link('About', '/about', ['target' => '_BLANK']) ?></li>
                    <li><?= $this->Html->link('Contact Us', '/contact', ['target' => '_BLANK']) ?></li>
                    <li><?= $this->Html->link('FAQ\'s', '/faqs', ['target' => '_BLANK']) ?></li>
                </ul>
            </div>
            <div class="col-6 col-sm-3 col-lg-2 mb-4 mb-lg-0">
                <h6>QUICK LINKS</h6>
                <ul class="links-vertical">
                    <li><?= $this->Html->link('Privacy Policy', '/privacy-policy', ['target' => '_BLANK']) ?></li>
                    <li><?= $this->Html->link('Refund Policy', '/refund-policy', ['target' => '_BLANK']) ?></li>
                    <li><?= $this->Html->link('Terms of Use', '/terms-of-use', ['target' => '_BLANK']) ?></li>
                    <li><?= $this->Html->link('Sitemap', '/sitemap.xml', ['target' => '_BLANK']) ?></li>
                </ul>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
                <h6>Subscribe</h6>
                <p class="font-small">The latest Yuserver news, articles, and resources, sent straight to your inbox every month.</p>
                <?= $this->Form->create(null, ['url' => ['controller' => 'subscribers', 'action' => 'index']]) ?>
                <div class="form-row">
                    <div class="col-8">
                        <?= $this->Form->control('email', ['class' => 'form-control mb-2', 'placeholder' => 'Email Address', 'required' => true, 'label' => false]) ?>
                    </div>
                    <div class="col-4">
                        <?= $this->Form->button('<span>Subscribe</span>', ['escapeTitle' => false, 'class' => 'btn btn-secondary btn-block']) ?>
                    </div>
                </div>
                <?= $this->Form->end() ?>
                <small class="mt-2 form-text">We’ll never share your details. See our <?= $this->Html->link('Privacy Policy', '/privacy-policy', ['class' => 'font-weight-bold text-underline', 'target' => '_BLANK']) ?></small>
            </div>
        </div>
        <hr class="my-4 my-lg-5">
        <div class="row">
            <div class="col pb-4 mb-md-0">
                <div class="d-flex text-center justify-content-center align-items-center">
                    <p class="font-weight-normal mb-0">© <?= $this->Html->link('Yuserver', '/', ['target' => 'BLANK']) ?> & <?= $this->Html->link('Shelty', 'https://shelty.in/', ['target' => 'BLANK']) ?> <span class="current-year"></span>. All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
    (function() {
        var s1 = document.createElement("script"),
            s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/610ec9ead6e7610a49af17ac/1fcgs9fur';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script>
<!--End of Tawk.to Script-->