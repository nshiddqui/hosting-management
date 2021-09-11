<?php

declare(strict_types=1);

namespace App\Controller;

use Cake\Event\EventInterface;

/**
 * Contact Controller
 *
 * @property \App\Model\Table\ContactTable $Contact
 * @method \App\Model\Entity\Contact[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ContactController extends AppController {

    public function beforeFilter(EventInterface $event) {
        $this->Auth->allow();
        parent::beforeFilter($event);
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index() {
        $contact = $this->Contact->newEmptyEntity();
        if ($this->request->is('post')) {
            $contact = $this->Contact->patchEntity($contact, $this->request->getData() + ['ip_address' => $this->request->clientIp()]);
            if ($this->Contact->save($contact)) {
                $this->Flash->success(__('Thank you for contacting us. You are very important to us, all information received will always remain confidential. We will contact you as soon as we review your message.'));

                return $this->redirect($this->referer());
            }
            $this->Flash->error(__('The query could not be send. Please, try again.'));
        }
        $this->set(compact('contact'));
        $this->viewBuilder()->setLayout('public');
    }
}
