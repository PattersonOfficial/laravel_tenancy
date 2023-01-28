<?php

namespace App\Http\Controllers\Tenancy;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterTenantRequest;
use App\Models\Tenant;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

class RegisterTenantController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }


    public function store(RegisterTenantRequest  $request) {
        $tenant = Tenant::create($request->validated());
     }
}
