<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher;

/**
 * User Entity
 *
 * @property int $id
 * @property string $nombre
 * @property string|null $dni
 * @property string|null $ruc
 * @property string|null $direccion
 * @property string|null $celular
 * @property string|null $telefono
 * @property string $email
 * @property string $password
 *
 * @property \App\Model\Entity\Cliente[] $clientes
 * @property \App\Model\Entity\Doctore[] $doctores
 * @property \App\Model\Entity\Empleado[] $empleados
 * @property \App\Model\Entity\Membresia[] $membresias
 */
class User extends Entity
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
        'nombre' => true,
        'dni' => true,
        'ruc' => true,
        'direccion' => true,
        'celular' => true,
        'telefono' => true,
        'email' => true,
        'password' => true,
        'clientes' => true,
        'doctores' => true,
        'empleados' => true,
        'membresias' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];

    protected function _setPassword($password)
    {
        if (strlen($password) > 0) {
            return (new DefaultPasswordHasher)->hash($password);
        }
    }
}
