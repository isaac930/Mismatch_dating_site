<?php

namespace Tests\Feature\Http\Controllers\Api;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class User_Can_Get_Posts_To_Reply_To extends TestCase
{
    //use RefreshDatabase;
    // clear && ./vendor/bin/phpunit tests/Feature/Http/Controllers/Api/User_Can_Get_Posts_To_Reply_To.php


    /** @test */
    public function a_user_can_get_posts_to_reply_to()
    {
//  clear && ./vendor/bin/phpunit tests/Feature/Http/Controllers/Api/User_Can_Get_Posts_To_Reply_To.php --filter a_user_can_get_posts_to_reply_to

        $this->withoutExceptionHandling();
        $this->withoutMiddleware();
        $response = $this->get("http://localhost:8000/api/auth/chats_to_reply_to");
        $response->assertOk();
 
    } 
}
