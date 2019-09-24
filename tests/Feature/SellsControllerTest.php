<?php

namespace Tests\Feature;

use App\Sell;
use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SellsControllerTest extends TestCase
{
    public function test_can_view_posted_when_authenticated()
    {
        $user = factory(User::class)->make();
//        dd($user);
        $sell = factory(Sell::class)->create();

        $response = $this->post(route('store_sells_path'), [
            'image'=>'',
            'user_id'=>$sell->user_id,
            'seller'=>$sell->name,
            'contact'=>$sell->contact,
            'title'=>$sell->title,
            'name'=>$sell->name,
            'location'=>$sell->location,
        ]);

//        $response->assertStatus(201);
        $response->assertSuccessful();
        $response->assertRedirect(route('sells_path'));

//        $response=$this->actingAs($user)
//            ->visit(route('store_sells_path'))
//            ->type('fruits','name')
//            ->type('apple','name')
//            ->type('location','location')
//            ->press('ell/market')
//            ->seePageIa(route('sells_path'));
//
//        $response->assertStatus(201);




    }

    public function test_cant_visit_product_when_authenticated()
    {
        $user = factory(User::class)->make();

        $response = $this->actingAs($user)->get(route('sells_products_path'));

        $response->assertRedirect(route('sells_path'));
    }
}
