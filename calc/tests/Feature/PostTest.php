<?php

namespace Tests\Feature;

use App\Post;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class PostTest extends TestCase
{
    use DatabaseTransactions, DatabaseMigrations;

    /**
    *@test
    */
	function it_can_create_archives()
	{
		// given two posts two months apart
		$first = factory(Post::class)->create();
		$second = factory(Post::class)->create([
					'created_at' => Carbon::now()->subMonth()
			]);

		// when i call archives method on post model 
		$post = Post::archives();
		// then  i shall see two posts
		// dd($post);
		// $this->assertEquals([
  //             ['year' => $first->year,
  //             'month' => $first->month,
  //             'published' => 1],

  //             ['year' => $first->year,
  //             'month' => $first->month,
  //             'published' => 1]

		// 	], $post);	
		$this->assertEquals(2, count($post));
	}
}
