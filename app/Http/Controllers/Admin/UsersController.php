<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyUserRequest;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\Company;
use App\Role;
use App\Models\User;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Route;


class UsersController extends Controller
{
    // public function updateUser(Request $request){
    //     Log::info($request);
    // }
    public function index(Request $request)
    {
        abort_if(Gate::denies('user_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if($request->ajax()){
            $id = $request->id =="1"? true : false;
            $user_id = $request->user_id;
            $user = User::find($user_id);
            $user->update(['suspend' => $id]);

            return response()->json($user);
        }
        

        $users = User::whereHas('roles', function ($q) {
            $q->whereTitle('CompanyAdmin');
        })->get();

        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        abort_if(Gate::denies('user_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $roles = Role::where('title', 'CompanyAdmin')->pluck('title', 'id');

        return view('admin.users.create', compact('roles'));
    }

    public function store(StoreUserRequest $request)
    {
        $user = User::create($request->all());
        $user->roles()->sync($request->input('roles', []));

        return redirect()->route('admin.users.index');
    }

    public function edit(User $user)
    {
        abort_if(Gate::denies('user_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $roles = Role::where('title', 'CompanyAdmin')->pluck('title', 'id');

        $user->load('roles');

        return view('admin.users.edit', compact('roles', 'user'));
    }

    public function update(UpdateUserRequest $request, User $user)
    {
        $user->update($request->all());
        $user->roles()->sync($request->input('roles', []));

        return redirect()->route('admin.users.index');
    }

    public function show(User $user)
    {
        abort_if(Gate::denies('user_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $user->load('roles');

        return view('admin.users.show', compact('user'));
    }

    public function destroy(User $user)
    {
        abort_if(Gate::denies('user_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $user->delete();

        return back();
    }

    public function massDestroy(MassDestroyUserRequest $request)
    {
        User::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function employeeIndex(Request $request)
    {
        abort_if(Gate::denies('company_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $user_id =  Auth::user()->id;
        $company = Company::where('user_id', $user_id)->first();

        if($request->ajax()){
            $id = $request->id =="1"? true : false;
            $user_id = $request->user_id;
            $user = User::find($user_id);
            $user->update(['suspend' => $id]);

            return response()->json($user);
        }

        // $company = Company::whereHas('users', function ($q) use($user_id){
        //     $q->where('id', $user_id);
        // })->first();
        // dd($company);

        $users = User::whereHas('companies', function ($q) use($company){
            $q->where('id', $company->id);
        })->get();
        // dd($users);

        return view('admin.users.index', compact('users'));
    }

    public function employeeCreate()
    {
        abort_if(Gate::denies('company_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $roles = Role::where('title', 'Users')->pluck('title', 'id');

        return view('admin.users.create', compact('roles'));
    }

    

    public function employeeStore(Request $request)
    {
        abort_if(Gate::denies('company_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $user_id = Auth::user()->id;
        $company = Company::where('user_id', $user_id)->first();
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|unique:users',
        ]);

        if ($validator->fails()) {
            return redirect()->route('admin.employees.index');
        }
        $user = User::create($request->all());
        $user->roles()->sync($request->input('roles', []));
        $user->companies()->sync($company->id);
        

        return redirect()->route('admin.employees.index');
    }

    public function employeeEdit(User $user)
    {
        abort_if(Gate::denies('company_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $roles = Role::where('title', 'CompanyAdmin')->pluck('title', 'id');

        $user->load('roles');

        return view('admin.users.edit', compact('roles', 'user'));
    }

    public function employeeUpdate(UpdateUserRequest $request, User $user)
    {
        abort_if(Gate::denies('company_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $user->update($request->all());
        $user->roles()->sync($request->input('roles', []));

        return redirect()->route('admin.employees.index');
    }

    public function employeeShow(User $user)
    {
        abort_if(Gate::denies('company_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $user->load('roles');

        return view('admin.users.show', compact('user'));
    }

    public function employeeDestroy(User $user)
    {
        abort_if(Gate::denies('company_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $user->delete();

        return back();
    }
}
