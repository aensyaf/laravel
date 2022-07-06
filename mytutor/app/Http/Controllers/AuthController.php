<?php

namespace App\Http\Controllers;

use App\Models\tutor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index(){
        return view('landpage');
    }

    public function login(){
        return view('login');
    }

    public function postLogin(Request $request){
        $model = tutor::where('tutor_email', $request->tutor_email)->first();
        if(Hash::check($request->tutor_password, $model->tutor_password, [])){
            return redirect()->intended('mainpage')->with('save', 'Success')->withErrors('error', 'Failed');
        }
        return redirect("login")->withSuccess('You have invalid credentials. Please try login again with correct credentials');
    }

    public function postRegistration(Request $request){
        $request->validate([
            'tutor_name' => 'required',
            'tutor_email' => 'required',
            'tutor_phone' => 'required',
            'tutor_address' => 'required',
            'tutor_state' => 'required',
            'tutor_password' => 'required|min:8',
        ]);

        $data = $request->all();
        $check = $this->create($data);
        $check->save();

        return redirect("login")->with('save', 'Success')->withErrors('error', 'Failed');;
    }

    public function register(){
        return view('register');
    }

    public function create(array $data){
        return tutor::create([
            'tutor_name' => $data['tutor_name'],
            'tutor_email' => $data['tutor_email'],
            'tutor_phone' => $data['tutor_phone'],
            'tutor_address' => $data['tutor_address'],
            'tutor_state' => $data['tutor_state'],
            'tutor_password' => Hash::make($data['tutor_password'],),
        ]);
    }

    public function logout(){
        Session::flush();
        Auth::logout();
        return Redirect('login');
    }
}
