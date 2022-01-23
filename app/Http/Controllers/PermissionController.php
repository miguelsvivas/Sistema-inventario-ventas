<?php

namespace App\Http\Controllers;
use Spatie\Permission\Models\Permission;

use Illuminate\Http\Request;

class PermissionController extends Controller
{

    const PERMISSIONS = [
        'show' => 'permissions-show',
    ];


    public function __construct(){
        $this->middleware('permission:'.self::PERMISSIONS['show']);
    }


    public function index(){
        $permissions = Permission::OrderBy('name')->paginate();

        return view('admin.permission.index',[
            'rows' => $permissions,
        ]);
    }


    public function show(Permission $permission){

        return view('admin.permission.show',[
            'rows' => $permission,
        ]);


    }
}
