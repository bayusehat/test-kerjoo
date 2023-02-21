<?php

namespace Tests\Feature\Http\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BEControllerTest extends TestCase
{
    use WithFaker;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function it_tests_store()
    {
        $user = factory(User::class)->create();
        $cuti = factory(Cuti::class)->create();
        
        $response = $this->actingAs($user)->post(route('annual.post'), [
            "id_user" => factory(User::class)->create()->id,
            "tgl_mulai" => $this->faker->date,
            "lama_cuti" => $this->faker->numberBetween(1,5),
            "tgl_berakhir" => date('Y-m-d', strtotime('+'.$this->faker->numberBetween(1,5).' days', strtotime($this->faker->date)))
        ]);

        $response->assertStatus(302);

        $response->assertRedirect(route('annual.get'));
    }
}
