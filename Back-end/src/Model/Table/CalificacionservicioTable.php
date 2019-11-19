<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Calificacionservicio Model
 *
 * @method \App\Model\Entity\Calificacionservicio get($primaryKey, $options = [])
 * @method \App\Model\Entity\Calificacionservicio newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Calificacionservicio[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Calificacionservicio|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Calificacionservicio saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Calificacionservicio patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Calificacionservicio[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Calificacionservicio findOrCreate($search, callable $callback = null, $options = [])
 */
class CalificacionservicioTable extends Table
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

        $this->setTable('calificacionservicio');
        $this->setDisplayField('IDCALIFICACION');
        $this->setPrimaryKey('IDCALIFICACION');
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
            ->allowEmptyString('IDCALIFICACION', null, 'create');

        $validator
            ->scalar('COMENTARIOS')
            ->maxLength('COMENTARIOS', 200)
            ->allowEmptyString('COMENTARIOS');

        $validator
            ->allowEmptyString('CALIFICACION');

        $validator
            ->allowEmptyString('USUARIO_IDUSUARIO');

        $validator
            ->allowEmptyString('SOLICITUD_IDSOLICITUD');

        return $validator;
    }
}
