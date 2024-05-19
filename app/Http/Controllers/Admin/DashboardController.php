<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\UserController;

class DashboardController extends Controller
{

    public function index()
    {
        $userController = new UserController;
        $users = $userController->getUsers();
        return view('admin.dashboard', compact('users'));
    }
    
}
