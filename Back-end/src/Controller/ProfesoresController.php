<?php
namespace App\Controller;

use App\Controller\AppController;

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
        $profesores = $this->paginate($this->Profesores);

        $this->set(compact('profesores'));
        $respuesta = array(
            "mensaje" => "holamundo"
        );

        echo json_encode($profesores);
        exit();
    }

    public function crear()
    {
        //dato que llega de la interfaz 
        $dato = $this->request->getData();
        $nombre = $dato['nombre'];
        $cedula = $dato['cedula'];
        $profesore = $this->Profesores->newEntity();
        $profesore->nombre = $nombre;
        $profesore->cedula = $cedula;
        if ($this->Profesores->save($profesore)) {
            //muestra dato
            echo json_encode($dato);
        } else 
            echo "error";

        
        exit();

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

    /**
     * Delete method
     *
     * @param string|null $id Profesore id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $profesore = $this->Profesores->get($id);
        if ($this->Profesores->delete($profesore)) {
            $this->Flash->success(__('The profesore has been deleted.'));
        } else {
            $this->Flash->error(__('The profesore could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
