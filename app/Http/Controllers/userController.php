<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;

class usuarioController extends Controller
{
    public function index()
    {
        $usuario = Usuario::all();

        if ($usuario->isEmpty()){
            $data = [
                'mesage'=>'no hay usuario registrado',
                'status' => 404
            ];
        }
        $data = [
            'usuarios' => $usuarios,
            'ststus' => 200,
        ];
        return response()->json($usuario, 200);
    }
}
class usuarioController extends Controller
{
    public function store(Request $request)
    {
        $validatos = Usuario::make($request->all(), [
            'user_type'=>'required',
            'email'=>'required',
        ]);
        if ($validator -> fails()){
            $data = [
                'mesage' => 'error',
                'error'=> $validator->errors(),
                'status'=>404
            ];
            return response()->json($data, 404);
        }
    }
}
