<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PricingFeature $pricingFeature
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $pricingFeature->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $pricingFeature->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Pricing Features'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="pricingFeatures form content">
            <?= $this->Form->create($pricingFeature) ?>
            <fieldset>
                <legend><?= __('Edit Pricing Feature') ?></legend>
                <?php
                    echo $this->Form->control('pricing_id');
                    echo $this->Form->control('name');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
