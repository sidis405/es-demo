<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PostCreationTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function guestUserCannotSeePostCreationForm()
    {
        // arrange
        $this->withExceptionHandling();

        // act
        $response = $this->get(route('posts.create'));

        // assert
        $response->assertRedirect(route('login'));
        $response->assertStatus(302);
    }

    /** @test */
    public function userCanSeePostCreationForm()
    {
        // arrange
        $this->signIn();

        // act
        $response = $this->get(route('posts.create'));

        // assert
        $response->assertStatus(200);
        $response->assertSee('Create a new post');
    }
}
