<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Employed'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="employeds index large-9 medium-8 columns content">
    <h3><?= __('Employeds') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('salary') ?></th>
                <th><?= $this->Paginator->sort('barid') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($employeds as $employed): ?>
            <tr>
                <td><?= $this->Number->format($employed->id) ?></td>
                <td><?= h($employed->name) ?></td>
                <td><?= h($employed->salary) ?></td>
                <td><?= $this->Number->format($employed->barid) ?></td>
                <td><?= h($employed->created) ?></td>
                <td><?= h($employed->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $employed->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $employed->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $employed->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employed->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
