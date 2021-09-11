<!-- Hero -->
<section class="section-header pb-8 pb-lg-13 mb-4 mb-lg-6 bg-primary text-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 text-center">
                <h1 class="display-2 mb-3">Frequently asked questions</h1>
                <p class="lead">Here’s what you need to know about your Impact license, based on the questions we get asked the most.</p>
            </div>
        </div>
    </div>
    <div class="pattern bottom"></div>
</section>
<section class="section section-lg pt-0">
    <div class="container mt-n7 mt-lg-n13 z-2">
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
                </div>
                <!--End of Accordion-->
            </div>
        </div>
    </div>
</section>