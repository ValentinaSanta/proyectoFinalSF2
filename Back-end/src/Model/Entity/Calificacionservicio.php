<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Calificacionservicio Entity
 *
 * @property int $IDCALIFICACION
 * @property string|null $COMENTARIOS
 * @property int|null $CALIFICACION
 * @property int|null $USUARIO_IDUSUARIO
 * @property int|null $SOLICITUD_IDSOLICITUD
 */
class Calificacionservicio extends Entity
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
        'COMENTARIOS' => true,
        'CALIFICACION' => true,
        'USUARIO_IDUSUARIO' => true,
        'SOLICITUD_IDSOLICITUD' => true
    ];
}
