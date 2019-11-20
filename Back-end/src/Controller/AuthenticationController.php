<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Datasource\ConnectionManager;

/**
 * Authentication Controller
 *
 *
 * @method \App\Model\Entity\Authentication[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AuthenticationController extends AppController
{
    /**
     * Funcion encargada de validar el login de
     * un usuario, usuario y contraseña existente
     * @autor Valentina santa osorio
     * @return \Cake\Http\Response|null
     */
    public function login()
    {   //obtiene los datos desde el controlador js 
        $dato = $this->request->getData();
        $userName = $dato['userName'];
        $password = $dato['password'];

        $query = 'SELECT PERSONA_IDUSUARIO AS ID,
         NOMBREUSUARIO AS USERNAME,
         CARGO_IDCARGO AS CARGO FROM persona INNER JOIN usuario
         ON persona.IDUSUARIO = usuario.PERSONA_IDUSUARIO 
         WHERE (CLAVE = "'.$password.'" AND NOMBREUSUARIO = "'.$userName.'") LIMIT 1';

        //print $query;

        $connection = ConnectionManager::get('default');
        $loginResult = $connection->execute($query)->fetchAll('assoc');

        print json_encode(['loginResult'=> $loginResult]);

        exit();

    }
}
