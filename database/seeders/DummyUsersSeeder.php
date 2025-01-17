<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userData = [
            [
                'nama' => 'Mas Kurikulum',
                'NIP' => '12345678',
                'user' => 'kurikulum',
                'password' => bcrypt('123456')
            ],
            [
                'nama' => 'Mas guru',
                'NIP' => '87654321',
                'user' => 'guru',
                'password' => bcrypt('123456')
            ]
        ];

        foreach($userData as $key => $val){
            User::create($val);
        }
    }
}
