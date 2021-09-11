<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pricing $pricing
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $pricing->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $pricing->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Pricing'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="pricing form content">
            <?= $this->Form->create($pricing) ?>
            <fieldset>
                <legend><?= __('Edit Pricing') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('amount');
                    echo $this->Form->control('discount');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
