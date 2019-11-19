<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Calificacionusuario Model
 *
 * @method \App\Model\Entity\Calificacionusuario get($primaryKey, $options = [])
 * @method \App\Model\Entity\Calificacionusuario newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Calificacionusuario[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Calificacionusuario|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Calificacionusuario saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Calificacionusuario patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Calificacionusuario[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Calificacionusuario findOrCreate($search, callable $callback = null, $options = [])
 */
class CalificacionusuarioTable extends Table
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

        $this->setTable('calificacionusuario');
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
            ->allowEmptyString('IDCALIFICACION', null, 'create')
            ->add('IDCALIFICACION', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->allowEmptyString('CALIFICACION');

        $validator
            ->allowEmptyString('OPERARIOS_IDUSUARIO');

        $validator
            ->allowEmptyString('USUARIO_IDUSUARIO');

        $validator
            ->scalar('COMENTARIOS')
            ->maxLength('COMENTARIOS', 200)
            ->allowEmptyString('COMENTARIOS');

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
        $rules->add($rules->isUnique(['IDCALIFICACION']));

        return $rules;
    }
}
