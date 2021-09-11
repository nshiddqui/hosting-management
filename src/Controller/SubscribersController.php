<?php

declare(strict_types=1);

namespace App\Controller;

/**
 * Subscribers Controller
 *
 * @property \App\Model\Table\SubscribersTable $Subscribers
 * @method \App\Model\Entity\Subscriber[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SubscribersController extends AppController {
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index() {
        $subscriber = $this->Subscribers->newEmptyEntity();
        if ($this->request->is('post')) {
            $subscriber = $this->Subscribers->patchEntity($subscriber, $this->request->getData() + ['ip_address' => $this->request->clientIp()]);
            if ($this->Subscribers->save($subscriber)) {
                $this->Flash->success(__('Thanks for subscribing to our newsletter.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The newsletter subscrFiption could not be send. Please, try again.'));
        }
        $this->viewBuilder()->setLayout('public');
        $this->set(compact('subscriber'));
    }
}
