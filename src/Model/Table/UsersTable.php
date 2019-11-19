<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @property \App\Model\Table\ClientesTable&\Cake\ORM\Association\BelongsToMany $Clientes
 * @property \App\Model\Table\DoctoresTable&\Cake\ORM\Association\BelongsToMany $Doctores
 * @property \App\Model\Table\EmpleadosTable&\Cake\ORM\Association\BelongsToMany $Empleados
 * @property \App\Model\Table\MembresiasTable&\Cake\ORM\Association\BelongsToMany $Membresias
 *
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, callable $callback = null, $options = [])
 */
class UsersTable extends Table
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

        $this->setTable('users');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsToMany('Clientes', [
            'foreignKey' => 'user_id',
            'targetForeignKey' => 'cliente_id',
            'joinTable' => 'clientes_users'
        ]);
        $this->belongsToMany('Doctores', [
            'foreignKey' => 'user_id',
            'targetForeignKey' => 'doctore_id',
            'joinTable' => 'doctores_users'
        ]);
        $this->belongsToMany('Empleados', [
            'foreignKey' => 'user_id',
            'targetForeignKey' => 'empleado_id',
            'joinTable' => 'empleados_users'
        ]);
        $this->belongsToMany('Membresias', [
            'foreignKey' => 'user_id',
            'targetForeignKey' => 'membresia_id',
            'joinTable' => 'membresias_users'
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
            ->scalar('nombre')
            ->maxLength('nombre', 255)
            ->requirePresence('nombre', 'create')
            ->notEmptyString('nombre');

        $validator
            ->scalar('dni')
            ->maxLength('dni', 8)
            ->allowEmptyString('dni');

        $validator
            ->scalar('ruc')
            ->maxLength('ruc', 10)
            ->allowEmptyString('ruc');

        $validator
            ->scalar('direccion')
            ->maxLength('direccion', 255)
            ->allowEmptyString('direccion');

        $validator
            ->scalar('celular')
            ->maxLength('celular', 9)
            ->allowEmptyString('celular');

        $validator
            ->scalar('telefono')
            ->maxLength('telefono', 9)
            ->allowEmptyString('telefono');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmptyString('email');

        $validator
            ->scalar('password')
            ->maxLength('password', 40)
            ->requirePresence('password', 'create')
            ->notEmptyString('password');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['email']));

        return $rules;
    }
}
