<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tarefa $tarefa
 */
?>
<br>
<div class="col-sm-12">
    <div class="row justify-content-sm-center">
        <div class="col">
            <div class="row">
                <div class="col-sm-8">
                    <h2><?= __('Editar tarefa') ?></h2>
                </div>

                <div class="col-sm-4 text-right">
                    <?=$this->Form->postLink(
                        __('Deletar esta tarefa'),
                        ['action' => 'delete', $tarefa->id],
                        ['class'=>'btn btn-danger','confirm' => __('Are you sure you want to delete # {0}?', $tarefa->id)]
                    )?>
                    <?=$this->Html->link(__('Lista de tarefas'), ['action' => 'index'],['class' => 'btn btn-info'])?>
                </div>
            </div>
            <?= $this->Form->create($tarefa) ?>

            <?php
            $niveis = [1=>1, 2, 3,4,5];
            echo $this->Form->control('titulo', ['class' => 'form-control']);
            echo $this->Form->control('descricao');
            echo $this->Form->control('nivel_prioridade', [
                'type' => 'select',
                'options' => $niveis,
            ]);
            ?>
            <br>
            <?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-success']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

