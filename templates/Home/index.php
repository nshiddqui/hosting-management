<?php
$this->assign('nav_class', 'navbar-light');
$this->Form->setTemplates(['inputContainer' => '{{content}}']);
?>
<!-- Hero -->
<section class="section-header pb-7 pb-lg-11 bg-soft">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-12 col-md-6 order-2 order-lg-1">
                <?= $this->Html->image('illustrations/hero-illustration.svg') ?>
            </div>
            <div class="col-12 col-md-5 order-1 order-lg-2">
                <h1 class="display-2 mb-3">Website Hosting Services</h1>
                <p class="lead">You might be a business owner searching for a good hosting service, here you can find in cheap cost.</p>
                <div class="mt-4">
                    <?= $this->Form->create(null, ['url' => '/register', 'class' => 'd-flex flex-column mb-5 mb-lg-0']) ?>
                    <?= $this->Form->control('full_name', ['placeholder' => 'Full name', 'required' => true, 'class' => 'form-control', 'label' => false]) ?>
                    <?= $this->Form->control('email', ['placeholder' => 'Your email', 'required' => true, 'class' => 'form-control  my-3', 'label' => false]) ?>
                    <?= $this->Form->button('Create your account', ['class' => 'btn btn-primary']) ?>
                    <div class="form-group form-check mt-3">
                        <input type="checkbox" class="form-check-input" id="term-and-condition" required>
                        <label class="form-check-label form-check-sign-white" for="term-and-condition">I agree to the <?= $this->Html->link('Terms & Conditions', '/terms-of-use', ['target' => '_BLANK']) ?></label>
                    </div>
                    <?= $this->Form->end() ?>
                </div>
            </div>
        </div>
    </div>
    <div class="pattern bottom"></div>
</section>
<section class="section section-lg pt-6">
    <div class="container">
        <div class="row justify-content-center mb-5 mb-md-7">
            <div class="col-12 col-md-8 text-center">
                <h2 class="h1 font-weight-bolder mb-4">Meet our intuitive platform</h2>
                <p class="lead">Self-Service Analytics or ad hoc reporting gives users the ability to develop rapid reports, empowering users to analyze their data.</p>
            </div>
        </div>
        <div class="row row-grid align-items-center mb-5 mb-md-7">
            <div class="col-12 col-md-5">
                <h2 class="font-weight-bolder mb-4">Site Audit</h2>
                <p class="lead">Site Audit crawls all the pages it finds on your website – then provides an overall SEO health score, visualises key data in charts, flags all possible SEO issues and provides recommendations on how to fix them.</p>
                <p class="lead">Have a huge website? Not an issue.</p>
                <a href="<?= $this->Url->build('/about') ?>" class="btn btn-primary mt-3 animate-up-2">
                    Learn More
                    <span class="icon icon-xs ml-2">
                        <i class="fas fa-external-link-alt"></i>
                    </span>
                </a>
            </div>
            <div class="col-12 col-md-6 ml-md-auto">
                <?= $this->Html->image('illustrations/feature-illustration.svg') ?>
            </div>
        </div>
        <div class="row row-grid align-items-center mb-5 mb-md-7">
            <div class="col-12 col-md-5 order-md-2">
                <h2 class="font-weight-bolder mb-4">Rank Tracker</h2>
                <p>We track your desktop and mobile keyword rankings from any location and plot your full ranking history on a handy graph.</p>
                <p>You can set up automated ranking reports to be sent to your email address, so you’ll never forget to check your ranking progress.</p>
                <a href="<?= $this->Url->build('/about') ?>" class="btn btn-primary mt-3 animate-up-2">
                    Rank Tracker Tool
                    <span class="icon icon-xs ml-2">
                        <i class="fas fa-external-link-alt"></i>
                    </span>
                </a>
            </div>
            <div class="col-12 col-md-6 mr-lg-auto">
                <?= $this->Html->image('illustrations/feature-illustration-2.svg') ?>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="card border-light p-4">
                    <div class="card-body">
                        <h2 class="display-2 mb-2">98%</h2>
                        <span>Average satisfaction rating received in the past year</span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="card border-light p-4">
                    <div class="card-body">
                        <h2 class="display-2 mb-2">24/7</h2>
                        <span> Our support team is a quick chat or email away — 24 hours a day</span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="card border-light p-4">
                    <div class="card-body">
                        <h2 class="display-2 mb-2">220k+</h2>
                        <span>Extension installs from the two major mobile app stores</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section section-lg bg-soft">
    <div class="container">
        <div class="row justify-content-center mb-5 mb-md-7">
            <div class="col-12 col-md-8 text-center">
                <h2 class="h1 font-weight-bolder mb-4">SEO solutions for every need</h2>
                <p class="lead">We build best-in-class SEO software for every situation, from our all-in-one SEO platform to tools for local SEO, enterprise SERP analytics, and a powerful API.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4 mb-5">
                <div class="card shadow-soft border-light">
                    <div class="card-header p-0">
                        <?= $this->Html->image('saas-platform-3.jpg', ['class' => 'card-img-top rounded-top', 'alt' => 'image', 'style' => 'filter: blur(5px);']) ?>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title mt-3">Marketing</h3>
                        <p class="card-text">Reveal best strategies from the market and your competitors.</p>
                        <ul class="list-group d-flex justify-content-center mb-4">
                            <li class="list-group-item d-flex pl-0 pb-1">
                                <span class="mr-2"><i class="fas fa-check-circle text-success"></i></span>
                                <div>Real-time distribution</div>
                            </li>
                            <li class="list-group-item d-flex pl-0 pb-1">
                                <span class="mr-2"><i class="fas fa-check-circle text-success"></i></span>
                                <div>Duplicate closure</div>
                            </li>
                            <li class="list-group-item d-flex pl-0 pb-1">
                                <span class="mr-2"><i class="fas fa-check-circle text-success"></i></span>
                                <div>Review management</div>
                            </li>
                        </ul>
                        <?= $this->Html->link('Learn More', '/about', ['class' => 'btn btn-primary']) ?>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 mb-5">
                <div class="card shadow-soft border-light">
                    <div class="card-header p-0">
                        <?= $this->Html->image('saas-platform-4.jpg', ['class' => 'card-img-top rounded-top', 'alt' => 'image', 'style' => 'filter: blur(5px);']) ?>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title mt-3">Research</h3>
                        <p class="card-text">Understand your market, your competitors and your customers.</p>
                        <ul class="list-group d-flex justify-content-center mb-4">
                            <li class="list-group-item d-flex pl-0 pb-1">
                                <span class="mr-2"><i class="fas fa-check-circle text-success"></i></span>
                                <div>Keyword & link research</div>
                            </li>
                            <li class="list-group-item d-flex pl-0 pb-1">
                                <span class="mr-2"><i class="fas fa-check-circle text-success"></i></span>
                                <div>Technical site audits</div>
                            </li>
                            <li class="list-group-item d-flex pl-0 pb-1">
                                <span class="mr-2"><i class="fas fa-check-circle text-success"></i></span>
                                <div>SEO insights & reporting</div>
                            </li>
                        </ul>
                        <?= $this->Html->link('Learn More', '/about', ['class' => 'btn btn-primary']) ?>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 mb-5">
                <div class="card shadow-soft border-light">
                    <div class="card-header p-0">
                        <?= $this->Html->image('saas-platform-5.jpg', ['class' => 'card-img-top rounded-top', 'alt' => 'image', 'style' => 'filter: blur(5px);']) ?>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title mt-3">Sales</h3>
                        <p class="card-text">Enhance performance throughout your sales funnel.</p>
                        <ul class="list-group d-flex justify-content-center mb-4">
                            <li class="list-group-item d-flex pl-0 pb-1">
                                <span class="mr-2"><i class="fas fa-check-circle text-success"></i></span>
                                <div>Daily tracking</div>
                            </li>
                            <li class="list-group-item d-flex pl-0 pb-1">
                                <span class="mr-2"><i class="fas fa-check-circle text-success"></i></span>
                                <div>Local and mobile SERPs</div>
                            </li>
                            <li class="list-group-item d-flex pl-0 pb-1">
                                <span class="mr-2"><i class="fas fa-check-circle text-success"></i></span>
                                <div>Competitor intelligence</div>
                            </li>
                        </ul>
                        <?= $this->Html->link('Learn More', '/about', ['class' => 'btn btn-primary']) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section section-lg bg-primary text-center text-white">
    <div class="container">
        <div class="row justify-content-center mb-4 mb-lg-6">
            <div class="col-12">
                <h1 class="display-3 mb-4 mb-lg-5">The world's most accurate SEO data.</h1>
                <div class="row text-white">
                    <div class="col-12 col-lg-4 px-md-0 mb-4 mb-lg-0">
                        <div class="card-body text-center bg-primary border-right border-default py-4">
                            <!-- Heading -->
                            <h2 class="font-weight-bold">
                                <span class="h1 mr-2">36.5 trillion</span>
                            </h2>
                            <!-- Text -->
                            <span class="h5 font-weight-normal">links indexed by Link Explorer with our tools</span>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 px-md-0 mb-4 mb-lg-0">
                        <div class="card-body text-center bg-primary border-right border-default py-4">
                            <!-- Heading -->
                            <h2 class="font-weight-bold">
                                <span class="h1 mr-2">500 million</span>
                            </h2>
                            <!-- Text -->
                            <span class="h5 font-weight-normal">keyword suggestions in Keyword Explorer</span>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 px-md-0">
                        <div class="card-body text-center bg-primary py-4">
                            <!-- Heading -->
                            <h2 class="font-weight-bold">
                                <span class="h1 mr-2">250,000</span>
                            </h2>
                            <!-- Text -->
                            <span class="h5 font-weight-normal">local business listings optimized with Moz Local</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <?= $this->Form->create(null, ['url' => 'analysis-domain', 'type' => 'get', 'class' => 'form-group mb-4']) ?>
                <div class="d-flex flex-row justify-content-center">
                    <div class="input-group">
                        <?= $this->Form->control('domain', ['label' => false, 'class' => 'form-control form-control-xl border-light', 'type' => 'url', 'placeholder' => 'Enter a domain']) ?>
                        <div class="input-group-prepend">
                            <?= $this->Form->button('Analyze domain', ['class' => 'btn btn-secondary rounded-right']) ?>
                        </div>
                    </div>
                </div>
                <?= $this->Form->end() ?>
                <span class="small">Impact also offers access to our best-in-class proprietary metrics including Keyword Difficulty, Spam Score, Page Authority, and Domain Authority — the most highly correlated metric with actual Google rankings available today.</span>
            </div>
        </div>
    </div>
</section>
<section class="section section-lg">
    <div class="container">
        <div class="row justify-content-center mb-5 mb-lg-7">
            <div class="col-12 col-md-8 text-center">
                <h1 class="h1 font-weight-bolder mb-4">PHP Extended Support</h1>
            </div>
        </div>
        <div class="row row-grid align-items-center mb-5 mb-md-7">
            <div class="col-12 col-md-5 order-md-2">
                <div class="ml-20 ml-md-0 ml-lg-0">
                    <p>Keep using older PHP versions with PHP Extended Support from YUSERVER. Versions 4.0, 5.2, 5.4, 5.6, 7, 7.1 and 7.2 are all supported, saving you the hassle of upgrading.</p>
                    <p>If you’re a new customer using an old PHP version, simply transfer your website to YUSERVER and select PHP Extended Support when you purchase a plan.</p>
                </div>
            </div>
            <div class="col-12 col-md-6 mr-lg-auto">
                <?= $this->Html->image('illustrations/feature-illustration-3.svg') ?>
            </div>
        </div>
    </div>
</section>