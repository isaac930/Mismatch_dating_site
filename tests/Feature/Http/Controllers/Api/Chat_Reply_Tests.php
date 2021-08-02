<?php

namespace Tests\Feature\Http\Controllers\Api;

use Tests\TestCase;
use App\Models\Chat;
use App\Models\ChatReply;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class Chat_Reply_Tests extends TestCase
{
    //use RefreshDatabase;
//clear && ./vendor/bin/phpunit tests/Feature/Http/Controllers/Api/Chat_Reply_Tests.php
 
    /** @test */
    public function a_user_can_reply_to_other_user_posts()
    {
   
//clear && ./vendor/bin/phpunit tests/Feature/Http/Controllers/Api/Chat_Reply_Tests.php --filter a_user_can_reply_to_other_user_posts
        
        $this->withoutExceptionHandling();
        $this->withoutMiddleware();
        $post_id = ChatReply::first()->id;
        $response = $this->post("http://localhost:8000/api/auth/chats_reply",[
         
        'post_id' => $post_id,       
        'name' => 'ndagire oliva',
        'email' => 'oliva@gmail.com',  
        'contact' => '256755789234',
        'chatment_email' => 'kirumiraisaac@gmail.com',
        'chatment_name' => 'kirumira isaac',
        'chatment_contact' => '256759939936',
        'post' => 'How are you oliva updated ?',
        'post_reply' => 'an ok isaac how is mukadde ?',
        'image_path' => '123456.jpeg',
        'chatment_image_path' => '34567888.jpeg',
        
        ]);
        $response->assertOk();

    }

    /** @test */
    public function a_user_can_get_all_replies_he_makes_to_other_users()
    {
   // clear && ./vendor/bin/phpunit tests/Feature/Http/Controllers/Api/Chat_Reply_Tests.php --filter a_user_can_get_all_replies_he_makes_to_other_users

        $this->withoutExceptionHandling();
        $this->withoutMiddleware();
        $response = $this->get("http://localhost:8000/api/auth/chats_reply");
        $response->assertOk();

    }

     /** @test */
     public function a_user_can_update_reply_he_made_to_another_user()
     {

    // clear && ./vendor/bin/phpunit tests/Feature/Http/Controllers/Api/Chat_Reply_Tests.php --filter a_user_can_update_reply_he_made_to_another_user
            
        $this->withoutExceptionHandling();
        $this->withoutMiddleware();
        $postid = Chat::first()->id; // id  of the post you replied to, it comes from chats table
        $reply_id = ChatReply::first()->id; //id of the post to  be updated, it comes from the chat replies table
        $response = $this->put("http://localhost:8000/api/auth/chats_reply/$reply_id",[
         
        'post_id' => $postid,       
        'name' => 'ndagire oliva',
        'email' => 'oliva@gmail.com',  
        'contact' => '256755789234',
        'chatment_email' => 'kirumiraisaac@gmail.com',
        'chatment_name' => 'kirumira isaac',
        'chatment_contact' => '256759939936',
        'post_reply' => 'an ok isaac how is mukadde updated ?',
        'image_path' => '123456.jpeg',
        'chatment_image_path' => '34567888.jpeg',
        ]);
        $response->assertOk(200);

     }

     /** @test */
     public function a_user_can_get_single_reply_he_made_to_another_user()
     {
// clear && ./vendor/bin/phpunit tests/Feature/Http/Controllers/Api/Chat_Reply_Tests.php --filter a_user_can_get_single_reply_he_made_to_another_user
        $id = ChatReply::first()->id;
        $this->withoutExceptionHandling();
        $this->withoutMiddleware();
        $response = $this->get("http://localhost:8000/api/auth/chats_reply/$id");
        $response->assertOk();
     }

      /** @test */
      public function a_user_can_delete_a_reply_he_made_to_another_user()
      {
    // clear && ./vendor/bin/phpunit tests/Feature/Http/Controllers/Api/Chat_Reply_Tests.php --filter a_user_can_delete_a_reply_he_made_to_another_user

        $id = ChatReply::first()->id;
        $this->withoutExceptionHandling();
        $this->withoutMiddleware();
        $response = $this->delete("http://localhost:8000/api/auth/chats_reply/$id");
        $response->assertOk();

      }
}
