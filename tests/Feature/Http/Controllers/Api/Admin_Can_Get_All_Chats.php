<?php

namespace Tests\Feature\Http\Controllers\Api;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class Admin_Can_Get_All_Chats extends TestCase
{
// clear && ./vendor/bin/phpunit tests/Feature/Http/Controllers/Api/Admin_Can_Get_All_Chats.php

   /** @test */
   public function a_user_can_get_all_chats()
   {
// clear && ./vendor/bin/phpunit tests/Feature/Http/Controllers/Api/Admin_Can_Get_All_Chats.php --filter a_user_can_get_all_chats
 
       $this->withoutExceptionHandling();
       $this->withoutMiddleware();
       $response = $this->get("http://localhost:8000/api/auth/allchats");
       $response->assertOk();

   }
}
