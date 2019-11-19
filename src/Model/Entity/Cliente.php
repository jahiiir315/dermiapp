<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Cliente Entity
 *
 * @property int $id
 * @property string|null $nombres
 * @property string|null $apellido1
 * @property string|null $apellido2
 * @property string|null $dni
 *
 * @property \App\Model\Entity\User[] $users
 */
class Cliente extends Entity
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
        'nombres' => true,
        'apellido1' => true,
        'apellido2' => true,
        'dni' => true,
        'users' => true
    ];

    protected function _getLabel()
    {
        return $this->_properties['nombres'] . ' ' . $this->_properties['apellido1']. ' ' . $this->_properties['apellido2'];
    }
}
