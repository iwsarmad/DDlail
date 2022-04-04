<?php

namespace App\Http\Controllers;

use App\Models\CustomerPoint;
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
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'string'],
            'username' => ['required', 'string', 'unique:users,username'],
            'phone'  => ['required', 'string','unique:users,phone'],
        ]);



        if ($validator->fails()) {
            return response()->json(['Message' => $validator->errors()->all()], 400);
        }

        User::create([
            'name' => $request['name'],
            'username' => $request['username'],
            'email' => $request['email'],
            'phone' => $request['phone'],
            'password' => Hash::make($request['password']),
        ]);


        return response(["User"=>"creation done"],200);

    }
    public function getPointByType(Request $request)
    {

        $validator = Validator::make($request->all(), [
        //    'name' => ['required', 'string', 'max:255'],
            'point_type_id' => ['required','exists:main_menus,id'],

        ]);



        if ($validator->fails()) {
            return response()->json(['Message' => $validator->errors()->all()], 400);
        }

        $CustomerPoint=CustomerPoint::where('point_type','=',$request->point_type_id)->where('IsActive','=',1)->where('IsApprove','=',1)->get();
        $Count=sizeof($CustomerPoint);

        return response(
            [
            "CustomerPoint"=>$CustomerPoint,
            "TotalCustomer"=>$Count
            ],200);


    }
    public  function createPoint(Request $request)
    {


        $validator = Validator::make($request->all(), [
             'point_type'  => ['required','exists:main_menus,id']
            , 'point_name' => ['required', 'string', 'max:255']
            , 'point_lat' => ['required', 'string', 'max:255']
            , 'point_log' => ['required', 'string', 'max:255']
            , 'point_specialty' => ['required', 'string', 'max:255']
            , 'point_open_time' => ['required', 'string', 'max:255']
            , 'point_close_time' => ['required', 'string', 'max:255']
            , 'point_phone' => ['required', 'string', 'max:255']
            , 'point_address' => ['required', 'string', 'max:255']
        ]);



        if ($validator->fails()) {
            return response()->json(['Message' => $validator->errors()->all()], 400);
        }

        CustomerPoint::create([
             'point_type' =>$request->point_type
            , 'point_name' =>$request->point_name
            , 'point_lat' =>$request->point_lat
            , 'point_log' =>$request->point_log
            , 'point_specialty' =>$request->point_specialty
            , 'point_open_time' =>$request->point_open_time
            , 'point_close_time' =>$request->point_close_time
            , 'point_img' =>""
            , 'point_img_cover' =>""
            , 'point_phone' =>$request->point_phone
            , 'point_address' =>$request->point_address
            ,'creator_id'  =>1
            ,'approval_id'=>0
            ,'IsActive' =>0
            ,'IsApprove'=>0
        ]);


        return response(["CustomerPoint"=>"creation done"],200);

    }


}
