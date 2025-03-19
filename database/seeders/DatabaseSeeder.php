<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\Hash;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Role;
use App\Models\Member;
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
           
            ["name"=>"Admin","type"=>1],
            ["name"=>"Mudir","type"=>1],
            ["name"=>"Kutubxona Mudiri","type"=>1],
            ["name"=>"Kutubxonachi","type"=>1],
            ["name"=>"Ustoz","type"=>2],
            ["name"=>"Talaba","type"=>2]
        );
        foreach($roles as $role){

            Role::upsert(
                $role,
                [
                    "name"    
                ],
                [
                    "name"=>$role["name"]
                ]);
        };
        
        Member::create([
            'name'=>'Botir',
            'surename'=>'Ismatov'
        ]);

        
        
        $pass=Hash::make("123456789");
        User::upsert(
            [
                "email"=>"book@mahad.uz",
                "name"=>"Admin",
                "password"=>$pass,
                "role_id"=>1
            ],
            [
                "email"
            ],
            [
                "name"=>"Admin",
                "password"=>$pass
            ]
        );
    }
}
