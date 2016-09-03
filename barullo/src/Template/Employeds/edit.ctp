<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $employed->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $employed->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Employeds'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="employeds form large-9 medium-8 columns content">
    <?= $this->Form->create($employed) ?>
    <fieldset>
        <legend><?= __('Edit Employed') ?></legend>
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
