<?php

namespace App\Http\Controllers;

use App\Models\TravelAgent;
use Hash;
use Illuminate\Http\Request;

class TravelAgentController extends Controller
{
    // public function register(Request $request){
    //     $this->validate($request, [
    //         'email' => 'required|unique:users|email',
    //         'password' => 'required|min:6'
    //     ]);
    //     $email = $request->input('email');
    //     $password = Hash::make($request->input('password'));

    //     $user = User::create([
    //         'email' => $email,
    //         'password' => $password
    //     ]);

    //     return response()->json(['message' => 'Pendaftaran pengguna berhasil dilaksanakan']);
    // }

    public function index()
    {
        $travel_agent = TravelAgent::all();

        return response()->json([
            'success' => true,
            'message' =>'List Semua Post',
            'data'    => $travel_agent
        ], 200);
    }
}
