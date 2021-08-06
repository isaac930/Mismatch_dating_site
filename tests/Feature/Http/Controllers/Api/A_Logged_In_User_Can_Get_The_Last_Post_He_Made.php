<?php

namespace Tests\Feature\Http\Controllers\Api;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class A_Logged_In_User_Can_Get_The_Last_Post_He_Made extends TestCase
{

  //use RefreshDatabase;

   // clear && ./vendor/bin/phpunit tests/Feature/Http/Controllers/Api/A_Logged_In_User_Can_Get_The_Last_Post_He_Made.php

  /** @test */
  public function a_user_can_get_the_last_post_he_made()
  {
// clear && ./vendor/bin/phpunit tests/Feature/Http/Controllers/Api/A_Logged_In_User_Can_Get_The_Last_Post_He_Made.php --filter a_user_can_get_the_last_post_he_made 
      $this->withoutExceptionHandling();
      $this->withoutMiddleware();
      $response = $this->get("https://powerful-cliffs-24132.herokuapp.com/api/auth/postwith_maxid");
      $response->assertOk();

  } 
}
