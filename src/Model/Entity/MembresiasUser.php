<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * MembresiasUser Entity
 *
 * @property int $id
 * @property int $membresia_id
 * @property int $user_id
 * @property \Cake\I18n\FrozenTime $fecha_inicio
 * @property \Cake\I18n\FrozenTime $fecha_fin
 * @property float $costo
 *
 * @property \App\Model\Entity\Membresia $membresia
 * @property \App\Model\Entity\User $user
 */
class MembresiasUser extends Entity
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
        'membresia_id' => true,
        'user_id' => true,
        'fecha_inicio' => true,
        'fecha_fin' => true,
        'costo' => true,
        'membresia' => true,
        'user' => true,
        'estado' => true,
        'intentos' => true
    ];
}
