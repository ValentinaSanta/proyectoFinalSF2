<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SolicitudFixture
 */
class SolicitudFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'solicitud';
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'IDSOLICITUD' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'FECHASOLICITUD' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'FECHADEUSO' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'HORAINICIO' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'HORAFIN' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'ESTADO' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'EQUIPO_IDEQUIPO' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'LUGAR' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'USUARIO_IDUSUARIO' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['IDSOLICITUD'], 'length' => []],
            'SOLICITUD_PK' => ['type' => 'unique', 'columns' => ['IDSOLICITUD'], 'length' => []],
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
                'IDSOLICITUD' => 1,
                'FECHASOLICITUD' => '2019-11-10',
                'FECHADEUSO' => '2019-11-10',
                'HORAINICIO' => '2019-11-10',
                'HORAFIN' => '2019-11-10',
                'ESTADO' => 'Lorem ipsum dolor sit amet',
                'EQUIPO_IDEQUIPO' => 1,
                'LUGAR' => 'Lorem ipsum dolor sit amet',
                'USUARIO_IDUSUARIO' => 1
            ],
        ];
        parent::init();
    }
}
