<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        $user1 =User::create([
        'name'               => 'walisson sidney ferreira da silva',
        'email'              => 'diretor@federalsistemas.com.br',
        'email_verified_at'  => null,
        'password'           => md5('teste123'),
        'cpf'                => '72186526115'
        ]);
    }
}
