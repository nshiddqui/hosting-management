<?php $this->Form->setTemplates(['inputContainer' => '{{content}}']); ?>
<!-- Hero -->
<section class="section-header bg-primary text-white pb-9 pb-lg-13 mb-4 mb-lg-6">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 text-center">
                <h1 class="display-2 mb-3">Got a question?</h1>
                <p class="lead">Your feedback is valuable to us. If you have problems with your hosting product, want to request a feature, or report a bug, we’re more than happy to help</p>
            </div>
        </div>
    </div>
    <div class="pattern bottom"></div>
</section>
<div class="section section-lg pt-0">
    <div class="container mt-n8 mt-lg-n13 z-2">
        <div class="row justify-content-center">
            <div class="col-12">
                <!-- Card -->
                <div class="card border-light shadow-soft p-2 p-md-4 p-lg-5">
                    <div class="card-body">
                        <?= $this->Form->create($contact) ?>
                        <?= $this->Flash->render() ?>
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label class="form-label text-dark" for="first-name">First Name <span class="text-danger">*</span></label>
                                    <div class="input-group mb-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-user-alt"></i></span>
                                        </div>
                                        <?= $this->Form->control('first_name', ['placeholder' => 'John', 'label' => false, 'class' => 'form-control']) ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label class="form-label text-dark" for="last-name">Last Name <span class="text-danger">*</span></label>
                                    <div class="input-group mb-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-user-alt"></i></span>
                                        </div>
                                        <?= $this->Form->control('last_name', ['placeholder' => 'Doe', 'label' => false, 'class' => 'form-control']) ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
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
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label class="form-label text-dark" for="phone-number">Phone Number<span class="text-danger">*</span></label>
                                    <div class="input-group mb-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-phone-square-alt"></i></span>
                                        </div>
                                        <?= $this->Form->control('phone_number', ['placeholder' => '(555) 555-1234', 'label' => false, 'class' => 'form-control']) ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mt-4">
                                <div class="form-group">
                                    <label class="form-label text-dark" for="description">How can we help you?<span class="text-danger">*</span></label>
                                    <?= $this->Form->control('description', ['placeholder' => 'Hi YUSERVER, I would like to ...', 'label' => false, 'class' => 'form-control', 'rows' => '8']) ?>
                                </div>
                                <div class="text-center">
                                    <?= $this->Form->button('<span class="mr-2"><i class="fas fa-paper-plane"></i></span>Send Message', ['class' => 'btn btn-secondary mt-4 animate-up-2', 'escapeTitle' => false]) ?>
                                </div>
                            </div>
                        </div>
                        <?= $this->Form->end() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section section-lg pt-0 line-bottom-light">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4 text-center px-4 mb-5 mb-lg-0">
                <div class="icon icon-sm icon-shape icon-shape-primary rounded mb-4">
                    <i class="fas fa-envelope-open-text"></i>
                </div>
                <h5 class="mb-3">Email us</h5>
                <p>
                    Email us for general queries, including marketing and partnership opportunities.
                </p>
                <a class="font-weight-bold text-primary" href="mailto:office@yuserver.in">office@yuserver.in</a>
            </div>
            <div class="col-12 col-md-4 text-center px-4 mb-5 mb-lg-0">
                <div class="icon icon-sm icon-shape icon-shape-primary rounded mb-4">
                    <i class="fas fa-phone-volume"></i>
                </div>
                <h5 class="mb-3">Call us</h5>
                <p>
                    Call us to speak to a member of our team.We are always happy to help you.
                </p>
                <a class="font-weight-bold text-primary" href="tel:+917210482353">+91 (721) 0482353</a>
            </div>
            <div class="col-12 col-md-4 text-center px-4">
                <div class="icon icon-sm icon-shape icon-shape-primary rounded mb-4">
                    <i class="fas fa-headset"></i>
                </div>
                <h5 class="mb-3">Support</h5>
                <p>
                    Technical support for each product is given directly by the creators of Themesberg.
                </p>
                <a class="btn btn-sm btn-outline-primary" href="javascript:Tawk_API.popup();">
                    Support Center
                    <span class="fas fa-long-arrow-alt-right ml-2"></span>
                </a>
            </div>
        </div>
    </div>
</div>