<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Product;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController
{
    public function index()
    {
        $company = [];
        return view('layouts.company', compact('company'));
    }

    public function subdomainIndex($subdomain)
    {
        $company = Company::where("name", $subdomain)->firstOrFail();

        return view('company', compact('company'));
    }
}
