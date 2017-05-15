<?php

namespace Tests\Feature;

use App\Customer;
use App\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class CustomerTest extends TestCase
{
	use DatabaseTransactions;
     /** @test */
	function it_admin_can_add_customer()
	{
		$customer = factory(Customer::class)->make();

		$admin = factory(User::class)->create();

		$admin->add($customer);

		$this->assertEquals(1, $customer->count());	
	}

	 /** @test */
	function it_admin_can_edit_a_customer_details()
	{
		$admin = factory(User::class)->create();

		$customer = factory(Customer::class)->make();
		$admin->add($customer);
		$admin->edit($customer->id, ['name' => 'Acme']);

		$this->assertEquals('Acme', $customer->name);		
	}
}
