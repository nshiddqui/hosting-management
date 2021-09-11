<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Subscriber $subscriber
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Subscriber'), ['action' => 'edit', $subscriber->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Subscriber'), ['action' => 'delete', $subscriber->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subscriber->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Subscribers'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Subscriber'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="subscribers view content">
            <h3><?= h($subscriber->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Ip Address') ?></th>
                    <td><?= h($subscriber->ip_address) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($subscriber->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= $this->Number->format($subscriber->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($subscriber->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($subscriber->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
