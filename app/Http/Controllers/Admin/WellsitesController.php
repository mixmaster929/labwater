<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Wellsite;
use App\Models\Company;
use Gate;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\WellsiteRealData;


class WellsitesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        abort_if(Gate::denies('product_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $companies = Company::all();
        $company_id = Company::first()->id?? '';
        if(isset($request->id)){
            $wellsites = Wellsite::where('company_id', $request->id)->get();
            $company_id = $request->id;
        } else {
            $wellsites = Wellsite::where('company_id', $company_id)->get();
        }
        
        return view('admin.wellsites.index', compact('wellsites', 'companies', 'company_id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        abort_if(Gate::denies('product_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        if($request->ajax()){
            $data = Wellsite::whereNull('status')->whereNotNull('address')->first();
            return response()->json($data);
        }
        
        $companies = Company::all();
        $wellsite = Wellsite::whereNull('status')->whereNotNull('address')->first();
        
        return view('admin.wellsites.create', compact('companies', 'wellsite'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'address' => 'required',
        ]);

        if (!$validator->fails()) {
            $wellsite = Wellsite::where('address', $request->address)->first();
            $wellsite->update([
                'name' =>       $request->name, 
                'info' =>       $request->info,
                'company_id' => $request->company_id,
                'status' =>     1
            ]);
            return redirect()->route('admin.wellsites.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        abort_if(Gate::denies('product_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        
        $companies = Company::all();
        $wellsite = Wellsite::find($id);

        return view('admin.wellsites.edit', compact('companies', 'wellsite'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'address' => 'required',
        ]);

        if (!$validator->fails()) {
            $wellsite = Wellsite::find($id);
            $wellsite->update([
                'name' =>       $request->name,
                'info' =>       $request->info,
                'company_id' => $request->company_id,
                'status' =>     1
            ]);
            return redirect()->route('admin.wellsites.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        abort_if(Gate::denies('product_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $product = Wellsite::find($id);
        $product->delete();

        return back();
    }

    public function massDestroy(Request $request)
    {
        Wellsite::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }



    public function employeeIndex(Request $request)
    {
        abort_if(Gate::denies('company_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $user_ids = Auth::user()->id;
        $company = Company::where('user_id', $user_ids)->first();

        $wellsites = Wellsite::where('company_id', $company->id)->get();

        $users = User::with('companies')->whereHas('companies', function($query) use($company){ 
            return $query->where('id', $company->id);
        })->get();
        $user_id = 0;
        // $user = $users[0];

        if(isset($request->id)){
            $user_id = $request->id;
            
            if ($user_id != 0) {
                $wellsites = Wellsite::with('users')->whereHas('users', function ($query) use ($user_id) {
                    return $query->where('id', $user_id);
                })->get();
            }
        } 


        return view('admin.wellsites.index', compact('wellsites', 'users', 'user_id'));
    }

    // public function employeeCreate()
    // {
    //     abort_if(Gate::denies('company_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

    //     $roles = Role::where('title', 'Users')->pluck('title', 'id');

    //     return view('admin.users.create', compact('roles'));
    // }

    

    public function employeeStore(Request $request)
    {
        abort_if(Gate::denies('company_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $wellsite = $request->wellsite;
        $value1 = $request->value1;
        $value2 = $request->value2;
        $value3 = $request->value3;
        $value4 = $request->value4;

        $w_site = Wellsite::find($wellsite);
        $w_site->update([
            'value1' => $value1,
            'value2' => $value2,
            'value3' => $value3,
            'value4' => $value4,
        ]);

        return redirect()->route('admin.well_sites.index');
    }

    public function employeeEdit($id)
    {
        abort_if(Gate::denies('company_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $wellsite = Wellsite::find($id);

        return view('admin.wellsites.management', compact('wellsite'));
    }

    public function assignStore(Request $request){
        abort_if(Gate::denies('company_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $wellsite_id = $request->wellsite;
        $user_id = $request->uuser;

        $user = User::find($user_id);
        $user->wellsites()->sync($wellsite_id, []);

        return redirect()->route('admin.well_sites.index');
    }

    public function customersIndex(Request $request){
        abort_if(Gate::denies('employee_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $user_id = Auth::user()->id;
        
        $wellsites = Wellsite::with('users')->whereHas('users', function($query) use($user_id){ 
            return $query->where('id', $user_id);
        })->get();
        // dd($wellsites);

        $wellsite = [];
        $data = [];
        if (count($wellsites) > 0) {
            
            $wellsite = $wellsites[0];
            $data = WellsiteRealData::where('wellsite_id', $wellsite->id)->get();
        }
        // dd($wellsites);
        if(isset($request->id)){
            $wellsite = Wellsite::where('id', $request->id)->first();
            $data = WellsiteRealData::where('wellsite_id', $wellsite->id)->get();
        }

        return view('admin.customer', compact('wellsites', 'wellsite', 'data'));
    }

    // public function employeeUpdate(Request $request, User $user)
    // {
    //     abort_if(Gate::denies('company_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
    //     $user->update($request->all());
    //     $user->roles()->sync($request->input('roles', []));

    //     return redirect()->route('admin.employees.index');
    // }

    // public function employeeShow(User $user)
    // {
    //     abort_if(Gate::denies('company_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

    //     $user->load('roles');

    //     return view('admin.users.show', compact('user'));
    // }

    // public function employeeDestroy(User $user)
    // {
    //     abort_if(Gate::denies('company_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

    //     $user->delete();

    //     return back();
    // }

    // public function customersIndex(Request $request){

    // }
}
