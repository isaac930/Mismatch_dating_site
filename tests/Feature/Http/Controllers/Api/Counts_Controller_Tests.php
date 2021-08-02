<?php

namespace Tests\Feature\Http\Controllers\Api;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class Counts_Controller_Tests extends TestCase
{
    //use RefreshDatabase;
    // clear && ./vendor/bin/phpunit tests/Feature/Http/Controllers/Api/Counts_Controller_Tests.php
        /** @test */
        public function admin_can_get_total_number_of_users()
        {
    // clear && ./vendor/bin/phpunit tests/Feature/Http/Controllers/Api/Counts_Controller_Tests.php --filter admin_can_get_total_number_of_users
            $this->withoutExceptionHandling();
            $this->withoutMiddleware();
            $response = $this->get("http://localhost:8000/api/auth/totalusers");
            $response->assertOk();
     
        }

               /** @test */
               public function admin_can_get_total_number_of_successful_profiles()
               {
           // clear && ./vendor/bin/phpunit tests/Feature/Http/Controllers/Api/Counts_Controller_Tests.php --filter admin_can_get_total_number_of_successful_profiles

                   $this->withoutExceptionHandling();
                   $this->withoutMiddleware();
                   $response = $this->get("http://localhost:8000/api/auth/totalsuccessful_profiles");
                   $response->assertOk();
            
               }

        /** @test */
        public function admin_can_get_total_number_of_men()
        {
    // clear && ./vendor/bin/phpunit tests/Feature/Http/Controllers/Api/Counts_Controller_Tests.php --filter admin_can_get_total_number_of_men
            $this->withoutExceptionHandling();
            $this->withoutMiddleware();
            $response = $this->get("http://localhost:8000/api/auth/totalmen");
            $response->assertOk();
     
        }

         /** @test */
         public function admin_can_get_total_number_of_women()
         {
     // clear && ./vendor/bin/phpunit tests/Feature/Http/Controllers/Api/Counts_Controller_Tests.php --filter admin_can_get_total_number_of_women
             $this->withoutExceptionHandling();
             $this->withoutMiddleware();
             $response = $this->get("http://localhost:8000/api/auth/totalwomen");
             $response->assertOk();
      
         }       
           
}
