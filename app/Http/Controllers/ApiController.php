<?php

namespace App\Http\Controllers;

use App\Models\MainMenu;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Validator;

class ApiController extends Controller
{
    //

    public  function main_menus()
    {
        $main_menus=MainMenu::select( 'id','name','colorCode','iconLinks')->get();
        return response(["main_menus"=>$main_menus],200);
    }


    public  function createUser(Request $request)
    {


        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'username' => ['required', 'string', 'min:8', 'confirmed'],
            'phone'  => ['required', 'string', 'min:8', 'confirmed'],
        ]);



        if ($validator->fails()) {

                dd($validator);
        }

        User::create([
            'name' => $request['name'],
            'username' => $request['username'],
            'phone' => $request['phone'],
            'password' => Hash::make($request['password']),
        ]);


        return response(["User"=>"creation done"],200);

    }


}
