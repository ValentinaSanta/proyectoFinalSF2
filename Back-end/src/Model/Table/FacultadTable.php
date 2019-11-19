<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Facultad Model
 *
 * @method \App\Model\Entity\Facultad get($primaryKey, $options = [])
 * @method \App\Model\Entity\Facultad newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Facultad[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Facultad|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Facultad saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Facultad patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Facultad[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Facultad findOrCreate($search, callable $callback = null, $options = [])
 */
class FacultadTable extends Table
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

        $this->setTable('facultad');
        $this->setDisplayField('IDFACULTAD');
        $this->setPrimaryKey('IDFACULTAD');
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
            ->allowEmptyString('IDFACULTAD', null, 'create');

        $validator
            ->scalar('NOMBRE')
            ->maxLength('NOMBRE', 100)
            ->allowEmptyString('NOMBRE');

        return $validator;
    }
}
