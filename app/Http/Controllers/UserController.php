<?php

namespace App\Http\Controllers;

use App\City;
use App\Company;
use App\DataTables\UsersDataTable;
use App\IntegrationHub\Vendors\Sabre\PropertyProxy;
use App\Providers\SabrePropertyServiceProvider;
use App\Repository\UserRepository;
use App\Role;
use App\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /** @var UserRepository $repo */
    private $repo;

    private $sabrProxy;

    public function __construct(UserRepository $userRepository, PropertyProxy $proxy)
    {
        $this->repo = $userRepository;
        $this->sabrProxy = $proxy;

    }

    public function index(UsersDataTable $dataTable)
    {
        return $dataTable->render('user.index');
    }

    public function create()
    {
        dump($this->sabrProxy->search([]));exit;
        return $this->sabrProxy->generateOTAvailWsdlTypeClasses();
        $roles = Role::all()->pluck('name','id');
        $companies = Company::all()->pluck('name','id');
        $cities = City::all()->pluck('name','id');
        return view('user.form',['roles'=>$roles,'companies'=>$companies,'cities'=>$cities]);
    }

    public function generatewsdl(){

    }

    public function store(Request $request)
    {
        $request->validate([
            'firstName'       => 'required',
            'lastName'       => 'required',
            'email'      => 'required|email|unique:users',
            'city' => 'required|numeric',
            'company' => 'required|numeric',
            'sex' => 'required',
            'roles'=>'required',
            'password'=>'required|min:10|max:50',
        ]);

        $roles = Role::query()->whereIn('id',$request->get("roles",[]))->get();
        $user = new User();
        $user->name = $request->get('firstName').' '.$request->get("lastName");
        $user->email = $request->get('email');
        $user->city_id = $request->get("city");
        $user->password = bcrypt($request->get("password"));
        $user->company_id = $request->get("company");
        $user->remember_token = str_random(10);
        $user->save();
        $user->roles()->saveMany($roles);
        return  redirect()->route('users.create')->with('success', 'User created wit    !');
    }

    public function find(Request $request)
    {
        return $this->repo->likeBy($request->input('query', 'NO-INPUT'));
    }
}
