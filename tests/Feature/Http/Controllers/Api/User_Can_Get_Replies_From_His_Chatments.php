<?php

namespace Tests\Feature\Http\Controllers\Api;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class User_Can_Get_Replies_From_His_Chatments extends TestCase
{

    // clear && ./vendor/bin/phpunit tests/Feature/Http/Controllers/Api/User_Can_Get_Replies_From_His_Chatments.php

   /** @test */
   public function a_user_can_get_replies_to_what_he_posted()
   {
 //  clear && ./vendor/bin/phpunit tests/Feature/Http/Controllers/Api/User_Can_Get_Replies_From_His_Chatments.php --filter a_user_can_get_replies_to_what_he_posted
       $this->withoutExceptionHandling();
       $this->withoutMiddleware();
       $response = $this->get("http://localhost:8000/api/auth/get_my_replies");
       $response->assertOk();
 
   } 
}
