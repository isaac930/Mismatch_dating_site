<?php

namespace Tests\Feature\Http\Controllers\Api;

use Tests\TestCase;
use App\Models\Chat;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class User_Can_Chat_With_Another_User extends TestCase
{
  //use RefreshDatabase;
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
        'image_path' => '123456.jpeg',
        'chatment_image_path' => '34567888.jpeg',
        ]);
        $response->assertOk();

     }

       /** @test */
       public function a_user_can_update_his_chat_post()
       {
        // clear && ./vendor/bin/phpunit tests/Feature/Http/Controllers/Api/User_Can_Chat_With_Another_User.php --filter a_user_can_update_his_chat_post   
        
        $id = Chat::first()->id;
        $this->withoutExceptionHandling();
        $this->withoutMiddleware();
        $response = $this->put("http://localhost:8000/api/auth/chats/$id",[
         
               
        'name' => 'kirumira isaac',
        'email' => 'kirumiraisaac@gmail.com',  
        'contact' => '256759939936',
        'chatment_email' => 'oliva@gmail.com',
        'post' => 'How are you oliva updated ?',
        'image_path' => '123456.jpeg',
        'chatment_image_path' => '34567888.jpeg',
        ]);
        $response->assertOk();
       }

      /** @test */
       public function a_user_can_get_his_own_posts()
       {
       //  clear && ./vendor/bin/phpunit tests/Feature/Http/Controllers/Api/User_Can_Chat_With_Another_User.php --filter a_user_can_get_his_own_posts
        
        $this->withoutExceptionHandling();
        $this->withoutMiddleware();
        $response = $this->get("http://localhost:8000/api/auth/chats");
        $response->assertOk();

       }

         /** @test */
         public function a_user_can_get_a_single_post_in_his_own_posts()
         {
 // clear && ./vendor/bin/phpunit tests/Feature/Http/Controllers/Api/User_Can_Chat_With_Another_User.php --filter a_user_can_get_a_single_post_in_his_own_posts
            
             $id = Chat::first()->id;
            $this->withoutExceptionHandling();
            $this->withoutMiddleware();
            $response = $this->get("http://localhost:8000/api/auth/chats/$id");
            $response->assertOk();
         }

          /** @test */
          public function a_user_can_delete_a_single_post_in_his_own_posts()
          {
// clear && ./vendor/bin/phpunit tests/Feature/Http/Controllers/Api/User_Can_Chat_With_Another_User.php --filter a_user_can_delete_a_single_post_in_his_own_posts
            $id = Chat::first()->id;
            $this->withoutExceptionHandling();
            $this->withoutMiddleware();
            $response = $this->delete("http://localhost:8000/api/auth/chats/$id");
            $response->assertOk();

          }
}
