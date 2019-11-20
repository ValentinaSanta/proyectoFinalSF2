<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CalificacionusuarioFixture
 */
class CalificacionusuarioFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'calificacionusuario';
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'IDCALIFICACION' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'CALIFICACION' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'OPERARIOS_IDUSUARIO' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'USUARIO_IDUSUARIO' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'COMENTARIOS' => ['type' => 'string', 'length' => 200, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['IDCALIFICACION'], 'length' => []],
            'CALIFICACIONUSUARIO_PK' => ['type' => 'unique', 'columns' => ['IDCALIFICACION'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd
    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'IDCALIFICACION' => 1,
                'CALIFICACION' => 1,
                'OPERARIOS_IDUSUARIO' => 1,
                'USUARIO_IDUSUARIO' => 1,
                'COMENTARIOS' => 'Lorem ipsum dolor sit amet'
            ],
        ];
        parent::init();
    }
}
