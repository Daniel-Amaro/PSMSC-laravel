<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function index()
    {
    	$users = \App\Models\Users::get();

    	return response()->json([
    			"msg"=> "success",
    			"usuarios"=> $users->toArray()
    	       ],200
    	);
    }

    public function show($idUser)
    {
        $user = \App\Models\Users::find($idUser);
        return response()->json([
                "msg"=> "success",
                "user"=> $user
               ],200
        );
    }

    public function store(Request $request)
    {   
        $user = new \App\Models\Users();
        $user->username = $request->username;
        $user->password = $request->password;
        $user->Rpassword = $request->Rpassword;
        $user->email = $request->email;
        $user->FechaNac = $request->FechaNac;
        $user->save();

        return response()->json([
                "msg"=> "success",
                "Usuario creado: "=> $user->username
               ],200
        );
    }

    public function update(Request $request, $idUser)
    {
        $user = \App\Models\Users::find($idUser);
        $user->username = $request->username;
        $user->password = $request->password;
        $user->Rpassword = $request->Rpassword;
        $user->save();

        return response()->json([
                "msg"=> "success"
               ],200
        );
    }

    public function destroy()
    {
        $user = \App\Models\Users::find($idUser);
        $user->delete();

        return response()->json([
                "msg"=> "success"
               ],200
        );
    }


}
