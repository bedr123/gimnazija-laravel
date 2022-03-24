<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserTokens;
use Illuminate\Support\Facades\Hash;
use Validator;
use DB;
use Illuminate\Support\Str;
use \Carbon\Carbon;
use Illuminate\Http\JsonResponse;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return response()->json([
                'error' => 'Korisnik sa tim email-om ne postoji.'
            ]);
        }

        if (!Hash::check($request->password, $user->password)) {
            return response()->json([
                'error' => 'Email i šifra se ne podudaraju.'
            ]);
        }

        $token = $user->createToken('myapptoken')->plainTextToken;

        return response([
            'message' => 'Ulogovani ste!',
            'user' => $user,
            'token' => $token
        ], 201);
    }

    public function logout()
    {
        auth()->user()->tokens()->delete();

        return response()->json([
            'message' => 'Odjavljeni ste!'
        ]);
    }

    public function dashboard()
    {
        return view('admin/dashboard');
    }
}
