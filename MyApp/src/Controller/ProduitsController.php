<?php
namespace App\Controller;
use Cake\ORM\Locator\LocatorAwareTrait;

    class ProduitsController extends AppController
    {
        public function index()
        {
            $this->loadComponent('Paginator');
            $produits = $this->Paginator->paginate($this->Produits->find());
            $this->set(compact('produits'));
        }

        public function add()
        {
            $produit = $this->Produits->newEmptyEntity();
            if ($this->request->is('post')) {
                $produit = $this->Produits->patchEntity($produit, $this->request->getData());
                if ($this->Produits->save($produit)) {
                    $this->Flash->success(__('Produit créé !'));
                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('Erreur création de produit.'));
            }
            $this->set(compact('produit'));
        }
    }