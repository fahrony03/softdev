<?php

namespace App\Http\Controllers\Backend;
use App\Models\User;

use Illuminate\Http\Request,
    App\Http\Controllers\controller;
use Illuminate\Supports\Facades\Response;

class ApiUserController extends Controller
{
    public function getAll()
    {
        $user = User::all();
        return response()->json($user, 201);
    }

    // Public function createus(Request $request){
    //     User::create($request->all());

    //     return response()->json([
    //         'status' => 'ok',
    //         'message' => 'User berhasil ditambahkan'
    //     ],201);
    // }
}
