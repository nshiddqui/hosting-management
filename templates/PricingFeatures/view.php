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
            <?= $this->Html->link(__('Edit Pricing Feature'), ['action' => 'edit', $pricingFeature->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Pricing Feature'), ['action' => 'delete', $pricingFeature->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pricingFeature->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Pricing Features'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Pricing Feature'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="pricingFeatures view content">
            <h3><?= h($pricingFeature->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($pricingFeature->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($pricingFeature->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pricing Id') ?></th>
                    <td><?= $this->Number->format($pricingFeature->pricing_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($pricingFeature->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($pricingFeature->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
