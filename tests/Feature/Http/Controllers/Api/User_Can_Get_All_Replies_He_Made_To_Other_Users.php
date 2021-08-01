<?php

namespace Tests\Feature\Http\Controllers\Api;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class User_Can_Get_All_Replies_He_Made_To_Other_Users extends TestCase
{

// clear && ./vendor/bin/phpunit tests/Feature/Http/Controllers/Api/User_Can_Get_All_Replies_He_Made_To_Other_Users.php

    
      /** @test */
      public function a_user_can_get_all_replies_he_made_to_other_users()
      {
  //  clear && ./vendor/bin/phpunit tests/Feature/Http/Controllers/Api/User_Can_Get_All_Replies_He_Made_To_Other_Users.php --filter a_user_can_get_all_replies_he_made_to_other_users


          $this->withoutExceptionHandling();
          $this->withoutMiddleware();
          $response = $this->get("http://localhost:8000/api/auth/get_replies_auser_makes");
          $response->assertOk();
   
      } 
}
