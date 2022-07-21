<?php

namespace Database\Seeders;

use App\Models\Note;
use App\Models\User;
use Faker\Core\Number;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $users = User::factory(1)->create([
            'email' => 'test@test.com',
        ]);

        Note::factory(rand(3, 10))->create([
            'user_id' => $users[0]->id,
        ]);
    }
}
