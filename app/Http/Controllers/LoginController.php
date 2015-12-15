<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use View;

class LoginController extends Controller
{
    public function login()
    {
        return View::make('captura/produccion');
    }
}
