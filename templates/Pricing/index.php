<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pricing[]|\Cake\Collection\CollectionInterface $pricing
 */
?>
<div class="pricing index content">
    <?= $this->Html->link(__('New Pricing'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Pricing') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('amount') ?></th>
                    <th><?= $this->Paginator->sort('discount') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pricing as $pricing): ?>
                <tr>
                    <td><?= $this->Number->format($pricing->id) ?></td>
                    <td><?= h($pricing->name) ?></td>
                    <td><?= $this->Number->format($pricing->amount) ?></td>
                    <td><?= $this->Number->format($pricing->discount) ?></td>
                    <td><?= h($pricing->created) ?></td>
                    <td><?= h($pricing->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $pricing->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pricing->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pricing->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pricing->id)]) ?>
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
