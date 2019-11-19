<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MembresiasUsers Model
 *
 * @property \App\Model\Table\MembresiasTable&\Cake\ORM\Association\BelongsTo $Membresias
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\MembresiasUser get($primaryKey, $options = [])
 * @method \App\Model\Entity\MembresiasUser newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MembresiasUser[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MembresiasUser|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MembresiasUser saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MembresiasUser patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MembresiasUser[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MembresiasUser findOrCreate($search, callable $callback = null, $options = [])
 */
class MembresiasUsersTable extends Table
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

        $this->setTable('membresias_users');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Membresias', [
            'foreignKey' => 'membresia_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
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

        // $validator
        //     ->dateTime('fecha_inicio')
        //     ->requirePresence('fecha_inicio', 'create')
        //     ->notEmptyDateTime('fecha_inicio');

        // $validator
        //     ->dateTime('fecha_fin')
        //     ->requirePresence('fecha_fin', 'create')
        //     ->notEmptyDateTime('fecha_fin');

        // $validator
        //     ->decimal('costo')
        //     ->requirePresence('costo', 'create')
        //     ->notEmptyString('costo');

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
        $rules->add($rules->existsIn(['membresia_id'], 'Membresias'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));

        return $rules;
    }
}
