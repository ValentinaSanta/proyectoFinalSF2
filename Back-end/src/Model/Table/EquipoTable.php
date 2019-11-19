<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Equipo Model
 *
 * @method \App\Model\Entity\Equipo get($primaryKey, $options = [])
 * @method \App\Model\Entity\Equipo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Equipo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Equipo|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Equipo saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Equipo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Equipo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Equipo findOrCreate($search, callable $callback = null, $options = [])
 */
class EquipoTable extends Table
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

        $this->setTable('equipo');
        $this->setDisplayField('IDEQUIPO');
        $this->setPrimaryKey('IDEQUIPO');
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
            ->allowEmptyString('IDEQUIPO', null, 'create');

        $validator
            ->scalar('NOMBRE')
            ->maxLength('NOMBRE', 50)
            ->allowEmptyString('NOMBRE');

        $validator
            ->scalar('MARCA')
            ->maxLength('MARCA', 50)
            ->allowEmptyString('MARCA');

        $validator
            ->scalar('ESPECIFICACIONES')
            ->maxLength('ESPECIFICACIONES', 200)
            ->allowEmptyString('ESPECIFICACIONES');

        $validator
            ->allowEmptyString('OPERARIOS_IDUSUARIO');

        return $validator;
    }
}
