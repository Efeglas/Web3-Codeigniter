<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\MovementModel;
use App\Models\conn_moveModel;
use App\Models\FishModel;

class Movement extends Controller
{

    public function in()
    {
        $model = new FishModel();
        $movementModel = new MovementModel();
        $conn_moveModel = new conn_moveModel();
        $lastId = null;

        $data['fish'] = $model->getFish();

        if (empty($data['fish'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('A megadott oldal nem található.');
        }

        if ($this->request->getMethod() === 'post' ) {

            $posts = $this->request->getPost();
            
           $movementModel->save([
                'code' => 1,
            ]);
            $lastId = $movementModel->insertID();
            
            foreach ($posts as $key => $value) {
                //var_dump($value);
                if ($key == "submit") {
                    continue;
                }
                $exploded = explode("-", $key);
                $fid = $exploded[count($exploded) - 1];
                $fishCount = $model->getFish($fid)["db"];
                //var_dump($fishCount);
                if ($value > 0) {
                    
                    $model->update($fid, ['db' => $fishCount + $value]);

                    $conn_moveModel->save([
                        'mid' => $lastId,
                        'fid' => $fid,
                        'db' => $value
                    ]);
                }
            }
            /* $model->save([
                'name' => $this->request->getPost('name'),
                'price'  => $this->request->getPost('price'),
                'db' => 0,
            ]); */
            echo view('templates/header');
            echo view('fish/success', ['msg' => 'Sikeresen bevételezve!']);
            echo view('templates/footer');
            
        } else {
           
            echo view('templates/header');
            echo view('movement/in', $data);
            echo view('templates/footer');
        }

    }

    public function out()
    {
        $model = new FishModel();
        $movementModel = new MovementModel();
        $conn_moveModel = new conn_moveModel();
        $lastId = null;

        $data['fish'] = $model->getFish();

        if (empty($data['fish'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('A megadott oldal nem található.');
        }

        if ($this->request->getMethod() === 'post' ) {

            $posts = $this->request->getPost();
            
           $movementModel->save([
                'code' => 2,
            ]);
            $lastId = $movementModel->insertID();
            
            foreach ($posts as $key => $value) {
                //var_dump($value);
                if ($key == "submit") {
                    continue;
                }
                $exploded = explode("-", $key);
                $fid = $exploded[count($exploded) - 1];
                $fishCount = $model->getFish($fid)["db"];
                //var_dump($fishCount);
                if ($value > 0) {
                    
                    $model->update($fid, ['db' => $fishCount - $value]);

                    $conn_moveModel->save([
                        'mid' => $lastId,
                        'fid' => $fid,
                        'db' => $value
                    ]);
                }
            }
            /* $model->save([
                'name' => $this->request->getPost('name'),
                'price'  => $this->request->getPost('price'),
                'db' => 0,
            ]); */
            echo view('templates/header');
            echo view('fish/success', ['msg' => 'Sikeresen eladás!']);
            echo view('templates/footer');
            
        } else {
           
            echo view('templates/header');
            echo view('movement/out', $data);
            echo view('templates/footer');
        }
    }
}
