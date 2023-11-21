<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Artisan;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ClearDatabaseController extends Controller
{
    function index() : View {
        return view('admin.clear-database.index');
    }

    function createDB() {
        // wipe database
        Artisan::call('migrate:fresh');

        //seed default table and data
        Artisan::call('db:seed', ['--class' => 'UserSeeder']);
        Artisan::call('db:seed', ['--class' => 'SettingSeeder']);
        Artisan::call('db:seed', ['--class' => 'PaymentSettingSeeder']);
        Artisan::call('db:seed', ['--class' => 'MenuBuilderSeeder']);
        Artisan::call('db:seed', ['--class' => 'RolePermissionSeeder']);

        return response(['status' => 'success', 'message' => 'Database wiped successfully!']);
    }
}
