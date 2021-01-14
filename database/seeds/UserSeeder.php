<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [];
        $users[] = [
            'name' => 'Rahmad Firmansyah',
            'email' => 'fsyah7052@gmail.com',
            'password' => bcrypt('123123'),
            'created_at' => now(),
            'updated_at' => null
        ];
        $users[] = [
            'name' => 'Bambang Gentolet',
            'email' => 'bambang@gmail.com',
            'password' => bcrypt('123123'),
            'created_at' => now(),
            'updated_at' => null
        ];

        DB::table('users')->insert($users);
        $this->command->info("Data Dummy User berhasil diinsert");
    }
}
