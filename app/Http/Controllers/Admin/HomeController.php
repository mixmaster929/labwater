<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Models\Wellsite;
use App\Models\WellsiteRealData;
use Gate;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class HomeController
{
    public function index(Request $request)
    {
        // $user_id = Auth::user()->id;
        
        // $wellsites = Wellsite::with('users')->whereHas('users', function($query) use($user_id){ 
        //     return $query->where('id', $user_id);
        // })->get();

        // $wellsite = $wellsites[0];

        // $data = WellsiteRealData::where('wellsite_id', $wellsite->id)->get();

        // if(isset($request->id)){
        //     $wellsite = Wellsite::where('id', $request->id)->first();
        //     $data = WellsiteRealData::where('wellsite_id', $wellsite->id)->get();
        // }

        // return view('admin.home', compact('wellsites', 'wellsite', 'data'));

        return view('admin.home');
    }
}
