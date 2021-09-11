<!-- Footer -->
<footer class="py-5" id="footer-main">
    <div class="container">
        <div class="row align-items-center justify-content-xl-between">
            <div class="col-xl-6">
                <div class="copyright text-center text-xl-left text-muted">
                    &copy; <?= $this->Html->link('Yuserver', '/', ['target' => 'BLANK']) ?> & <?= $this->Html->link('Shelty', 'https://shelty.in/', ['target' => 'BLANK']) ?> <span class="current-year"></span>. All rights reserved.
                </div>
            </div>
            <div class="col-xl-6">
                <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                    <li class="nav-item"><?= $this->Html->link('About', '/about', ['target' => '_BLANK', 'class' => 'nav-link']) ?></li>
                    <li class="nav-item"><?= $this->Html->link('Contact Us', '/contact', ['target' => '_BLANK', 'class' => 'nav-link']) ?></li>
                    <li class="nav-item"><?= $this->Html->link('FAQ\'s', '/faqs', ['target' => '_BLANK', 'class' => 'nav-link']) ?></li>
                </ul>
            </div>
        </div>
    </div>
</footer>