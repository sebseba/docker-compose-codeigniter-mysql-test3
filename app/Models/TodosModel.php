<?php

namespace App\Models;

use CodeIgniter\Model;

class TodosModel extends Model
{
    protected $table            = 'todos';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['title','description'];

}
