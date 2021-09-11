<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PricingFeature[]|\Cake\Collection\CollectionInterface $pricingFeatures
 */
?>
<div class="pricingFeatures index content">
    <?= $this->Html->link(__('New Pricing Feature'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Pricing Features') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('pricing_id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pricingFeatures as $pricingFeature): ?>
                <tr>
                    <td><?= $this->Number->format($pricingFeature->id) ?></td>
                    <td><?= $this->Number->format($pricingFeature->pricing_id) ?></td>
                    <td><?= h($pricingFeature->name) ?></td>
                    <td><?= h($pricingFeature->created) ?></td>
                    <td><?= h($pricingFeature->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $pricingFeature->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pricingFeature->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pricingFeature->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pricingFeature->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
