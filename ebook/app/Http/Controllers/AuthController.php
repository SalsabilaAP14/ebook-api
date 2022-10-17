<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return [
            'NIS'   => 3103120206,
            'Nama'  => 'Salsabila Amanda Putri',
            'Phone' => '085842351845',
            'Class' => 'XII RPL 6'
        ];
    }
}
