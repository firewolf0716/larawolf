<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Models\Admin::create([
            'name' => 'firewolf',
            'email' => 'firewolf@larawolf.com',
            'password' => bcrypt('larawolf@2393051'),
            'is_super' => '1',
        ]);
    }
}
