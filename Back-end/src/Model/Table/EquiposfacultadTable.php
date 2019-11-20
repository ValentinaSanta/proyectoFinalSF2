<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Equiposfacultad Model
 *
 * @method \App\Model\Entity\Equiposfacultad get($primaryKey, $options = [])
 * @method \App\Model\Entity\Equiposfacultad newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Equiposfacultad[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Equiposfacultad|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Equiposfacultad saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Equiposfacultad patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Equiposfacultad[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Equiposfacultad findOrCreate($search, callable $callback = null, $options = [])
 */
class EquiposfacultadTable extends Table
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

        $this->setTable('equiposfacultad');
        $this->setDisplayField('IDEQUIPOSFACULTAD');
        $this->setPrimaryKey('IDEQUIPOSFACULTAD');
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
            ->allowEmptyString('IDEQUIPOSFACULTAD', null, 'create');

        $validator
            ->allowEmptyString('CANTIDAD');

        $validator
            ->allowEmptyString('EQUIPO_IDEQUIPO');

        $validator
            ->allowEmptyString('FACULTAD_IDFACULTAD');

        return $validator;
    }
}
