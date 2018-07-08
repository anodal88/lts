<?php

namespace App\Http\Controllers;

use App\DataTables\UsersDataTable;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(UsersDataTable $dataTable)
    {
        return $dataTable->render('user.index');
    }

    public function new(){
        return view('user.form');
    }

    public function create(Request $request){
        return view('user.form');
    }
}
