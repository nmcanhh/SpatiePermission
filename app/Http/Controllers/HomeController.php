<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

//use App\Models\Permission;
//use App\Models\Role;

class HomeController extends Controller
{

    public function __construct()
    {

    }

    public function index()
    {

        $user_count = DB::table('users')->count();
        $topic_count = DB::table('topics')->count();
//        $role_count = DB::table('roles')->count();
//        $permission_count = DB::table('permissions')->count();

        return view('admin.home', compact('user_count', 'topic_count'));
//        return view('admin.home', compact('user_count','role_count','permission_count'));
    }
}
