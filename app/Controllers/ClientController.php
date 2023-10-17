<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ClientController extends BaseController
{
    public function index()
    {
        $clientmodel = new \App\Models\ClientModel();
        $data = $clientmodel->findAll();

        return view('client/index', ['clients' => $data]);
    }
}
