<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Exception;


class categoryControler extends Controller
{
    function create(Request $request){
        $validator = Validator::make ($request -> all(),[
            'category_name'
        ]);
        if ($validator ->fails()){
            return response()->json([
                'status' => false,
                'message' => $validator->errors(),
            ]);
        }
        $data = [
            'category_name'=> $request -> get('category_name')
        ];
        try {
            $insert = Category::create($data);
            return response()->json(["status"=>true,'messege'=>'data behasl ditambahkan','data'=> $insert]);
        } catch (Exception $e) {
            return response()->json(["status"=>false,'mesege'=>$e]);
        }
    }
    function updateCatergory($id, Request $request){
        $validator = Validator :: make ($request->all(),[
            'category_name'
        ]);
        if ($validator ->fails()){
            return response()->json([
                'status'=> false,
                'message' => $validator ->errors(),
            ]);
        }
        $data = [
            'category_name'=> $request -> get('category_name')
        ];
        try {
            $insert = Category::create($data);
            return response()->json(["status"=>true,'messege'=>'data behasl ditambahkan','data'=> $insert]);
        } catch (Exception $e) {
            return response()->json(["status"=>false,'mesege'=>$e]);
        }
    }
}
