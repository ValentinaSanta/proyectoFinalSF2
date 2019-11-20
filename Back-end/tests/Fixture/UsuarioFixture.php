<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsuarioFixture
 */
class UsuarioFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'usuario';
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'PERSONA_IDUSUARIO' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'ESTADO' => ['type' => 'binary', 'length' => 1, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'CARGO_IDCARGO' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['PERSONA_IDUSUARIO', 'CARGO_IDCARGO'], 'length' => []],
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
                'PERSONA_IDUSUARIO' => 1,
                'ESTADO' => 'L',
                'CARGO_IDCARGO' => 1
            ],
        ];
        parent::init();
    }
}
