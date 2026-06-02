<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Application;

class ApplicationController extends Controller
{

    public function index()
    {
        $applications = Application::query()->latest()->get();

        return view('admin.applications.index', compact('applications'));
    }

    public function show(int $id)
    {
        $application = Application::findOrFail($id);

        return view('admin.applications.show', compact('application'));
    }
}

