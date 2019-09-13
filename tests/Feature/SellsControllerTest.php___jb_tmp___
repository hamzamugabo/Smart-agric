<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SellsControllerTest extends TestCase
{
    public function test_can_visit_home_when_authenticated()
    {
        $user = factory(User::class)->make();
//        dd($user);

        $response = $this->actingAs($user)->post(route('store_sells_path'), [
            'image'=>'',
            'user_id'=>$user->id,
            'seller'=>$user->name,
            'contact'=>$user->contact,
            'title'=>'fruits',
            'name'=>'apple',
            'location'=>'kampala',
        ]);
//        dd($response);

        $response->assertRedirect(route('sells_path'));
        $response->assertStatus(201);


    }

    public function test_cant_visit_product_when_authenticated()
    {
        $user = factory(User::class)->make();

        $response = $this->actingAs($user)->get(route('sells_products_path'));

        $response->assertRedirect(route('sells_path'));
    }
}
