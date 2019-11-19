<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Opiniones Model
 *
 * @method \App\Model\Entity\Opinione get($primaryKey, $options = [])
 * @method \App\Model\Entity\Opinione newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Opinione[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Opinione|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Opinione saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Opinione patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Opinione[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Opinione findOrCreate($search, callable $callback = null, $options = [])
 */
class OpinionesTable extends Table
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

        $this->setTable('opiniones');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->scalar('descripcion')
            ->maxLength('descripcion', 255)
            ->allowEmptyString('descripcion');

        $validator
            ->scalar('nombre')
            ->maxLength('nombre', 255)
            ->allowEmptyString('nombre');

        return $validator;
    }
}
