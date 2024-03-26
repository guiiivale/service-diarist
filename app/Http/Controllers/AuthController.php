<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Register a new user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function register(RegisterRequest $request): JsonResponse
    {
        $data = $request->validated();

        $user = User::create($data);

        $address = $user->addresses()->create($data['address']);

        $success['token'] = $user->createToken('MyApp')->plainTextToken;
        $success['name'] = $user->name;

        return response()->json(['success' => $success, 'message' => 'User registered successfully.'], 201);
    }

     /**
     * Autentica um usuário existente.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function login(LoginRequest $request): JsonResponse
    {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){ 
            $user = Auth::user(); 
            $user->tokens()->delete();
            
            $success['token'] = $user->createToken('MyApp')->plainTextToken; 
            $success['name'] = $user->name;

            return response()->json(['success' => $success, 'message' => 'User logged in successfully.'], 200);
        } 
        return response()->json(['error' => 'Unauthorized'], 401); 
    }
}
