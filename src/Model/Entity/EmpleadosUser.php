<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * EmpleadosUser Entity
 *
 * @property int $id
 * @property int $empleado_id
 * @property int $user_id
 * @property string|null $descripcion
 *
 * @property \App\Model\Entity\Empleado $empleado
 * @property \App\Model\Entity\User $user
 */
class EmpleadosUser extends Entity
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
        'empleado_id' => true,
        'user_id' => true,
        'descripcion' => true,
        'empleado' => true,
        'user' => true
    ];
}
