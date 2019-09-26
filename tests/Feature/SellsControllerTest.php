<?php

namespace Tests\Feature;

use App\Sell;
use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SellsControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_login_displays_the_login_form()
    {
        $response = $this->get(route('login'));

        $response->assertStatus(200);
        $response->assertViewIs('auth.login');
    }

    public function test_can_login_displays_validation_errors()
    {
        $response = $this->post('/login', []);

        $response->assertStatus(302);
        $response->assertSessionHasErrors('email');
    }

//    public function test_can_view_posted_when_authenticated()
//    {
////        $user = factory(User::class)->make();
////        dd($user);
//        $sell = factory(Sell::class)->make();
////        dd($sell);
//
//        $response = $this->post(route('store_sells_path'), [
//            'title'=>'cereals',
//            'name'=>'beans',
//            'location'=>'kampala',
//            'image'=>'',
//            'user_id'=>$sell->user_id,
//            'seller'=>$sell->name,
//            'contact'=>$sell->contact,
//        ]);
//
//        $response->assertRedirect(route('sells_path'));
////        $response->assertViewIs('market.index');
//
//    }

    public function test_can_visit_product_when_not_authenticated()
    {
        $response = $this->get(route('sells_products_path'));

        $response->assertSuccessful();
        $response->assertViewIs('market.products');
    }
}
