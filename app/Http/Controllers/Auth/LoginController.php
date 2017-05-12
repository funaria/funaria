<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use View;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showLoginForm() {
        return View::make("auth.login");
    }
}
