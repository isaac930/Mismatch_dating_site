<?php


namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use App\Models\ChatReply;
use App\Exceptions\Handler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GetReliesToWhatIPostedController extends Controller
{
    protected $user;

    public function __construct(){
        $this->middleware('auth:api');
        $this->user = $this->guard()->user();
    }

    public function get_replies_to_what_i_posted(){
        if (Auth::check()){
            $email = Auth()->user()->email;
            }
        
            else{   
                $email = "kirumiraisaac@gmail.com";
            }
        $chats = ChatReply::where('chatment_email',$email)->get();
        return response()->json(['chats_replies' => $chats->toArray()]);
        if(!$chats){
            return respose()->json(['message' => 'No Chat Replies Found']);
        }
    }

    protected function guard(){
        return Auth::guard();

    }
}
