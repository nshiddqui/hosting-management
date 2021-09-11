<?php

declare(strict_types=1);

namespace App\Controller;

use Cake\Event\EventInterface;
use Cake\Http\Client;
use Cake\Routing\Router;

/**
 * Home Controller
 *
 * @method \App\Model\Entity\Home[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class HomeController extends AppController {

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
        $this->viewBuilder()->setLayout('public');
    }

    public function webHosting() {
        $this->loadModel('Faqs');
        $this->loadModel('Pricing');
        $faqs = $this->Faqs->getTopFiveFaq();
        $pricing = $this->Pricing->getPricing();
        $this->set(compact('faqs', 'pricing'));
        $this->viewBuilder()->setLayout('public');
    }

    public function about() {
        $this->viewBuilder()->setLayout('public');
    }

    public function analysisDomain() {
        $response = [];
        $domain = $this->request->getQuery('domain');
        if (filter_var($domain, FILTER_VALIDATE_URL)) {
            $http = new Client();
            $response = $http->post('https://lighthouse-dot-webdotdevsite.appspot.com/lh/newaudit', json_encode([
                'url' => $domain,
                'replace' => true,
                'save' => false
            ]), ['type' => 'json', 'timeout' => '40'])->getJson();
        }
        $this->set(compact('domain', 'response'));
        $this->viewBuilder()->setLayout('public');
    }

    public function privacyPolicy() {
        $this->viewBuilder()->setLayout('public');
    }

    public function refundPolicy() {
        $this->viewBuilder()->setLayout('public');
    }

    public function termsOfUse() {
        $this->viewBuilder()->setLayout('public');
    }
}
