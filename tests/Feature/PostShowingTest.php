<?php

namespace Tests\Feature;

use App\Post;
use App\User;
use App\Category;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PostShowingTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function canShowSinglePost()
    {
        $post = factory(Post::class)->create();

        $response = $this->get(route('posts.show', $post));
        // verificare la presenza dei dati del post
        $response->assertSee($post->title);
        $response->assertSee($post->preview);
        $response->assertSee($post->body);
    }

    /** @test */
    public function postShowsOwnCategory()
    {
        // arrange
        $category = factory(Category::class)->create();
        $post = factory(Post::class)->create([
            'category_id' => $category->id
        ]);
        // act
        $response = $this->get(route('posts.show', $post));
        // assert
        $response->assertSee($category->name);
    }

    /** @test */
    public function postShowsOwnAuthor()
    {
        // arrange
        $user = factory(User::class)->create();
        $post = factory(Post::class)->create([
            'user_id' => $user->id
        ]);
        // act
        $response = $this->get(route('posts.show', $post));
        // assert
        $response->assertSee($user->name);
    }
}
