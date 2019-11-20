<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Recepcionequipo Model
 *
 * @method \App\Model\Entity\Recepcionequipo get($primaryKey, $options = [])
 * @method \App\Model\Entity\Recepcionequipo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Recepcionequipo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Recepcionequipo|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Recepcionequipo saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Recepcionequipo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Recepcionequipo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Recepcionequipo findOrCreate($search, callable $callback = null, $options = [])
 */
class RecepcionequipoTable extends Table
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

        $this->setTable('recepcionequipo');
        $this->setDisplayField('IDRECEPCION');
        $this->setPrimaryKey('IDRECEPCION');
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
            ->allowEmptyString('IDRECEPCION', null, 'create');

        $validator
            ->scalar('ESTADOEQUIPO')
            ->maxLength('ESTADOEQUIPO', 100)
            ->allowEmptyString('ESTADOEQUIPO');

        $validator
            ->scalar('REPORTE')
            ->maxLength('REPORTE', 200)
            ->allowEmptyString('REPORTE');

        $validator
            ->allowEmptyString('CALIFICACION');

        $validator
            ->scalar('COMENTARIOS')
            ->maxLength('COMENTARIOS', 200)
            ->allowEmptyString('COMENTARIOS');

        $validator
            ->allowEmptyString('OPERARIOS_IDUSUARIO');

        $validator
            ->allowEmptyString('SOLICITUD_IDSOLICITUD');

        $validator
            ->date('FECHAENTREGA')
            ->allowEmptyDate('FECHAENTREGA');

        $validator
            ->date('HORAENTREGA')
            ->allowEmptyDate('HORAENTREGA');

        return $validator;
    }
}
