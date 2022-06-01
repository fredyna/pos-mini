<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->delete();
        DB::table('users')->insert([
            [
                'id'            => 1,
                'email'         => 'admin@example.com',
                'name'          => 'admin',
                'password'      =>  bcrypt('12345'),
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
            ],
        ]);

        DB::table('model_has_roles')->insert([
            [
                'role_id'        => 1,
                'model_type'     => 'App\Models\User',
                'model_id'       => 1
            ],
        ]);
    }
}
