<?php

use Illuminate\Database\Seeder;
use App\Cuti;

class CutiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count = 5;
        factory(Cuti::class, $count)->create();
    }
}
