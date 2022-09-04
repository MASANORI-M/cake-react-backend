<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Urls Controller
 *
 * @method \App\Model\Entity\Url[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UrlsController extends AppController
{
    public function initialize(): void
    {
        parent::initialize();
        $this->loadComponent('RequestHandler');
    }

    public function index()
    {
        $urls = $this->Urls->find()
        ->where(['Urls.deleted' => 0])
        ->toArray();

        $this->set([
            'urls' => $urls,
            '_serialize' => ['urls']
        ]);
    }

    public function view($id)
    {
        $url = $this->Urls->get($id);

        $this->set([
            'url' => $url,
            '_serialize' => ['url']
        ]);
    }

    public function add()
    {
        $this->request->allowMethod(['post', 'put']);
        $add_url = $this->Urls->newEntity($this->request->getData());
        if($this->Urls->save($add_url)) {
            $msg = 'SAVED';
        } else {
            $msg = "ERROR";
        }

        $this->set([
            'message' => $msg,
            'add_url' => $add_url,
            '_serialize' => ['add_url']
        ]);
    }

    public function edit($id)
    {
        $this->request->allowMethod(['patch', 'post', 'put']);
        $url = $this->Urls->get($id);
        $edit_url = $this->Urls->patchEntity($url, $this->request->getData());
        if($this->Urls->save($edit_url)) {
            $msg = 'SAVED';
        } else {
            $msg = "ERROR";
        }

        $this->set([
            'message' => $msg,
            'edit_url' => $edit_url,
            '_serialize' => ['edit_url']
        ]);
    }

    public function delete($id)
    {
        $this->request->allowMethod(['patch', 'post', 'put']);
        $url = $this->Urls->get($id);
        $delete_url = $this->Urls->patchEntity($url, ['deleted' => 1]);
        if($this->Urls->save($delete_url)) {
            $msg = 'SAVED';
        } else {
            $msg = "ERROR";
        }

        $this->set([
            'message' => $msg,
            'delete_url' => $delete_url,
            '_serialize' => ['delete_url']
        ]);
    }
}
