<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Employeds'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="employeds form large-9 medium-8 columns content">
    <?= $this->Form->create($employed) ?>
    <fieldset>
        <legend><?= __('Add Employed') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('description');
            echo $this->Form->input('salary');
            echo $this->Form->input('barid');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
