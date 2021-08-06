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
class AllowedChatRequestController extends Controller
{
    protected $user;

    public function __construct(){
        $this->middleware('auth:api');
        $this->user = $this->guard()->user();
    }

    public function get_allowed_people_to_chat(){

    if (Auth::check()){
        $email = Auth()->user()->email;
        }
    
        else{   
         $email = User::first()->email;
        }
     $requeststatus = 'allowed';
     $chatrequests = ChatRequest::orderByDesc('id')->where('chat_request_status',$requeststatus)->where('chatment_email',$email)->get();

    return response()->json(['chatrequests' => $chatrequests->toArray()]);
    if(!$chatrequests){
        return respose()->json(['message' => 'No Chat Request Found']);
    }

}

protected function guard(){
    return Auth::guard();

}
}
