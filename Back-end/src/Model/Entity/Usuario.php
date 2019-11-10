<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Usuario Entity
 *
 * @property int|null $PERSONA_IDUSUARIO
 * @property string|resource|null $ESTADO
 * @property int|null $CARGO_IDCARGO
 */
class Usuario extends Entity
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
        'PERSONA_IDUSUARIO' => true,
        'ESTADO' => true,
        'CARGO_IDCARGO' => true
    ];
}
