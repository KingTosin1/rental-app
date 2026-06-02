<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class AdminUnlockController extends Controller
{
    public function showForm()
    {
        return view('admin.unlock');
    }
}

