<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tarefa[]|\Cake\Collection\CollectionInterface $tarefas
 */
?>
<div class="row">
    <nav class="col-sm-3" id="actions-sidebar">
        <div class="row">
            <div class="col-sm-12">
                <ul class="side-nav">
                    <li><?= $this->Html->link(__('Adicionar tarefa'), ['action' => 'add'],
                            ['class' => 'btn btn-clock btn-success']) ?></li>
                </ul>
            </div>
        </div>
        <?php foreach ($tarefas as $tarefa): ?>
            <div class="row espacamento-bottom">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-sm-6">
                                    <?= h($tarefa->titulo) ?>
                                </div>
                                <div class="col-sm-2">
                                    <?= $this->Html->link($this->Html->tag('i', '', array('class' => 'fas fa-eye')),
                                        ['action' => 'view', $tarefa->id], array('escape' => false)) ?>
                                </div>
                                <div class="col-sm-2">
                                    <?= $this->Html->link($this->Html->tag('i', '',
                                        array('class' => 'fas fa-pencil-alt')),
                                        ['action' => 'edit', $tarefa->id], array('escape' => false)) ?>
                                </div>
                                <div class="col-sm-2">
                                    <?= $this->Form->postLink($this->Html->tag('i', '',
                                        array('class' => 'fas fa-trash-alt')), ['action' => 'delete', $tarefa->id],
                                        array(
                                            'confirm' => __('Você quer realmente deletar?', $tarefa->id),
                                            'escape' => false
                                        ), []) ?>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">
                                Prioridade: <?= $this->Number->format($tarefa->nivel_prioridade) ?></h5>
                            <p class="card-text"><?= h($tarefa->descricao) ?></p>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </nav>
    <div class="col-sm-9 side-nav">
        <div class="card-group">
            <div class="card">
                <div class="card-header">
                    Fazendo
                </div>
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                        additional
                        content. This content is a little bit longer.</p>
                    <p class="card-text">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </p>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    Testando
                </div>
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional
                        content.</p>
                    <p class="card-text">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </p>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    Concluído
                </div>
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                        additional
                        content. This card has even longer content than the first to show that equal height action.</p>
                    <p class="card-text">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
