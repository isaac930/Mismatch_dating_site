<?php

namespace App\Http\Controllers;

use Exception;
use Carbon\Carbon;
use App\Models\ChatRequest;
use App\Models\User;
use App\Exceptions\Handler;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class ChatRequestController extends Controller
{
    protected $user;

    public function __construct(){
        $this->middleware('auth:api');
        $this->user = $this->guard()->user();
    }

    public  function store(Request $request){

        $validator = Validator::make($request->all(), [
            'chatment_name' => 'required',
            'chatment_email' => 'required',
        ]);
    
        if($validator->fails()){
            return response()->json($validator->errors(), 400);
        }

        if (Auth::check()){
            $name = Auth()->user()->name;
            $email = Auth()->user()->email;
            }
        
            else{   
                
                $name = User::first()->name;
                $email = User::first()->email;
            }
            $chatment_name = $request->chatment_name;
            $chatment_email = $request->chatment_email;

            $chatrequest = new ChatRequest;
            $chatrequest->name = $name;
            $chatrequest->email = $email;
            $chatrequest->chatment_name = $chatment_name;
            $chatrequest->chatment_email = $chatment_email;
            $results = $chatrequest->save();


        if($results){ 
            return 'Your Chat Request Submited';
  
        }
           else{
            return response()->json(['message' => 'Chat Request failed']); 
           }


           


    }

    protected function guard(){
        return Auth::guard();

    }
}
