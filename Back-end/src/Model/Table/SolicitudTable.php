<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Solicitud Model
 *
 * @method \App\Model\Entity\Solicitud get($primaryKey, $options = [])
 * @method \App\Model\Entity\Solicitud newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Solicitud[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Solicitud|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Solicitud saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Solicitud patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Solicitud[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Solicitud findOrCreate($search, callable $callback = null, $options = [])
 */
class SolicitudTable extends Table
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

        $this->setTable('solicitud');
        $this->setDisplayField('IDSOLICITUD');
        $this->setPrimaryKey('IDSOLICITUD');
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
            ->allowEmptyString('IDSOLICITUD', null, 'create')
            ->add('IDSOLICITUD', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->date('FECHASOLICITUD')
            ->allowEmptyDate('FECHASOLICITUD');

        $validator
            ->date('FECHADEUSO')
            ->allowEmptyDate('FECHADEUSO');

        $validator
            ->date('HORAINICIO')
            ->allowEmptyDate('HORAINICIO');

        $validator
            ->date('HORAFIN')
            ->allowEmptyDate('HORAFIN');

        $validator
            ->scalar('ESTADO')
            ->maxLength('ESTADO', 30)
            ->allowEmptyString('ESTADO');

        $validator
            ->allowEmptyString('EQUIPO_IDEQUIPO');

        $validator
            ->scalar('LUGAR')
            ->maxLength('LUGAR', 100)
            ->allowEmptyString('LUGAR');

        $validator
            ->allowEmptyString('USUARIO_IDUSUARIO');

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
        $rules->add($rules->isUnique(['IDSOLICITUD']));

        return $rules;
    }
}
