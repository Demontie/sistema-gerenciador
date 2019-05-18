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
                    <li class="heading">TAREFAS PENDENTES!</li>
                    <li><?= $this->Html->link(__('Adicionar tarefa'), ['action' => 'add'],
                            ['class' => 'btn btn-clock btn-success']) ?></li>
                </ul>
            </div>
        </div>
        <?php foreach ($tarefas as $tarefa): ?>
            <div class="row espacamento-bottom div-movimenta">
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
                <div class="card-body tamanho-padrao">

                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    Testando
                </div>
                <div class="card-body tamanho-padrao">

                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    Concluído
                </div>
                <div class="card-body tamanho-padrao">

                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $( document ).ready(function() {
        $('.div-movimenta').draggable();
    });
</script>
