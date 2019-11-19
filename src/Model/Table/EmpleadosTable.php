<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Empleados Model
 *
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsToMany $Users
 *
 * @method \App\Model\Entity\Empleado get($primaryKey, $options = [])
 * @method \App\Model\Entity\Empleado newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Empleado[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Empleado|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Empleado saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Empleado patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Empleado[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Empleado findOrCreate($search, callable $callback = null, $options = [])
 */
class EmpleadosTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('empleados');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsToMany('Users', [
            'foreignKey' => 'empleado_id',
            'targetForeignKey' => 'user_id',
            'joinTable' => 'empleados_users'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('nombres')
            ->maxLength('nombres', 80)
            ->requirePresence('nombres', 'create')
            ->notEmptyString('nombres');

        $validator
            ->scalar('apellido1')
            ->maxLength('apellido1', 40)
            ->requirePresence('apellido1', 'create')
            ->notEmptyString('apellido1');

        $validator
            ->scalar('apellido2')
            ->maxLength('apellido2', 40)
            ->requirePresence('apellido2', 'create')
            ->notEmptyString('apellido2');

        $validator
            ->scalar('celular')
            ->maxLength('celular', 9)
            ->requirePresence('celular', 'create')
            ->notEmptyString('celular');

        $validator
            ->scalar('dni')
            ->maxLength('dni', 8)
            ->requirePresence('dni', 'create')
            ->notEmptyString('dni');

        return $validator;
    }
}
