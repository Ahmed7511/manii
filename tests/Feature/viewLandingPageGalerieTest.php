<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class viewLandingPageGalerieTest extends TestCase
{
   use RefreshDatabase;
  /** @test */
    
    public function landing_page_loads_correctly()
    {
        //Arrange
        //Act
        $response = $this->get('/login');
     //Assert
        $response->assertStatus(200);
        $response->assertSee('password');
     }

      /** @test */
     public function testRedirectShouldBeOnTheGalerieWhenLoggedIn()
{
   $user = factory(User::class)->create();

    dd($user);

  
}
}
