<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Equipo Entity
 *
 * @property int $IDEQUIPO
 * @property string|null $NOMBRE
 * @property string|null $MARCA
 * @property string|null $ESPECIFICACIONES
 * @property int|null $OPERARIOS_IDUSUARIO
 */
class Equipo extends Entity
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
        'NOMBRE' => true,
        'MARCA' => true,
        'ESPECIFICACIONES' => true,
        'OPERARIOS_IDUSUARIO' => true
    ];
}
