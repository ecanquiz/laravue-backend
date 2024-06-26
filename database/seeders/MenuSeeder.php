<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
         Menu::create([ // id 1
            "title" => "Dashboard",
            "menu_id" => null,
            "path" => "dashboard",
            "icon" => "dashboard.svg",
            "sort" => 1
        ]);

        Menu::create([ // id 2
            "title" => "Registrar",
            "menu_id" => null,
            "path" => "#",
            "icon" => "",
            "sort" => 2
        ]);
 
        Menu::create([ // id 3
            "title" => "Admin",
            "menu_id" => null,
            "path" => "#",
            "icon" => "",
            "sort" => 3
        ]);

        Menu::create([ // id 4
            "title" => "Roles",
            "menu_id" => 3,
            "path" => "roles",
            "icon" => "users.svg",
            "sort" => 1
        ]);

        Menu::create([ // id 5
            "title" => "Users",
            "menu_id" => 3,
            "path" => "users",
            "icon" => "user.svg",
            "sort" => 2
        ]);        

        Menu::create([ // id 6
            "title" => "Development",
            "menu_id" => null,
            "path" => "#",
            "icon" => "",
            "sort" => 4
        ]);

        Menu::create([ // id 15
            "title" => "Menus",
            "menu_id" => 6,
            "path" => "menus",
            "icon" => "menus.svg",
            "sort" => 1
        ]);

    }
}

