<?php

namespace Tests\Feature\Http\Controllers\Api;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class User_Can_Chat_With_Another_User extends TestCase
{
    // run all tests clear && ./vendor/bin/phpunit tests/Feature/Http/Controllers/Api/User_Can_Chat_With_Another_User.php

     /** @test */
     public function a_user_can_chat_with_another_user()
     {
// clear && ./vendor/bin/phpunit tests/Feature/Http/Controllers/Api/User_Can_Chat_With_Another_User.php --filter a_user_can_chat_with_another_user

        $this->withoutExceptionHandling();
        $this->withoutMiddleware();
        $response = $this->post("http://localhost:8000/api/auth/chats",[
         
               
        'name' => 'kirumira isaac',
        'email' => 'kirumiraisaac@gmail.com',  
        'contact' => '256759939936',
        'chatment_email' => 'oliva@gmail.com',
        'post' => 'How are you oliva ?',
        ]);
        $response->assertOk();

     }

       /** @test */
       public function a_user_can_update_his_chat_post()
       {
        // clear && ./vendor/bin/phpunit tests/Feature/Http/Controllers/Api/User_Can_Chat_With_Another_User.php --filter a_user_can_update_his_chat_post   
        $id = 4;
        $this->withoutExceptionHandling();
        $this->withoutMiddleware();
        $response = $this->put("http://localhost:8000/api/auth/chats/$id",[
         
               
        'name' => 'kirumira isaac',
        'email' => 'kirumiraisaac@gmail.com',  
        'contact' => '256759939936',
        'chatment_email' => 'oliva@gmail.com',
        'post' => 'How are you oliva updated ?',
        ]);
        $response->assertOk();
       }
       
      /** @test */
       public function a_user_can_get_his_own_posts()
       {


       }
}
