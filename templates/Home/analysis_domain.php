   <?php $this->Form->setTemplates(['inputContainer' => '{{content}}']); ?>
   <?= $this->Html->css('analysis_domain', ['block' => true]) ?>
   <?= $this->Html->script('analysis_domain', ['block' => true]) ?>
   <!-- Hero -->
   <section class="section-header pb-8 pb-lg-13 mb-4 mb-lg-6 bg-primary text-white">
       <div class="container">
           <div class="row justify-content-center">
               <div class="col-12 col-md-8 text-center">
                   <h1 class="display-2 mb-3">The world's most accurate SEO data.</h1>
                   <p class="lead">Here’s you can enter your domain and analyse your website performace and rating. our rating calculated from the google ranking, which is the top traffic source of website</p>
               </div>
           </div>
       </div>
       <div class="pattern bottom"></div>
   </section>
   <section class="section section-lg pt-0">
       <div class="container mt-n7 mt-lg-n13 z-2">
           <div class="row justify-content-center mb-4 mb-lg-6">
               <div class="col-12">
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
                           <?= $this->Form->control('domain', ['label' => false, 'value' => $domain, 'class' => 'form-control form-control-xl border-light', 'type' => 'url', 'placeholder' => 'Enter a domain']) ?>
                           <div class="input-group-prepend">
                               <?= $this->Form->button('Analyze domain', ['class' => 'btn btn-secondary rounded-right']) ?>
                           </div>
                       </div>
                   </div>
                   <?= $this->Form->end() ?>
                   <span class="small">Impact also offers access to our best-in-class proprietary metrics including Keyword Difficulty, Spam Score, Page Authority, and Domain Authority — the most highly correlated metric with actual Google rankings available today.</span>
               </div>
           </div>
           <?php if (!empty($response)) { ?>
               <div class="row justify-content-center mt-5">
                   <div class="col-12 col-md-12">
                       <h3>Result for website : <?= $this->Html->link($domain, $domain, ['target' => '_BLANK']) ?></h3>
                   </div>
               </div>
               <div class="row justify-content-center mt-5">
                   <div class="col-12">
                       <div class="row">
                           <?php foreach ($response['lhrSlim'] as $ranking) { ?>
                               <div class="col-xl-3 col-lg-6 mb-4">
                                   <div class="bg-white rounded-lg p-5 shadow">
                                       <h2 class="h6 font-weight-bold text-center mb-4"><?= $ranking['title'] ?></h2>

                                       <!-- Progress bar 1 -->
                                       <div class="progress mx-auto" data-value='<?= $ranking['score'] * 100 ?>'>
                                           <span class="progress-left">
                                               <span class="progress-bar border-primary"></span>
                                           </span>
                                           <span class="progress-right">
                                               <span class="progress-bar border-primary"></span>
                                           </span>
                                           <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                                               <div class="h2 font-weight-bold"><?= $ranking['score'] * 100 ?><sup class="small">%</sup></div>
                                           </div>
                                       </div>
                                       <!-- END -->
                                   </div>
                               </div>
                           <?php } ?>
                       </div>
                   </div>
               </div>
           <?php  } ?>
       </div>
   </section>