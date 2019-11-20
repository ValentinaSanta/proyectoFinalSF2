<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Cargo Model
 *
 * @method \App\Model\Entity\Cargo get($primaryKey, $options = [])
 * @method \App\Model\Entity\Cargo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Cargo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Cargo|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Cargo saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Cargo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Cargo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Cargo findOrCreate($search, callable $callback = null, $options = [])
 */
class CargoTable extends Table
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

        $this->setTable('cargo');
        $this->setDisplayField('IDCARGO');
        $this->setPrimaryKey('IDCARGO');
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
            ->allowEmptyString('IDCARGO', null, 'create')
            ->add('IDCARGO', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('DESCRIPCION')
            ->maxLength('DESCRIPCION', 50)
            ->allowEmptyString('DESCRIPCION');

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
        $rules->add($rules->isUnique(['IDCARGO']));

        return $rules;
    }
}
