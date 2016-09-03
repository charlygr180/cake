<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Employed'), ['action' => 'edit', $employed->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Employed'), ['action' => 'delete', $employed->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employed->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Employeds'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employed'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="employeds view large-9 medium-8 columns content">
    <h3><?= h($employed->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($employed->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Salary') ?></th>
            <td><?= h($employed->salary) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($employed->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Barid') ?></th>
            <td><?= $this->Number->format($employed->barid) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($employed->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($employed->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($employed->description)); ?>
    </div>
</div>
