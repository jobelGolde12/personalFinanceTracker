<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email|unique:users,email',
            'username' => 'required|unique:users,username',
            'password' => 'required|min:9',
        ]);

        $data['password'] = Hash::make($data['password']);
        $user = User::create($data);

        return response()->json($user, 201);
    }

        public function login(Request $request)
        {
            try {
                $credentials = $request->validate([
                    'username' => 'required|string',
                    'password' => 'required|string',
                ]);

                if (Auth::attempt($credentials)) {
                    $user = Auth::user();
                    $token = $user->createToken('LaravelAuthApp')->plainTextToken;

                    $cookie = Cookie::make('token', $token, 60);
                    return response()->json(['token' => $token, 'message' => 'Login successful', 'user' => $user], 200)->cookie($cookie);
                } else {
                    return response()->json(['message' => 'Invalid credentials'], 401);
                }
            } catch (\Exception $e) {
                Log::error('Login error: ' . $e->getMessage());
                return response()->json(['message' => 'Internal server error'], 500);
            }
        }


        public function getTheUser(){
            $data = User::all(); 
        return response()->json($data);
        }
}
