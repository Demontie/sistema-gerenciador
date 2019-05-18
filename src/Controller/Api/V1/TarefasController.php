<?php
namespace App\Controller\Api\V1;

use App\Controller\AppController;

class TarefasController extends AppController
{

    public function index()
    {
        $tarefas = $this->Tarefas->find('all');

        $this->set([
            'data'=>$tarefas,
            '_serialize'=> ['data']
        ]);
    }


    public function view($id)
    {
        $tarefas = $this->Tarefas->get($id);
        $this->set([
            'data' => $tarefas,
            '_serialize' => ['data']
        ]);
    }
    public function add()
    {
        $tarefa = $this->Tarefas->newEntity($this->request->getData());
        if ($this->Tarefas->save($tarefa)) {
            $message = 'Tarefa salva com sucesso!';
        } else {
            $message = 'Error ao adicionar tarefa!';
        }
        $this->set([
            'data' => $tarefa,
            'message' => $message,
            '_serialize' => ['data', 'message']
        ]);
    }
    public function edit($id)
    {
        $tarefa = $this->Tarefas->get($id);
        $tarefa = $this->Tarefas->patchEntity($tarefa, $this->request->getData());
        if ($this->Tarefas->save($tarefa)) {
            $message = 'Tarefa editada com sucesso!';
        } else {
            $message = 'Erro ao editar tarefa!';
        }
        $this->set([
            'data' => $tarefa,
            'message' => $message,
            '_serialize' => ['data', 'message']
        ]);
    }
    public function delete($id)
    {
        $tarefa = $this->Tarefas->get($id);
        if ($this->Tarefas->delete($tarefa)) {
            $message = 'Tarefa deletada com sucesso!';
        } else {
            $message = 'Error ao deletar tarefa!';
        }
        $this->set([
            'data' => $tarefa,
            'message' => $message,
            '_serialize' => ['data', 'message']
        ]);
    }
}
