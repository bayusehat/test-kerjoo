<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Cuti;
use App\User;
use Faker\Generator as Faker;

$factory->define(Cuti::class, function (Faker $faker) use ($factory){
    return [
        'id_user' => factory(User::class)->create()->id,
        'jatah_cuti' => 12,
        'cuti_dipakai' => 0,
        'sisa_cuti_tahun_lalu' => 0,
        'sisa_cuti_tahun_ini' => 0,
        'total_sisa_cuti' => 0
    ];
});
