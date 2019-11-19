<?php
namespace App\Controller;

use App\Controller\AppController;

use Cake\Datasource\ConnectionManager;
/**
 * Profesores Controller
 *
 *
 * @method \App\Model\Entity\Profesore[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProfesoresController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $query = "SELECT persona.NOMBRE, persona.APELLIDO, 
                         persona.TELEFONO, persona.IDUSUARIO, 
                         usuario.CARGO_IDCARGO
                  FROM persona INNER JOIN usuario ON 
                         persona.IDUSUARIO = usuario.PERSONA_IDUSUARIO
                  WHERE CARGO_IDCARGO = 1";

        $connection = ConnectionManager::get('default');
        $result = $connection->execute( $query )->fetchAll('assoc');

        if($result){
            $success = true;
            $this->set(compact('success','result'));
        }else{
            $success = false;
            $this->set(compact('success'));
        }
    }

    /**
     * Delete method
     *
     * @param string|null $id Profesore id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function eliminar()
    {
        $this->loadModel('Persona');
        if ($this->request->is('get')) {
            $idPersona =  $this->request->query('idUsuario');
            $query = "DELETE FROM persona WHERE IDUSUARIO= $idPersona";
            $connection = ConnectionManager::get('default');
            $result = $connection->execute( $query );

            if($result){
                $success = true;
                $this->set(compact('success','result'));
            }else{
                $success = false;
                $this->set(compact('success'));
            }
        }
    }

    public function obtener(){
        $this->loadModel('Persona');
        if ($this->request->is('get')) {
            $idPersona =  $this->request->query('idUsuario');
            $query = "SELECT persona.NOMBRE, persona.APELLIDO, 
                         persona.TELEFONO, persona.IDUSUARIO, 
                         usuario.CARGO_IDCARGO, persona.CLAVE,
                         persona.NOMBREUSUARIO
                     FROM persona INNER JOIN usuario ON 
                         persona.IDUSUARIO = usuario.PERSONA_IDUSUARIO
                     WHERE CARGO_IDCARGO = 1 AND IDUSUARIO = $idPersona";

            $connection = ConnectionManager::get('default');
            $result = $connection->execute( $query )->fetchAll('assoc');

            if($result){
                $success = true;
                if(sizeof($result) > 0)
                    $result =  $result[0];
                $this->set(compact('success','result'));
            }else{
                $success = false;
                $this->set(compact('success'));
            }
        }
    }
    
    public function crear() {
        $data = $this->request->data;

        $this->loadModel('Persona');
        $this->loadModel('Usuario');
        $persona = $this->Persona->newEntity();
        if ($this->request->is('post')) {
            $persona->IDUSUARIO = $data['idUsuario'];
            $persona->NOMBRE = $data['nombre'];
            $persona->APELLIDO = $data['apellido'];
            $persona->TELEFONO = $data['telefono'];

            $resultPersona = $this->Persona->save($persona);
            if ($resultPersona) {
                $usuario = $this->Usuario->newEntity();
                $usuario->ESTADO = 1;
                $usuario->CARGO_IDCARGO = 1;
                $usuario->PERSONA_IDUSUARIO = $persona->IDUSUARIO;
                $resultUsuario = $this->Usuario->save($usuario);
                if ($resultUsuario) {
                    $success = true;
                    $this->set(compact('success','persona'));
                }else {
                    $success = false;
                    $errors = $usuario->getErrors();
                    $this->set(compact('success','errors'));
                }
            } else {
                $success = false;
                $errors = $persona->getErrors();
                $this->set(compact('success', 'errors'));
            }
    
        }

    }

    /**
     * View method
     *
     * @param string|null $id Profesore id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $profesore = $this->Profesores->get($id, [
            'contain' => []
        ]);

        $this->set('profesore', $profesore);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $profesore = $this->Profesores->newEntity();
        if ($this->request->is('post')) {
            $profesore = $this->Profesores->patchEntity($profesore, $this->request->getData());
            if ($this->Profesores->save($profesore)) {
                $this->Flash->success(__('The profesore has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The profesore could not be saved. Please, try again.'));
        }
        $this->set(compact('profesore'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Profesore id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $profesore = $this->Profesores->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $profesore = $this->Profesores->patchEntity($profesore, $this->request->getData());
            if ($this->Profesores->save($profesore)) {
                $this->Flash->success(__('The profesore has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The profesore could not be saved. Please, try again.'));
        }
        $this->set(compact('profesore'));
    }

}
