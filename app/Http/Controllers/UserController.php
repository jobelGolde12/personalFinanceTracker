<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    public function store(Request $request){
        $data = $request->validate([
            'email' => 'required|email|unique:users,email',
            'username' => 'required|unique:users,username',
            'password' => 'required|min:9'
        ]);
        $data['password'] = HASH::make($data['password']);
        $model = User::create($data);
        return response()->json($model, 201);
    }
    // public function index(){
    //     $data = User::all();
    //     return response()->json($data);
    // }


    public function login(Request $request)
    {
        try {
            $credentials = $request->validate([
                'username' => 'required',
                'password' => 'required',
                '_token' => 'required|csrf_token',
            ]);

            if (Auth::attempt($credentials)) {
                $user = Auth::user();
                return response()->json(['message' => 'Login successful', 'user' => $user], 200);
            } else {
                return response()->json(['message' => 'Invalid credentials'], 401);
            }
        } catch (\Exception $e) {
            Log::error('Login error: '.$e->getMessage());
            return response()->json(['message' => 'Internal server error'], 500);
        }
    }
}
