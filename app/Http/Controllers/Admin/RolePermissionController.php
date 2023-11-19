<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\RolePermissionDataTable;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(RolePermissionDataTable $dataTable) : View|JsonResponse
    {
        return $dataTable->render('admin.role-permission.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        $permissions = Permission::all()->groupBy('group_name');
        return view('admin.role-permission.create', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) : RedirectResponse
    {
        $request->validate([
            'role_name' => ['required', 'max:40', 'unique:roles,name'],
            'permissions' => ['required']
        ]);

        $role = Role::create(['name' => $request->role_name]);
        $role->syncPermissions($request->permissions);

        toastr()->success('Created Successfully!');

        return to_route('admin.role.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
