<?php

namespace App\Controllers;

use \App\Models\orangModel;
use CodeIgniter\HTTP\Request;

class Orang extends BaseController
{
    protected $orangModel;
    public function __construct()
    {
        $this->orangModel = new OrangModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Daftar Orang',
            'orang' => $this->orangModel->findall()
        ];
        return view('orang/index', $data);
    }
}
