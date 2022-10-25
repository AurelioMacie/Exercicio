<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\UserRepository;
use App\Validators\UserValidator;
// use Auth;

class DashBoardController extends Controller
{

    private $repository;
    private $validator;

    public function __construct(UserRepository $repository, UserValidator $validator)
    {
        $this->repository = $repository;
        $this->validator  = $validator;
    }

    public function index(){

        return view("user.dashboard");
    }

    public function auth(Request $request){
        
        $data= [
            'email' => $request->get('username'),
            'password' => $request->get('password')
        ];

        try {
            \Auth::attempt($data, false);
            return redirect()->route('user.dashboard');
        } catch (\Exception $e) {
            return $e->getMessage();
        }

        
        
        dd($request->all());
    }
}
