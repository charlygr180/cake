<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Bar'), ['action' => 'edit', $bar->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Bar'), ['action' => 'delete', $bar->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bar->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Bars'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bar'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="bars view large-9 medium-8 columns content">
    <h3><?= h($bar->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($bar->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($bar->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($bar->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($bar->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Ubication') ?></h4>
        <?= $this->Text->autoParagraph(h($bar->Ubication)); ?>
    </div>
</div>
