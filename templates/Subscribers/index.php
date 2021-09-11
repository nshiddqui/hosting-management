<?php $this->Form->setTemplates(['inputContainer' => '{{content}}']); ?>
<!-- Hero -->
<section class="section-header pb-8 pb-lg-13 mb-4 mb-lg-6 bg-primary text-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 text-center">
                <h1 class="display-2 mb-3">Subcribe Here</h1>
                <p class="lead">The latest Impact news, articles, and resources, sent straight to your inbox every month.</p>
            </div>
        </div>
    </div>
    <div class="pattern bottom"></div>
</section>
<section class="section section-lg pt-0">
    <div class="container mt-n7 mt-lg-n13 z-2">
        <div class="row justify-content-center">
            <div class="col-12">
                <!-- Card -->
                <div class="card border-light shadow-soft p-2 p-md-4 p-lg-5">
                    <div class="card-body">
                        <?= $this->Form->create($subscriber) ?>
                        <?= $this->Flash->render() ?>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label text-dark" for="email">Email <span class="text-danger">*</span></label>
                                    <div class="input-group mb-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                        </div>
                                        <?= $this->Form->control('email', ['placeholder' => 'johndoe@company.com', 'label' => false, 'class' => 'form-control']) ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mt-4">
                                <div class="text-center">
                                    <?= $this->Form->button('<span class="mr-2"><i class="fas fa-bell"></i></span>Subscribe', ['class' => 'btn btn-secondary mt-4 animate-up-2', 'escapeTitle' => false]) ?>
                                </div>
                            </div>
                        </div>
                        <?= $this->Form->end() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>