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
            $image_path = Auth()->user()->image_path;
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
            $chatrequest->image_path = $image_path;
            $results = $chatrequest->save();


        if($results){ 
            return 'Your Chat Request Submited';
  
        }
           else{
            return response()->json(['message' => 'Chat Request failed']); 
           }
    }

    public function update($id){
        if (Auth::check()){
            $email = Auth()->user()->email;
            }
        
            else{   
             $email = User::first()->email;
            }

            $requeststatus = 'allowed';
            $chatrequest = ChatRequest::where('chatment_email',$email)->find($id);
            $chatrequest->chat_request_status = $requeststatus;
            $results = $chatrequest->save();

            return 'You Have approved to chat with'.' '.Auth()->user()->name;
    }

    public function index(){
       if (Auth::check()){
            $email = Auth()->user()->email;
            }
        
            else{   
             $email = User::first()->email;
            }
            $requeststatus = 'not allowed';
        $chatrequests = ChatRequest::orderByDesc('id')->where('chat_request_status',$requeststatus)->where('chatment_email',$email)->get();
        return response()->json(['chatrequests' => $chatrequests->toArray()]);
        if(!$chatrequests){
            return respose()->json(['message' => 'No Chat Request Found']);
        }
    }

    public function destroy($id){
        if (Auth::check()){
            $email = Auth()->user()->email;
            }
        
            else{   
                $email = User::first()->email;;
            }
            $chatrequest = ChatRequest::where('chatment_email',$email)->find($id)->delete();
        return 'Chat Request Deleted Successfully';
        if(!$chatrequest){
            return 'No Chat Request Found';
        }
    }

    

    protected function guard(){
        return Auth::guard();

    }
}
