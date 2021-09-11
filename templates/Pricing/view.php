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
            <?= $this->Html->link(__('Edit Pricing'), ['action' => 'edit', $pricing->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Pricing'), ['action' => 'delete', $pricing->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pricing->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Pricing'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Pricing'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="pricing view content">
            <h3><?= h($pricing->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($pricing->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($pricing->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Amount') ?></th>
                    <td><?= $this->Number->format($pricing->amount) ?></td>
                </tr>
                <tr>
                    <th><?= __('Discount') ?></th>
                    <td><?= $this->Number->format($pricing->discount) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($pricing->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($pricing->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Pricing Features') ?></h4>
                <?php if (!empty($pricing->pricing_features)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Pricing Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($pricing->pricing_features as $pricingFeatures) : ?>
                        <tr>
                            <td><?= h($pricingFeatures->id) ?></td>
                            <td><?= h($pricingFeatures->pricing_id) ?></td>
                            <td><?= h($pricingFeatures->name) ?></td>
                            <td><?= h($pricingFeatures->created) ?></td>
                            <td><?= h($pricingFeatures->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'PricingFeatures', 'action' => 'view', $pricingFeatures->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'PricingFeatures', 'action' => 'edit', $pricingFeatures->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'PricingFeatures', 'action' => 'delete', $pricingFeatures->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pricingFeatures->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
