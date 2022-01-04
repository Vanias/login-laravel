<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $user = [
            [
               'name'=>'Teste 1',
               'email'=>'teste@teste.com.br',
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'Teste 2',
               'email'=>'teste2@teste2.com.br',
               'password'=> bcrypt('123456'),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}