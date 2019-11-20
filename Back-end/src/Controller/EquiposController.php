<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Datasource\ConnectionManager;

/**
 * Equipos Controller
 *
 *
 * @method \App\Model\Entity\Equipo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EquiposController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $query = "SELECT equipo.IDEQUIPO, equipo.NOMBRE, equipo.ESPECIFICACIONES, 
        equiposfacultad.CANTIDAD, facultad.NOMBRE as FACULTADNOMBRE
        FROM equipo INNER JOIN equiposfacultad ON 
        equipo.IDEQUIPO = equiposfacultad.EQUIPO_IDEQUIPO
        INNER JOIN facultad ON 
        equiposfacultad.FACULTAD_IDFACULTAD = facultad.IDFACULTAD";

        if ($this->request->is('get')){
            $idFacultad = $this->request->query('idFacultad');
            if ($idFacultad)
                $query = $query ." WHERE facultad.IDFACULTAD = $idFacultad";
        }
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
     * View method
     *
     * @param string|null $id Equipo id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $equipo = $this->Equipos->get($id, [
            'contain' => []
        ]);

        $this->set('equipo', $equipo);
    }
     /**
     * Delete method
     *
     * @param string|null 
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function eliminar()
    {
        $this->loadModel('Equipo');
        if ($this->request->is('get')) {
            $idEquipo =  $this->request->query('idEquipo');
            $query = "DELETE FROM equipo WHERE equipo.IDEQUIPO= $idEquipo";
            $connection = ConnectionManager::get('default');
            $result = $connection->execute( $query );

            if($result){
                $query = "DELETE FROM equiposfacultad WHERE equiposfacultad.EQUIPO_IDEQUIPO = $idEquipo";
                $result2 = $connection->execute( $query );
                if($result2) {
                    $success = true;
                    $this->set(compact('success','result', 'result2'));
                } else {
                    $this->set(compact('success','result'));                
                }
                
            }else{
                $success = false;
                $this->set(compact('success'));
            }
        }
    }
    /**
     * Obtener equipos
     */
    public function obtener(){
        $this->loadModel('Equipo');
        if ($this->request->is('get')) {
            $ididEquipo =  $this->request->query('idEquipo');

            $query = "SELECT equipo.IDEQUIPO, equipo.NOMBRE, equipo.ESPECIFICACIONES, 
                             equiposfacultad.CANTIDAD, facultad.NOMBRE
                      FROM equipo INNER JOIN equiposfacultad ON 
                             equipo.IDEQUIPO = equiposfacultad.EQUIPO_IDEQUIPO
                             equiposfacultad INNER JOIN facultad ON 
                             equiposfacultad.IDEQUIPOSFACULTAD = facultad.IDFACULTAD";

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
   /**
    * Crear equipos
    */
    public function crear() {
        $data = $this->request->data;
        $this->loadModel('Equipo');
        $this->loadModel('Facultad');
        $this->loadModel('Equiposfacultad');
        $equipo = $this->Equipo->newEntity();
        if ($this->request->is('post')) {
            // creas el equipo
            $nombreEquipo = $data['nombre'];
            $especificaciones = $data['especificaciones'];
            $equipo->NOMBRE = $nombreEquipo;
            $equipo->ESPECIFICACIONES = $especificaciones;
            // obtener el id de la insercion realizada y
            // una vez creado el equipo crear una entry en la tabla intermedia
            // con los siguientes dos valores.
            $idFacultad = $data['facultad'];           
            $cantidad = $data['cantidad'];

            $resultEquipo = $this->Equipo->save($equipo);
            if ($resultEquipo) {
                $equipoFacultad = $this->Equiposfacultad->newEntity();
                $equipoFacultad->CANTIDAD = $cantidad;
                $equipoFacultad->EQUIPO_IDEQUIPO = $resultEquipo->IDEQUIPO;
                $equipoFacultad->FACULTAD_IDFACULTAD = $idFacultad;
                $resultEquipoFacultad = $this->Equiposfacultad->save($equipoFacultad);
                if ($resultEquipoFacultad) {
                    $success = true;
                    $this->set(compact('success','resultEquipo', 'resultEquipoFacultad'));
                }else {
                    $success = false;
                    $errors = $usuario->getErrors();
                    $this->set(compact('success','errors'));
                }
            } else {
                $success = false;
                $errors = $idEquipo->getErrors();
                $this->set(compact('success', 'errors'));
            }
    
        }

    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $equipo = $this->Equipos->newEntity();
        if ($this->request->is('post')) {
            $equipo = $this->Equipos->patchEntity($equipo, $this->request->getData());
            if ($this->Equipos->save($equipo)) {
                $this->Flash->success(__('The equipo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The equipo could not be saved. Please, try again.'));
        }
        $this->set(compact('equipo'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Equipo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $equipo = $this->Equipos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $equipo = $this->Equipos->patchEntity($equipo, $this->request->getData());
            if ($this->Equipos->save($equipo)) {
                $this->Flash->success(__('The equipo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The equipo could not be saved. Please, try again.'));
        }
        $this->set(compact('equipo'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Equipo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $equipo = $this->Equipos->get($id);
        if ($this->Equipos->delete($equipo)) {
            $this->Flash->success(__('The equipo has been deleted.'));
        } else {
            $this->Flash->error(__('The equipo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
