<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$this->call(PermissionTableSeeder::class);
    	DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123456')
        ]);

        DB::table('role_user')->insert([
            'user_id' => 1,
            'role_id' => 1
        ]);

        for($i=1; $i<=66; $i++){
       		//Administrador
       		DB::table('permission_role')->insert(['permission_id' => $i,'role_id' => '1']); 
       }
    }
}
