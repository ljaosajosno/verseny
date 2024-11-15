<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function register(Request $request){
        $input_fields=$request->validate([
            'name'=>'required',
            'email'=>['required', Rule::unique('users', 'email')],
            'password'=>'required',
            'phone'=>'required',
            'address'=>'required'

        ]);

        $input_fields['password']=bcrypt($input_fields['password']);
        $user=User::create($input_fields);
        auth()->login($user);

        return redirect("/");
    }


    public function logout(){
        auth()->logout();
        return redirect('/');
    }

    public function login(Request $request){
        $input_fields=$request->validate([
            'loginemail'=>'required',
            'loginpassword'=>'required'
        ]);
        if(auth()->attempt(['email'=>$input_fields['loginemail'], 'password' => $input_fields['loginpassword']])){
            $request->session()->regenerate();
           
        }
        
        return redirect('/');
    }
}
