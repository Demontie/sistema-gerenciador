<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tarefa $tarefa
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tarefa'), ['action' => 'edit', $tarefa->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tarefa'), ['action' => 'delete', $tarefa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tarefa->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tarefas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tarefa'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tarefas view large-9 medium-8 columns content">
    <h3><?= h($tarefa->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Titulo') ?></th>
            <td><?= h($tarefa->titulo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($tarefa->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nivel Prioridade') ?></th>
            <td><?= $this->Number->format($tarefa->nivel_prioridade) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($tarefa->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($tarefa->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Descricao') ?></h4>
        <?= $this->Text->autoParagraph(h($tarefa->descricao)); ?>
    </div>
</div>
