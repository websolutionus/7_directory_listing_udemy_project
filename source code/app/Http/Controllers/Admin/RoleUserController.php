<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\RoleUserDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\RoleUserCreateRequest;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Spatie\Permission\Models\Role;

use function Ramsey\Uuid\v1;

class RoleUserController extends Controller
{
    function __construct()
    {
        $this->middleware(['permission:access management index']);
    }
    /**
     * Display a listing of the resource.
     */
    public function index(RoleUserDataTable $dataTable) : View | JsonResponse
    {
        return $dataTable->render('admin.role-permission.role-user.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        $roles = Role::all();
        return view('admin.role-permission.role-user.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RoleUserCreateRequest $request) : RedirectResponse
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->user_type = 'admin';
        $user->save();

        $user->assignRole($request->role);

        toastr()->success('Created Successfully!');
        return to_route('admin.role-user.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $roles = Role::all();
        $user = User::findOrFail($id);
        return view('admin.role-permission.role-user.edit', compact('roles', 'user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $request->filled('password') ?? $user->password = bcrypt($request->password);
        $user->user_type = 'admin';
        $user->save();

        $user->syncRoles($request->role);

        toastr()->success('Update Successfully!');
        return to_route('admin.role-user.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            User::findOrFail($id)->delete();

            return response(['status' => 'success', 'message' => 'Deleted successfully!']);
        }catch(\Exception $e){
            logger($e);
            return response(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }
}
