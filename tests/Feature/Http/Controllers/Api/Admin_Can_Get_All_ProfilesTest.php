<?php

namespace Tests\Feature\Http\Controllers\Api;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class Admin_Can_Get_All_ProfilesTest extends TestCase
{
    //use RefreshDatabase;
    /** @test */
    public function admin_can_get_all_profiles()
    {
// clear && ./vendor/bin/phpunit tests/Feature/Http/Controllers/Api/Admin_Can_Get_All_ProfilesTest.php --filter admin_can_get_all_profiles
        $this->withoutExceptionHandling();
        $this->withoutMiddleware();
        $response = $this->get("https://powerful-cliffs-24132.herokuapp.com/api/auth/allprofiles");
        $response->assertOk();
 
    }
}
