<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Library;
use Illuminate\Support\Facades\Hash;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Role;
use App\Models\Member;
use App\Models\MembersLog;
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
        
       

        
        
        $pass=Hash::make("123456789");
        $user=User::upsert(
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
        $library=Library::upsert(
            [
            'name'=>'Mahad',
            'address'=>'Tashkent, Zarqaynar'
            
            ],
            ['name'],
            ['address'=>'Tashkent, Zarqaynar']
        );

        $member=Member::create([
            'name'=>'Мехмон',
            'surename'=>'Китобхон',
            'passport'=>'123456789',
            
        ]);

        $categories=Array(
           ['name'=>'Умумий таълим фанлари'],
           ['name'=>'Мутахассислик фанлари'],
           ['name'=>'Араб тилидаги илмий адабиётлар'],
           ['name'=>'Рус ва инглиз тилларидаги дарсликлар'],
           ['name'=>'Бадиий адабиётлар'],
           ['name'=>'Илмий оммабоп адабиётлар']
            

        );
        foreach($categories as $category){

            Category::upsert(
                $category,
                [
                    "name"    
                ],
                
                   $category
                );
        };
        




        // MembersLog::create(
        //     [
        //         'member_id'=>$member->id,
        //         'user_id'=>$user->id,
        //         'log'=>'created'
        //     ]
        // );
    }
}
