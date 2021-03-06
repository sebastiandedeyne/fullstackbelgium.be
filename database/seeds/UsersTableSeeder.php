<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        collect([
            'dries.vints@gmail.com',
            'hello@rias.be',
        ])->each(function (string $email) {
            factory(User::class)->create([
                'email' => $email,
            ]);
        });
    }
}
