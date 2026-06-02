<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreApplicationRequest;
use App\Models\Application;

class ApplicationController extends Controller
{
    public function create()
    {
        return view('apply');
    }

    public function store(StoreApplicationRequest $request)
    {
        $data = $request->validated();

        // information_verified is system-controlled; no approval flow is requested.
        // We'll default to false until you choose otherwise.
        $data['information_verified'] = false;

        $application = Application::create($data);

        return redirect()->route('apply.success', ['id' => $application->id]);
    }

    public function success()
    {
        return view('success');
    }
}

