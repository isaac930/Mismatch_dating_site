<?php

namespace Tests\Feature\Http\Controllers\Api;

use Tests\TestCase;
use App\Models\Profile;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class User_Can_Have_A_Profile extends TestCase
{
  
  //  //use RefreshDatabase;

  //making a test file  php artisan make:test Http/Controllers/Api/User_Can_Have_A_Profile
  
  //executing all the tests in this test class

  //clear && ./vendor/bin/phpunit tests/Feature/Http/Controllers/Api/User_Can_Have_A_Profile.php

  /** @test */
    public function a_user_can_have_a_profile()
    {
      // clear && ./vendor/bin/phpunit tests/Feature/Http/Controllers/Api/User_Can_Have_A_Profile.php --filter a_user_can_have_a_profile
       
      $this->withoutExceptionHandling();
        $this->withoutMiddleware();
        $response = $this->post("https://powerful-cliffs-24132.herokuapp.com/api/auth/profiles",[
          
        'name' => 'kirumira isaac',
        'email' => 'james@gmail.com',
        'image_path' => '123456.jpg',   
        'age' => '20',
        'location' => 'mengo',
        'place_of_birth' => 'mityana',
        'occupation' => 'engineer',
        'likes' => 'prayers',
        'dislikes' => 'alcohol',
        'gender' => 'male',
        'searching_status' => 'single',
        ]);
        $response->assertOk();
    }


      /** @test */
      public function a_user_can_get_other_people_profile()
      {
  // clear && ./vendor/bin/phpunit tests/Feature/Http/Controllers/Api/User_Can_Have_A_Profile.php --filter a_user_can_get_other_people_profile
        
        $this->withoutExceptionHandling();
        $this->withoutMiddleware();
        $response = $this->get("https://powerful-cliffs-24132.herokuapp.com/api/auth/profiles");
        $response->assertOk();
       

      }


       /** @test */
       public function a_user_can_update_his_profile()
       {

        //clear && ./vendor/bin/phpunit tests/Feature/Http/Controllers/Api/User_Can_Have_A_Profile.php --filter a_user_can_update_his_profile

         $this->withoutExceptionHandling();

         $id = Profile::first()->id;
         $this->withoutMiddleware();
         $response = $this->put("https://powerful-cliffs-24132.herokuapp.com/api/auth/profiles/$id",[
           
         'name' => 'kirumira isaac',
         'email' => 'kirumiraisaac@gmail.com',
         'image_path' => '12345645566.jpg',   
         'age' => '39',
         'location' => 'ntebbe',
         'place_of_birth' => 'mityana',
         'occupation' => 'engineer',
         'likes' => 'prayers updated',
         'dislikes' => 'alcohol updated',
         'gender' => 'male',
         'searching_status' => 'single and searching',
         ]);
         $response->assertOk();


       }
          /** @test */
          public function a_user_can_a_profile_for_other_specific_user()
          {

            // clear && ./vendor/bin/phpunit tests/Feature/Http/Controllers/Api/User_Can_Have_A_Profile.php --filter a_user_can_a_profile_for_other_specific_user

            $id = Profile::first()->id;
            $this->withoutExceptionHandling();
            $this->withoutMiddleware();
            $response = $this->get("https://powerful-cliffs-24132.herokuapp.com/api/auth/profiles/$id");
            $response->assertOk();

          }


                   /** @test */
         public function a_user_can_delete_his_profile()
         {

// clear && ./vendor/bin/phpunit tests/Feature/Http/Controllers/Api/User_Can_Have_A_Profile.php --filter a_user_can_delete_his_profile

          $this->withoutExceptionHandling();

          $id = Profile::first()->id;
          $this->withoutMiddleware();
          $response = $this->delete("https://powerful-cliffs-24132.herokuapp.com/api/auth/profiles/$id");

          $response->assertOk();

         }
}
