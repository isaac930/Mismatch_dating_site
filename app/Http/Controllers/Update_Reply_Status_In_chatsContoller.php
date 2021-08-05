<?php

namespace App\Http\Controllers;

use Exception;

use App\Models\Chat;
use App\Exceptions\Handler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Update_Reply_Status_In_chatsContoller extends Controller
{
    public function update_chat_reply_status(Request $request){
        
        $validator = Validator::make($request->all(), [
            'chat_id' => 'required',
        ]);
    
        if($validator->fails()){
            return response()->json($validator->errors(), 400);
        }

        $id = $request->chat_id;

        $reply_status = "replied";
        $chat = Chat::find($id);
        $chat->reply_status = $reply_status;
        $result = $chat->save();
        
        if($result){
        return response()->json(['message' => 'The post have been replied to, and its status updated']);
        }
    }
}
