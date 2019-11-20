<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Persona Entity
 *
 * @property int $IDUSUARIO
 * @property int|null $TELEFONO
 * @property string|null $NOMBRE
 * @property string|null $APELLIDO
 * @property string|null $NOMBREUSUARIO
 * @property int|null $CLAVE
 */
class Persona extends Entity
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
        'TELEFONO' => true,
        'NOMBRE' => true,
        'APELLIDO' => true,
        'NOMBREUSUARIO' => true,
        'CLAVE' => true
    ];
}
