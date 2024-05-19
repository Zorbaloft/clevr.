<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
  public function __invoke()
  {

    return view(
      'student.dashboard'
    );
  }

  
  
}
