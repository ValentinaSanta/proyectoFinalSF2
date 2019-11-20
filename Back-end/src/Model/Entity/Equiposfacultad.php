<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Equiposfacultad Entity
 *
 * @property int $IDEQUIPOSFACULTAD
 * @property int|null $CANTIDAD
 * @property int|null $EQUIPO_IDEQUIPO
 * @property int|null $FACULTAD_IDFACULTAD
 */
class Equiposfacultad extends Entity
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
        'CANTIDAD' => true,
        'EQUIPO_IDEQUIPO' => true,
        'FACULTAD_IDFACULTAD' => true
    ];
}
