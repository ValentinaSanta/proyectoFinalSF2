<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Calificacionusuario Entity
 *
 * @property int $IDCALIFICACION
 * @property int|null $CALIFICACION
 * @property int|null $OPERARIOS_IDUSUARIO
 * @property int|null $USUARIO_IDUSUARIO
 * @property string|null $COMENTARIOS
 */
class Calificacionusuario extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'CALIFICACION' => true,
        'OPERARIOS_IDUSUARIO' => true,
        'USUARIO_IDUSUARIO' => true,
        'COMENTARIOS' => true
    ];
}
