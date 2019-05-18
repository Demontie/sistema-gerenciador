<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Tarefa Entity
 *
 * @property int $id
 * @property string $titulo
 * @property string $descricao
 * @property int $nivel_prioridade
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class Tarefa extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'titulo' => true,
        'descricao' => true,
        'nivel_prioridade' => true,
        'created' => true,
        'modified' => true
    ];
}
