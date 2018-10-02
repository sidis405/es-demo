<?php

namespace Tests;

use App\User;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    public function setUp()
    {
        parent::setUp();

        $this->withoutExceptionHandling();
    }

    public function signIn($user = null)
    {
        $this->actingAs($user ?? create(User::class));
    }
}
