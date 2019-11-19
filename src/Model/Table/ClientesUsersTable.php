<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ClientesUsers Model
 *
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\ClientesTable&\Cake\ORM\Association\BelongsTo $Clientes
 *
 * @method \App\Model\Entity\ClientesUser get($primaryKey, $options = [])
 * @method \App\Model\Entity\ClientesUser newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ClientesUser[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ClientesUser|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ClientesUser saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ClientesUser patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ClientesUser[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ClientesUser findOrCreate($search, callable $callback = null, $options = [])
 */
class ClientesUsersTable extends Table
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

        $this->addBehavior('Proffer.Proffer', [
            'photo' => [	// The name of your upload field
                'root' => WWW_ROOT . 'files', // Customise the root upload folder here, or omit to use the default
                'dir' => 'photodir',	// The name of the field to store the folder
                'thumbnailSizes' => [ // Declare your thumbnails
                    'square' => [	// Define the prefix of your thumbnail
                        'w' => 200,	// Width
                        'h' => 200,	// Height
                        'crop' => true,
                        'jpeg_quality'	=> 100
                    ]
                ],
                'thumbnailMethod' => 'gd'	// Options are Imagick or Gd
            ]
        ]);

        $this->setTable('clientes_users');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Clientes', [
            'foreignKey' => 'cliente_id',
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

        $validator
            ->decimal('probbenigno')
            ->requirePresence('probbenigno', 'create')
            ->notEmptyString('probbenigno');

        $validator
            ->decimal('probmaligno')
            ->requirePresence('probmaligno', 'create')
            ->notEmptyString('probmaligno');

        $validator
            ->scalar('descripcion')
            ->maxLength('descripcion', 250)
            ->allowEmptyString('descripcion');

        $validator
            // ->scalar('photo')
            // ->maxLength('photo', 250)
            ->requirePresence('photo', 'create')
            ->notEmptyString('photo');

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
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['cliente_id'], 'Clientes'));

        return $rules;
    }
}
