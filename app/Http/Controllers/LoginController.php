<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends \App\Http\Controllers\Auth\LoginController
{
    public function username()
    {
        return 'login';
    }
}
