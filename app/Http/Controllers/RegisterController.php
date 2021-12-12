<?php

namespace App\Http\Controllers;

use App\Register;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    function register(Request $request){
        $register = new Register();
        $register->Name = $request->Name;
        $register->Email = $request->Email;
        $register->Password = $request->Password;
        $register->save();
        if(!$register){
            return response([
                'message' => ['Data Has Not Been Stored Successfully']
            ], 404);
        }
        $token = $register->createToken('register-token')->plainTextToken;
        $response = [
            'user'=> $register,
            'token'=>$token
        ];
        return response($response,200);
    }

    function login(Request $request){
        $user= Register::where('Email', $request->Email)->first();
        // print_r($data);
            if (!$user) {
                return response([
                    'message' => ['These credentials do not match our records.']
                ], 404);
            }
        
            $token = $user->createToken('my-app-token')->plainTextToken;
        
            $response = [
                'user' => $user,
                'token' => $token
            ];
        
             return response($response, 201);
    }
}
