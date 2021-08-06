<?php

namespace Tests\Feature\Http\Controllers\Api;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class User_Can_Get_HIs_Profile extends TestCase
{
  //use RefreshDatabase;
// clear && ./vendor/bin/phpunit tests/Feature/Http/Controllers/Api/User_Can_Get_HIs_Profile.php
  /** @test */
  public function a_user_can_get_his_profile()
  {
//  clear && ./vendor/bin/phpunit tests/Feature/Http/Controllers/Api/User_Can_Get_HIs_Profile.php --filter a_user_can_get_his_profile
      $this->withoutExceptionHandling();
      $this->withoutMiddleware();
      $response = $this->get("https://powerful-cliffs-24132.herokuapp.com/api/auth/loggedin_user_profile");
      $response->assertOk();

  } 
}
