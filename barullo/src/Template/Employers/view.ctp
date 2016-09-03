<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Employer'), ['action' => 'edit', $employer->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Employer'), ['action' => 'delete', $employer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employer->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Employers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employer'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="employers view large-9 medium-8 columns content">
    <h3><?= h($employer->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($employer->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Salary') ?></th>
            <td><?= h($employer->salary) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($employer->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($employer->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($employer->modified) ?></td>
        </tr>
    </table>
</div>
