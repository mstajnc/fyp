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
    	DB::table('users')->insert([
            'username' => 'john',
            'email' => 'manager@example.com',
            'password' => bcrypt('password'),
        ]);

        DB::table('users')->insert([
            'username' => 'helen',
            'email' => 'assistant@example.com',
            'password' => bcrypt('password'),
        ]);

        DB::table('users')->insert([
            'username' => 'admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
        ]);

        DB::table('locations')->insert([
            'location' => 'Moldgreen',
            'allowed_units' => '250', 
        ]);

        DB::table('locations')->insert([
            'location' => 'Leeds',
            'allowed_units' => '600', 
        ]);

        DB::table('locations')->insert([
            'location' => 'Huddersfield',
            'allowed_units' => '400', 
        ]);

        DB::table('contacts')->insert([
            'name' => 'Michael',
            'surname' => 'Smith',  
            'email' => 'smith@gmail.com',
            'phone' => '781111447', 
        ]);

        DB::table('contacts')->insert([
            'name' => 'Jane',
            'surname' => 'Price',  
            'email' => 'price@gmail.com',
            'phone' => '7854327', 
        ]);

        DB::table('contacts')->insert([
            'name' => 'Alan',
            'surname' => 'Hill',  
            'email' => 'hill@gmail.com',
            'phone' => '2535362327', 
        ]);


        DB::table('roles')->insert([
            'name' => 'manager',
            'label' => 'Manager',
        ]);

        DB::table('roles')->insert([
            'name' => 'assistant',
            'label' => 'Assistant',
        ]);

        DB::table('roles')->insert([
            'name' => 'admin',
            'label' => 'Admin',
        ]);

        DB::table('permissions')->insert([
            'name' => 'manage_assets',
            'label' => 'Manage assets',
        ]);

        DB::table('permissions')->insert([
            'name' => 'manage_locations',
            'label' => 'Manage locations',
        ]);

        DB::table('permissions')->insert([
            'name' => 'manage_contacts',
            'label' => 'Manage contacts',
        ]);


        DB::table('permission_role')->insert([
            'permission_id' => 1,
            'role_id' => 1,
        ]);

        DB::table('permission_role')->insert([
            'permission_id' => 2,
            'role_id' => 2,
        ]);

        DB::table('permission_role')->insert([
            'permission_id' => 3,
            'role_id' => 2,
        ]);

        DB::table('permission_role')->insert([
            'permission_id' => 1,
            'role_id' => 3,
        ]);

        DB::table('permission_role')->insert([
            'permission_id' => 2,
            'role_id' => 3,
        ]);

        DB::table('permission_role')->insert([
            'permission_id' => 3,
            'role_id' => 3,
        ]);


        DB::table('role_user')->insert([
            'role_id' => 1,
            'user_id' => 1,
        ]);

        DB::table('role_user')->insert([
            'role_id' => 2,
            'user_id' => 2,
        ]);

        DB::table('role_user')->insert([
            'role_id' => 3,
            'user_id' => 3,
        ]);
        // $this->call(UsersTableSeeder::class);
    }
}
