<?php
$this->assign('title', 'Web Hosting');
$this->assign('description', 'Get cheap hosting with high performance hosting, latest features of cpanel and 24*7 days support');
?>
<!-- Hero -->
<section class="section-header bg-primary text-white pb-7 pb-lg-11">
    <div class="container">
        <div class="row justify-content-center mb-6">
            <div class="col-12 col-md-10 text-center">
                <h1 class="display-2 mb-3">Our pricing plan made simple</h1>
                <p class="lead px-5">Get cheap hosting with <span class="font-weight-bold">high performance</span> hosting, latest features of <span class="font-weight-bold">cpanel</span> and <span class="font-weight-bold">24*7 days</span> support</p>
            </div>
        </div>
        <div class="row text-gray">
            <?php foreach ($pricing as $price) { ?>
                <div class="col-12 col-lg-4">
                    <!-- Card -->
                    <div class="card shadow-soft mb-5 mb-lg-6 px-2">
                        <div class="card-header border-light py-5 px-4">
                            <!-- Price -->
                            <div class="d-flex mb-3">
                                <span class="h5 mb-0">₹</span>
                                <span class="price display-2 mb-0 <?= $price->color ?>" data-annual="<?= ($price->discount / 100) * ($price->amount * 12) ?>" data-monthly="<?= $price->amount ?>"><?= $price->amount ?></span>
                                <span class="h6 font-weight-normal align-self-end">/month</span>
                            </div>
                            <h4 class="mb-3 text-black"><?= $price->name ?></h4>
                            <p class="font-weight-normal mb-0">Best for <?= $price->total_website ?> Website.</p>
                        </div>
                        <div class="card-body pt-5">
                            <ul class="list-group simple-list">
                                <?php foreach ($price['pricing_features'] as $pricing_features) { ?>
                                    <li class="list-group-item font-weight-normal"><span class="icon-gray"><i class="fas fa-check"></i></span><?= $pricing_features->name ?></li>
                                <?php } ?>
                            </ul>
                        </div>
                        <div class="card-footer px-4 pb-4">
                            <!-- Button -->
                            <?= $this->Html->link('Start from ' . ucfirst(strtolower($price->name)) . ' <span class="icon icon-xs ml-3"><i class="fas fa-arrow-right"></i></span>', 'https://portal.shelty.in/cart.php?a=add&pid=' . $price->id, ['escape' => false, 'class' => 'btn btn-block btn-outline-gray animate-up-2']) ?>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="row justify-content-center">
            <div class="col col-md-10 text-center">
                <h2 class="mb-3">Still not convinced? Start with a Demo!</h2>
                <p class="lead mb-5 px-5">You will receive demo credentials on your email id to visit the server.</p>
                <!-- Button -->
                <?= $this->Html->link('Start a free demo<span class="icon icon-xs ml-3"><i class="fas fa-arrow-right"></i></span>', '/contact', ['escape' => false, 'class' => 'btn btn-secondary animate-up-2', 'target' => '_BLANK']) ?>
            </div>
        </div>
    </div>
    <div class="pattern bottom"></div>
</section>
<section class="section section-lg pt-6 line-bottom-light">
    <div class="container">
        <div class="row justify-content-center mb-6">
            <div class="col-12 col-md-8 text-center">
                <h1 class="display-3 mb-4">All hosting plan include these powerfull features</h1>
                <p class="lead">We add new tools and features regularly.</p>
            </div>
        </div>
        <div class="row mt-6">
            <div class="col-6 col-md-3">
                <!-- Icon Box -->
                <div class="card shadow-soft border-light mb-4">
                    <div class="card-body">
                        <div class="d-flex flex-column flex-lg-row p-3">
                            <div class="mb-3 mb-lg-0">
                                <div class="icon icon-primary"><i class="fab fa-wordpress"></i></div>
                            </div>
                            <div class="pl-lg-4">
                                <h5 class="mb-3">Wordpress</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Icon Box -->
            </div>
            <div class="col-6 col-md-3">
                <!-- Icon Box -->
                <div class="card shadow-soft border-light mb-4">
                    <div class="card-body">
                        <div class="d-flex flex-column flex-lg-row p-3">
                            <div class="mb-3 mb-lg-0">
                                <div class="icon icon-primary"><i class="fab fa-expeditedssl"></i></div>
                            </div>
                            <div class="pl-lg-4">
                                <h5 class="mb-3">SSL</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Icon Box -->
            </div>
            <div class="col-6 col-md-3">
                <!-- Icon Box -->
                <div class="card shadow-soft border-light mb-4">
                    <div class="card-body">
                        <div class="d-flex flex-column flex-lg-row p-3">
                            <div class="mb-3 mb-lg-0">
                                <div class="icon icon-primary"><i class="fas fa-ad"></i></div>
                            </div>
                            <div class="pl-lg-4">
                                <h5 class="mb-3">SEO</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Icon Box -->
            </div>
            <div class="col-6 col-md-3">
                <!-- Icon Box -->
                <div class="card shadow-soft border-light mb-4">
                    <div class="card-body">
                        <div class="d-flex flex-column flex-lg-row p-3">
                            <div class="mb-3 mb-lg-0">
                                <div class="icon icon-primary"><i class="fas fa-lock"></i></div>
                            </div>
                            <div class="pl-lg-4">
                                <h5 class="mb-3">Sitelock</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Icon Box -->
            </div>
            <div class="col-6 col-md-3">
                <!-- Icon Box -->
                <div class="card shadow-soft border-light mb-4">
                    <div class="card-body">
                        <div class="d-flex flex-column flex-lg-row p-3">
                            <div class="mb-3 mb-lg-0">
                                <div class="icon icon-primary"><i class="fas fa-shield-alt"></i></div>
                            </div>
                            <div class="pl-lg-4">
                                <h5 class="mb-3">Security</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Icon Box -->
            </div>
            <div class="col-6 col-md-3">
                <!-- Icon Box -->
                <div class="card shadow-soft border-light mb-4">
                    <div class="card-body">
                        <div class="d-flex flex-column flex-lg-row p-3">
                            <div class="mb-3 mb-lg-0">
                                <div class="icon icon-primary"><i class="far fa-gem"></i></div>
                            </div>
                            <div class="pl-lg-4">
                                <h5 class="mb-3">Ruby App</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Icon Box -->
            </div>
            <div class="col-6 col-md-3">
                <!-- Icon Box -->
                <div class="card shadow-soft border-light mb-4">
                    <div class="card-body">
                        <div class="d-flex flex-column flex-lg-row p-3">
                            <div class="mb-3 mb-lg-0">
                                <div class="icon icon-primary"><i class="fab fa-node-js"></i></div>
                            </div>
                            <div class="pl-lg-4">
                                <h5 class="mb-3">Node JS</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Icon Box -->
            </div>
            <div class="col-6 col-md-3">
                <!-- Icon Box -->
                <div class="card shadow-soft border-light mb-4">
                    <div class="card-body">
                        <div class="d-flex flex-column flex-lg-row p-3">
                            <div class="mb-3 mb-lg-0">
                                <div class="icon icon-primary"><i class="fab fa-python"></i></div>
                            </div>
                            <div class="pl-lg-4">
                                <h5 class="mb-3">Python</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Icon Box -->
            </div>
        </div>
    </div>
</section>
<section class="section section-lg bg-white line-bottom-light">
    <div class="container">
        <div class="row justify-content-center mb-4 mb-lg-6">
            <div class="col-12 col-lg-8 text-center">
                <h1 class="display-3 mb-4">Frequently asked questions</h1>
                <p class="lead text-gray">Here’s what you need to know about your Impact license, based on the questions we get asked the most.</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <!--Accordion-->
                <div class="accordion">
                    <?php foreach ($faqs as $id => $faq) { ?>
                        <div class="card card-sm card-body border border-light rounded mb-3">
                            <div data-target="#panel-<?= $id ?>" class="accordion-panel-header" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="panel-1">
                                <span class="h6 mb-0"><?= $faq->question ?></span>
                                <span class="icon"><i class="fas fa-angle-down"></i></span>
                            </div>
                            <div class="collapse" id="panel-<?= $id ?>">
                                <div class="pt-3">
                                    <p class="mb-0">
                                        <?= $faq->answer ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <div class="row mt-5 mt-lg-6">
                        <div class="col text-center">
                            <?= $this->Html->link('<span class="mr-2"><i class="fas fa-question-circle"></i></span> See all FAQ', '/faqs', ['escape' => false, 'class' => 'btn btn-primary animate-up-2', 'target' => '_BLANK']) ?>
                        </div>
                    </div>
                </div>
                <!--End of Accordion-->
            </div>
        </div>
    </div>
</section>