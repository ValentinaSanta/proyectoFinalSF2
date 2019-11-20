<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Recepcionequipo Entity
 *
 * @property int $IDRECEPCION
 * @property string|null $ESTADOEQUIPO
 * @property string|null $REPORTE
 * @property int|null $CALIFICACION
 * @property string|null $COMENTARIOS
 * @property int|null $OPERARIOS_IDUSUARIO
 * @property int|null $SOLICITUD_IDSOLICITUD
 * @property \Cake\I18n\FrozenDate|null $FECHAENTREGA
 * @property \Cake\I18n\FrozenDate|null $HORAENTREGA
 */
class Recepcionequipo extends Entity
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
        'ESTADOEQUIPO' => true,
        'REPORTE' => true,
        'CALIFICACION' => true,
        'COMENTARIOS' => true,
        'OPERARIOS_IDUSUARIO' => true,
        'SOLICITUD_IDSOLICITUD' => true,
        'FECHAENTREGA' => true,
        'HORAENTREGA' => true
    ];
}
