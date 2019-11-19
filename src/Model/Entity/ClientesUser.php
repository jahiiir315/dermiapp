<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ClientesUser Entity
 *
 * @property int $id
 * @property int $user_id
 * @property int $cliente_id
 * @property float $probbenigno
 * @property float $probmaligno
 * @property string|null $descripcion
 * @property string $photo
 * @property string $photodir
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Cliente $cliente
 */
class ClientesUser extends Entity
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
        'user_id' => true,
        'cliente_id' => true,
        'probbenigno' => true,
        'probmaligno' => true,
        'descripcion' => true,
        'photo' => true,
        'photodir' => false,
        'user' => true,
        'cliente' => true
    ];
}
