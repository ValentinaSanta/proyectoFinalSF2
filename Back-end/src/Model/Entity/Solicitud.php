<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Solicitud Entity
 *
 * @property int $IDSOLICITUD
 * @property \Cake\I18n\FrozenDate|null $FECHASOLICITUD
 * @property \Cake\I18n\FrozenDate|null $FECHADEUSO
 * @property \Cake\I18n\FrozenDate|null $HORAINICIO
 * @property \Cake\I18n\FrozenDate|null $HORAFIN
 * @property string|null $ESTADO
 * @property int|null $EQUIPO_IDEQUIPO
 * @property string|null $LUGAR
 * @property int|null $USUARIO_IDUSUARIO
 */
class Solicitud extends Entity
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
        'FECHASOLICITUD' => true,
        'FECHADEUSO' => true,
        'HORAINICIO' => true,
        'HORAFIN' => true,
        'ESTADO' => true,
        'EQUIPO_IDEQUIPO' => true,
        'LUGAR' => true,
        'USUARIO_IDUSUARIO' => true
    ];
}
