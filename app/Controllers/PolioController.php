<?php

namespace App\Controllers;

use App\Models\PolioModel;

class PolioController extends BaseController {

    protected $polioModel;

    public function index()
    {
        $data = ['profiles']; 
        echo view('/layout/polio', $data);
    }

   
}
?>
