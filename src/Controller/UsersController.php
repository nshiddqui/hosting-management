<?php

declare(strict_types=1);

namespace App\Controller;

use Cake\Event\EventInterface;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController {

    public function beforeFilter(EventInterface $event) {
        $this->Auth->allow(['register']);
        parent::beforeFilter($event);
    }

    public function register() {
        return $this->redirect('https://portal.shelty.in/login');
        if ($this->Auth->user()) {
            $this->Flash->error(__('You are already logged in, please logout for registered with new account.'));
            return $this->redirect('/dashboard');
        }
        $user = $this->Users->newEmptyEntity();
        if ($this->request->is('post')) {
            if (!empty($this->request->getData('password'))) {
                $user = $this->Users->patchEntity($user, $this->request->getData() + ['ip_address' => $this->request->clientIp()]);
                if ($this->Users->save($user)) {
                    $this->Flash->success(__('Thank you for registered with us, please login here to continue.'));

                    return $this->redirect(['action' => 'login']);
                }
                $this->Flash->error(__('Unable to registerd you. Please, check your details.'));
            }
        }
        $this->set(compact('user'));
        $this->viewBuilder()->setLayout('login');
    }

    public function login() {
        return $this->redirect('https://portal.shelty.in/login');
        $user = [];
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            } else {
                $this->Flash->error(__('Username or password is incorrect'));
            }
        }
        $this->set(compact('user'));
        $this->viewBuilder()->setLayout('login');
    }
}
