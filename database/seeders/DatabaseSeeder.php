<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\Hash;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Role;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $roles=Array(
            "Admin","Mudir","Kutubxona Mudiri","Kutubxonachi","Talaba"
        );
        foreach($roles as $role){

            Role::upsert(
                [
                    "name"=>$role        
                ],
                [
                    "name"    
                ],
                [
                    "name"=>$role
                ]);
        };

        
        
        
        $pass=Hash::make("123456789");
        User::upsert([
            "email"=>"book@mahad.uz",
            "name"=>"Admin",
            "password"=>$pass,
            "role_id"=>1
        ],
        ["email"],
        [
            
            "name"=>"Admin",
            "password"=>$pass
        ]
        );
    }
}
