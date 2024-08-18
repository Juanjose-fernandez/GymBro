<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    /**
     * Registro de un nuevo usuario.
     */
    public function register(Request $request)
    {

        // Validar la solicitud
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|confirmed',
        ]);

        // Crear el usuario
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Crear un token para el usuario
        $token = $user->createToken('Personal Access Token')->accessToken;

        // Retornar el token
        return response()->json(['token' => $token]);
    }

    /**
     * Autenticación de un usuario.
     */
    public function login(Request $request)
    {
        // Validar la solicitud
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        // Intentar autenticar al usuario
        if (!Auth::attempt($request->only('email', 'password'))) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        // Obtener el usuario autenticado
        $user = Auth::user();



        // Crear un token para el usuario
        $token = $user->createToken('Personal Access Token')->accessToken;

        // Retornar el token
        return response()->json(['token' => $token]);
    }

    /**
     * Obtener la información del usuario autenticado.
     */
    public function user(Request $request)
    {
        return response()->json($request->user());
    }
}
