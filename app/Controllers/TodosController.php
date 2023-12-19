<?php

namespace App\Controllers;

use App\Models\TodosModel;
use CodeIgniter\RESTful\ResourceController;

class TodosController extends ResourceController
{   
    protected $todosModel;

    public function __construct()
    {
        $this->todosModel=new TodosModel();
    }

    public function add()
    {
        $title=$this->request->getVar('title');
        $description=$this->request->getVar('description');

        $data=[
            'title'=>$title,
            'description'=>$description
        ];

        $result= $this->todosModel->insert($data);

        if($result){
            return $this->respondCreated(['message'=>'ekleme işlemi başarılı.']);
        }

        else {
            return $this->respond(['message'=>'ekleme işlemi başarısız.'],400);
        }
    }
}
