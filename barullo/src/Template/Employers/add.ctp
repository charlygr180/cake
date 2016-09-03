<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Employers'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="employers form large-9 medium-8 columns content">
    <?= $this->Form->create($employer) ?>
    <fieldset>
        <legend><?= __('Add Employer') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('salary');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
