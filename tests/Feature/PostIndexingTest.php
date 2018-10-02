<?php

namespace Tests\Feature;

use App\Post;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PostIndexingTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function postsInHomeAreShownInLatestOrder()
    {
        // arrange
        // $posts = factory(Post::class, 3)->create();
        $posts = collect([
            factory(Post::class)->create([
                'created_at' => now()->subHours(3)
            ]),
            factory(Post::class)->create([
                'created_at' => now()->subHours(2)
            ]),
            factory(Post::class)->create([
                'created_at' => now()->subHours(3)->subMonths(3)
            ]),
        ]);

        // act
        $response = $this->get(route('posts.index'));
        // assert
        foreach ($posts as $post) {
            // $response->assertSee($post->title);
            $response->assertSee($post->preview);
        }

        $response->assertSeeInOrder($post->orderByDesc('created_at')->pluck('title')->toArray());
    }
}
