<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\FishModel;

class Fish extends Controller
{

    
        
        
        
    


    public function view()
    {
        
        $model = new FishModel();

        $data['fish'] = $model->getFish();

        if (empty($data['fish'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('A megadott oldal nem található.');
        }



        echo view('templates/header', $data);
        echo view('fish/view', $data);
        echo view('templates/footer', $data);
    }

    public function create()
    {
        $model = new FishModel();

        if ($this->request->getMethod() === 'post' && $this->validate([
            'name' => 'required|min_length[3]|max_length[80]',
            'price'  => 'required|numeric'
        ])) {
            $model->save([
                'name' => $this->request->getPost('name'),
                'price'  => $this->request->getPost('price'),
                'db' => 0,
            ]);
            echo view('templates/header');
            echo view('fish/success', ['msg' => 'Sikeresen Hozzáadva!']);
            echo view('templates/footer');
        } else {
            echo view('templates/header');
            echo view('fish/create');
            echo view('templates/footer');
        }
    }

    public function edit($id = null)
    {
        $model = new FishModel();

        $data['fish'] = $model->getFish($id);

        if ($this->request->getMethod() === 'post' && $this->validate([
            'name' => 'required|min_length[3]|max_length[80]',
            'price'  => 'required|numeric'
        ])) {
            $model->update($id, [
                'name' => $this->request->getPost('name'),
                'price'  => $this->request->getPost('price'),
            ]);

            echo view('templates/header');
            echo view('fish/success', ['msg' => 'Sikeresen módosítva!']);
            echo view('templates/footer');
        } else {
            echo view('templates/header');
            echo view('fish/edit', $data);
            echo view('templates/footer');
        }
    }

    public function delete($id = null)
    {
        $model = new FishModel();

        $model->delete($id);

        echo view('templates/header');
        echo view('fish/success', ['msg' => 'Sikeresen törölve!']);
        echo view('templates/footer');
    }
}
