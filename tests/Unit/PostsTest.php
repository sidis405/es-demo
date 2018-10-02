<?php

namespace Tests\Unit;

use App\Post;
use App\User;
use App\Category;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PostsTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function aPostBelongsToACategory()
    {
        // arrange
        $category = factory(Category::class)->create();
        $post = factory(Post::class)->create([
            'category_id' => $category->id
        ]);
        // act
        $post->load('category');
        // assert
        $this->assertInstanceOf(Category::class, $post->category);
        $this->assertEquals($category->id, $post->category->id);
    }

    /** @test */
    public function aPostBelongsToAUser()
    {
        // arrange
        $user = factory(User::class)->create();
        $post = factory(Post::class)->create([
            'user_id' => $user->id
        ]);
        // act
        $post->load('user');
        // assert
        $this->assertInstanceOf(User::class, $post->user);
        $this->assertEquals($user->id, $post->user->id);
    }
}
